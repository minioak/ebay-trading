<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from March 29, 2023, 11:17 am.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 *
 *
 * For paid support options ranging from on-demand,
 * best effort to 24/7 SLAs, please contact us anytime:
 *  ebay.api@InTradeSys.com
 *
 * For more information, visit:
 *  https://sdk.intradesys.com
 */


/**
 * Enumerated type that lists all possible values that can be passed into the
 * FeatureID
 * field in a
 * GetCategoryFeatures
 * call. The
 * FeatureID
 * field is to used to check if specific listing features are enabled at the site or category level. Multiple
 * FeatureID
 * fields can be used in the request. If no
 * FeatureID
 * fields are used, the call retrieves data for all features defined within this enumerated type.
 **/
class FeatureIDCodeType extends EbatNs_EnumType
{
    const TAG = 'FeatureIDCodeType';
    const NAME = 'FeatureIDCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If this value is specified, supported site-default and category-specific listing durations values for each
     * listing type are returned in the
     * SiteDefaults.ListingDuration
     * and
     * Category.ListingDuration
     * fields of the
     * GetCategoryFeatures
     * response.
     **/
    const CodeType_ListingDurations = 'ListingDurations';

    /**
     * If this value is specified, the
     * SiteDefaults.BestOfferEnabled
     * and
     * Category.BestOfferEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site supports the Best Offer feature, and which
     * categories allow the Best Offer feature.
     **/
    const CodeType_BestOfferEnabled = 'BestOfferEnabled';

    /**
     * This value is
     * deprecated
     * , as Dutch-style auctions are no longer available on any eBay sites.
     **/
    const CodeType_DutchBINEnabled = 'DutchBINEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ShippingTermsRequired
     * and
     * Category.ShippingTermsRequired
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site, and individual categories on that site, require
     * at least one domestic shipping service option (with cost) to be specified before an item is listed.
     **/
    const CodeType_ShippingTermsRequired = 'ShippingTermsRequired';

    /**
     * This value is deprecated and should not be used.
     **/
    const CodeType_UserConsentRequired = 'UserConsentRequired';

    /**
     * If this value is specified, the
     * SiteDefaults.HomePageFeaturedEnabled
     * boolean field in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site supports the featuring of items within a special
     * area of eBay's home page. This is a listing enhancement that requires a fee, and support for this feature varies
     * by site.
     **/
    const CodeType_HomePageFeaturedEnabled = 'HomePageFeaturedEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.AdFormatEnabled
     * and
     * Category.AdFormatEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support Classified Ad
     * listings.
     **/
    const CodeType_AdFormatEnabled = 'AdFormatEnabled';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_DigitalDeliveryEnabled = 'DigitalDeliveryEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.BestOfferCounterEnabled
     * and
     * Category.BestOfferCounterEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site supports the Best Offer counter offers, and which
     * categories allow the Best Offer counter offers.
     **/
    const CodeType_BestOfferCounterEnabled = 'BestOfferCounterEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.BestOfferAutoDeclineEnabled
     * and
     * Category.BestOfferAutoDeclineEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * auto decline feature. With the Best Offer auto decline feature, the seller sets a price threshold, and all Best
     * Offers and counter offers below this price value are automatically declined without any seller action.
     **/
    const CodeType_BestOfferAutoDeclineEnabled = 'BestOfferAutoDeclineEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ProPackEnabled
     * and
     * Category.ProPackEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Pro Pack
     * listing enhancement bundle.
     **/
    const CodeType_ProPack = 'ProPack';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_BasicUpgradePack = 'BasicUpgradePack';

    /**
     * If this value is specified, the
     * SiteDefaults.ValuePackEnabled
     * and
     * Category.ValuePackEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Value Pack
     * listing enhancement bundle. The Value Pack bundle includes the Gallery Plus feature, a listing subtitle, and use
     * of a Listing Designer template.
     **/
    const CodeType_ValuePack = 'ValuePack';

    /**
     * If this value is specified, the
     * SiteDefaults.ProPackPlusEnabled
     * and
     * Category.ProPackPlusEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Pro Pack
     * Plus listing enhancement bundle. The Pro Pack Plus bundle includes the Bold Title, Border, Highlight, Featured,
     * and Gallery features for a discounted price.
     **/
    const CodeType_ProPackPlus = 'ProPackPlus';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketSpecialitySubscription
     * boolean field in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site supports Local Market listings for sellers with a
     * specialty subscription to Local Market for Vehicles.
     **/
    const CodeType_LocalMarketSpecialitySubscription = 'LocalMarketSpecialitySubscription';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketRegularSubscription
     * boolean field in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site supports Local Market listings for sellers with a
     * regular subscription to Local Market for Vehicles.
     **/
    const CodeType_LocalMarketRegularSubscription = 'LocalMarketRegularSubscription';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketPremiumSubscription
     * boolean field in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site supports Local Market listings for sellers with a
     * premium subscription to Local Market for Vehicles.
     **/
    const CodeType_LocalMarketPremiumSubscription = 'LocalMarketPremiumSubscription';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketNonSubscription
     * boolean field in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site supports Local Market listings for sellers without
     * a subscription to Local Market for Vehicles.
     **/
    const CodeType_LocalMarketNonSubscription = 'LocalMarketNonSubscription';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_ExpressEnabled = 'ExpressEnabled';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_ExpressPicturesRequired = 'ExpressPicturesRequired';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_ExpressConditionRequired = 'ExpressConditionRequired';

    /**
     * If this value is specified, the
     * SiteDefaults.SellerContactDetailsEnabled
     * and
     * Category.SellerContactDetailsEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow the seller to
     * provide contact information within a Classified Ad listing. This feature is only applicable to Classified Ad
     * listings.
     **/
    const CodeType_SellerContactDetailsEnabled = 'SellerContactDetailsEnabled';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * If this value is specified, the
     * SiteDefaults.MinimumReservePrice
     * and
     * Category.MinimumReservePrice
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories require a minimum
     * Reserve Price for auction listings. This feature is only applicable to Auction listings and only if the seller
     * decides to set a Reserve Price for the auction.
     **/
    const CodeType_MinimumReservePrice = 'MinimumReservePrice';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_TransactionConfirmationRequestEnabled = 'TransactionConfirmationRequestEnabled';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_StoreInventoryEnabled = 'StoreInventoryEnabled';

    /**
     * If this value is specified, the integer values in the
     * LocalListingDistancesRegular
     * ,
     * LocalListingDistancesSpecialty
     * , and
     * LocalListingDistancesNonSubscription
     * fields in the
     * GetCategoryFeatures
     * response will indicate the radius (in miles) of the selling area for Local Market Vehicle listings, based on
     * Local Market subscription status of the motor vehicle seller (specialty subscription, regular subscription, or no
     * subscription).
     **/
    const CodeType_LocalListingDistances = 'LocalListingDistances';

    /**
     * This enumeration value is no longer applicable, as Skype communication between eBay members is no longer
     * supported.
     **/
    const CodeType_SkypeMeTransactionalEnabled = 'SkypeMeTransactionalEnabled';

    /**
     * This enumeration value is no longer applicable, as Skype communication between eBay members is no longer
     * supported.
     **/
    const CodeType_SkypeMeNonTransactionalEnabled = 'SkypeMeNonTransactionalEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdPaymentMethodEnabled
     * and
     * Category.ClassifiedAdPaymentMethodEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not (and when) accepted payment methods are displayed to buyers for the
     * specified eBay site and for individual categories. This feature is only applicable for Classified Ad listings.
     **/
    const CodeType_ClassifiedAdPaymentMethodEnabled = 'ClassifiedAdPaymentMethodEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdShippingMethodEnabled
     * and
     * Category.ClassifiedAdShippingMethodEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the display of
     * available shipping methods to buyers. This feature is only applicable for Classified Ad listings.
     **/
    const CodeType_ClassifiedAdShippingMethodEnabled = 'ClassifiedAdShippingMethodEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdBestOfferEnabled
     * and
     * Category.ClassifiedAdBestOfferEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * feature for Classified Ad listings.
     **/
    const CodeType_ClassifiedAdBestOfferEnabled = 'ClassifiedAdBestOfferEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdCounterOfferEnabled
     * and
     * Category.ClassifiedAdCounterOfferEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support Best Offer
     * counter offers for Classified Ad listings. This feature is only applicable for Classified Ad listings.
     **/
    const CodeType_ClassifiedAdCounterOfferEnabled = 'ClassifiedAdCounterOfferEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdAutoDeclineEnabled
     * and
     * Category.ClassifiedAdAutoDeclineEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * auto decline feature for Classified Ad listings. With the Best Offer auto decline feature, the seller sets a
     * price threshold, and all Best Offers and counter offers below this price value are automatically declined without
     * any seller action. This feature is only applicable for Classified Ad listings.
     **/
    const CodeType_ClassifiedAdAutoDeclineEnabled = 'ClassifiedAdAutoDeclineEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdContactByEmailEnabled
     * and
     * Category.ClassifiedAdContactByEmailEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow the seller to
     * provide a contact email address within a Classified Ad listing. This feature is only applicable to Classified Ad
     * listings.
     **/
    const CodeType_ClassifiedAdContactByEmailEnabled = 'ClassifiedAdContactByEmailEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdContactByPhoneEnabled
     * and
     * Category.ClassifiedAdContactByPhoneEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow the seller to
     * provide a contact phone number within a Classified Ad listing. This feature is only applicable to Classified Ad
     * listings.
     **/
    const CodeType_ClassifiedAdContactByPhoneEnabled = 'ClassifiedAdContactByPhoneEnabled';

