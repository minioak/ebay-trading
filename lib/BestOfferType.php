<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BestOfferIDType.php';
require_once 'UserType.php';
require_once 'AmountType.php';
require_once 'BestOfferStatusCodeType.php';
require_once 'BestOfferTypeCodeType.php';

/**
  * Type defining the <b>BestOffer</b> container, which consists of information on one Best Offer or counter offer. This information includes the price of the offer, the expiration of the offer, and any messaging provided by the prospective buyer or seller.
  * 
 **/

class BestOfferType extends EbatNs_ComplexType
{
	/**
	* @var BestOfferIDType
	**/
	protected $BestOfferID;

	/**
	* @var dateTime
	**/
	protected $ExpirationTime;

	/**
	* @var UserType
	**/
	protected $Buyer;

	/**
	* @var AmountType
	**/
	protected $Price;

	/**
	* @var BestOfferStatusCodeType
	**/
	protected $Status;

	/**
	* @var int
	**/
	protected $Quantity;

	/**
	* @var string
	**/
	protected $BuyerMessage;

	/**
	* @var string
	**/
	protected $SellerMessage;

	/**
	* @var BestOfferTypeCodeType
	**/
	protected $BestOfferCodeType;

	/**
	* @var string
	**/
	protected $CallStatus;

	/**
	* @var boolean
	**/
	protected $NewBestOffer;

	/**
	* @var boolean
	**/
	protected $ImmediatePayEligible;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BestOfferType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BestOfferID' =>
				array(
					'required' => false,
					'type' => 'BestOfferIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpirationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Buyer' =>
				array(
					'required' => false,
					'type' => 'UserType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Price' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'BestOfferStatusCodeType',
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
				'BuyerMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				),
				'BestOfferCodeType' =>
				array(
					'required' => false,
					'type' => 'BestOfferTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CallStatus' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NewBestOffer' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ImmediatePayEligible' =>
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
	 * @return dateTime
	 **/
	function getExpirationTime()
	{
		return $this->ExpirationTime;
	}

	/**
	 * @return void
	 **/
	function setExpirationTime($value)
	{
		$this->ExpirationTime = $value;
	}

	/**
	 * @return UserType
	 **/
	function getBuyer()
	{
		return $this->Buyer;
	}

	/**
	 * @return void
	 **/
	function setBuyer($value)
	{
		$this->Buyer = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getPrice()
	{
		return $this->Price;
	}

	/**
	 * @return void
	 **/
	function setPrice($value)
	{
		$this->Price = $value;
	}

	/**
	 * @return BestOfferStatusCodeType
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
	 * @return string
	 **/
	function getBuyerMessage()
	{
		return $this->BuyerMessage;
	}

	/**
	 * @return void
	 **/
	function setBuyerMessage($value)
	{
		$this->BuyerMessage = $value;
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

	/**
	 * @return BestOfferTypeCodeType
	 **/
	function getBestOfferCodeType()
	{
		return $this->BestOfferCodeType;
	}

	/**
	 * @return void
	 **/
	function setBestOfferCodeType($value)
	{
		$this->BestOfferCodeType = $value;
	}

	/**
	 * @return string
	 **/
	function getCallStatus()
	{
		return $this->CallStatus;
	}

	/**
	 * @return void
	 **/
	function setCallStatus($value)
	{
		$this->CallStatus = $value;
	}

	/**
	 * @return boolean
	 **/
	function getNewBestOffer()
	{
		return $this->NewBestOffer;
	}

	/**
	 * @return void
	 **/
	function setNewBestOffer($value)
	{
		$this->NewBestOffer = $value;
	}

	/**
	 * @return boolean
	 **/
	function getImmediatePayEligible()
	{
		return $this->ImmediatePayEligible;
	}

	/**
	 * @return void
	 **/
	function setImmediatePayEligible($value)
	{
		$this->ImmediatePayEligible = $value;
	}

}
?>
