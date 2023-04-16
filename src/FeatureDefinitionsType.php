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
 * This type is used by the
 * FeatureDefinitions
 * container that is returned in the
 * GetCategoryFeatures
 * response to indicate which eBay features are available on one more eBay marketplaces. If no
 * FeatureID
 * field is included in the call request, all eBay features available for one more eBay marketplaces are returned.
 * If one or more
 * FeatureID
 * fields are included in the call request, only those eBay features specified in each
 * FeatureID
 * field are returned in the response.
 **/
class FeatureDefinitionsType extends EbatNs_ComplexType
{
    const TAG = 'FeatureDefinitionsType';
    const NAME = 'FeatureDefinitionsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ListingDurationDefinitionsType|null
     */
    protected $ListingDurations = null;

    /**
     * @var ShippingTermRequiredDefinitionType|null
     */
    protected $ShippingTermsRequired = null;

    /**
     * @var BestOfferEnabledDefinitionType|null
     */
    protected $BestOfferEnabled = null;

    /**
     * @var DutchBINEnabledDefinitionType|null
     */
    protected $DutchBINEnabled = null;

    /**
     * @var UserConsentRequiredDefinitionType|null
     */
    protected $UserConsentRequired = null;

    /**
     * @var HomePageFeaturedEnabledDefinitionType|null
     */
    protected $HomePageFeaturedEnabled = null;

    /**
     * @var ProPackEnabledDefinitionType|null
     */
    protected $ProPackEnabled = null;

    /**
     * @var BasicUpgradePackEnabledDefinitionType|null
     */
    protected $BasicUpgradePackEnabled = null;

    /**
     * @var ValuePackEnabledDefinitionType|null
     */
    protected $ValuePackEnabled = null;

    /**
     * @var ProPackPlusEnabledDefinitionType|null
     */
    protected $ProPackPlusEnabled = null;

    /**
     * @var AdFormatEnabledDefinitionType|null
     */
    protected $AdFormatEnabled = null;

    /**
     * @var BestOfferCounterEnabledDefinitionType|null
     */
    protected $BestOfferCounterEnabled = null;

    /**
     * @var BestOfferAutoDeclineEnabledDefinitionType|null
     */
    protected $BestOfferAutoDeclineEnabled = null;

    /**
     * @var LocalMarketSpecialitySubscriptionDefinitionType|null
     */
    protected $LocalMarketSpecialitySubscription = null;

    /**
     * @var LocalMarketRegularSubscriptionDefinitionType|null
     */
    protected $LocalMarketRegularSubscription = null;

    /**
     * @var LocalMarketPremiumSubscriptionDefinitionType|null
     */
    protected $LocalMarketPremiumSubscription = null;

    /**
     * @var LocalMarketNonSubscriptionDefinitionType|null
     */
    protected $LocalMarketNonSubscription = null;

    /**
     * @var ExpressEnabledDefinitionType|null
     */
    protected $ExpressEnabled = null;

    /**
     * @var ExpressPicturesRequiredDefinitionType|null
     */
    protected $ExpressPicturesRequired = null;

    /**
     * @var ExpressConditionRequiredDefinitionType|null
     */
    protected $ExpressConditionRequired = null;

    /**
     * @var MinimumReservePriceDefinitionType|null
     */
    protected $MinimumReservePrice = null;

    /**
     * @var TCREnabledDefinitionType|null
     */
    protected $TransactionConfirmationRequestEnabled = null;

    /**
     * @var SellerContactDetailsEnabledDefinitionType|null
     */
    protected $SellerContactDetailsEnabled = null;

    /**
     * @var StoreInventoryEnabledDefinitionType|null
     */
    protected $StoreInventoryEnabled = null;

    /**
     * @var SkypeMeTransactionalEnabledDefinitionType|null
     */
    protected $SkypeMeTransactionalEnabled = null;

    /**
     * @var SkypeMeNonTransactionalEnabledDefinitionType|null
     */
    protected $SkypeMeNonTransactionalEnabled = null;

    /**
     * @var LocalListingDistancesRegularDefinitionType|null
     */
    protected $LocalListingDistancesRegular = null;

    /**
     * @var LocalListingDistancesSpecialtyDefinitionType|null
     */
    protected $LocalListingDistancesSpecialty = null;

    /**
     * @var LocalListingDistancesNonSubscriptionDefinitionType|null
     */
    protected $LocalListingDistancesNonSubscription = null;

    /**
     * @var ClassifiedAdPaymentMethodEnabledDefinitionType|null
     */
    protected $ClassifiedAdPaymentMethodEnabled = null;

    /**
     * @var ClassifiedAdShippingMethodEnabledDefinitionType|null
     */
    protected $ClassifiedAdShippingMethodEnabled = null;

    /**
     * @var ClassifiedAdBestOfferEnabledDefinitionType|null
     */
    protected $ClassifiedAdBestOfferEnabled = null;

    /**
     * @var ClassifiedAdCounterOfferEnabledDefinitionType|null
     */
    protected $ClassifiedAdCounterOfferEnabled = null;

    /**
     * @var ClassifiedAdAutoDeclineEnabledDefinitionType|null
     */
    protected $ClassifiedAdAutoDeclineEnabled = null;

    /**
     * @var ClassifiedAdContactByPhoneEnabledDefinitionType|null
     */
    protected $ClassifiedAdContactByPhoneEnabled = null;

    /**
     * @var ClassifiedAdContactByEmailEnabledDefintionType|null
     */
    protected $ClassifiedAdContactByEmailEnabled = null;

    /**
     * @var SafePaymentRequiredDefinitionType|null
     */
    protected $SafePaymentRequired = null;

    /**
     * @var ClassifiedAdPayPerLeadEnabledDefinitionType|null
     */
    protected $ClassifiedAdPayPerLeadEnabled = null;

    /**
     * @var ItemSpecificsEnabledDefinitionType|null
     */
    protected $ItemSpecificsEnabled = null;

    /**
     * @var PaisaPayFullEscrowEnabledDefinitionType|null
     */
    protected $PaisaPayFullEscrowEnabled = null;

    /**
     * @var ISBNIdentifierEnabledDefinitionType|null
     */
    protected $ISBNIdentifierEnabled = null;

    /**
     * @var UPCIdentifierEnabledDefinitionType|null
     */
    protected $UPCIdentifierEnabled = null;

    /**
     * @var EANIdentifierEnabledDefinitionType|null
     */
    protected $EANIdentifierEnabled = null;

    /**
     * @var BrandMPNIdentifierEnabledDefinitionType|null
     */
    protected $BrandMPNIdentifierEnabled = null;

    /**
     * @var BestOfferAutoAcceptEnabledDefinitionType|null
     */
    protected $BestOfferAutoAcceptEnabled = null;

    /**
     * @var ClassifiedAdAutoAcceptEnabledDefinitionType|null
     */
    protected $ClassifiedAdAutoAcceptEnabled = null;

    /**
     * @var CrossBorderTradeNorthAmericaEnabledDefinitionType|null
     */
    protected $CrossBorderTradeNorthAmericaEnabled = null;

    /**
     * @var CrossBorderTradeGBEnabledDefinitionType|null
     */
    protected $CrossBorderTradeGBEnabled = null;

    /**
     * @var CrossBorderTradeAustraliaEnabledDefinitionType|null
     */
    protected $CrossBorderTradeAustraliaEnabled = null;

    /**
     * @var PayPalBuyerProtectionEnabledDefinitionType|null
     */
    protected $PayPalBuyerProtectionEnabled = null;

    /**
     * @var BuyerGuaranteeEnabledDefinitionType|null
     */
    protected $BuyerGuaranteeEnabled = null;

    /**
     * @var CombinedFixedPriceTreatmentEnabledDefinitionType|null
     */
    protected $CombinedFixedPriceTreatmentEnabled = null;

    /**
     * @var ListingEnhancementDurationDefinitionType|null
     */
    protected $GalleryFeaturedDurations = null;

    /**
     * @var INEscrowWorkflowTimelineDefinitionType|null
     */
    protected $INEscrowWorkflowTimeline = null;

    /**
     * @var PayPalRequiredDefinitionType|null
     */
    protected $PayPalRequired = null;

    /**
     * @var EBayMotorsProAdFormatEnabledDefinitionType|null
     */
    protected $eBayMotorsProAdFormatEnabled = null;

    /**
     * @var EBayMotorsProContactByPhoneEnabledDefinitionType|null
     */
    protected $eBayMotorsProContactByPhoneEnabled = null;

    /**
     * @var EBayMotorsProPhoneCountDefinitionType|null
     */
    protected $eBayMotorsProPhoneCount = null;

    /**
     * @var EBayMotorsProContactByAddressEnabledDefinitionType|null
     */
    protected $eBayMotorsProContactByAddressEnabled = null;

    /**
     * @var EBayMotorsProStreetCountDefinitionType|null
     */
    protected $eBayMotorsProStreetCount = null;

    /**
     * @var EBayMotorsProCompanyNameEnabledDefinitionType|null
     */
    protected $eBayMotorsProCompanyNameEnabled = null;

    /**
     * @var EBayMotorsProContactByEmailEnabledDefinitionType|null
     */
    protected $eBayMotorsProContactByEmailEnabled = null;

    /**
     * @var EBayMotorsProBestOfferEnabledDefinitionType|null
     */
    protected $eBayMotorsProBestOfferEnabled = null;

    /**
     * @var EBayMotorsProAutoAcceptEnabledDefinitionType|null
     */
    protected $eBayMotorsProAutoAcceptEnabled = null;

    /**
     * @var EBayMotorsProAutoDeclineEnabledDefinitionType|null
     */
    protected $eBayMotorsProAutoDeclineEnabled = null;

    /**
     * @var EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType|null
     */
    protected $eBayMotorsProPaymentMethodCheckOutEnabled = null;

    /**
     * @var EBayMotorsProShippingMethodEnabledDefinitionType|null
     */
    protected $eBayMotorsProShippingMethodEnabled = null;

    /**
     * @var EBayMotorsProCounterOfferEnabledDefinitionType|null
     */
    protected $eBayMotorsProCounterOfferEnabled = null;

    /**
     * @var EBayMotorsProSellerContactDetailsEnabledDefinitionType|null
     */
    protected $eBayMotorsProSellerContactDetailsEnabled = null;

    /**
     * @var LocalMarketAdFormatEnabledDefinitionType|null
     */
    protected $LocalMarketAdFormatEnabled = null;

    /**
     * @var LocalMarketContactByPhoneEnabledDefinitionType|null
     */
    protected $LocalMarketContactByPhoneEnabled = null;

    /**
     * @var LocalMarketPhoneCountDefinitionType|null
     */
    protected $LocalMarketPhoneCount = null;

    /**
     * @var LocalMarketContactByAddressEnabledDefinitionType|null
     */
    protected $LocalMarketContactByAddressEnabled = null;

    /**
     * @var LocalMarketStreetCountDefinitionType|null
     */
    protected $LocalMarketStreetCount = null;

    /**
     * @var LocalMarketCompanyNameEnabledDefinitionType|null
     */
    protected $LocalMarketCompanyNameEnabled = null;

    /**
     * @var LocalMarketContactByEmailEnabledDefinitionType|null
     */
    protected $LocalMarketContactByEmailEnabled = null;

    /**
     * @var LocalMarketBestOfferEnabledDefinitionType|null
     */
    protected $LocalMarketBestOfferEnabled = null;

    /**
     * @var LocalMarketAutoAcceptEnabledDefinitionType|null
     */
    protected $LocalMarketAutoAcceptEnabled = null;