    /**
     * This value is deprecated and should not be used.
     **/
    const CodeType_SafePaymentRequired = 'SafePaymentRequired';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_MaximumBestOffersAllowed = 'MaximumBestOffersAllowed';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_ClassifiedAdMaximumBestOffersAllowed = 'ClassifiedAdMaximumBestOffersAllowed';

    /**
     * This value is
     * deprecated
     * and should no longer be used. To verify if the seller's contact information can be shared with prospective
     * buyers in the listing, use the
     * SellerContactDetailsEnabled
     * enumeration value instead.
     **/
    const CodeType_ClassifiedAdContactByEmailAvailable = 'ClassifiedAdContactByEmailAvailable';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_ClassifiedAdPayPerLeadEnabled = 'ClassifiedAdPayPerLeadEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ItemSpecificsEnabled
     * and
     * Category.ItemSpecificsEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate if the eBay site and individual categories support the use of Item Specifics in listings.
     **/
    const CodeType_ItemSpecificsEnabled = 'ItemSpecificsEnabled';

    /**
     * This value is deprecated and should not be used.
     **/
    const CodeType_PaisaPayFullEscrowEnabled = 'PaisaPayFullEscrowEnabled';

    /**
     * This value is deprecated and should no longer be used. Use
     * ISBNEnabled
     * instead.
     **/
    const CodeType_ISBNIdentifierEnabled = 'ISBNIdentifierEnabled';

    /**
     * This value is deprecated and should no longer be used. Use
     * UPCEnabled
     * instead.
     **/
    const CodeType_UPCIdentifierEnabled = 'UPCIdentifierEnabled';

    /**
     * This value is deprecated and should no longer be used. Use
     * EANEnabled
     * instead.
     **/
    const CodeType_EANIdentifierEnabled = 'EANIdentifierEnabled';

    /**
     * If this value is specified, the
     * Category.BrandMPNIdentifierEnabled
     * boolean field in the
     * GetCategoryFeatures
     * response will indicate whether or not individual categories on the specified site support the ability of a
     * seller to identify a product through a Brand/Manufacturer Part Number (MPN) combination.
     **/
    const CodeType_BrandMPNIdentifierEnabled = 'BrandMPNIdentifierEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdAutoAcceptEnabled
     * and
     * Category.ClassifiedAdAutoAcceptEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * auto accept feature for Classified Ad listings. With the Best Offer auto accept feature, the seller sets a price
     * threshold, and all Best Offers and counter offers at or above this price value are automatically accepted without
     * any seller action. This feature is only applicable for Classified Ad listings.
     **/
    const CodeType_ClassifiedAdAutoAcceptEnabled = 'ClassifiedAdAutoAcceptEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.BestOfferAutoAcceptEnabled
     * and
     * Category.BestOfferAutoAcceptEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * auto accept feature. With the Best Offer auto accept feature, the seller sets a price threshold, and all Best
     * Offers and counter offers at or above this price value are automatically accepted without any seller action.
     **/
    const CodeType_BestOfferAutoAcceptEnabled = 'BestOfferAutoAcceptEnabled';

    /**
     * If this value is specified, the
     * CrossBorderTradeNorthAmericaEnabled
     * ,
     * CrossBorderTradeGBEnabled
     * , and
     * CrossBorderTradeAustraliaEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the
     * International Site Visibility (Cross-Border Trade) feature, and on which sites. With the International Site
     * Visibility feature, the seller is able to create a listing and make this listing available on multiple eBay sites
     * (not just their domestic eBay site).
     **/
    const CodeType_CrossBorderTradeEnabled = 'CrossBorderTradeEnabled';

    /**
     * This value is deprecated and should not be used.
     **/
    const CodeType_PayPalBuyerProtectionEnabled = 'PayPalBuyerProtectionEnabled';

    /**
     * This value is deprecated and should not be used.
     **/
    const CodeType_BuyerGuaranteeEnabled = 'BuyerGuaranteeEnabled';

    /**
     * This value is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer
     * available.
     **/
    const CodeType_INEscrowWorkflowTimeline = 'INEscrowWorkflowTimeline';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_CombinedFixedPriceTreatment = 'CombinedFixedPriceTreatment';

    /**
     * If this value is specified, the
     * SiteDefaults.GalleryFeaturedDurations
     * container in the
     * GetCategoryFeatures
     * response will indicate the listing duration times that the Featured Gallery feature may be enabled for a
     * listing.
     **/
    const CodeType_GalleryFeaturedDurations = 'GalleryFeaturedDurations';

