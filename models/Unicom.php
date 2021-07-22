<?php
namespace app\models;

use linslin\yii2\curl\Curl;
use yii\base\BaseObject;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;


/**
 * /api/v1/offers/?page_size=99999&with_inactive=true&with_info_offer=true&region_id=180185&loan_type=consumer&without_popular_block=true
 * /api/v1/offers/?page_size=10&region_id=180185&only_popular=true&loan_type=debitcard
 * /api/v1/reviews/mfi/#{mfiId}/?page=1&page_size=1
 * /api/v1/seo_pages/?path=/kredity
 *
 * Class Unicom
 * @package app\models
 *
 * @property UnicomPage $page
 * @property UnicomOffer[] $offers
 * @property UnicomOffer[] $offersRecommend
 * @property int $offersCount
 * @property Pagination $pagination
 * @property UnicomReview[] $reviews
 * @property string $title
 * @property string $description
 * @property string $path
 * @property string $loanType
 * @property string $loanName
 * @property array $breadcrumbs
 * @property string $pageTitle
 * @property string $pageDescription
 * @property string $imgPromo
 * @property string $promoColor
 * @property bool $isFilterForm
 * @property bool $isReviews
 * @property bool $isPosts
 * @property bool $isIssue
 *
 */
class Unicom extends BaseObject
{
    const MORTGAGE_LABEL = 'Ипотека';
    const MORTGAGE_ALIAS = 'ipoteka';
    const MORTGAGE_TYPE = 'mortgage';
    const MORTGAGE_IMG = '/img/img-56.jpg';
    const MORTGAGE_COLOR = '#FEEB4F';

    const DEBIT_CARD_LABEL = 'Дебетовые карты';
    const DEBIT_CARD_ALIAS = 'debetovye-karty';
    const DEBIT_CARD_TYPE = 'debitcard';
    const DEBIT_CARD_IMG = '/img/img-49.jpg';
    const DEBIT_CARD_COLOR = '#C4C9DD';

    const CREDIT_CARD_LABEL = 'Кредитные карты';
    const CREDIT_CARD_ALIAS = 'kreditnye-karty';
    const CREDIT_CARD_TYPE = 'creditcard';
    const CREDIT_CARD_IMG = '/img/img-50.jpg';
    const CREDIT_CARD_COLOR = '#DADAE6';

    const QIWI_LABEL = 'Микрозаймы';
    const QIWI_ALIAS = 'mikrozajmy';
    const QIWI_TYPE = 'qiwi';
    const QIWI_IMG = '/img/img-37.jpg';
    const QIWI_COLOR = '#f0f3f6';

    const CONSUMER_LABEL = 'Потребительские кредиты';
    const CONSUMER_ALIAS = 'kredity';
    const CONSUMER_TYPE = 'consumer';
    const CONSUMER_IMG = '/img/img-53.jpg';
    const CONSUMER_COLOR = '#AEB2B3';

    const CARS_LABEL = 'Автокредиты';
    const CARS_ALIAS = 'avtokredity';
    const CARS_TYPE = 'cars';
    const CARS_IMG = '/img/img-52.jpg';
    const CARS_COLOR = '#FDE002;';

    const REFINANCE_LABEL = 'Рефинансирование ';
    const REFINANCE_ALIAS = 'refinance';
    const REFINANCE_TYPE = 'refinance';
    const REFINANCE_IMG = '/img/img-39.jpg';
    const REFINANCE_COLOR = '#f0f3f6';

    public $loanAlias = '';
    public $alias = '';
    public $pageNum = 1;
    public $offerId = 1;

    private $_page;
    private $_offers;
    private $_offersCount;
    private $_offersRecommend;
    private $_pagination;
    private $_reviews;


    public function getPromoColor()
    {
        switch ($this->loanType) {
            case self::MORTGAGE_TYPE : return self::MORTGAGE_COLOR;
            case self::DEBIT_CARD_TYPE : return self::DEBIT_CARD_COLOR;
            case self::CREDIT_CARD_TYPE : return self::CREDIT_CARD_COLOR;
            case self::QIWI_TYPE : return self::QIWI_COLOR;
            case self::CONSUMER_TYPE : return self::CONSUMER_COLOR;
            case self::CARS_TYPE : return self::CARS_COLOR;
            case self::REFINANCE_TYPE : return self::REFINANCE_COLOR;
            default : return '#FFFFFF';
        }
    }

