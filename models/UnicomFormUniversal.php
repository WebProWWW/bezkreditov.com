<?php
namespace app\models;

use linslin\yii2\curl\Curl;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Class UnicomFormUniversal
 * @package app\models
 *
 * @property array $inputs
 * @property mixed response
 *
 */
class UnicomFormUniversal extends Model
{
    public $offer;
    public $surname;
    public $name;
    public $patronymic;
    public $passport;
    public $mobile_phone;
    public $email;
    public $credit_sum;
    public $locality;
    public $fact_locality;
    public $passport_code;
    public $passport_date;
    public $birth_date;
    public $birth_place;
    public $job;
    public $job_address;
    public $job_phone;
    public $job_position;
    public $job_salary;
    public $street;
    public $house;
    public $fact_street;
    public $fact_house;
    public $sub_id;
    public $click_id;
    public $external_id;

    private $_login = 'bezkreditov@bezkreditov.com';
    private $_password = '3MKuz04k';
    private $_response;

    public function send()
    {
        if (!$this->validate()) {
            return false;
        }
        $data = Json::encode([
            'offer' => 2001393,// 2000916,
            'surname' => $this->surname,
            'name' => $this->name,
            'patronymic' => $this->patronymic,
            'passport' => $this->passport,
            'mobile_phone' => $this->mobile_phone,
            'email' => $this->email,
            'credit_sum' => $this->credit_sum,
            'locality' => 180185, // $this->locality,
            'fact_locality' => 180185, //$this->fact_locality,
            'passport_code' => $this->passport_code,
            'passport_date' => $this->passport_date,
            'birth_date' => $this->birth_date,
            'birth_place' => $this->birth_place,
            'job' => $this->job,
            'job_address' => $this->job_address,
            'job_phone' => $this->job_phone,
            'job_position' => $this->job_position,
            'job_salary' => $this->job_salary,
            'street' => 'ул. Ленина', // $this->street,
            'house' => 10, // $this->house,
            'fact_street' => 'ул. Ленина', // $this->fact_street,
            'fact_house' => 10, // $this->fact_house,
            'sub_id' => '0xff',
            'click_id' => '0xff',
            'external_id' => '2f2f3',
        ]);
        $curl = new Curl();
        $curl->setRawPostData($data);
        $curl->setOption(CURLOPT_USERPWD, $this->_login . ":" . $this->_password);
        $curl->setOption(CURLOPT_SSL_VERIFYPEER , false);
        $curl->setHeaders([
            'Content-Type' => 'application/json',
            'Content-Length' => strlen($data),
        ]);
        $this->_response = $curl->post('https://unicom24.ru/api/universal/v1/');
        return true;
    }

    public function getResponse()
    {
        return $this->_response;
    }

    public function rules()
    {
        return [
            [['offer'], 'safe'],
            [[
                'name',
                'surname',
                'patronymic',
                'passport',
                'mobile_phone',
                'credit_sum',
                'birth_date',
                //'birth_place',
                'locality',
            ],'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patronymic' => 'Отчество',
            'passport' => 'Серия и номер паспорта',
            'mobile_phone' => 'Телефон',
            //'email' => 'Email',
            'credit_sum' => 'Необходимая сумма',
            // 'passport_code' => 'Код подразделения выдавшего паспорт',
            // 'passport_date' => 'Дата выдачи паспорта',
            'birth_date' => 'Дата рождения',
            'birth_place' => 'Место рождения',
            'locality' => 'Город проживания',
        ];
    }

    public function getInputs()
    {
        return [
//            'offer' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
            'credit_sum' => [
                'label' => $this->getAttributeLabel('credit_sum'),
                'type' => 'slider',
                'value' => '',
                'error' => '',
            ],
            'surname' => [
                'label' => $this->getAttributeLabel('surname'),
                'type' => 'text',
                'value' => '',
                'error' => '',
            ],
            'name' => [
                'label' => $this->getAttributeLabel('name'),
                'type' => 'text',
                'value' => '',
                'error' => '',
            ],
            'patronymic' => [
                'label' => $this->getAttributeLabel('patronymic'),
                'type' => 'text',
                'value' => '',
                'error' => '',
            ],
            'mobile_phone' => [
                'label' => $this->getAttributeLabel('mobile_phone'),
                'type' => 'phone',
                'value' => '',
                'error' => '',
            ],
//            'birth_place' => [
//                'label' => $this->getAttributeLabel('birth_place'),
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
            'locality' => [
                'label' => $this->getAttributeLabel('locality'),
                'type' => 'text',
                'value' => '',
                'error' => '',
            ],
            'birth_date' => [
                'label' => $this->getAttributeLabel('birth_date'),
                'type' => 'text',
                'value' => '',
                'error' => '',
            ],
            'passport' => [
                'label' => $this->getAttributeLabel('passport'),
                'type' => 'text',
                'value' => '',
                'error' => '',
            ],
//            'email' => [
//                'label' => $this->getAttributeLabel('email'),
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'locality' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'fact_locality' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'passport_code' => [
//                'label' => $this->getAttributeLabel('passport_code'),
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'passport_date' => [
//                'label' => $this->getAttributeLabel('passport_date'),
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'job' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'job_address' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'job_phone' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'job_position' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'job_salary' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'street' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'house' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'fact_street' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'fact_house' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'sub_id' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'click_id' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
//            'external_id' => [
//                'label' => '',
//                'type' => 'text',
//                'value' => '',
//                'error' => '',
//            ],
        ];
    }
}