    /**
     * This value is deprecated and should not be used.
     **/
    const CodeType_PayPalRequired = 'PayPalRequired';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProAdFormatEnabled
     * and
     * Category.eBayMotorsProAdFormatEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow motor vehicles to
     * be sold through Classified Ads. This value is only applicable for eBay Motors Pro users.
     **/
    const CodeType_eBayMotorsProAdFormatEnabled = 'eBayMotorsProAdFormatEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProContactByPhoneEnabled
     * and
     * Category.eBayMotorsProContactByPhoneEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay Motors Pro
     * users to provide contact phone numbers within a Motor Vehicles Classified Ad listing. The
     * Category.eBayMotorsProPhoneCount
     * field indicates how many contact phone numbers are supported in each listing. This feature is only applicable to
     * Motor Vehicles Classified Ad listings.
     **/
    const CodeType_eBayMotorsProContactByPhoneEnabled = 'eBayMotorsProContactByPhoneEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProContactByAddressEnabled
     * and
     * Category.eBayMotorsProContactByAddressEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay Motors Pro
     * users to provide contact street addresses within a Motor Vehicles Classified Ad listing. The
     * Category.eBayMotorsProStreetCount
     * field indicates how many contact street addresses are supported in each listing. This feature is only applicable
     * to Motor Vehicles Classified Ad listings.
     **/
    const CodeType_eBayMotorsProContactByAddressEnabled = 'eBayMotorsProContactByAddressEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProCompanyNameEnabled
     * and
     * Category.eBayMotorsProCompanyNameEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay Motors Pro
     * users to provide a company name within a Motor Vehicles Classified Ad listing. This feature is only applicable to
     * Motor Vehicles Classified Ad listings.
     **/
    const CodeType_eBayMotorsProCompanyNameEnabled = 'eBayMotorsProCompanyNameEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProContactByEmailEnabled
     * and
     * Category.eBayMotorsProContactByEmailEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay Motors Pro
     * users to provide a contact email address within a Motor Vehicles Classified Ad listing. This feature is only
     * applicable to Motor Vehicles Classified Ad listings.
     **/
    const CodeType_eBayMotorsProContactByEmailEnabled = 'eBayMotorsProContactByEmailEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProBestOfferEnabled
     * and
     * Category.eBayMotorsProBestOfferEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * feature for Motor Vehicles Classified Ad listings.
     **/
    const CodeType_eBayMotorsProBestOfferEnabled = 'eBayMotorsProBestOfferEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProAutoAcceptEnabled
     * and
     * Category.eBayMotorsProAutoAcceptEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * auto accept feature for Motor Vehicles Classified Ad listings. With the Best Offer auto accept feature, the
     * seller sets a price threshold, and all Best Offers and counter offers at or above this price value are
     * automatically accepted without any seller action. This feature is only applicable for Motor Vehicles Classified
     * Ad listings, and is only available to eBay Motors Pro users.
     **/
    const CodeType_eBayMotorsProAutoAcceptEnabled = 'eBayMotorsProAutoAcceptEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProAutoDeclineEnabled
     * and
     * Category.eBayMotorsProAutoDeclineEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * auto decline feature for Motor Vehicles Classified Ad listings. With the Best Offer auto decline feature, the
     * seller sets a price threshold, and all Best Offers and counter offers below this price value are automatically
     * declined without any seller action. This feature is only applicable for Motor Vehicles Classified Ad listings,
     * and is only available to eBay Motors Pro users.
     **/
    const CodeType_eBayMotorsProAutoDeclineEnabled = 'eBayMotorsProAutoDeclineEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProPaymentMethodCheckOutEnabled
     * and
     * Category.eBayMotorsProPaymentMethodCheckOutEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not (and when) accepted payment methods are displayed to buyers for the
     * specified eBay site and for individual categories. This feature is only applicable for Motor Vehicles Classified
     * Ad listings, and is only available to eBay Motors Pro users.
     **/
    const CodeType_eBayMotorsProPaymentMethodCheckOutEnabled = 'eBayMotorsProPaymentMethodCheckOutEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProShippingMethodEnabled
     * and
     * Category.eBayMotorsProShippingMethodEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the display of
     * available shipping methods to buyers. This feature is only applicable for Motor Vehicles Classified Ad listings,
     * and is only available to eBay Motors Pro users.
     **/
    const CodeType_eBayMotorsProShippingMethodEnabled = 'eBayMotorsProShippingMethodEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProCounterOfferEnabled
     * and
     * Category.eBayMotorsProCounterOfferEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support Best Offer
     * counter offers for Motor Vehicles Classified Ad listings. This feature is only applicable for Motor Vehicles
     * Classified Ad listings, and is only available to eBay Motors Pro users.
     **/
    const CodeType_eBayMotorsProCounterOfferEnabled = 'eBayMotorsProCounterOfferEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.eBayMotorsProSellerContactDetailsEnabled
     * and
     * Category.eBayMotorsProSellerContactDetailsEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow the seller to
     * provide contact information within a Motor Vehicles Classified Ad listing. This feature is only applicable for
     * Motor Vehicles Classified Ad listings, and is only available to eBay Motors Pro users.
     **/
    const CodeType_eBayMotorsProSellerContactDetailsEnabled = 'eBayMotorsProSellerContactDetailsEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketAdFormatEnabled
     * and
     * Category.LocalMarketAdFormatEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow motor vehicles to
     * be sold through Local Market Classified Ads. Motors Local Market listings are only available to eBay sellers who
     * are Licensed Vehicle Dealers on eBay.
     **/
    const CodeType_LocalMarketAdFormatEnabled = 'LocalMarketAdFormatEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketContactByPhoneEnabled
     * and
     * Category.LocalMarketContactByPhoneEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay Licensed
     * Vehicle Dealers to provide contact phone numbers within a Motors Local Market listing. The
     * Category.LocalMarketPhoneCount
     * field indicates how many contact phone numbers are supported in each listing. This feature is only applicable to
     * Motors Local Market listings.
     **/
    const CodeType_LocalMarketContactByPhoneEnabled = 'LocalMarketContactByPhoneEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketContactByAddressEnabled
     * and
     * Category.LocalMarketContactByAddressEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay Licensed
     * Vehicle Dealers to provide contact street addresses within a Motors Local Market listing. This feature is only
     * applicable to Motors Local Market listings.
     **/
    const CodeType_LocalMarketContactByAddressEnabled = 'LocalMarketContactByAddressEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketCompanyNameEnabled
     * and
     * Category.LocalMarketCompanyNameEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay Licensed
     * Vehicle Dealers to provide a company name within a Motors Local Market listing. This feature is only applicable
     * to Motors Local Market listings.
     **/
    const CodeType_LocalMarketCompanyNameEnabled = 'LocalMarketCompanyNameEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketContactByEmailEnabled
     * and
     * Category.LocalMarketContactByEmailEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay Licensed
     * Vehicle Dealers to provide contact email addresses within a Motors Local Market listing. This feature is only
     * applicable to Motors Local Market listings.
     **/
    const CodeType_LocalMarketContactByEmailEnabled = 'LocalMarketContactByEmailEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketBestOfferEnabled
     * and
     * Category.LocalMarketBestOfferEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * feature for Motors Local Market listings.
     **/
    const CodeType_LocalMarketBestOfferEnabled = 'LocalMarketBestOfferEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketAutoAcceptEnabled
     * and
     * Category.LocalMarketAutoAcceptEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * auto accept feature for Motors Local Market listings. With the Best Offer auto accept feature, the seller sets a
     * price threshold, and all Best Offers and counter offers at or above this price value are automatically accepted
     * without any seller action. This feature is only applicable for Motors Local Market listings, and is only
     * available to eBay Licensed Vehicle Dealers.
     **/
    const CodeType_LocalMarketAutoAcceptEnabled = 'LocalMarketAutoAcceptEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketAutoDeclineEnabled
     * and
     * Category.LocalMarketAutoDeclineEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Best Offer
     * auto decline feature for Motors Local Market listings. With the Best Offer auto decline feature, the seller sets
     * a price threshold, and all Best Offers and counter offers below this price value are automatically declined
     * without any seller action. This feature is only applicable for Motors Local Market listings, and is only
     * available to eBay Licensed Vehicle Dealers.
     **/
    const CodeType_LocalMarketAutoDeclineEnabled = 'LocalMarketAutoDeclineEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketPaymentMethodCheckOutEnabled
     * and
     * Category.LocalMarketPaymentMethodCheckOutEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not (and when) accepted payment methods are displayed to buyers for the
     * specified eBay site and for individual categories. This feature is only applicable for Motors Local Market
     * listings, and is only available to eBay Licensed Vehicle Dealers.
     **/
    const CodeType_LocalMarketPaymentMethodCheckOutEnabled = 'LocalMarketPaymentMethodCheckOutEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketShippingMethodEnabled
     * and
     * Category.LocalMarketShippingMethodEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the display of
     * available shipping methods to buyers. This feature is only applicable for Motors Local Market listings, and is
     * only available to eBay Licensed Vehicle Dealers.
     **/
    const CodeType_LocalMarketShippingMethodEnabled = 'LocalMarketShippingMethodEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketCounterOfferEnabled
     * and
     * Category.LocalMarketCounterOfferEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support Best Offer
     * counter offers for Motors Local Market listings. This feature is only applicable for Motors Local Market
     * listings, and is only available to eBay Licensed Vehicle Dealers.
     **/
    const CodeType_LocalMarketCounterOfferEnabled = 'LocalMarketCounterOfferEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.LocalMarketSellerContactDetailsEnabled
     * and
     * Category.LocalMarketSellerContactDetailsEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow the seller to
     * provide contact information within a Motors Local Market listing. This feature is only applicable for Motors
     * Local Market listings, and is only available to eBay Licensed Vehicle Dealers.
     **/
    const CodeType_LocalMarketSellerContactDetailsEnabled = 'LocalMarketSellerContactDetailsEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdContactByAddressEnabled
     * and
     * Category.ClassifiedAdContactByAddressEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow sellers to provide
     * contact street addresses within a Classified Ad listing. The
     * Category.ClassifiedAdStreetCount
     * field indicates how many street addresses are allowed in each listing. This feature is only applicable to
     * Classified Ad listings.
     **/
    const CodeType_ClassifiedAdContactByAddressEnabled = 'ClassifiedAdContactByAddressEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ClassifiedAdCompanyNameEnabled
     * and
     * Category.ClassifiedAdCompanyNameEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow sellers to provide
     * a company name within a Classified Ad listing. This feature is only applicable to Classified Ad listings.
     **/
    const CodeType_ClassifiedAdCompanyNameEnabled = 'ClassifiedAdCompanyNameEnabled';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_SpecialitySubscription = 'SpecialitySubscription';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_RegularSubscription = 'RegularSubscription';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_PremiumSubscription = 'PremiumSubscription';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_NonSubscription = 'NonSubscription';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_IntangibleEnabled = 'IntangibleEnabled';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_PayPalRequiredForStoreOwner = 'PayPalRequiredForStoreOwner';

