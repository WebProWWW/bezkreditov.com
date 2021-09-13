<?php
namespace app\models;

use linslin\yii2\curl\Curl;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\BaseObject;
use stdClass;

/**
 * @property $offers
 * @property $userpwd
 */
class PageUnicom extends BaseObject implements PageInterface
{

    private $_page;
    private $_category;

    public function __construct($config = [])
    {
        $this->_page = ArrayHelper::getValue($config, 'page', 1);
        $this->_category = ArrayHelper::getValue($config, 'category', 'index');
        parent::__construct($config);
    }

    public function getView(): string
    {
        return 'unicom-'.$this->_category;
    }

//    private $_offers;
//    public function getOffers()
//    {
//        if ($this->_offers === null) {
//            $curl = new Curl();
//            $curl->setHeaders(['Content-Type' => 'application/json']);
//            $curl->setOption(CURLOPT_USERPWD, $this->userpwd);
//            $data = $curl->get('https://unicom24.ru/api/universal/v1/doc/');
//            $data = Json::decode($data);
//            $this->_offers = ArrayHelper::getValue($data, 'offers');
//        }
//        return $this->_offers;
//    }
//
//    /**
//     * @deprecated
//     */
//    public function saveOffer($id)
//    {
//        $curl = new Curl();
//        $curl->setHeaders(['Content-Type' => 'application/json']);
//        $curl->setOption(CURLOPT_USERPWD, $this->userpwd);
//        $url = "https://unicom24.ru/api/universal/v1/doc/offer/{$id}/";
//        $data = $curl->get($url);
//        $data = Json::decode($data);
//        $conditions = ArrayHelper::getValue($data, 'offer.conditions', []);
//        $minLoanAmount = $this->explodeCondition($conditions, 0);
//        $maxLoanAmount = $this->explodeCondition($conditions, 1);
//        $minLoanTerm = $this->explodeCondition($conditions, 2);
//        $maxLoanTerm = $this->explodeCondition($conditions, 3);
//        $minAge = $this->explodeCondition($conditions, 4);
//        $maxAge = $this->explodeCondition($conditions, 5);
//        $minScore = $this->explodeCondition($conditions, 6);
//        $maxScore = $this->explodeCondition($conditions, 7);
//        $offer = new UnicomOffer();
//        $offer->load([
//            'offer_id' => ArrayHelper::getValue($data, 'offer.id'),
//            'name' => ArrayHelper::getValue($data, 'offer.name'),
//            'logo' => ArrayHelper::getValue($data, 'offer.logo'),
//            'mobile_logo' => ArrayHelper::getValue($data, 'offer.mobile_logo'),
//            'description' => Html::encode(ArrayHelper::getValue($data, 'offer.description')),
//            'offer_description' => Html::encode(ArrayHelper::getValue($data, 'offer.offer_description')),
//            'form_description' => Html::encode(ArrayHelper::getValue($data, 'offer.form_description')),
//            'about_company' => Html::encode(ArrayHelper::getValue($data, 'offer.about_company')),
//            'created' => ArrayHelper::getValue($data, 'offer.created'),
//            'loan_type' => ArrayHelper::getValue($data, 'offer.loan_type'),
//            'traffic_type' => ArrayHelper::getValue($data, 'offer.traffic_type'),
//            'min_loan_amount_label' => $minLoanAmount->label,
//            'min_loan_amount' => $minLoanAmount->value,
//            'max_loan_amount_label' => $maxLoanAmount->label,
//            'max_loan_amount' => $maxLoanAmount->value,
//            'min_loan_term_label' => $minLoanTerm->label,
//            'min_loan_term' => $minLoanTerm->value,
//            'max_loan_term_label' => $maxLoanTerm->label,
//            'max_loan_term' => $maxLoanTerm->value,
//            'min_age_label' => $minAge->label,
//            'min_age' => $minAge->value,
//            'max_age_label' => $maxAge->label,
//            'max_age' => $maxAge->value,
//            'min_score_label' => $minScore->label,
//            'min_score' => $minScore->value,
//            'max_score_label' => $maxScore->label,
//            'max_score' => $maxScore->value,
//        ], '');
//        $status = $offer->save() ? 'OK' : 'ERROR';
//        return [
//            'id' => $offer->id,
//            'offer_id' => $offer->offer_id,
//            'name' => $offer->name,
//            'status' => $status,
//            'errors' => $offer->errors,
//        ];
//    }
//
//    private function explodeCondition($conditions, $key)
//    {
//        $itemArr = explode(':', ArrayHelper::getValue($conditions, $key));
//        $label = trim(ArrayHelper::getValue($itemArr, '0'));
//        $value = (int) trim(ArrayHelper::getValue($itemArr, '1'));
//        $obj = new stdClass();
//        $obj->value = $value;
//        $obj->label = $label;
//        return $obj;
//    }
//
//    protected function getUserpwd()
//    {
//        return 'bezkreditov@bezkreditov.com:3MKuz04k';
//    }

}