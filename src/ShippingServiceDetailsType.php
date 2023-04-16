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
 * Type used by the
 * ShippingServiceDetails
 * containers that are returned in the
 * GeteBayDetails
 * response. Each
 * ShippingServiceDetails
 * container consists of detailed information about each shipping service option available for the specified
 * country. These details include the shipping service enumeration value to use when specifying shipping service
 * options in an Add/Revise/Relist call, the shipping carrier, the shipping category (e.g. expedited, economy,
 * etc.), the shipping packages that can be used, and the shipping delivery window.
 * 
 * 
 * ShippingServiceDetails
 * containers are returned if a
 * DetailName
 * field is included in the call request and set to <code>ShippingServiceDetails</code>, or if no
 * DetailName
 * field is included in the call request.
 **/
class ShippingServiceDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ShippingServiceDetailsType';
    const NAME = 'ShippingServiceDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpeditedService = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $InternationalService = null;

    /**
     * @var string|null
     */
    protected $ShippingService = null;

    /**
     * @var int|null
     */
    protected $ShippingServiceID = null;

    /**
     * @var int|null
     */
    protected $ShippingTimeMax = null;

    /**
     * @var int|null
     */
    protected $ShippingTimeMin = null;

    /**
     * @var ShippingServiceCodeType|null
     */
    protected $ShippingServiceCode = null;

    /**
     * @var ShippingTypeCodeType[]|null
     */
    protected $ServiceType = [];

    /**
     * @var ShippingPackageCodeType[]|null
     */
    protected $ShippingPackage = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $DimensionsRequired = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ValidForSellingFlow = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SurchargeApplicable = null;

    /**
     * @var ShippingCarrierCodeType[]|null
     */
    protected $ShippingCarrier = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $CODService = null;

    /**
     * @var AnnouncementMessageType[]|null
     */
    protected $DeprecationDetails = [];

    /**
     * @var int|null
     */
    protected $MappedToShippingServiceID = null;

    /**
     * @var string|null
     */
    protected $CostGroupFlat = null;

    /**
     * @var ShippingServicePackageDetailsType[]|null
     */
    protected $ShippingServicePackageDetails = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $WeightRequired = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;

    /**
     * @var string|null
     */
    protected $ShippingCategory = null;


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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpeditedService()
    {
        return $this->_dc($this->ExpeditedService === 'true', 'ExpeditedService');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpeditedService($value)
    {
        $this->ExpeditedService = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalService()
    {
        return $this->_dc($this->InternationalService === 'true', 'InternationalService');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setInternationalService($value)
    {
        $this->InternationalService = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingService()
    {
        return $this->_dc($this->ShippingService, 'ShippingService');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingService($value)
    {
        $this->ShippingService = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceID()
    {
        return $this->_dc($this->ShippingServiceID, 'ShippingServiceID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingServiceID($value)
    {
        $this->ShippingServiceID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingTimeMax()
    {
        return $this->_dc($this->ShippingTimeMax, 'ShippingTimeMax');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingTimeMax($value)
    {
        $this->ShippingTimeMax = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingTimeMin()
    {
        return $this->_dc($this->ShippingTimeMin, 'ShippingTimeMin');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingTimeMin($value)
    {
        $this->ShippingTimeMin = self::_int($value);
    }

    /**
     * @return ShippingServiceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceCode()
    {
        return $this->_dc($this->ShippingServiceCode);
    }

    /**
     * @param ShippingServiceCodeType|null $value
     * @return void
     */
    public function setShippingServiceCode($value)
    {
        $this->ShippingServiceCode = $this->_enum($value, ShippingServiceCodeType::class);
    }

    /**
     * @return string[]|ShippingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getServiceType($index = null)
    {
        return $this->_dc($index === null
            ? $this->ServiceType
            : (count($this->ServiceType) > $index
                ? $this->ServiceType[$index]
                : null));
    }

    /**
     * @param ShippingTypeCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setServiceType($value, $index = null)
    {
        if ($index === null) {
            $this->ServiceType = $value;
        } else {
            $this->ServiceType[$index] = [];
            
            foreach ($value as $item) {
                $this->addServiceType($item);
            }
        }
    }

    /**
     * @param ShippingTypeCodeType|null $value
     * @return void
     */
    public function addServiceType($value)
    {
        $this->ServiceType[] = $this->_enum($value, ShippingTypeCodeType::class);
    }

    /**
     * @return string[]|ShippingPackageCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingPackage($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingPackage
            : (count($this->ShippingPackage) > $index
                ? $this->ShippingPackage[$index]
                : null));
    }

    /**
     * @param ShippingPackageCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingPackage($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingPackage = $value;
        } else {
            $this->ShippingPackage[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingPackage($item);
            }
        }
    }

    /**
     * @param ShippingPackageCodeType|null $value
     * @return void
     */
    public function addShippingPackage($value)
    {
        $this->ShippingPackage[] = $this->_enum($value, ShippingPackageCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDimensionsRequired()
    {
        return $this->_dc($this->DimensionsRequired === 'true', 'DimensionsRequired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDimensionsRequired($value)
    {
        $this->DimensionsRequired = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValidForSellingFlow()
    {
        return $this->_dc($this->ValidForSellingFlow === 'true', 'ValidForSellingFlow');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setValidForSellingFlow($value)
    {
        $this->ValidForSellingFlow = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSurchargeApplicable()
    {
        return $this->_dc($this->SurchargeApplicable === 'true', 'SurchargeApplicable');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSurchargeApplicable($value)
    {
        $this->SurchargeApplicable = self::_bool($value);
    }

    /**
     * @return string[]|ShippingCarrierCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingCarrier($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingCarrier
            : (count($this->ShippingCarrier) > $index
                ? $this->ShippingCarrier[$index]
                : null));
    }

    /**
     * @param ShippingCarrierCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingCarrier($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingCarrier = $value;
        } else {
            $this->ShippingCarrier[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingCarrier($item);
            }
        }
    }

    /**
     * @param ShippingCarrierCodeType|null $value
     * @return void
     */
    public function addShippingCarrier($value)
    {
        $this->ShippingCarrier[] = $this->_enum($value, ShippingCarrierCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCODService()
    {
        return $this->_dc($this->CODService === 'true', 'CODService');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCODService($value)
    {
        $this->CODService = self::_bool($value);
    }

    /**
     * @return AnnouncementMessageType[]|AnnouncementMessageType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDeprecationDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->DeprecationDetails
            : (count($this->DeprecationDetails) > $index
                ? $this->DeprecationDetails[$index]
                : null), 'DeprecationDetails');
    }

    /**
     * @param AnnouncementMessageType|null|AnnouncementMessageType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDeprecationDetails($value, $index = null)
    {
        if ($index === null) {
            $this->DeprecationDetails = $value;
        } else {
            $this->DeprecationDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addDeprecationDetails($item);
            }
        }
    }

    /**
     * @param AnnouncementMessageType|null $value
     * @return void
     */
    public function addDeprecationDetails($value)
    {
        $this->DeprecationDetails[] = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMappedToShippingServiceID()
    {
        return $this->_dc($this->MappedToShippingServiceID, 'MappedToShippingServiceID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMappedToShippingServiceID($value)
    {
        $this->MappedToShippingServiceID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCostGroupFlat()
    {
        return $this->_dc($this->CostGroupFlat, 'CostGroupFlat');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCostGroupFlat($value)
    {
        $this->CostGroupFlat = self::_string($value);
    }

    /**
     * @return ShippingServicePackageDetailsType[]|ShippingServicePackageDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingServicePackageDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingServicePackageDetails
            : (count($this->ShippingServicePackageDetails) > $index
                ? $this->ShippingServicePackageDetails[$index]
                : null), 'ShippingServicePackageDetails');
    }

    /**
     * @param ShippingServicePackageDetailsType|null|ShippingServicePackageDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingServicePackageDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingServicePackageDetails = $value;
        } else {
            $this->ShippingServicePackageDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingServicePackageDetails($item);
            }
        }
    }

    /**
     * @param ShippingServicePackageDetailsType|null $value
     * @return void
     */
    public function addShippingServicePackageDetails($value)
    {
        $this->ShippingServicePackageDetails[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWeightRequired()
    {
        return $this->_dc($this->WeightRequired === 'true', 'WeightRequired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setWeightRequired($value)
    {
        $this->WeightRequired = self::_bool($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCategory()
    {
        return $this->_dc($this->ShippingCategory, 'ShippingCategory');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingCategory($value)
    {
        $this->ShippingCategory = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Description' => [],
            'ExpeditedService' => ['type' => 'bool'],
            'InternationalService' => ['type' => 'bool'],
            'ShippingService' => [],
            'ShippingServiceID' => ['type' => 'int'],
            'ShippingTimeMax' => ['type' => 'int'],
            'ShippingTimeMin' => ['type' => 'int'],
            'ShippingServiceCode' => ['type' => 'ShippingServiceCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ServiceType' => ['type' => 'ShippingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingPackage' => ['type' => 'ShippingPackageCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'DimensionsRequired' => ['type' => 'bool'],
            'ValidForSellingFlow' => ['type' => 'bool'],
            'SurchargeApplicable' => ['type' => 'bool'],
            'ShippingCarrier' => ['type' => 'ShippingCarrierCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'CODService' => ['type' => 'bool'],
            'DeprecationDetails' => ['type' => 'AnnouncementMessageType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'MappedToShippingServiceID' => ['type' => 'int'],
            'CostGroupFlat' => [],
            'ShippingServicePackageDetails' => ['type' => 'ShippingServicePackageDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'WeightRequired' => ['type' => 'bool'],
            'DetailVersion' => [],
            'UpdateTime' => [],
            'ShippingCategory' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingServiceDetailsType::_register();
