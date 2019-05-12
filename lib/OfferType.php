<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BidActionCodeType.php';
require_once 'CurrencyCodeType.php';
require_once 'ItemIDType.php';
require_once 'AmountType.php';
require_once 'UserType.php';
require_once 'BestOfferIDType.php';

/**
  * Contains information pertaining to an offer made on an item listing and
  * the current bidding or purchase state of the listing.
  * 
 **/

class OfferType extends EbatNs_ComplexType
{
	/**
	* @var BidActionCodeType
	**/
	protected $Action;

	/**
	* @var CurrencyCodeType
	**/
	protected $Currency;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var AmountType
	**/
	protected $MaxBid;

	/**
	* @var int
	**/
	protected $Quantity;

	/**
	* @var boolean
	**/
	protected $SecondChanceEnabled;

	/**
	* @var CurrencyCodeType
	**/
	protected $SiteCurrency;

	/**
	* @var dateTime
	**/
	protected $TimeBid;

	/**
	* @var AmountType
	**/
	protected $HighestBid;

	/**
	* @var AmountType
	**/
	protected $ConvertedPrice;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var UserType
	**/
	protected $User;

	/**
	* @var boolean
	**/
	protected $UserConsent;

	/**
	* @var int
	**/
	protected $BidCount;

	/**
	* @var string
	**/
	protected $Message;

	/**
	* @var BestOfferIDType
	**/
	protected $BestOfferID;

	/**
	* @var AmountType
	**/
	protected $MyMaxBid;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('OfferType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Action' =>
				array(
					'required' => false,
					'type' => 'BidActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Currency' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
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
				'MaxBid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Quantity' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SecondChanceEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SiteCurrency' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TimeBid' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HighestBid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'User' =>
				array(
					'required' => false,
					'type' => 'UserType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserConsent' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
				'Message' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferID' =>
				array(
					'required' => false,
					'type' => 'BestOfferIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MyMaxBid' =>
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
	 * @return BidActionCodeType
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
	 * @return CurrencyCodeType
	 **/
	function getCurrency()
	{
		return $this->Currency;
	}

	/**
	 * @return void
	 **/
	function setCurrency($value)
	{
		$this->Currency = $value;
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
	 * @return AmountType
	 **/
	function getMaxBid()
	{
		return $this->MaxBid;
	}

	/**
	 * @return void
	 **/
	function setMaxBid($value)
	{
		$this->MaxBid = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantity()
	{
		return $this->Quantity;
	}

	/**
	 * @return void
	 **/
	function setQuantity($value)
	{
		$this->Quantity = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSecondChanceEnabled()
	{
		return $this->SecondChanceEnabled;
	}

	/**
	 * @return void
	 **/
	function setSecondChanceEnabled($value)
	{
		$this->SecondChanceEnabled = $value;
	}

	/**
	 * @return CurrencyCodeType
	 **/
	function getSiteCurrency()
	{
		return $this->SiteCurrency;
	}

	/**
	 * @return void
	 **/
	function setSiteCurrency($value)
	{
		$this->SiteCurrency = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getTimeBid()
	{
		return $this->TimeBid;
	}

	/**
	 * @return void
	 **/
	function setTimeBid($value)
	{
		$this->TimeBid = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getHighestBid()
	{
		return $this->HighestBid;
	}

	/**
	 * @return void
	 **/
	function setHighestBid($value)
	{
		$this->HighestBid = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedPrice()
	{
		return $this->ConvertedPrice;
	}

	/**
	 * @return void
	 **/
	function setConvertedPrice($value)
	{
		$this->ConvertedPrice = $value;
	}

	/**
	 * @return string
	 **/
	function getTransactionID()
	{
		return $this->TransactionID;
	}

	/**
	 * @return void
	 **/
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}

	/**
	 * @return UserType
	 **/
	function getUser()
	{
		return $this->User;
	}

	/**
	 * @return void
	 **/
	function setUser($value)
	{
		$this->User = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUserConsent()
	{
		return $this->UserConsent;
	}

	/**
	 * @return void
	 **/
	function setUserConsent($value)
	{
		$this->UserConsent = $value;
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
	 * @return string
	 **/
	function getMessage()
	{
		return $this->Message;
	}

	/**
	 * @return void
	 **/
	function setMessage($value)
	{
		$this->Message = $value;
	}

	/**
	 * @return BestOfferIDType
	 **/
	function getBestOfferID()
	{
		return $this->BestOfferID;
	}

	/**
	 * @return void
	 **/
	function setBestOfferID($value)
	{
		$this->BestOfferID = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getMyMaxBid()
	{
		return $this->MyMaxBid;
	}

	/**
	 * @return void
	 **/
	function setMyMaxBid($value)
	{
		$this->MyMaxBid = $value;
	}

}
?>
