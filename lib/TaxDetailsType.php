<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'TaxTypeCodeType.php';
require_once 'TaxDescriptionCodeType.php';
require_once 'AmountType.php';

/**
  * Type defining the TaxDetails container, which consists of detailed sales tax
  *  information for an order line item, including the tax type and description, sales tax
  *  on the item cost, and sales tax related to shipping and handling. The information in
  *  this container supercedes/overrides the sales tax information in the
  *  ShippingDetails.SalesTax container.
  * 
 **/

class TaxDetailsType extends EbatNs_ComplexType
{
	/**
	* @var TaxTypeCodeType
	**/
	protected $Imposition;

	/**
	* @var TaxDescriptionCodeType
	**/
	protected $TaxDescription;

	/**
	* @var AmountType
	**/
	protected $TaxAmount;

	/**
	* @var AmountType
	**/
	protected $TaxOnSubtotalAmount;

	/**
	* @var AmountType
	**/
	protected $TaxOnShippingAmount;

	/**
	* @var AmountType
	**/
	protected $TaxOnHandlingAmount;

	/**
	* @var string
	**/
	protected $TaxCode;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TaxDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Imposition' =>
				array(
					'required' => false,
					'type' => 'TaxTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TaxDescription' =>
				array(
					'required' => false,
					'type' => 'TaxDescriptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TaxAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TaxOnSubtotalAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TaxOnShippingAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TaxOnHandlingAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TaxCode' =>
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
	 * @return TaxTypeCodeType
	 **/
	function getImposition()
	{
		return $this->Imposition;
	}

	/**
	 * @return void
	 **/
	function setImposition($value)
	{
		$this->Imposition = $value;
	}

	/**
	 * @return TaxDescriptionCodeType
	 **/
	function getTaxDescription()
	{
		return $this->TaxDescription;
	}

	/**
	 * @return void
	 **/
	function setTaxDescription($value)
	{
		$this->TaxDescription = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTaxAmount()
	{
		return $this->TaxAmount;
	}

	/**
	 * @return void
	 **/
	function setTaxAmount($value)
	{
		$this->TaxAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTaxOnSubtotalAmount()
	{
		return $this->TaxOnSubtotalAmount;
	}

	/**
	 * @return void
	 **/
	function setTaxOnSubtotalAmount($value)
	{
		$this->TaxOnSubtotalAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTaxOnShippingAmount()
	{
		return $this->TaxOnShippingAmount;
	}

	/**
	 * @return void
	 **/
	function setTaxOnShippingAmount($value)
	{
		$this->TaxOnShippingAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTaxOnHandlingAmount()
	{
		return $this->TaxOnHandlingAmount;
	}

	/**
	 * @return void
	 **/
	function setTaxOnHandlingAmount($value)
	{
		$this->TaxOnHandlingAmount = $value;
	}

	/**
	 * @return string
	 **/
	function getTaxCode()
	{
		return $this->TaxCode;
	}

	/**
	 * @return void
	 **/
	function setTaxCode($value)
	{
		$this->TaxCode = $value;
	}

}
?>
