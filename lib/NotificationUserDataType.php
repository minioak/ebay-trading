<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SMSSubscriptionType.php';
require_once 'SummaryEventScheduleType.php';

/**
  * User data related to notifications.
  * 
 **/

class NotificationUserDataType extends EbatNs_ComplexType
{
	/**
	* @var SMSSubscriptionType
	**/
	protected $SMSSubscription;

	/**
	* @var SummaryEventScheduleType
	**/
	protected $SummarySchedule;

	/**
	* @var string
	**/
	protected $ExternalUserData;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NotificationUserDataType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SMSSubscription' =>
				array(
					'required' => false,
					'type' => 'SMSSubscriptionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SummarySchedule' =>
				array(
					'required' => false,
					'type' => 'SummaryEventScheduleType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ExternalUserData' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return SMSSubscriptionType
	 **/
	function getSMSSubscription()
	{
		return $this->SMSSubscription;
	}

	/**
	 * @return void
	 **/
	function setSMSSubscription($value)
	{
		$this->SMSSubscription = $value;
	}

	/**
	 * @return SummaryEventScheduleType
	 * @param integer $index 
	 **/
	function getSummarySchedule($index = null)
	{
		if ($index !== null)
		{
			return $this->SummarySchedule[$index];
		}
		else
		{
			return $this->SummarySchedule;
		}
	}

	/**
	 * @return void
	 * @param SummaryEventScheduleType $value
	 * @param integer $index 
	 **/
	function setSummarySchedule($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SummarySchedule[$index] = $value;
		}
		else
		{
			$this->SummarySchedule= $value;
		}
	}

	/**
	 * @return void
	 * @param SummaryEventScheduleType $value
	 **/
	function addSummarySchedule($value)
	{
		$this->SummarySchedule[] = $value;
	}

	/**
	 * @return string
	 **/
	function getExternalUserData()
	{
		return $this->ExternalUserData;
	}

	/**
	 * @return void
	 **/
	function setExternalUserData($value)
	{
		$this->ExternalUserData = $value;
	}

}
?>
