<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AnnouncementMessageCodeType.php';

/**
  * Type defining the <b>ShippingServiceDetails.DeprecationDetails</b> container that is returned in the <b>GeteBayDetails</b> response. The <b>ShippingServiceDetails.DeprecationDetails</b> container consists of information related to a deprecated shipping service.
  * 
 **/

class AnnouncementMessageType extends EbatNs_ComplexType
{
	/**
	* @var dateTime
	**/
	protected $AnnouncementStartTime;

	/**
	* @var dateTime
	**/
	protected $EventTime;

	/**
	* @var AnnouncementMessageCodeType
	**/
	protected $MessageType;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AnnouncementMessageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AnnouncementStartTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EventTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageType' =>
				array(
					'required' => false,
					'type' => 'AnnouncementMessageCodeType',
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
	function getAnnouncementStartTime()
	{
		return $this->AnnouncementStartTime;
	}

	/**
	 * @return void
	 **/
	function setAnnouncementStartTime($value)
	{
		$this->AnnouncementStartTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEventTime()
	{
		return $this->EventTime;
	}

	/**
	 * @return void
	 **/
	function setEventTime($value)
	{
		$this->EventTime = $value;
	}

	/**
	 * @return AnnouncementMessageCodeType
	 **/
	function getMessageType()
	{
		return $this->MessageType;
	}

	/**
	 * @return void
	 **/
	function setMessageType($value)
	{
		$this->MessageType = $value;
	}

}
?>
