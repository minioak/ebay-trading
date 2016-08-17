<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated.
  * 
 **/

class ScheduleType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $ScheduleID;

	/**
	* @var dateTime
	**/
	protected $ScheduleTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ScheduleType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ScheduleID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ScheduleTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return int
	 **/
	function getScheduleID()
	{
		return $this->ScheduleID;
	}

	/**
	 * @return void
	 **/
	function setScheduleID($value)
	{
		$this->ScheduleID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getScheduleTime()
	{
		return $this->ScheduleTime;
	}

	/**
	 * @return void
	 **/
	function setScheduleTime($value)
	{
		$this->ScheduleTime = $value;
	}

}
?>
