<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DiscountNameCodeType.php';
require_once 'AmountType.php';

/**
  * Details of a promotional shipping discount.
  * 
 **/

class PromotionalShippingDiscountDetailsType extends EbatNs_ComplexType
{
	/**
	* @var DiscountNameCodeType
	**/
	protected $DiscountName;

	/**
	* @var AmountType
	**/
	protected $ShippingCost;

	/**
	* @var AmountType
	**/
	protected $OrderAmount;

	/**
	* @var int
	**/
	protected $ItemCount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PromotionalShippingDiscountDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DiscountName' =>
				array(
					'required' => false,
					'type' => 'DiscountNameCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemCount' =>
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
	 * @return DiscountNameCodeType
	 **/
	function getDiscountName()
	{
		return $this->DiscountName;
	}

	/**
	 * @return void
	 **/
	function setDiscountName($value)
	{
		$this->DiscountName = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingCost()
	{
		return $this->ShippingCost;
	}

	/**
	 * @return void
	 **/
	function setShippingCost($value)
	{
		$this->ShippingCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getOrderAmount()
	{
		return $this->OrderAmount;
	}

	/**
	 * @return void
	 **/
	function setOrderAmount($value)
	{
		$this->OrderAmount = $value;
	}

	/**
	 * @return int
	 **/
	function getItemCount()
	{
		return $this->ItemCount;
	}

	/**
	 * @return void
	 **/
	function setItemCount($value)
	{
		$this->ItemCount = $value;
	}

}
?>
