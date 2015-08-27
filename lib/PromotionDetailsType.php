<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'PromotionItemPriceTypeCodeType.php';

/**
  * This type is deprecated as Cross Promotions are no longer supported in the APIs.
  * 
  * 
 **/

class PromotionDetailsType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $PromotionPrice;

	/**
	* @var PromotionItemPriceTypeCodeType
	**/
	protected $PromotionPriceType;

	/**
	* @var int
	**/
	protected $BidCount;

	/**
	* @var AmountType
	**/
	protected $ConvertedPromotionPrice;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PromotionDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PromotionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionPriceType' =>
				array(
					'required' => false,
					'type' => 'PromotionItemPriceTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedPromotionPrice' =>
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
	 * @return AmountType
	 **/
	function getPromotionPrice()
	{
		return $this->PromotionPrice;
	}

	/**
	 * @return void
	 **/
	function setPromotionPrice($value)
	{
		$this->PromotionPrice = $value;
	}

	/**
	 * @return PromotionItemPriceTypeCodeType
	 **/
	function getPromotionPriceType()
	{
		return $this->PromotionPriceType;
	}

	/**
	 * @return void
	 **/
	function setPromotionPriceType($value)
	{
		$this->PromotionPriceType = $value;
	}

	/**
	 * @return int
	 **/
	function getBidCount()
	{
		return $this->BidCount;
	}

	/**
	 * @return void
	 **/
	function setBidCount($value)
	{
		$this->BidCount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedPromotionPrice()
	{
		return $this->ConvertedPromotionPrice;
	}

	/**
	 * @return void
	 **/
	function setConvertedPromotionPrice($value)
	{
		$this->ConvertedPromotionPrice = $value;
	}

}
?>
