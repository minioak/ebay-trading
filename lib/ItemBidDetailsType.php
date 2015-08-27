<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';
require_once 'UserIDType.php';

/**
  * Contains bidding details information of a user on an item.
  * 
 **/

class ItemBidDetailsType extends EbatNs_ComplexType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var int
	**/
	protected $BidCount;

	/**
	* @var UserIDType
	**/
	protected $SellerID;

	/**
	* @var dateTime
	**/
	protected $LastBidTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemBidDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'SellerID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LastBidTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return string
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
	 * @return UserIDType
	 **/
	function getSellerID()
	{
		return $this->SellerID;
	}

	/**
	 * @return void
	 **/
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getLastBidTime()
	{
		return $this->LastBidTime;
	}

	/**
	 * @return void
	 **/
	function setLastBidTime($value)
	{
		$this->LastBidTime = $value;
	}

}
?>