    /**
     * @var LocalMarketAutoDeclineEnabledDefinitionType|null
     */
    protected $LocalMarketAutoDeclineEnabled = null;

    /**
     * @var LocalMarketPaymentMethodCheckOutEnabledDefinitionType|null
     */
    protected $LocalMarketPaymentMethodCheckOutEnabled = null;

    /**
     * @var LocalMarketShippingMethodEnabledDefinitionType|null
     */
    protected $LocalMarketShippingMethodEnabled = null;

    /**
     * @var LocalMarketCounterOfferEnabledDefinitionType|null
     */
    protected $LocalMarketCounterOfferEnabled = null;

    /**
     * @var LocalMarketSellerContactDetailsEnabledDefinitionType|null
     */
    protected $LocalMarketSellerContactDetailsEnabled = null;

    /**
     * @var ClassifiedAdPhoneCountDefinitionType|null
     */
    protected $ClassifiedAdPhoneCount = null;

    /**
     * @var ClassifiedAdContactByAddressEnabledDefinitionType|null
     */
    protected $ClassifiedAdContactByAddressEnabled = null;

    /**
     * @var ClassifiedAdStreetCountDefinitionType|null
     */
    protected $ClassifiedAdStreetCount = null;

    /**
     * @var ClassifiedAdCompanyNameEnabledDefinitionType|null
     */
    protected $ClassifiedAdCompanyNameEnabled = null;

    /**
     * @var SpecialitySubscriptionDefinitionType|null
     */
    protected $SpecialitySubscription = null;

    /**
     * @var RegularSubscriptionDefinitionType|null
     */
    protected $RegularSubscription = null;

    /**
     * @var PremiumSubscriptionDefinitionType|null
     */
    protected $PremiumSubscription = null;

    /**
     * @var NonSubscriptionDefinitionType|null
     */
    protected $NonSubscription = null;

    /**
     * @var ReturnPolicyEnabledDefinitionType|null
     */
    protected $ReturnPolicyEnabled = null;

    /**
     * @var HandlingTimeEnabledDefinitionType|null
     */
    protected $HandlingTimeEnabled = null;

    /**
     * @var PayPalRequiredForStoreOwnerDefinitionType|null
     */
    protected $PayPalRequiredForStoreOwner = null;

    /**
     * @var ReviseQuantityAllowedDefinitionType|null
     */
    protected $ReviseQuantityAllowed = null;

    /**
     * @var RevisePriceAllowedDefinitionType|null
     */
    protected $RevisePriceAllowed = null;

    /**
     * @var StoreOwnerExtendedListingDurationsEnabledDefinitionType|null
     */
    protected $StoreOwnerExtendedListingDurationsEnabled = null;

    /**
     * @var StoreOwnerExtendedListingDurationsDefinitionType|null
     */
    protected $StoreOwnerExtendedListingDurations = null;

    /**
     * @var PaymentMethodDefinitionType|null
     */
    protected $PaymentMethod = null;

    /**
     * @var Group1MaxFlatShippingCostDefinitionType|null
     */
    protected $Group1MaxFlatShippingCost = null;

    /**
     * @var Group2MaxFlatShippingCostDefinitionType|null
     */
    protected $Group2MaxFlatShippingCost = null;

    /**
     * @var Group3MaxFlatShippingCostDefinitionType|null
     */
    protected $Group3MaxFlatShippingCost = null;

    /**
     * @var MaxFlatShippingCostCBTExemptDefinitionType|null
     */
    protected $MaxFlatShippingCostCBTExempt = null;

    /**
     * @var MaxFlatShippingCostDefinitionType|null
     */
    protected $MaxFlatShippingCost = null;

    /**
     * @var VariationsEnabledDefinitionType|null
     */
    protected $VariationsEnabled = null;

    /**
     * @var AttributeConversionEnabledFeatureDefinitionType|null
     */
    protected $AttributeConversionEnabled = null;

    /**
     * @var FreeGalleryPlusEnabledDefinitionType|null
     */
    protected $FreeGalleryPlusEnabled = null;

    /**
     * @var FreePicturePackEnabledDefinitionType|null
     */
    protected $FreePicturePackEnabled = null;

    /**
     * @var ItemCompatibilityEnabledDefinitionType|null
     */
    protected $ItemCompatibilityEnabled = null;

    /**
     * @var MaxItemCompatibilityDefinitionType|null
     */
    protected $MaxItemCompatibility = null;

    /**
     * @var MinItemCompatibilityDefinitionType|null
     */
    protected $MinItemCompatibility = null;

    /**
     * @var ConditionEnabledDefinitionType|null
     */
    protected $ConditionEnabled = null;

    /**
     * @var ConditionValuesDefinitionType|null
     */
    protected $ConditionValues = null;

    /**
     * @var ValueCategoryDefinitionType|null
     */
    protected $ValueCategory = null;

    /**
     * @var ProductCreationEnabledDefinitionType|null
     */
    protected $ProductCreationEnabled = null;

    /**
     * @var EANEnabledDefinitionType|null
     */
    protected $EANEnabled = null;

    /**
     * @var ISBNEnabledDefinitionType|null
     */
    protected $ISBNEnabled = null;

    /**
     * @var UPCEnabledDefinitionType|null
     */
    protected $UPCEnabled = null;

    /**
     * @var CompatibleVehicleTypeDefinitionType|null
     */
    protected $CompatibleVehicleType = null;

    /**
     * @var MaxGranularFitmentCountDefinitionType|null
     */
    protected $MaxGranularFitmentCount = null;

    /**
     * @var PaymentOptionsGroupEnabledDefinitionType|null
     */
    protected $PaymentOptionsGroup = null;

    /**
     * @var ProfileCategoryGroupDefinitionType|null
     */
    protected $ShippingProfileCategoryGroup = null;

    /**
     * @var ProfileCategoryGroupDefinitionType|null
     */
    protected $PaymentProfileCategoryGroup = null;

    /**
     * @var ProfileCategoryGroupDefinitionType|null
     */
    protected $ReturnPolicyProfileCategoryGroup = null;

    /**
     * @var VINSupportedDefinitionType|null
     */
    protected $VINSupported = null;

    /**
     * @var VRMSupportedDefinitionType|null
     */
    protected $VRMSupported = null;

    /**
     * @var SellerProvidedTitleSupportedDefinitionType|null
     */
    protected $SellerProvidedTitleSupported = null;

    /**
     * @var DepositSupportedDefinitionType|null
     */
    protected $DepositSupported = null;

    /**
     * @var GlobalShippingEnabledDefinitionType|null
     */
    protected $GlobalShippingEnabled = null;

    /**
     * @var AdditionalCompatibilityEnabledDefinitionType|null
     */
    protected $AdditionalCompatibilityEnabled = null;

    /**
     * @var PickupDropOffEnabledDefinitionType|null
     */
    protected $PickupDropOffEnabled = null;

    /**
     * @var DigitalGoodDeliveryEnabledDefinitionType|null
     */
    protected $DigitalGoodDeliveryEnabled = null;

    /**
     * @var EpidSupportedDefinitionType|null
     */
    protected $EpidSupported = null;

    /**
     * @var KTypeSupportedDefinitionType|null
     */
    protected $KTypeSupported = null;

    /**
     * @var ProductRequiredEnabledDefinitionType|null
     */
    protected $ProductRequiredEnabled = null;

    /**
     * @var DomesticReturnsAcceptedDefinitionType|null
     */
    protected $DomesticReturnsAcceptedValues = null;

    /**
     * @var InternationalReturnsAcceptedDefinitionType|null
     */
    protected $InternationalReturnsAcceptedValues = null;

    /**
     * @var DomesticReturnsDurationDefinitionType|null
     */
    protected $DomesticReturnsDurationValues = null;

    /**
     * @var InternationalReturnsDurationDefinitionType|null
     */
    protected $InternationalReturnsDurationValues = null;

    /**
     * @var DomesticReturnsShipmentPayeeDefinitionType|null
     */
    protected $DomesticReturnsShipmentPayeeValues = null;

    /**
     * @var InternationalReturnsShipmentPayeeDefinitionType|null
     */
    protected $InternationalReturnsShipmentPayeeValues = null;

    /**
     * @var DomesticRefundMethodCodeType|null
     */
    protected $DomesticRefundMethodValues = null;

    /**
     * @var InternationalRefundMethodCodeType|null
     */
    protected $InternationalRefundMethodValues = null;

    /**
     * @var ReturnPolicyDescriptionEnabledDefinitionType|null
     */
    protected $ReturnPolicyDescriptionEnabled = null;


    /**
     * @return ListingDurationDefinitionsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingDurations()
    {
        return $this->_dc($this->ListingDurations, 'ListingDurations');
    }

    /**
     * @param ListingDurationDefinitionsType|null $value
     * @return void
     */
    public function setListingDurations($value)
    {
        $this->ListingDurations = $value;
    }

    /**
     * @return ShippingTermRequiredDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingTermsRequired()
    {
        return $this->_dc($this->ShippingTermsRequired, 'ShippingTermsRequired');
    }

    /**
     * @param ShippingTermRequiredDefinitionType|null $value
     * @return void
     */
    public function setShippingTermsRequired($value)
    {
        $this->ShippingTermsRequired = $value;
    }

    /**
     * @return BestOfferEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferEnabled()
    {
        return $this->_dc($this->BestOfferEnabled, 'BestOfferEnabled');
    }

    /**
     * @param BestOfferEnabledDefinitionType|null $value
     * @return void
     */
    public function setBestOfferEnabled($value)
    {
        $this->BestOfferEnabled = $value;
    }

    /**
     * @return DutchBINEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDutchBINEnabled()
    {
        return $this->_dc($this->DutchBINEnabled, 'DutchBINEnabled');
    }

    /**
     * @param DutchBINEnabledDefinitionType|null $value
     * @return void
     */
    public function setDutchBINEnabled($value)
    {
        $this->DutchBINEnabled = $value;
    }

    /**
     * @return UserConsentRequiredDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserConsentRequired()
    {
        return $this->_dc($this->UserConsentRequired, 'UserConsentRequired');
    }

    /**
     * @param UserConsentRequiredDefinitionType|null $value
     * @return void
     */
    public function setUserConsentRequired($value)
    {
        $this->UserConsentRequired = $value;
    }

    /**
     * @return HomePageFeaturedEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHomePageFeaturedEnabled()
    {
        return $this->_dc($this->HomePageFeaturedEnabled, 'HomePageFeaturedEnabled');
    }

    /**
     * @param HomePageFeaturedEnabledDefinitionType|null $value
     * @return void
     */
    public function setHomePageFeaturedEnabled($value)
    {
        $this->HomePageFeaturedEnabled = $value;
    }

    /**
     * @return ProPackEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProPackEnabled()
    {
        return $this->_dc($this->ProPackEnabled, 'ProPackEnabled');
    }

    /**
     * @param ProPackEnabledDefinitionType|null $value
     * @return void
     */
    public function setProPackEnabled($value)
    {
        $this->ProPackEnabled = $value;
    }

    /**
     * @return BasicUpgradePackEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBasicUpgradePackEnabled()
    {
        return $this->_dc($this->BasicUpgradePackEnabled, 'BasicUpgradePackEnabled');
    }

    /**
     * @param BasicUpgradePackEnabledDefinitionType|null $value
     * @return void
     */
    public function setBasicUpgradePackEnabled($value)
    {
        $this->BasicUpgradePackEnabled = $value;
    }

