<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from March 29, 2023, 11:17 am.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 *
 *
 * For paid support options ranging from on-demand,
 * best effort to 24/7 SLAs, please contact us anytime:
 *  ebay.api@InTradeSys.com
 *
 * For more information, visit:
 *  https://sdk.intradesys.com
 */


/**
 * The base response type for the
 * GetSellerDashboard
 * call. This call retrieves seller performance data, including seller standards level, Power Seller status, Buyer
 * Satisfaction status, eBay Search standing, and any seller fee discounts.
 **/
class GetSellerDashboardResponseType extends EbatNs_Response
{
    const TAG = 'GetSellerDashboardResponseType';
    const NAME = 'GetSellerDashboardResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SearchStandingDashboardType|null
     */
    protected $SearchStanding = null;

    /**
     * @var SellerFeeDiscountDashboardType|null
     */
    protected $SellerFeeDiscount = null;

    /**
     * @var PowerSellerDashboardType|null
     */
    protected $PowerSellerStatus = null;

    /**
     * @var PolicyComplianceDashboardType|null
     */
    protected $PolicyCompliance = null;

    /**
     * @var BuyerSatisfactionDashboardType|null
     */
    protected $BuyerSatisfaction = null;

    /**
     * @var SellerAccountDashboardType|null
     */
    protected $SellerAccount = null;

    /**
     * @var PerformanceDashboardType[]|null
     */
    protected $Performance = [];


    /**
     * @return SearchStandingDashboardType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchStanding()
    {
        return $this->_dc($this->SearchStanding, 'SearchStanding');
    }

    /**
     * @param SearchStandingDashboardType|null $value
     * @return void
     */
    public function setSearchStanding($value)
    {
        $this->SearchStanding = $value;
    }

    /**
     * @return SellerFeeDiscountDashboardType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerFeeDiscount()
    {
        return $this->_dc($this->SellerFeeDiscount, 'SellerFeeDiscount');
    }

    /**
     * @param SellerFeeDiscountDashboardType|null $value
     * @return void
     */
    public function setSellerFeeDiscount($value)
    {
        $this->SellerFeeDiscount = $value;
    }

    /**
     * @return PowerSellerDashboardType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPowerSellerStatus()
    {
        return $this->_dc($this->PowerSellerStatus, 'PowerSellerStatus');
    }

    /**
     * @param PowerSellerDashboardType|null $value
     * @return void
     */
    public function setPowerSellerStatus($value)
    {
        $this->PowerSellerStatus = $value;
    }

    /**
     * @return PolicyComplianceDashboardType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPolicyCompliance()
    {
        return $this->_dc($this->PolicyCompliance, 'PolicyCompliance');
    }

    /**
     * @param PolicyComplianceDashboardType|null $value
     * @return void
     */
    public function setPolicyCompliance($value)
    {
        $this->PolicyCompliance = $value;
    }

    /**
     * @return BuyerSatisfactionDashboardType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerSatisfaction()
    {
        return $this->_dc($this->BuyerSatisfaction, 'BuyerSatisfaction');
    }

    /**
     * @param BuyerSatisfactionDashboardType|null $value
     * @return void
     */
    public function setBuyerSatisfaction($value)
    {
        $this->BuyerSatisfaction = $value;
    }

    /**
     * @return SellerAccountDashboardType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerAccount()
    {
        return $this->_dc($this->SellerAccount, 'SellerAccount');
    }

    /**
     * @param SellerAccountDashboardType|null $value
     * @return void
     */
    public function setSellerAccount($value)
    {
        $this->SellerAccount = $value;
    }

    /**
     * @return PerformanceDashboardType[]|PerformanceDashboardType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPerformance($index = null)
    {
        return $this->_dc($index === null
            ? $this->Performance
            : (count($this->Performance) > $index
                ? $this->Performance[$index]
                : null), 'Performance');
    }

    /**
     * @param PerformanceDashboardType|null|PerformanceDashboardType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPerformance($value, $index = null)
    {
        if ($index === null) {
            $this->Performance = $value;
        } else {
            $this->Performance[$index] = [];
            
            foreach ($value as $item) {
                $this->addPerformance($item);
            }
        }
    }

    /**
     * @param PerformanceDashboardType|null $value
     * @return void
     */
    public function addPerformance($value)
    {
        $this->Performance[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SearchStanding' => ['type' => 'SearchStandingDashboardType', 'xmlns' => self::XMLNS],
            'SellerFeeDiscount' => ['type' => 'SellerFeeDiscountDashboardType', 'xmlns' => self::XMLNS],
            'PowerSellerStatus' => ['type' => 'PowerSellerDashboardType', 'xmlns' => self::XMLNS],
            'PolicyCompliance' => ['type' => 'PolicyComplianceDashboardType', 'xmlns' => self::XMLNS],
            'BuyerSatisfaction' => ['type' => 'BuyerSatisfactionDashboardType', 'xmlns' => self::XMLNS],
            'SellerAccount' => ['type' => 'SellerAccountDashboardType', 'xmlns' => self::XMLNS],
            'Performance' => ['type' => 'PerformanceDashboardType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellerDashboardResponseType::_register();
