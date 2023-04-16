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
 * Type defining the
 * ShippingPackageInfoType
 * container, which is returned in order management calls. The
 * ShippingPackageInfoType
 * container provides information on delivery times and tracking information for a shipping package.
 **/
class ShippingPackageInfoType extends EbatNs_ComplexType
{
    const TAG = 'ShippingPackageInfoType';
    const NAME = 'ShippingPackageInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $StoreID = null;

    /**
     * @var string|null
     */
    protected $ShippingTrackingEvent = null;

    /**
     * @var string|null
     */
    protected $ScheduledDeliveryTimeMin = null;

    /**
     * @var string|null
     */
    protected $ScheduledDeliveryTimeMax = null;

    /**
     * @var string|null
     */
    protected $ActualDeliveryTime = null;

    /**
     * @var string|null
     */
    protected $EstimatedDeliveryTimeMin = null;

    /**
     * @var string|null
     */
    protected $EstimatedDeliveryTimeMax = null;

    /**
     * @var string|null
     */
    protected $HandleByTime = null;

    /**
     * @var string|null
     */
    protected $MinNativeEstimatedDeliveryTime = null;

    /**
     * @var string|null
     */
    protected $MaxNativeEstimatedDeliveryTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreID()
    {
        return $this->_dc($this->StoreID, 'StoreID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStoreID($value)
    {
        $this->StoreID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingTrackingEvent()
    {
        return $this->_dc($this->ShippingTrackingEvent, 'ShippingTrackingEvent');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingTrackingEvent($value)
    {
        $this->ShippingTrackingEvent = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getScheduledDeliveryTimeMin()
    {
        return $this->_dc($this->ScheduledDeliveryTimeMin, 'ScheduledDeliveryTimeMin');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setScheduledDeliveryTimeMin($value)
    {
        $this->ScheduledDeliveryTimeMin = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getScheduledDeliveryTimeMax()
    {
        return $this->_dc($this->ScheduledDeliveryTimeMax, 'ScheduledDeliveryTimeMax');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setScheduledDeliveryTimeMax($value)
    {
        $this->ScheduledDeliveryTimeMax = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActualDeliveryTime()
    {
        return $this->_dc($this->ActualDeliveryTime, 'ActualDeliveryTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setActualDeliveryTime($value)
    {
        $this->ActualDeliveryTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEstimatedDeliveryTimeMin()
    {
        return $this->_dc($this->EstimatedDeliveryTimeMin, 'EstimatedDeliveryTimeMin');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEstimatedDeliveryTimeMin($value)
    {
        $this->EstimatedDeliveryTimeMin = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEstimatedDeliveryTimeMax()
    {
        return $this->_dc($this->EstimatedDeliveryTimeMax, 'EstimatedDeliveryTimeMax');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEstimatedDeliveryTimeMax($value)
    {
        $this->EstimatedDeliveryTimeMax = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHandleByTime()
    {
        return $this->_dc($this->HandleByTime, 'HandleByTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHandleByTime($value)
    {
        $this->HandleByTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinNativeEstimatedDeliveryTime()
    {
        return $this->_dc($this->MinNativeEstimatedDeliveryTime, 'MinNativeEstimatedDeliveryTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMinNativeEstimatedDeliveryTime($value)
    {
        $this->MinNativeEstimatedDeliveryTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxNativeEstimatedDeliveryTime()
    {
        return $this->_dc($this->MaxNativeEstimatedDeliveryTime, 'MaxNativeEstimatedDeliveryTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMaxNativeEstimatedDeliveryTime($value)
    {
        $this->MaxNativeEstimatedDeliveryTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'StoreID' => [],
            'ShippingTrackingEvent' => [],
            'ScheduledDeliveryTimeMin' => [],
            'ScheduledDeliveryTimeMax' => [],
            'ActualDeliveryTime' => [],
            'EstimatedDeliveryTimeMin' => [],
            'EstimatedDeliveryTimeMax' => [],
            'HandleByTime' => [],
            'MinNativeEstimatedDeliveryTime' => [],
            'MaxNativeEstimatedDeliveryTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingPackageInfoType::_register();