    /**
     * @return ValuePackEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValuePackEnabled()
    {
        return $this->_dc($this->ValuePackEnabled, 'ValuePackEnabled');
    }

    /**
     * @param ValuePackEnabledDefinitionType|null $value
     * @return void
     */
    public function setValuePackEnabled($value)
    {
        $this->ValuePackEnabled = $value;
    }

    /**
     * @return ProPackPlusEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProPackPlusEnabled()
    {
        return $this->_dc($this->ProPackPlusEnabled, 'ProPackPlusEnabled');
    }

    /**
     * @param ProPackPlusEnabledDefinitionType|null $value
     * @return void
     */
    public function setProPackPlusEnabled($value)
    {
        $this->ProPackPlusEnabled = $value;
    }

    /**
     * @return AdFormatEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdFormatEnabled()
    {
        return $this->_dc($this->AdFormatEnabled, 'AdFormatEnabled');
    }

    /**
     * @param AdFormatEnabledDefinitionType|null $value
     * @return void
     */
    public function setAdFormatEnabled($value)
    {
        $this->AdFormatEnabled = $value;
    }

    /**
     * @return BestOfferCounterEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->_dc($this->BestOfferCounterEnabled, 'BestOfferCounterEnabled');
    }

    /**
     * @param BestOfferCounterEnabledDefinitionType|null $value
     * @return void
     */
    public function setBestOfferCounterEnabled($value)
    {
        $this->BestOfferCounterEnabled = $value;
    }

    /**
     * @return BestOfferAutoDeclineEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->_dc($this->BestOfferAutoDeclineEnabled, 'BestOfferAutoDeclineEnabled');
    }

    /**
     * @param BestOfferAutoDeclineEnabledDefinitionType|null $value
     * @return void
     */
    public function setBestOfferAutoDeclineEnabled($value)
    {
        $this->BestOfferAutoDeclineEnabled = $value;
    }

    /**
     * @return LocalMarketSpecialitySubscriptionDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketSpecialitySubscription()
    {
        return $this->_dc($this->LocalMarketSpecialitySubscription, 'LocalMarketSpecialitySubscription');
    }

    /**
     * @param LocalMarketSpecialitySubscriptionDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketSpecialitySubscription($value)
    {
        $this->LocalMarketSpecialitySubscription = $value;
    }

    /**
     * @return LocalMarketRegularSubscriptionDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketRegularSubscription()
    {
        return $this->_dc($this->LocalMarketRegularSubscription, 'LocalMarketRegularSubscription');
    }

    /**
     * @param LocalMarketRegularSubscriptionDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketRegularSubscription($value)
    {
        $this->LocalMarketRegularSubscription = $value;
    }

    /**
     * @return LocalMarketPremiumSubscriptionDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketPremiumSubscription()
    {
        return $this->_dc($this->LocalMarketPremiumSubscription, 'LocalMarketPremiumSubscription');
    }

    /**
     * @param LocalMarketPremiumSubscriptionDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketPremiumSubscription($value)
    {
        $this->LocalMarketPremiumSubscription = $value;
    }

    /**
     * @return LocalMarketNonSubscriptionDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketNonSubscription()
    {
        return $this->_dc($this->LocalMarketNonSubscription, 'LocalMarketNonSubscription');
    }

    /**
     * @param LocalMarketNonSubscriptionDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketNonSubscription($value)
    {
        $this->LocalMarketNonSubscription = $value;
    }

    /**
     * @return ExpressEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressEnabled()
    {
        return $this->_dc($this->ExpressEnabled, 'ExpressEnabled');
    }

    /**
     * @param ExpressEnabledDefinitionType|null $value
     * @return void
     */
    public function setExpressEnabled($value)
    {
        $this->ExpressEnabled = $value;
    }

    /**
     * @return ExpressPicturesRequiredDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressPicturesRequired()
    {
        return $this->_dc($this->ExpressPicturesRequired, 'ExpressPicturesRequired');
    }

    /**
     * @param ExpressPicturesRequiredDefinitionType|null $value
     * @return void
     */
    public function setExpressPicturesRequired($value)
    {
        $this->ExpressPicturesRequired = $value;
    }

    /**
     * @return ExpressConditionRequiredDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressConditionRequired()
    {
        return $this->_dc($this->ExpressConditionRequired, 'ExpressConditionRequired');
    }

    /**
     * @param ExpressConditionRequiredDefinitionType|null $value
     * @return void
     */
    public function setExpressConditionRequired($value)
    {
        $this->ExpressConditionRequired = $value;
    }

    /**
     * @return MinimumReservePriceDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumReservePrice()
    {
        return $this->_dc($this->MinimumReservePrice, 'MinimumReservePrice');
    }

    /**
     * @param MinimumReservePriceDefinitionType|null $value
     * @return void
     */
    public function setMinimumReservePrice($value)
    {
        $this->MinimumReservePrice = $value;
    }

    /**
     * @return TCREnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionConfirmationRequestEnabled()
    {
        return $this->_dc($this->TransactionConfirmationRequestEnabled, 'TransactionConfirmationRequestEnabled');
    }

    /**
     * @param TCREnabledDefinitionType|null $value
     * @return void
     */
    public function setTransactionConfirmationRequestEnabled($value)
    {
        $this->TransactionConfirmationRequestEnabled = $value;
    }

    /**
     * @return SellerContactDetailsEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerContactDetailsEnabled()
    {
        return $this->_dc($this->SellerContactDetailsEnabled, 'SellerContactDetailsEnabled');
    }

    /**
     * @param SellerContactDetailsEnabledDefinitionType|null $value
     * @return void
     */
    public function setSellerContactDetailsEnabled($value)
    {
        $this->SellerContactDetailsEnabled = $value;
    }

    /**
     * @return StoreInventoryEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreInventoryEnabled()
    {
        return $this->_dc($this->StoreInventoryEnabled, 'StoreInventoryEnabled');
    }

    /**
     * @param StoreInventoryEnabledDefinitionType|null $value
     * @return void
     */
    public function setStoreInventoryEnabled($value)
    {
        $this->StoreInventoryEnabled = $value;
    }

    /**
     * @return SkypeMeTransactionalEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSkypeMeTransactionalEnabled()
    {
        return $this->_dc($this->SkypeMeTransactionalEnabled, 'SkypeMeTransactionalEnabled');
    }

    /**
     * @param SkypeMeTransactionalEnabledDefinitionType|null $value
     * @return void
     */
    public function setSkypeMeTransactionalEnabled($value)
    {
        $this->SkypeMeTransactionalEnabled = $value;
    }

    /**
     * @return SkypeMeNonTransactionalEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
        return $this->_dc($this->SkypeMeNonTransactionalEnabled, 'SkypeMeNonTransactionalEnabled');
    }

    /**
     * @param SkypeMeNonTransactionalEnabledDefinitionType|null $value
     * @return void
     */
    public function setSkypeMeNonTransactionalEnabled($value)
    {
        $this->SkypeMeNonTransactionalEnabled = $value;
    }

    /**
     * @return LocalListingDistancesRegularDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalListingDistancesRegular()
    {
        return $this->_dc($this->LocalListingDistancesRegular, 'LocalListingDistancesRegular');
    }

    /**
     * @param LocalListingDistancesRegularDefinitionType|null $value
     * @return void
     */
    public function setLocalListingDistancesRegular($value)
    {
        $this->LocalListingDistancesRegular = $value;
    }

    /**
     * @return LocalListingDistancesSpecialtyDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalListingDistancesSpecialty()
    {
        return $this->_dc($this->LocalListingDistancesSpecialty, 'LocalListingDistancesSpecialty');
    }

    /**
     * @param LocalListingDistancesSpecialtyDefinitionType|null $value
     * @return void
     */
    public function setLocalListingDistancesSpecialty($value)
    {
        $this->LocalListingDistancesSpecialty = $value;
    }

    /**
     * @return LocalListingDistancesNonSubscriptionDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalListingDistancesNonSubscription()
    {
        return $this->_dc($this->LocalListingDistancesNonSubscription, 'LocalListingDistancesNonSubscription');
    }

    /**
     * @param LocalListingDistancesNonSubscriptionDefinitionType|null $value
     * @return void
     */
    public function setLocalListingDistancesNonSubscription($value)
    {
        $this->LocalListingDistancesNonSubscription = $value;
    }

    /**
     * @return ClassifiedAdPaymentMethodEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
        return $this->_dc($this->ClassifiedAdPaymentMethodEnabled, 'ClassifiedAdPaymentMethodEnabled');
    }

    /**
     * @param ClassifiedAdPaymentMethodEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdPaymentMethodEnabled($value)
    {
        $this->ClassifiedAdPaymentMethodEnabled = $value;
    }

    /**
     * @return ClassifiedAdShippingMethodEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
        return $this->_dc($this->ClassifiedAdShippingMethodEnabled, 'ClassifiedAdShippingMethodEnabled');
    }

    /**
     * @param ClassifiedAdShippingMethodEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdShippingMethodEnabled($value)
    {
        $this->ClassifiedAdShippingMethodEnabled = $value;
    }

    /**
     * @return ClassifiedAdBestOfferEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdBestOfferEnabled()
    {
        return $this->_dc($this->ClassifiedAdBestOfferEnabled, 'ClassifiedAdBestOfferEnabled');
    }

    /**
     * @param ClassifiedAdBestOfferEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdBestOfferEnabled($value)
    {
        $this->ClassifiedAdBestOfferEnabled = $value;
    }

    /**
     * @return ClassifiedAdCounterOfferEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
        return $this->_dc($this->ClassifiedAdCounterOfferEnabled, 'ClassifiedAdCounterOfferEnabled');
    }

    /**
     * @param ClassifiedAdCounterOfferEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdCounterOfferEnabled($value)
    {
        $this->ClassifiedAdCounterOfferEnabled = $value;
    }

    /**
     * @return ClassifiedAdAutoDeclineEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
        return $this->_dc($this->ClassifiedAdAutoDeclineEnabled, 'ClassifiedAdAutoDeclineEnabled');
    }

    /**
     * @param ClassifiedAdAutoDeclineEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdAutoDeclineEnabled($value)
    {
        $this->ClassifiedAdAutoDeclineEnabled = $value;
    }

    /**
     * @return ClassifiedAdContactByPhoneEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
        return $this->_dc($this->ClassifiedAdContactByPhoneEnabled, 'ClassifiedAdContactByPhoneEnabled');
    }

    /**
     * @param ClassifiedAdContactByPhoneEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdContactByPhoneEnabled($value)
    {
        $this->ClassifiedAdContactByPhoneEnabled = $value;
    }

    /**
     * @return ClassifiedAdContactByEmailEnabledDefintionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->_dc($this->ClassifiedAdContactByEmailEnabled, 'ClassifiedAdContactByEmailEnabled');
    }

    /**
     * @param ClassifiedAdContactByEmailEnabledDefintionType|null $value
     * @return void
     */
    public function setClassifiedAdContactByEmailEnabled($value)
    {
        $this->ClassifiedAdContactByEmailEnabled = $value;
    }

    /**
     * @return SafePaymentRequiredDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSafePaymentRequired()
    {
        return $this->_dc($this->SafePaymentRequired, 'SafePaymentRequired');
    }

    /**
     * @param SafePaymentRequiredDefinitionType|null $value
     * @return void
     */
    public function setSafePaymentRequired($value)
    {
        $this->SafePaymentRequired = $value;
    }

