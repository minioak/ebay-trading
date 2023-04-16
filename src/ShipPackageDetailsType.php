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
 * dimension and weight and packaging/handling costs.
 * 
 * Also returned with the data for an item's transaction.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * The <strong>ShippingPackageDetails</strong> container should now be used instead of the
 * <strong>CalculatedShippingRate</strong> container to specify values for the <strong>MeasurementUnit</strong>,
 * <strong>PackageDepth</strong>,  <strong>PackageWidth</strong>, <strong>PackageLength</strong>,
 * <strong>ShippingIrregular</strong>, <strong>ShippingPackage</strong>, <strong>WeightMajor</strong>, and/or
 * <strong>WeightMinor</strong> fields. The <strong>CalculatedShippingRate</strong> container should only be used to
 * specify values for the <strong>InternationalPackagingHandlingCosts</strong>,
 * <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields.
 * </span>
 **/
class ShipPackageDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ShipPackageDetailsType';
    const NAME = 'ShipPackageDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MeasurementSystemCodeType|null
     */
    protected $MeasurementUnit = null;

    /**
     * @var MeasureType|null
     */
    protected $PackageDepth = null;

    /**
     * @var MeasureType|null
     */
    protected $PackageLength = null;

    /**
     * @var MeasureType|null
     */
    protected $PackageWidth = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShippingIrregular = null;

    /**
     * @var ShippingPackageCodeType|null
     */
    protected $ShippingPackage = null;

    /**
     * @var MeasureType|null
     */
    protected $WeightMajor = null;

    /**
     * @var MeasureType|null
     */
    protected $WeightMinor = null;


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
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPackageDepth()
    {
        return $this->_dc($this->PackageDepth, 'PackageDepth');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setPackageDepth($value)
    {
        $this->PackageDepth = $value;
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPackageLength()
    {
        return $this->_dc($this->PackageLength, 'PackageLength');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setPackageLength($value)
    {
        $this->PackageLength = $value;
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPackageWidth()
    {
        return $this->_dc($this->PackageWidth, 'PackageWidth');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setPackageWidth($value)
    {
        $this->PackageWidth = $value;
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
     * @return ShippingPackageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingPackage()
    {
        return $this->_dc($this->ShippingPackage);
    }

    /**
     * @param ShippingPackageCodeType|null $value
     * @return void
     */
    public function setShippingPackage($value)
    {
        $this->ShippingPackage = $this->_enum($value, ShippingPackageCodeType::class);
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWeightMajor()
    {
        return $this->_dc($this->WeightMajor, 'WeightMajor');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setWeightMajor($value)
    {
        $this->WeightMajor = $value;
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWeightMinor()
    {
        return $this->_dc($this->WeightMinor, 'WeightMinor');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setWeightMinor($value)
    {
        $this->WeightMinor = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MeasurementUnit' => ['type' => 'MeasurementSystemCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PackageDepth' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'PackageLength' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'PackageWidth' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'ShippingIrregular' => ['type' => 'bool'],
            'ShippingPackage' => ['type' => 'ShippingPackageCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'WeightMajor' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'WeightMinor' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShipPackageDetailsType::_register();
