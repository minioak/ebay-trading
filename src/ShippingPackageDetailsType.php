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
 * Details about type of package used to ship an item.
 **/
class ShippingPackageDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ShippingPackageDetailsType';
    const NAME = 'ShippingPackageDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PackageID = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var ShippingPackageCodeType|null
     */
    protected $ShippingPackage = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DefaultValue = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DimensionsSupported = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPackageID()
    {
        return $this->_dc($this->PackageID, 'PackageID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPackageID($value)
    {
        $this->PackageID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDefaultValue()
    {
        return $this->_dc($this->DefaultValue === 'true', 'DefaultValue');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDefaultValue($value)
    {
        $this->DefaultValue = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDimensionsSupported()
    {
        return $this->_dc($this->DimensionsSupported === 'true', 'DimensionsSupported');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDimensionsSupported($value)
    {
        $this->DimensionsSupported = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PackageID' => ['type' => 'int'],
            'Description' => [],
            'ShippingPackage' => ['type' => 'ShippingPackageCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DefaultValue' => ['type' => 'bool'],
            'DimensionsSupported' => ['type' => 'bool'],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingPackageDetailsType::_register();
