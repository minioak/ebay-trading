<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CurrencyCodeType.php';
require_once 'MerchandizingPrefCodeType.php';
require_once 'SellerGuaranteeLevelCodeType.php';
require_once 'SellerLevelCodeType.php';
require_once 'AddressType.php';
require_once 'SchedulingInfoType.php';
require_once 'SellerBusinessCodeType.php';
require_once 'SiteCodeType.php';
require_once 'SellerPaymentMethodCodeType.php';
require_once 'ProStoresCheckoutPreferenceType.php';
require_once 'CharityAffiliationDetailsType.php';
require_once 'IntegratedMerchantCreditCardInfoType.php';
require_once 'FeatureEligibilityType.php';
require_once 'TopRatedSellerDetailsType.php';
require_once 'RecoupmentPolicyConsentType.php';
require_once 'SellereBayPaymentProcessStatusCodeType.php';
require_once 'SellereBayPaymentProcessConsentCodeType.php';

/**
  * Information about a user returned in the context of an item's seller.
  * 
 **/

class SellerType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $PaisaPayStatus;

	/**
	* @var boolean
	**/
	protected $AllowPaymentEdit;

	/**
	* @var CurrencyCodeType
	**/
	protected $BillingCurrency;

	/**
	* @var boolean
	**/
	protected $CheckoutEnabled;

	/**
	* @var boolean
	**/
	protected $CIPBankAccountStored;

	/**
	* @var boolean
	**/
	protected $GoodStanding;

	/**
	* @var MerchandizingPrefCodeType
	**/
	protected $MerchandizingPref;

	/**
	* @var boolean
	**/
	protected $QualifiesForB2BVAT;

	/**
	* @var SellerGuaranteeLevelCodeType
	**/
	protected $SellerGuaranteeLevel;

	/**
	* @var SellerLevelCodeType
	**/
	protected $SellerLevel;

	/**
	* @var AddressType
	**/
	protected $SellerPaymentAddress;

	/**
	* @var SchedulingInfoType
	**/
	protected $SchedulingInfo;

	/**
	* @var boolean
	**/
	protected $StoreOwner;

	/**
	* @var anyURI
	**/
	protected $StoreURL;

	/**
	* @var SellerBusinessCodeType
	**/
	protected $SellerBusinessType;

	/**
	* @var boolean
	**/
	protected $RegisteredBusinessSeller;

	/**
	* @var SiteCodeType
	**/
	protected $StoreSite;

	/**
	* @var SellerPaymentMethodCodeType
	**/
	protected $PaymentMethod;

	/**
	* @var ProStoresCheckoutPreferenceType
	**/
	protected $ProStoresPreference;

	/**
	* @var boolean
	**/
	protected $CharityRegistered;

	/**
	* @var boolean
	**/
	protected $SafePaymentExempt;

	/**
	* @var int
	**/
	protected $PaisaPayEscrowEMIStatus;

	/**
	* @var CharityAffiliationDetailsType
	**/
	protected $CharityAffiliationDetails;

	/**
	* @var float
	**/
	protected $TransactionPercent;

	/**
	* @var IntegratedMerchantCreditCardInfoType
	**/
	protected $IntegratedMerchantCreditCardInfo;

	/**
	* @var FeatureEligibilityType
	**/
	protected $FeatureEligibility;

	/**
	* @var boolean
	**/
	protected $TopRatedSeller;

	/**
	* @var TopRatedSellerDetailsType
	**/
	protected $TopRatedSellerDetails;

	/**
	* @var RecoupmentPolicyConsentType
	**/
	protected $RecoupmentPolicyConsent;

	/**
	* @var boolean
	**/
	protected $DomesticRateTable;

	/**
	* @var boolean
	**/
	protected $InternationalRateTable;

	/**
	* @var SellereBayPaymentProcessStatusCodeType
	**/
	protected $SellereBayPaymentProcessStatus;

	/**
	* @var SellereBayPaymentProcessConsentCodeType
	**/
	protected $SellereBayPaymentProcessConsent;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PaisaPayStatus' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AllowPaymentEdit' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BillingCurrency' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'CIPBankAccountStored' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GoodStanding' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MerchandizingPref' =>
				array(
					'required' => false,
					'type' => 'MerchandizingPrefCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QualifiesForB2BVAT' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerGuaranteeLevel' =>
				array(
					'required' => false,
					'type' => 'SellerGuaranteeLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerLevel' =>
				array(
					'required' => false,
					'type' => 'SellerLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaymentAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SchedulingInfo' =>
				array(
					'required' => false,
					'type' => 'SchedulingInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreOwner' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
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
				'RegisteredBusinessSeller' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreSite' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentMethod' =>
				array(
					'required' => false,
					'type' => 'SellerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProStoresPreference' =>
				array(
					'required' => false,
					'type' => 'ProStoresCheckoutPreferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityRegistered' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SafePaymentExempt' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaisaPayEscrowEMIStatus' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityAffiliationDetails' =>
				array(
					'required' => false,
					'type' => 'CharityAffiliationDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IntegratedMerchantCreditCardInfo' =>
				array(
					'required' => false,
					'type' => 'IntegratedMerchantCreditCardInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeatureEligibility' =>
				array(
					'required' => false,
					'type' => 'FeatureEligibilityType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TopRatedSeller' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TopRatedSellerDetails' =>
				array(
					'required' => false,
					'type' => 'TopRatedSellerDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecoupmentPolicyConsent' =>
				array(
					'required' => false,
					'type' => 'RecoupmentPolicyConsentType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DomesticRateTable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalRateTable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellereBayPaymentProcessStatus' =>
				array(
					'required' => false,
					'type' => 'SellereBayPaymentProcessStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellereBayPaymentProcessConsent' =>
				array(
					'required' => false,
					'type' => 'SellereBayPaymentProcessConsentCodeType',
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
	 * @return int
	 **/
	function getPaisaPayStatus()
	{
		return $this->PaisaPayStatus;
	}

	/**
	 * @return void
	 **/
	function setPaisaPayStatus($value)
	{
		$this->PaisaPayStatus = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAllowPaymentEdit()
	{
		return $this->AllowPaymentEdit;
	}

	/**
	 * @return void
	 **/
	function setAllowPaymentEdit($value)
	{
		$this->AllowPaymentEdit = $value;
	}

	/**
	 * @return CurrencyCodeType
	 **/
	function getBillingCurrency()
	{
		return $this->BillingCurrency;
	}

	/**
	 * @return void
	 **/
	function setBillingCurrency($value)
	{
		$this->BillingCurrency = $value;
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
	 * @return boolean
	 **/
	function getCIPBankAccountStored()
	{
		return $this->CIPBankAccountStored;
	}

	/**
	 * @return void
	 **/
	function setCIPBankAccountStored($value)
	{
		$this->CIPBankAccountStored = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGoodStanding()
	{
		return $this->GoodStanding;
	}

	/**
	 * @return void
	 **/
	function setGoodStanding($value)
	{
		$this->GoodStanding = $value;
	}

	/**
	 * @return MerchandizingPrefCodeType
	 **/
	function getMerchandizingPref()
	{
		return $this->MerchandizingPref;
	}

	/**
	 * @return void
	 **/
	function setMerchandizingPref($value)
	{
		$this->MerchandizingPref = $value;
	}

	/**
	 * @return boolean
	 **/
	function getQualifiesForB2BVAT()
	{
		return $this->QualifiesForB2BVAT;
	}

	/**
	 * @return void
	 **/
	function setQualifiesForB2BVAT($value)
	{
		$this->QualifiesForB2BVAT = $value;
	}

	/**
	 * @return SellerGuaranteeLevelCodeType
	 **/
	function getSellerGuaranteeLevel()
	{
		return $this->SellerGuaranteeLevel;
	}

	/**
	 * @return void
	 **/
	function setSellerGuaranteeLevel($value)
	{
		$this->SellerGuaranteeLevel = $value;
	}

	/**
	 * @return SellerLevelCodeType
	 **/
	function getSellerLevel()
	{
		return $this->SellerLevel;
	}

	/**
	 * @return void
	 **/
	function setSellerLevel($value)
	{
		$this->SellerLevel = $value;
	}

	/**
	 * @return AddressType
	 **/
	function getSellerPaymentAddress()
	{
		return $this->SellerPaymentAddress;
	}

	/**
	 * @return void
	 **/
	function setSellerPaymentAddress($value)
	{
		$this->SellerPaymentAddress = $value;
	}

	/**
	 * @return SchedulingInfoType
	 **/
	function getSchedulingInfo()
	{
		return $this->SchedulingInfo;
	}

	/**
	 * @return void
	 **/
	function setSchedulingInfo($value)
	{
		$this->SchedulingInfo = $value;
	}

	/**
	 * @return boolean
	 **/
	function getStoreOwner()
	{
		return $this->StoreOwner;
	}

	/**
	 * @return void
	 **/
	function setStoreOwner($value)
	{
		$this->StoreOwner = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getStoreURL()
	{
		return $this->StoreURL;
	}

	/**
	 * @return void
	 **/
	function setStoreURL($value)
	{
		$this->StoreURL = $value;
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
	 * @return boolean
	 **/
	function getRegisteredBusinessSeller()
	{
		return $this->RegisteredBusinessSeller;
	}

	/**
	 * @return void
	 **/
	function setRegisteredBusinessSeller($value)
	{
		$this->RegisteredBusinessSeller = $value;
	}

	/**
	 * @return SiteCodeType
	 **/
	function getStoreSite()
	{
		return $this->StoreSite;
	}

	/**
	 * @return void
	 **/
	function setStoreSite($value)
	{
		$this->StoreSite = $value;
	}

	/**
	 * @return SellerPaymentMethodCodeType
	 **/
	function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}

	/**
	 * @return void
	 **/
	function setPaymentMethod($value)
	{
		$this->PaymentMethod = $value;
	}

	/**
	 * @return ProStoresCheckoutPreferenceType
	 **/
	function getProStoresPreference()
	{
		return $this->ProStoresPreference;
	}

	/**
	 * @return void
	 **/
	function setProStoresPreference($value)
	{
		$this->ProStoresPreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCharityRegistered()
	{
		return $this->CharityRegistered;
	}

	/**
	 * @return void
	 **/
	function setCharityRegistered($value)
	{
		$this->CharityRegistered = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSafePaymentExempt()
	{
		return $this->SafePaymentExempt;
	}

	/**
	 * @return void
	 **/
	function setSafePaymentExempt($value)
	{
		$this->SafePaymentExempt = $value;
	}

	/**
	 * @return int
	 **/
	function getPaisaPayEscrowEMIStatus()
	{
		return $this->PaisaPayEscrowEMIStatus;
	}

	/**
	 * @return void
	 **/
	function setPaisaPayEscrowEMIStatus($value)
	{
		$this->PaisaPayEscrowEMIStatus = $value;
	}

	/**
	 * @return CharityAffiliationDetailsType
	 **/
	function getCharityAffiliationDetails()
	{
		return $this->CharityAffiliationDetails;
	}

	/**
	 * @return void
	 **/
	function setCharityAffiliationDetails($value)
	{
		$this->CharityAffiliationDetails = $value;
	}

	/**
	 * @return float
	 **/
	function getTransactionPercent()
	{
		return $this->TransactionPercent;
	}

	/**
	 * @return void
	 **/
	function setTransactionPercent($value)
	{
		$this->TransactionPercent = $value;
	}

	/**
	 * @return IntegratedMerchantCreditCardInfoType
	 **/
	function getIntegratedMerchantCreditCardInfo()
	{
		return $this->IntegratedMerchantCreditCardInfo;
	}

	/**
	 * @return void
	 **/
	function setIntegratedMerchantCreditCardInfo($value)
	{
		$this->IntegratedMerchantCreditCardInfo = $value;
	}

	/**
	 * @return FeatureEligibilityType
	 **/
	function getFeatureEligibility()
	{
		return $this->FeatureEligibility;
	}

	/**
	 * @return void
	 **/
	function setFeatureEligibility($value)
	{
		$this->FeatureEligibility = $value;
	}

	/**
	 * @return boolean
	 **/
	function getTopRatedSeller()
	{
		return $this->TopRatedSeller;
	}

	/**
	 * @return void
	 **/
	function setTopRatedSeller($value)
	{
		$this->TopRatedSeller = $value;
	}

	/**
	 * @return TopRatedSellerDetailsType
	 **/
	function getTopRatedSellerDetails()
	{
		return $this->TopRatedSellerDetails;
	}

	/**
	 * @return void
	 **/
	function setTopRatedSellerDetails($value)
	{
		$this->TopRatedSellerDetails = $value;
	}

	/**
	 * @return RecoupmentPolicyConsentType
	 **/
	function getRecoupmentPolicyConsent()
	{
		return $this->RecoupmentPolicyConsent;
	}

	/**
	 * @return void
	 **/
	function setRecoupmentPolicyConsent($value)
	{
		$this->RecoupmentPolicyConsent = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDomesticRateTable()
	{
		return $this->DomesticRateTable;
	}

	/**
	 * @return void
	 **/
	function setDomesticRateTable($value)
	{
		$this->DomesticRateTable = $value;
	}

	/**
	 * @return boolean
	 **/
	function getInternationalRateTable()
	{
		return $this->InternationalRateTable;
	}

	/**
	 * @return void
	 **/
	function setInternationalRateTable($value)
	{
		$this->InternationalRateTable = $value;
	}

	/**
	 * @return SellereBayPaymentProcessStatusCodeType
	 **/
	function getSellereBayPaymentProcessStatus()
	{
		return $this->SellereBayPaymentProcessStatus;
	}

	/**
	 * @return void
	 **/
	function setSellereBayPaymentProcessStatus($value)
	{
		$this->SellereBayPaymentProcessStatus = $value;
	}

	/**
	 * @return SellereBayPaymentProcessConsentCodeType
	 **/
	function getSellereBayPaymentProcessConsent()
	{
		return $this->SellereBayPaymentProcessConsent;
	}

	/**
	 * @return void
	 **/
	function setSellereBayPaymentProcessConsent($value)
	{
		$this->SellereBayPaymentProcessConsent = $value;
	}

}
?>
