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
 * Container consisting of shipping costs and other details related to a domestic
 * shipping service. A
 * ShippingServiceOptions
 * container is required for each domestic shipping service option that the seller will make available to buyers in
 * an Add/Revise/Relist call. Up to four domestic shipping service options can be offered per listing.
 **/
class ShippingServiceOptionsType extends EbatNs_ComplexType
{
    const TAG = 'ShippingServiceOptionsType';
    const NAME = 'ShippingServiceOptionsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $ShippingInsuranceCost = null;

    /**
     * @var string|null
     */
    protected $ShippingService = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingServiceCost = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingServiceAdditionalCost = null;

    /**
     * @var int|null
     */
    protected $ShippingServicePriority = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpeditedService = null;

    /**
     * @var int|null
     */
    protected $ShippingTimeMin = null;

    /**
     * @var int|null
     */
    protected $ShippingTimeMax = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $FreeShipping = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalPickup = null;

    /**
     * @var AmountType|null
     */
    protected $ImportCharge = null;

    /**
     * @var ShippingPackageInfoType[]|null
     */
    protected $ShippingPackageInfo = [];

    /**
     * @var string|null
     */
    protected $ShippingServiceCutOffTime = null;

    /**
     * @var string|null
     */
    protected $LogisticPlanType = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingInsuranceCost()
    {
        return $this->_dc($this->ShippingInsuranceCost, 'ShippingInsuranceCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingInsuranceCost($value)
    {
        $this->ShippingInsuranceCost = $value;
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceCost()
    {
        return $this->_dc($this->ShippingServiceCost, 'ShippingServiceCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingServiceCost($value)
    {
        $this->ShippingServiceCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->_dc($this->ShippingServiceAdditionalCost, 'ShippingServiceAdditionalCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingServiceAdditionalCost($value)
    {
        $this->ShippingServiceAdditionalCost = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServicePriority()
    {
        return $this->_dc($this->ShippingServicePriority, 'ShippingServicePriority');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingServicePriority($value)
    {
        $this->ShippingServicePriority = self::_int($value);
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFreeShipping()
    {
        return $this->_dc($this->FreeShipping === 'true', 'FreeShipping');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFreeShipping($value)
    {
        $this->FreeShipping = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalPickup()
    {
        return $this->_dc($this->LocalPickup === 'true', 'LocalPickup');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalPickup($value)
    {
        $this->LocalPickup = self::_bool($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getImportCharge()
    {
        return $this->_dc($this->ImportCharge, 'ImportCharge');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setImportCharge($value)
    {
        $this->ImportCharge = $value;
    }

    /**
     * @return ShippingPackageInfoType[]|ShippingPackageInfoType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingPackageInfo($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingPackageInfo
            : (count($this->ShippingPackageInfo) > $index
                ? $this->ShippingPackageInfo[$index]
                : null), 'ShippingPackageInfo');
    }

    /**
     * @param ShippingPackageInfoType|null|ShippingPackageInfoType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingPackageInfo($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingPackageInfo = $value;
        } else {
            $this->ShippingPackageInfo[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingPackageInfo($item);
            }
        }
    }

    /**
     * @param ShippingPackageInfoType|null $value
     * @return void
     */
    public function addShippingPackageInfo($value)
    {
        $this->ShippingPackageInfo[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceCutOffTime()
    {
        return $this->_dc($this->ShippingServiceCutOffTime, 'ShippingServiceCutOffTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingServiceCutOffTime($value)
    {
        $this->ShippingServiceCutOffTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogisticPlanType()
    {
        return $this->_dc($this->LogisticPlanType, 'LogisticPlanType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLogisticPlanType($value)
    {
        $this->LogisticPlanType = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingInsuranceCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingService' => [],
            'ShippingServiceCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingServiceAdditionalCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingServicePriority' => ['type' => 'int'],
            'ExpeditedService' => ['type' => 'bool'],
            'ShippingTimeMin' => ['type' => 'int'],
            'ShippingTimeMax' => ['type' => 'int'],
            'FreeShipping' => ['type' => 'bool'],
            'LocalPickup' => ['type' => 'bool'],
            'ImportCharge' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingPackageInfo' => ['type' => 'ShippingPackageInfoType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingServiceCutOffTime' => [],
            'LogisticPlanType' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingServiceOptionsType::_register();
