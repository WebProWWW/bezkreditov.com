<?php
namespace app\models;

use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

/**
 * Class UnicomOffer
 * @package app\models
 *
 * @property int $id
 * @property string $finmarketName
 * @property string $finmarketPosition
 * @property string $slug
 * @property string $loanType
 * @property string $logo
 * @property string $roundLogo
 * @property string $approvalTermStr
 * @property string $bankRequirements
 * @property int $benefitPeriod
 * @property string $bonusType
 * @property bool $firstLoanWithoutPercents,
 * @property bool $isActive
 * @property bool $isInfoOffer,
 * @property bool $isInstallment
 * @property bool $isRefV1
 * @property bool $isRefV2
 * @property bool $isShowOnlineApprovingIn
 * @property string $landingUrl
 * @property string $loanRate
 * @property int $maxAge
 * @property string $maxBonus
 * @property string $maxLoanAmount
 * @property string $maxLoanPeriod
 * @property int $maxLoanRate
 * @property int $maxLoanSum
 * @property string $maxLoanTerm
 * @property int $maxTerm
 * @property UnicomMfi $mfi
 * @property int $mfiId
 * @property int $minAge
 * @property string $minInitialFee
 * @property string $minLoanPeriod
 * @property string $minLoanRate
 * @property int $minLoanSum
 * @property string $minRate
 * @property int $minScoringPoints
 * @property int $minTerm
 * @property string $name
 * @property bool $noConversion
 * @property int $okeiUnit
 * @property int $onlineApprovingIn
 * @property bool $onlineDecision
 * @property string $otherBankCashWithdrawal
 * @property string $ownBankCashWithdrawal
 * @property int $positionOnFinmarketPopularBlock
 * @property bool $prolongationPossibility
 * @property array $receiptType
 * @property string $refV1Position
 * @property string $refV2Position
 * @property string $remainingPercentTo
 * @property string $rkoFinmarketDescription
 * @property string $rkoMonthlyPayment
 * @property string $rkoOpenCost
 * @property int $serviceAuto
 * @property string $serviceCostComment
 * @property string $smsNotificationsCost
 * @property string $trafficType
 * @property string $termUnit
 * @property int $loanProbability
 * @property string $rateUnit
 * @property int $conversionRate
 * @property string $certificateOfCb
 * @property array $documentsForIssuance
 * @property string $encryptedRedirectUrl
 * @property string $logoUrl
 * @property string $mfiTitle
 * @property string $minLoanMonthlyPayment
 * @property string $probability
 * @property array $registrationTypes
 * @property array $rkoAdvantages
 * @property bool $doNotShow
 * @property bool $lenderInformation
 * @property string $minLoanPeriodUnit
 *
 */
class UnicomOffer extends BaseObject
{

    public $data;

    private function val($key, $default=null) { return ArrayHelper::getValue($this->data, $key, $default); }