    public function getImgPromo()
    {
        switch ($this->loanType) {
            case self::MORTGAGE_TYPE : return self::MORTGAGE_IMG;
            case self::DEBIT_CARD_TYPE : return self::DEBIT_CARD_IMG;
            case self::CREDIT_CARD_TYPE : return self::CREDIT_CARD_IMG;
            case self::QIWI_TYPE : return self::QIWI_IMG;
            case self::CONSUMER_TYPE : return self::CONSUMER_IMG;
            case self::CARS_TYPE : return self::CARS_IMG;
            case self::REFINANCE_TYPE : return self::REFINANCE_IMG;
            default : return '/img/px.png';
        }
    }

    public function getLoanType()
    {
        switch ($this->loanAlias) {
            case self::MORTGAGE_ALIAS : return self::MORTGAGE_TYPE;
            case self::DEBIT_CARD_ALIAS : return self::DEBIT_CARD_TYPE;
            case self::CREDIT_CARD_ALIAS : return self::CREDIT_CARD_TYPE;
            case self::QIWI_ALIAS : return self::QIWI_TYPE;
            case self::CONSUMER_ALIAS : return self::CONSUMER_TYPE;
            case self::CARS_ALIAS : return self::CARS_TYPE;
            case self::REFINANCE_ALIAS : return self::REFINANCE_TYPE;
            default : return '';
        }
    }

    public function getLoanName()
    {
        switch ($this->loanAlias) {
            case self::MORTGAGE_ALIAS : return self::MORTGAGE_LABEL;
            case self::DEBIT_CARD_ALIAS : return self::DEBIT_CARD_LABEL;
            case self::CREDIT_CARD_ALIAS : return self::CREDIT_CARD_LABEL;
            case self::QIWI_ALIAS : return self::QIWI_LABEL;
            case self::CONSUMER_ALIAS : return self::CONSUMER_LABEL;
            case self::CARS_ALIAS : return self::CARS_LABEL;
            case self::REFINANCE_ALIAS : return self::REFINANCE_LABEL;
            default : return '';
        }
    }

    public function getIsFilterForm()
    {
        switch ($this->loanType) {
            case self::MORTGAGE_TYPE : return true;
            case self::DEBIT_CARD_TYPE : return false;
            case self::CREDIT_CARD_TYPE : return true;
            case self::QIWI_TYPE : return true;
            case self::CONSUMER_TYPE : return true;
            case self::CARS_TYPE : return true;
            case self::REFINANCE_TYPE : return true;
            default : return false;
        }
    }

    public function getIsReviews()
    {
        switch ($this->loanType) {
            case self::MORTGAGE_TYPE : return true;
            case self::DEBIT_CARD_TYPE : return true;
            case self::CREDIT_CARD_TYPE : return true;
            case self::QIWI_TYPE : return false;
            case self::CONSUMER_TYPE : return true;
            case self::CARS_TYPE : return true;
            case self::REFINANCE_TYPE : return true;
            default : return false;
        }
    }

    public function getIsPosts()
    {
        switch ($this->loanType) {
            case self::MORTGAGE_TYPE : return true;
            case self::DEBIT_CARD_TYPE : return true;
            case self::CREDIT_CARD_TYPE : return true;
            case self::QIWI_TYPE : return false;
            case self::CONSUMER_TYPE : return true;
            case self::CARS_TYPE : return true;
            case self::REFINANCE_TYPE : return false;
            default : return false;
        }
    }

    public function getIsIssue()
    {
        switch ($this->loanType) {
            case self::MORTGAGE_TYPE : return true;
            case self::DEBIT_CARD_TYPE : return true;
            case self::CREDIT_CARD_TYPE : return true;
            case self::QIWI_TYPE : return false;
            case self::CONSUMER_TYPE : return true;
            case self::CARS_TYPE : return true;
            case self::REFINANCE_TYPE : return true;
            default : return false;
        }
    }

