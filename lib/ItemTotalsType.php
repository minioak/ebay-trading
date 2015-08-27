<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * Details about items involved in the summary for the specified time period.
  * 
 **/

class ItemTotalsType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $TotalQuantity;

	/**
	* @var AmountType
	**/
	protected $TotalValue;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemTotalsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TotalQuantity' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalValue' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
	 * @return long
	 **/
	function getTotalQuantity()
	{
		return $this->TotalQuantity;
	}

	/**
	 * @return void
	 **/
	function setTotalQuantity($value)
	{
		$this->TotalQuantity = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalValue()
	{
		return $this->TotalValue;
	}

	/**
	 * @return void
	 **/
	function setTotalValue($value)
	{
		$this->TotalValue = $value;
	}

}
?>