    public function getId() { return $this->val('id'); }
    public function getFinmarketName() { return $this->val('finmarket_name'); }
    public function getFinmarketPosition() { return $this->val('finmarket_position'); }
    public function getSlug() { return $this->val('slug'); }
    public function getLoanType() { return $this->val('loan_type'); }
    public function getLogo() { return $this->val('logo'); }
    public function getRoundLogo() { return $this->val('round_logo'); }
    public function getApprovalTermStr() { return $this->val('approval_term_str'); }
    public function getBankRequirements() { return $this->val('bank_requirements'); }
    public function getBenefitPeriod() { return $this->val('benefit_period'); }
    public function getBonusType() { return $this->val('bonus_type'); }
    public function getFirstLoanWithoutPercents() { return $this->val('first_loan_without_percents'); }
    public function getIsActive() { return $this->val('is_active'); }
    public function getIsInfoOffer() { return $this->val('is_info_offer'); }
    public function getIsInstallment() { return $this->val('is_installment'); }
    public function getIsRefV1() { return $this->val('is_ref_v1'); }
    public function getIsRefV2() { return $this->val('is_ref_v2'); }
    public function getIsShowOnlineApprovingIn() { return $this->val('is_show_online_approving_in'); }
    public function getLandingUrl() { return $this->val('landing_url'); }
    public function getLoanRate() { return $this->val('loan_rate'); }
    public function getMaxAge() { return $this->val('max_age'); }
    public function getMaxBonus() { return $this->val('max_bonus'); }
    public function getMaxLoanAmount() { return $this->val('max_loan_amount'); }
    public function getMaxLoanPeriod() { return $this->val('max_loan_period'); }
    public function getMaxLoanRate() { return $this->val('max_loan_rate'); }
    public function getMaxLoanSum() { return $this->val('max_loan_sum'); }
    public function getMaxLoanTerm() { return $this->val('max_loan_term'); }
    public function getMaxTerm() { return $this->val('max_term'); }
    public function getMfi()
    {
        return new UnicomMfi(['data' => $this->val('mfi')]);
    }
    public function getMfiId() { return $this->val('mfi_id'); }
    public function getMinAge() { return $this->val('min_age'); }
    public function getMinInitialFee() { return $this->val('min_initial_fee'); }
    public function getMinLoanPeriod() { return $this->val('min_loan_period'); }
    public function getMinLoanRate() { return $this->val('min_loan_rate'); }
    public function getMinLoanSum() { return $this->val('min_loan_sum'); }
    public function getMinRate() { return $this->val('min_rate'); }
    public function getMinScoringPoints() { return $this->val('min_scoring_points'); }
    public function getMinTerm() { return $this->val('min_term'); }
    public function getName() { return $this->val('name'); }
    public function getNoConversion() { return $this->val('no_conversion'); }
    public function getOkeiUnit() { return $this->val('okei_unit'); }
    public function getOnlineApprovingIn() { return $this->val('online_approving_in'); }
    public function getOnlineDecision() { return $this->val('online_decision'); }
    public function getOtherBankCashWithdrawal() { return $this->val('other_bank_cash_withdrawal'); }
    public function getOwnBankCashWithdrawal() { return $this->val('own_bank_cash_withdrawal'); }
    public function getPositionOnFinmarketPopularBlock() { return $this->val('position_on_finmarket_popular_block'); }
    public function getProlongationPossibility() { return $this->val('prolongation_possibility'); }
    public function getReceiptType() { return $this->val('receipt_type'); }
    public function getRefV1Position() { return $this->val('ref_v1_position'); }
    public function getRefV2Position() { return $this->val('ref_v2_position'); }
    public function getRemainingPercentTo() { return $this->val('remaining_percent_to'); }
    public function getRkoFinmarketDescription() { return $this->val('rko_finmarket_description'); }
    public function getRkoMonthlyPayment() { return $this->val('rko_monthly_payment'); }
    public function getRkoOpenCost() { return $this->val('rko_open_cost'); }
    public function getServiceAuto() { return $this->val('service_auto'); }
    public function getServiceCostComment() { return $this->val('service_cost_comment'); }
    public function getSmsNotificationsCost() { return $this->val('sms_notifications_cost'); }
    public function getTrafficType() { return $this->val('traffic_type'); }
    public function getTermUnit() { return $this->val('term_unit'); }
    public function getLoanProbability() { return $this->val('loan_probability'); }
    public function getRateUnit() { return $this->val('rate_unit'); }
    public function getConversionRate() { return $this->val('conversion_rate'); }
    public function getCertificateOfCb() { return $this->val('certificate_of_cb'); }
    public function getDocumentsForIssuance() { return $this->val('documents_for_issuance'); }
    public function getEncryptedRedirectUrl() { return $this->val('encrypted_redirect_url'); }
    public function getLogoUrl() { return $this->val('logo_url'); }
    public function getMfiTitle() { return $this->val('mfi_title'); }
    public function getMinLoanMonthlyPayment() { return $this->val('min_loan_monthly_payment'); }
    public function getProbability() { return $this->val('probability'); }
    public function getRegistrationTypes() { return $this->val('registration_types'); }
    public function getRkoAdvantages() { return $this->val('rko_advantages'); }
    public function getDoNotShow() { return $this->val('do_not_show'); }
    public function getLenderInformation() { return $this->val('lender_information'); }
    public function getMinLoanPeriodUnit() { return $this->val('min_loan_period_unit'); }
}