<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * Type for expressing sales tax data.
  * 
 **/

class SalesTaxType extends EbatNs_ComplexType
{
	/**
	* @var float
	**/
	protected $SalesTaxPercent;

	/**
	* @var string
	**/
	protected $SalesTaxState;

	/**
	* @var boolean
	**/
	protected $ShippingIncludedInTax;

	/**
	* @var AmountType
	**/
	protected $SalesTaxAmount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SalesTaxType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SalesTaxPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalesTaxState' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingIncludedInTax' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalesTaxAmount' =>
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
	 * @return float
	 **/
	function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}

	/**
	 * @return void
	 **/
	function setSalesTaxPercent($value)
	{
		$this->SalesTaxPercent = $value;
	}

	/**
	 * @return string
	 **/
	function getSalesTaxState()
	{
		return $this->SalesTaxState;
	}

	/**
	 * @return void
	 **/
	function setSalesTaxState($value)
	{
		$this->SalesTaxState = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}

	/**
	 * @return void
	 **/
	function setShippingIncludedInTax($value)
	{
		$this->ShippingIncludedInTax = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getSalesTaxAmount()
	{
		return $this->SalesTaxAmount;
	}

	/**
	 * @return void
	 **/
	function setSalesTaxAmount($value)
	{
		$this->SalesTaxAmount = $value;
	}

}
?>
