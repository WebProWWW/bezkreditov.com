<?php
namespace app\models;

use app\helpers\StringHelper;
use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

/**
 * Class UnicomPage
 * @package app\models
 *
 * @property int $id
 * @property int $ratingCount
 * @property float $summaryRating
 * @property string $url
 * @property string $title
 * @property string $breadcrumbTitle
 * @property string $description
 * @property string $h1
 * @property string $h2
 * @property string $h3
 * @property string $h4
 * @property string $h5
 * @property string $h6
 * @property string $shortContent
 * @property bool $seoShortContentNoindex
 * @property string $content
 * @property bool $seoContentNoindex
 * @property string $urlCanonical
 * @property string $metaRobotsContent
 * @property string $ogTitle
 * @property string $ogImage
 * @property string $ogDescription
 * @property string $offerFilters
 * @property string $microMarking
 * @property bool $withCityFilter
 * @property string $recommendedKey
 * @property bool $alternativeOffersName
 * @property string $selectedKey
 * @property string $additionalContentComponents
 * @property string $currencyExchangeRateBlockHeader
 * @property string $offerWallReviewsBlockHeader
 * @property string $issueType
 * @property string $seoExpert
 * @property UnicomTag[] $linkingFields
 *
 */
class UnicomPage extends BaseObject
{
    public $data;

    private $_tags;

    private function string(string $key, $default='')
    {
        $val = ArrayHelper::getValue($this->data, $key, $default);
        return StringHelper::replaceUnicom($val);
    }

    private function value(string $key, $default=null)
    {
        return ArrayHelper::getValue($this->data, $key, $default);
    }

    public function getId() { return $this->value('id', 0); }
    public function getRatingCount() { return $this->value('rating_count', 0); }
    public function getSummaryRating() { return $this->value('summary_rating', 0); }
    public function getUrl() { return $this->string('url'); }
    public function getTitle() { return $this->string('title'); }
    public function getBreadcrumbTitle() { return $this->string('breadcrumb_title'); }
    public function getDescription() { return $this->string('description'); }
    public function getH1() { return $this->string('h1'); }
    public function getH2() { return $this->string('h2'); }
    public function getH3() { return $this->string('h3'); }
    public function getH4() { return $this->string('h4'); }
    public function getH5() { return $this->string('h5'); }
    public function getH6() { return $this->string('h6'); }
    public function getShortContent() { return $this->string('short_content'); }
    public function getSeoShortContentNoindex() { return $this->value('seo_short_content_noindex'); }
    public function getContent() { return $this->string('content'); }
    public function getSeoContentNoindex() { return $this->value('seo_content_noindex'); }
    public function getUrlCanonical() { return $this->string('url_canonical'); }
    public function getMetaRobotsContent() { return $this->string('meta_robots_content'); }
    public function getOgTitle() { return $this->string('og_title'); }
    public function getOgImage() { return $this->string('og_image'); }
    public function getOgDescription() { return $this->string('og_description'); }
    public function getOfferFilters() { return $this->value('offer_filters'); }
    public function getMicroMarking() { return $this->string('micro_marking'); }
    public function getWithCityFilter() { return $this->value('with_city_filter'); }
    public function getRecommendedKey() { return $this->string('recommended_key'); }
    public function getAlternativeOffersName() { return $this->value('alternative_offers_name'); }
    public function getSelectedKey() { return $this->string('selected_key'); }
    public function getAdditionalContentComponents() { return $this->value('additional_content_components'); }
    public function getCurrencyExchangeRateBlockHeader() { return $this->string('currency_exchange_rate_block_header'); }
    public function getOfferWallReviewsBlockHeader() { return $this->string('offer_wall_reviews_block_header'); }
    public function getIssueType() { return $this->string('issue_type'); }
    public function getSeoExpert() { return $this->value('seo_expert'); }
    public function getLinkingFields()
    {
        if ($this->_tags === null) {
            $this->_tags = [];
            $fields = $this->value('linking_fields', []);
            foreach ($fields as $data) {
                $this->_tags[] = new UnicomTag(['data' => $data]);
            }
        }
        return $this->_tags;
    }
}