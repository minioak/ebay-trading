<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemArrayType.php';
require_once 'MyeBayFavoriteSearchListType.php';
require_once 'MyeBayFavoriteSellerListType.php';

/**
  * Contains the items, searches and sellers that the user has saved to this 
  * list using the "Add to list" feature.  The name of the list is given by the 
  * "Name" element.
  * 
 **/

class UserDefinedListType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var int
	**/
	protected $ItemCount;

	/**
	* @var int
	**/
	protected $FavoriteSearcheCount;

	/**
	* @var int
	**/
	protected $FavoriteSellerCount;

	/**
	* @var ItemArrayType
	**/
	protected $ItemArray;

	/**
	* @var MyeBayFavoriteSearchListType
	**/
	protected $FavoriteSearches;

	/**
	* @var MyeBayFavoriteSellerListType
	**/
	protected $FavoriteSellers;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UserDefinedListType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				),
				'FavoriteSearcheCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteSellerCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemArray' =>
				array(
					'required' => false,
					'type' => 'ItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteSearches' =>
				array(
					'required' => false,
					'type' => 'MyeBayFavoriteSearchListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteSellers' =>
				array(
					'required' => false,
					'type' => 'MyeBayFavoriteSellerListType',
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
	 * @return string
	 **/
	function getName()
	{
		return $this->Name;
	}

	/**
	 * @return void
	 **/
	function setName($value)
	{
		$this->Name = $value;
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

	/**
	 * @return int
	 **/
	function getFavoriteSearcheCount()
	{
		return $this->FavoriteSearcheCount;
	}

	/**
	 * @return void
	 **/
	function setFavoriteSearcheCount($value)
	{
		$this->FavoriteSearcheCount = $value;
	}

	/**
	 * @return int
	 **/
	function getFavoriteSellerCount()
	{
		return $this->FavoriteSellerCount;
	}

	/**
	 * @return void
	 **/
	function setFavoriteSellerCount($value)
	{
		$this->FavoriteSellerCount = $value;
	}

	/**
	 * @return ItemArrayType
	 **/
	function getItemArray()
	{
		return $this->ItemArray;
	}

	/**
	 * @return void
	 **/
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}

	/**
	 * @return MyeBayFavoriteSearchListType
	 **/
	function getFavoriteSearches()
	{
		return $this->FavoriteSearches;
	}

	/**
	 * @return void
	 **/
	function setFavoriteSearches($value)
	{
		$this->FavoriteSearches = $value;
	}

	/**
	 * @return MyeBayFavoriteSellerListType
	 **/
	function getFavoriteSellers()
	{
		return $this->FavoriteSellers;
	}

	/**
	 * @return void
	 **/
	function setFavoriteSellers($value)
	{
		$this->FavoriteSellers = $value;
	}

}
?>
