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
 *
 */
class Unicom extends BaseObject
{
    public $path = '';
    public $loanType = '';
    public $pageNum = 1;

    private $_page;
    private $_offers;
    private $_offersCount;
    private $_offersRecommend;
    private $_pagination;
    private $_reviews;

    /**
     * @return UnicomPage
     */
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

    /**
     * @return Pagination
     */
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

    /**
     * @return UnicomOffer[]
     */
    public function getOffers()
    {
        if ($this->_offers === null) {
            $this->loadOffers();
        }
        return $this->_offers;
    }

    /**
     * @return int
     */
    public function getOffersCount()
    {
        if ($this->_offers === null) {
            $this->loadOffers();
        }
        return $this->_offersCount;
    }

    /**
     * @return UnicomOffer[]
     */
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
            'with_inactive' => true,
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