    /**
     * @return ClassifiedAdPayPerLeadEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
        return $this->_dc($this->ClassifiedAdPayPerLeadEnabled, 'ClassifiedAdPayPerLeadEnabled');
    }

    /**
     * @param ClassifiedAdPayPerLeadEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdPayPerLeadEnabled($value)
    {
        $this->ClassifiedAdPayPerLeadEnabled = $value;
    }

    /**
     * @return ItemSpecificsEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemSpecificsEnabled()
    {
        return $this->_dc($this->ItemSpecificsEnabled, 'ItemSpecificsEnabled');
    }

    /**
     * @param ItemSpecificsEnabledDefinitionType|null $value
     * @return void
     */
    public function setItemSpecificsEnabled($value)
    {
        $this->ItemSpecificsEnabled = $value;
    }

    /**
     * @return PaisaPayFullEscrowEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaisaPayFullEscrowEnabled()
    {
        return $this->_dc($this->PaisaPayFullEscrowEnabled, 'PaisaPayFullEscrowEnabled');
    }

    /**
     * @param PaisaPayFullEscrowEnabledDefinitionType|null $value
     * @return void
     */
    public function setPaisaPayFullEscrowEnabled($value)
    {
        $this->PaisaPayFullEscrowEnabled = $value;
    }

    /**
     * @return ISBNIdentifierEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getISBNIdentifierEnabled()
    {
        return $this->_dc($this->ISBNIdentifierEnabled, 'ISBNIdentifierEnabled');
    }

    /**
     * @param ISBNIdentifierEnabledDefinitionType|null $value
     * @return void
     */
    public function setISBNIdentifierEnabled($value)
    {
        $this->ISBNIdentifierEnabled = $value;
    }

    /**
     * @return UPCIdentifierEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUPCIdentifierEnabled()
    {
        return $this->_dc($this->UPCIdentifierEnabled, 'UPCIdentifierEnabled');
    }

    /**
     * @param UPCIdentifierEnabledDefinitionType|null $value
     * @return void
     */
    public function setUPCIdentifierEnabled($value)
    {
        $this->UPCIdentifierEnabled = $value;
    }

    /**
     * @return EANIdentifierEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEANIdentifierEnabled()
    {
        return $this->_dc($this->EANIdentifierEnabled, 'EANIdentifierEnabled');
    }

    /**
     * @param EANIdentifierEnabledDefinitionType|null $value
     * @return void
     */
    public function setEANIdentifierEnabled($value)
    {
        $this->EANIdentifierEnabled = $value;
    }

    /**
     * @return BrandMPNIdentifierEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBrandMPNIdentifierEnabled()
    {
        return $this->_dc($this->BrandMPNIdentifierEnabled, 'BrandMPNIdentifierEnabled');
    }

    /**
     * @param BrandMPNIdentifierEnabledDefinitionType|null $value
     * @return void
     */
    public function setBrandMPNIdentifierEnabled($value)
    {
        $this->BrandMPNIdentifierEnabled = $value;
    }

    /**
     * @return BestOfferAutoAcceptEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->_dc($this->BestOfferAutoAcceptEnabled, 'BestOfferAutoAcceptEnabled');
    }

    /**
     * @param BestOfferAutoAcceptEnabledDefinitionType|null $value
     * @return void
     */
    public function setBestOfferAutoAcceptEnabled($value)
    {
        $this->BestOfferAutoAcceptEnabled = $value;
    }

    /**
     * @return ClassifiedAdAutoAcceptEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
        return $this->_dc($this->ClassifiedAdAutoAcceptEnabled, 'ClassifiedAdAutoAcceptEnabled');
    }

    /**
     * @param ClassifiedAdAutoAcceptEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdAutoAcceptEnabled($value)
    {
        $this->ClassifiedAdAutoAcceptEnabled = $value;
    }

    /**
     * @return CrossBorderTradeNorthAmericaEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
        return $this->_dc($this->CrossBorderTradeNorthAmericaEnabled, 'CrossBorderTradeNorthAmericaEnabled');
    }

    /**
     * @param CrossBorderTradeNorthAmericaEnabledDefinitionType|null $value
     * @return void
     */
    public function setCrossBorderTradeNorthAmericaEnabled($value)
    {
        $this->CrossBorderTradeNorthAmericaEnabled = $value;
    }

    /**
     * @return CrossBorderTradeGBEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossBorderTradeGBEnabled()
    {
        return $this->_dc($this->CrossBorderTradeGBEnabled, 'CrossBorderTradeGBEnabled');
    }

    /**
     * @param CrossBorderTradeGBEnabledDefinitionType|null $value
     * @return void
     */
    public function setCrossBorderTradeGBEnabled($value)
    {
        $this->CrossBorderTradeGBEnabled = $value;
    }

    /**
     * @return CrossBorderTradeAustraliaEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
        return $this->_dc($this->CrossBorderTradeAustraliaEnabled, 'CrossBorderTradeAustraliaEnabled');
    }

    /**
     * @param CrossBorderTradeAustraliaEnabledDefinitionType|null $value
     * @return void
     */
    public function setCrossBorderTradeAustraliaEnabled($value)
    {
        $this->CrossBorderTradeAustraliaEnabled = $value;
    }

    /**
     * @return PayPalBuyerProtectionEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalBuyerProtectionEnabled()
    {
        return $this->_dc($this->PayPalBuyerProtectionEnabled, 'PayPalBuyerProtectionEnabled');
    }

    /**
     * @param PayPalBuyerProtectionEnabledDefinitionType|null $value
     * @return void
     */
    public function setPayPalBuyerProtectionEnabled($value)
    {
        $this->PayPalBuyerProtectionEnabled = $value;
    }

    /**
     * @return BuyerGuaranteeEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerGuaranteeEnabled()
    {
        return $this->_dc($this->BuyerGuaranteeEnabled, 'BuyerGuaranteeEnabled');
    }

    /**
     * @param BuyerGuaranteeEnabledDefinitionType|null $value
     * @return void
     */
    public function setBuyerGuaranteeEnabled($value)
    {
        $this->BuyerGuaranteeEnabled = $value;
    }

    /**
     * @return CombinedFixedPriceTreatmentEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
        return $this->_dc($this->CombinedFixedPriceTreatmentEnabled, 'CombinedFixedPriceTreatmentEnabled');
    }

    /**
     * @param CombinedFixedPriceTreatmentEnabledDefinitionType|null $value
     * @return void
     */
    public function setCombinedFixedPriceTreatmentEnabled($value)
    {
        $this->CombinedFixedPriceTreatmentEnabled = $value;
    }

    /**
     * @return ListingEnhancementDurationDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGalleryFeaturedDurations()
    {
        return $this->_dc($this->GalleryFeaturedDurations, 'GalleryFeaturedDurations');
    }

    /**
     * @param ListingEnhancementDurationDefinitionType|null $value
     * @return void
     */
    public function setGalleryFeaturedDurations($value)
    {
        $this->GalleryFeaturedDurations = $value;
    }

    /**
     * @return INEscrowWorkflowTimelineDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getINEscrowWorkflowTimeline()
    {
        return $this->_dc($this->INEscrowWorkflowTimeline, 'INEscrowWorkflowTimeline');
    }

    /**
     * @param INEscrowWorkflowTimelineDefinitionType|null $value
     * @return void
     */
    public function setINEscrowWorkflowTimeline($value)
    {
        $this->INEscrowWorkflowTimeline = $value;
    }

    /**
     * @return PayPalRequiredDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalRequired()
    {
        return $this->_dc($this->PayPalRequired, 'PayPalRequired');
    }

    /**
     * @param PayPalRequiredDefinitionType|null $value
     * @return void
     */
    public function setPayPalRequired($value)
    {
        $this->PayPalRequired = $value;
    }

    /**
     * @return EBayMotorsProAdFormatEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
        return $this->_dc($this->eBayMotorsProAdFormatEnabled, 'eBayMotorsProAdFormatEnabled');
    }

    /**
     * @param EBayMotorsProAdFormatEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProAdFormatEnabled($value)
    {
        $this->eBayMotorsProAdFormatEnabled = $value;
    }

    /**
     * @return EBayMotorsProContactByPhoneEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
        return $this->_dc($this->eBayMotorsProContactByPhoneEnabled, 'eBayMotorsProContactByPhoneEnabled');
    }

    /**
     * @param EBayMotorsProContactByPhoneEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProContactByPhoneEnabled($value)
    {
        $this->eBayMotorsProContactByPhoneEnabled = $value;
    }

    /**
     * @return EBayMotorsProPhoneCountDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProPhoneCount()
    {
        return $this->_dc($this->eBayMotorsProPhoneCount, 'eBayMotorsProPhoneCount');
    }

    /**
     * @param EBayMotorsProPhoneCountDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProPhoneCount($value)
    {
        $this->eBayMotorsProPhoneCount = $value;
    }

    /**
     * @return EBayMotorsProContactByAddressEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
        return $this->_dc($this->eBayMotorsProContactByAddressEnabled, 'eBayMotorsProContactByAddressEnabled');
    }

    /**
     * @param EBayMotorsProContactByAddressEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProContactByAddressEnabled($value)
    {
        $this->eBayMotorsProContactByAddressEnabled = $value;
    }

    /**
     * @return EBayMotorsProStreetCountDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProStreetCount()
    {
        return $this->_dc($this->eBayMotorsProStreetCount, 'eBayMotorsProStreetCount');
    }

    /**
     * @param EBayMotorsProStreetCountDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProStreetCount($value)
    {
        $this->eBayMotorsProStreetCount = $value;
    }

    /**
     * @return EBayMotorsProCompanyNameEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
        return $this->_dc($this->eBayMotorsProCompanyNameEnabled, 'eBayMotorsProCompanyNameEnabled');
    }

    /**
     * @param EBayMotorsProCompanyNameEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProCompanyNameEnabled($value)
    {
        $this->eBayMotorsProCompanyNameEnabled = $value;
    }

    /**
     * @return EBayMotorsProContactByEmailEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
        return $this->_dc($this->eBayMotorsProContactByEmailEnabled, 'eBayMotorsProContactByEmailEnabled');
    }

    /**
     * @param EBayMotorsProContactByEmailEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProContactByEmailEnabled($value)
    {
        $this->eBayMotorsProContactByEmailEnabled = $value;
    }

    /**
     * @return EBayMotorsProBestOfferEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
        return $this->_dc($this->eBayMotorsProBestOfferEnabled, 'eBayMotorsProBestOfferEnabled');
    }

    /**
     * @param EBayMotorsProBestOfferEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProBestOfferEnabled($value)
    {
        $this->eBayMotorsProBestOfferEnabled = $value;
    }

    /**
     * @return EBayMotorsProAutoAcceptEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
        return $this->_dc($this->eBayMotorsProAutoAcceptEnabled, 'eBayMotorsProAutoAcceptEnabled');
    }

    /**
     * @param EBayMotorsProAutoAcceptEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProAutoAcceptEnabled($value)
    {
        $this->eBayMotorsProAutoAcceptEnabled = $value;
    }

    /**
     * @return EBayMotorsProAutoDeclineEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
        return $this->_dc($this->eBayMotorsProAutoDeclineEnabled, 'eBayMotorsProAutoDeclineEnabled');
    }

    /**
     * @param EBayMotorsProAutoDeclineEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProAutoDeclineEnabled($value)
    {
        $this->eBayMotorsProAutoDeclineEnabled = $value;
    }

    /**
     * @return EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->_dc($this->eBayMotorsProPaymentMethodCheckOutEnabled, 'eBayMotorsProPaymentMethodCheckOutEnabled');
    }

    /**
     * @param EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled($value)
    {
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $value;
    }

    /**
     * @return EBayMotorsProShippingMethodEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
        return $this->_dc($this->eBayMotorsProShippingMethodEnabled, 'eBayMotorsProShippingMethodEnabled');
    }

    /**
     * @param EBayMotorsProShippingMethodEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProShippingMethodEnabled($value)
    {
        $this->eBayMotorsProShippingMethodEnabled = $value;
    }

    /**
     * @return EBayMotorsProCounterOfferEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
        return $this->_dc($this->eBayMotorsProCounterOfferEnabled, 'eBayMotorsProCounterOfferEnabled');
    }

    /**
     * @param EBayMotorsProCounterOfferEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProCounterOfferEnabled($value)
    {
        $this->eBayMotorsProCounterOfferEnabled = $value;
    }

    /**
     * @return EBayMotorsProSellerContactDetailsEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->_dc($this->eBayMotorsProSellerContactDetailsEnabled, 'eBayMotorsProSellerContactDetailsEnabled');
    }

    /**
     * @param EBayMotorsProSellerContactDetailsEnabledDefinitionType|null $value
     * @return void
     */
    public function setEBayMotorsProSellerContactDetailsEnabled($value)
    {
        $this->eBayMotorsProSellerContactDetailsEnabled = $value;
    }

