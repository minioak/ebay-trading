<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FeatureIDCodeType extends EbatNs_FacetType
{
	const CodeType_ListingDurations = 'ListingDurations';
	const CodeType_BestOfferEnabled = 'BestOfferEnabled';
	const CodeType_DutchBINEnabled = 'DutchBINEnabled';
	const CodeType_ShippingTermsRequired = 'ShippingTermsRequired';
	const CodeType_UserConsentRequired = 'UserConsentRequired';
	const CodeType_HomePageFeaturedEnabled = 'HomePageFeaturedEnabled';
	const CodeType_AdFormatEnabled = 'AdFormatEnabled';
	const CodeType_DigitalDeliveryEnabled = 'DigitalDeliveryEnabled';
	const CodeType_BestOfferCounterEnabled = 'BestOfferCounterEnabled';
	const CodeType_BestOfferAutoDeclineEnabled = 'BestOfferAutoDeclineEnabled';
	const CodeType_ProPack = 'ProPack';
	const CodeType_BasicUpgradePack = 'BasicUpgradePack';
	const CodeType_ValuePack = 'ValuePack';
	const CodeType_ProPackPlus = 'ProPackPlus';
	const CodeType_LocalMarketSpecialitySubscription = 'LocalMarketSpecialitySubscription';
	const CodeType_LocalMarketRegularSubscription = 'LocalMarketRegularSubscription';
	const CodeType_LocalMarketPremiumSubscription = 'LocalMarketPremiumSubscription';
	const CodeType_LocalMarketNonSubscription = 'LocalMarketNonSubscription';
	const CodeType_ExpressEnabled = 'ExpressEnabled';
	const CodeType_ExpressPicturesRequired = 'ExpressPicturesRequired';
	const CodeType_ExpressConditionRequired = 'ExpressConditionRequired';
	const CodeType_SellerContactDetailsEnabled = 'SellerContactDetailsEnabled';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_MinimumReservePrice = 'MinimumReservePrice';
	const CodeType_TransactionConfirmationRequestEnabled = 'TransactionConfirmationRequestEnabled';
	const CodeType_StoreInventoryEnabled = 'StoreInventoryEnabled';
	const CodeType_LocalListingDistances = 'LocalListingDistances';
	const CodeType_SkypeMeTransactionalEnabled = 'SkypeMeTransactionalEnabled';
	const CodeType_SkypeMeNonTransactionalEnabled = 'SkypeMeNonTransactionalEnabled';
	const CodeType_ClassifiedAdPaymentMethodEnabled = 'ClassifiedAdPaymentMethodEnabled';
	const CodeType_ClassifiedAdShippingMethodEnabled = 'ClassifiedAdShippingMethodEnabled';
	const CodeType_ClassifiedAdBestOfferEnabled = 'ClassifiedAdBestOfferEnabled';
	const CodeType_ClassifiedAdCounterOfferEnabled = 'ClassifiedAdCounterOfferEnabled';
	const CodeType_ClassifiedAdAutoDeclineEnabled = 'ClassifiedAdAutoDeclineEnabled';
	const CodeType_ClassifiedAdContactByEmailEnabled = 'ClassifiedAdContactByEmailEnabled';
	const CodeType_ClassifiedAdContactByPhoneEnabled = 'ClassifiedAdContactByPhoneEnabled';
	const CodeType_SafePaymentRequired = 'SafePaymentRequired';
	const CodeType_MaximumBestOffersAllowed = 'MaximumBestOffersAllowed';
	const CodeType_ClassifiedAdMaximumBestOffersAllowed = 'ClassifiedAdMaximumBestOffersAllowed';
	const CodeType_ClassifiedAdContactByEmailAvailable = 'ClassifiedAdContactByEmailAvailable';
	const CodeType_ClassifiedAdPayPerLeadEnabled = 'ClassifiedAdPayPerLeadEnabled';
	const CodeType_ItemSpecificsEnabled = 'ItemSpecificsEnabled';
	const CodeType_PaisaPayFullEscrowEnabled = 'PaisaPayFullEscrowEnabled';
	const CodeType_ISBNIdentifierEnabled = 'ISBNIdentifierEnabled';
	const CodeType_UPCIdentifierEnabled = 'UPCIdentifierEnabled';
	const CodeType_EANIdentifierEnabled = 'EANIdentifierEnabled';
	const CodeType_BrandMPNIdentifierEnabled = 'BrandMPNIdentifierEnabled';
	const CodeType_ClassifiedAdAutoAcceptEnabled = 'ClassifiedAdAutoAcceptEnabled';
	const CodeType_BestOfferAutoAcceptEnabled = 'BestOfferAutoAcceptEnabled';
	const CodeType_CrossBorderTradeEnabled = 'CrossBorderTradeEnabled';
	const CodeType_PayPalBuyerProtectionEnabled = 'PayPalBuyerProtectionEnabled';
	const CodeType_BuyerGuaranteeEnabled = 'BuyerGuaranteeEnabled';
	const CodeType_INEscrowWorkflowTimeline = 'INEscrowWorkflowTimeline';
	const CodeType_CombinedFixedPriceTreatment = 'CombinedFixedPriceTreatment';
	const CodeType_GalleryFeaturedDurations = 'GalleryFeaturedDurations';
	const CodeType_PayPalRequired = 'PayPalRequired';
	const CodeType_eBayMotorsProAdFormatEnabled = 'eBayMotorsProAdFormatEnabled';
	const CodeType_eBayMotorsProContactByPhoneEnabled = 'eBayMotorsProContactByPhoneEnabled';
	const CodeType_eBayMotorsProContactByAddressEnabled = 'eBayMotorsProContactByAddressEnabled';
	const CodeType_eBayMotorsProCompanyNameEnabled = 'eBayMotorsProCompanyNameEnabled';
	const CodeType_eBayMotorsProContactByEmailEnabled = 'eBayMotorsProContactByEmailEnabled';
	const CodeType_eBayMotorsProBestOfferEnabled = 'eBayMotorsProBestOfferEnabled';
	const CodeType_eBayMotorsProAutoAcceptEnabled = 'eBayMotorsProAutoAcceptEnabled';
	const CodeType_eBayMotorsProAutoDeclineEnabled = 'eBayMotorsProAutoDeclineEnabled';
	const CodeType_eBayMotorsProPaymentMethodCheckOutEnabled = 'eBayMotorsProPaymentMethodCheckOutEnabled';
	const CodeType_eBayMotorsProShippingMethodEnabled = 'eBayMotorsProShippingMethodEnabled';
	const CodeType_eBayMotorsProCounterOfferEnabled = 'eBayMotorsProCounterOfferEnabled';
	const CodeType_eBayMotorsProSellerContactDetailsEnabled = 'eBayMotorsProSellerContactDetailsEnabled';
	const CodeType_LocalMarketAdFormatEnabled = 'LocalMarketAdFormatEnabled';
	const CodeType_LocalMarketContactByPhoneEnabled = 'LocalMarketContactByPhoneEnabled';
	const CodeType_LocalMarketContactByAddressEnabled = 'LocalMarketContactByAddressEnabled';
	const CodeType_LocalMarketCompanyNameEnabled = 'LocalMarketCompanyNameEnabled';
	const CodeType_LocalMarketContactByEmailEnabled = 'LocalMarketContactByEmailEnabled';
	const CodeType_LocalMarketBestOfferEnabled = 'LocalMarketBestOfferEnabled';
	const CodeType_LocalMarketAutoAcceptEnabled = 'LocalMarketAutoAcceptEnabled';
	const CodeType_LocalMarketAutoDeclineEnabled = 'LocalMarketAutoDeclineEnabled';
	const CodeType_LocalMarketPaymentMethodCheckOutEnabled = 'LocalMarketPaymentMethodCheckOutEnabled';
	const CodeType_LocalMarketShippingMethodEnabled = 'LocalMarketShippingMethodEnabled';
	const CodeType_LocalMarketCounterOfferEnabled = 'LocalMarketCounterOfferEnabled';
	const CodeType_LocalMarketSellerContactDetailsEnabled = 'LocalMarketSellerContactDetailsEnabled';
	const CodeType_ClassifiedAdContactByAddressEnabled = 'ClassifiedAdContactByAddressEnabled';
	const CodeType_ClassifiedAdCompanyNameEnabled = 'ClassifiedAdCompanyNameEnabled';
	const CodeType_SpecialitySubscription = 'SpecialitySubscription';
	const CodeType_RegularSubscription = 'RegularSubscription';
	const CodeType_PremiumSubscription = 'PremiumSubscription';
	const CodeType_NonSubscription = 'NonSubscription';
	const CodeType_IntangibleEnabled = 'IntangibleEnabled';
	const CodeType_PayPalRequiredForStoreOwner = 'PayPalRequiredForStoreOwner';
	const CodeType_ReviseQuantityAllowed = 'ReviseQuantityAllowed';
	const CodeType_RevisePriceAllowed = 'RevisePriceAllowed';
	const CodeType_StoreOwnerExtendedListingDurationsEnabled = 'StoreOwnerExtendedListingDurationsEnabled';
	const CodeType_StoreOwnerExtendedListingDurations = 'StoreOwnerExtendedListingDurations';
	const CodeType_ReturnPolicyEnabled = 'ReturnPolicyEnabled';
	const CodeType_HandlingTimeEnabled = 'HandlingTimeEnabled';
	const CodeType_PaymentMethods = 'PaymentMethods';
	const CodeType_MaxFlatShippingCost = 'MaxFlatShippingCost';
	const CodeType_MaxFlatShippingCostCBTExempt = 'MaxFlatShippingCostCBTExempt';
	const CodeType_Group1MaxFlatShippingCost = 'Group1MaxFlatShippingCost';
	const CodeType_Group2MaxFlatShippingCost = 'Group2MaxFlatShippingCost';
	const CodeType_Group3MaxFlatShippingCost = 'Group3MaxFlatShippingCost';
	const CodeType_VariationsEnabled = 'VariationsEnabled';
	const CodeType_AttributeConversionEnabled = 'AttributeConversionEnabled';
	const CodeType_FreeGalleryPlusEnabled = 'FreeGalleryPlusEnabled';
	const CodeType_FreePicturePackEnabled = 'FreePicturePackEnabled';
	const CodeType_CompatibilityEnabled = 'CompatibilityEnabled';
	const CodeType_MinCompatibleApplications = 'MinCompatibleApplications';
	const CodeType_MaxCompatibleApplications = 'MaxCompatibleApplications';
	const CodeType_ConditionEnabled = 'ConditionEnabled';
	const CodeType_ConditionValues = 'ConditionValues';
	const CodeType_ValueCategory = 'ValueCategory';
	const CodeType_ProductCreationEnabled = 'ProductCreationEnabled';
	const CodeType_EANEnabled = 'EANEnabled';
	const CodeType_ISBNEnabled = 'ISBNEnabled';
	const CodeType_UPCEnabled = 'UPCEnabled';
	const CodeType_MaxGranularFitmentCount = 'MaxGranularFitmentCount';
	const CodeType_CompatibleVehicleType = 'CompatibleVehicleType';
	const CodeType_PaymentOptionsGroup = 'PaymentOptionsGroup';
	const CodeType_ShippingProfileCategoryGroup = 'ShippingProfileCategoryGroup';
	const CodeType_PaymentProfileCategoryGroup = 'PaymentProfileCategoryGroup';
	const CodeType_ReturnPolicyProfileCategoryGroup = 'ReturnPolicyProfileCategoryGroup';
	const CodeType_VINSupported = 'VINSupported';
	const CodeType_VRMSupported = 'VRMSupported';
	const CodeType_SellerProvidedTitleSupported = 'SellerProvidedTitleSupported';
	const CodeType_DepositSupported = 'DepositSupported';
	const CodeType_GlobalShippingEnabled = 'GlobalShippingEnabled';
	const CodeType_AdditionalCompatibilityEnabled = 'AdditionalCompatibilityEnabled';
	const CodeType_PickupDropOffEnabled = 'PickupDropOffEnabled';
	const CodeType_DigitalGoodDeliveryEnabled = 'DigitalGoodDeliveryEnabled';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeatureIDCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeatureIDCodeType = new FeatureIDCodeType();
?>