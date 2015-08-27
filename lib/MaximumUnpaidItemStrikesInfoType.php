<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PeriodCodeType.php';

/**
  * Type defining the <b>MaximumUnpaidItemStrikesInfo</b> container, which is
  * used by the seller as a mechanism to block prospective buyers who have unpaid item
  * strikes on their account exceeding the value set in the <b>Count</b> 
  * field during a specified time period (set in the <b>Period</b> field).
  * 
 **/

class MaximumUnpaidItemStrikesInfoType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $Count;

	/**
	* @var PeriodCodeType
	**/
	protected $Period;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MaximumUnpaidItemStrikesInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Count' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Period' =>
				array(
					'required' => false,
					'type' => 'PeriodCodeType',
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
	 * @return int
	 **/
	function getCount()
	{
		return $this->Count;
	}

	/**
	 * @return void
	 **/
	function setCount($value)
	{
		$this->Count = $value;
	}

	/**
	 * @return PeriodCodeType
	 **/
	function getPeriod()
	{
		return $this->Period;
	}

	/**
	 * @return void
	 **/
	function setPeriod($value)
	{
		$this->Period = $value;
	}

}
?>