    /**
     * If this value is specified, the
     * SiteDefaults.ReviseQuantityAllowed
     * and
     * Category.ReviseQuantityAllowed
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow sellers to revise
     * quantity in a multi-quantity, fixed-price listing while the listing is in a semi- or fully-restricted mode (such
     * as when the listing already has sales or when the listing is scheduled to end within 12 hours). This value is
     * only applicable to fixed-price listings.
     **/
    const CodeType_ReviseQuantityAllowed = 'ReviseQuantityAllowed';

    /**
     * If this value is specified, the
     * SiteDefaults.RevisePriceAllowed
     * and
     * Category.RevisePriceAllowed
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow sellers to revise
     * the price in a fixed-price listing while the listing is in a semi- or fully-restricted mode (such as when the
     * listing already has sales or when the listing is scheduled to end within 12 hours). This value is only applicable
     * to fixed-price listings.
     **/
    const CodeType_RevisePriceAllowed = 'RevisePriceAllowed';

    /**
     * If this value is specified, the
     * SiteDefaults.StoreOwnerExtendedListingDurationsEnabled
     * and
     * Category.StoreOwnerExtendedListingDurationsEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay Store sellers
     * to create fixed-price listings with longer listing durations than sellers without eBay Stores. This value is only
     * applicable to fixed-price listings.
     **/
    const CodeType_StoreOwnerExtendedListingDurationsEnabled = 'StoreOwnerExtendedListingDurationsEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.StoreOwnerExtendedListingDurations
     * container in the
     * GetCategoryFeatures
     * response will indicate the extended listing duration times that eBay Store sellers may set when creating a
     * fixed-price listing.  This value is only applicable to fixed-price listings. The site and category must support
     * extended listing durations (
     * StoreOwnerExtendedListingDurationsEnabled
     * =true).
     **/
    const CodeType_StoreOwnerExtendedListingDurations = 'StoreOwnerExtendedListingDurations';