    /**
     * @return LocalMarketAdFormatEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketAdFormatEnabled()
    {
        return $this->_dc($this->LocalMarketAdFormatEnabled, 'LocalMarketAdFormatEnabled');
    }

    /**
     * @param LocalMarketAdFormatEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketAdFormatEnabled($value)
    {
        $this->LocalMarketAdFormatEnabled = $value;
    }

    /**
     * @return LocalMarketContactByPhoneEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
        return $this->_dc($this->LocalMarketContactByPhoneEnabled, 'LocalMarketContactByPhoneEnabled');
    }

    /**
     * @param LocalMarketContactByPhoneEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketContactByPhoneEnabled($value)
    {
        $this->LocalMarketContactByPhoneEnabled = $value;
    }

    /**
     * @return LocalMarketPhoneCountDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketPhoneCount()
    {
        return $this->_dc($this->LocalMarketPhoneCount, 'LocalMarketPhoneCount');
    }

    /**
     * @param LocalMarketPhoneCountDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketPhoneCount($value)
    {
        $this->LocalMarketPhoneCount = $value;
    }

    /**
     * @return LocalMarketContactByAddressEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketContactByAddressEnabled()
    {
        return $this->_dc($this->LocalMarketContactByAddressEnabled, 'LocalMarketContactByAddressEnabled');
    }

    /**
     * @param LocalMarketContactByAddressEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketContactByAddressEnabled($value)
    {
        $this->LocalMarketContactByAddressEnabled = $value;
    }

    /**
     * @return LocalMarketStreetCountDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketStreetCount()
    {
        return $this->_dc($this->LocalMarketStreetCount, 'LocalMarketStreetCount');
    }

    /**
     * @param LocalMarketStreetCountDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketStreetCount($value)
    {
        $this->LocalMarketStreetCount = $value;
    }

    /**
     * @return LocalMarketCompanyNameEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketCompanyNameEnabled()
    {
        return $this->_dc($this->LocalMarketCompanyNameEnabled, 'LocalMarketCompanyNameEnabled');
    }

    /**
     * @param LocalMarketCompanyNameEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketCompanyNameEnabled($value)
    {
        $this->LocalMarketCompanyNameEnabled = $value;
    }

    /**
     * @return LocalMarketContactByEmailEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketContactByEmailEnabled()
    {
        return $this->_dc($this->LocalMarketContactByEmailEnabled, 'LocalMarketContactByEmailEnabled');
    }

    /**
     * @param LocalMarketContactByEmailEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketContactByEmailEnabled($value)
    {
        $this->LocalMarketContactByEmailEnabled = $value;
    }

    /**
     * @return LocalMarketBestOfferEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketBestOfferEnabled()
    {
        return $this->_dc($this->LocalMarketBestOfferEnabled, 'LocalMarketBestOfferEnabled');
    }

    /**
     * @param LocalMarketBestOfferEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketBestOfferEnabled($value)
    {
        $this->LocalMarketBestOfferEnabled = $value;
    }

    /**
     * @return LocalMarketAutoAcceptEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
        return $this->_dc($this->LocalMarketAutoAcceptEnabled, 'LocalMarketAutoAcceptEnabled');
    }

    /**
     * @param LocalMarketAutoAcceptEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketAutoAcceptEnabled($value)
    {
        $this->LocalMarketAutoAcceptEnabled = $value;
    }

    /**
     * @return LocalMarketAutoDeclineEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
        return $this->_dc($this->LocalMarketAutoDeclineEnabled, 'LocalMarketAutoDeclineEnabled');
    }

    /**
     * @param LocalMarketAutoDeclineEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketAutoDeclineEnabled($value)
    {
        $this->LocalMarketAutoDeclineEnabled = $value;
    }

    /**
     * @return LocalMarketPaymentMethodCheckOutEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->_dc($this->LocalMarketPaymentMethodCheckOutEnabled, 'LocalMarketPaymentMethodCheckOutEnabled');
    }

    /**
     * @param LocalMarketPaymentMethodCheckOutEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled($value)
    {
        $this->LocalMarketPaymentMethodCheckOutEnabled = $value;
    }

    /**
     * @return LocalMarketShippingMethodEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketShippingMethodEnabled()
    {
        return $this->_dc($this->LocalMarketShippingMethodEnabled, 'LocalMarketShippingMethodEnabled');
    }

    /**
     * @param LocalMarketShippingMethodEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketShippingMethodEnabled($value)
    {
        $this->LocalMarketShippingMethodEnabled = $value;
    }

    /**
     * @return LocalMarketCounterOfferEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketCounterOfferEnabled()
    {
        return $this->_dc($this->LocalMarketCounterOfferEnabled, 'LocalMarketCounterOfferEnabled');
    }

    /**
     * @param LocalMarketCounterOfferEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketCounterOfferEnabled($value)
    {
        $this->LocalMarketCounterOfferEnabled = $value;
    }

    /**
     * @return LocalMarketSellerContactDetailsEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
        return $this->_dc($this->LocalMarketSellerContactDetailsEnabled, 'LocalMarketSellerContactDetailsEnabled');
    }

    /**
     * @param LocalMarketSellerContactDetailsEnabledDefinitionType|null $value
     * @return void
     */
    public function setLocalMarketSellerContactDetailsEnabled($value)
    {
        $this->LocalMarketSellerContactDetailsEnabled = $value;
    }

    /**
     * @return ClassifiedAdPhoneCountDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdPhoneCount()
    {
        return $this->_dc($this->ClassifiedAdPhoneCount, 'ClassifiedAdPhoneCount');
    }

    /**
     * @param ClassifiedAdPhoneCountDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdPhoneCount($value)
    {
        $this->ClassifiedAdPhoneCount = $value;
    }

    /**
     * @return ClassifiedAdContactByAddressEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
        return $this->_dc($this->ClassifiedAdContactByAddressEnabled, 'ClassifiedAdContactByAddressEnabled');
    }

    /**
     * @param ClassifiedAdContactByAddressEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdContactByAddressEnabled($value)
    {
        $this->ClassifiedAdContactByAddressEnabled = $value;
    }

    /**
     * @return ClassifiedAdStreetCountDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdStreetCount()
    {
        return $this->_dc($this->ClassifiedAdStreetCount, 'ClassifiedAdStreetCount');
    }

    /**
     * @param ClassifiedAdStreetCountDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdStreetCount($value)
    {
        $this->ClassifiedAdStreetCount = $value;
    }

    /**
     * @return ClassifiedAdCompanyNameEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
        return $this->_dc($this->ClassifiedAdCompanyNameEnabled, 'ClassifiedAdCompanyNameEnabled');
    }

    /**
     * @param ClassifiedAdCompanyNameEnabledDefinitionType|null $value
     * @return void
     */
    public function setClassifiedAdCompanyNameEnabled($value)
    {
        $this->ClassifiedAdCompanyNameEnabled = $value;
    }

    /**
     * @return SpecialitySubscriptionDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSpecialitySubscription()
    {
        return $this->_dc($this->SpecialitySubscription, 'SpecialitySubscription');
    }

    /**
     * @param SpecialitySubscriptionDefinitionType|null $value
     * @return void
     */
    public function setSpecialitySubscription($value)
    {
        $this->SpecialitySubscription = $value;
    }

    /**
     * @return RegularSubscriptionDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegularSubscription()
    {
        return $this->_dc($this->RegularSubscription, 'RegularSubscription');
    }

    /**
     * @param RegularSubscriptionDefinitionType|null $value
     * @return void
     */
    public function setRegularSubscription($value)
    {
        $this->RegularSubscription = $value;
    }

    /**
     * @return PremiumSubscriptionDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPremiumSubscription()
    {
        return $this->_dc($this->PremiumSubscription, 'PremiumSubscription');
    }

    /**
     * @param PremiumSubscriptionDefinitionType|null $value
     * @return void
     */
    public function setPremiumSubscription($value)
    {
        $this->PremiumSubscription = $value;
    }

    /**
     * @return NonSubscriptionDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNonSubscription()
    {
        return $this->_dc($this->NonSubscription, 'NonSubscription');
    }

    /**
     * @param NonSubscriptionDefinitionType|null $value
     * @return void
     */
    public function setNonSubscription($value)
    {
        $this->NonSubscription = $value;
    }

    /**
     * @return ReturnPolicyEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnPolicyEnabled()
    {
        return $this->_dc($this->ReturnPolicyEnabled, 'ReturnPolicyEnabled');
    }

    /**
     * @param ReturnPolicyEnabledDefinitionType|null $value
     * @return void
     */
    public function setReturnPolicyEnabled($value)
    {
        $this->ReturnPolicyEnabled = $value;
    }

    /**
     * @return HandlingTimeEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHandlingTimeEnabled()
    {
        return $this->_dc($this->HandlingTimeEnabled, 'HandlingTimeEnabled');
    }

    /**
     * @param HandlingTimeEnabledDefinitionType|null $value
     * @return void
     */
    public function setHandlingTimeEnabled($value)
    {
        $this->HandlingTimeEnabled = $value;
    }

    /**
     * @return PayPalRequiredForStoreOwnerDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalRequiredForStoreOwner()
    {
        return $this->_dc($this->PayPalRequiredForStoreOwner, 'PayPalRequiredForStoreOwner');
    }

    /**
     * @param PayPalRequiredForStoreOwnerDefinitionType|null $value
     * @return void
     */
    public function setPayPalRequiredForStoreOwner($value)
    {
        $this->PayPalRequiredForStoreOwner = $value;
    }

    /**
     * @return ReviseQuantityAllowedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReviseQuantityAllowed()
    {
        return $this->_dc($this->ReviseQuantityAllowed, 'ReviseQuantityAllowed');
    }

    /**
     * @param ReviseQuantityAllowedDefinitionType|null $value
     * @return void
     */
    public function setReviseQuantityAllowed($value)
    {
        $this->ReviseQuantityAllowed = $value;
    }

    /**
     * @return RevisePriceAllowedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRevisePriceAllowed()
    {
        return $this->_dc($this->RevisePriceAllowed, 'RevisePriceAllowed');
    }

    /**
     * @param RevisePriceAllowedDefinitionType|null $value
     * @return void
     */
    public function setRevisePriceAllowed($value)
    {
        $this->RevisePriceAllowed = $value;
    }

