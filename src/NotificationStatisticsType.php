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
 * Summary information about notifications delivered, failed, errors, queued for
 * a given application ID and time period.
 **/
class NotificationStatisticsType extends EbatNs_ComplexType
{
    const TAG = 'NotificationStatisticsType';
    const NAME = 'NotificationStatisticsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $DeliveredCount = null;

    /**
     * @var int|null
     */
    protected $QueuedNewCount = null;

    /**
     * @var int|null
     */
    protected $QueuedPendingCount = null;

    /**
     * @var int|null
     */
    protected $ExpiredCount = null;

    /**
     * @var int|null
     */
    protected $ErrorCount = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveredCount()
    {
        return $this->_dc($this->DeliveredCount, 'DeliveredCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDeliveredCount($value)
    {
        $this->DeliveredCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQueuedNewCount()
    {
        return $this->_dc($this->QueuedNewCount, 'QueuedNewCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQueuedNewCount($value)
    {
        $this->QueuedNewCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQueuedPendingCount()
    {
        return $this->_dc($this->QueuedPendingCount, 'QueuedPendingCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQueuedPendingCount($value)
    {
        $this->QueuedPendingCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpiredCount()
    {
        return $this->_dc($this->ExpiredCount, 'ExpiredCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setExpiredCount($value)
    {
        $this->ExpiredCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getErrorCount()
    {
        return $this->_dc($this->ErrorCount, 'ErrorCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setErrorCount($value)
    {
        $this->ErrorCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DeliveredCount' => ['type' => 'int'],
            'QueuedNewCount' => ['type' => 'int'],
            'QueuedPendingCount' => ['type' => 'int'],
            'ExpiredCount' => ['type' => 'int'],
            'ErrorCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NotificationStatisticsType::_register();