    public function getBreadcrumbs()
    {
        return ($this->alias === '')
            ? [ $this->page->breadcrumbTitle ]
            : [
                [
                    'label' => $this->loanName,
                    'url' => [
                        'site/offers',
                        'loanAlias' => $this->loanAlias,
                        'page' => 1,
                    ],
                ],
                $this->page->breadcrumbTitle,
            ];
    }

    public function getPageTitle()
    {
        return $this->page->h1;
    }

    public function getPageDescription()
    {
        $out = $this->page->shortContent;
        $out = str_replace('%offer_count%', $this->offersCount, $out);
        return $out;
    }

    public function getTitle()
    {
        $out = str_replace('%offer_count%', $this->offersCount, $this->page->title);
        return $out;
    }

    public function getPath()
    {
        return ($this->alias)
            ? '/' . $this->loanAlias . '/' . $this->alias
            : '/' . $this->loanAlias;
    }

    public function getPage()
    {
        if ($this->_page === null) {
            $curl = new Curl();
            $curl->setGetParams(['path' => $this->path]);
            $data = $curl->get('https://unicom24.ru/api/v1/seo_pages/');
            $data = ArrayHelper::getValue(Json::decode($data), '0');
            $this->_page = new UnicomPage(['data' => $data]);
        }
        return $this->_page;
    }


    public function getReviews()
    {
        if ($this->_reviews === null) {
            $curl = new Curl();
            $curl->setGetParams([
                'page' => 1,
                'page_size' => 3,
                'offer_loan_type' => $this->loanType,
                'min_rating' => 3,
            ]);
            $reviews = $curl->get('https://unicom24.ru/api/v1/reviews/mfi/');
            $reviews = ArrayHelper::getValue(Json::decode($reviews), 'results', []);
            $this->_reviews = [];
            foreach ($reviews as $review) {
                $this->_reviews[] = new UnicomReview(['data' => $review]);
            }
        }
        return $this->_reviews;
    }


    public function getPagination()
    {
        if ($this->_pagination === null) {
            $pagination = new Pagination();
            $pagination->totalCount = $this->offersCount;
            $pagination->defaultPageSize = 10;
            $this->_pagination = $pagination;
        }
        return $this->_pagination;
    }


    public function getOffers()
    {
        if ($this->_offers === null) {
            $this->loadOffers();
        }
        return $this->_offers;
    }


    public function getOffersCount()
    {
        if ($this->_offers === null) {
            $this->loadOffers();
        }
        return $this->_offersCount;
    }


    public function getOffersRecommend()
    {
        if ($this->_offersRecommend === null) {
            $this->loadOffersRecommend();
        }
        return $this->_offersRecommend;
    }

    private function loadOffers()
    {
        $curl = new Curl();
        $curl->setGetParams([
            'page' => $this->pageNum,
            'page_size' => 10,
            'with_inactive' => false,
            'with_info_offer' => true,
            'region_id' => 180185,
            'without_popular_block' => true,
            'only_popular' => false,
            'loan_type' => $this->loanType,
        ]);
        $data = $curl->get('https://unicom24.ru/api/v1/offers/');
        $data = Json::decode($data);
        $this->_offersCount = (int) ArrayHelper::getValue($data, 'count', 0);
        $offers = ArrayHelper::getValue($data, 'results', []);
        $this->_offers = [];
        foreach ($offers as $offer) {
            $this->_offers[] = new UnicomOffer(['data' => $offer]);
        }
    }

    private function loadOffersRecommend()
    {
        $curl = new Curl();
        $curl->setGetParams([
            'page' => 1,
            'page_size' => 10,
            'region_id' => 180185,
            'only_popular' => true,
            'loan_type' => $this->loanType,
        ]);
        $data = $curl->get('https://unicom24.ru/api/v1/offers/');
        $data = Json::decode($data);
        $offers = ArrayHelper::getValue($data, 'results', []);
        $this->_offersRecommend = [];
        foreach ($offers as $offer) {
            $this->_offersRecommend[] = new UnicomOffer(['data' => $offer]);
        }
    }
}