<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'ItemIDType.php';
require_once 'SellerBusinessCodeType.php';
require_once 'EndReasonCodeType.php';

/**
  * Various details about a listing. Some of the details are calculated or derived after
  * an item is listed. The details in this type include the start and end time and
  * the converted (localized) prices. The details in this type also include
  * input values applicable to the Best Offer feature.
  * Additional details in this type include flags indicating if a seller
  * specified fields whose values are not visible to the requesting user.
  * 
 **/

class ListingDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $Adult;

	/**
	* @var boolean
	**/
	protected $BindingAuction;

	/**
	* @var boolean
	**/
	protected $CheckoutEnabled;

	/**
	* @var AmountType
	**/
	protected $ConvertedBuyItNowPrice;

	/**
	* @var AmountType
	**/
	protected $ConvertedStartPrice;

	/**
	* @var AmountType
	**/
	protected $ConvertedReservePrice;

	/**
	* @var boolean
	**/
	protected $HasReservePrice;

	/**
	* @var ItemIDType
	**/
	protected $RelistedItemID;

	/**
	* @var ItemIDType
	**/
	protected $SecondChanceOriginalItemID;

	/**
	* @var dateTime
	**/
	protected $StartTime;

	/**
	* @var dateTime
	**/
	protected $EndTime;

	/**
	* @var anyURI
	**/
	protected $ViewItemURL;

	/**
	* @var boolean
	**/
	protected $HasUnansweredQuestions;

	/**
	* @var boolean
	**/
	protected $HasPublicMessages;

	/**
	* @var boolean
	**/
	protected $BuyItNowAvailable;

	/**
	* @var SellerBusinessCodeType
	**/
	protected $SellerBusinessType;

	/**
	* @var AmountType
	**/
	protected $MinimumBestOfferPrice;

	/**
	* @var string
	**/
	protected $MinimumBestOfferMessage;

	/**
	* @var string
	**/
	protected $LocalListingDistance;

	/**
	* @var ItemIDType
	**/
	protected $TCROriginalItemID;

	/**
	* @var anyURI
	**/
	protected $ViewItemURLForNaturalSearch;

	/**
	* @var boolean
	**/
	protected $PayPerLeadEnabled;

	/**
	* @var AmountType
	**/
	protected $BestOfferAutoAcceptPrice;

	/**
	* @var EndReasonCodeType
	**/
	protected $EndingReason;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Adult' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BindingAuction' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CheckoutEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedBuyItNowPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedStartPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedReservePrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasReservePrice' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RelistedItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SecondChanceOriginalItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StartTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ViewItemURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasUnansweredQuestions' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasPublicMessages' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyItNowAvailable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerBusinessType' =>
				array(
					'required' => false,
					'type' => 'SellerBusinessCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinimumBestOfferPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinimumBestOfferMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalListingDistance' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TCROriginalItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ViewItemURLForNaturalSearch' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPerLeadEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferAutoAcceptPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndingReason' =>
				array(
					'required' => false,
					'type' => 'EndReasonCodeType',
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
	 * @return boolean
	 **/
	function getAdult()
	{
		return $this->Adult;
	}

	/**
	 * @return void
	 **/
	function setAdult($value)
	{
		$this->Adult = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBindingAuction()
	{
		return $this->BindingAuction;
	}

	/**
	 * @return void
	 **/
	function setBindingAuction($value)
	{
		$this->BindingAuction = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCheckoutEnabled()
	{
		return $this->CheckoutEnabled;
	}

	/**
	 * @return void
	 **/
	function setCheckoutEnabled($value)
	{
		$this->CheckoutEnabled = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedBuyItNowPrice()
	{
		return $this->ConvertedBuyItNowPrice;
	}

	/**
	 * @return void
	 **/
	function setConvertedBuyItNowPrice($value)
	{
		$this->ConvertedBuyItNowPrice = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedStartPrice()
	{
		return $this->ConvertedStartPrice;
	}

	/**
	 * @return void
	 **/
	function setConvertedStartPrice($value)
	{
		$this->ConvertedStartPrice = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedReservePrice()
	{
		return $this->ConvertedReservePrice;
	}

	/**
	 * @return void
	 **/
	function setConvertedReservePrice($value)
	{
		$this->ConvertedReservePrice = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHasReservePrice()
	{
		return $this->HasReservePrice;
	}

	/**
	 * @return void
	 **/
	function setHasReservePrice($value)
	{
		$this->HasReservePrice = $value;
	}

	/**
	 * @return ItemIDType
	 **/
	function getRelistedItemID()
	{
		return $this->RelistedItemID;
	}

	/**
	 * @return void
	 **/
	function setRelistedItemID($value)
	{
		$this->RelistedItemID = $value;
	}

	/**
	 * @return ItemIDType
	 **/
	function getSecondChanceOriginalItemID()
	{
		return $this->SecondChanceOriginalItemID;
	}

	/**
	 * @return void
	 **/
	function setSecondChanceOriginalItemID($value)
	{
		$this->SecondChanceOriginalItemID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getStartTime()
	{
		return $this->StartTime;
	}

	/**
	 * @return void
	 **/
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndTime()
	{
		return $this->EndTime;
	}

	/**
	 * @return void
	 **/
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getViewItemURL()
	{
		return $this->ViewItemURL;
	}

	/**
	 * @return void
	 **/
	function setViewItemURL($value)
	{
		$this->ViewItemURL = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHasUnansweredQuestions()
	{
		return $this->HasUnansweredQuestions;
	}

	/**
	 * @return void
	 **/
	function setHasUnansweredQuestions($value)
	{
		$this->HasUnansweredQuestions = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHasPublicMessages()
	{
		return $this->HasPublicMessages;
	}

	/**
	 * @return void
	 **/
	function setHasPublicMessages($value)
	{
		$this->HasPublicMessages = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBuyItNowAvailable()
	{
		return $this->BuyItNowAvailable;
	}

	/**
	 * @return void
	 **/
	function setBuyItNowAvailable($value)
	{
		$this->BuyItNowAvailable = $value;
	}

	/**
	 * @return SellerBusinessCodeType
	 **/
	function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}

	/**
	 * @return void
	 **/
	function setSellerBusinessType($value)
	{
		$this->SellerBusinessType = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getMinimumBestOfferPrice()
	{
		return $this->MinimumBestOfferPrice;
	}

	/**
	 * @return void
	 **/
	function setMinimumBestOfferPrice($value)
	{
		$this->MinimumBestOfferPrice = $value;
	}

	/**
	 * @return string
	 **/
	function getMinimumBestOfferMessage()
	{
		return $this->MinimumBestOfferMessage;
	}

	/**
	 * @return void
	 **/
	function setMinimumBestOfferMessage($value)
	{
		$this->MinimumBestOfferMessage = $value;
	}

	/**
	 * @return string
	 **/
	function getLocalListingDistance()
	{
		return $this->LocalListingDistance;
	}

	/**
	 * @return void
	 **/
	function setLocalListingDistance($value)
	{
		$this->LocalListingDistance = $value;
	}

	/**
	 * @return ItemIDType
	 **/
	function getTCROriginalItemID()
	{
		return $this->TCROriginalItemID;
	}

	/**
	 * @return void
	 **/
	function setTCROriginalItemID($value)
	{
		$this->TCROriginalItemID = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getViewItemURLForNaturalSearch()
	{
		return $this->ViewItemURLForNaturalSearch;
	}

	/**
	 * @return void
	 **/
	function setViewItemURLForNaturalSearch($value)
	{
		$this->ViewItemURLForNaturalSearch = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPayPerLeadEnabled()
	{
		return $this->PayPerLeadEnabled;
	}

	/**
	 * @return void
	 **/
	function setPayPerLeadEnabled($value)
	{
		$this->PayPerLeadEnabled = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getBestOfferAutoAcceptPrice()
	{
		return $this->BestOfferAutoAcceptPrice;
	}

	/**
	 * @return void
	 **/
	function setBestOfferAutoAcceptPrice($value)
	{
		$this->BestOfferAutoAcceptPrice = $value;
	}

	/**
	 * @return EndReasonCodeType
	 **/
	function getEndingReason()
	{
		return $this->EndingReason;
	}

	/**
	 * @return void
	 **/
	function setEndingReason($value)
	{
		$this->EndingReason = $value;
	}

}
?>
