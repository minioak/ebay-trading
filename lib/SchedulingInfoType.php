<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Contains information for scheduling limits for the user.
  * 
 **/

class SchedulingInfoType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $MaxScheduledMinutes;

	/**
	* @var int
	**/
	protected $MinScheduledMinutes;

	/**
	* @var int
	**/
	protected $MaxScheduledItems;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SchedulingInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MaxScheduledMinutes' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinScheduledMinutes' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxScheduledItems' =>
				array(
					'required' => false,
					'type' => 'int',
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
	function getMaxScheduledMinutes()
	{
		return $this->MaxScheduledMinutes;
	}

	/**
	 * @return void
	 **/
	function setMaxScheduledMinutes($value)
	{
		$this->MaxScheduledMinutes = $value;
	}

	/**
	 * @return int
	 **/
	function getMinScheduledMinutes()
	{
		return $this->MinScheduledMinutes;
	}

	/**
	 * @return void
	 **/
	function setMinScheduledMinutes($value)
	{
		$this->MinScheduledMinutes = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxScheduledItems()
	{
		return $this->MaxScheduledItems;
	}

	/**
	 * @return void
	 **/
	function setMaxScheduledItems($value)
	{
		$this->MaxScheduledItems = $value;
	}

}
?>