    /**
     * If this value is specified, the
     * SiteDefaults.ReturnPolicyEnabled
     * and
     * Category.ReturnPolicyEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories allow eBay sellers to
     * create a return policy for the listing.
     **/
    const CodeType_ReturnPolicyEnabled = 'ReturnPolicyEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.HandlingTimeEnabled
     * and
     * Category.HandlingTimeEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories require eBay sellers to
     * set a handling time for products sold within the listing. The handling time is the maximum number of business
     * days the seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's
     * handling time does not include the shipping time (the carrier's transit time).
     **/
    const CodeType_HandlingTimeEnabled = 'HandlingTimeEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.PaymentMethod
     * and
     * SiteDefaults.PaymentMethod
     * fields in the
     * GetCategoryFeatures
     * response will indicate the accepted payment methods at the eBay site level and within the individual categories.
     **/
    const CodeType_PaymentMethods = 'PaymentMethods';

    /**
     * If this value is specified, the
     * Category.MaxFlatShippingCost
     * fields in the
     * GetCategoryFeatures
     * response will indicate the maximum flat-rate shipping costs that the seller may charge the buyer to ship one
     * item domestically. At least one available shipping service option has to be under this value. Handling cost (if
     * any) goes toward this maximum cost threshold.
     **/
    const CodeType_MaxFlatShippingCost = 'MaxFlatShippingCost';

    /**
     * If this value is specified, the
     * SiteDefaults.MaxFlatShippingCostCBTExempt
     * boolean field in the
     * GetCategoryFeatures
     * response will indicate whether or not sellers, who sell items to domestic buyers, but are shipping the item from
     * another country, are exempt from the
     * MaxFlatShippingCost
     * threshold.
     **/
    const CodeType_MaxFlatShippingCostCBTExempt = 'MaxFlatShippingCostCBTExempt';

    /**
     * If this value is specified, the
     * Category.Group1MaxFlatShippingCost
     * fields in the
     * GetCategoryFeatures
     * response will indicate the maximum flat-rate shipping costs that the seller may charge the buyer to ship one
     * item domestically using a Group 1 shipping service. At least one available Group 1 shipping service option has to
     * be under this value. Handling cost (if any) goes toward this maximum cost threshold.
     **/
    const CodeType_Group1MaxFlatShippingCost = 'Group1MaxFlatShippingCost';

    /**
     * If this value is specified, the
     * Category.Group2MaxFlatShippingCost
     * fields in the
     * GetCategoryFeatures
     * response will indicate the maximum flat-rate shipping costs that the seller may charge the buyer to ship one
     * item domestically using a Group 2 shipping service. At least one available Group 2 shipping service option has to
     * be under this value. Handling cost (if any) goes toward this maximum cost threshold.
     **/
    const CodeType_Group2MaxFlatShippingCost = 'Group2MaxFlatShippingCost';

    /**
     * If this value is specified, the
     * Category.Group3MaxFlatShippingCost
     * fields in the
     * GetCategoryFeatures
     * response will indicate the maximum flat-rate shipping costs that the seller may charge the buyer to ship one
     * item domestically using a Group 3 shipping service. At least one available Group 3 shipping service option has to
     * be under this value. Handling cost (if any) goes toward this maximum cost threshold.
     **/
    const CodeType_Group3MaxFlatShippingCost = 'Group3MaxFlatShippingCost';

    /**
     * If this value is specified, the
     * SiteDefaults.VariationsEnabled
     * and
     * Category.VariationsEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support multi-variation
     * listings. Variations are items within the same listing that are logically the same product, but differ slightly
     * in size, color, or other aspect.
     **/
    const CodeType_VariationsEnabled = 'VariationsEnabled';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_AttributeConversionEnabled = 'AttributeConversionEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.FreeGalleryPlusEnabled
     * and
     * Category.FreeGalleryPlusEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support a free Gallery
     * Plus upgrade. The Gallery Plus feature includes the picture zoom-in option (when you hover the mouse over the
     * picture) and the ability to enlarge the photo by clicking a link.
     **/
    const CodeType_FreeGalleryPlusEnabled = 'FreeGalleryPlusEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.FreePicturePackEnabled
     * and
     * Category.FreePicturePackEnabled
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support a free Picture
     * Pack upgrade. The Picture Pack feature is only available for eBay Motors vehicle listings. The Picture Pack
     * feature includes up to 12 supersized photos with the zoom-in feature enabled for each one.
     **/
    const CodeType_FreePicturePackEnabled = 'FreePicturePackEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.ItemCompatibilityEnabled
     * and
     * Category.ItemCompatibilityEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the Parts
     * Compatibility feature, and if so, the mode of compatibility that is used (by application or by specification).
     * The Parts Compatibility feature allows sellers to list their motor vehicles parts and accessories items with
     * parts compatibility name-value pairs specific to motor vehicles, and allows potential buyers to search for these
     * items using parts compatibility search fields.
     **/
    const CodeType_CompatibilityEnabled = 'CompatibilityEnabled';

    /**
     * If this value is specified, the
     * Category.MinCompatibleApplications
     * fields in the
     * GetCategoryFeatures
     * response will indicate the minimum number of compatible applications that must be specified when listing a motor
     * vehicle part or accessory in the given category.
     **/
    const CodeType_MinCompatibleApplications = 'MinCompatibleApplications';

    /**
     * If this value is specified, the
     * Category.MaxCompatibleApplications
     * fields in the
     * GetCategoryFeatures
     * response will indicate the maximum number of compatible applications that can be specified when listing a motor
     * vehicle part or accessory in the given category.
     **/
    const CodeType_MaxCompatibleApplications = 'MaxCompatibleApplications';

    /**
     * If this value is specified, the
     * Category.ConditionEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate which individual categories support (and even require) the use of
     * ConditionID
     * values to specify the condition of an item within a listing.
     **/
    const CodeType_ConditionEnabled = 'ConditionEnabled';

    /**
     * If this value is specified, the
     * Category.Condition
     * containers in the
     * GetCategoryFeatures
     * response will include Condition ID values and item conditions like 'Very Good', 'Acceptable', 'Used', etc. for
     * all categories that support the use of Condition ID values.
     **/
    const CodeType_ConditionValues = 'ConditionValues';

    /**
     * If this value is specified, the
     * Category.ValueCategory
     * boolean fields in the
     * GetCategoryFeatures
     * response will indicate the categories that are considered by eBay to be 'Value Categories'. 'Value Categories'
     * are generally categories where buyers can find good deals on items. If sellers decide to list within a value
     * category, only this category may be used, and a secondary category is not supported.
     **/
    const CodeType_ValueCategory = 'ValueCategory';

    /**
     * If this value is specified, the
     * Category.ProductCreationEnabled
     * field in the
     * GetCategoryFeatures
     * response will indicate which categories support the use of an eBay catalog product when creating/revising
     * listings. When a seller associates an eBay catalog product when creating/revising a listing, the listing will
     * automatically be created using the eBay catalog product's image(s), product aspects, description, and title. This
     * field will not be returned if one or more
     * FeatureID
     * fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed
     * into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     **/
    const CodeType_ProductCreationEnabled = 'ProductCreationEnabled';

    /**
     * If this value is specified, the
     * Category.EANEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not items listed in the corresponding category may utilize EANs to identify a
     * product. A value of <code>Disabled</code> indicates that EANs cannot be used for the category, a value of
     * <code>Enabled</code> indicates that EANs can be used for the category, and a value of <code>Required</code>
     * indicates that an EAN is required when listing a product in this category.
     **/
    const CodeType_EANEnabled = 'EANEnabled';

    /**
     * If this value is specified, the
     * Category.ISBNEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not items listed in the corresponding category may utilize ISBNs to identify a
     * product. A value of <code>Disabled</code> indicates that ISBNs cannot be used for the category, a value of
     * <code>Enabled</code> indicates that ISBNs can be used for the category, and a value of <code>Required</code>
     * indicates that an ISBN is required when listing a product in this category.
     **/
    const CodeType_ISBNEnabled = 'ISBNEnabled';

    /**
     * If this value is specified, the
     * Category.UPCEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not items listed in the corresponding category may utilize UPCs to identify a
     * product. A value of <code>Disabled</code> indicates that UPCs cannot be used for the category, a value of
     * <code>Enabled</code> indicates that UPCs can be used for the category, and a value of <code>Required</code>
     * indicates that a UPC is required when listing a product in this category.
     **/
    const CodeType_UPCEnabled = 'UPCEnabled';

    /**
     * If this value is specified, the
     * Category.MaxGranularFitmentCount
     * fields in the
     * GetCategoryFeatures
     * response will indicate how many Parts Compatibility name-value pairs may be passed in for each motor vehicle
     * aspect (Year, Make, and Model) in a motor vehicle parts and accessory listing. granularity. This field is only
     * applicable to motor vehicle parts and accessory listings.
     **/
    const CodeType_MaxGranularFitmentCount = 'MaxGranularFitmentCount';

    /**
     * If this value is specified, the
     * Category.CompatibleVehicleType
     * fields in the
     * GetCategoryFeatures
     * response will indicate the type of vehicle that parts compatibility name-value pairs in a listing will be
     * referring to, such as 'cars and trucks', 'all-terrain vehicles (ATV)', 'boats', and 'motorcycles'. This field is
     * only applicable to motor vehicle parts and accessory listings.
     **/
    const CodeType_CompatibleVehicleType = 'CompatibleVehicleType';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_PaymentOptionsGroup = 'PaymentOptionsGroup';

    /**
     * If this value is specified, the
     * Category.ShippingProfileCategoryGroup
     * fields in the
     * GetCategoryFeatures
     * response will indicate which shipping business policy category group that each category will inherit as the
     * default category group. Currently, there are only two Business Policies category groups - 'MOTORS_VEHICLE' covers
     * all motor-vehicle related categories, and 'ALL' covers all other categories.
     **/
    const CodeType_ShippingProfileCategoryGroup = 'ShippingProfileCategoryGroup';

    /**
     * If this value is specified, the
     * Category.PaymentProfileCategoryGroup
     * fields in the
     * GetCategoryFeatures
     * response will indicate which payment business policy category group that each category will inherit as the
     * default category group. Currently, there are only two Business Policies category groups - 'MOTORS_VEHICLE' covers
     * all motor-vehicle related categories, and 'ALL' covers all other categories.
     **/
    const CodeType_PaymentProfileCategoryGroup = 'PaymentProfileCategoryGroup';

    /**
     * If this value is specified, the
     * Category.ReturnPolicyProfileCategoryGroup
     * fields in the
     * GetCategoryFeatures
     * response will indicate which return policy business policy category group that each category will inherit as the
     * default category group. Currently, there are only two Business Policies category groups - 'MOTORS_VEHICLE' covers
     * all motor-vehicle related categories, and 'ALL' covers all other categories.
     **/
    const CodeType_ReturnPolicyProfileCategoryGroup = 'ReturnPolicyProfileCategoryGroup';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_VINSupported = 'VINSupported';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_VRMSupported = 'VRMSupported';

    /**
     * If this value is specified, the
     * SiteDefaults.SellerProvidedTitleSupported
     * and
     * Category.SellerProvidedTitleSupported
     * fields in the
     * GetCategoryFeatures
     * response will indicate if the eBay site and individual categories support the use of a seller-provided title for
     * a motor vehicle listing on the US or Canada Motors marketplaces. A seller-provided title is a descriptive title,
     * given by the seller, that appears below eBay's pre-filled listing title for the motor vehicle.
     **/
    const CodeType_SellerProvidedTitleSupported = 'SellerProvidedTitleSupported';

    /**
     * This value is
     * deprecated
     * and should no longer be used.
     **/
    const CodeType_DepositSupported = 'DepositSupported';

    /**
     * If this value is specified, the
     * SiteDefaults.GlobalShippingEnabled
     * and
     * Category.GlobalShippingEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate if the eBay site and individual categories support the Global Shipping Program (GSP) as a
     * means for shipping items internationally. The GSP feature is only applicable to shipping items internationally.
     **/
    const CodeType_GlobalShippingEnabled = 'GlobalShippingEnabled';

    /**
     * If this value is specified, the
     * SiteDefaults.AdditionalCompatibilityEnabled
     * and
     * Category.AdditionalCompatibilityEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate whether or not the specified eBay site and individual categories support the
     * second-generation Parts Compatibility feature where parts-compatibility name-value pairs can be passed in for
     * boats, motorcycles, and other vehicles instead of just cars and trucks. This feature is only applicable to motor
     * vehicle parts and accessory listings.
     **/
    const CodeType_AdditionalCompatibilityEnabled = 'AdditionalCompatibilityEnabled';

    /**
     * If this value is specified, the
     * Category.PickupDropOffEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate that items listed in the corresponding category may be enabled with the 'Click and
     * Collect' feature. With the 'Click and Collect' feature, a buyer can purchase certain items on the eBay site and
     * collect them at a local store. Buyers are notified by eBay once their items are available. A <code>false</code>
     * value in this field indicates that items listed in the category are not eligible for the 'Click and Collect'
     * feature.
     * 
     * The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay
     * Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     **/
    const CodeType_PickupDropOffEnabled = 'PickupDropOffEnabled';

    /**
     * If this value is specified, the
     * Category.DigitalGoodDeliveryEnabled
     * fields in the
     * GetCategoryFeatures
     * response will indicate that digital gift cards can be listed in the corresponding category. A <code>false</code>
     * value in this field indicates that digital gift cards may not be listed in the category.
     * 
     * Digital gift cards are currently only supported on the US site. There are some restrictions when it comes
     * to selling gift cards, including the following:
     * 
     * <ul>
     * <li>Each seller can only have one gift card listing at any given time;</li>
     * <li>The maximum dollar value of the gift card may not exceed 500.00; and</li>
     * <li>prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed.</li>
     * </ul>
     * For more information on eBay's Gift Card policy, see the <a
     * href="http://pages.ebay.com/help/policies/gift.html">Gift cards policy</a> Help page.
     **/
    const CodeType_DigitalGoodDeliveryEnabled = 'DigitalGoodDeliveryEnabled';

    /**
     * This value is used to see if an eBay Product ID (e.g. ePID) can be used in an Add/Revise/Relist API call to
     * identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory is supported.
     * ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites.
     * 
     * For more information on using an ePID to identify a compatible motorcycle or scooter through an
     * Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     * 
     * https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a>
     * container.
     **/
    const CodeType_EpidSupported = 'EpidSupported';

    /**
     * This value is used to see if a K Type vehicle number in an Add/Revise/Relist API call to identify which cars
     * and/or trucks are compatible with a motor vehicle part or accessory is supported. K type vehicle numbers can only
     * be used to identify cars and trucks on the Germany site.
     * 
     * For more information on using a K Type vehicle number to identify a compatible car or truck through
     * an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     * 
     * https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a>
     * container.
     **/
    const CodeType_KTypeSupported = 'KTypeSupported';

    /**
     * This value is deprecated and should not be used.
     **/
    const CodeType_ProductRequiredEnabled = 'ProductRequiredEnabled';

    /**
     * Use this ID to return the values you can specify for whether or not a seller accepts domestic returns.
     * 
     * The values returned in this field are pertinent only if
     * ReturnPolicyEnabled
     * in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * 
     * <span class="tablenote">
     * Note:
     * In May 2018, eBay added the ability to create a separate international return policy for items that are shipped
     * to international customers. If a seller does not add a separate international return policy, the settings in the
     * domestic return policy will be used instead. For more information on setting separate domestic and international
     * return policies, see the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see
     * the
     * InternationalReturnsAcceptedValues
     * field.</span>
     **/
    const CodeType_DomesticReturnsAcceptedValues = 'DomesticReturnsAcceptedValues';

    /**
     * Use this ID to return the values you can specify for whether or not a seller accepts international returns.
     * 
     * The values returned in this field are pertinent only if
     * ReturnPolicyEnabled
     * in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * 
     * <span class="tablenote">
     * Note:
     * In May 2018, eBay added the ability to create a separate international return policy for items that are shipped
     * to international customers. If a seller does not add a separate international return policy, the settings in the
     * domestic return policy will be used instead. For more information on setting separate domestic and international
     * return policies, see the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see
     * the
     * InternationalReturnsAcceptedValues
     * field.</span>
     **/
    const CodeType_InternationalReturnsAcceptedValues = 'InternationalReturnsAcceptedValues';

    /**
     * Use this ID to return the values you can specify for the return duration for domestic returns.
     * 
     * The values returned in this field are pertinent only if
     * ReturnPolicyEnabled
     * in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * 
     * <span class="tablenote">
     * Note:
     * In May 2018, eBay added the ability to create a separate international return policy for items that are shipped
     * to international customers. If a seller does not add a separate international return policy, the settings in the
     * domestic return policy will be used instead. For more information on setting separate domestic and international
     * return policies, see the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see
     * the
     * InternationalReturnsAcceptedValues
     * field.</span>
     **/
    const CodeType_DomesticReturnsDurationValues = 'DomesticReturnsDurationValues';

    /**
     * Use this ID to return the values you can specify for the return duration for international returns.
     * 
     * The values returned in this field are pertinent only if
     * ReturnPolicyEnabled
     * in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * 
     * <span class="tablenote">
     * Note:
     * In May 2018, eBay added the ability to create a separate international return policy for items that are shipped
     * to international customers. If a seller does not add a separate international return policy, the settings in the
     * domestic return policy will be used instead. For more information on setting separate domestic and international
     * return policies, see the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see
     * the
     * InternationalReturnsAcceptedValues
     * field.</span>
     **/
    const CodeType_InternationalReturnsDurationValues = 'InternationalReturnsDurationValues';

    /**
     * Use this ID to return the values you can specify for who pays any return shipping costs for domestic returns.
     * 
     * The values returned in this field are pertinent only if
     * ReturnPolicyEnabled
     * in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * 
     * <span class="tablenote">
     * Note:
     * In May 2018, eBay added the ability to create a separate international return policy for items that are shipped
     * to international customers. If a seller does not add a separate international return policy, the settings in the
     * domestic return policy will be used instead. For more information on setting separate domestic and international
     * return policies, see the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see
     * the
     * InternationalReturnsAcceptedValues
     * field.</span>
     **/
    const CodeType_DomesticReturnsShipmentPayeeValues = 'DomesticReturnsShipmentPayeeValues';

    /**
     * Use this ID to return the values you can specify for who pays any return shipping costs for international
     * returns.
     * 
     * The values returned in this field are pertinent only if
     * ReturnPolicyEnabled
     * in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * 
     * <span class="tablenote">
     * Note:
     * In May 2018, eBay added the ability to create a separate international return policy for items that are shipped
     * to international customers. If a seller does not add a separate international return policy, the settings in the
     * domestic return policy will be used instead. For more information on setting separate domestic and international
     * return policies, see the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see
     * the
     * InternationalReturnsAcceptedValues
     * field.</span>
     **/
    const CodeType_InternationalReturnsShipmentPayeeValues = 'InternationalReturnsShipmentPayeeValues';

    /**
     * In US, sellers can offer item replacement in addition to offering a money-back refund for domestic returns. Use
     * this ID to return whether or not the seller can offer <code>MoneyBackorReplacement</code> for the specified
     * category.
     * 
     * The values returned in this field are pertinent only if
     * ReturnPolicyEnabled
     * in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * 
     * <span class="tablenote">
     * Note:
     * In May 2018, eBay added the ability to create a separate international return policy for items that are shipped
     * to international customers. If a seller does not add a separate international return policy, the settings in the
     * domestic return policy will be used instead. For more information on setting separate domestic and international
     * return policies, see the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see
     * the
     * InternationalReturnsAcceptedValues
     * field.</span>
     **/
    const CodeType_DomesticRefundMethodValues = 'DomesticRefundMethodValues';

    /**
     * In US, sellers can offer item replacement in addition to offering a money-back refund for international returns.
     * Use this ID to return whether or not the seller can offer <code>MoneyBackorReplacement</code> for the specified
     * category.
     * 
     * The values returned in this field are pertinent only if
     * ReturnPolicyEnabled
     * in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * 
     * <span class="tablenote">
     * Note:
     * In May 2018, eBay added the ability to create a separate international return policy for items that are shipped
     * to international customers. If a seller does not add a separate international return policy, the settings in the
     * domestic return policy will be used instead. For more information on setting separate domestic and international
     * return policies, see the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see
     * the
     * InternationalReturnsAcceptedValues
     * field.</span>
     **/
    const CodeType_InternationalRefundMethodValues = 'InternationalRefundMethodValues';

    /**
     * In some EU countries, sellers are legally required to describe the return policy they offer. The value returned
     * by this field indicates if sellers can provide such description within the given marketplace and category.
     * 
     * The values returned in this field are pertinent only if
     * ReturnPolicyEnabled
     * in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     **/
    const CodeType_ReturnPolicyDescriptionEnabled = 'ReturnPolicyDescriptionEnabled';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return FeatureIDCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FeatureIDCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isListingDurations()
    {
        return $this->_value === self::CodeType_ListingDurations;
    }

    /**
     * @return bool
     */
    public function isBestOfferEnabled()
    {
        return $this->_value === self::CodeType_BestOfferEnabled;
    }

    /**
     * @return bool
     */
    public function isDutchBINEnabled()
    {
        return $this->_value === self::CodeType_DutchBINEnabled;
    }

    /**
     * @return bool
     */
    public function isShippingTermsRequired()
    {
        return $this->_value === self::CodeType_ShippingTermsRequired;
    }

    /**
     * @return bool
     */
    public function isUserConsentRequired()
    {
        return $this->_value === self::CodeType_UserConsentRequired;
    }

    /**
     * @return bool
     */
    public function isHomePageFeaturedEnabled()
    {
        return $this->_value === self::CodeType_HomePageFeaturedEnabled;
    }

    /**
     * @return bool
     */
    public function isAdFormatEnabled()
    {
        return $this->_value === self::CodeType_AdFormatEnabled;
    }

    /**
     * @return bool
     */
    public function isDigitalDeliveryEnabled()
    {
        return $this->_value === self::CodeType_DigitalDeliveryEnabled;
    }

    /**
     * @return bool
     */
    public function isBestOfferCounterEnabled()
    {
        return $this->_value === self::CodeType_BestOfferCounterEnabled;
    }

    /**
     * @return bool
     */
    public function isBestOfferAutoDeclineEnabled()
    {
        return $this->_value === self::CodeType_BestOfferAutoDeclineEnabled;
    }

    /**
     * @return bool
     */
    public function isProPack()
    {
        return $this->_value === self::CodeType_ProPack;
    }

    /**
     * @return bool
     */
    public function isBasicUpgradePack()
    {
        return $this->_value === self::CodeType_BasicUpgradePack;
    }

    /**
     * @return bool
     */
    public function isValuePack()
    {
        return $this->_value === self::CodeType_ValuePack;
    }

    /**
     * @return bool
     */
    public function isProPackPlus()
    {
        return $this->_value === self::CodeType_ProPackPlus;
    }

    /**
     * @return bool
     */
    public function isLocalMarketSpecialitySubscription()
    {
        return $this->_value === self::CodeType_LocalMarketSpecialitySubscription;
    }

    /**
     * @return bool
     */
    public function isLocalMarketRegularSubscription()
    {
        return $this->_value === self::CodeType_LocalMarketRegularSubscription;
    }

    /**
     * @return bool
     */
    public function isLocalMarketPremiumSubscription()
    {
        return $this->_value === self::CodeType_LocalMarketPremiumSubscription;
    }

    /**
     * @return bool
     */
    public function isLocalMarketNonSubscription()
    {
        return $this->_value === self::CodeType_LocalMarketNonSubscription;
    }

    /**
     * @return bool
     */
    public function isExpressEnabled()
    {
        return $this->_value === self::CodeType_ExpressEnabled;
    }

    /**
     * @return bool
     */
    public function isExpressPicturesRequired()
    {
        return $this->_value === self::CodeType_ExpressPicturesRequired;
    }

    /**
     * @return bool
     */
    public function isExpressConditionRequired()
    {
        return $this->_value === self::CodeType_ExpressConditionRequired;
    }

    /**
     * @return bool
     */
    public function isSellerContactDetailsEnabled()
    {
        return $this->_value === self::CodeType_SellerContactDetailsEnabled;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isMinimumReservePrice()
    {
        return $this->_value === self::CodeType_MinimumReservePrice;
    }

    /**
     * @return bool
     */
    public function isTransactionConfirmationRequestEnabled()
    {
        return $this->_value === self::CodeType_TransactionConfirmationRequestEnabled;
    }

    /**
     * @return bool
     */
    public function isStoreInventoryEnabled()
    {
        return $this->_value === self::CodeType_StoreInventoryEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalListingDistances()
    {
        return $this->_value === self::CodeType_LocalListingDistances;
    }

    /**
     * @return bool
     */
    public function isSkypeMeTransactionalEnabled()
    {
        return $this->_value === self::CodeType_SkypeMeTransactionalEnabled;
    }

    /**
     * @return bool
     */
    public function isSkypeMeNonTransactionalEnabled()
    {
        return $this->_value === self::CodeType_SkypeMeNonTransactionalEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdPaymentMethodEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdPaymentMethodEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdShippingMethodEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdShippingMethodEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdBestOfferEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdBestOfferEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdCounterOfferEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdCounterOfferEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdAutoDeclineEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdAutoDeclineEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdContactByEmailEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdContactByEmailEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdContactByPhoneEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdContactByPhoneEnabled;
    }

    /**
     * @return bool
     */
    public function isSafePaymentRequired()
    {
        return $this->_value === self::CodeType_SafePaymentRequired;
    }

    /**
     * @return bool
     */
    public function isMaximumBestOffersAllowed()
    {
        return $this->_value === self::CodeType_MaximumBestOffersAllowed;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdMaximumBestOffersAllowed()
    {
        return $this->_value === self::CodeType_ClassifiedAdMaximumBestOffersAllowed;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdContactByEmailAvailable()
    {
        return $this->_value === self::CodeType_ClassifiedAdContactByEmailAvailable;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdPayPerLeadEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdPayPerLeadEnabled;
    }

    /**
     * @return bool
     */
    public function isItemSpecificsEnabled()
    {
        return $this->_value === self::CodeType_ItemSpecificsEnabled;
    }

    /**
     * @return bool
     */
    public function isPaisaPayFullEscrowEnabled()
    {
        return $this->_value === self::CodeType_PaisaPayFullEscrowEnabled;
    }

    /**
     * @return bool
     */
    public function isISBNIdentifierEnabled()
    {
        return $this->_value === self::CodeType_ISBNIdentifierEnabled;
    }

    /**
     * @return bool
     */
    public function isUPCIdentifierEnabled()
    {
        return $this->_value === self::CodeType_UPCIdentifierEnabled;
    }

    /**
     * @return bool
     */
    public function isEANIdentifierEnabled()
    {
        return $this->_value === self::CodeType_EANIdentifierEnabled;
    }

    /**
     * @return bool
     */
    public function isBrandMPNIdentifierEnabled()
    {
        return $this->_value === self::CodeType_BrandMPNIdentifierEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdAutoAcceptEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdAutoAcceptEnabled;
    }

    /**
     * @return bool
     */
    public function isBestOfferAutoAcceptEnabled()
    {
        return $this->_value === self::CodeType_BestOfferAutoAcceptEnabled;
    }

    /**
     * @return bool
     */
    public function isCrossBorderTradeEnabled()
    {
        return $this->_value === self::CodeType_CrossBorderTradeEnabled;
    }

    /**
     * @return bool
     */
    public function isPayPalBuyerProtectionEnabled()
    {
        return $this->_value === self::CodeType_PayPalBuyerProtectionEnabled;
    }

    /**
     * @return bool
     */
    public function isBuyerGuaranteeEnabled()
    {
        return $this->_value === self::CodeType_BuyerGuaranteeEnabled;
    }

    /**
     * @return bool
     */
    public function isINEscrowWorkflowTimeline()
    {
        return $this->_value === self::CodeType_INEscrowWorkflowTimeline;
    }

    /**
     * @return bool
     */
    public function isCombinedFixedPriceTreatment()
    {
        return $this->_value === self::CodeType_CombinedFixedPriceTreatment;
    }

    /**
     * @return bool
     */
    public function isGalleryFeaturedDurations()
    {
        return $this->_value === self::CodeType_GalleryFeaturedDurations;
    }

    /**
     * @return bool
     */
    public function isPayPalRequired()
    {
        return $this->_value === self::CodeType_PayPalRequired;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProAdFormatEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProAdFormatEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProContactByPhoneEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProContactByPhoneEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProContactByAddressEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProContactByAddressEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProCompanyNameEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProCompanyNameEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProContactByEmailEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProContactByEmailEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProBestOfferEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProBestOfferEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProAutoAcceptEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProAutoAcceptEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProAutoDeclineEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProAutoDeclineEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProPaymentMethodCheckOutEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProShippingMethodEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProShippingMethodEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProCounterOfferEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProCounterOfferEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->_value === self::CodeType_eBayMotorsProSellerContactDetailsEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketAdFormatEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketAdFormatEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketContactByPhoneEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketContactByPhoneEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketContactByAddressEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketContactByAddressEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketCompanyNameEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketCompanyNameEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketContactByEmailEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketContactByEmailEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketBestOfferEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketBestOfferEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketAutoAcceptEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketAutoAcceptEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketAutoDeclineEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketAutoDeclineEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketPaymentMethodCheckOutEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketShippingMethodEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketShippingMethodEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketCounterOfferEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketCounterOfferEnabled;
    }

    /**
     * @return bool
     */
    public function isLocalMarketSellerContactDetailsEnabled()
    {
        return $this->_value === self::CodeType_LocalMarketSellerContactDetailsEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdContactByAddressEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdContactByAddressEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdCompanyNameEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdCompanyNameEnabled;
    }

    /**
     * @return bool
     */
    public function isSpecialitySubscription()
    {
        return $this->_value === self::CodeType_SpecialitySubscription;
    }

    /**
     * @return bool
     */
    public function isRegularSubscription()
    {
        return $this->_value === self::CodeType_RegularSubscription;
    }

    /**
     * @return bool
     */
    public function isPremiumSubscription()
    {
        return $this->_value === self::CodeType_PremiumSubscription;
    }

    /**
     * @return bool
     */
    public function isNonSubscription()
    {
        return $this->_value === self::CodeType_NonSubscription;
    }

    /**
     * @return bool
     */
    public function isIntangibleEnabled()
    {
        return $this->_value === self::CodeType_IntangibleEnabled;
    }

    /**
     * @return bool
     */
    public function isPayPalRequiredForStoreOwner()
    {
        return $this->_value === self::CodeType_PayPalRequiredForStoreOwner;
    }

    /**
     * @return bool
     */
    public function isReviseQuantityAllowed()
    {
        return $this->_value === self::CodeType_ReviseQuantityAllowed;
    }

    /**
     * @return bool
     */
    public function isRevisePriceAllowed()
    {
        return $this->_value === self::CodeType_RevisePriceAllowed;
    }

    /**
     * @return bool
     */
    public function isStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->_value === self::CodeType_StoreOwnerExtendedListingDurationsEnabled;
    }

    /**
     * @return bool
     */
    public function isStoreOwnerExtendedListingDurations()
    {
        return $this->_value === self::CodeType_StoreOwnerExtendedListingDurations;
    }

    /**
     * @return bool
     */
    public function isReturnPolicyEnabled()
    {
        return $this->_value === self::CodeType_ReturnPolicyEnabled;
    }

    /**
     * @return bool
     */
    public function isHandlingTimeEnabled()
    {
        return $this->_value === self::CodeType_HandlingTimeEnabled;
    }

    /**
     * @return bool
     */
    public function isPaymentMethods()
    {
        return $this->_value === self::CodeType_PaymentMethods;
    }

    /**
     * @return bool
     */
    public function isMaxFlatShippingCost()
    {
        return $this->_value === self::CodeType_MaxFlatShippingCost;
    }

    /**
     * @return bool
     */
    public function isMaxFlatShippingCostCBTExempt()
    {
        return $this->_value === self::CodeType_MaxFlatShippingCostCBTExempt;
    }

    /**
     * @return bool
     */
    public function isGroup1MaxFlatShippingCost()
    {
        return $this->_value === self::CodeType_Group1MaxFlatShippingCost;
    }

    /**
     * @return bool
     */
    public function isGroup2MaxFlatShippingCost()
    {
        return $this->_value === self::CodeType_Group2MaxFlatShippingCost;
    }

    /**
     * @return bool
     */
    public function isGroup3MaxFlatShippingCost()
    {
        return $this->_value === self::CodeType_Group3MaxFlatShippingCost;
    }

    /**
     * @return bool
     */
    public function isVariationsEnabled()
    {
        return $this->_value === self::CodeType_VariationsEnabled;
    }

    /**
     * @return bool
     */
    public function isAttributeConversionEnabled()
    {
        return $this->_value === self::CodeType_AttributeConversionEnabled;
    }

    /**
     * @return bool
     */
    public function isFreeGalleryPlusEnabled()
    {
        return $this->_value === self::CodeType_FreeGalleryPlusEnabled;
    }

    /**
     * @return bool
     */
    public function isFreePicturePackEnabled()
    {
        return $this->_value === self::CodeType_FreePicturePackEnabled;
    }

    /**
     * @return bool
     */
    public function isCompatibilityEnabled()
    {
        return $this->_value === self::CodeType_CompatibilityEnabled;
    }

    /**
     * @return bool
     */
    public function isMinCompatibleApplications()
    {
        return $this->_value === self::CodeType_MinCompatibleApplications;
    }

    /**
     * @return bool
     */
    public function isMaxCompatibleApplications()
    {
        return $this->_value === self::CodeType_MaxCompatibleApplications;
    }

    /**
     * @return bool
     */
    public function isConditionEnabled()
    {
        return $this->_value === self::CodeType_ConditionEnabled;
    }

    /**
     * @return bool
     */
    public function isConditionValues()
    {
        return $this->_value === self::CodeType_ConditionValues;
    }

    /**
     * @return bool
     */
    public function isValueCategory()
    {
        return $this->_value === self::CodeType_ValueCategory;
    }

    /**
     * @return bool
     */
    public function isProductCreationEnabled()
    {
        return $this->_value === self::CodeType_ProductCreationEnabled;
    }

    /**
     * @return bool
     */
    public function isEANEnabled()
    {
        return $this->_value === self::CodeType_EANEnabled;
    }

    /**
     * @return bool
     */
    public function isISBNEnabled()
    {
        return $this->_value === self::CodeType_ISBNEnabled;
    }

    /**
     * @return bool
     */
    public function isUPCEnabled()
    {
        return $this->_value === self::CodeType_UPCEnabled;
    }

    /**
     * @return bool
     */
    public function isMaxGranularFitmentCount()
    {
        return $this->_value === self::CodeType_MaxGranularFitmentCount;
    }

    /**
     * @return bool
     */
    public function isCompatibleVehicleType()
    {
        return $this->_value === self::CodeType_CompatibleVehicleType;
    }

    /**
     * @return bool
     */
    public function isPaymentOptionsGroup()
    {
        return $this->_value === self::CodeType_PaymentOptionsGroup;
    }

    /**
     * @return bool
     */
    public function isShippingProfileCategoryGroup()
    {
        return $this->_value === self::CodeType_ShippingProfileCategoryGroup;
    }

    /**
     * @return bool
     */
    public function isPaymentProfileCategoryGroup()
    {
        return $this->_value === self::CodeType_PaymentProfileCategoryGroup;
    }

    /**
     * @return bool
     */
    public function isReturnPolicyProfileCategoryGroup()
    {
        return $this->_value === self::CodeType_ReturnPolicyProfileCategoryGroup;
    }

    /**
     * @return bool
     */
    public function isVINSupported()
    {
        return $this->_value === self::CodeType_VINSupported;
    }

    /**
     * @return bool
     */
    public function isVRMSupported()
    {
        return $this->_value === self::CodeType_VRMSupported;
    }

    /**
     * @return bool
     */
    public function isSellerProvidedTitleSupported()
    {
        return $this->_value === self::CodeType_SellerProvidedTitleSupported;
    }

    /**
     * @return bool
     */
    public function isDepositSupported()
    {
        return $this->_value === self::CodeType_DepositSupported;
    }

    /**
     * @return bool
     */
    public function isGlobalShippingEnabled()
    {
        return $this->_value === self::CodeType_GlobalShippingEnabled;
    }

    /**
     * @return bool
     */
    public function isAdditionalCompatibilityEnabled()
    {
        return $this->_value === self::CodeType_AdditionalCompatibilityEnabled;
    }

    /**
     * @return bool
     */
    public function isPickupDropOffEnabled()
    {
        return $this->_value === self::CodeType_PickupDropOffEnabled;
    }

    /**
     * @return bool
     */
    public function isDigitalGoodDeliveryEnabled()
    {
        return $this->_value === self::CodeType_DigitalGoodDeliveryEnabled;
    }

    /**
     * @return bool
     */
    public function isEpidSupported()
    {
        return $this->_value === self::CodeType_EpidSupported;
    }

    /**
     * @return bool
     */
    public function isKTypeSupported()
    {
        return $this->_value === self::CodeType_KTypeSupported;
    }

    /**
     * @return bool
     */
    public function isProductRequiredEnabled()
    {
        return $this->_value === self::CodeType_ProductRequiredEnabled;
    }

    /**
     * @return bool
     */
    public function isDomesticReturnsAcceptedValues()
    {
        return $this->_value === self::CodeType_DomesticReturnsAcceptedValues;
    }

    /**
     * @return bool
     */
    public function isInternationalReturnsAcceptedValues()
    {
        return $this->_value === self::CodeType_InternationalReturnsAcceptedValues;
    }

    /**
     * @return bool
     */
    public function isDomesticReturnsDurationValues()
    {
        return $this->_value === self::CodeType_DomesticReturnsDurationValues;
    }

    /**
     * @return bool
     */
    public function isInternationalReturnsDurationValues()
    {
        return $this->_value === self::CodeType_InternationalReturnsDurationValues;
    }

    /**
     * @return bool
     */
    public function isDomesticReturnsShipmentPayeeValues()
    {
        return $this->_value === self::CodeType_DomesticReturnsShipmentPayeeValues;
    }

    /**
     * @return bool
     */
    public function isInternationalReturnsShipmentPayeeValues()
    {
        return $this->_value === self::CodeType_InternationalReturnsShipmentPayeeValues;
    }

    /**
     * @return bool
     */
    public function isDomesticRefundMethodValues()
    {
        return $this->_value === self::CodeType_DomesticRefundMethodValues;
    }

    /**
     * @return bool
     */
    public function isInternationalRefundMethodValues()
    {
        return $this->_value === self::CodeType_InternationalRefundMethodValues;
    }

    /**
     * @return bool
     */
    public function isReturnPolicyDescriptionEnabled()
    {
        return $this->_value === self::CodeType_ReturnPolicyDescriptionEnabled;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

FeatureIDCodeType::_register();
