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
 * This call enables a seller to create and manage shipping discounts rules. These are the same shipping discount
 * rules that can be created or managed in My eBay Shipping Preferences.
 * 
 * The types of shipping discount rules that can be created and managed with this call include flat-rate
 * shipping rules, calculated shipping rules, and promotional shipping rules. This call can also be used by sellers
 * to set whether or not they allow buyers to combine separate line items into one Combined Invoice order, and how
 * many days they allow buyers to perform that action.
 * 
 * A seller can only create, update, or delete one discount rule type with each call. The action to take (either
 * <code>Add</code>, <code>Update</code>, or <code>Delete</code>) is set and controlled with the
 * ModifyActionCode
 * field.
 **/
class SetShippingDiscountProfilesRequestType extends AbstractRequestType
{
    const TAG = 'SetShippingDiscountProfilesRequest';
    const NAME = 'SetShippingDiscountProfilesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetShippingDiscountProfiles';

    /**
     * @var CurrencyCodeType|null
     */
    protected $CurrencyID = null;

    /**
     * @var CombinedPaymentPeriodCodeType|null
     */
    protected $CombinedDuration = null;

    /**
     * @var ModifyActionCodeType|null
     */
    protected $ModifyActionCode = null;

    /**
     * @var FlatShippingDiscountType|null
     */
    protected $FlatShippingDiscount = null;

    /**
     * @var CalculatedShippingDiscountType|null
     */
    protected $CalculatedShippingDiscount = null;

    /**
     * @var CalculatedHandlingDiscountType|null
     */
    protected $CalculatedHandlingDiscount = null;

    /**
     * @var PromotionalShippingDiscountDetailsType|null
     */
    protected $PromotionalShippingDiscountDetails = null;

    /**
     * @var ShippingInsuranceType|null
     */
    protected $ShippingInsurance = null;

    /**
     * @var ShippingInsuranceType|null
     */
    protected $InternationalShippingInsurance = null;


    /**
     * @return CurrencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrencyID()
    {
        return $this->_dc($this->CurrencyID);
    }

    /**
     * @param CurrencyCodeType|null $value
     * @return void
     */
    public function setCurrencyID($value)
    {
        $this->CurrencyID = $this->_enum($value, CurrencyCodeType::class);
    }

    /**
     * @return CombinedPaymentPeriodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCombinedDuration()
    {
        return $this->_dc($this->CombinedDuration);
    }

    /**
     * @param CombinedPaymentPeriodCodeType|null $value
     * @return void
     */
    public function setCombinedDuration($value)
    {
        $this->CombinedDuration = $this->_enum($value, CombinedPaymentPeriodCodeType::class);
    }

    /**
     * @return ModifyActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModifyActionCode()
    {
        return $this->_dc($this->ModifyActionCode);
    }

    /**
     * @param ModifyActionCodeType|null $value
     * @return void
     */
    public function setModifyActionCode($value)
    {
        $this->ModifyActionCode = $this->_enum($value, ModifyActionCodeType::class);
    }

    /**
     * @return FlatShippingDiscountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFlatShippingDiscount()
    {
        return $this->_dc($this->FlatShippingDiscount, 'FlatShippingDiscount');
    }

    /**
     * @param FlatShippingDiscountType|null $value
     * @return void
     */
    public function setFlatShippingDiscount($value)
    {
        $this->FlatShippingDiscount = $value;
    }

    /**
     * @return CalculatedShippingDiscountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCalculatedShippingDiscount()
    {
        return $this->_dc($this->CalculatedShippingDiscount, 'CalculatedShippingDiscount');
    }

    /**
     * @param CalculatedShippingDiscountType|null $value
     * @return void
     */
    public function setCalculatedShippingDiscount($value)
    {
        $this->CalculatedShippingDiscount = $value;
    }

    /**
     * @return CalculatedHandlingDiscountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCalculatedHandlingDiscount()
    {
        return $this->_dc($this->CalculatedHandlingDiscount, 'CalculatedHandlingDiscount');
    }

    /**
     * @param CalculatedHandlingDiscountType|null $value
     * @return void
     */
    public function setCalculatedHandlingDiscount($value)
    {
        $this->CalculatedHandlingDiscount = $value;
    }

    /**
     * @return PromotionalShippingDiscountDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalShippingDiscountDetails()
    {
        return $this->_dc($this->PromotionalShippingDiscountDetails, 'PromotionalShippingDiscountDetails');
    }

    /**
     * @param PromotionalShippingDiscountDetailsType|null $value
     * @return void
     */
    public function setPromotionalShippingDiscountDetails($value)
    {
        $this->PromotionalShippingDiscountDetails = $value;
    }

    /**
     * @return ShippingInsuranceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingInsurance()
    {
        return $this->_dc($this->ShippingInsurance, 'ShippingInsurance');
    }

    /**
     * @param ShippingInsuranceType|null $value
     * @return void
     */
    public function setShippingInsurance($value)
    {
        $this->ShippingInsurance = $value;
    }

    /**
     * @return ShippingInsuranceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalShippingInsurance()
    {
        return $this->_dc($this->InternationalShippingInsurance, 'InternationalShippingInsurance');
    }

    /**
     * @param ShippingInsuranceType|null $value
     * @return void
     */
    public function setInternationalShippingInsurance($value)
    {
        $this->InternationalShippingInsurance = $value;
    }

    /**
     * @return SetShippingDiscountProfilesResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CurrencyID' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CombinedDuration' => ['type' => 'CombinedPaymentPeriodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ModifyActionCode' => ['type' => 'ModifyActionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FlatShippingDiscount' => ['type' => 'FlatShippingDiscountType', 'xmlns' => self::XMLNS],
            'CalculatedShippingDiscount' => ['type' => 'CalculatedShippingDiscountType', 'xmlns' => self::XMLNS],
            'CalculatedHandlingDiscount' => ['type' => 'CalculatedHandlingDiscountType', 'xmlns' => self::XMLNS],
            'PromotionalShippingDiscountDetails' => ['type' => 'PromotionalShippingDiscountDetailsType', 'xmlns' => self::XMLNS],
            'ShippingInsurance' => ['type' => 'ShippingInsuranceType', 'xmlns' => self::XMLNS],
            'InternationalShippingInsurance' => ['type' => 'ShippingInsuranceType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetShippingDiscountProfilesRequestType::_register();
