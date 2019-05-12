<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MarkUpMarkDownEventTypeCodeType.php';

/**
  * Describes an individual mark-up or mark-down event. eBay will automatically
  * mark an application as down if attempts to deliver a notification fail
  * repeatedly. eBay may mark an application down manually under certain
  * circumstances.
  * 
 **/

class MarkUpMarkDownEventType extends EbatNs_ComplexType
{
	/**
	* @var MarkUpMarkDownEventTypeCodeType
	**/
	protected $Type;

	/**
	* @var dateTime
	**/
	protected $Time;

	/**
	* @var string
	**/
	protected $Reason;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MarkUpMarkDownEventType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Type' =>
				array(
					'required' => false,
					'type' => 'MarkUpMarkDownEventTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Time' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Reason' =>
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
	 * @return MarkUpMarkDownEventTypeCodeType
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
	 * @return dateTime
	 **/
	function getTime()
	{
		return $this->Time;
	}

	/**
	 * @return void
	 **/
	function setTime($value)
	{
		$this->Time = $value;
	}

	/**
	 * @return string
	 **/
	function getReason()
	{
		return $this->Reason;
	}

	/**
	 * @return void
	 **/
	function setReason($value)
	{
		$this->Reason = $value;
	}

}
?>
