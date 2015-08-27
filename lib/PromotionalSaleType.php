<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDArrayType.php';
require_once 'PromotionalSaleStatusCodeType.php';
require_once 'DiscountCodeType.php';
require_once 'PromotionalSaleTypeCodeType.php';

/**
  * Details for a single promotional sale.
  * 
 **/

class PromotionalSaleType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $PromotionalSaleID;

	/**
	* @var string
	**/
	protected $PromotionalSaleName;

	/**
	* @var ItemIDArrayType
	**/
	protected $PromotionalSaleItemIDArray;

	/**
	* @var PromotionalSaleStatusCodeType
	**/
	protected $Status;

	/**
	* @var DiscountCodeType
	**/
	protected $DiscountType;

	/**
	* @var double
	**/
	protected $DiscountValue;

	/**
	* @var dateTime
	**/
	protected $PromotionalSaleStartTime;

	/**
	* @var dateTime
	**/
	protected $PromotionalSaleEndTime;

	/**
	* @var PromotionalSaleTypeCodeType
	**/
	protected $PromotionalSaleType;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PromotionalSaleType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PromotionalSaleID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleItemIDArray' =>
				array(
					'required' => false,
					'type' => 'ItemIDArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'PromotionalSaleStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountType' =>
				array(
					'required' => false,
					'type' => 'DiscountCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountValue' =>
				array(
					'required' => false,
					'type' => 'double',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleStartTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleEndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleType' =>
				array(
					'required' => false,
					'type' => 'PromotionalSaleTypeCodeType',
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
	function getPromotionalSaleID()
	{
		return $this->PromotionalSaleID;
	}

	/**
	 * @return void
	 **/
	function setPromotionalSaleID($value)
	{
		$this->PromotionalSaleID = $value;
	}

	/**
	 * @return string
	 **/
	function getPromotionalSaleName()
	{
		return $this->PromotionalSaleName;
	}

	/**
	 * @return void
	 **/
	function setPromotionalSaleName($value)
	{
		$this->PromotionalSaleName = $value;
	}

	/**
	 * @return ItemIDArrayType
	 **/
	function getPromotionalSaleItemIDArray()
	{
		return $this->PromotionalSaleItemIDArray;
	}

	/**
	 * @return void
	 **/
	function setPromotionalSaleItemIDArray($value)
	{
		$this->PromotionalSaleItemIDArray = $value;
	}

	/**
	 * @return PromotionalSaleStatusCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

	/**
	 * @return DiscountCodeType
	 **/
	function getDiscountType()
	{
		return $this->DiscountType;
	}

	/**
	 * @return void
	 **/
	function setDiscountType($value)
	{
		$this->DiscountType = $value;
	}

	/**
	 * @return double
	 **/
	function getDiscountValue()
	{
		return $this->DiscountValue;
	}

	/**
	 * @return void
	 **/
	function setDiscountValue($value)
	{
		$this->DiscountValue = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getPromotionalSaleStartTime()
	{
		return $this->PromotionalSaleStartTime;
	}

	/**
	 * @return void
	 **/
	function setPromotionalSaleStartTime($value)
	{
		$this->PromotionalSaleStartTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getPromotionalSaleEndTime()
	{
		return $this->PromotionalSaleEndTime;
	}

	/**
	 * @return void
	 **/
	function setPromotionalSaleEndTime($value)
	{
		$this->PromotionalSaleEndTime = $value;
	}

	/**
	 * @return PromotionalSaleTypeCodeType
	 **/
	function getPromotionalSaleType()
	{
		return $this->PromotionalSaleType;
	}

	/**
	 * @return void
	 **/
	function setPromotionalSaleType($value)
	{
		$this->PromotionalSaleType = $value;
	}

}
?>
