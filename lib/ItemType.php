<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AttributeSetArrayType.php';
require_once 'AttributeArrayType.php';
require_once 'LookupAttributeArrayType.php';
require_once 'PaymentDetailsType.php';
require_once 'BiddingDetailsType.php';
require_once 'BuyerProtectionCodeType.php';
require_once 'AmountType.php';
require_once 'CharityType.php';
require_once 'CountryCodeType.php';
require_once 'CrossPromotionsType.php';
require_once 'CurrencyCodeType.php';
require_once 'DescriptionReviseModeCodeType.php';
require_once 'DistanceType.php';
require_once 'GiftServicesCodeType.php';
require_once 'HitCounterCodeType.php';
require_once 'ItemIDType.php';
require_once 'ListingDetailsType.php';
require_once 'ListingDesignerType.php';
require_once 'ListingEnhancementsCodeType.php';
require_once 'ListingTypeCodeType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'CategoryType.php';
require_once 'ProductListingDetailsType.php';
require_once 'ReviseStatusType.php';
require_once 'UserType.php';
require_once 'SellingStatusType.php';
require_once 'ShippingDetailsType.php';
require_once 'SiteCodeType.php';
require_once 'StorefrontType.php';
require_once 'UUIDType.php';
require_once 'VATDetailsType.php';
require_once 'BestOfferDetailsType.php';
require_once 'SKUType.php';
require_once 'SearchDetailsType.php';
require_once 'ExternalProductIDType.php';
require_once 'PictureDetailsType.php';
require_once 'SkypeContactOptionCodeType.php';
require_once 'ListingCheckoutRedirectPreferenceType.php';
require_once 'AddressType.php';
require_once 'ExtendedContactDetailsType.php';
require_once 'NameValueListArrayType.php';
require_once 'BuyerProtectionDetailsType.php';
require_once 'ListingSubtypeCodeType.php';
require_once 'ItemPolicyViolationType.php';
require_once 'BusinessSellerDetailsType.php';
require_once 'BuyerRequirementDetailsType.php';
require_once 'ReturnPolicyType.php';
require_once 'InventoryTrackingMethodCodeType.php';
require_once 'VariationsType.php';
require_once 'ItemCompatibilityListType.php';
require_once 'QuantityAvailableHintCodeType.php';
require_once 'DiscountPriceInfoType.php';
require_once 'QuantityInfoType.php';
require_once 'SellerProfilesType.php';
require_once 'ShippingServiceCostOverrideListType.php';
require_once 'ShipPackageDetailsType.php';
require_once 'QuantityRestrictionPerBuyerInfoType.php';
require_once 'UnitInfoType.php';
require_once 'ReasonHideFromSearchCodeType.php';
require_once 'PickupInStoreDetailsType.php';
require_once 'DigitalGoodInfoType.php';

/**
  * Contains the data defining one item. A seller populates an object of
  * this type at listing time with the definition of a new item. A seller
  * also uses an object of this type to relist or revise an item. Calls
  * that retrieve item data (such as the GetSellerList call) return an object of
  * this type, filled with the item's data. Some fields are applicable both
  * to eBay listings and Half.com listings. Some fields are only applicable to eBay listings,
  * and others are only applicable to Half.com listings.
  * 
 **/

class ItemType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ApplicationData;

	/**
	* @var AttributeSetArrayType
	**/
	protected $AttributeSetArray;

	/**
	* @var AttributeArrayType
	**/
	protected $AttributeArray;

	/**
	* @var LookupAttributeArrayType
	**/
	protected $LookupAttributeArray;

	/**
	* @var boolean
	**/
	protected $AutoPay;

	/**
	* @var PaymentDetailsType
	**/
	protected $PaymentDetails;

	/**
	* @var BiddingDetailsType
	**/
	protected $BiddingDetails;

	/**
	* @var boolean
	**/
	protected $MotorsGermanySearchable;

	/**
	* @var BuyerProtectionCodeType
	**/
	protected $BuyerProtection;

	/**
	* @var AmountType
	**/
	protected $BuyItNowPrice;

	/**
	* @var boolean
	**/
	protected $CategoryMappingAllowed;

	/**
	* @var CharityType
	**/
	protected $Charity;

	/**
	* @var CountryCodeType
	**/
	protected $Country;

	/**
	* @var CrossPromotionsType
	**/
	protected $CrossPromotion;

	/**
	* @var CurrencyCodeType
	**/
	protected $Currency;

	/**
	* @var string
	**/
	protected $Description;

	/**
	* @var DescriptionReviseModeCodeType
	**/
	protected $DescriptionReviseMode;

	/**
	* @var DistanceType
	**/
	protected $Distance;

	/**
	* @var int
	**/
	protected $GiftIcon;

	/**
	* @var GiftServicesCodeType
	**/
	protected $GiftServices;

	/**
	* @var HitCounterCodeType
	**/
	protected $HitCounter;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var ListingDetailsType
	**/
	protected $ListingDetails;

	/**
	* @var ListingDesignerType
	**/
	protected $ListingDesigner;

	/**
	* @var token
	**/
	protected $ListingDuration;

	/**
	* @var ListingEnhancementsCodeType
	**/
	protected $ListingEnhancement;

	/**
	* @var ListingTypeCodeType
	**/
	protected $ListingType;

	/**
	* @var string
	**/
	protected $Location;

	/**
	* @var int
	**/
	protected $LotSize;

	/**
	* @var string
	**/
	protected $PartnerCode;

	/**
	* @var string
	**/
	protected $PartnerName;

	/**
	* @var BuyerPaymentMethodCodeType
	**/
	protected $PaymentMethods;

	/**
	* @var string
	**/
	protected $PayPalEmailAddress;

	/**
	* @var CategoryType
	**/
	protected $PrimaryCategory;

	/**
	* @var boolean
	**/
	protected $PrivateListing;

	/**
	* @var ProductListingDetailsType
	**/
	protected $ProductListingDetails;

	/**
	* @var int
	**/
	protected $Quantity;

	/**
	* @var string
	**/
	protected $PrivateNotes;

	/**
	* @var string
	**/
	protected $RegionID;

	/**
	* @var boolean
	**/
	protected $RelistLink;

	/**
	* @var AmountType
	**/
	protected $ReservePrice;

	/**
	* @var ReviseStatusType
	**/
	protected $ReviseStatus;

	/**
	* @var dateTime
	**/
	protected $ScheduleTime;

	/**
	* @var CategoryType
	**/
	protected $SecondaryCategory;

	/**
	* @var CategoryType
	**/
	protected $FreeAddedCategory;

	/**
	* @var UserType
	**/
	protected $Seller;

	/**
	* @var SellingStatusType
	**/
	protected $SellingStatus;

	/**
	* @var ShippingDetailsType
	**/
	protected $ShippingDetails;

	/**
	* @var string
	**/
	protected $ShipToLocations;

	/**
	* @var SiteCodeType
	**/
	protected $Site;

	/**
	* @var AmountType
	**/
	protected $StartPrice;

	/**
	* @var StorefrontType
	**/
	protected $Storefront;

	/**
	* @var string
	**/
	protected $SubTitle;

	/**
	* @var duration
	**/
	protected $TimeLeft;

	/**
	* @var string
	**/
	protected $Title;

	/**
	* @var UUIDType
	**/
	protected $UUID;

	/**
	* @var VATDetailsType
	**/
	protected $VATDetails;

	/**
	* @var string
	**/
	protected $SellerVacationNote;

	/**
	* @var long
	**/
	protected $WatchCount;

	/**
	* @var long
	**/
	protected $HitCount;

	/**
	* @var boolean
	**/
	protected $DisableBuyerRequirements;

	/**
	* @var BestOfferDetailsType
	**/
	protected $BestOfferDetails;

	/**
	* @var boolean
	**/
	protected $LocationDefaulted;

	/**
	* @var boolean
	**/
	protected $ThirdPartyCheckout;

	/**
	* @var boolean
	**/
	protected $UseTaxTable;

	/**
	* @var boolean
	**/
	protected $GetItFast;

	/**
	* @var boolean
	**/
	protected $BuyerResponsibleForShipping;

	/**
	* @var boolean
	**/
	protected $LimitedWarrantyEligible;

	/**
	* @var string
	**/
	protected $eBayNotes;

	/**
	* @var long
	**/
	protected $QuestionCount;

	/**
	* @var boolean
	**/
	protected $Relisted;

	/**
	* @var int
	**/
	protected $QuantityAvailable;

	/**
	* @var SKUType
	**/
	protected $SKU;

	/**
	* @var boolean
	**/
	protected $CategoryBasedAttributesPrefill;

	/**
	* @var SearchDetailsType
	**/
	protected $SearchDetails;

	/**
	* @var string
	**/
	protected $PostalCode;

	/**
	* @var boolean
	**/
	protected $ShippingTermsInDescription;

	/**
	* @var ExternalProductIDType
	**/
	protected $ExternalProductID;

	/**
	* @var string
	**/
	protected $SellerInventoryID;

	/**
	* @var PictureDetailsType
	**/
	protected $PictureDetails;

	/**
	* @var int
	**/
	protected $DispatchTimeMax;

	/**
	* @var boolean
	**/
	protected $SkypeEnabled;

	/**
	* @var string
	**/
	protected $SkypeID;

	/**
	* @var SkypeContactOptionCodeType
	**/
	protected $SkypeContactOption;

	/**
	* @var boolean
	**/
	protected $BestOfferEnabled;

	/**
	* @var boolean
	**/
	protected $LocalListing;

	/**
	* @var boolean
	**/
	protected $ThirdPartyCheckoutIntegration;

	/**
	* @var ListingCheckoutRedirectPreferenceType
	**/
	protected $ListingCheckoutRedirectPreference;

	/**
	* @var AddressType
	**/
	protected $SellerContactDetails;

	/**
	* @var long
	**/
	protected $TotalQuestionCount;

	/**
	* @var boolean
	**/
	protected $ProxyItem;

	/**
	* @var ExtendedContactDetailsType
	**/
	protected $ExtendedSellerContactDetails;

	/**
	* @var int
	**/
	protected $LeadCount;

	/**
	* @var int
	**/
	protected $NewLeadCount;

	/**
	* @var NameValueListArrayType
	**/
	protected $ItemSpecifics;

	/**
	* @var string
	**/
	protected $GroupCategoryID;

	/**
	* @var AmountType
	**/
	protected $ClassifiedAdPayPerLeadFee;

	/**
	* @var boolean
	**/
	protected $BidGroupItem;

	/**
	* @var BuyerProtectionDetailsType
	**/
	protected $ApplyBuyerProtection;

	/**
	* @var ListingSubtypeCodeType
	**/
	protected $ListingSubtype2;

	/**
	* @var boolean
	**/
	protected $MechanicalCheckAccepted;

	/**
	* @var boolean
	**/
	protected $UpdateSellerInfo;

	/**
	* @var boolean
	**/
	protected $UpdateReturnPolicy;

	/**
	* @var ItemPolicyViolationType
	**/
	protected $ItemPolicyViolation;

	/**
	* @var string
	**/
	protected $CrossBorderTrade;

	/**
	* @var BusinessSellerDetailsType
	**/
	protected $BusinessSellerDetails;

	/**
	* @var AmountType
	**/
	protected $BuyerGuaranteePrice;

	/**
	* @var BuyerRequirementDetailsType
	**/
	protected $BuyerRequirementDetails;

	/**
	* @var ReturnPolicyType
	**/
	protected $ReturnPolicy;

	/**
	* @var SiteCodeType
	**/
	protected $PaymentAllowedSite;

	/**
	* @var InventoryTrackingMethodCodeType
	**/
	protected $InventoryTrackingMethod;

	/**
	* @var boolean
	**/
	protected $IntegratedMerchantCreditCardEnabled;

	/**
	* @var VariationsType
	**/
	protected $Variations;

	/**
	* @var ItemCompatibilityListType
	**/
	protected $ItemCompatibilityList;

	/**
	* @var int
	**/
	protected $ItemCompatibilityCount;

	/**
	* @var int
	**/
	protected $ConditionID;

	/**
	* @var string
	**/
	protected $ConditionDescription;

	/**
	* @var string
	**/
	protected $ConditionDisplayName;

	/**
	* @var string
	**/
	protected $TaxCategory;

	/**
	* @var QuantityAvailableHintCodeType
	**/
	protected $QuantityAvailableHint;

	/**
	* @var int
	**/
	protected $QuantityThreshold;

	/**
	* @var boolean
	**/
	protected $PostCheckoutExperienceEnabled;

	/**
	* @var DiscountPriceInfoType
	**/
	protected $DiscountPriceInfo;

	/**
	* @var boolean
	**/
	protected $UseRecommendedProduct;

	/**
	* @var string
	**/
	protected $SellerProvidedTitle;

	/**
	* @var string
	**/
	protected $VIN;

	/**
	* @var string
	**/
	protected $VINLink;

	/**
	* @var string
	**/
	protected $VRM;

	/**
	* @var string
	**/
	protected $VRMLink;

	/**
	* @var QuantityInfoType
	**/
	protected $QuantityInfo;

	/**
	* @var SellerProfilesType
	**/
	protected $SellerProfiles;

	/**
	* @var ShippingServiceCostOverrideListType
	**/
	protected $ShippingServiceCostOverrideList;

	/**
	* @var ShipPackageDetailsType
	**/
	protected $ShippingPackageDetails;

	/**
	* @var boolean
	**/
	protected $TopRatedListing;

	/**
	* @var QuantityRestrictionPerBuyerInfoType
	**/
	protected $QuantityRestrictionPerBuyer;

	/**
	* @var AmountType
	**/
	protected $FloorPrice;

	/**
	* @var AmountType
	**/
	protected $CeilingPrice;

	/**
	* @var boolean
	**/
	protected $IsIntermediatedShippingEligible;

	/**
	* @var UnitInfoType
	**/
	protected $UnitInfo;

	/**
	* @var long
	**/
	protected $RelistParentID;

	/**
	* @var string
	**/
	protected $ConditionDefinition;

	/**
	* @var boolean
	**/
	protected $HideFromSearch;

	/**
	* @var ReasonHideFromSearchCodeType
	**/
	protected $ReasonHideFromSearch;

	/**
	* @var boolean
	**/
	protected $IncludeRecommendations;

	/**
	* @var PickupInStoreDetailsType
	**/
	protected $PickupInStoreDetails;

	/**
	* @var boolean
	**/
	protected $eBayNowEligible;

	/**
	* @var boolean
	**/
	protected $eBayNowAvailable;

	/**
	* @var boolean
	**/
	protected $IgnoreQuantity;

	/**
	* @var boolean
	**/
	protected $AvailableForPickupDropOff;

	/**
	* @var boolean
	**/
	protected $EligibleForPickupDropOff;

	/**
	* @var boolean
	**/
	protected $LiveAuction;

	/**
	* @var DigitalGoodInfoType
	**/
	protected $DigitalGoodInfo;

	/**
	* @var boolean
	**/
	protected $eBayPlus;

	/**
	* @var boolean
	**/
	protected $eBayPlusEligible;

	/**
	* @var boolean
	**/
	protected $eMailDeliveryAvailable;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ApplicationData' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeSetArray' =>
				array(
					'required' => false,
					'type' => 'AttributeSetArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeArray' =>
				array(
					'required' => false,
					'type' => 'AttributeArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LookupAttributeArray' =>
				array(
					'required' => false,
					'type' => 'LookupAttributeArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AutoPay' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentDetails' =>
				array(
					'required' => false,
					'type' => 'PaymentDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BiddingDetails' =>
				array(
					'required' => false,
					'type' => 'BiddingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MotorsGermanySearchable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerProtection' =>
				array(
					'required' => false,
					'type' => 'BuyerProtectionCodeType',
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
				'CategoryMappingAllowed' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Charity' =>
				array(
					'required' => false,
					'type' => 'CharityType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Country' =>
				array(
					'required' => false,
					'type' => 'CountryCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossPromotion' =>
				array(
					'required' => false,
					'type' => 'CrossPromotionsType',
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
				'Description' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DescriptionReviseMode' =>
				array(
					'required' => false,
					'type' => 'DescriptionReviseModeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Distance' =>
				array(
					'required' => false,
					'type' => 'DistanceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GiftIcon' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GiftServices' =>
				array(
					'required' => false,
					'type' => 'GiftServicesCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'HitCounter' =>
				array(
					'required' => false,
					'type' => 'HitCounterCodeType',
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
				'ListingDetails' =>
				array(
					'required' => false,
					'type' => 'ListingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingDesigner' =>
				array(
					'required' => false,
					'type' => 'ListingDesignerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingDuration' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingEnhancement' =>
				array(
					'required' => false,
					'type' => 'ListingEnhancementsCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ListingType' =>
				array(
					'required' => false,
					'type' => 'ListingTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Location' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LotSize' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PartnerCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PartnerName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentMethods' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'PayPalEmailAddress' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PrimaryCategory' =>
				array(
					'required' => false,
					'type' => 'CategoryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PrivateListing' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductListingDetails' =>
				array(
					'required' => false,
					'type' => 'ProductListingDetailsType',
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
				'PrivateNotes' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RegionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RelistLink' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReservePrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReviseStatus' =>
				array(
					'required' => false,
					'type' => 'ReviseStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ScheduleTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SecondaryCategory' =>
				array(
					'required' => false,
					'type' => 'CategoryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FreeAddedCategory' =>
				array(
					'required' => false,
					'type' => 'CategoryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Seller' =>
				array(
					'required' => false,
					'type' => 'UserType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellingStatus' =>
				array(
					'required' => false,
					'type' => 'SellingStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingDetails' =>
				array(
					'required' => false,
					'type' => 'ShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShipToLocations' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Site' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StartPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Storefront' =>
				array(
					'required' => false,
					'type' => 'StorefrontType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubTitle' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TimeLeft' =>
				array(
					'required' => false,
					'type' => 'duration',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Title' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UUID' =>
				array(
					'required' => false,
					'type' => 'UUIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATDetails' =>
				array(
					'required' => false,
					'type' => 'VATDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerVacationNote' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WatchCount' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HitCount' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisableBuyerRequirements' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferDetails' =>
				array(
					'required' => false,
					'type' => 'BestOfferDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocationDefaulted' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ThirdPartyCheckout' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UseTaxTable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GetItFast' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerResponsibleForShipping' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LimitedWarrantyEligible' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayNotes' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuestionCount' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Relisted' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityAvailable' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SKU' =>
				array(
					'required' => false,
					'type' => 'SKUType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryBasedAttributesPrefill' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchDetails' =>
				array(
					'required' => false,
					'type' => 'SearchDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PostalCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingTermsInDescription' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalProductID' =>
				array(
					'required' => false,
					'type' => 'ExternalProductIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerInventoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureDetails' =>
				array(
					'required' => false,
					'type' => 'PictureDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DispatchTimeMax' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SkypeEnabled' =>
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
					'array' => false,
					'cardinality' => '0..1'
				),
				'SkypeContactOption' =>
				array(
					'required' => false,
					'type' => 'SkypeContactOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'BestOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalListing' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ThirdPartyCheckoutIntegration' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingCheckoutRedirectPreference' =>
				array(
					'required' => false,
					'type' => 'ListingCheckoutRedirectPreferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerContactDetails' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalQuestionCount' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProxyItem' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExtendedSellerContactDetails' =>
				array(
					'required' => false,
					'type' => 'ExtendedContactDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LeadCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NewLeadCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemSpecifics' =>
				array(
					'required' => false,
					'type' => 'NameValueListArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GroupCategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdPayPerLeadFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidGroupItem' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ApplyBuyerProtection' =>
				array(
					'required' => false,
					'type' => 'BuyerProtectionDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingSubtype2' =>
				array(
					'required' => false,
					'type' => 'ListingSubtypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MechanicalCheckAccepted' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateSellerInfo' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateReturnPolicy' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemPolicyViolation' =>
				array(
					'required' => false,
					'type' => 'ItemPolicyViolationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossBorderTrade' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'BusinessSellerDetails' =>
				array(
					'required' => false,
					'type' => 'BusinessSellerDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerGuaranteePrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerRequirementDetails' =>
				array(
					'required' => false,
					'type' => 'BuyerRequirementDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnPolicy' =>
				array(
					'required' => false,
					'type' => 'ReturnPolicyType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentAllowedSite' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'InventoryTrackingMethod' =>
				array(
					'required' => false,
					'type' => 'InventoryTrackingMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IntegratedMerchantCreditCardEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Variations' =>
				array(
					'required' => false,
					'type' => 'VariationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemCompatibilityList' =>
				array(
					'required' => false,
					'type' => 'ItemCompatibilityListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemCompatibilityCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConditionID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConditionDescription' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConditionDisplayName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TaxCategory' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityAvailableHint' =>
				array(
					'required' => false,
					'type' => 'QuantityAvailableHintCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityThreshold' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PostCheckoutExperienceEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountPriceInfo' =>
				array(
					'required' => false,
					'type' => 'DiscountPriceInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UseRecommendedProduct' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerProvidedTitle' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VIN' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VINLink' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VRM' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VRMLink' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityInfo' =>
				array(
					'required' => false,
					'type' => 'QuantityInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerProfiles' =>
				array(
					'required' => false,
					'type' => 'SellerProfilesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceCostOverrideList' =>
				array(
					'required' => false,
					'type' => 'ShippingServiceCostOverrideListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingPackageDetails' =>
				array(
					'required' => false,
					'type' => 'ShipPackageDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TopRatedListing' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityRestrictionPerBuyer' =>
				array(
					'required' => false,
					'type' => 'QuantityRestrictionPerBuyerInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FloorPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CeilingPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IsIntermediatedShippingEligible' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnitInfo' =>
				array(
					'required' => false,
					'type' => 'UnitInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RelistParentID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConditionDefinition' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HideFromSearch' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReasonHideFromSearch' =>
				array(
					'required' => false,
					'type' => 'ReasonHideFromSearchCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeRecommendations' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupInStoreDetails' =>
				array(
					'required' => false,
					'type' => 'PickupInStoreDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayNowEligible' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayNowAvailable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IgnoreQuantity' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AvailableForPickupDropOff' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleForPickupDropOff' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LiveAuction' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DigitalGoodInfo' =>
				array(
					'required' => false,
					'type' => 'DigitalGoodInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayPlus' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayPlusEligible' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eMailDeliveryAvailable' =>
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
	 * @return string
	 **/
	function getApplicationData()
	{
		return $this->ApplicationData;
	}

	/**
	 * @return void
	 **/
	function setApplicationData($value)
	{
		$this->ApplicationData = $value;
	}

	/**
	 * @return AttributeSetArrayType
	 **/
	function getAttributeSetArray()
	{
		return $this->AttributeSetArray;
	}

	/**
	 * @return void
	 **/
	function setAttributeSetArray($value)
	{
		$this->AttributeSetArray = $value;
	}

	/**
	 * @return AttributeArrayType
	 **/
	function getAttributeArray()
	{
		return $this->AttributeArray;
	}

	/**
	 * @return void
	 **/
	function setAttributeArray($value)
	{
		$this->AttributeArray = $value;
	}

	/**
	 * @return LookupAttributeArrayType
	 **/
	function getLookupAttributeArray()
	{
		return $this->LookupAttributeArray;
	}

	/**
	 * @return void
	 **/
	function setLookupAttributeArray($value)
	{
		$this->LookupAttributeArray = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAutoPay()
	{
		return $this->AutoPay;
	}

	/**
	 * @return void
	 **/
	function setAutoPay($value)
	{
		$this->AutoPay = $value;
	}

	/**
	 * @return PaymentDetailsType
	 **/
	function getPaymentDetails()
	{
		return $this->PaymentDetails;
	}

	/**
	 * @return void
	 **/
	function setPaymentDetails($value)
	{
		$this->PaymentDetails = $value;
	}

	/**
	 * @return BiddingDetailsType
	 **/
	function getBiddingDetails()
	{
		return $this->BiddingDetails;
	}

	/**
	 * @return void
	 **/
	function setBiddingDetails($value)
	{
		$this->BiddingDetails = $value;
	}

	/**
	 * @return boolean
	 **/
	function getMotorsGermanySearchable()
	{
		return $this->MotorsGermanySearchable;
	}

	/**
	 * @return void
	 **/
	function setMotorsGermanySearchable($value)
	{
		$this->MotorsGermanySearchable = $value;
	}

	/**
	 * @return BuyerProtectionCodeType
	 **/
	function getBuyerProtection()
	{
		return $this->BuyerProtection;
	}

	/**
	 * @return void
	 **/
	function setBuyerProtection($value)
	{
		$this->BuyerProtection = $value;
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
	 * @return boolean
	 **/
	function getCategoryMappingAllowed()
	{
		return $this->CategoryMappingAllowed;
	}

	/**
	 * @return void
	 **/
	function setCategoryMappingAllowed($value)
	{
		$this->CategoryMappingAllowed = $value;
	}

	/**
	 * @return CharityType
	 **/
	function getCharity()
	{
		return $this->Charity;
	}

	/**
	 * @return void
	 **/
	function setCharity($value)
	{
		$this->Charity = $value;
	}

	/**
	 * @return CountryCodeType
	 **/
	function getCountry()
	{
		return $this->Country;
	}

	/**
	 * @return void
	 **/
	function setCountry($value)
	{
		$this->Country = $value;
	}

	/**
	 * @return CrossPromotionsType
	 **/
	function getCrossPromotion()
	{
		return $this->CrossPromotion;
	}

	/**
	 * @return void
	 **/
	function setCrossPromotion($value)
	{
		$this->CrossPromotion = $value;
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
	 * @return string
	 **/
	function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @return void
	 **/
	function setDescription($value)
	{
		$this->Description = $value;
	}

	/**
	 * @return DescriptionReviseModeCodeType
	 **/
	function getDescriptionReviseMode()
	{
		return $this->DescriptionReviseMode;
	}

	/**
	 * @return void
	 **/
	function setDescriptionReviseMode($value)
	{
		$this->DescriptionReviseMode = $value;
	}

	/**
	 * @return DistanceType
	 **/
	function getDistance()
	{
		return $this->Distance;
	}

	/**
	 * @return void
	 **/
	function setDistance($value)
	{
		$this->Distance = $value;
	}

	/**
	 * @return int
	 **/
	function getGiftIcon()
	{
		return $this->GiftIcon;
	}

	/**
	 * @return void
	 **/
	function setGiftIcon($value)
	{
		$this->GiftIcon = $value;
	}

	/**
	 * @return GiftServicesCodeType
	 * @param integer $index 
	 **/
	function getGiftServices($index = null)
	{
		if ($index !== null)
		{
			return $this->GiftServices[$index];
		}
		else
		{
			return $this->GiftServices;
		}
	}

	/**
	 * @return void
	 * @param GiftServicesCodeType $value
	 * @param integer $index 
	 **/
	function setGiftServices($value, $index = null)
	{
		if ($index !== null)
		{
			$this->GiftServices[$index] = $value;
		}
		else
		{
			$this->GiftServices= $value;
		}
	}

	/**
	 * @return void
	 * @param GiftServicesCodeType $value
	 **/
	function addGiftServices($value)
	{
		$this->GiftServices[] = $value;
	}

	/**
	 * @return HitCounterCodeType
	 **/
	function getHitCounter()
	{
		return $this->HitCounter;
	}

	/**
	 * @return void
	 **/
	function setHitCounter($value)
	{
		$this->HitCounter = $value;
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
	 * @return ListingDetailsType
	 **/
	function getListingDetails()
	{
		return $this->ListingDetails;
	}

	/**
	 * @return void
	 **/
	function setListingDetails($value)
	{
		$this->ListingDetails = $value;
	}

	/**
	 * @return ListingDesignerType
	 **/
	function getListingDesigner()
	{
		return $this->ListingDesigner;
	}

	/**
	 * @return void
	 **/
	function setListingDesigner($value)
	{
		$this->ListingDesigner = $value;
	}

	/**
	 * @return token
	 **/
	function getListingDuration()
	{
		return $this->ListingDuration;
	}

	/**
	 * @return void
	 **/
	function setListingDuration($value)
	{
		$this->ListingDuration = $value;
	}

	/**
	 * @return ListingEnhancementsCodeType
	 * @param integer $index 
	 **/
	function getListingEnhancement($index = null)
	{
		if ($index !== null)
		{
			return $this->ListingEnhancement[$index];
		}
		else
		{
			return $this->ListingEnhancement;
		}
	}

	/**
	 * @return void
	 * @param ListingEnhancementsCodeType $value
	 * @param integer $index 
	 **/
	function setListingEnhancement($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ListingEnhancement[$index] = $value;
		}
		else
		{
			$this->ListingEnhancement= $value;
		}
	}

	/**
	 * @return void
	 * @param ListingEnhancementsCodeType $value
	 **/
	function addListingEnhancement($value)
	{
		$this->ListingEnhancement[] = $value;
	}

	/**
	 * @return ListingTypeCodeType
	 **/
	function getListingType()
	{
		return $this->ListingType;
	}

	/**
	 * @return void
	 **/
	function setListingType($value)
	{
		$this->ListingType = $value;
	}

	/**
	 * @return string
	 **/
	function getLocation()
	{
		return $this->Location;
	}

	/**
	 * @return void
	 **/
	function setLocation($value)
	{
		$this->Location = $value;
	}

	/**
	 * @return int
	 **/
	function getLotSize()
	{
		return $this->LotSize;
	}

	/**
	 * @return void
	 **/
	function setLotSize($value)
	{
		$this->LotSize = $value;
	}

	/**
	 * @return string
	 **/
	function getPartnerCode()
	{
		return $this->PartnerCode;
	}

	/**
	 * @return void
	 **/
	function setPartnerCode($value)
	{
		$this->PartnerCode = $value;
	}

	/**
	 * @return string
	 **/
	function getPartnerName()
	{
		return $this->PartnerName;
	}

	/**
	 * @return void
	 **/
	function setPartnerName($value)
	{
		$this->PartnerName = $value;
	}

	/**
	 * @return BuyerPaymentMethodCodeType
	 * @param integer $index 
	 **/
	function getPaymentMethods($index = null)
	{
		if ($index !== null)
		{
			return $this->PaymentMethods[$index];
		}
		else
		{
			return $this->PaymentMethods;
		}
	}

	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value
	 * @param integer $index 
	 **/
	function setPaymentMethods($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PaymentMethods[$index] = $value;
		}
		else
		{
			$this->PaymentMethods= $value;
		}
	}

	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value
	 **/
	function addPaymentMethods($value)
	{
		$this->PaymentMethods[] = $value;
	}

	/**
	 * @return string
	 **/
	function getPayPalEmailAddress()
	{
		return $this->PayPalEmailAddress;
	}

	/**
	 * @return void
	 **/
	function setPayPalEmailAddress($value)
	{
		$this->PayPalEmailAddress = $value;
	}

	/**
	 * @return CategoryType
	 **/
	function getPrimaryCategory()
	{
		return $this->PrimaryCategory;
	}

	/**
	 * @return void
	 **/
	function setPrimaryCategory($value)
	{
		$this->PrimaryCategory = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPrivateListing()
	{
		return $this->PrivateListing;
	}

	/**
	 * @return void
	 **/
	function setPrivateListing($value)
	{
		$this->PrivateListing = $value;
	}

	/**
	 * @return ProductListingDetailsType
	 **/
	function getProductListingDetails()
	{
		return $this->ProductListingDetails;
	}

	/**
	 * @return void
	 **/
	function setProductListingDetails($value)
	{
		$this->ProductListingDetails = $value;
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
	function getPrivateNotes()
	{
		return $this->PrivateNotes;
	}

	/**
	 * @return void
	 **/
	function setPrivateNotes($value)
	{
		$this->PrivateNotes = $value;
	}

	/**
	 * @return string
	 **/
	function getRegionID()
	{
		return $this->RegionID;
	}

	/**
	 * @return void
	 **/
	function setRegionID($value)
	{
		$this->RegionID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRelistLink()
	{
		return $this->RelistLink;
	}

	/**
	 * @return void
	 **/
	function setRelistLink($value)
	{
		$this->RelistLink = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getReservePrice()
	{
		return $this->ReservePrice;
	}

	/**
	 * @return void
	 **/
	function setReservePrice($value)
	{
		$this->ReservePrice = $value;
	}

	/**
	 * @return ReviseStatusType
	 **/
	function getReviseStatus()
	{
		return $this->ReviseStatus;
	}

	/**
	 * @return void
	 **/
	function setReviseStatus($value)
	{
		$this->ReviseStatus = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getScheduleTime()
	{
		return $this->ScheduleTime;
	}

	/**
	 * @return void
	 **/
	function setScheduleTime($value)
	{
		$this->ScheduleTime = $value;
	}

	/**
	 * @return CategoryType
	 **/
	function getSecondaryCategory()
	{
		return $this->SecondaryCategory;
	}

	/**
	 * @return void
	 **/
	function setSecondaryCategory($value)
	{
		$this->SecondaryCategory = $value;
	}

	/**
	 * @return CategoryType
	 **/
	function getFreeAddedCategory()
	{
		return $this->FreeAddedCategory;
	}

	/**
	 * @return void
	 **/
	function setFreeAddedCategory($value)
	{
		$this->FreeAddedCategory = $value;
	}

	/**
	 * @return UserType
	 **/
	function getSeller()
	{
		return $this->Seller;
	}

	/**
	 * @return void
	 **/
	function setSeller($value)
	{
		$this->Seller = $value;
	}

	/**
	 * @return SellingStatusType
	 **/
	function getSellingStatus()
	{
		return $this->SellingStatus;
	}

	/**
	 * @return void
	 **/
	function setSellingStatus($value)
	{
		$this->SellingStatus = $value;
	}

	/**
	 * @return ShippingDetailsType
	 **/
	function getShippingDetails()
	{
		return $this->ShippingDetails;
	}

	/**
	 * @return void
	 **/
	function setShippingDetails($value)
	{
		$this->ShippingDetails = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getShipToLocations($index = null)
	{
		if ($index !== null)
		{
			return $this->ShipToLocations[$index];
		}
		else
		{
			return $this->ShipToLocations;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setShipToLocations($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ShipToLocations[$index] = $value;
		}
		else
		{
			$this->ShipToLocations= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addShipToLocations($value)
	{
		$this->ShipToLocations[] = $value;
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
	 * @return AmountType
	 **/
	function getStartPrice()
	{
		return $this->StartPrice;
	}

	/**
	 * @return void
	 **/
	function setStartPrice($value)
	{
		$this->StartPrice = $value;
	}

	/**
	 * @return StorefrontType
	 **/
	function getStorefront()
	{
		return $this->Storefront;
	}

	/**
	 * @return void
	 **/
	function setStorefront($value)
	{
		$this->Storefront = $value;
	}

	/**
	 * @return string
	 **/
	function getSubTitle()
	{
		return $this->SubTitle;
	}

	/**
	 * @return void
	 **/
	function setSubTitle($value)
	{
		$this->SubTitle = $value;
	}

	/**
	 * @return duration
	 **/
	function getTimeLeft()
	{
		return $this->TimeLeft;
	}

	/**
	 * @return void
	 **/
	function setTimeLeft($value)
	{
		$this->TimeLeft = $value;
	}

	/**
	 * @return string
	 **/
	function getTitle()
	{
		return $this->Title;
	}

	/**
	 * @return void
	 **/
	function setTitle($value)
	{
		$this->Title = $value;
	}

	/**
	 * @return UUIDType
	 **/
	function getUUID()
	{
		return $this->UUID;
	}

	/**
	 * @return void
	 **/
	function setUUID($value)
	{
		$this->UUID = $value;
	}

	/**
	 * @return VATDetailsType
	 **/
	function getVATDetails()
	{
		return $this->VATDetails;
	}

	/**
	 * @return void
	 **/
	function setVATDetails($value)
	{
		$this->VATDetails = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerVacationNote()
	{
		return $this->SellerVacationNote;
	}

	/**
	 * @return void
	 **/
	function setSellerVacationNote($value)
	{
		$this->SellerVacationNote = $value;
	}

	/**
	 * @return long
	 **/
	function getWatchCount()
	{
		return $this->WatchCount;
	}

	/**
	 * @return void
	 **/
	function setWatchCount($value)
	{
		$this->WatchCount = $value;
	}

	/**
	 * @return long
	 **/
	function getHitCount()
	{
		return $this->HitCount;
	}

	/**
	 * @return void
	 **/
	function setHitCount($value)
	{
		$this->HitCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDisableBuyerRequirements()
	{
		return $this->DisableBuyerRequirements;
	}

	/**
	 * @return void
	 **/
	function setDisableBuyerRequirements($value)
	{
		$this->DisableBuyerRequirements = $value;
	}

	/**
	 * @return BestOfferDetailsType
	 **/
	function getBestOfferDetails()
	{
		return $this->BestOfferDetails;
	}

	/**
	 * @return void
	 **/
	function setBestOfferDetails($value)
	{
		$this->BestOfferDetails = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocationDefaulted()
	{
		return $this->LocationDefaulted;
	}

	/**
	 * @return void
	 **/
	function setLocationDefaulted($value)
	{
		$this->LocationDefaulted = $value;
	}

	/**
	 * @return boolean
	 **/
	function getThirdPartyCheckout()
	{
		return $this->ThirdPartyCheckout;
	}

	/**
	 * @return void
	 **/
	function setThirdPartyCheckout($value)
	{
		$this->ThirdPartyCheckout = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUseTaxTable()
	{
		return $this->UseTaxTable;
	}

	/**
	 * @return void
	 **/
	function setUseTaxTable($value)
	{
		$this->UseTaxTable = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGetItFast()
	{
		return $this->GetItFast;
	}

	/**
	 * @return void
	 **/
	function setGetItFast($value)
	{
		$this->GetItFast = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBuyerResponsibleForShipping()
	{
		return $this->BuyerResponsibleForShipping;
	}

	/**
	 * @return void
	 **/
	function setBuyerResponsibleForShipping($value)
	{
		$this->BuyerResponsibleForShipping = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLimitedWarrantyEligible()
	{
		return $this->LimitedWarrantyEligible;
	}

	/**
	 * @return void
	 **/
	function setLimitedWarrantyEligible($value)
	{
		$this->LimitedWarrantyEligible = $value;
	}

	/**
	 * @return string
	 **/
	function geteBayNotes()
	{
		return $this->eBayNotes;
	}

	/**
	 * @return void
	 **/
	function seteBayNotes($value)
	{
		$this->eBayNotes = $value;
	}

	/**
	 * @return long
	 **/
	function getQuestionCount()
	{
		return $this->QuestionCount;
	}

	/**
	 * @return void
	 **/
	function setQuestionCount($value)
	{
		$this->QuestionCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRelisted()
	{
		return $this->Relisted;
	}

	/**
	 * @return void
	 **/
	function setRelisted($value)
	{
		$this->Relisted = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantityAvailable()
	{
		return $this->QuantityAvailable;
	}

	/**
	 * @return void
	 **/
	function setQuantityAvailable($value)
	{
		$this->QuantityAvailable = $value;
	}

	/**
	 * @return SKUType
	 **/
	function getSKU()
	{
		return $this->SKU;
	}

	/**
	 * @return void
	 **/
	function setSKU($value)
	{
		$this->SKU = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCategoryBasedAttributesPrefill()
	{
		return $this->CategoryBasedAttributesPrefill;
	}

	/**
	 * @return void
	 **/
	function setCategoryBasedAttributesPrefill($value)
	{
		$this->CategoryBasedAttributesPrefill = $value;
	}

	/**
	 * @return SearchDetailsType
	 **/
	function getSearchDetails()
	{
		return $this->SearchDetails;
	}

	/**
	 * @return void
	 **/
	function setSearchDetails($value)
	{
		$this->SearchDetails = $value;
	}

	/**
	 * @return string
	 **/
	function getPostalCode()
	{
		return $this->PostalCode;
	}

	/**
	 * @return void
	 **/
	function setPostalCode($value)
	{
		$this->PostalCode = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShippingTermsInDescription()
	{
		return $this->ShippingTermsInDescription;
	}

	/**
	 * @return void
	 **/
	function setShippingTermsInDescription($value)
	{
		$this->ShippingTermsInDescription = $value;
	}

	/**
	 * @return ExternalProductIDType
	 **/
	function getExternalProductID()
	{
		return $this->ExternalProductID;
	}

	/**
	 * @return void
	 **/
	function setExternalProductID($value)
	{
		$this->ExternalProductID = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerInventoryID()
	{
		return $this->SellerInventoryID;
	}

	/**
	 * @return void
	 **/
	function setSellerInventoryID($value)
	{
		$this->SellerInventoryID = $value;
	}

	/**
	 * @return PictureDetailsType
	 **/
	function getPictureDetails()
	{
		return $this->PictureDetails;
	}

	/**
	 * @return void
	 **/
	function setPictureDetails($value)
	{
		$this->PictureDetails = $value;
	}

	/**
	 * @return int
	 **/
	function getDispatchTimeMax()
	{
		return $this->DispatchTimeMax;
	}

	/**
	 * @return void
	 **/
	function setDispatchTimeMax($value)
	{
		$this->DispatchTimeMax = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSkypeEnabled()
	{
		return $this->SkypeEnabled;
	}

	/**
	 * @return void
	 **/
	function setSkypeEnabled($value)
	{
		$this->SkypeEnabled = $value;
	}

	/**
	 * @return string
	 **/
	function getSkypeID()
	{
		return $this->SkypeID;
	}

	/**
	 * @return void
	 **/
	function setSkypeID($value)
	{
		$this->SkypeID = $value;
	}

	/**
	 * @return SkypeContactOptionCodeType
	 * @param integer $index 
	 **/
	function getSkypeContactOption($index = null)
	{
		if ($index !== null)
		{
			return $this->SkypeContactOption[$index];
		}
		else
		{
			return $this->SkypeContactOption;
		}
	}

	/**
	 * @return void
	 * @param SkypeContactOptionCodeType $value
	 * @param integer $index 
	 **/
	function setSkypeContactOption($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SkypeContactOption[$index] = $value;
		}
		else
		{
			$this->SkypeContactOption= $value;
		}
	}

	/**
	 * @return void
	 * @param SkypeContactOptionCodeType $value
	 **/
	function addSkypeContactOption($value)
	{
		$this->SkypeContactOption[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function setBestOfferEnabled($value)
	{
		$this->BestOfferEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalListing()
	{
		return $this->LocalListing;
	}

	/**
	 * @return void
	 **/
	function setLocalListing($value)
	{
		$this->LocalListing = $value;
	}

	/**
	 * @return boolean
	 **/
	function getThirdPartyCheckoutIntegration()
	{
		return $this->ThirdPartyCheckoutIntegration;
	}

	/**
	 * @return void
	 **/
	function setThirdPartyCheckoutIntegration($value)
	{
		$this->ThirdPartyCheckoutIntegration = $value;
	}

	/**
	 * @return ListingCheckoutRedirectPreferenceType
	 **/
	function getListingCheckoutRedirectPreference()
	{
		return $this->ListingCheckoutRedirectPreference;
	}

	/**
	 * @return void
	 **/
	function setListingCheckoutRedirectPreference($value)
	{
		$this->ListingCheckoutRedirectPreference = $value;
	}

	/**
	 * @return AddressType
	 **/
	function getSellerContactDetails()
	{
		return $this->SellerContactDetails;
	}

	/**
	 * @return void
	 **/
	function setSellerContactDetails($value)
	{
		$this->SellerContactDetails = $value;
	}

	/**
	 * @return long
	 **/
	function getTotalQuestionCount()
	{
		return $this->TotalQuestionCount;
	}

	/**
	 * @return void
	 **/
	function setTotalQuestionCount($value)
	{
		$this->TotalQuestionCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getProxyItem()
	{
		return $this->ProxyItem;
	}

	/**
	 * @return void
	 **/
	function setProxyItem($value)
	{
		$this->ProxyItem = $value;
	}

	/**
	 * @return ExtendedContactDetailsType
	 **/
	function getExtendedSellerContactDetails()
	{
		return $this->ExtendedSellerContactDetails;
	}

	/**
	 * @return void
	 **/
	function setExtendedSellerContactDetails($value)
	{
		$this->ExtendedSellerContactDetails = $value;
	}

	/**
	 * @return int
	 **/
	function getLeadCount()
	{
		return $this->LeadCount;
	}

	/**
	 * @return void
	 **/
	function setLeadCount($value)
	{
		$this->LeadCount = $value;
	}

	/**
	 * @return int
	 **/
	function getNewLeadCount()
	{
		return $this->NewLeadCount;
	}

	/**
	 * @return void
	 **/
	function setNewLeadCount($value)
	{
		$this->NewLeadCount = $value;
	}

	/**
	 * @return NameValueListArrayType
	 **/
	function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}

	/**
	 * @return void
	 **/
	function setItemSpecifics($value)
	{
		$this->ItemSpecifics = $value;
	}

	/**
	 * @return string
	 **/
	function getGroupCategoryID()
	{
		return $this->GroupCategoryID;
	}

	/**
	 * @return void
	 **/
	function setGroupCategoryID($value)
	{
		$this->GroupCategoryID = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getClassifiedAdPayPerLeadFee()
	{
		return $this->ClassifiedAdPayPerLeadFee;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdPayPerLeadFee($value)
	{
		$this->ClassifiedAdPayPerLeadFee = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBidGroupItem()
	{
		return $this->BidGroupItem;
	}

	/**
	 * @return void
	 **/
	function setBidGroupItem($value)
	{
		$this->BidGroupItem = $value;
	}

	/**
	 * @return BuyerProtectionDetailsType
	 **/
	function getApplyBuyerProtection()
	{
		return $this->ApplyBuyerProtection;
	}

	/**
	 * @return void
	 **/
	function setApplyBuyerProtection($value)
	{
		$this->ApplyBuyerProtection = $value;
	}

	/**
	 * @return ListingSubtypeCodeType
	 **/
	function getListingSubtype2()
	{
		return $this->ListingSubtype2;
	}

	/**
	 * @return void
	 **/
	function setListingSubtype2($value)
	{
		$this->ListingSubtype2 = $value;
	}

	/**
	 * @return boolean
	 **/
	function getMechanicalCheckAccepted()
	{
		return $this->MechanicalCheckAccepted;
	}

	/**
	 * @return void
	 **/
	function setMechanicalCheckAccepted($value)
	{
		$this->MechanicalCheckAccepted = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUpdateSellerInfo()
	{
		return $this->UpdateSellerInfo;
	}

	/**
	 * @return void
	 **/
	function setUpdateSellerInfo($value)
	{
		$this->UpdateSellerInfo = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUpdateReturnPolicy()
	{
		return $this->UpdateReturnPolicy;
	}

	/**
	 * @return void
	 **/
	function setUpdateReturnPolicy($value)
	{
		$this->UpdateReturnPolicy = $value;
	}

	/**
	 * @return ItemPolicyViolationType
	 **/
	function getItemPolicyViolation()
	{
		return $this->ItemPolicyViolation;
	}

	/**
	 * @return void
	 **/
	function setItemPolicyViolation($value)
	{
		$this->ItemPolicyViolation = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getCrossBorderTrade($index = null)
	{
		if ($index !== null)
		{
			return $this->CrossBorderTrade[$index];
		}
		else
		{
			return $this->CrossBorderTrade;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setCrossBorderTrade($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CrossBorderTrade[$index] = $value;
		}
		else
		{
			$this->CrossBorderTrade= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addCrossBorderTrade($value)
	{
		$this->CrossBorderTrade[] = $value;
	}

	/**
	 * @return BusinessSellerDetailsType
	 **/
	function getBusinessSellerDetails()
	{
		return $this->BusinessSellerDetails;
	}

	/**
	 * @return void
	 **/
	function setBusinessSellerDetails($value)
	{
		$this->BusinessSellerDetails = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getBuyerGuaranteePrice()
	{
		return $this->BuyerGuaranteePrice;
	}

	/**
	 * @return void
	 **/
	function setBuyerGuaranteePrice($value)
	{
		$this->BuyerGuaranteePrice = $value;
	}

	/**
	 * @return BuyerRequirementDetailsType
	 **/
	function getBuyerRequirementDetails()
	{
		return $this->BuyerRequirementDetails;
	}

	/**
	 * @return void
	 **/
	function setBuyerRequirementDetails($value)
	{
		$this->BuyerRequirementDetails = $value;
	}

	/**
	 * @return ReturnPolicyType
	 **/
	function getReturnPolicy()
	{
		return $this->ReturnPolicy;
	}

	/**
	 * @return void
	 **/
	function setReturnPolicy($value)
	{
		$this->ReturnPolicy = $value;
	}

	/**
	 * @return SiteCodeType
	 * @param integer $index 
	 **/
	function getPaymentAllowedSite($index = null)
	{
		if ($index !== null)
		{
			return $this->PaymentAllowedSite[$index];
		}
		else
		{
			return $this->PaymentAllowedSite;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 * @param integer $index 
	 **/
	function setPaymentAllowedSite($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PaymentAllowedSite[$index] = $value;
		}
		else
		{
			$this->PaymentAllowedSite= $value;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 **/
	function addPaymentAllowedSite($value)
	{
		$this->PaymentAllowedSite[] = $value;
	}

	/**
	 * @return InventoryTrackingMethodCodeType
	 **/
	function getInventoryTrackingMethod()
	{
		return $this->InventoryTrackingMethod;
	}

	/**
	 * @return void
	 **/
	function setInventoryTrackingMethod($value)
	{
		$this->InventoryTrackingMethod = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}

	/**
	 * @return void
	 **/
	function setIntegratedMerchantCreditCardEnabled($value)
	{
		$this->IntegratedMerchantCreditCardEnabled = $value;
	}

	/**
	 * @return VariationsType
	 **/
	function getVariations()
	{
		return $this->Variations;
	}

	/**
	 * @return void
	 **/
	function setVariations($value)
	{
		$this->Variations = $value;
	}

	/**
	 * @return ItemCompatibilityListType
	 **/
	function getItemCompatibilityList()
	{
		return $this->ItemCompatibilityList;
	}

	/**
	 * @return void
	 **/
	function setItemCompatibilityList($value)
	{
		$this->ItemCompatibilityList = $value;
	}

	/**
	 * @return int
	 **/
	function getItemCompatibilityCount()
	{
		return $this->ItemCompatibilityCount;
	}

	/**
	 * @return void
	 **/
	function setItemCompatibilityCount($value)
	{
		$this->ItemCompatibilityCount = $value;
	}

	/**
	 * @return int
	 **/
	function getConditionID()
	{
		return $this->ConditionID;
	}

	/**
	 * @return void
	 **/
	function setConditionID($value)
	{
		$this->ConditionID = $value;
	}

	/**
	 * @return string
	 **/
	function getConditionDescription()
	{
		return $this->ConditionDescription;
	}

	/**
	 * @return void
	 **/
	function setConditionDescription($value)
	{
		$this->ConditionDescription = $value;
	}

	/**
	 * @return string
	 **/
	function getConditionDisplayName()
	{
		return $this->ConditionDisplayName;
	}

	/**
	 * @return void
	 **/
	function setConditionDisplayName($value)
	{
		$this->ConditionDisplayName = $value;
	}

	/**
	 * @return string
	 **/
	function getTaxCategory()
	{
		return $this->TaxCategory;
	}

	/**
	 * @return void
	 **/
	function setTaxCategory($value)
	{
		$this->TaxCategory = $value;
	}

	/**
	 * @return QuantityAvailableHintCodeType
	 **/
	function getQuantityAvailableHint()
	{
		return $this->QuantityAvailableHint;
	}

	/**
	 * @return void
	 **/
	function setQuantityAvailableHint($value)
	{
		$this->QuantityAvailableHint = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantityThreshold()
	{
		return $this->QuantityThreshold;
	}

	/**
	 * @return void
	 **/
	function setQuantityThreshold($value)
	{
		$this->QuantityThreshold = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPostCheckoutExperienceEnabled()
	{
		return $this->PostCheckoutExperienceEnabled;
	}

	/**
	 * @return void
	 **/
	function setPostCheckoutExperienceEnabled($value)
	{
		$this->PostCheckoutExperienceEnabled = $value;
	}

	/**
	 * @return DiscountPriceInfoType
	 **/
	function getDiscountPriceInfo()
	{
		return $this->DiscountPriceInfo;
	}

	/**
	 * @return void
	 **/
	function setDiscountPriceInfo($value)
	{
		$this->DiscountPriceInfo = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUseRecommendedProduct()
	{
		return $this->UseRecommendedProduct;
	}

	/**
	 * @return void
	 **/
	function setUseRecommendedProduct($value)
	{
		$this->UseRecommendedProduct = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerProvidedTitle()
	{
		return $this->SellerProvidedTitle;
	}

	/**
	 * @return void
	 **/
	function setSellerProvidedTitle($value)
	{
		$this->SellerProvidedTitle = $value;
	}

	/**
	 * @return string
	 **/
	function getVIN()
	{
		return $this->VIN;
	}

	/**
	 * @return void
	 **/
	function setVIN($value)
	{
		$this->VIN = $value;
	}

	/**
	 * @return string
	 **/
	function getVINLink()
	{
		return $this->VINLink;
	}

	/**
	 * @return void
	 **/
	function setVINLink($value)
	{
		$this->VINLink = $value;
	}

	/**
	 * @return string
	 **/
	function getVRM()
	{
		return $this->VRM;
	}

	/**
	 * @return void
	 **/
	function setVRM($value)
	{
		$this->VRM = $value;
	}

	/**
	 * @return string
	 **/
	function getVRMLink()
	{
		return $this->VRMLink;
	}

	/**
	 * @return void
	 **/
	function setVRMLink($value)
	{
		$this->VRMLink = $value;
	}

	/**
	 * @return QuantityInfoType
	 **/
	function getQuantityInfo()
	{
		return $this->QuantityInfo;
	}

	/**
	 * @return void
	 **/
	function setQuantityInfo($value)
	{
		$this->QuantityInfo = $value;
	}

	/**
	 * @return SellerProfilesType
	 **/
	function getSellerProfiles()
	{
		return $this->SellerProfiles;
	}

	/**
	 * @return void
	 **/
	function setSellerProfiles($value)
	{
		$this->SellerProfiles = $value;
	}

	/**
	 * @return ShippingServiceCostOverrideListType
	 **/
	function getShippingServiceCostOverrideList()
	{
		return $this->ShippingServiceCostOverrideList;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceCostOverrideList($value)
	{
		$this->ShippingServiceCostOverrideList = $value;
	}

	/**
	 * @return ShipPackageDetailsType
	 **/
	function getShippingPackageDetails()
	{
		return $this->ShippingPackageDetails;
	}

	/**
	 * @return void
	 **/
	function setShippingPackageDetails($value)
	{
		$this->ShippingPackageDetails = $value;
	}

	/**
	 * @return boolean
	 **/
	function getTopRatedListing()
	{
		return $this->TopRatedListing;
	}

	/**
	 * @return void
	 **/
	function setTopRatedListing($value)
	{
		$this->TopRatedListing = $value;
	}

	/**
	 * @return QuantityRestrictionPerBuyerInfoType
	 **/
	function getQuantityRestrictionPerBuyer()
	{
		return $this->QuantityRestrictionPerBuyer;
	}

	/**
	 * @return void
	 **/
	function setQuantityRestrictionPerBuyer($value)
	{
		$this->QuantityRestrictionPerBuyer = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getFloorPrice()
	{
		return $this->FloorPrice;
	}

	/**
	 * @return void
	 **/
	function setFloorPrice($value)
	{
		$this->FloorPrice = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getCeilingPrice()
	{
		return $this->CeilingPrice;
	}

	/**
	 * @return void
	 **/
	function setCeilingPrice($value)
	{
		$this->CeilingPrice = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIsIntermediatedShippingEligible()
	{
		return $this->IsIntermediatedShippingEligible;
	}

	/**
	 * @return void
	 **/
	function setIsIntermediatedShippingEligible($value)
	{
		$this->IsIntermediatedShippingEligible = $value;
	}

	/**
	 * @return UnitInfoType
	 **/
	function getUnitInfo()
	{
		return $this->UnitInfo;
	}

	/**
	 * @return void
	 **/
	function setUnitInfo($value)
	{
		$this->UnitInfo = $value;
	}

	/**
	 * @return long
	 **/
	function getRelistParentID()
	{
		return $this->RelistParentID;
	}

	/**
	 * @return void
	 **/
	function setRelistParentID($value)
	{
		$this->RelistParentID = $value;
	}

	/**
	 * @return string
	 **/
	function getConditionDefinition()
	{
		return $this->ConditionDefinition;
	}

	/**
	 * @return void
	 **/
	function setConditionDefinition($value)
	{
		$this->ConditionDefinition = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHideFromSearch()
	{
		return $this->HideFromSearch;
	}

	/**
	 * @return void
	 **/
	function setHideFromSearch($value)
	{
		$this->HideFromSearch = $value;
	}

	/**
	 * @return ReasonHideFromSearchCodeType
	 **/
	function getReasonHideFromSearch()
	{
		return $this->ReasonHideFromSearch;
	}

	/**
	 * @return void
	 **/
	function setReasonHideFromSearch($value)
	{
		$this->ReasonHideFromSearch = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeRecommendations()
	{
		return $this->IncludeRecommendations;
	}

	/**
	 * @return void
	 **/
	function setIncludeRecommendations($value)
	{
		$this->IncludeRecommendations = $value;
	}

	/**
	 * @return PickupInStoreDetailsType
	 **/
	function getPickupInStoreDetails()
	{
		return $this->PickupInStoreDetails;
	}

	/**
	 * @return void
	 **/
	function setPickupInStoreDetails($value)
	{
		$this->PickupInStoreDetails = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayNowEligible()
	{
		return $this->eBayNowEligible;
	}

	/**
	 * @return void
	 **/
	function seteBayNowEligible($value)
	{
		$this->eBayNowEligible = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayNowAvailable()
	{
		return $this->eBayNowAvailable;
	}

	/**
	 * @return void
	 **/
	function seteBayNowAvailable($value)
	{
		$this->eBayNowAvailable = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIgnoreQuantity()
	{
		return $this->IgnoreQuantity;
	}

	/**
	 * @return void
	 **/
	function setIgnoreQuantity($value)
	{
		$this->IgnoreQuantity = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAvailableForPickupDropOff()
	{
		return $this->AvailableForPickupDropOff;
	}

	/**
	 * @return void
	 **/
	function setAvailableForPickupDropOff($value)
	{
		$this->AvailableForPickupDropOff = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEligibleForPickupDropOff()
	{
		return $this->EligibleForPickupDropOff;
	}

	/**
	 * @return void
	 **/
	function setEligibleForPickupDropOff($value)
	{
		$this->EligibleForPickupDropOff = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLiveAuction()
	{
		return $this->LiveAuction;
	}

	/**
	 * @return void
	 **/
	function setLiveAuction($value)
	{
		$this->LiveAuction = $value;
	}

	/**
	 * @return DigitalGoodInfoType
	 **/
	function getDigitalGoodInfo()
	{
		return $this->DigitalGoodInfo;
	}

	/**
	 * @return void
	 **/
	function setDigitalGoodInfo($value)
	{
		$this->DigitalGoodInfo = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayPlus()
	{
		return $this->eBayPlus;
	}

	/**
	 * @return void
	 **/
	function seteBayPlus($value)
	{
		$this->eBayPlus = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayPlusEligible()
	{
		return $this->eBayPlusEligible;
	}

	/**
	 * @return void
	 **/
	function seteBayPlusEligible($value)
	{
		$this->eBayPlusEligible = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteMailDeliveryAvailable()
	{
		return $this->eMailDeliveryAvailable;
	}

	/**
	 * @return void
	 **/
	function seteMailDeliveryAvailable($value)
	{
		$this->eMailDeliveryAvailable = $value;
	}

}
?>
