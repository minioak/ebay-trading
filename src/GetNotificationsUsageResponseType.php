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
 * Returns an array of notifications sent to a given application identified by the appID (comes in the credentials).
 * The result can be used by third-party developers troubleshoot issues with notifications.
 * Zero, one or many notifications can be returned in the array. The set of notifications returned is limited to
 * those that were sent between the
 * StartTime
 * and
 * EndTime
 * specified in the request.
 * If
 * StartTime
 * or
 * EndTime
 * filters were not found in the request, then the response will contain the data for only one day (Now-1day). By
 * default, maximum duration is limited to 3 days (Now-3days). These min (1day) and max(3days) applies to
 * Notifications
 * ,
 * MarkDownMarkUpHistory
 * and
 * NotificationStatistics
 * .
 * Notifications are sent only if the
 * ItemID
 * is included in the request. If there is no
 * ItemID
 * , then only
 * Statistics
 * and
 * MarkDownMarkUpHistory
 * information is included.
 **/
class GetNotificationsUsageResponseType extends EbatNs_Response
{
    const TAG = 'GetNotificationsUsageResponseType';
    const NAME = 'GetNotificationsUsageResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $StartTime = null;

    /**
     * @var string|null
     */
    protected $EndTime = null;

    /**
     * @var NotificationDetailsArrayType|null
     */
    protected $NotificationDetailsArray = null;

    /**
     * @var MarkUpMarkDownHistoryType|null
     */
    protected $MarkUpMarkDownHistory = null;

    /**
     * @var NotificationStatisticsType|null
     */
    protected $NotificationStatistics = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->StartTime, 'StartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->StartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
    }

    /**
     * @return NotificationDetailsArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotificationDetailsArray()
    {
        return $this->_dc($this->NotificationDetailsArray, 'NotificationDetailsArray');
    }

    /**
     * @param NotificationDetailsArrayType|null $value
     * @return void
     */
    public function setNotificationDetailsArray($value)
    {
        $this->NotificationDetailsArray = $value;
    }

    /**
     * @return MarkUpMarkDownHistoryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMarkUpMarkDownHistory()
    {
        return $this->_dc($this->MarkUpMarkDownHistory, 'MarkUpMarkDownHistory');
    }

    /**
     * @param MarkUpMarkDownHistoryType|null $value
     * @return void
     */
    public function setMarkUpMarkDownHistory($value)
    {
        $this->MarkUpMarkDownHistory = $value;
    }

    /**
     * @return NotificationStatisticsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotificationStatistics()
    {
        return $this->_dc($this->NotificationStatistics, 'NotificationStatistics');
    }

    /**
     * @param NotificationStatisticsType|null $value
     * @return void
     */
    public function setNotificationStatistics($value)
    {
        $this->NotificationStatistics = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'StartTime' => [],
            'EndTime' => [],
            'NotificationDetailsArray' => ['type' => 'NotificationDetailsArrayType', 'xmlns' => self::XMLNS],
            'MarkUpMarkDownHistory' => ['type' => 'MarkUpMarkDownHistoryType', 'xmlns' => self::XMLNS],
            'NotificationStatistics' => ['type' => 'NotificationStatisticsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetNotificationsUsageResponseType::_register();
