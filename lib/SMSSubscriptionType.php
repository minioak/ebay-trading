<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SMSSubscriptionUserStatusCodeType.php';
require_once 'WirelessCarrierIDCodeType.php';
require_once 'SMSSubscriptionErrorCodeCodeType.php';
require_once 'ItemIDType.php';

/**
  * User data related to notifications. Note that SMS is currently reserved for future use.
  * 
 **/

class SMSSubscriptionType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $SMSPhone;

	/**
	* @var SMSSubscriptionUserStatusCodeType
	**/
	protected $UserStatus;

	/**
	* @var WirelessCarrierIDCodeType
	**/
	protected $CarrierID;

	/**
	* @var SMSSubscriptionErrorCodeCodeType
	**/
	protected $ErrorCode;

	/**
	* @var ItemIDType
	**/
	protected $ItemToUnsubscribe;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SMSSubscriptionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SMSPhone' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserStatus' =>
				array(
					'required' => false,
					'type' => 'SMSSubscriptionUserStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CarrierID' =>
				array(
					'required' => false,
					'type' => 'WirelessCarrierIDCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ErrorCode' =>
				array(
					'required' => false,
					'type' => 'SMSSubscriptionErrorCodeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemToUnsubscribe' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
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
	 * @return string
	 **/
	function getSMSPhone()
	{
		return $this->SMSPhone;
	}

	/**
	 * @return void
	 **/
	function setSMSPhone($value)
	{
		$this->SMSPhone = $value;
	}

	/**
	 * @return SMSSubscriptionUserStatusCodeType
	 **/
	function getUserStatus()
	{
		return $this->UserStatus;
	}

	/**
	 * @return void
	 **/
	function setUserStatus($value)
	{
		$this->UserStatus = $value;
	}

	/**
	 * @return WirelessCarrierIDCodeType
	 **/
	function getCarrierID()
	{
		return $this->CarrierID;
	}

	/**
	 * @return void
	 **/
	function setCarrierID($value)
	{
		$this->CarrierID = $value;
	}

	/**
	 * @return SMSSubscriptionErrorCodeCodeType
	 **/
	function getErrorCode()
	{
		return $this->ErrorCode;
	}

	/**
	 * @return void
	 **/
	function setErrorCode($value)
	{
		$this->ErrorCode = $value;
	}

	/**
	 * @return ItemIDType
	 **/
	function getItemToUnsubscribe()
	{
		return $this->ItemToUnsubscribe;
	}

	/**
	 * @return void
	 **/
	function setItemToUnsubscribe($value)
	{
		$this->ItemToUnsubscribe = $value;
	}

}
?>
