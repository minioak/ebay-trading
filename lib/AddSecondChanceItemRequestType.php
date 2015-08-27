<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'UserIDType.php';
require_once 'AmountType.php';
require_once 'SecondChanceOfferDurationCodeType.php';
require_once 'ItemIDType.php';

/**
  * Creates a new Second Chance Offer (that is, an offer for an unsold item)
  * for one of that item's non-winning bidders.
  * 
 **/

class AddSecondChanceItemRequestType extends AbstractRequestType
{
	/**
	* @var UserIDType
	**/
	protected $RecipientBidderUserID;

	/**
	* @var AmountType
	**/
	protected $BuyItNowPrice;

	/**
	* @var SecondChanceOfferDurationCodeType
	**/
	protected $Duration;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $SellerMessage;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddSecondChanceItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RecipientBidderUserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyItNowPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Duration' =>
				array(
					'required' => false,
					'type' => 'SecondChanceOfferDurationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerMessage' =>
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
	 * @return UserIDType
	 **/
	function getRecipientBidderUserID()
	{
		return $this->RecipientBidderUserID;
	}

	/**
	 * @return void
	 **/
	function setRecipientBidderUserID($value)
	{
		$this->RecipientBidderUserID = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getBuyItNowPrice()
	{
		return $this->BuyItNowPrice;
	}

	/**
	 * @return void
	 **/
	function setBuyItNowPrice($value)
	{
		$this->BuyItNowPrice = $value;
	}

	/**
	 * @return SecondChanceOfferDurationCodeType
	 **/
	function getDuration()
	{
		return $this->Duration;
	}

	/**
	 * @return void
	 **/
	function setDuration($value)
	{
		$this->Duration = $value;
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
	function getSellerMessage()
	{
		return $this->SellerMessage;
	}

	/**
	 * @return void
	 **/
	function setSellerMessage($value)
	{
		$this->SellerMessage = $value;
	}

}
?>
