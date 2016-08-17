<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemListCustomizationType.php';
require_once 'MyeBaySelectionType.php';
require_once 'BidAssistantListType.php';

/**
  * Retrieves information regarding a user's buying activity, such as items they are watching, bidding on, have
  * won, did not win, and have made Best Offers on.
  * 
 **/

class GetMyeBayBuyingRequestType extends AbstractRequestType
{
	/**
	* @var ItemListCustomizationType
	**/
	protected $WatchList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $BidList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $BestOfferList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $WonList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $LostList;

	/**
	* @var MyeBaySelectionType
	**/
	protected $FavoriteSearches;

	/**
	* @var MyeBaySelectionType
	**/
	protected $FavoriteSellers;

	/**
	* @var MyeBaySelectionType
	**/
	protected $SecondChanceOffer;

	/**
	* @var BidAssistantListType
	**/
	protected $BidAssistantList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $DeletedFromWonList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $DeletedFromLostList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $BuyingSummary;

	/**
	* @var MyeBaySelectionType
	**/
	protected $UserDefinedLists;

	/**
	* @var boolean
	**/
	protected $HideVariations;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetMyeBayBuyingRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'WatchList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WonList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LostList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteSearches' =>
				array(
					'required' => false,
					'type' => 'MyeBaySelectionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteSellers' =>
				array(
					'required' => false,
					'type' => 'MyeBaySelectionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SecondChanceOffer' =>
				array(
					'required' => false,
					'type' => 'MyeBaySelectionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidAssistantList' =>
				array(
					'required' => false,
					'type' => 'BidAssistantListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedFromWonList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedFromLostList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyingSummary' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserDefinedLists' =>
				array(
					'required' => false,
					'type' => 'MyeBaySelectionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HideVariations' =>
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
	 * @return ItemListCustomizationType
	 **/
	function getWatchList()
	{
		return $this->WatchList;
	}

	/**
	 * @return void
	 **/
	function setWatchList($value)
	{
		$this->WatchList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getBidList()
	{
		return $this->BidList;
	}

	/**
	 * @return void
	 **/
	function setBidList($value)
	{
		$this->BidList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getBestOfferList()
	{
		return $this->BestOfferList;
	}

	/**
	 * @return void
	 **/
	function setBestOfferList($value)
	{
		$this->BestOfferList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getWonList()
	{
		return $this->WonList;
	}

	/**
	 * @return void
	 **/
	function setWonList($value)
	{
		$this->WonList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getLostList()
	{
		return $this->LostList;
	}

	/**
	 * @return void
	 **/
	function setLostList($value)
	{
		$this->LostList = $value;
	}

	/**
	 * @return MyeBaySelectionType
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
	 * @return MyeBaySelectionType
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

	/**
	 * @return MyeBaySelectionType
	 **/
	function getSecondChanceOffer()
	{
		return $this->SecondChanceOffer;
	}

	/**
	 * @return void
	 **/
	function setSecondChanceOffer($value)
	{
		$this->SecondChanceOffer = $value;
	}

	/**
	 * @return BidAssistantListType
	 **/
	function getBidAssistantList()
	{
		return $this->BidAssistantList;
	}

	/**
	 * @return void
	 **/
	function setBidAssistantList($value)
	{
		$this->BidAssistantList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getDeletedFromWonList()
	{
		return $this->DeletedFromWonList;
	}

	/**
	 * @return void
	 **/
	function setDeletedFromWonList($value)
	{
		$this->DeletedFromWonList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getDeletedFromLostList()
	{
		return $this->DeletedFromLostList;
	}

	/**
	 * @return void
	 **/
	function setDeletedFromLostList($value)
	{
		$this->DeletedFromLostList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getBuyingSummary()
	{
		return $this->BuyingSummary;
	}

	/**
	 * @return void
	 **/
	function setBuyingSummary($value)
	{
		$this->BuyingSummary = $value;
	}

	/**
	 * @return MyeBaySelectionType
	 **/
	function getUserDefinedLists()
	{
		return $this->UserDefinedLists;
	}

	/**
	 * @return void
	 **/
	function setUserDefinedLists($value)
	{
		$this->UserDefinedLists = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHideVariations()
	{
		return $this->HideVariations;
	}

	/**
	 * @return void
	 **/
	function setHideVariations($value)
	{
		$this->HideVariations = $value;
	}

}
?>
