<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type defines the <b>QuantityRestrictionPerBuyer</b> container, which is
  * used by the seller to restrict the quantity of items that may be purchased by one buyer
  * during the duration of a fixed-price listing (single or multi-variation).
  * 
 **/

class QuantityRestrictionPerBuyerInfoType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $MaximumQuantity;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('QuantityRestrictionPerBuyerInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MaximumQuantity' =>
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
	function getMaximumQuantity()
	{
		return $this->MaximumQuantity;
	}

	/**
	 * @return void
	 **/
	function setMaximumQuantity($value)
	{
		$this->MaximumQuantity = $value;
	}

}
?>
