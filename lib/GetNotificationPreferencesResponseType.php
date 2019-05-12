<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'ApplicationDeliveryPreferencesType.php';
require_once 'NotificationEnableArrayType.php';
require_once 'NotificationUserDataType.php';
require_once 'NotificationEventPropertyType.php';

/**
  * Contains the requesting application's notification preferences.
  * <b>GetNotificationPreferences</b> retrieves preferences that you have
  * deliberately set. For example, if you enable the <b>EndOfAuction</b> event and
  * then later disable it, the response shows the <b>EndOfAuction</b> event
  * preference as <b>Disabled</b>. But if you have never set a preference for the
  * <b>EndOfAuction</b> event, no <b>EndOfAuction</b> preference is returned at all.
  * 
 **/

class GetNotificationPreferencesResponseType extends AbstractResponseType
{
	/**
	* @var ApplicationDeliveryPreferencesType
	**/
	protected $ApplicationDeliveryPreferences;

	/**
	* @var string
	**/
	protected $DeliveryURLName;

	/**
	* @var NotificationEnableArrayType
	**/
	protected $UserDeliveryPreferenceArray;

	/**
	* @var NotificationUserDataType
	**/
	protected $UserData;

	/**
	* @var NotificationEventPropertyType
	**/
	protected $EventProperty;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetNotificationPreferencesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ApplicationDeliveryPreferences' =>
				array(
					'required' => false,
					'type' => 'ApplicationDeliveryPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeliveryURLName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserDeliveryPreferenceArray' =>
				array(
					'required' => false,
					'type' => 'NotificationEnableArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserData' =>
				array(
					'required' => false,
					'type' => 'NotificationUserDataType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EventProperty' =>
				array(
					'required' => false,
					'type' => 'NotificationEventPropertyType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ApplicationDeliveryPreferencesType
	 **/
	function getApplicationDeliveryPreferences()
	{
		return $this->ApplicationDeliveryPreferences;
	}

	/**
	 * @return void
	 **/
	function setApplicationDeliveryPreferences($value)
	{
		$this->ApplicationDeliveryPreferences = $value;
	}

	/**
	 * @return string
	 **/
	function getDeliveryURLName()
	{
		return $this->DeliveryURLName;
	}

	/**
	 * @return void
	 **/
	function setDeliveryURLName($value)
	{
		$this->DeliveryURLName = $value;
	}

	/**
	 * @return NotificationEnableArrayType
	 **/
	function getUserDeliveryPreferenceArray()
	{
		return $this->UserDeliveryPreferenceArray;
	}

	/**
	 * @return void
	 **/
	function setUserDeliveryPreferenceArray($value)
	{
		$this->UserDeliveryPreferenceArray = $value;
	}

	/**
	 * @return NotificationUserDataType
	 **/
	function getUserData()
	{
		return $this->UserData;
	}

	/**
	 * @return void
	 **/
	function setUserData($value)
	{
		$this->UserData = $value;
	}

	/**
	 * @return NotificationEventPropertyType
	 * @param integer $index 
	 **/
	function getEventProperty($index = null)
	{
		if ($index !== null)
		{
			return $this->EventProperty[$index];
		}
		else
		{
			return $this->EventProperty;
		}
	}

	/**
	 * @return void
	 * @param NotificationEventPropertyType $value
	 * @param integer $index 
	 **/
	function setEventProperty($value, $index = null)
	{
		if ($index !== null)
		{
			$this->EventProperty[$index] = $value;
		}
		else
		{
			$this->EventProperty= $value;
		}
	}

	/**
	 * @return void
	 * @param NotificationEventPropertyType $value
	 **/
	function addEventProperty($value)
	{
		$this->EventProperty[] = $value;
	}

}
?>
