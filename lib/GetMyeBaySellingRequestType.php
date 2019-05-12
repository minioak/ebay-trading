<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemListCustomizationType.php';

/**
  * Retrieves information regarding the user's selling activity,
  * such as items that the user is currently selling (the Active list),
  * items that have bids, sold items, and unsold items.
  * 
 **/

class GetMyeBaySellingRequestType extends AbstractRequestType
{
	/**
	* @var ItemListCustomizationType
	**/
	protected $ScheduledList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $ActiveList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $SoldList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $UnsoldList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $BidList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $DeletedFromSoldList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $DeletedFromUnsoldList;

	/**
	* @var ItemListCustomizationType
	**/
	protected $SellingSummary;

	/**
	* @var boolean
	**/
	protected $HideVariations;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetMyeBaySellingRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ScheduledList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ActiveList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SoldList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnsoldList' =>
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
				'DeletedFromSoldList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedFromUnsoldList' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellingSummary' =>
				array(
					'required' => false,
					'type' => 'ItemListCustomizationType',
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
	function getScheduledList()
	{
		return $this->ScheduledList;
	}

	/**
	 * @return void
	 **/
	function setScheduledList($value)
	{
		$this->ScheduledList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getActiveList()
	{
		return $this->ActiveList;
	}

	/**
	 * @return void
	 **/
	function setActiveList($value)
	{
		$this->ActiveList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getSoldList()
	{
		return $this->SoldList;
	}

	/**
	 * @return void
	 **/
	function setSoldList($value)
	{
		$this->SoldList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getUnsoldList()
	{
		return $this->UnsoldList;
	}

	/**
	 * @return void
	 **/
	function setUnsoldList($value)
	{
		$this->UnsoldList = $value;
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
	function getDeletedFromSoldList()
	{
		return $this->DeletedFromSoldList;
	}

	/**
	 * @return void
	 **/
	function setDeletedFromSoldList($value)
	{
		$this->DeletedFromSoldList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getDeletedFromUnsoldList()
	{
		return $this->DeletedFromUnsoldList;
	}

	/**
	 * @return void
	 **/
	function setDeletedFromUnsoldList($value)
	{
		$this->DeletedFromUnsoldList = $value;
	}

	/**
	 * @return ItemListCustomizationType
	 **/
	function getSellingSummary()
	{
		return $this->SellingSummary;
	}

	/**
	 * @return void
	 **/
	function setSellingSummary($value)
	{
		$this->SellingSummary = $value;
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