    /**
     * @return StoreOwnerExtendedListingDurationsEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->_dc($this->StoreOwnerExtendedListingDurationsEnabled, 'StoreOwnerExtendedListingDurationsEnabled');
    }

    /**
     * @param StoreOwnerExtendedListingDurationsEnabledDefinitionType|null $value
     * @return void
     */
    public function setStoreOwnerExtendedListingDurationsEnabled($value)
    {
        $this->StoreOwnerExtendedListingDurationsEnabled = $value;
    }

    /**
     * @return StoreOwnerExtendedListingDurationsDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreOwnerExtendedListingDurations()
    {
        return $this->_dc($this->StoreOwnerExtendedListingDurations, 'StoreOwnerExtendedListingDurations');
    }

    /**
     * @param StoreOwnerExtendedListingDurationsDefinitionType|null $value
     * @return void
     */
    public function setStoreOwnerExtendedListingDurations($value)
    {
        $this->StoreOwnerExtendedListingDurations = $value;
    }

    /**
     * @return PaymentMethodDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentMethod()
    {
        return $this->_dc($this->PaymentMethod, 'PaymentMethod');
    }

    /**
     * @param PaymentMethodDefinitionType|null $value
     * @return void
     */
    public function setPaymentMethod($value)
    {
        $this->PaymentMethod = $value;
    }

    /**
     * @return Group1MaxFlatShippingCostDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroup1MaxFlatShippingCost()
    {
        return $this->_dc($this->Group1MaxFlatShippingCost, 'Group1MaxFlatShippingCost');
    }

    /**
     * @param Group1MaxFlatShippingCostDefinitionType|null $value
     * @return void
     */
    public function setGroup1MaxFlatShippingCost($value)
    {
        $this->Group1MaxFlatShippingCost = $value;
    }

    /**
     * @return Group2MaxFlatShippingCostDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroup2MaxFlatShippingCost()
    {
        return $this->_dc($this->Group2MaxFlatShippingCost, 'Group2MaxFlatShippingCost');
    }

    /**
     * @param Group2MaxFlatShippingCostDefinitionType|null $value
     * @return void
     */
    public function setGroup2MaxFlatShippingCost($value)
    {
        $this->Group2MaxFlatShippingCost = $value;
    }

    /**
     * @return Group3MaxFlatShippingCostDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroup3MaxFlatShippingCost()
    {
        return $this->_dc($this->Group3MaxFlatShippingCost, 'Group3MaxFlatShippingCost');
    }

    /**
     * @param Group3MaxFlatShippingCostDefinitionType|null $value
     * @return void
     */
    public function setGroup3MaxFlatShippingCost($value)
    {
        $this->Group3MaxFlatShippingCost = $value;
    }

    /**
     * @return MaxFlatShippingCostCBTExemptDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxFlatShippingCostCBTExempt()
    {
        return $this->_dc($this->MaxFlatShippingCostCBTExempt, 'MaxFlatShippingCostCBTExempt');
    }

    /**
     * @param MaxFlatShippingCostCBTExemptDefinitionType|null $value
     * @return void
     */
    public function setMaxFlatShippingCostCBTExempt($value)
    {
        $this->MaxFlatShippingCostCBTExempt = $value;
    }

    /**
     * @return MaxFlatShippingCostDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxFlatShippingCost()
    {
        return $this->_dc($this->MaxFlatShippingCost, 'MaxFlatShippingCost');
    }

    /**
     * @param MaxFlatShippingCostDefinitionType|null $value
     * @return void
     */
    public function setMaxFlatShippingCost($value)
    {
        $this->MaxFlatShippingCost = $value;
    }

    /**
     * @return VariationsEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationsEnabled()
    {
        return $this->_dc($this->VariationsEnabled, 'VariationsEnabled');
    }

    /**
     * @param VariationsEnabledDefinitionType|null $value
     * @return void
     */
    public function setVariationsEnabled($value)
    {
        $this->VariationsEnabled = $value;
    }

    /**
     * @return AttributeConversionEnabledFeatureDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAttributeConversionEnabled()
    {
        return $this->_dc($this->AttributeConversionEnabled, 'AttributeConversionEnabled');
    }

    /**
     * @param AttributeConversionEnabledFeatureDefinitionType|null $value
     * @return void
     */
    public function setAttributeConversionEnabled($value)
    {
        $this->AttributeConversionEnabled = $value;
    }

    /**
     * @return FreeGalleryPlusEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFreeGalleryPlusEnabled()
    {
        return $this->_dc($this->FreeGalleryPlusEnabled, 'FreeGalleryPlusEnabled');
    }

    /**
     * @param FreeGalleryPlusEnabledDefinitionType|null $value
     * @return void
     */
    public function setFreeGalleryPlusEnabled($value)
    {
        $this->FreeGalleryPlusEnabled = $value;
    }

    /**
     * @return FreePicturePackEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFreePicturePackEnabled()
    {
        return $this->_dc($this->FreePicturePackEnabled, 'FreePicturePackEnabled');
    }

    /**
     * @param FreePicturePackEnabledDefinitionType|null $value
     * @return void
     */
    public function setFreePicturePackEnabled($value)
    {
        $this->FreePicturePackEnabled = $value;
    }

    /**
     * @return ItemCompatibilityEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemCompatibilityEnabled()
    {
        return $this->_dc($this->ItemCompatibilityEnabled, 'ItemCompatibilityEnabled');
    }

    /**
     * @param ItemCompatibilityEnabledDefinitionType|null $value
     * @return void
     */
    public function setItemCompatibilityEnabled($value)
    {
        $this->ItemCompatibilityEnabled = $value;
    }

    /**
     * @return MaxItemCompatibilityDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxItemCompatibility()
    {
        return $this->_dc($this->MaxItemCompatibility, 'MaxItemCompatibility');
    }

    /**
     * @param MaxItemCompatibilityDefinitionType|null $value
     * @return void
     */
    public function setMaxItemCompatibility($value)
    {
        $this->MaxItemCompatibility = $value;
    }

    /**
     * @return MinItemCompatibilityDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinItemCompatibility()
    {
        return $this->_dc($this->MinItemCompatibility, 'MinItemCompatibility');
    }

    /**
     * @param MinItemCompatibilityDefinitionType|null $value
     * @return void
     */
    public function setMinItemCompatibility($value)
    {
        $this->MinItemCompatibility = $value;
    }

    /**
     * @return ConditionEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConditionEnabled()
    {
        return $this->_dc($this->ConditionEnabled, 'ConditionEnabled');
    }

    /**
     * @param ConditionEnabledDefinitionType|null $value
     * @return void
     */
    public function setConditionEnabled($value)
    {
        $this->ConditionEnabled = $value;
    }

    /**
     * @return ConditionValuesDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConditionValues()
    {
        return $this->_dc($this->ConditionValues, 'ConditionValues');
    }

    /**
     * @param ConditionValuesDefinitionType|null $value
     * @return void
     */
    public function setConditionValues($value)
    {
        $this->ConditionValues = $value;
    }

    /**
     * @return ValueCategoryDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValueCategory()
    {
        return $this->_dc($this->ValueCategory, 'ValueCategory');
    }

    /**
     * @param ValueCategoryDefinitionType|null $value
     * @return void
     */
    public function setValueCategory($value)
    {
        $this->ValueCategory = $value;
    }

    /**
     * @return ProductCreationEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductCreationEnabled()
    {
        return $this->_dc($this->ProductCreationEnabled, 'ProductCreationEnabled');
    }

    /**
     * @param ProductCreationEnabledDefinitionType|null $value
     * @return void
     */
    public function setProductCreationEnabled($value)
    {
        $this->ProductCreationEnabled = $value;
    }

    /**
     * @return EANEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEANEnabled()
    {
        return $this->_dc($this->EANEnabled, 'EANEnabled');
    }

    /**
     * @param EANEnabledDefinitionType|null $value
     * @return void
     */
    public function setEANEnabled($value)
    {
        $this->EANEnabled = $value;
    }

    /**
     * @return ISBNEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getISBNEnabled()
    {
        return $this->_dc($this->ISBNEnabled, 'ISBNEnabled');
    }

    /**
     * @param ISBNEnabledDefinitionType|null $value
     * @return void
     */
    public function setISBNEnabled($value)
    {
        $this->ISBNEnabled = $value;
    }

    /**
     * @return UPCEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUPCEnabled()
    {
        return $this->_dc($this->UPCEnabled, 'UPCEnabled');
    }

    /**
     * @param UPCEnabledDefinitionType|null $value
     * @return void
     */
    public function setUPCEnabled($value)
    {
        $this->UPCEnabled = $value;
    }

    /**
     * @return CompatibleVehicleTypeDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCompatibleVehicleType()
    {
        return $this->_dc($this->CompatibleVehicleType, 'CompatibleVehicleType');
    }

    /**
     * @param CompatibleVehicleTypeDefinitionType|null $value
     * @return void
     */
    public function setCompatibleVehicleType($value)
    {
        $this->CompatibleVehicleType = $value;
    }

    /**
     * @return MaxGranularFitmentCountDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxGranularFitmentCount()
    {
        return $this->_dc($this->MaxGranularFitmentCount, 'MaxGranularFitmentCount');
    }

    /**
     * @param MaxGranularFitmentCountDefinitionType|null $value
     * @return void
     */
    public function setMaxGranularFitmentCount($value)
    {
        $this->MaxGranularFitmentCount = $value;
    }

    /**
     * @return PaymentOptionsGroupEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentOptionsGroup()
    {
        return $this->_dc($this->PaymentOptionsGroup, 'PaymentOptionsGroup');
    }

    /**
     * @param PaymentOptionsGroupEnabledDefinitionType|null $value
     * @return void
     */
    public function setPaymentOptionsGroup($value)
    {
        $this->PaymentOptionsGroup = $value;
    }

    /**
     * @return ProfileCategoryGroupDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingProfileCategoryGroup()
    {
        return $this->_dc($this->ShippingProfileCategoryGroup, 'ShippingProfileCategoryGroup');
    }

    /**
     * @param ProfileCategoryGroupDefinitionType|null $value
     * @return void
     */
    public function setShippingProfileCategoryGroup($value)
    {
        $this->ShippingProfileCategoryGroup = $value;
    }

    /**
     * @return ProfileCategoryGroupDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentProfileCategoryGroup()
    {
        return $this->_dc($this->PaymentProfileCategoryGroup, 'PaymentProfileCategoryGroup');
    }

    /**
     * @param ProfileCategoryGroupDefinitionType|null $value
     * @return void
     */
    public function setPaymentProfileCategoryGroup($value)
    {
        $this->PaymentProfileCategoryGroup = $value;
    }

    /**
     * @return ProfileCategoryGroupDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
        return $this->_dc($this->ReturnPolicyProfileCategoryGroup, 'ReturnPolicyProfileCategoryGroup');
    }

    /**
     * @param ProfileCategoryGroupDefinitionType|null $value
     * @return void
     */
    public function setReturnPolicyProfileCategoryGroup($value)
    {
        $this->ReturnPolicyProfileCategoryGroup = $value;
    }

    /**
     * @return VINSupportedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVINSupported()
    {
        return $this->_dc($this->VINSupported, 'VINSupported');
    }

    /**
     * @param VINSupportedDefinitionType|null $value
     * @return void
     */
    public function setVINSupported($value)
    {
        $this->VINSupported = $value;
    }

