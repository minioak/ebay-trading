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
 * This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 **/
class FlatRateInsuranceRangeCostType extends EbatNs_ComplexType
{
    const TAG = 'FlatRateInsuranceRangeCostType';
    const NAME = 'FlatRateInsuranceRangeCostType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var FlatRateInsuranceRangeCodeType|null
     */
    protected $FlatRateInsuranceRange = null;

    /**
     * @var AmountType|null
     */
    protected $InsuranceCost = null;


    /**
     * @return FlatRateInsuranceRangeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFlatRateInsuranceRange()
    {
        return $this->_dc($this->FlatRateInsuranceRange);
    }

    /**
     * @param FlatRateInsuranceRangeCodeType|null $value
     * @return void
     */
    public function setFlatRateInsuranceRange($value)
    {
        $this->FlatRateInsuranceRange = $this->_enum($value, FlatRateInsuranceRangeCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInsuranceCost()
    {
        return $this->_dc($this->InsuranceCost, 'InsuranceCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setInsuranceCost($value)
    {
        $this->InsuranceCost = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FlatRateInsuranceRange' => ['type' => 'FlatRateInsuranceRangeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InsuranceCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FlatRateInsuranceRangeCostType::_register();
