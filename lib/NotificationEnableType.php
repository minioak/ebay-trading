<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEventTypeCodeType.php';
require_once 'EnableCodeType.php';

/**
  * Specifies a notification event and whether the
  * notification is enabled or disabled.
  * 
 **/

class NotificationEnableType extends EbatNs_ComplexType
{
	/**
	* @var NotificationEventTypeCodeType
	**/
	protected $EventType;

	/**
	* @var EnableCodeType
	**/
	protected $EventEnable;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NotificationEnableType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EventType' =>
				array(
					'required' => false,
					'type' => 'NotificationEventTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EventEnable' =>
				array(
					'required' => false,
					'type' => 'EnableCodeType',
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
	 * @return NotificationEventTypeCodeType
	 **/
	function getEventType()
	{
		return $this->EventType;
	}

	/**
	 * @return void
	 **/
	function setEventType($value)
	{
		$this->EventType = $value;
	}

	/**
	 * @return EnableCodeType
	 **/
	function getEventEnable()
	{
		return $this->EventEnable;
	}

	/**
	 * @return void
	 **/
	function setEventEnable($value)
	{
		$this->EventEnable = $value;
	}

}
?>
