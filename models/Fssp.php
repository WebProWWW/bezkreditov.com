<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use Yii;
use Exception;
use Throwable;

use linslin\yii2\curl\Curl;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;

/**
 * Class Fssp
 * @package app\models
 *
 * @property integer $id
 * @property integer $created
 * @property integer $status
 * @property string $search_scenario
 * @property string $task
 * @property integer $region Номер региона
 * @property string $firstname Имя физического лица
 * @property string $secondname Отчество физического лица
 * @property string $lastname Фамилия физического лица
 * @property string $birthdate Дата рождения физического лица, в формате dd.mm.YYYY
 * @property string $name Имя юридического лица
 * @property string $address Адрес юридического лица
 * @property string $number Номер исполнительного производства в формате n…n/yy/dd/rr или n…n/yy/ddddd-ИП
 * @property string $email
 * @property string $phone
 *
 * @property string $regionName getRegionName
 *
 */
class Fssp extends ActiveRecord
{
    const SCENARIO_A = 'searchTypeA';
    const SCENARIO_B = 'searchTypeB';
    const SCENARIO_C = 'searchTypeC';
    public $searchType; // A | B | C
    private $_token = 'WMglCqPhp9yH'; // токен Роман
    //private $_token = 'wOSgYJigqTC2'; // токен Мой
    private $_api = 'https://api-ip.fssprus.ru/api/v1.0';
    // SendPulse
    private $_spId = 'dbfac1281991f1e3e4f6a069ed592d27';
    private $_spSecret = '2de1513fb979132484cad375f018e67c';
    private $_spBookId = 1075435;

    /**
     * @inheritDoc
     */
    public static function tableName()
    {
        return 'fssp';
    }

    /**
     * @inheritDoc
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        return ArrayHelper::merge($scenarios, [
            self::SCENARIO_A => ['searchType','region','firstname','secondname','lastname','birthdate','email','phone'],
            self::SCENARIO_B => ['searchType','region','name','address','email','phone'],
            self::SCENARIO_C => ['searchType','number','email','phone'],
        ]);
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'searchType' => 'База поиска',
            'region' => 'Регион',
            'firstname' => 'Имя',
            'secondname' => 'Отчество',
            'lastname' => 'Фамилия',
            'birthdate' => 'Дата рождения',
            'name' => 'Наименование предприятия',
            'address' => 'Адрес предприятия - должника',
            'number' => 'Номер исполнительного производства',
            'email' => 'E-mail',
            'phone' => 'Телефон',
        ];
    }

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            [['searchType','region','firstname','lastname','name','number','email'], 'required'],
            [['searchType','region','firstname','secondname','lastname','birthdate','name','address','number','email','phone'], 'trim'],
            [['searchType','firstname','secondname','lastname','birthdate','name','address','number','phone'], 'string'],
            [['region'], 'integer'],
            [['email'], 'email'],
        ];
    }

    /**
     * @return bool
     * @throws NotFoundHttpException
     */
    public function createTask()
    {
        if (!$this->validate()) return false;
        $this->task = $this->search();
        $this->search_scenario = $this->scenario;
        $this->created = time();
        return $this->save();
    }

