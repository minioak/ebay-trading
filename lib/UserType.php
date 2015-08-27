<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'FeedbackRatingStarCodeType.php';
require_once 'AddressType.php';
require_once 'SiteCodeType.php';
require_once 'UserStatusCodeType.php';
require_once 'UserIDType.php';
require_once 'VATStatusCodeType.php';
require_once 'BuyerType.php';
require_once 'SellerType.php';
require_once 'BusinessRoleType.php';
require_once 'CharityAffiliationsType.php';
require_once 'PayPalAccountLevelCodeType.php';
require_once 'PayPalAccountTypeCodeType.php';
require_once 'PayPalAccountStatusCodeType.php';
require_once 'EBaySubscriptionTypeCodeType.php';
require_once 'SellerPaymentMethodCodeType.php';
require_once 'BiddingSummaryType.php';

/**
  * Type to contain the data for one eBay user. Depending on the context, the user
  * might be the seller or the buyer on either side of an order, or the bidder or winning bidder
  * in a listing. An object of this type is returned by a number of calls, including
  * the GetUser call.
  * 
 **/

class UserType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $AboutMePage;

	/**
	* @var string
	**/
	protected $EIASToken;

	/**
	* @var string
	**/
	protected $Email;

	/**
	* @var int
	**/
	protected $FeedbackScore;

	/**
	* @var int
	**/
	protected $UniqueNegativeFeedbackCount;

	/**
	* @var int
	**/
	protected $UniquePositiveFeedbackCount;

	/**
	* @var float
	**/
	protected $PositiveFeedbackPercent;

	/**
	* @var boolean
	**/
	protected $FeedbackPrivate;

	/**
	* @var FeedbackRatingStarCodeType
	**/
	protected $FeedbackRatingStar;

	/**
	* @var boolean
	**/
	protected $IDVerified;

	/**
	* @var boolean
	**/
	protected $eBayGoodStanding;

	/**
	* @var boolean
	**/
	protected $NewUser;

	/**
	* @var AddressType
	**/
	protected $RegistrationAddress;

	/**
	* @var dateTime
	**/
	protected $RegistrationDate;

	/**
	* @var SiteCodeType
	**/
	protected $Site;

	/**
	* @var UserStatusCodeType
	**/
	protected $Status;

	/**
	* @var UserIDType
	**/
	protected $UserID;

	/**
	* @var boolean
	**/
	protected $UserIDChanged;

	/**
	* @var dateTime
	**/
	protected $UserIDLastChanged;

	/**
	* @var VATStatusCodeType
	**/
	protected $VATStatus;

	/**
	* @var BuyerType
	**/
	protected $BuyerInfo;

	/**
	* @var SellerType
	**/
	protected $SellerInfo;

	/**
	* @var BusinessRoleType
	**/
	protected $BusinessRole;

	/**
	* @var CharityAffiliationsType
	**/
	protected $CharityAffiliations;

	/**
	* @var PayPalAccountLevelCodeType
	**/
	protected $PayPalAccountLevel;

	/**
	* @var PayPalAccountTypeCodeType
	**/
	protected $PayPalAccountType;

	/**
	* @var PayPalAccountStatusCodeType
	**/
	protected $PayPalAccountStatus;

	/**
	* @var EBaySubscriptionTypeCodeType
	**/
	protected $UserSubscription;

	/**
	* @var boolean
	**/
	protected $SiteVerified;

	/**
	* @var string
	**/
	protected $SkypeID;

	/**
	* @var boolean
	**/
	protected $eBayWikiReadOnly;

	/**
	* @var int
	**/
	protected $TUVLevel;

	/**
	* @var string
	**/
	protected $VATID;

	/**
	* @var boolean
	**/
	protected $MotorsDealer;

	/**
	* @var SellerPaymentMethodCodeType
	**/
	protected $SellerPaymentMethod;

	/**
	* @var BiddingSummaryType
	**/
	protected $BiddingSummary;

	/**
	* @var boolean
	**/
	protected $UserAnonymized;

	/**
	* @var int
	**/
	protected $UniqueNeutralFeedbackCount;

	/**
	* @var boolean
	**/
	protected $EnterpriseSeller;

	/**
	* @var string
	**/
	protected $BillingEmail;

	/**
	* @var boolean
	**/
	protected $QualifiesForSelling;

	/**
	* @var string
	**/
	protected $StaticAlias;

	/**
	* @var AddressType
	**/
	protected $ShippingAddress;

	/**
	* @var string
	**/
	protected $UserFirstName;

	/**
	* @var string
	**/
	protected $UserLastName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UserType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AboutMePage' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EIASToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Email' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UniqueNegativeFeedbackCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UniquePositiveFeedbackCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PositiveFeedbackPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackPrivate' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackRatingStar' =>
				array(
					'required' => false,
					'type' => 'FeedbackRatingStarCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IDVerified' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayGoodStanding' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NewUser' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RegistrationAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RegistrationDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Site' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'UserStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserIDChanged' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserIDLastChanged' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATStatus' =>
				array(
					'required' => false,
					'type' => 'VATStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerInfo' =>
				array(
					'required' => false,
					'type' => 'BuyerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerInfo' =>
				array(
					'required' => false,
					'type' => 'SellerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BusinessRole' =>
				array(
					'required' => false,
					'type' => 'BusinessRoleType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityAffiliations' =>
				array(
					'required' => false,
					'type' => 'CharityAffiliationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalAccountLevel' =>
				array(
					'required' => false,
					'type' => 'PayPalAccountLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalAccountType' =>
				array(
					'required' => false,
					'type' => 'PayPalAccountTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalAccountStatus' =>
				array(
					'required' => false,
					'type' => 'PayPalAccountStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserSubscription' =>
				array(
					'required' => false,
					'type' => 'EBaySubscriptionTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'SiteVerified' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SkypeID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'eBayWikiReadOnly' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TUVLevel' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MotorsDealer' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaymentMethod' =>
				array(
					'required' => false,
					'type' => 'SellerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BiddingSummary' =>
				array(
					'required' => false,
					'type' => 'BiddingSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserAnonymized' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UniqueNeutralFeedbackCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EnterpriseSeller' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BillingEmail' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QualifiesForSelling' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StaticAlias' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserFirstName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserLastName' =>
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
	 * @return boolean
	 **/
	function getAboutMePage()
	{
		return $this->AboutMePage;
	}

	/**
	 * @return void
	 **/
	function setAboutMePage($value)
	{
		$this->AboutMePage = $value;
	}

	/**
	 * @return string
	 **/
	function getEIASToken()
	{
		return $this->EIASToken;
	}

	/**
	 * @return void
	 **/
	function setEIASToken($value)
	{
		$this->EIASToken = $value;
	}

	/**
	 * @return string
	 **/
	function getEmail()
	{
		return $this->Email;
	}

	/**
	 * @return void
	 **/
	function setEmail($value)
	{
		$this->Email = $value;
	}

	/**
	 * @return int
	 **/
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}

	/**
	 * @return void
	 **/
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}

	/**
	 * @return int
	 **/
	function getUniqueNegativeFeedbackCount()
	{
		return $this->UniqueNegativeFeedbackCount;
	}

	/**
	 * @return void
	 **/
	function setUniqueNegativeFeedbackCount($value)
	{
		$this->UniqueNegativeFeedbackCount = $value;
	}

	/**
	 * @return int
	 **/
	function getUniquePositiveFeedbackCount()
	{
		return $this->UniquePositiveFeedbackCount;
	}

	/**
	 * @return void
	 **/
	function setUniquePositiveFeedbackCount($value)
	{
		$this->UniquePositiveFeedbackCount = $value;
	}

	/**
	 * @return float
	 **/
	function getPositiveFeedbackPercent()
	{
		return $this->PositiveFeedbackPercent;
	}

	/**
	 * @return void
	 **/
	function setPositiveFeedbackPercent($value)
	{
		$this->PositiveFeedbackPercent = $value;
	}

	/**
	 * @return boolean
	 **/
	function getFeedbackPrivate()
	{
		return $this->FeedbackPrivate;
	}

	/**
	 * @return void
	 **/
	function setFeedbackPrivate($value)
	{
		$this->FeedbackPrivate = $value;
	}

	/**
	 * @return FeedbackRatingStarCodeType
	 **/
	function getFeedbackRatingStar()
	{
		return $this->FeedbackRatingStar;
	}

	/**
	 * @return void
	 **/
	function setFeedbackRatingStar($value)
	{
		$this->FeedbackRatingStar = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIDVerified()
	{
		return $this->IDVerified;
	}

	/**
	 * @return void
	 **/
	function setIDVerified($value)
	{
		$this->IDVerified = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayGoodStanding()
	{
		return $this->eBayGoodStanding;
	}

	/**
	 * @return void
	 **/
	function seteBayGoodStanding($value)
	{
		$this->eBayGoodStanding = $value;
	}

	/**
	 * @return boolean
	 **/
	function getNewUser()
	{
		return $this->NewUser;
	}

	/**
	 * @return void
	 **/
	function setNewUser($value)
	{
		$this->NewUser = $value;
	}

	/**
	 * @return AddressType
	 **/
	function getRegistrationAddress()
	{
		return $this->RegistrationAddress;
	}

	/**
	 * @return void
	 **/
	function setRegistrationAddress($value)
	{
		$this->RegistrationAddress = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}

	/**
	 * @return void
	 **/
	function setRegistrationDate($value)
	{
		$this->RegistrationDate = $value;
	}

	/**
	 * @return SiteCodeType
	 **/
	function getSite()
	{
		return $this->Site;
	}

	/**
	 * @return void
	 **/
	function setSite($value)
	{
		$this->Site = $value;
	}

	/**
	 * @return UserStatusCodeType
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
	 * @return UserIDType
	 **/
	function getUserID()
	{
		return $this->UserID;
	}

	/**
	 * @return void
	 **/
	function setUserID($value)
	{
		$this->UserID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUserIDChanged()
	{
		return $this->UserIDChanged;
	}

	/**
	 * @return void
	 **/
	function setUserIDChanged($value)
	{
		$this->UserIDChanged = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getUserIDLastChanged()
	{
		return $this->UserIDLastChanged;
	}

	/**
	 * @return void
	 **/
	function setUserIDLastChanged($value)
	{
		$this->UserIDLastChanged = $value;
	}

	/**
	 * @return VATStatusCodeType
	 **/
	function getVATStatus()
	{
		return $this->VATStatus;
	}

	/**
	 * @return void
	 **/
	function setVATStatus($value)
	{
		$this->VATStatus = $value;
	}

	/**
	 * @return BuyerType
	 **/
	function getBuyerInfo()
	{
		return $this->BuyerInfo;
	}

	/**
	 * @return void
	 **/
	function setBuyerInfo($value)
	{
		$this->BuyerInfo = $value;
	}

	/**
	 * @return SellerType
	 **/
	function getSellerInfo()
	{
		return $this->SellerInfo;
	}

	/**
	 * @return void
	 **/
	function setSellerInfo($value)
	{
		$this->SellerInfo = $value;
	}

	/**
	 * @return BusinessRoleType
	 **/
	function getBusinessRole()
	{
		return $this->BusinessRole;
	}

	/**
	 * @return void
	 **/
	function setBusinessRole($value)
	{
		$this->BusinessRole = $value;
	}

	/**
	 * @return CharityAffiliationsType
	 **/
	function getCharityAffiliations()
	{
		return $this->CharityAffiliations;
	}

	/**
	 * @return void
	 **/
	function setCharityAffiliations($value)
	{
		$this->CharityAffiliations = $value;
	}

	/**
	 * @return PayPalAccountLevelCodeType
	 **/
	function getPayPalAccountLevel()
	{
		return $this->PayPalAccountLevel;
	}

	/**
	 * @return void
	 **/
	function setPayPalAccountLevel($value)
	{
		$this->PayPalAccountLevel = $value;
	}

	/**
	 * @return PayPalAccountTypeCodeType
	 **/
	function getPayPalAccountType()
	{
		return $this->PayPalAccountType;
	}

	/**
	 * @return void
	 **/
	function setPayPalAccountType($value)
	{
		$this->PayPalAccountType = $value;
	}

	/**
	 * @return PayPalAccountStatusCodeType
	 **/
	function getPayPalAccountStatus()
	{
		return $this->PayPalAccountStatus;
	}

	/**
	 * @return void
	 **/
	function setPayPalAccountStatus($value)
	{
		$this->PayPalAccountStatus = $value;
	}

	/**
	 * @return EBaySubscriptionTypeCodeType
	 * @param integer $index 
	 **/
	function getUserSubscription($index = null)
	{
		if ($index !== null)
		{
			return $this->UserSubscription[$index];
		}
		else
		{
			return $this->UserSubscription;
		}
	}

	/**
	 * @return void
	 * @param EBaySubscriptionTypeCodeType $value
	 * @param integer $index 
	 **/
	function setUserSubscription($value, $index = null)
	{
		if ($index !== null)
		{
			$this->UserSubscription[$index] = $value;
		}
		else
		{
			$this->UserSubscription= $value;
		}
	}

	/**
	 * @return void
	 * @param EBaySubscriptionTypeCodeType $value
	 **/
	function addUserSubscription($value)
	{
		$this->UserSubscription[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSiteVerified()
	{
		return $this->SiteVerified;
	}

	/**
	 * @return void
	 **/
	function setSiteVerified($value)
	{
		$this->SiteVerified = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getSkypeID($index = null)
	{
		if ($index !== null)
		{
			return $this->SkypeID[$index];
		}
		else
		{
			return $this->SkypeID;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setSkypeID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SkypeID[$index] = $value;
		}
		else
		{
			$this->SkypeID= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addSkypeID($value)
	{
		$this->SkypeID[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayWikiReadOnly()
	{
		return $this->eBayWikiReadOnly;
	}

	/**
	 * @return void
	 **/
	function seteBayWikiReadOnly($value)
	{
		$this->eBayWikiReadOnly = $value;
	}

	/**
	 * @return int
	 **/
	function getTUVLevel()
	{
		return $this->TUVLevel;
	}

	/**
	 * @return void
	 **/
	function setTUVLevel($value)
	{
		$this->TUVLevel = $value;
	}

	/**
	 * @return string
	 **/
	function getVATID()
	{
		return $this->VATID;
	}

	/**
	 * @return void
	 **/
	function setVATID($value)
	{
		$this->VATID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getMotorsDealer()
	{
		return $this->MotorsDealer;
	}

	/**
	 * @return void
	 **/
	function setMotorsDealer($value)
	{
		$this->MotorsDealer = $value;
	}

	/**
	 * @return SellerPaymentMethodCodeType
	 **/
	function getSellerPaymentMethod()
	{
		return $this->SellerPaymentMethod;
	}

	/**
	 * @return void
	 **/
	function setSellerPaymentMethod($value)
	{
		$this->SellerPaymentMethod = $value;
	}

	/**
	 * @return BiddingSummaryType
	 **/
	function getBiddingSummary()
	{
		return $this->BiddingSummary;
	}

	/**
	 * @return void
	 **/
	function setBiddingSummary($value)
	{
		$this->BiddingSummary = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUserAnonymized()
	{
		return $this->UserAnonymized;
	}

	/**
	 * @return void
	 **/
	function setUserAnonymized($value)
	{
		$this->UserAnonymized = $value;
	}

	/**
	 * @return int
	 **/
	function getUniqueNeutralFeedbackCount()
	{
		return $this->UniqueNeutralFeedbackCount;
	}

	/**
	 * @return void
	 **/
	function setUniqueNeutralFeedbackCount($value)
	{
		$this->UniqueNeutralFeedbackCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEnterpriseSeller()
	{
		return $this->EnterpriseSeller;
	}

	/**
	 * @return void
	 **/
	function setEnterpriseSeller($value)
	{
		$this->EnterpriseSeller = $value;
	}

	/**
	 * @return string
	 **/
	function getBillingEmail()
	{
		return $this->BillingEmail;
	}

	/**
	 * @return void
	 **/
	function setBillingEmail($value)
	{
		$this->BillingEmail = $value;
	}

	/**
	 * @return boolean
	 **/
	function getQualifiesForSelling()
	{
		return $this->QualifiesForSelling;
	}

	/**
	 * @return void
	 **/
	function setQualifiesForSelling($value)
	{
		$this->QualifiesForSelling = $value;
	}

	/**
	 * @return string
	 **/
	function getStaticAlias()
	{
		return $this->StaticAlias;
	}

	/**
	 * @return void
	 **/
	function setStaticAlias($value)
	{
		$this->StaticAlias = $value;
	}

	/**
	 * @return AddressType
	 **/
	function getShippingAddress()
	{
		return $this->ShippingAddress;
	}

	/**
	 * @return void
	 **/
	function setShippingAddress($value)
	{
		$this->ShippingAddress = $value;
	}

	/**
	 * @return string
	 **/
	function getUserFirstName()
	{
		return $this->UserFirstName;
	}

	/**
	 * @return void
	 **/
	function setUserFirstName($value)
	{
		$this->UserFirstName = $value;
	}

	/**
	 * @return string
	 **/
	function getUserLastName()
	{
		return $this->UserLastName;
	}

	/**
	 * @return void
	 **/
	function setUserLastName($value)
	{
		$this->UserLastName = $value;
	}

}
?>
