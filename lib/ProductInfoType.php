<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'ProductStateCodeType.php';

/**
  * This type is deprecated.
  * 
 **/

class ProductInfoType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $AverageStartPrice;

	/**
	* @var AmountType
	**/
	protected $AverageSoldPrice;

	/**
	* @var string
	**/
	protected $Title;

	/**
	* @var ProductStateCodeType
	**/
	protected $ProductState;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AverageStartPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AverageSoldPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Title' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductState' =>
				array(
					'required' => false,
					'type' => 'ProductStateCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'productInfoID' =>
			array(
				'name' => ' productInfoID',
				'type' => 'string',
				'use' => 'optional'
			)));
	}

	/**
	 * @return AmountType
	 **/
	function getAverageStartPrice()
	{
		return $this->AverageStartPrice;
	}

	/**
	 * @return void
	 **/
	function setAverageStartPrice($value)
	{
		$this->AverageStartPrice = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getAverageSoldPrice()
	{
		return $this->AverageSoldPrice;
	}

	/**
	 * @return void
	 **/
	function setAverageSoldPrice($value)
	{
		$this->AverageSoldPrice = $value;
	}

	/**
	 * @return string
	 **/
	function getTitle()
	{
		return $this->Title;
	}

	/**
	 * @return void
	 **/
	function setTitle($value)
	{
		$this->Title = $value;
	}

	/**
	 * @return ProductStateCodeType
	 **/
	function getProductState()
	{
		return $this->ProductState;
	}

	/**
	 * @return void
	 **/
	function setProductState($value)
	{
		$this->ProductState = $value;
	}


}
?>