    /**
     * @return VRMSupportedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVRMSupported()
    {
        return $this->_dc($this->VRMSupported, 'VRMSupported');
    }

    /**
     * @param VRMSupportedDefinitionType|null $value
     * @return void
     */
    public function setVRMSupported($value)
    {
        $this->VRMSupported = $value;
    }

    /**
     * @return SellerProvidedTitleSupportedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerProvidedTitleSupported()
    {
        return $this->_dc($this->SellerProvidedTitleSupported, 'SellerProvidedTitleSupported');
    }

    /**
     * @param SellerProvidedTitleSupportedDefinitionType|null $value
     * @return void
     */
    public function setSellerProvidedTitleSupported($value)
    {
        $this->SellerProvidedTitleSupported = $value;
    }

    /**
     * @return DepositSupportedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDepositSupported()
    {
        return $this->_dc($this->DepositSupported, 'DepositSupported');
    }

    /**
     * @param DepositSupportedDefinitionType|null $value
     * @return void
     */
    public function setDepositSupported($value)
    {
        $this->DepositSupported = $value;
    }

    /**
     * @return GlobalShippingEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGlobalShippingEnabled()
    {
        return $this->_dc($this->GlobalShippingEnabled, 'GlobalShippingEnabled');
    }

    /**
     * @param GlobalShippingEnabledDefinitionType|null $value
     * @return void
     */
    public function setGlobalShippingEnabled($value)
    {
        $this->GlobalShippingEnabled = $value;
    }

    /**
     * @return AdditionalCompatibilityEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdditionalCompatibilityEnabled()
    {
        return $this->_dc($this->AdditionalCompatibilityEnabled, 'AdditionalCompatibilityEnabled');
    }

    /**
     * @param AdditionalCompatibilityEnabledDefinitionType|null $value
     * @return void
     */
    public function setAdditionalCompatibilityEnabled($value)
    {
        $this->AdditionalCompatibilityEnabled = $value;
    }

    /**
     * @return PickupDropOffEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupDropOffEnabled()
    {
        return $this->_dc($this->PickupDropOffEnabled, 'PickupDropOffEnabled');
    }

    /**
     * @param PickupDropOffEnabledDefinitionType|null $value
     * @return void
     */
    public function setPickupDropOffEnabled($value)
    {
        $this->PickupDropOffEnabled = $value;
    }

    /**
     * @return DigitalGoodDeliveryEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDigitalGoodDeliveryEnabled()
    {
        return $this->_dc($this->DigitalGoodDeliveryEnabled, 'DigitalGoodDeliveryEnabled');
    }

    /**
     * @param DigitalGoodDeliveryEnabledDefinitionType|null $value
     * @return void
     */
    public function setDigitalGoodDeliveryEnabled($value)
    {
        $this->DigitalGoodDeliveryEnabled = $value;
    }

    /**
     * @return EpidSupportedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEpidSupported()
    {
        return $this->_dc($this->EpidSupported, 'EpidSupported');
    }

    /**
     * @param EpidSupportedDefinitionType|null $value
     * @return void
     */
    public function setEpidSupported($value)
    {
        $this->EpidSupported = $value;
    }

    /**
     * @return KTypeSupportedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getKTypeSupported()
    {
        return $this->_dc($this->KTypeSupported, 'KTypeSupported');
    }

    /**
     * @param KTypeSupportedDefinitionType|null $value
     * @return void
     */
    public function setKTypeSupported($value)
    {
        $this->KTypeSupported = $value;
    }

    /**
     * @return ProductRequiredEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductRequiredEnabled()
    {
        return $this->_dc($this->ProductRequiredEnabled, 'ProductRequiredEnabled');
    }

    /**
     * @param ProductRequiredEnabledDefinitionType|null $value
     * @return void
     */
    public function setProductRequiredEnabled($value)
    {
        $this->ProductRequiredEnabled = $value;
    }

    /**
     * @return DomesticReturnsAcceptedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticReturnsAcceptedValues()
    {
        return $this->_dc($this->DomesticReturnsAcceptedValues, 'DomesticReturnsAcceptedValues');
    }

    /**
     * @param DomesticReturnsAcceptedDefinitionType|null $value
     * @return void
     */
    public function setDomesticReturnsAcceptedValues($value)
    {
        $this->DomesticReturnsAcceptedValues = $value;
    }

    /**
     * @return InternationalReturnsAcceptedDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalReturnsAcceptedValues()
    {
        return $this->_dc($this->InternationalReturnsAcceptedValues, 'InternationalReturnsAcceptedValues');
    }

    /**
     * @param InternationalReturnsAcceptedDefinitionType|null $value
     * @return void
     */
    public function setInternationalReturnsAcceptedValues($value)
    {
        $this->InternationalReturnsAcceptedValues = $value;
    }

    /**
     * @return DomesticReturnsDurationDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticReturnsDurationValues()
    {
        return $this->_dc($this->DomesticReturnsDurationValues, 'DomesticReturnsDurationValues');
    }

    /**
     * @param DomesticReturnsDurationDefinitionType|null $value
     * @return void
     */
    public function setDomesticReturnsDurationValues($value)
    {
        $this->DomesticReturnsDurationValues = $value;
    }

    /**
     * @return InternationalReturnsDurationDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalReturnsDurationValues()
    {
        return $this->_dc($this->InternationalReturnsDurationValues, 'InternationalReturnsDurationValues');
    }

    /**
     * @param InternationalReturnsDurationDefinitionType|null $value
     * @return void
     */
    public function setInternationalReturnsDurationValues($value)
    {
        $this->InternationalReturnsDurationValues = $value;
    }

    /**
     * @return DomesticReturnsShipmentPayeeDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticReturnsShipmentPayeeValues()
    {
        return $this->_dc($this->DomesticReturnsShipmentPayeeValues, 'DomesticReturnsShipmentPayeeValues');
    }

    /**
     * @param DomesticReturnsShipmentPayeeDefinitionType|null $value
     * @return void
     */
    public function setDomesticReturnsShipmentPayeeValues($value)
    {
        $this->DomesticReturnsShipmentPayeeValues = $value;
    }

    /**
     * @return InternationalReturnsShipmentPayeeDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalReturnsShipmentPayeeValues()
    {
        return $this->_dc($this->InternationalReturnsShipmentPayeeValues, 'InternationalReturnsShipmentPayeeValues');
    }

    /**
     * @param InternationalReturnsShipmentPayeeDefinitionType|null $value
     * @return void
     */
    public function setInternationalReturnsShipmentPayeeValues($value)
    {
        $this->InternationalReturnsShipmentPayeeValues = $value;
    }

    /**
     * @return DomesticRefundMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticRefundMethodValues()
    {
        return $this->_dc($this->DomesticRefundMethodValues, 'DomesticRefundMethodValues');
    }

    /**
     * @param DomesticRefundMethodCodeType|null $value
     * @return void
     */
    public function setDomesticRefundMethodValues($value)
    {
        $this->DomesticRefundMethodValues = $value;
    }

    /**
     * @return InternationalRefundMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalRefundMethodValues()
    {
        return $this->_dc($this->InternationalRefundMethodValues, 'InternationalRefundMethodValues');
    }

    /**
     * @param InternationalRefundMethodCodeType|null $value
     * @return void
     */
    public function setInternationalRefundMethodValues($value)
    {
        $this->InternationalRefundMethodValues = $value;
    }

