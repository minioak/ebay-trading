<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEventTypeCodeType.php';

/**
  * 
 **/

class SupportedEventTypesArrayType extends EbatNs_ComplexType
{
	/**
	* @var NotificationEventTypeCodeType
	**/
	protected $EventType;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SupportedEventTypesArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EventType' =>
				array(
					'required' => false,
					'type' => 'NotificationEventTypeCodeType',
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
	 * @return NotificationEventTypeCodeType
	 * @param integer $index 
	 **/
	function getEventType($index = null)
	{
		if ($index !== null)
		{
			return $this->EventType[$index];
		}
		else
		{
			return $this->EventType;
		}
	}

	/**
	 * @return void
	 * @param NotificationEventTypeCodeType $value
	 * @param integer $index 
	 **/
	function setEventType($value, $index = null)
	{
		if ($index !== null)
		{
			$this->EventType[$index] = $value;
		}
		else
		{
			$this->EventType= $value;
		}
	}

	/**
	 * @return void
	 * @param NotificationEventTypeCodeType $value
	 **/
	function addEventType($value)
	{
		$this->EventType[] = $value;
	}

}
?>
