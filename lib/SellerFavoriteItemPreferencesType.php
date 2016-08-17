<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingTypeCodeType.php';
require_once 'StoreItemListSortOrderCodeType.php';
require_once 'AmountType.php';
require_once 'ItemIDType.php';

/**
  * Contains the data for the seller favorite item preferences, i.e.  the manual or automatic selection criteria to display items for buyer's favourite seller opt in email marketing.
  * 
 **/

class SellerFavoriteItemPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $SearchKeywords;

	/**
	* @var long
	**/
	protected $StoreCategoryID;

	/**
	* @var ListingTypeCodeType
	**/
	protected $ListingType;

	/**
	* @var StoreItemListSortOrderCodeType
	**/
	protected $SearchSortOrder;

	/**
	* @var AmountType
	**/
	protected $MinPrice;

	/**
	* @var AmountType
	**/
	protected $MaxPrice;

	/**
	* @var ItemIDType
	**/
	protected $FavoriteItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerFavoriteItemPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SearchKeywords' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'ListingType' =>
				array(
					'required' => false,
					'type' => 'ListingTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchSortOrder' =>
				array(
					'required' => false,
					'type' => 'StoreItemListSortOrderCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
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
	 * @return string
	 **/
	function getSearchKeywords()
	{
		return $this->SearchKeywords;
	}

	/**
	 * @return void
	 **/
	function setSearchKeywords($value)
	{
		$this->SearchKeywords = $value;
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
	 * @return ListingTypeCodeType
	 **/
	function getListingType()
	{
		return $this->ListingType;
	}

	/**
	 * @return void
	 **/
	function setListingType($value)
	{
		$this->ListingType = $value;
	}

	/**
	 * @return StoreItemListSortOrderCodeType
	 **/
	function getSearchSortOrder()
	{
		return $this->SearchSortOrder;
	}

	/**
	 * @return void
	 **/
	function setSearchSortOrder($value)
	{
		$this->SearchSortOrder = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getMinPrice()
	{
		return $this->MinPrice;
	}

	/**
	 * @return void
	 **/
	function setMinPrice($value)
	{
		$this->MinPrice = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getMaxPrice()
	{
		return $this->MaxPrice;
	}

	/**
	 * @return void
	 **/
	function setMaxPrice($value)
	{
		$this->MaxPrice = $value;
	}

	/**
	 * @return ItemIDType
	 * @param integer $index 
	 **/
	function getFavoriteItemID($index = null)
	{
		if ($index !== null)
		{
			return $this->FavoriteItemID[$index];
		}
		else
		{
			return $this->FavoriteItemID;
		}
	}

	/**
	 * @return void
	 * @param ItemIDType $value
	 * @param integer $index 
	 **/
	function setFavoriteItemID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->FavoriteItemID[$index] = $value;
		}
		else
		{
			$this->FavoriteItemID= $value;
		}
	}

	/**
	 * @return void
	 * @param ItemIDType $value
	 **/
	function addFavoriteItemID($value)
	{
		$this->FavoriteItemID[] = $value;
	}

}
?>
