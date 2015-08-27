<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ApplicationDeliveryPreferencesType.php';
require_once 'NotificationEnableArrayType.php';
require_once 'NotificationUserDataType.php';
require_once 'NotificationEventPropertyType.php';

/**
  * Manages notification and alert preferences for applications and users.
  * 
 **/

class SetNotificationPreferencesRequestType extends AbstractRequestType
{
	/**
	* @var ApplicationDeliveryPreferencesType
	**/
	protected $ApplicationDeliveryPreferences;

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
	* @var string
	**/
	protected $DeliveryURLName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetNotificationPreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				),
				'DeliveryURLName' =>
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

}
?>
