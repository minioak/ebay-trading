<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ModifyActionCodeType.php';
require_once 'ItemIDArrayType.php';

/**
  * Enables the seller to change the item listings that are affected by a promotional sale. 
  * 
 **/

class SetPromotionalSaleListingsRequestType extends AbstractRequestType
{
	/**
	* @var long
	**/
	protected $PromotionalSaleID;

	/**
	* @var ModifyActionCodeType
	**/
	protected $Action;

	/**
	* @var ItemIDArrayType
	**/
	protected $PromotionalSaleItemIDArray;

	/**
	* @var long
	**/
	protected $StoreCategoryID;

	/**
	* @var long
	**/
	protected $CategoryID;

	/**
	* @var boolean
	**/
	protected $AllFixedPriceItems;

	/**
	* @var boolean
	**/
	protected $AllStoreInventoryItems;

	/**
	* @var boolean
	**/
	protected $AllAuctionItems;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetPromotionalSaleListingsRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'Action' =>
				array(
					'required' => false,
					'type' => 'ModifyActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'StoreCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AllFixedPriceItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AllStoreInventoryItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AllAuctionItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return ModifyActionCodeType
	 **/
	function getAction()
	{
		return $this->Action;
	}

	/**
	 * @return void
	 **/
	function setAction($value)
	{
		$this->Action = $value;
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
	 * @return long
	 **/
	function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}

	/**
	 * @return void
	 **/
	function setStoreCategoryID($value)
	{
		$this->StoreCategoryID = $value;
	}

	/**
	 * @return long
	 **/
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAllFixedPriceItems()
	{
		return $this->AllFixedPriceItems;
	}

	/**
	 * @return void
	 **/
	function setAllFixedPriceItems($value)
	{
		$this->AllFixedPriceItems = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAllStoreInventoryItems()
	{
		return $this->AllStoreInventoryItems;
	}

	/**
	 * @return void
	 **/
	function setAllStoreInventoryItems($value)
	{
		$this->AllStoreInventoryItems = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAllAuctionItems()
	{
		return $this->AllAuctionItems;
	}

	/**
	 * @return void
	 **/
	function setAllAuctionItems($value)
	{
		$this->AllAuctionItems = $value;
	}

}
?>
