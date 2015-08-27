<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'SellerDiscountType.php';

/**
  * Type defining the <b>SellerDiscounts</b> container, which consists of one or
  * more <b>SellerDiscount</b> nodes, as well as the original purchase price and 
  * shipping cost of the order line item.
  * 
 **/

class SellerDiscountsType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $OriginalItemPrice;

	/**
	* @var AmountType
	**/
	protected $OriginalItemShippingCost;

	/**
	* @var token
	**/
	protected $OriginalShippingService;

	/**
	* @var SellerDiscountType
	**/
	protected $SellerDiscount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerDiscountsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OriginalItemPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OriginalItemShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OriginalShippingService' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerDiscount' =>
				array(
					'required' => false,
					'type' => 'SellerDiscountType',
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
	 * @return AmountType
	 **/
	function getOriginalItemPrice()
	{
		return $this->OriginalItemPrice;
	}

	/**
	 * @return void
	 **/
	function setOriginalItemPrice($value)
	{
		$this->OriginalItemPrice = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getOriginalItemShippingCost()
	{
		return $this->OriginalItemShippingCost;
	}

	/**
	 * @return void
	 **/
	function setOriginalItemShippingCost($value)
	{
		$this->OriginalItemShippingCost = $value;
	}

	/**
	 * @return token
	 **/
	function getOriginalShippingService()
	{
		return $this->OriginalShippingService;
	}

	/**
	 * @return void
	 **/
	function setOriginalShippingService($value)
	{
		$this->OriginalShippingService = $value;
	}

	/**
	 * @return SellerDiscountType
	 * @param integer $index 
	 **/
	function getSellerDiscount($index = null)
	{
		if ($index !== null)
		{
			return $this->SellerDiscount[$index];
		}
		else
		{
			return $this->SellerDiscount;
		}
	}

	/**
	 * @return void
	 * @param SellerDiscountType $value
	 * @param integer $index 
	 **/
	function setSellerDiscount($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SellerDiscount[$index] = $value;
		}
		else
		{
			$this->SellerDiscount= $value;
		}
	}

	/**
	 * @return void
	 * @param SellerDiscountType $value
	 **/
	function addSellerDiscount($value)
	{
		$this->SellerDiscount[] = $value;
	}

}
?>
