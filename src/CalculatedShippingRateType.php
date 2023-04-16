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
 * Details pertinent to one or more items for which
 * calculated shipping (or flat rate shipping using shipping rate tables with
 * weight surcharges) has been offered by the seller, such as package
 * dimension and weight and packaging/handling costs. Also returned
 * with the data for an item's transaction.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the
 * <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or
 * <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the
 * <strong>CalculatedShippingRate</strong> container should now be specified in the
 * <strong>ShippingPackageDetails</strong> container instead.
 * </span>
 **/
class CalculatedShippingRateType extends EbatNs_ComplexType
{
    const TAG = 'CalculatedShippingRateType';
    const NAME = 'CalculatedShippingRateType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $OriginatingPostalCode = null;

    /**
     * @var MeasurementSystemCodeType|null
     */
    protected $MeasurementUnit = null;

    /**
     * @var AmountType|null
     */
    protected $PackagingHandlingCosts = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShippingIrregular = null;

    /**
     * @var AmountType|null
     */
    protected $InternationalPackagingHandlingCosts = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOriginatingPostalCode()
    {
        return $this->_dc($this->OriginatingPostalCode, 'OriginatingPostalCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOriginatingPostalCode($value)
    {
        $this->OriginatingPostalCode = self::_string($value);
    }

    /**
     * @return MeasurementSystemCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMeasurementUnit()
    {
        return $this->_dc($this->MeasurementUnit);
    }

    /**
     * @param MeasurementSystemCodeType|null $value
     * @return void
     */
    public function setMeasurementUnit($value)
    {
        $this->MeasurementUnit = $this->_enum($value, MeasurementSystemCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPackagingHandlingCosts()
    {
        return $this->_dc($this->PackagingHandlingCosts, 'PackagingHandlingCosts');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setPackagingHandlingCosts($value)
    {
        $this->PackagingHandlingCosts = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingIrregular()
    {
        return $this->_dc($this->ShippingIrregular === 'true', 'ShippingIrregular');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShippingIrregular($value)
    {
        $this->ShippingIrregular = self::_bool($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalPackagingHandlingCosts()
    {
        return $this->_dc($this->InternationalPackagingHandlingCosts, 'InternationalPackagingHandlingCosts');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setInternationalPackagingHandlingCosts($value)
    {
        $this->InternationalPackagingHandlingCosts = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'OriginatingPostalCode' => [],
            'MeasurementUnit' => ['type' => 'MeasurementSystemCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PackagingHandlingCosts' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingIrregular' => ['type' => 'bool'],
            'InternationalPackagingHandlingCosts' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CalculatedShippingRateType::_register();
