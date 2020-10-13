<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 05/12/2019 04:44
 */

namespace app\models;

use linslin\yii2\curl\Curl;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use Exception;

/**
 * Class Fssp
 * @package app\models
 */
class Fssp extends Model
{
    const SCENARIO_SEARCH = 'search';
    const SCENARIO_RESULT = 'result';
    const SCENARIO_STATUS = 'status';

    public $region;
    public $firstname;
    public $lastname;
    public $secondname;
    public $birthdate;
    public $response;
    public $task;
    public $email;
    public $phone;

    // токен Роман
    // private $token = 'WMglCqPhp9yH';
    // токен Мой
    private $token = 'wOSgYJigqTC2';
    private $api = 'https://api-ip.fssprus.ru/api/v1.0';

    /**
     * @inheritDoc
     */
    public function formName()
    {
        return '';
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        return ArrayHelper::merge($scenarios, [
            self::SCENARIO_SEARCH => ['region', 'lastname', 'firstname', 'secondname'],
            self::SCENARIO_RESULT => ['task'],
            self::SCENARIO_STATUS => ['task'],
        ]);
    }

    public function attributeLabels()
    {
        return [
            'region' => 'Регион',
            'lastname' => 'Фамилия',
            'firstname' => 'Имя',
            'secondname' => 'Отчество',
            'birthdate' => 'Дата рождения',
            'task' => 'Задача'
        ];
    }

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [

            [['region', 'firstname', 'lastname', 'birthdate'], 'required', 'on' => self::SCENARIO_SEARCH],
            [['task'], 'required', 'on' => self::SCENARIO_RESULT],
            [['task'], 'required', 'on' => self::SCENARIO_STATUS],
            [['firstname', 'lastname', 'secondname', 'birthdate', 'email', 'phone', 'task'], 'string'],
            [['firstname', 'lastname', 'secondname', 'birthdate', 'email', 'phone'], 'trim'],
            [['region'], 'integer'],
        ];
    }

    public function sendMail()
    {

    }

    /**
     * @return bool
     * @throws NotFoundHttpException
     */
    public function searchPhysical()
    {
        $this->scenario = self::SCENARIO_SEARCH;
        if ($this->validate()) {
            $this->response = $this->apiGet('/search/physical', [
                'token' => $this->token,
//                'region' => 34,
//                'firstname' => 'АЛЕКСЕЙ',
//                'lastname' => 'СОНИН',
//                'secondname' => 'ВИКТОРОВИЧ',
//                'birthdate' => '21.12.1985',

                'region'      => $this->region,
                'firstname'   => $this->firstname,
                'lastname'    => $this->lastname,
                'secondname'  => $this->secondname,
                'birthdate'   => $this->birthdate,
            ]);
            return true;
        }
        return false;
    }

    /**
     * @return bool
     * @throws NotFoundHttpException
     */
    public function result()
    {
        $this->scenario = self::SCENARIO_RESULT;
        if ($this->validate()) {
            $this->response = $this->apiGet('/result', [
                'token' => $this->token,
                'task' => $this->task,
            ]);
            return true;
        }
        return false;
    }

    /**
     * @return bool
     * @throws NotFoundHttpException
     */
    public function status()
    {
        $this->scenario = self::SCENARIO_STATUS;
        if ($this->validate()) {
            $this->response = $this->apiGet('/status', [
                'token' => $this->token,
                'task' => $this->task,
            ]);
            return true;
        }
        return false;
    }

    /**
     * @param string $action
     * @param array $params
     * @return array
     * @throws NotFoundHttpException
     */
    private function apiGet($action='', $params=[])
    {
        $action = $this->api . $action;
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
}

/**/