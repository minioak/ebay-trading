<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated as the eBay Express is no longer available.
  * 
  * 
 **/

class ExpressItemRequirementsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $SellerExpressEligible;

	/**
	* @var boolean
	**/
	protected $ExpressOptOut;

	/**
	* @var boolean
	**/
	protected $ExpressApproved;

	/**
	* @var boolean
	**/
	protected $ExpressEligibleListingType;

	/**
	* @var boolean
	**/
	protected $ExpressEnabledCategory;

	/**
	* @var boolean
	**/
	protected $EligiblePayPalAccount;

	/**
	* @var boolean
	**/
	protected $DomesticShippingCost;

	/**
	* @var boolean
	**/
	protected $EligibleReturnPolicy;

	/**
	* @var boolean
	**/
	protected $Picture;

	/**
	* @var boolean
	**/
	protected $EligibleItemCondition;

	/**
	* @var boolean
	**/
	protected $PriceAboveMinimum;

	/**
	* @var boolean
	**/
	protected $PriceBelowMaximum;

	/**
	* @var boolean
	**/
	protected $EligibleCheckout;

	/**
	* @var boolean
	**/
	protected $NoPreapprovedBidderList;

	/**
	* @var boolean
	**/
	protected $NoCharity;

	/**
	* @var boolean
	**/
	protected $CombinedShippingDiscount;

	/**
	* @var boolean
	**/
	protected $ShipFromEligibleCountry;

	/**
	* @var boolean
	**/
	protected $PayPalAccountAcceptsUnconfirmedAddress;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExpressItemRequirementsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellerExpressEligible' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressOptOut' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressApproved' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressEligibleListingType' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressEnabledCategory' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligiblePayPalAccount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DomesticShippingCost' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleReturnPolicy' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Picture' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleItemCondition' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PriceAboveMinimum' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PriceBelowMaximum' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleCheckout' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NoPreapprovedBidderList' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NoCharity' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShipFromEligibleCountry' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalAccountAcceptsUnconfirmedAddress' =>
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
	 * @return boolean
	 **/
	function getSellerExpressEligible()
	{
		return $this->SellerExpressEligible;
	}

	/**
	 * @return void
	 **/
	function setSellerExpressEligible($value)
	{
		$this->SellerExpressEligible = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpressOptOut()
	{
		return $this->ExpressOptOut;
	}

	/**
	 * @return void
	 **/
	function setExpressOptOut($value)
	{
		$this->ExpressOptOut = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpressApproved()
	{
		return $this->ExpressApproved;
	}

	/**
	 * @return void
	 **/
	function setExpressApproved($value)
	{
		$this->ExpressApproved = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpressEligibleListingType()
	{
		return $this->ExpressEligibleListingType;
	}

	/**
	 * @return void
	 **/
	function setExpressEligibleListingType($value)
	{
		$this->ExpressEligibleListingType = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpressEnabledCategory()
	{
		return $this->ExpressEnabledCategory;
	}

	/**
	 * @return void
	 **/
	function setExpressEnabledCategory($value)
	{
		$this->ExpressEnabledCategory = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEligiblePayPalAccount()
	{
		return $this->EligiblePayPalAccount;
	}

	/**
	 * @return void
	 **/
	function setEligiblePayPalAccount($value)
	{
		$this->EligiblePayPalAccount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDomesticShippingCost()
	{
		return $this->DomesticShippingCost;
	}

	/**
	 * @return void
	 **/
	function setDomesticShippingCost($value)
	{
		$this->DomesticShippingCost = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEligibleReturnPolicy()
	{
		return $this->EligibleReturnPolicy;
	}

	/**
	 * @return void
	 **/
	function setEligibleReturnPolicy($value)
	{
		$this->EligibleReturnPolicy = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPicture()
	{
		return $this->Picture;
	}

	/**
	 * @return void
	 **/
	function setPicture($value)
	{
		$this->Picture = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEligibleItemCondition()
	{
		return $this->EligibleItemCondition;
	}

	/**
	 * @return void
	 **/
	function setEligibleItemCondition($value)
	{
		$this->EligibleItemCondition = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPriceAboveMinimum()
	{
		return $this->PriceAboveMinimum;
	}

	/**
	 * @return void
	 **/
	function setPriceAboveMinimum($value)
	{
		$this->PriceAboveMinimum = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPriceBelowMaximum()
	{
		return $this->PriceBelowMaximum;
	}

	/**
	 * @return void
	 **/
	function setPriceBelowMaximum($value)
	{
		$this->PriceBelowMaximum = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEligibleCheckout()
	{
		return $this->EligibleCheckout;
	}

	/**
	 * @return void
	 **/
	function setEligibleCheckout($value)
	{
		$this->EligibleCheckout = $value;
	}

	/**
	 * @return boolean
	 **/
	function getNoPreapprovedBidderList()
	{
		return $this->NoPreapprovedBidderList;
	}

	/**
	 * @return void
	 **/
	function setNoPreapprovedBidderList($value)
	{
		$this->NoPreapprovedBidderList = $value;
	}

	/**
	 * @return boolean
	 **/
	function getNoCharity()
	{
		return $this->NoCharity;
	}

	/**
	 * @return void
	 **/
	function setNoCharity($value)
	{
		$this->NoCharity = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCombinedShippingDiscount()
	{
		return $this->CombinedShippingDiscount;
	}

	/**
	 * @return void
	 **/
	function setCombinedShippingDiscount($value)
	{
		$this->CombinedShippingDiscount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShipFromEligibleCountry()
	{
		return $this->ShipFromEligibleCountry;
	}

	/**
	 * @return void
	 **/
	function setShipFromEligibleCountry($value)
	{
		$this->ShipFromEligibleCountry = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPayPalAccountAcceptsUnconfirmedAddress()
	{
		return $this->PayPalAccountAcceptsUnconfirmedAddress;
	}

	/**
	 * @return void
	 **/
	function setPayPalAccountAcceptsUnconfirmedAddress($value)
	{
		$this->PayPalAccountAcceptsUnconfirmedAddress = $value;
	}

}
?>
