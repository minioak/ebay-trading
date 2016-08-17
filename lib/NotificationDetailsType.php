<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEventTypeCodeType.php';
require_once 'NotificationEventStateCodeType.php';

/**
  * Information about a single notification. Notification information includes
  * the reference ID, notification type, current status, time delivered, error code,
  * and error message for the notification. If notification details are included in
  * the response, all of the detail fields are returned.
  * 
 **/

class NotificationDetailsType extends EbatNs_ComplexType
{
	/**
	* @var anyURI
	**/
	protected $DeliveryURL;

	/**
	* @var string
	**/
	protected $ReferenceID;

	/**
	* @var dateTime
	**/
	protected $ExpirationTime;

	/**
	* @var NotificationEventTypeCodeType
	**/
	protected $Type;

	/**
	* @var int
	**/
	protected $Retries;

	/**
	* @var NotificationEventStateCodeType
	**/
	protected $DeliveryStatus;

	/**
	* @var dateTime
	**/
	protected $NextRetryTime;

	/**
	* @var dateTime
	**/
	protected $DeliveryTime;

	/**
	* @var string
	**/
	protected $ErrorMessage;

	/**
	* @var string
	**/
	protected $DeliveryURLName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NotificationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DeliveryURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferenceID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpirationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Type' =>
				array(
					'required' => false,
					'type' => 'NotificationEventTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Retries' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeliveryStatus' =>
				array(
					'required' => false,
					'type' => 'NotificationEventStateCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NextRetryTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeliveryTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ErrorMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return anyURI
	 **/
	function getDeliveryURL()
	{
		return $this->DeliveryURL;
	}

	/**
	 * @return void
	 **/
	function setDeliveryURL($value)
	{
		$this->DeliveryURL = $value;
	}

	/**
	 * @return string
	 **/
	function getReferenceID()
	{
		return $this->ReferenceID;
	}

	/**
	 * @return void
	 **/
	function setReferenceID($value)
	{
		$this->ReferenceID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getExpirationTime()
	{
		return $this->ExpirationTime;
	}

	/**
	 * @return void
	 **/
	function setExpirationTime($value)
	{
		$this->ExpirationTime = $value;
	}

	/**
	 * @return NotificationEventTypeCodeType
	 **/
	function getType()
	{
		return $this->Type;
	}

	/**
	 * @return void
	 **/
	function setType($value)
	{
		$this->Type = $value;
	}

	/**
	 * @return int
	 **/
	function getRetries()
	{
		return $this->Retries;
	}

	/**
	 * @return void
	 **/
	function setRetries($value)
	{
		$this->Retries = $value;
	}

	/**
	 * @return NotificationEventStateCodeType
	 **/
	function getDeliveryStatus()
	{
		return $this->DeliveryStatus;
	}

	/**
	 * @return void
	 **/
	function setDeliveryStatus($value)
	{
		$this->DeliveryStatus = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getNextRetryTime()
	{
		return $this->NextRetryTime;
	}

	/**
	 * @return void
	 **/
	function setNextRetryTime($value)
	{
		$this->NextRetryTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getDeliveryTime()
	{
		return $this->DeliveryTime;
	}

	/**
	 * @return void
	 **/
	function setDeliveryTime($value)
	{
		$this->DeliveryTime = $value;
	}

	/**
	 * @return string
	 **/
	function getErrorMessage()
	{
		return $this->ErrorMessage;
	}

	/**
	 * @return void
	 **/
	function setErrorMessage($value)
	{
		$this->ErrorMessage = $value;
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
