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
 * This type is deprecated.
 **/
class ExpressItemRequirementsType extends EbatNs_ComplexType
{
    const TAG = 'ExpressItemRequirementsType';
    const NAME = 'ExpressItemRequirementsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $SellerExpressEligible = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpressOptOut = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpressApproved = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpressEligibleListingType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpressEnabledCategory = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EligiblePayPalAccount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DomesticShippingCost = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EligibleReturnPolicy = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Picture = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EligibleItemCondition = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PriceAboveMinimum = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PriceBelowMaximum = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EligibleCheckout = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $NoPreapprovedBidderList = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $NoCharity = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CombinedShippingDiscount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShipFromEligibleCountry = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PayPalAccountAcceptsUnconfirmedAddress = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerExpressEligible()
    {
        return $this->_dc($this->SellerExpressEligible === 'true', 'SellerExpressEligible');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSellerExpressEligible($value)
    {
        $this->SellerExpressEligible = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressOptOut()
    {
        return $this->_dc($this->ExpressOptOut === 'true', 'ExpressOptOut');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpressOptOut($value)
    {
        $this->ExpressOptOut = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressApproved()
    {
        return $this->_dc($this->ExpressApproved === 'true', 'ExpressApproved');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpressApproved($value)
    {
        $this->ExpressApproved = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressEligibleListingType()
    {
        return $this->_dc($this->ExpressEligibleListingType === 'true', 'ExpressEligibleListingType');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpressEligibleListingType($value)
    {
        $this->ExpressEligibleListingType = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressEnabledCategory()
    {
        return $this->_dc($this->ExpressEnabledCategory === 'true', 'ExpressEnabledCategory');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpressEnabledCategory($value)
    {
        $this->ExpressEnabledCategory = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEligiblePayPalAccount()
    {
        return $this->_dc($this->EligiblePayPalAccount === 'true', 'EligiblePayPalAccount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEligiblePayPalAccount($value)
    {
        $this->EligiblePayPalAccount = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticShippingCost()
    {
        return $this->_dc($this->DomesticShippingCost === 'true', 'DomesticShippingCost');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDomesticShippingCost($value)
    {
        $this->DomesticShippingCost = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEligibleReturnPolicy()
    {
        return $this->_dc($this->EligibleReturnPolicy === 'true', 'EligibleReturnPolicy');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEligibleReturnPolicy($value)
    {
        $this->EligibleReturnPolicy = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPicture()
    {
        return $this->_dc($this->Picture === 'true', 'Picture');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPicture($value)
    {
        $this->Picture = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEligibleItemCondition()
    {
        return $this->_dc($this->EligibleItemCondition === 'true', 'EligibleItemCondition');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEligibleItemCondition($value)
    {
        $this->EligibleItemCondition = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPriceAboveMinimum()
    {
        return $this->_dc($this->PriceAboveMinimum === 'true', 'PriceAboveMinimum');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPriceAboveMinimum($value)
    {
        $this->PriceAboveMinimum = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPriceBelowMaximum()
    {
        return $this->_dc($this->PriceBelowMaximum === 'true', 'PriceBelowMaximum');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPriceBelowMaximum($value)
    {
        $this->PriceBelowMaximum = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEligibleCheckout()
    {
        return $this->_dc($this->EligibleCheckout === 'true', 'EligibleCheckout');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEligibleCheckout($value)
    {
        $this->EligibleCheckout = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNoPreapprovedBidderList()
    {
        return $this->_dc($this->NoPreapprovedBidderList === 'true', 'NoPreapprovedBidderList');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setNoPreapprovedBidderList($value)
    {
        $this->NoPreapprovedBidderList = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNoCharity()
    {
        return $this->_dc($this->NoCharity === 'true', 'NoCharity');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setNoCharity($value)
    {
        $this->NoCharity = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCombinedShippingDiscount()
    {
        return $this->_dc($this->CombinedShippingDiscount === 'true', 'CombinedShippingDiscount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCombinedShippingDiscount($value)
    {
        $this->CombinedShippingDiscount = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipFromEligibleCountry()
    {
        return $this->_dc($this->ShipFromEligibleCountry === 'true', 'ShipFromEligibleCountry');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShipFromEligibleCountry($value)
    {
        $this->ShipFromEligibleCountry = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalAccountAcceptsUnconfirmedAddress()
    {
        return $this->_dc($this->PayPalAccountAcceptsUnconfirmedAddress === 'true', 'PayPalAccountAcceptsUnconfirmedAddress');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPayPalAccountAcceptsUnconfirmedAddress($value)
    {
        $this->PayPalAccountAcceptsUnconfirmedAddress = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SellerExpressEligible' => ['type' => 'bool'],
            'ExpressOptOut' => ['type' => 'bool'],
            'ExpressApproved' => ['type' => 'bool'],
            'ExpressEligibleListingType' => ['type' => 'bool'],
            'ExpressEnabledCategory' => ['type' => 'bool'],
            'EligiblePayPalAccount' => ['type' => 'bool'],
            'DomesticShippingCost' => ['type' => 'bool'],
            'EligibleReturnPolicy' => ['type' => 'bool'],
            'Picture' => ['type' => 'bool'],
            'EligibleItemCondition' => ['type' => 'bool'],
            'PriceAboveMinimum' => ['type' => 'bool'],
            'PriceBelowMaximum' => ['type' => 'bool'],
            'EligibleCheckout' => ['type' => 'bool'],
            'NoPreapprovedBidderList' => ['type' => 'bool'],
            'NoCharity' => ['type' => 'bool'],
            'CombinedShippingDiscount' => ['type' => 'bool'],
            'ShipFromEligibleCountry' => ['type' => 'bool'],
            'PayPalAccountAcceptsUnconfirmedAddress' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ExpressItemRequirementsType::_register();
