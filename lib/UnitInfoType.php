<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites. 
  * 
 **/

class UnitInfoType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $UnitType;

	/**
	* @var double
	**/
	protected $UnitQuantity;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UnitInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'UnitType' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnitQuantity' =>
				array(
					'required' => false,
					'type' => 'double',
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
	 * @return string
	 **/
	function getUnitType()
	{
		return $this->UnitType;
	}

	/**
	 * @return void
	 **/
	function setUnitType($value)
	{
		$this->UnitType = $value;
	}

	/**
	 * @return double
	 **/
	function getUnitQuantity()
	{
		return $this->UnitQuantity;
	}

	/**
	 * @return void
	 **/
	function setUnitQuantity($value)
	{
		$this->UnitQuantity = $value;
	}

}
?>
