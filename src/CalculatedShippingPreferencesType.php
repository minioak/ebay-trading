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
class CalculatedShippingPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'CalculatedShippingPreferencesType';
    const NAME = 'CalculatedShippingPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $CalculatedShippingAmountForEntireOrder = null;

    /**
     * @var CalculatedShippingChargeOptionCodeType|null
     */
    protected $CalculatedShippingChargeOption = null;

    /**
     * @var CalculatedShippingRateOptionCodeType|null
     */
    protected $CalculatedShippingRateOption = null;

    /**
     * @var InsuranceOptionCodeType|null
     */
    protected $InsuranceOption = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCalculatedShippingAmountForEntireOrder()
    {
        return $this->_dc($this->CalculatedShippingAmountForEntireOrder, 'CalculatedShippingAmountForEntireOrder');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCalculatedShippingAmountForEntireOrder($value)
    {
        $this->CalculatedShippingAmountForEntireOrder = $value;
    }

    /**
     * @return CalculatedShippingChargeOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCalculatedShippingChargeOption()
    {
        return $this->_dc($this->CalculatedShippingChargeOption);
    }

    /**
     * @param CalculatedShippingChargeOptionCodeType|null $value
     * @return void
     */
    public function setCalculatedShippingChargeOption($value)
    {
        $this->CalculatedShippingChargeOption = $this->_enum($value, CalculatedShippingChargeOptionCodeType::class);
    }

    /**
     * @return CalculatedShippingRateOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCalculatedShippingRateOption()
    {
        return $this->_dc($this->CalculatedShippingRateOption);
    }

    /**
     * @param CalculatedShippingRateOptionCodeType|null $value
     * @return void
     */
    public function setCalculatedShippingRateOption($value)
    {
        $this->CalculatedShippingRateOption = $this->_enum($value, CalculatedShippingRateOptionCodeType::class);
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
            'CalculatedShippingAmountForEntireOrder' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'CalculatedShippingChargeOption' => ['type' => 'CalculatedShippingChargeOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CalculatedShippingRateOption' => ['type' => 'CalculatedShippingRateOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InsuranceOption' => ['type' => 'InsuranceOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CalculatedShippingPreferencesType::_register();
