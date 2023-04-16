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
 * The base response of the
 * GetShippingDiscountProfiles
 * call.
 **/
class GetShippingDiscountProfilesResponseType extends EbatNs_Response
{
    const TAG = 'GetShippingDiscountProfilesResponseType';
    const NAME = 'GetShippingDiscountProfilesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CurrencyCodeType|null
     */
    protected $CurrencyID = null;

    /**
     * @var FlatShippingDiscountType|null
     */
    protected $FlatShippingDiscount = null;

    /**
     * @var CalculatedShippingDiscountType|null
     */
    protected $CalculatedShippingDiscount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PromotionalShippingDiscount = null;

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
     * @var CombinedPaymentPeriodCodeType|null
     */
    protected $CombinedDuration = null;


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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalShippingDiscount()
    {
        return $this->_dc($this->PromotionalShippingDiscount === 'true', 'PromotionalShippingDiscount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPromotionalShippingDiscount($value)
    {
        $this->PromotionalShippingDiscount = self::_bool($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CurrencyID' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FlatShippingDiscount' => ['type' => 'FlatShippingDiscountType', 'xmlns' => self::XMLNS],
            'CalculatedShippingDiscount' => ['type' => 'CalculatedShippingDiscountType', 'xmlns' => self::XMLNS],
            'PromotionalShippingDiscount' => ['type' => 'bool'],
            'CalculatedHandlingDiscount' => ['type' => 'CalculatedHandlingDiscountType', 'xmlns' => self::XMLNS],
            'PromotionalShippingDiscountDetails' => ['type' => 'PromotionalShippingDiscountDetailsType', 'xmlns' => self::XMLNS],
            'ShippingInsurance' => ['type' => 'ShippingInsuranceType', 'xmlns' => self::XMLNS],
            'InternationalShippingInsurance' => ['type' => 'ShippingInsuranceType', 'xmlns' => self::XMLNS],
            'CombinedDuration' => ['type' => 'CombinedPaymentPeriodCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetShippingDiscountProfilesResponseType::_register();