    /**
     * @return ReturnPolicyDescriptionEnabledDefinitionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnPolicyDescriptionEnabled()
    {
        return $this->_dc($this->ReturnPolicyDescriptionEnabled, 'ReturnPolicyDescriptionEnabled');
    }

    /**
     * @param ReturnPolicyDescriptionEnabledDefinitionType|null $value
     * @return void
     */
    public function setReturnPolicyDescriptionEnabled($value)
    {
        $this->ReturnPolicyDescriptionEnabled = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ListingDurations' => ['type' => 'ListingDurationDefinitionsType', 'xmlns' => self::XMLNS],
            'ShippingTermsRequired' => ['type' => 'ShippingTermRequiredDefinitionType', 'xmlns' => self::XMLNS],
            'BestOfferEnabled' => ['type' => 'BestOfferEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'DutchBINEnabled' => ['type' => 'DutchBINEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'UserConsentRequired' => ['type' => 'UserConsentRequiredDefinitionType', 'xmlns' => self::XMLNS],
            'HomePageFeaturedEnabled' => ['type' => 'HomePageFeaturedEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ProPackEnabled' => ['type' => 'ProPackEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'BasicUpgradePackEnabled' => ['type' => 'BasicUpgradePackEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ValuePackEnabled' => ['type' => 'ValuePackEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ProPackPlusEnabled' => ['type' => 'ProPackPlusEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'AdFormatEnabled' => ['type' => 'AdFormatEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'BestOfferCounterEnabled' => ['type' => 'BestOfferCounterEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'BestOfferAutoDeclineEnabled' => ['type' => 'BestOfferAutoDeclineEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketSpecialitySubscription' => ['type' => 'LocalMarketSpecialitySubscriptionDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketRegularSubscription' => ['type' => 'LocalMarketRegularSubscriptionDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketPremiumSubscription' => ['type' => 'LocalMarketPremiumSubscriptionDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketNonSubscription' => ['type' => 'LocalMarketNonSubscriptionDefinitionType', 'xmlns' => self::XMLNS],
            'ExpressEnabled' => ['type' => 'ExpressEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ExpressPicturesRequired' => ['type' => 'ExpressPicturesRequiredDefinitionType', 'xmlns' => self::XMLNS],
            'ExpressConditionRequired' => ['type' => 'ExpressConditionRequiredDefinitionType', 'xmlns' => self::XMLNS],
            'MinimumReservePrice' => ['type' => 'MinimumReservePriceDefinitionType', 'xmlns' => self::XMLNS],
            'TransactionConfirmationRequestEnabled' => ['type' => 'TCREnabledDefinitionType', 'xmlns' => self::XMLNS],
            'SellerContactDetailsEnabled' => ['type' => 'SellerContactDetailsEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'StoreInventoryEnabled' => ['type' => 'StoreInventoryEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'SkypeMeTransactionalEnabled' => ['type' => 'SkypeMeTransactionalEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'SkypeMeNonTransactionalEnabled' => ['type' => 'SkypeMeNonTransactionalEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalListingDistancesRegular' => ['type' => 'LocalListingDistancesRegularDefinitionType', 'xmlns' => self::XMLNS],
            'LocalListingDistancesSpecialty' => ['type' => 'LocalListingDistancesSpecialtyDefinitionType', 'xmlns' => self::XMLNS],
            'LocalListingDistancesNonSubscription' => ['type' => 'LocalListingDistancesNonSubscriptionDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdPaymentMethodEnabled' => ['type' => 'ClassifiedAdPaymentMethodEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdShippingMethodEnabled' => ['type' => 'ClassifiedAdShippingMethodEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdBestOfferEnabled' => ['type' => 'ClassifiedAdBestOfferEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdCounterOfferEnabled' => ['type' => 'ClassifiedAdCounterOfferEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdAutoDeclineEnabled' => ['type' => 'ClassifiedAdAutoDeclineEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdContactByPhoneEnabled' => ['type' => 'ClassifiedAdContactByPhoneEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdContactByEmailEnabled' => ['type' => 'ClassifiedAdContactByEmailEnabledDefintionType', 'xmlns' => self::XMLNS],
            'SafePaymentRequired' => ['type' => 'SafePaymentRequiredDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdPayPerLeadEnabled' => ['type' => 'ClassifiedAdPayPerLeadEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ItemSpecificsEnabled' => ['type' => 'ItemSpecificsEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'PaisaPayFullEscrowEnabled' => ['type' => 'PaisaPayFullEscrowEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ISBNIdentifierEnabled' => ['type' => 'ISBNIdentifierEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'UPCIdentifierEnabled' => ['type' => 'UPCIdentifierEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'EANIdentifierEnabled' => ['type' => 'EANIdentifierEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'BrandMPNIdentifierEnabled' => ['type' => 'BrandMPNIdentifierEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'BestOfferAutoAcceptEnabled' => ['type' => 'BestOfferAutoAcceptEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdAutoAcceptEnabled' => ['type' => 'ClassifiedAdAutoAcceptEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'CrossBorderTradeNorthAmericaEnabled' => ['type' => 'CrossBorderTradeNorthAmericaEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'CrossBorderTradeGBEnabled' => ['type' => 'CrossBorderTradeGBEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'CrossBorderTradeAustraliaEnabled' => ['type' => 'CrossBorderTradeAustraliaEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'PayPalBuyerProtectionEnabled' => ['type' => 'PayPalBuyerProtectionEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'BuyerGuaranteeEnabled' => ['type' => 'BuyerGuaranteeEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'CombinedFixedPriceTreatmentEnabled' => ['type' => 'CombinedFixedPriceTreatmentEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'GalleryFeaturedDurations' => ['type' => 'ListingEnhancementDurationDefinitionType', 'xmlns' => self::XMLNS],
            'INEscrowWorkflowTimeline' => ['type' => 'INEscrowWorkflowTimelineDefinitionType', 'xmlns' => self::XMLNS],
            'PayPalRequired' => ['type' => 'PayPalRequiredDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProAdFormatEnabled' => ['type' => 'EBayMotorsProAdFormatEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProContactByPhoneEnabled' => ['type' => 'EBayMotorsProContactByPhoneEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProPhoneCount' => ['type' => 'EBayMotorsProPhoneCountDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProContactByAddressEnabled' => ['type' => 'EBayMotorsProContactByAddressEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProStreetCount' => ['type' => 'EBayMotorsProStreetCountDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProCompanyNameEnabled' => ['type' => 'EBayMotorsProCompanyNameEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProContactByEmailEnabled' => ['type' => 'EBayMotorsProContactByEmailEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProBestOfferEnabled' => ['type' => 'EBayMotorsProBestOfferEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProAutoAcceptEnabled' => ['type' => 'EBayMotorsProAutoAcceptEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProAutoDeclineEnabled' => ['type' => 'EBayMotorsProAutoDeclineEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProPaymentMethodCheckOutEnabled' => ['type' => 'EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProShippingMethodEnabled' => ['type' => 'EBayMotorsProShippingMethodEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProCounterOfferEnabled' => ['type' => 'EBayMotorsProCounterOfferEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'eBayMotorsProSellerContactDetailsEnabled' => ['type' => 'EBayMotorsProSellerContactDetailsEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketAdFormatEnabled' => ['type' => 'LocalMarketAdFormatEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketContactByPhoneEnabled' => ['type' => 'LocalMarketContactByPhoneEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketPhoneCount' => ['type' => 'LocalMarketPhoneCountDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketContactByAddressEnabled' => ['type' => 'LocalMarketContactByAddressEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketStreetCount' => ['type' => 'LocalMarketStreetCountDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketCompanyNameEnabled' => ['type' => 'LocalMarketCompanyNameEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketContactByEmailEnabled' => ['type' => 'LocalMarketContactByEmailEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketBestOfferEnabled' => ['type' => 'LocalMarketBestOfferEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketAutoAcceptEnabled' => ['type' => 'LocalMarketAutoAcceptEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketAutoDeclineEnabled' => ['type' => 'LocalMarketAutoDeclineEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketPaymentMethodCheckOutEnabled' => ['type' => 'LocalMarketPaymentMethodCheckOutEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketShippingMethodEnabled' => ['type' => 'LocalMarketShippingMethodEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketCounterOfferEnabled' => ['type' => 'LocalMarketCounterOfferEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'LocalMarketSellerContactDetailsEnabled' => ['type' => 'LocalMarketSellerContactDetailsEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdPhoneCount' => ['type' => 'ClassifiedAdPhoneCountDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdContactByAddressEnabled' => ['type' => 'ClassifiedAdContactByAddressEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdStreetCount' => ['type' => 'ClassifiedAdStreetCountDefinitionType', 'xmlns' => self::XMLNS],
            'ClassifiedAdCompanyNameEnabled' => ['type' => 'ClassifiedAdCompanyNameEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'SpecialitySubscription' => ['type' => 'SpecialitySubscriptionDefinitionType', 'xmlns' => self::XMLNS],
            'RegularSubscription' => ['type' => 'RegularSubscriptionDefinitionType', 'xmlns' => self::XMLNS],
            'PremiumSubscription' => ['type' => 'PremiumSubscriptionDefinitionType', 'xmlns' => self::XMLNS],
            'NonSubscription' => ['type' => 'NonSubscriptionDefinitionType', 'xmlns' => self::XMLNS],
            'ReturnPolicyEnabled' => ['type' => 'ReturnPolicyEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'HandlingTimeEnabled' => ['type' => 'HandlingTimeEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'PayPalRequiredForStoreOwner' => ['type' => 'PayPalRequiredForStoreOwnerDefinitionType', 'xmlns' => self::XMLNS],
            'ReviseQuantityAllowed' => ['type' => 'ReviseQuantityAllowedDefinitionType', 'xmlns' => self::XMLNS],
            'RevisePriceAllowed' => ['type' => 'RevisePriceAllowedDefinitionType', 'xmlns' => self::XMLNS],
            'StoreOwnerExtendedListingDurationsEnabled' => ['type' => 'StoreOwnerExtendedListingDurationsEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'StoreOwnerExtendedListingDurations' => ['type' => 'StoreOwnerExtendedListingDurationsDefinitionType', 'xmlns' => self::XMLNS],
            'PaymentMethod' => ['type' => 'PaymentMethodDefinitionType', 'xmlns' => self::XMLNS],
            'Group1MaxFlatShippingCost' => ['type' => 'Group1MaxFlatShippingCostDefinitionType', 'xmlns' => self::XMLNS],
            'Group2MaxFlatShippingCost' => ['type' => 'Group2MaxFlatShippingCostDefinitionType', 'xmlns' => self::XMLNS],
            'Group3MaxFlatShippingCost' => ['type' => 'Group3MaxFlatShippingCostDefinitionType', 'xmlns' => self::XMLNS],
            'MaxFlatShippingCostCBTExempt' => ['type' => 'MaxFlatShippingCostCBTExemptDefinitionType', 'xmlns' => self::XMLNS],
            'MaxFlatShippingCost' => ['type' => 'MaxFlatShippingCostDefinitionType', 'xmlns' => self::XMLNS],
            'VariationsEnabled' => ['type' => 'VariationsEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'AttributeConversionEnabled' => ['type' => 'AttributeConversionEnabledFeatureDefinitionType', 'xmlns' => self::XMLNS],
            'FreeGalleryPlusEnabled' => ['type' => 'FreeGalleryPlusEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'FreePicturePackEnabled' => ['type' => 'FreePicturePackEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ItemCompatibilityEnabled' => ['type' => 'ItemCompatibilityEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'MaxItemCompatibility' => ['type' => 'MaxItemCompatibilityDefinitionType', 'xmlns' => self::XMLNS],
            'MinItemCompatibility' => ['type' => 'MinItemCompatibilityDefinitionType', 'xmlns' => self::XMLNS],
            'ConditionEnabled' => ['type' => 'ConditionEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ConditionValues' => ['type' => 'ConditionValuesDefinitionType', 'xmlns' => self::XMLNS],
            'ValueCategory' => ['type' => 'ValueCategoryDefinitionType', 'xmlns' => self::XMLNS],
            'ProductCreationEnabled' => ['type' => 'ProductCreationEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'EANEnabled' => ['type' => 'EANEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ISBNEnabled' => ['type' => 'ISBNEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'UPCEnabled' => ['type' => 'UPCEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'CompatibleVehicleType' => ['type' => 'CompatibleVehicleTypeDefinitionType', 'xmlns' => self::XMLNS],
            'MaxGranularFitmentCount' => ['type' => 'MaxGranularFitmentCountDefinitionType', 'xmlns' => self::XMLNS],
            'PaymentOptionsGroup' => ['type' => 'PaymentOptionsGroupEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'ShippingProfileCategoryGroup' => ['type' => 'ProfileCategoryGroupDefinitionType', 'xmlns' => self::XMLNS],
            'PaymentProfileCategoryGroup' => ['type' => 'ProfileCategoryGroupDefinitionType', 'xmlns' => self::XMLNS],
            'ReturnPolicyProfileCategoryGroup' => ['type' => 'ProfileCategoryGroupDefinitionType', 'xmlns' => self::XMLNS],
            'VINSupported' => ['type' => 'VINSupportedDefinitionType', 'xmlns' => self::XMLNS],
            'VRMSupported' => ['type' => 'VRMSupportedDefinitionType', 'xmlns' => self::XMLNS],
            'SellerProvidedTitleSupported' => ['type' => 'SellerProvidedTitleSupportedDefinitionType', 'xmlns' => self::XMLNS],
            'DepositSupported' => ['type' => 'DepositSupportedDefinitionType', 'xmlns' => self::XMLNS],
            'GlobalShippingEnabled' => ['type' => 'GlobalShippingEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'AdditionalCompatibilityEnabled' => ['type' => 'AdditionalCompatibilityEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'PickupDropOffEnabled' => ['type' => 'PickupDropOffEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'DigitalGoodDeliveryEnabled' => ['type' => 'DigitalGoodDeliveryEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'EpidSupported' => ['type' => 'EpidSupportedDefinitionType', 'xmlns' => self::XMLNS],
            'KTypeSupported' => ['type' => 'KTypeSupportedDefinitionType', 'xmlns' => self::XMLNS],
            'ProductRequiredEnabled' => ['type' => 'ProductRequiredEnabledDefinitionType', 'xmlns' => self::XMLNS],
            'DomesticReturnsAcceptedValues' => ['type' => 'DomesticReturnsAcceptedDefinitionType', 'xmlns' => self::XMLNS],
            'InternationalReturnsAcceptedValues' => ['type' => 'InternationalReturnsAcceptedDefinitionType', 'xmlns' => self::XMLNS],
            'DomesticReturnsDurationValues' => ['type' => 'DomesticReturnsDurationDefinitionType', 'xmlns' => self::XMLNS],
            'InternationalReturnsDurationValues' => ['type' => 'InternationalReturnsDurationDefinitionType', 'xmlns' => self::XMLNS],
            'DomesticReturnsShipmentPayeeValues' => ['type' => 'DomesticReturnsShipmentPayeeDefinitionType', 'xmlns' => self::XMLNS],
            'InternationalReturnsShipmentPayeeValues' => ['type' => 'InternationalReturnsShipmentPayeeDefinitionType', 'xmlns' => self::XMLNS],
            'DomesticRefundMethodValues' => ['type' => 'DomesticRefundMethodCodeType', 'xmlns' => self::XMLNS],
            'InternationalRefundMethodValues' => ['type' => 'InternationalRefundMethodCodeType', 'xmlns' => self::XMLNS],
            'ReturnPolicyDescriptionEnabled' => ['type' => 'ReturnPolicyDescriptionEnabledDefinitionType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FeatureDefinitionsType::_register();
