<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'NotificationDetailsArrayType.php';
require_once 'MarkUpMarkDownHistoryType.php';
require_once 'NotificationStatisticsType.php';

/**
  * Returns an array of notifications sent to a given application identified by the appID
  * (comes in the credentials). The result can be used by third-party developers troubleshoot
  * issues with notifications.
  * <br/><br/>
  * Zero, one or many notifications can be returned in the array. The set of notifications
  * returned is limited to those that were sent between the <b>StartTime</b> and <b>EndTime</b> specified
  * in the request. 
  * <br/><br/>
  * If <b>StartTime</b> or <b>EndTime</b> filters were not found in the request, then
  * the response will contain the data for only one day (Now-1day). By default, maximum
  * duration is limited to 3 days (Now-3days). These min (1day) and max(3days) applies
  * to <b>Notifications</b>, <b>MarkDownMarkUpHistory</b> and <b>NotificationStatistics</b>.
  * <br/><br/>
  * Notifications are sent only if the <b>ItemID</b> is included in the request. If there is no
  * <b>ItemID</b>, then only <b>Statistics</b> and <b>MarkDownMarkUpHistory</b> information is included.
  * 
 **/

class GetNotificationsUsageResponseType extends AbstractResponseType
{
	/**
	* @var dateTime
	**/
	protected $StartTime;

	/**
	* @var dateTime
	**/
	protected $EndTime;

	/**
	* @var NotificationDetailsArrayType
	**/
	protected $NotificationDetailsArray;

	/**
	* @var MarkUpMarkDownHistoryType
	**/
	protected $MarkUpMarkDownHistory;

	/**
	* @var NotificationStatisticsType
	**/
	protected $NotificationStatistics;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetNotificationsUsageResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'StartTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NotificationDetailsArray' =>
				array(
					'required' => false,
					'type' => 'NotificationDetailsArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MarkUpMarkDownHistory' =>
				array(
					'required' => false,
					'type' => 'MarkUpMarkDownHistoryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NotificationStatistics' =>
				array(
					'required' => false,
					'type' => 'NotificationStatisticsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return dateTime
	 **/
	function getStartTime()
	{
		return $this->StartTime;
	}

	/**
	 * @return void
	 **/
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndTime()
	{
		return $this->EndTime;
	}

	/**
	 * @return void
	 **/
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}

	/**
	 * @return NotificationDetailsArrayType
	 **/
	function getNotificationDetailsArray()
	{
		return $this->NotificationDetailsArray;
	}

	/**
	 * @return void
	 **/
	function setNotificationDetailsArray($value)
	{
		$this->NotificationDetailsArray = $value;
	}

	/**
	 * @return MarkUpMarkDownHistoryType
	 **/
	function getMarkUpMarkDownHistory()
	{
		return $this->MarkUpMarkDownHistory;
	}

	/**
	 * @return void
	 **/
	function setMarkUpMarkDownHistory($value)
	{
		$this->MarkUpMarkDownHistory = $value;
	}

	/**
	 * @return NotificationStatisticsType
	 **/
	function getNotificationStatistics()
	{
		return $this->NotificationStatistics;
	}

	/**
	 * @return void
	 **/
	function setNotificationStatistics($value)
	{
		$this->NotificationStatistics = $value;
	}

}
?>
