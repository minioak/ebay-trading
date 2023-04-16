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
class FlatShippingPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'FlatShippingPreferencesType';
    const NAME = 'FlatShippingPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $AmountPerAdditionalItem = null;

    /**
     * @var AmountType|null
     */
    protected $DeductionAmountPerAdditionalItem = null;

    /**
     * @var FlatRateInsuranceRangeCostType|null
     */
    protected $FlatRateInsuranceRangeCost = null;

    /**
     * @var FlatShippingRateOptionCodeType|null
     */
    protected $FlatShippingRateOption = null;

    /**
     * @var InsuranceOptionCodeType|null
     */
    protected $InsuranceOption = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAmountPerAdditionalItem()
    {
        return $this->_dc($this->AmountPerAdditionalItem, 'AmountPerAdditionalItem');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAmountPerAdditionalItem($value)
    {
        $this->AmountPerAdditionalItem = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeductionAmountPerAdditionalItem()
    {
        return $this->_dc($this->DeductionAmountPerAdditionalItem, 'DeductionAmountPerAdditionalItem');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setDeductionAmountPerAdditionalItem($value)
    {
        $this->DeductionAmountPerAdditionalItem = $value;
    }

    /**
     * @return FlatRateInsuranceRangeCostType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFlatRateInsuranceRangeCost()
    {
        return $this->_dc($this->FlatRateInsuranceRangeCost, 'FlatRateInsuranceRangeCost');
    }

    /**
     * @param FlatRateInsuranceRangeCostType|null $value
     * @return void
     */
    public function setFlatRateInsuranceRangeCost($value)
    {
        $this->FlatRateInsuranceRangeCost = $value;
    }

    /**
     * @return FlatShippingRateOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFlatShippingRateOption()
    {
        return $this->_dc($this->FlatShippingRateOption);
    }

    /**
     * @param FlatShippingRateOptionCodeType|null $value
     * @return void
     */
    public function setFlatShippingRateOption($value)
    {
        $this->FlatShippingRateOption = $this->_enum($value, FlatShippingRateOptionCodeType::class);
    }

    /**
     * @return InsuranceOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInsuranceOption()
    {
        return $this->_dc($this->InsuranceOption);
    }

    /**
     * @param InsuranceOptionCodeType|null $value
     * @return void
     */
    public function setInsuranceOption($value)
    {
        $this->InsuranceOption = $this->_enum($value, InsuranceOptionCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AmountPerAdditionalItem' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'DeductionAmountPerAdditionalItem' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'FlatRateInsuranceRangeCost' => ['type' => 'FlatRateInsuranceRangeCostType', 'xmlns' => self::XMLNS, 'cardinality' => '0..6'],
            'FlatShippingRateOption' => ['type' => 'FlatShippingRateOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InsuranceOption' => ['type' => 'InsuranceOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FlatShippingPreferencesType::_register();