    /**
     * @return string
     * @throws NotFoundHttpException
     */
    private function search()
    {
        $response = [];
        if ($this->scenario === self::SCENARIO_A) {
            $query = [
                'region' => $this->region,
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
            ];
            if ($this->secondname) $query['secondname'] = $this->secondname;
            if ($this->birthdate) $query['birthdate'] = $this->birthdate;
            $response = $this->apiGet('/search/physical', $query);
        }
        elseif ($this->scenario === self::SCENARIO_B) {
            $query = [
                'region' => $this->region,
                'name' => $this->name,
            ];
            if ($this->address) $query['address'] = $this->address;
            $response = $this->apiGet('/search/legal', $query);
        }
        elseif ($this->scenario === self::SCENARIO_C) {
            $response = $this->apiGet('/search/ip', [
                'number' => $this->number,
            ]);
        }
        if ($task = ArrayHelper::getValue($response, 'response.task', false)) {
            return $task;
        }
        throw new NotFoundHttpException();
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getRegionName()
    {
        return ArrayHelper::getValue(self::regions(), $this->region, '-');
    }

    /**
     * @return string
     * @throws NotFoundHttpException
     */
    public function doTask()
    {
        $response = $this->apiGet('/status', ['task' => $this->task]);
        $status = ArrayHelper::getValue($response, 'response.status');
        if ($status === 0 || $status === 3) {
            return $this->sendResult();
        }
        return "PROGRESS: " . $this->task;
    }

    /**
     * @return string
     * @throws NotFoundHttpException
     */
    private function sendResult()
    {
        $response = $this->apiGet('/result', [ 'task' => $this->task ]);
        $status = ArrayHelper::getValue($response, 'response.status');
        if ($status === 0 || $status === 3) {
            $result = ArrayHelper::getValue($response, 'response.result', []);
            $isSent = Yii::$app->mailer->compose('fssp', [
                'model' => $this,
                'result' => $result,
            ])
                ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
                ->setTo($this->email)
                ->setSubject('Отчёт о проверке задолженности перед ФССП')
                ->send();
            if ($isSent) {
                try {
                    $sp = new ApiClient($this->_spId, $this->_spSecret, new FileStorage());
                    $sp->addEmails($this->_spBookId, [[
                        'email' => $this->email,
                        'variables' => [
                            'Phone' => $this->phone,
                            'имя' => $this->firstname,
                            'Регион' => $this->regionName,
                            'Отчество' => $this->secondname,
                            'Фамилия' => $this->lastname,
                            'Дата рождения' => $this->birthdate,
                            'Наименование предприятия' => $this->name,
                            'Адрес предприятия - должника' => $this->address,
                            'Номер исполнительного производства' => $this->number,
                            'Результат ФССП' => $this->concatResult($result),
                        ],
                    ]]);
                } catch (Exception $e) {}
                try {
                    $this->delete();
                } catch (Throwable $e) {}
            }
            return "OK: " . $this->task;
        }
        return "ERR: " . $this->task;
    }

    /**
     * @param array $result
     * @return string
     */
    private function concatResult(array &$result)
    {
        $out = '';
        foreach ($result as $item) {
            $itemResult = ArrayHelper::getValue($item, 'result', []);
            foreach ($itemResult as $ri) {
                $out .= ' ::: ' . ArrayHelper::getValue($ri, 'subject', '-');
            }
        }
        return $out;
    }

    /**
     * @return string
     */
    public static function doTasks()
    {
        /* @var $items Fssp[] */
        /* @var $newItems Fssp[] */
        $out = '';
        self::deleteAll([ '<=', 'created', time()-(3600*23) ]);
        if ($items = self::find()->where(['not',['task' => null]])->all()) {
            foreach ($items as $item) {
                try {
                    $out .= "\n" . $item->doTask();
                }
                catch (NotFoundHttpException $e) {
                    $out .= "\n" . $e->getMessage();
                }
            }
        }
        return $out;
    }

    /**
     * @param string $action
     * @param array $params
     * @return array
     * @throws NotFoundHttpException
     */
    private function apiGet(string $action, $params=[])
    {
        $params = ArrayHelper::merge(['token' => $this->_token], $params);
        $action = $this->_api . $action;
        $curl = new Curl();
        $curl->setGetParams($params);
        try {
            $curl->get($action);
        } catch (Exception $e) {
            $msg = 'Ошибка запроса API';
            if (YII_DEBUG) $msg =  $msg . $e->getMessage();
            throw new NotFoundHttpException($msg);
        }
        if ($curl->responseCode !== 200)
            throw new NotFoundHttpException('Ошибка ответа API');
        $response = Json::decode($curl->response);
        if (ArrayHelper::getValue($response, 'code') !== 0) {
            $msg = 'Ошибка ответа API code';
            $msgEx = ArrayHelper::getValue($response,'exception', '');
            if (YII_DEBUG) $msg = $msg . ' ' . $msgEx;
            throw new NotFoundHttpException($msg);
        }
        return $response;
    }

    /**
     * @param int $code
     * @return string
     */
    public static function regionName(int $code)
    {
        return ArrayHelper::getValue(self::regions(), $code, '-');
    }

    /**
     * @return string[]
     */
    public static function regions()
    {
        return [
            1 => 'Республике Адыгея',
            2 => 'Республике Башкортостан',
            3 => 'Республике Бурятия',
            4 => 'Республике Алтай',
            5 => 'Республике Дагестан',
            6 => 'Республике Ингушетия',
            7 => 'Кабардино-Балкарской Республике',
            8 => 'Республике Калмыкия',
            9 => 'Карачаево-Черкесской Республике ',
            10 => 'Республике Карелия',
            11 => 'Республике Коми',
            12 => 'Республике Марий Эл',
            13 => 'Республике Мордовия',
            14 => 'Республике Саха (Якутия)',
            15 => 'Республике Северная Осетия – Алания',
            16 => 'Республике Татарстан',
            17 => 'Республике Тыва',
            18 => 'Удмуртской Республике',
            19 => 'Республике Хакасия',
            20 => 'Чеченской Республике',
            21 => 'Чувашской Республике',
            22 => 'Алтайскому краю',
            23 => 'Краснодарскому краю',
            24 => 'Красноярскому краю',
            25 => 'Приморскому краю',
            26 => 'Ставропольскому краю',
            27 => 'Хабаровскому краю и Еврейской АО',
            28 => 'Амурской области',
            29 => 'Архангельской области и Ненецкому АО',
            30 => 'Астраханской области',
            31 => 'Белгородской области',
            32 => 'Брянской области',
            33 => 'Владимирской области',
            34 => 'Волгоградской области',
            35 => 'Вологодской области',
            36 => 'Воронежской области',
            37 => 'Ивановской области',
            38 => 'Иркутской области',
            39 => 'Калининградской области',
            40 => 'Калужской области',
            41 => 'Камчатскому краю и Чукотскому АО',
            42 => 'Кемеровской области',
            43 => 'Кировской области',
            44 => 'Костромской области',
            45 => 'Курганской области',
            46 => 'Курской области',
            47 => 'Ленинградской области',
            48 => 'Липецкой области',
            49 => 'Магаданской области',
            50 => 'Московской области',
            51 => 'Мурманской области',
            52 => 'Нижегородской области',
            53 => 'Новгородской области',
            54 => 'Новосибирской области',
            55 => 'Омской области',
            56 => 'Оренбургской области',
            57 => 'Орловской области',
            58 => 'Пензенской области',
            59 => 'Пермскому краю',
            60 => 'Псковской области',
            61 => 'Ростовской области',
            62 => 'Рязанской области',
            63 => 'Самарской области',
            64 => 'Саратовской области',
            65 => 'Сахалинской области',
            66 => 'Свердловской области',
            67 => 'Смоленской области',
            68 => 'Тамбовской области',
            69 => 'Тверской области',
            70 => 'Томской области',
            71 => 'Тульской области',
            72 => 'Тюменской области',
            73 => 'Ульяновской области',
            74 => 'Челябинской области',
            75 => 'Забайкальскому краю',
            76 => 'Ярославской области',
            77 => 'Москве',
            78 => 'Санкт-Петербургу',
            82 => 'Республике Крым',
            86 => 'Ханты-Мансийскому АО – Югре',
            89 => 'Ямало-Ненецкому АО',
            92 => 'Севастополю',
        ];
    }

}

/**/