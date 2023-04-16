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
 * Type defining the
 * Category
 * container that is returned in the
 * GetCategoryFeatures
 * response. A
 * Category
 * node is returned for each category that is relevant/applicable to the input criteria in the
 * GetCategoryFeatures
 * request. The
 * CategoryID
 * value identifies the eBay category. The rest of the
 * CategoryFeatureType
 * fields that are returned will be dependent on which
 * FeatureID
 * value(s) are specified in the
 * GetCategoryFeatures
 * request.
 **/
class CategoryFeatureType extends EbatNs_ComplexType
{
    const TAG = 'CategoryFeatureType';
    const NAME = 'CategoryFeatureType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var ListingDurationReferenceType[]|null
     */
    protected $ListingDuration = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShippingTermsRequired = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BestOfferEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DutchBINEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UserConsentRequired = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HomePageFeaturedEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ProPackEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BasicUpgradePackEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ValuePackEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ProPackPlusEnabled = null;

    /**
     * @var AdFormatEnabledCodeType|null
     */
    protected $AdFormatEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BestOfferCounterEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BestOfferAutoDeclineEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketSpecialitySubscription = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketRegularSubscription = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketPremiumSubscription = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketNonSubscription = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpressEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpressPicturesRequired = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpressConditionRequired = null;

    /**
     * @var float|null
     */
    protected $MinimumReservePrice = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SellerContactDetailsEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $TransactionConfirmationRequestEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $StoreInventoryEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SkypeMeTransactionalEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SkypeMeNonTransactionalEnabled = null;

    /**
     * @var ClassifiedAdPaymentMethodEnabledCodeType|null
     */
    protected $ClassifiedAdPaymentMethodEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdShippingMethodEnabled = null;

    /**
     * @var ClassifiedAdBestOfferEnabledCodeType|null
     */
    protected $ClassifiedAdBestOfferEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdCounterOfferEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdAutoDeclineEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdContactByPhoneEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdContactByEmailEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SafePaymentRequired = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdPayPerLeadEnabled = null;

    /**
     * @var ItemSpecificsEnabledCodeType|null
     */
    protected $ItemSpecificsEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PaisaPayFullEscrowEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BrandMPNIdentifierEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdAutoAcceptEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BestOfferAutoAcceptEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CrossBorderTradeNorthAmericaEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CrossBorderTradeGBEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CrossBorderTradeAustraliaEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PayPalBuyerProtectionEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BuyerGuaranteeEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CombinedFixedPriceTreatmentEnabled = null;

    /**
     * @var ListingEnhancementDurationReferenceType|null
     */
    protected $GalleryFeaturedDurations = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PayPalRequired = null;

    /**
     * @var AdFormatEnabledCodeType|null
     */
    protected $eBayMotorsProAdFormatEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayMotorsProContactByPhoneEnabled = null;

    /**
     * @var int|null
     */
    protected $eBayMotorsProPhoneCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayMotorsProContactByAddressEnabled = null;

    /**
     * @var int|null
     */
    protected $eBayMotorsProStreetCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayMotorsProCompanyNameEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayMotorsProContactByEmailEnabled = null;

    /**
     * @var ClassifiedAdBestOfferEnabledCodeType|null
     */
    protected $eBayMotorsProBestOfferEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayMotorsProAutoAcceptEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayMotorsProAutoDeclineEnabled = null;

    /**
     * @var ClassifiedAdPaymentMethodEnabledCodeType|null
     */
    protected $eBayMotorsProPaymentMethodCheckOutEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayMotorsProShippingMethodEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayMotorsProCounterOfferEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayMotorsProSellerContactDetailsEnabled = null;

    /**
     * @var AdFormatEnabledCodeType|null
     */
    protected $LocalMarketAdFormatEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketContactByPhoneEnabled = null;

    /**
     * @var int|null
     */
    protected $LocalMarketPhoneCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketContactByAddressEnabled = null;

    /**
     * @var int|null
     */
    protected $LocalMarketStreetCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketCompanyNameEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketContactByEmailEnabled = null;

    /**
     * @var ClassifiedAdBestOfferEnabledCodeType|null
     */
    protected $LocalMarketBestOfferEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketAutoAcceptEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketAutoDeclineEnabled = null;

    /**
     * @var ClassifiedAdPaymentMethodEnabledCodeType|null
     */
    protected $LocalMarketPaymentMethodCheckOutEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketShippingMethodEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketCounterOfferEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalMarketSellerContactDetailsEnabled = null;

    /**
     * @var int|null
     */
    protected $ClassifiedAdPhoneCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdContactByAddressEnabled = null;

    /**
     * @var int|null
     */
    protected $ClassifiedAdStreetCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ClassifiedAdCompanyNameEnabled = null;

    /**
     * @var GeographicExposureCodeType|null
     */
    protected $SpecialitySubscription = null;

    /**
     * @var GeographicExposureCodeType|null
     */
    protected $RegularSubscription = null;

    /**
     * @var GeographicExposureCodeType|null
     */
    protected $PremiumSubscription = null;

    /**
     * @var GeographicExposureCodeType|null
     */
    protected $NonSubscription = null;

    /**
     * @var INEscrowWorkflowTimelineCodeType|null
     */
    protected $INEscrowWorkflowTimeline = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PayPalRequiredForStoreOwner = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReviseQuantityAllowed = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $RevisePriceAllowed = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $StoreOwnerExtendedListingDurationsEnabled = null;

    /**
     * @var StoreOwnerExtendedListingDurationsType|null
     */
    protected $StoreOwnerExtendedListingDurations = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReturnPolicyEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HandlingTimeEnabled = null;

    /**
     * @var AmountType|null
     */
    protected $MaxFlatShippingCost = null;

    /**
     * @var AmountType|null
     */
    protected $Group1MaxFlatShippingCost = null;

    /**
     * @var AmountType|null
     */
    protected $Group2MaxFlatShippingCost = null;

    /**
     * @var AmountType|null
     */
    protected $Group3MaxFlatShippingCost = null;

    /**
     * @var BuyerPaymentMethodCodeType[]|null
     */
    protected $PaymentMethod = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $VariationsEnabled = null;

    /**
     * @var AttributeConversionEnabledCodeType|null
     */
    protected $AttributeConversionEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $FreeGalleryPlusEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $FreePicturePackEnabled = null;

    /**
     * @var ItemCompatibilityEnabledCodeType|null
     */
    protected $ItemCompatibilityEnabled = null;

    /**
     * @var int|null
     */
    protected $MinItemCompatibility = null;

    /**
     * @var int|null
     */
    protected $MaxItemCompatibility = null;

    /**
     * @var ConditionEnabledCodeType|null
     */
    protected $ConditionEnabled = null;

    /**
     * @var ConditionValuesType|null
     */
    protected $ConditionValues = null;

    /**
     * @var ConditionValuesType|null
     */
    protected $SpecialFeatures = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ValueCategory = null;

    /**
     * @var ProductCreationEnabledCodeType|null
     */
    protected $ProductCreationEnabled = null;

    /**
     * @var ProductIdentiferEnabledCodeType|null
     */
    protected $EANEnabled = null;

    /**
     * @var ProductIdentiferEnabledCodeType|null
     */
    protected $ISBNEnabled = null;

    /**
     * @var ProductIdentiferEnabledCodeType|null
     */
    protected $UPCEnabled = null;

    /**
     * @var int|null
     */
    protected $MaxGranularFitmentCount = null;

    /**
     * @var string|null
     */
    protected $CompatibleVehicleType = null;

    /**
     * @var PaymentOptionsGroupEnabledCodeType|null
     */
    protected $PaymentOptionsGroup = null;

    /**
     * @var ProfileCategoryGroupCodeType|null
     */
    protected $ShippingProfileCategoryGroup = null;

    /**
     * @var ProfileCategoryGroupCodeType|null
     */
    protected $PaymentProfileCategoryGroup = null;

    /**
     * @var ProfileCategoryGroupCodeType|null
     */
    protected $ReturnPolicyProfileCategoryGroup = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $VINSupported = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $VRMSupported = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SellerProvidedTitleSupported = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DepositSupported = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $GlobalShippingEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AdditionalCompatibilityEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PickupDropOffEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DigitalGoodDeliveryEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EpidSupported = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $KTypeSupported = null;

    /**
     * @var ProductRequiredEnabledCodeType|null
     */
    protected $ProductRequiredEnabled = null;

    /**
     * @var DomesticReturnsAcceptedCodeType|null
     */
    protected $DomesticReturnsAcceptedValues = null;

    /**
     * @var InternationalReturnsAcceptedCodeType|null
     */
    protected $InternationalReturnsAcceptedValues = null;

    /**
     * @var DomesticReturnsDurationCodeType|null
     */
    protected $DomesticReturnsDurationValues = null;

    /**
     * @var InternationalReturnsDurationCodeType|null
     */
    protected $InternationalReturnsDurationValues = null;

    /**
     * @var DomesticReturnsShipmentPayeeCodeType|null
     */
    protected $DomesticReturnsShipmentPayeeValues = null;

    /**
     * @var InternationalReturnsShipmentPayeeCodeType|null
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
     * @var bool|null "true" or "false"
     */
    protected $ReturnPolicyDescriptionEnabled = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
    }

    /**
     * @return ListingDurationReferenceType[]|ListingDurationReferenceType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getListingDuration($index = null)
    {
        return $this->_dc($index === null
            ? $this->ListingDuration
            : (count($this->ListingDuration) > $index
                ? $this->ListingDuration[$index]
                : null), 'ListingDuration');
    }

    /**
     * @param ListingDurationReferenceType|null|ListingDurationReferenceType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setListingDuration($value, $index = null)
    {
        if ($index === null) {
            $this->ListingDuration = $value;
        } else {
            $this->ListingDuration[$index] = [];
            
            foreach ($value as $item) {
                $this->addListingDuration($item);
            }
        }
    }

    /**
     * @param ListingDurationReferenceType|null $value
     * @return void
     */
    public function addListingDuration($value)
    {
        $this->ListingDuration[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingTermsRequired()
    {
        return $this->_dc($this->ShippingTermsRequired === 'true', 'ShippingTermsRequired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShippingTermsRequired($value)
    {
        $this->ShippingTermsRequired = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferEnabled()
    {
        return $this->_dc($this->BestOfferEnabled === 'true', 'BestOfferEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBestOfferEnabled($value)
    {
        $this->BestOfferEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDutchBINEnabled()
    {
        return $this->_dc($this->DutchBINEnabled === 'true', 'DutchBINEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDutchBINEnabled($value)
    {
        $this->DutchBINEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserConsentRequired()
    {
        return $this->_dc($this->UserConsentRequired === 'true', 'UserConsentRequired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUserConsentRequired($value)
    {
        $this->UserConsentRequired = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHomePageFeaturedEnabled()
    {
        return $this->_dc($this->HomePageFeaturedEnabled === 'true', 'HomePageFeaturedEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHomePageFeaturedEnabled($value)
    {
        $this->HomePageFeaturedEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProPackEnabled()
    {
        return $this->_dc($this->ProPackEnabled === 'true', 'ProPackEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setProPackEnabled($value)
    {
        $this->ProPackEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBasicUpgradePackEnabled()
    {
        return $this->_dc($this->BasicUpgradePackEnabled === 'true', 'BasicUpgradePackEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBasicUpgradePackEnabled($value)
    {
        $this->BasicUpgradePackEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValuePackEnabled()
    {
        return $this->_dc($this->ValuePackEnabled === 'true', 'ValuePackEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setValuePackEnabled($value)
    {
        $this->ValuePackEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProPackPlusEnabled()
    {
        return $this->_dc($this->ProPackPlusEnabled === 'true', 'ProPackPlusEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setProPackPlusEnabled($value)
    {
        $this->ProPackPlusEnabled = self::_bool($value);
    }

    /**
     * @return AdFormatEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdFormatEnabled()
    {
        return $this->_dc($this->AdFormatEnabled);
    }

    /**
     * @param AdFormatEnabledCodeType|null $value
     * @return void
     */
    public function setAdFormatEnabled($value)
    {
        $this->AdFormatEnabled = $this->_enum($value, AdFormatEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->_dc($this->BestOfferCounterEnabled === 'true', 'BestOfferCounterEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBestOfferCounterEnabled($value)
    {
        $this->BestOfferCounterEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->_dc($this->BestOfferAutoDeclineEnabled === 'true', 'BestOfferAutoDeclineEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBestOfferAutoDeclineEnabled($value)
    {
        $this->BestOfferAutoDeclineEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketSpecialitySubscription()
    {
        return $this->_dc($this->LocalMarketSpecialitySubscription === 'true', 'LocalMarketSpecialitySubscription');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketSpecialitySubscription($value)
    {
        $this->LocalMarketSpecialitySubscription = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketRegularSubscription()
    {
        return $this->_dc($this->LocalMarketRegularSubscription === 'true', 'LocalMarketRegularSubscription');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketRegularSubscription($value)
    {
        $this->LocalMarketRegularSubscription = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketPremiumSubscription()
    {
        return $this->_dc($this->LocalMarketPremiumSubscription === 'true', 'LocalMarketPremiumSubscription');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketPremiumSubscription($value)
    {
        $this->LocalMarketPremiumSubscription = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketNonSubscription()
    {
        return $this->_dc($this->LocalMarketNonSubscription === 'true', 'LocalMarketNonSubscription');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketNonSubscription($value)
    {
        $this->LocalMarketNonSubscription = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressEnabled()
    {
        return $this->_dc($this->ExpressEnabled === 'true', 'ExpressEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpressEnabled($value)
    {
        $this->ExpressEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressPicturesRequired()
    {
        return $this->_dc($this->ExpressPicturesRequired === 'true', 'ExpressPicturesRequired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpressPicturesRequired($value)
    {
        $this->ExpressPicturesRequired = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressConditionRequired()
    {
        return $this->_dc($this->ExpressConditionRequired === 'true', 'ExpressConditionRequired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpressConditionRequired($value)
    {
        $this->ExpressConditionRequired = self::_bool($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumReservePrice()
    {
        return $this->_dc($this->MinimumReservePrice, 'MinimumReservePrice');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setMinimumReservePrice($value)
    {
        $this->MinimumReservePrice = self::_float($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerContactDetailsEnabled()
    {
        return $this->_dc($this->SellerContactDetailsEnabled === 'true', 'SellerContactDetailsEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSellerContactDetailsEnabled($value)
    {
        $this->SellerContactDetailsEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionConfirmationRequestEnabled()
    {
        return $this->_dc($this->TransactionConfirmationRequestEnabled === 'true', 'TransactionConfirmationRequestEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setTransactionConfirmationRequestEnabled($value)
    {
        $this->TransactionConfirmationRequestEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreInventoryEnabled()
    {
        return $this->_dc($this->StoreInventoryEnabled === 'true', 'StoreInventoryEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setStoreInventoryEnabled($value)
    {
        $this->StoreInventoryEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSkypeMeTransactionalEnabled()
    {
        return $this->_dc($this->SkypeMeTransactionalEnabled === 'true', 'SkypeMeTransactionalEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSkypeMeTransactionalEnabled($value)
    {
        $this->SkypeMeTransactionalEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
        return $this->_dc($this->SkypeMeNonTransactionalEnabled === 'true', 'SkypeMeNonTransactionalEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSkypeMeNonTransactionalEnabled($value)
    {
        $this->SkypeMeNonTransactionalEnabled = self::_bool($value);
    }

    /**
     * @return ClassifiedAdPaymentMethodEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
        return $this->_dc($this->ClassifiedAdPaymentMethodEnabled);
    }

    /**
     * @param ClassifiedAdPaymentMethodEnabledCodeType|null $value
     * @return void
     */
    public function setClassifiedAdPaymentMethodEnabled($value)
    {
        $this->ClassifiedAdPaymentMethodEnabled = $this->_enum($value, ClassifiedAdPaymentMethodEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
        return $this->_dc($this->ClassifiedAdShippingMethodEnabled === 'true', 'ClassifiedAdShippingMethodEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdShippingMethodEnabled($value)
    {
        $this->ClassifiedAdShippingMethodEnabled = self::_bool($value);
    }

    /**
     * @return ClassifiedAdBestOfferEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdBestOfferEnabled()
    {
        return $this->_dc($this->ClassifiedAdBestOfferEnabled);
    }

    /**
     * @param ClassifiedAdBestOfferEnabledCodeType|null $value
     * @return void
     */
    public function setClassifiedAdBestOfferEnabled($value)
    {
        $this->ClassifiedAdBestOfferEnabled = $this->_enum($value, ClassifiedAdBestOfferEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
        return $this->_dc($this->ClassifiedAdCounterOfferEnabled === 'true', 'ClassifiedAdCounterOfferEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdCounterOfferEnabled($value)
    {
        $this->ClassifiedAdCounterOfferEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
        return $this->_dc($this->ClassifiedAdAutoDeclineEnabled === 'true', 'ClassifiedAdAutoDeclineEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdAutoDeclineEnabled($value)
    {
        $this->ClassifiedAdAutoDeclineEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
        return $this->_dc($this->ClassifiedAdContactByPhoneEnabled === 'true', 'ClassifiedAdContactByPhoneEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdContactByPhoneEnabled($value)
    {
        $this->ClassifiedAdContactByPhoneEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->_dc($this->ClassifiedAdContactByEmailEnabled === 'true', 'ClassifiedAdContactByEmailEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdContactByEmailEnabled($value)
    {
        $this->ClassifiedAdContactByEmailEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSafePaymentRequired()
    {
        return $this->_dc($this->SafePaymentRequired === 'true', 'SafePaymentRequired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSafePaymentRequired($value)
    {
        $this->SafePaymentRequired = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
        return $this->_dc($this->ClassifiedAdPayPerLeadEnabled === 'true', 'ClassifiedAdPayPerLeadEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdPayPerLeadEnabled($value)
    {
        $this->ClassifiedAdPayPerLeadEnabled = self::_bool($value);
    }

    /**
     * @return ItemSpecificsEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemSpecificsEnabled()
    {
        return $this->_dc($this->ItemSpecificsEnabled);
    }

    /**
     * @param ItemSpecificsEnabledCodeType|null $value
     * @return void
     */
    public function setItemSpecificsEnabled($value)
    {
        $this->ItemSpecificsEnabled = $this->_enum($value, ItemSpecificsEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaisaPayFullEscrowEnabled()
    {
        return $this->_dc($this->PaisaPayFullEscrowEnabled === 'true', 'PaisaPayFullEscrowEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPaisaPayFullEscrowEnabled($value)
    {
        $this->PaisaPayFullEscrowEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBrandMPNIdentifierEnabled()
    {
        return $this->_dc($this->BrandMPNIdentifierEnabled === 'true', 'BrandMPNIdentifierEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBrandMPNIdentifierEnabled($value)
    {
        $this->BrandMPNIdentifierEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
        return $this->_dc($this->ClassifiedAdAutoAcceptEnabled === 'true', 'ClassifiedAdAutoAcceptEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdAutoAcceptEnabled($value)
    {
        $this->ClassifiedAdAutoAcceptEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->_dc($this->BestOfferAutoAcceptEnabled === 'true', 'BestOfferAutoAcceptEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBestOfferAutoAcceptEnabled($value)
    {
        $this->BestOfferAutoAcceptEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
        return $this->_dc($this->CrossBorderTradeNorthAmericaEnabled === 'true', 'CrossBorderTradeNorthAmericaEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCrossBorderTradeNorthAmericaEnabled($value)
    {
        $this->CrossBorderTradeNorthAmericaEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossBorderTradeGBEnabled()
    {
        return $this->_dc($this->CrossBorderTradeGBEnabled === 'true', 'CrossBorderTradeGBEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCrossBorderTradeGBEnabled($value)
    {
        $this->CrossBorderTradeGBEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
        return $this->_dc($this->CrossBorderTradeAustraliaEnabled === 'true', 'CrossBorderTradeAustraliaEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCrossBorderTradeAustraliaEnabled($value)
    {
        $this->CrossBorderTradeAustraliaEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalBuyerProtectionEnabled()
    {
        return $this->_dc($this->PayPalBuyerProtectionEnabled === 'true', 'PayPalBuyerProtectionEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPayPalBuyerProtectionEnabled($value)
    {
        $this->PayPalBuyerProtectionEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerGuaranteeEnabled()
    {
        return $this->_dc($this->BuyerGuaranteeEnabled === 'true', 'BuyerGuaranteeEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBuyerGuaranteeEnabled($value)
    {
        $this->BuyerGuaranteeEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
        return $this->_dc($this->CombinedFixedPriceTreatmentEnabled === 'true', 'CombinedFixedPriceTreatmentEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCombinedFixedPriceTreatmentEnabled($value)
    {
        $this->CombinedFixedPriceTreatmentEnabled = self::_bool($value);
    }

    /**
     * @return ListingEnhancementDurationReferenceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGalleryFeaturedDurations()
    {
        return $this->_dc($this->GalleryFeaturedDurations, 'GalleryFeaturedDurations');
    }

    /**
     * @param ListingEnhancementDurationReferenceType|null $value
     * @return void
     */
    public function setGalleryFeaturedDurations($value)
    {
        $this->GalleryFeaturedDurations = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalRequired()
    {
        return $this->_dc($this->PayPalRequired === 'true', 'PayPalRequired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPayPalRequired($value)
    {
        $this->PayPalRequired = self::_bool($value);
    }

    /**
     * @return AdFormatEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
        return $this->_dc($this->eBayMotorsProAdFormatEnabled);
    }

    /**
     * @param AdFormatEnabledCodeType|null $value
     * @return void
     */
    public function setEBayMotorsProAdFormatEnabled($value)
    {
        $this->eBayMotorsProAdFormatEnabled = $this->_enum($value, AdFormatEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
        return $this->_dc($this->eBayMotorsProContactByPhoneEnabled === 'true', 'eBayMotorsProContactByPhoneEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayMotorsProContactByPhoneEnabled($value)
    {
        $this->eBayMotorsProContactByPhoneEnabled = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProPhoneCount()
    {
        return $this->_dc($this->eBayMotorsProPhoneCount, 'eBayMotorsProPhoneCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setEBayMotorsProPhoneCount($value)
    {
        $this->eBayMotorsProPhoneCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
        return $this->_dc($this->eBayMotorsProContactByAddressEnabled === 'true', 'eBayMotorsProContactByAddressEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayMotorsProContactByAddressEnabled($value)
    {
        $this->eBayMotorsProContactByAddressEnabled = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProStreetCount()
    {
        return $this->_dc($this->eBayMotorsProStreetCount, 'eBayMotorsProStreetCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setEBayMotorsProStreetCount($value)
    {
        $this->eBayMotorsProStreetCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
        return $this->_dc($this->eBayMotorsProCompanyNameEnabled === 'true', 'eBayMotorsProCompanyNameEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayMotorsProCompanyNameEnabled($value)
    {
        $this->eBayMotorsProCompanyNameEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
        return $this->_dc($this->eBayMotorsProContactByEmailEnabled === 'true', 'eBayMotorsProContactByEmailEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayMotorsProContactByEmailEnabled($value)
    {
        $this->eBayMotorsProContactByEmailEnabled = self::_bool($value);
    }

    /**
     * @return ClassifiedAdBestOfferEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
        return $this->_dc($this->eBayMotorsProBestOfferEnabled);
    }

    /**
     * @param ClassifiedAdBestOfferEnabledCodeType|null $value
     * @return void
     */
    public function setEBayMotorsProBestOfferEnabled($value)
    {
        $this->eBayMotorsProBestOfferEnabled = $this->_enum($value, ClassifiedAdBestOfferEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
        return $this->_dc($this->eBayMotorsProAutoAcceptEnabled === 'true', 'eBayMotorsProAutoAcceptEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayMotorsProAutoAcceptEnabled($value)
    {
        $this->eBayMotorsProAutoAcceptEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
        return $this->_dc($this->eBayMotorsProAutoDeclineEnabled === 'true', 'eBayMotorsProAutoDeclineEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayMotorsProAutoDeclineEnabled($value)
    {
        $this->eBayMotorsProAutoDeclineEnabled = self::_bool($value);
    }

    /**
     * @return ClassifiedAdPaymentMethodEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->_dc($this->eBayMotorsProPaymentMethodCheckOutEnabled);
    }

    /**
     * @param ClassifiedAdPaymentMethodEnabledCodeType|null $value
     * @return void
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled($value)
    {
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $this->_enum($value, ClassifiedAdPaymentMethodEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
        return $this->_dc($this->eBayMotorsProShippingMethodEnabled === 'true', 'eBayMotorsProShippingMethodEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayMotorsProShippingMethodEnabled($value)
    {
        $this->eBayMotorsProShippingMethodEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
        return $this->_dc($this->eBayMotorsProCounterOfferEnabled === 'true', 'eBayMotorsProCounterOfferEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayMotorsProCounterOfferEnabled($value)
    {
        $this->eBayMotorsProCounterOfferEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->_dc($this->eBayMotorsProSellerContactDetailsEnabled === 'true', 'eBayMotorsProSellerContactDetailsEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayMotorsProSellerContactDetailsEnabled($value)
    {
        $this->eBayMotorsProSellerContactDetailsEnabled = self::_bool($value);
    }

    /**
     * @return AdFormatEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketAdFormatEnabled()
    {
        return $this->_dc($this->LocalMarketAdFormatEnabled);
    }

    /**
     * @param AdFormatEnabledCodeType|null $value
     * @return void
     */
    public function setLocalMarketAdFormatEnabled($value)
    {
        $this->LocalMarketAdFormatEnabled = $this->_enum($value, AdFormatEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
        return $this->_dc($this->LocalMarketContactByPhoneEnabled === 'true', 'LocalMarketContactByPhoneEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketContactByPhoneEnabled($value)
    {
        $this->LocalMarketContactByPhoneEnabled = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketPhoneCount()
    {
        return $this->_dc($this->LocalMarketPhoneCount, 'LocalMarketPhoneCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLocalMarketPhoneCount($value)
    {
        $this->LocalMarketPhoneCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketContactByAddressEnabled()
    {
        return $this->_dc($this->LocalMarketContactByAddressEnabled === 'true', 'LocalMarketContactByAddressEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketContactByAddressEnabled($value)
    {
        $this->LocalMarketContactByAddressEnabled = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketStreetCount()
    {
        return $this->_dc($this->LocalMarketStreetCount, 'LocalMarketStreetCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLocalMarketStreetCount($value)
    {
        $this->LocalMarketStreetCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketCompanyNameEnabled()
    {
        return $this->_dc($this->LocalMarketCompanyNameEnabled === 'true', 'LocalMarketCompanyNameEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketCompanyNameEnabled($value)
    {
        $this->LocalMarketCompanyNameEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketContactByEmailEnabled()
    {
        return $this->_dc($this->LocalMarketContactByEmailEnabled === 'true', 'LocalMarketContactByEmailEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketContactByEmailEnabled($value)
    {
        $this->LocalMarketContactByEmailEnabled = self::_bool($value);
    }

    /**
     * @return ClassifiedAdBestOfferEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketBestOfferEnabled()
    {
        return $this->_dc($this->LocalMarketBestOfferEnabled);
    }

    /**
     * @param ClassifiedAdBestOfferEnabledCodeType|null $value
     * @return void
     */
    public function setLocalMarketBestOfferEnabled($value)
    {
        $this->LocalMarketBestOfferEnabled = $this->_enum($value, ClassifiedAdBestOfferEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
        return $this->_dc($this->LocalMarketAutoAcceptEnabled === 'true', 'LocalMarketAutoAcceptEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketAutoAcceptEnabled($value)
    {
        $this->LocalMarketAutoAcceptEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
        return $this->_dc($this->LocalMarketAutoDeclineEnabled === 'true', 'LocalMarketAutoDeclineEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketAutoDeclineEnabled($value)
    {
        $this->LocalMarketAutoDeclineEnabled = self::_bool($value);
    }

    /**
     * @return ClassifiedAdPaymentMethodEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->_dc($this->LocalMarketPaymentMethodCheckOutEnabled);
    }

    /**
     * @param ClassifiedAdPaymentMethodEnabledCodeType|null $value
     * @return void
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled($value)
    {
        $this->LocalMarketPaymentMethodCheckOutEnabled = $this->_enum($value, ClassifiedAdPaymentMethodEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketShippingMethodEnabled()
    {
        return $this->_dc($this->LocalMarketShippingMethodEnabled === 'true', 'LocalMarketShippingMethodEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketShippingMethodEnabled($value)
    {
        $this->LocalMarketShippingMethodEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketCounterOfferEnabled()
    {
        return $this->_dc($this->LocalMarketCounterOfferEnabled === 'true', 'LocalMarketCounterOfferEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketCounterOfferEnabled($value)
    {
        $this->LocalMarketCounterOfferEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
        return $this->_dc($this->LocalMarketSellerContactDetailsEnabled === 'true', 'LocalMarketSellerContactDetailsEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalMarketSellerContactDetailsEnabled($value)
    {
        $this->LocalMarketSellerContactDetailsEnabled = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdPhoneCount()
    {
        return $this->_dc($this->ClassifiedAdPhoneCount, 'ClassifiedAdPhoneCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setClassifiedAdPhoneCount($value)
    {
        $this->ClassifiedAdPhoneCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
        return $this->_dc($this->ClassifiedAdContactByAddressEnabled === 'true', 'ClassifiedAdContactByAddressEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdContactByAddressEnabled($value)
    {
        $this->ClassifiedAdContactByAddressEnabled = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdStreetCount()
    {
        return $this->_dc($this->ClassifiedAdStreetCount, 'ClassifiedAdStreetCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setClassifiedAdStreetCount($value)
    {
        $this->ClassifiedAdStreetCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
        return $this->_dc($this->ClassifiedAdCompanyNameEnabled === 'true', 'ClassifiedAdCompanyNameEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setClassifiedAdCompanyNameEnabled($value)
    {
        $this->ClassifiedAdCompanyNameEnabled = self::_bool($value);
    }

    /**
     * @return GeographicExposureCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSpecialitySubscription()
    {
        return $this->_dc($this->SpecialitySubscription);
    }

    /**
     * @param GeographicExposureCodeType|null $value
     * @return void
     */
    public function setSpecialitySubscription($value)
    {
        $this->SpecialitySubscription = $this->_enum($value, GeographicExposureCodeType::class);
    }

    /**
     * @return GeographicExposureCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegularSubscription()
    {
        return $this->_dc($this->RegularSubscription);
    }

    /**
     * @param GeographicExposureCodeType|null $value
     * @return void
     */
    public function setRegularSubscription($value)
    {
        $this->RegularSubscription = $this->_enum($value, GeographicExposureCodeType::class);
    }

    /**
     * @return GeographicExposureCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPremiumSubscription()
    {
        return $this->_dc($this->PremiumSubscription);
    }

    /**
     * @param GeographicExposureCodeType|null $value
     * @return void
     */
    public function setPremiumSubscription($value)
    {
        $this->PremiumSubscription = $this->_enum($value, GeographicExposureCodeType::class);
    }

    /**
     * @return GeographicExposureCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNonSubscription()
    {
        return $this->_dc($this->NonSubscription);
    }

    /**
     * @param GeographicExposureCodeType|null $value
     * @return void
     */
    public function setNonSubscription($value)
    {
        $this->NonSubscription = $this->_enum($value, GeographicExposureCodeType::class);
    }

    /**
     * @return INEscrowWorkflowTimelineCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getINEscrowWorkflowTimeline()
    {
        return $this->_dc($this->INEscrowWorkflowTimeline);
    }

    /**
     * @param INEscrowWorkflowTimelineCodeType|null $value
     * @return void
     */
    public function setINEscrowWorkflowTimeline($value)
    {
        $this->INEscrowWorkflowTimeline = $this->_enum($value, INEscrowWorkflowTimelineCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalRequiredForStoreOwner()
    {
        return $this->_dc($this->PayPalRequiredForStoreOwner === 'true', 'PayPalRequiredForStoreOwner');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPayPalRequiredForStoreOwner($value)
    {
        $this->PayPalRequiredForStoreOwner = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReviseQuantityAllowed()
    {
        return $this->_dc($this->ReviseQuantityAllowed === 'true', 'ReviseQuantityAllowed');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReviseQuantityAllowed($value)
    {
        $this->ReviseQuantityAllowed = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRevisePriceAllowed()
    {
        return $this->_dc($this->RevisePriceAllowed === 'true', 'RevisePriceAllowed');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRevisePriceAllowed($value)
    {
        $this->RevisePriceAllowed = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->_dc($this->StoreOwnerExtendedListingDurationsEnabled === 'true', 'StoreOwnerExtendedListingDurationsEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setStoreOwnerExtendedListingDurationsEnabled($value)
    {
        $this->StoreOwnerExtendedListingDurationsEnabled = self::_bool($value);
    }

    /**
     * @return StoreOwnerExtendedListingDurationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreOwnerExtendedListingDurations()
    {
        return $this->_dc($this->StoreOwnerExtendedListingDurations, 'StoreOwnerExtendedListingDurations');
    }

    /**
     * @param StoreOwnerExtendedListingDurationsType|null $value
     * @return void
     */
    public function setStoreOwnerExtendedListingDurations($value)
    {
        $this->StoreOwnerExtendedListingDurations = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnPolicyEnabled()
    {
        return $this->_dc($this->ReturnPolicyEnabled === 'true', 'ReturnPolicyEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReturnPolicyEnabled($value)
    {
        $this->ReturnPolicyEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHandlingTimeEnabled()
    {
        return $this->_dc($this->HandlingTimeEnabled === 'true', 'HandlingTimeEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHandlingTimeEnabled($value)
    {
        $this->HandlingTimeEnabled = self::_bool($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxFlatShippingCost()
    {
        return $this->_dc($this->MaxFlatShippingCost, 'MaxFlatShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMaxFlatShippingCost($value)
    {
        $this->MaxFlatShippingCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroup1MaxFlatShippingCost()
    {
        return $this->_dc($this->Group1MaxFlatShippingCost, 'Group1MaxFlatShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setGroup1MaxFlatShippingCost($value)
    {
        $this->Group1MaxFlatShippingCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroup2MaxFlatShippingCost()
    {
        return $this->_dc($this->Group2MaxFlatShippingCost, 'Group2MaxFlatShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setGroup2MaxFlatShippingCost($value)
    {
        $this->Group2MaxFlatShippingCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroup3MaxFlatShippingCost()
    {
        return $this->_dc($this->Group3MaxFlatShippingCost, 'Group3MaxFlatShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setGroup3MaxFlatShippingCost($value)
    {
        $this->Group3MaxFlatShippingCost = $value;
    }

    /**
     * @return string[]|BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPaymentMethod($index = null)
    {
        return $this->_dc($index === null
            ? $this->PaymentMethod
            : (count($this->PaymentMethod) > $index
                ? $this->PaymentMethod[$index]
                : null));
    }

    /**
     * @param BuyerPaymentMethodCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPaymentMethod($value, $index = null)
    {
        if ($index === null) {
            $this->PaymentMethod = $value;
        } else {
            $this->PaymentMethod[$index] = [];
            
            foreach ($value as $item) {
                $this->addPaymentMethod($item);
            }
        }
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
     * @return void
     */
    public function addPaymentMethod($value)
    {
        $this->PaymentMethod[] = $this->_enum($value, BuyerPaymentMethodCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationsEnabled()
    {
        return $this->_dc($this->VariationsEnabled === 'true', 'VariationsEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setVariationsEnabled($value)
    {
        $this->VariationsEnabled = self::_bool($value);
    }

    /**
     * @return AttributeConversionEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAttributeConversionEnabled()
    {
        return $this->_dc($this->AttributeConversionEnabled);
    }

    /**
     * @param AttributeConversionEnabledCodeType|null $value
     * @return void
     */
    public function setAttributeConversionEnabled($value)
    {
        $this->AttributeConversionEnabled = $this->_enum($value, AttributeConversionEnabledCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFreeGalleryPlusEnabled()
    {
        return $this->_dc($this->FreeGalleryPlusEnabled === 'true', 'FreeGalleryPlusEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFreeGalleryPlusEnabled($value)
    {
        $this->FreeGalleryPlusEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFreePicturePackEnabled()
    {
        return $this->_dc($this->FreePicturePackEnabled === 'true', 'FreePicturePackEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFreePicturePackEnabled($value)
    {
        $this->FreePicturePackEnabled = self::_bool($value);
    }

    /**
     * @return ItemCompatibilityEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemCompatibilityEnabled()
    {
        return $this->_dc($this->ItemCompatibilityEnabled);
    }

    /**
     * @param ItemCompatibilityEnabledCodeType|null $value
     * @return void
     */
    public function setItemCompatibilityEnabled($value)
    {
        $this->ItemCompatibilityEnabled = $this->_enum($value, ItemCompatibilityEnabledCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinItemCompatibility()
    {
        return $this->_dc($this->MinItemCompatibility, 'MinItemCompatibility');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMinItemCompatibility($value)
    {
        $this->MinItemCompatibility = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxItemCompatibility()
    {
        return $this->_dc($this->MaxItemCompatibility, 'MaxItemCompatibility');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxItemCompatibility($value)
    {
        $this->MaxItemCompatibility = self::_int($value);
    }

    /**
     * @return ConditionEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConditionEnabled()
    {
        return $this->_dc($this->ConditionEnabled);
    }

    /**
     * @param ConditionEnabledCodeType|null $value
     * @return void
     */
    public function setConditionEnabled($value)
    {
        $this->ConditionEnabled = $this->_enum($value, ConditionEnabledCodeType::class);
    }

    /**
     * @return ConditionValuesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConditionValues()
    {
        return $this->_dc($this->ConditionValues, 'ConditionValues');
    }

    /**
     * @param ConditionValuesType|null $value
     * @return void
     */
    public function setConditionValues($value)
    {
        $this->ConditionValues = $value;
    }

    /**
     * @return ConditionValuesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSpecialFeatures()
    {
        return $this->_dc($this->SpecialFeatures, 'SpecialFeatures');
    }

    /**
     * @param ConditionValuesType|null $value
     * @return void
     */
    public function setSpecialFeatures($value)
    {
        $this->SpecialFeatures = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValueCategory()
    {
        return $this->_dc($this->ValueCategory === 'true', 'ValueCategory');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setValueCategory($value)
    {
        $this->ValueCategory = self::_bool($value);
    }

    /**
     * @return ProductCreationEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductCreationEnabled()
    {
        return $this->_dc($this->ProductCreationEnabled);
    }

    /**
     * @param ProductCreationEnabledCodeType|null $value
     * @return void
     */
    public function setProductCreationEnabled($value)
    {
        $this->ProductCreationEnabled = $this->_enum($value, ProductCreationEnabledCodeType::class);
    }

    /**
     * @return ProductIdentiferEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEANEnabled()
    {
        return $this->_dc($this->EANEnabled);
    }

    /**
     * @param ProductIdentiferEnabledCodeType|null $value
     * @return void
     */
    public function setEANEnabled($value)
    {
        $this->EANEnabled = $this->_enum($value, ProductIdentiferEnabledCodeType::class);
    }

    /**
     * @return ProductIdentiferEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getISBNEnabled()
    {
        return $this->_dc($this->ISBNEnabled);
    }

    /**
     * @param ProductIdentiferEnabledCodeType|null $value
     * @return void
     */
    public function setISBNEnabled($value)
    {
        $this->ISBNEnabled = $this->_enum($value, ProductIdentiferEnabledCodeType::class);
    }

    /**
     * @return ProductIdentiferEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUPCEnabled()
    {
        return $this->_dc($this->UPCEnabled);
    }

    /**
     * @param ProductIdentiferEnabledCodeType|null $value
     * @return void
     */
    public function setUPCEnabled($value)
    {
        $this->UPCEnabled = $this->_enum($value, ProductIdentiferEnabledCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxGranularFitmentCount()
    {
        return $this->_dc($this->MaxGranularFitmentCount, 'MaxGranularFitmentCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxGranularFitmentCount($value)
    {
        $this->MaxGranularFitmentCount = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCompatibleVehicleType()
    {
        return $this->_dc($this->CompatibleVehicleType, 'CompatibleVehicleType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCompatibleVehicleType($value)
    {
        $this->CompatibleVehicleType = self::_string($value);
    }

    /**
     * @return PaymentOptionsGroupEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentOptionsGroup()
    {
        return $this->_dc($this->PaymentOptionsGroup);
    }

    /**
     * @param PaymentOptionsGroupEnabledCodeType|null $value
     * @return void
     */
    public function setPaymentOptionsGroup($value)
    {
        $this->PaymentOptionsGroup = $this->_enum($value, PaymentOptionsGroupEnabledCodeType::class);
    }

    /**
     * @return ProfileCategoryGroupCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingProfileCategoryGroup()
    {
        return $this->_dc($this->ShippingProfileCategoryGroup);
    }

    /**
     * @param ProfileCategoryGroupCodeType|null $value
     * @return void
     */
    public function setShippingProfileCategoryGroup($value)
    {
        $this->ShippingProfileCategoryGroup = $this->_enum($value, ProfileCategoryGroupCodeType::class);
    }

    /**
     * @return ProfileCategoryGroupCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentProfileCategoryGroup()
    {
        return $this->_dc($this->PaymentProfileCategoryGroup);
    }

    /**
     * @param ProfileCategoryGroupCodeType|null $value
     * @return void
     */
    public function setPaymentProfileCategoryGroup($value)
    {
        $this->PaymentProfileCategoryGroup = $this->_enum($value, ProfileCategoryGroupCodeType::class);
    }

    /**
     * @return ProfileCategoryGroupCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
        return $this->_dc($this->ReturnPolicyProfileCategoryGroup);
    }

    /**
     * @param ProfileCategoryGroupCodeType|null $value
     * @return void
     */
    public function setReturnPolicyProfileCategoryGroup($value)
    {
        $this->ReturnPolicyProfileCategoryGroup = $this->_enum($value, ProfileCategoryGroupCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVINSupported()
    {
        return $this->_dc($this->VINSupported === 'true', 'VINSupported');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setVINSupported($value)
    {
        $this->VINSupported = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVRMSupported()
    {
        return $this->_dc($this->VRMSupported === 'true', 'VRMSupported');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setVRMSupported($value)
    {
        $this->VRMSupported = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerProvidedTitleSupported()
    {
        return $this->_dc($this->SellerProvidedTitleSupported === 'true', 'SellerProvidedTitleSupported');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSellerProvidedTitleSupported($value)
    {
        $this->SellerProvidedTitleSupported = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDepositSupported()
    {
        return $this->_dc($this->DepositSupported === 'true', 'DepositSupported');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDepositSupported($value)
    {
        $this->DepositSupported = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGlobalShippingEnabled()
    {
        return $this->_dc($this->GlobalShippingEnabled === 'true', 'GlobalShippingEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setGlobalShippingEnabled($value)
    {
        $this->GlobalShippingEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdditionalCompatibilityEnabled()
    {
        return $this->_dc($this->AdditionalCompatibilityEnabled === 'true', 'AdditionalCompatibilityEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAdditionalCompatibilityEnabled($value)
    {
        $this->AdditionalCompatibilityEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupDropOffEnabled()
    {
        return $this->_dc($this->PickupDropOffEnabled === 'true', 'PickupDropOffEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPickupDropOffEnabled($value)
    {
        $this->PickupDropOffEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDigitalGoodDeliveryEnabled()
    {
        return $this->_dc($this->DigitalGoodDeliveryEnabled === 'true', 'DigitalGoodDeliveryEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDigitalGoodDeliveryEnabled($value)
    {
        $this->DigitalGoodDeliveryEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEpidSupported()
    {
        return $this->_dc($this->EpidSupported === 'true', 'EpidSupported');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEpidSupported($value)
    {
        $this->EpidSupported = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getKTypeSupported()
    {
        return $this->_dc($this->KTypeSupported === 'true', 'KTypeSupported');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setKTypeSupported($value)
    {
        $this->KTypeSupported = self::_bool($value);
    }

    /**
     * @return ProductRequiredEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductRequiredEnabled()
    {
        return $this->_dc($this->ProductRequiredEnabled);
    }

    /**
     * @param ProductRequiredEnabledCodeType|null $value
     * @return void
     */
    public function setProductRequiredEnabled($value)
    {
        $this->ProductRequiredEnabled = $this->_enum($value, ProductRequiredEnabledCodeType::class);
    }

    /**
     * @return DomesticReturnsAcceptedCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticReturnsAcceptedValues()
    {
        return $this->_dc($this->DomesticReturnsAcceptedValues, 'DomesticReturnsAcceptedValues');
    }

    /**
     * @param DomesticReturnsAcceptedCodeType|null $value
     * @return void
     */
    public function setDomesticReturnsAcceptedValues($value)
    {
        $this->DomesticReturnsAcceptedValues = $value;
    }

    /**
     * @return InternationalReturnsAcceptedCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalReturnsAcceptedValues()
    {
        return $this->_dc($this->InternationalReturnsAcceptedValues, 'InternationalReturnsAcceptedValues');
    }

    /**
     * @param InternationalReturnsAcceptedCodeType|null $value
     * @return void
     */
    public function setInternationalReturnsAcceptedValues($value)
    {
        $this->InternationalReturnsAcceptedValues = $value;
    }

    /**
     * @return DomesticReturnsDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticReturnsDurationValues()
    {
        return $this->_dc($this->DomesticReturnsDurationValues, 'DomesticReturnsDurationValues');
    }

    /**
     * @param DomesticReturnsDurationCodeType|null $value
     * @return void
     */
    public function setDomesticReturnsDurationValues($value)
    {
        $this->DomesticReturnsDurationValues = $value;
    }

    /**
     * @return InternationalReturnsDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalReturnsDurationValues()
    {
        return $this->_dc($this->InternationalReturnsDurationValues, 'InternationalReturnsDurationValues');
    }

    /**
     * @param InternationalReturnsDurationCodeType|null $value
     * @return void
     */
    public function setInternationalReturnsDurationValues($value)
    {
        $this->InternationalReturnsDurationValues = $value;
    }

    /**
     * @return DomesticReturnsShipmentPayeeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticReturnsShipmentPayeeValues()
    {
        return $this->_dc($this->DomesticReturnsShipmentPayeeValues, 'DomesticReturnsShipmentPayeeValues');
    }

    /**
     * @param DomesticReturnsShipmentPayeeCodeType|null $value
     * @return void
     */
    public function setDomesticReturnsShipmentPayeeValues($value)
    {
        $this->DomesticReturnsShipmentPayeeValues = $value;
    }

    /**
     * @return InternationalReturnsShipmentPayeeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalReturnsShipmentPayeeValues()
    {
        return $this->_dc($this->InternationalReturnsShipmentPayeeValues, 'InternationalReturnsShipmentPayeeValues');
    }

    /**
     * @param InternationalReturnsShipmentPayeeCodeType|null $value
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnPolicyDescriptionEnabled()
    {
        return $this->_dc($this->ReturnPolicyDescriptionEnabled === 'true', 'ReturnPolicyDescriptionEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReturnPolicyDescriptionEnabled($value)
    {
        $this->ReturnPolicyDescriptionEnabled = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CategoryID' => [],
            'ListingDuration' => ['type' => 'ListingDurationReferenceType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingTermsRequired' => ['type' => 'bool'],
            'BestOfferEnabled' => ['type' => 'bool'],
            'DutchBINEnabled' => ['type' => 'bool'],
            'UserConsentRequired' => ['type' => 'bool'],
            'HomePageFeaturedEnabled' => ['type' => 'bool'],
            'ProPackEnabled' => ['type' => 'bool'],
            'BasicUpgradePackEnabled' => ['type' => 'bool'],
            'ValuePackEnabled' => ['type' => 'bool'],
            'ProPackPlusEnabled' => ['type' => 'bool'],
            'AdFormatEnabled' => ['type' => 'AdFormatEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BestOfferCounterEnabled' => ['type' => 'bool'],
            'BestOfferAutoDeclineEnabled' => ['type' => 'bool'],
            'LocalMarketSpecialitySubscription' => ['type' => 'bool'],
            'LocalMarketRegularSubscription' => ['type' => 'bool'],
            'LocalMarketPremiumSubscription' => ['type' => 'bool'],
            'LocalMarketNonSubscription' => ['type' => 'bool'],
            'ExpressEnabled' => ['type' => 'bool'],
            'ExpressPicturesRequired' => ['type' => 'bool'],
            'ExpressConditionRequired' => ['type' => 'bool'],
            'MinimumReservePrice' => ['type' => 'float'],
            'SellerContactDetailsEnabled' => ['type' => 'bool'],
            'TransactionConfirmationRequestEnabled' => ['type' => 'bool'],
            'StoreInventoryEnabled' => ['type' => 'bool'],
            'SkypeMeTransactionalEnabled' => ['type' => 'bool'],
            'SkypeMeNonTransactionalEnabled' => ['type' => 'bool'],
            'ClassifiedAdPaymentMethodEnabled' => ['type' => 'ClassifiedAdPaymentMethodEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ClassifiedAdShippingMethodEnabled' => ['type' => 'bool'],
            'ClassifiedAdBestOfferEnabled' => ['type' => 'ClassifiedAdBestOfferEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ClassifiedAdCounterOfferEnabled' => ['type' => 'bool'],
            'ClassifiedAdAutoDeclineEnabled' => ['type' => 'bool'],
            'ClassifiedAdContactByPhoneEnabled' => ['type' => 'bool'],
            'ClassifiedAdContactByEmailEnabled' => ['type' => 'bool'],
            'SafePaymentRequired' => ['type' => 'bool'],
            'ClassifiedAdPayPerLeadEnabled' => ['type' => 'bool'],
            'ItemSpecificsEnabled' => ['type' => 'ItemSpecificsEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PaisaPayFullEscrowEnabled' => ['type' => 'bool'],
            'BrandMPNIdentifierEnabled' => ['type' => 'bool'],
            'ClassifiedAdAutoAcceptEnabled' => ['type' => 'bool'],
            'BestOfferAutoAcceptEnabled' => ['type' => 'bool'],
            'CrossBorderTradeNorthAmericaEnabled' => ['type' => 'bool'],
            'CrossBorderTradeGBEnabled' => ['type' => 'bool'],
            'CrossBorderTradeAustraliaEnabled' => ['type' => 'bool'],
            'PayPalBuyerProtectionEnabled' => ['type' => 'bool'],
            'BuyerGuaranteeEnabled' => ['type' => 'bool'],
            'CombinedFixedPriceTreatmentEnabled' => ['type' => 'bool'],
            'GalleryFeaturedDurations' => ['type' => 'ListingEnhancementDurationReferenceType', 'xmlns' => self::XMLNS],
            'PayPalRequired' => ['type' => 'bool'],
            'eBayMotorsProAdFormatEnabled' => ['type' => 'AdFormatEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'eBayMotorsProContactByPhoneEnabled' => ['type' => 'bool'],
            'eBayMotorsProPhoneCount' => ['type' => 'int'],
            'eBayMotorsProContactByAddressEnabled' => ['type' => 'bool'],
            'eBayMotorsProStreetCount' => ['type' => 'int'],
            'eBayMotorsProCompanyNameEnabled' => ['type' => 'bool'],
            'eBayMotorsProContactByEmailEnabled' => ['type' => 'bool'],
            'eBayMotorsProBestOfferEnabled' => ['type' => 'ClassifiedAdBestOfferEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'eBayMotorsProAutoAcceptEnabled' => ['type' => 'bool'],
            'eBayMotorsProAutoDeclineEnabled' => ['type' => 'bool'],
            'eBayMotorsProPaymentMethodCheckOutEnabled' => ['type' => 'ClassifiedAdPaymentMethodEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'eBayMotorsProShippingMethodEnabled' => ['type' => 'bool'],
            'eBayMotorsProCounterOfferEnabled' => ['type' => 'bool'],
            'eBayMotorsProSellerContactDetailsEnabled' => ['type' => 'bool'],
            'LocalMarketAdFormatEnabled' => ['type' => 'AdFormatEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'LocalMarketContactByPhoneEnabled' => ['type' => 'bool'],
            'LocalMarketPhoneCount' => ['type' => 'int'],
            'LocalMarketContactByAddressEnabled' => ['type' => 'bool'],
            'LocalMarketStreetCount' => ['type' => 'int'],
            'LocalMarketCompanyNameEnabled' => ['type' => 'bool'],
            'LocalMarketContactByEmailEnabled' => ['type' => 'bool'],
            'LocalMarketBestOfferEnabled' => ['type' => 'ClassifiedAdBestOfferEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'LocalMarketAutoAcceptEnabled' => ['type' => 'bool'],
            'LocalMarketAutoDeclineEnabled' => ['type' => 'bool'],
            'LocalMarketPaymentMethodCheckOutEnabled' => ['type' => 'ClassifiedAdPaymentMethodEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'LocalMarketShippingMethodEnabled' => ['type' => 'bool'],
            'LocalMarketCounterOfferEnabled' => ['type' => 'bool'],
            'LocalMarketSellerContactDetailsEnabled' => ['type' => 'bool'],
            'ClassifiedAdPhoneCount' => ['type' => 'int'],
            'ClassifiedAdContactByAddressEnabled' => ['type' => 'bool'],
            'ClassifiedAdStreetCount' => ['type' => 'int'],
            'ClassifiedAdCompanyNameEnabled' => ['type' => 'bool'],
            'SpecialitySubscription' => ['type' => 'GeographicExposureCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RegularSubscription' => ['type' => 'GeographicExposureCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PremiumSubscription' => ['type' => 'GeographicExposureCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NonSubscription' => ['type' => 'GeographicExposureCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'INEscrowWorkflowTimeline' => ['type' => 'INEscrowWorkflowTimelineCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PayPalRequiredForStoreOwner' => ['type' => 'bool'],
            'ReviseQuantityAllowed' => ['type' => 'bool'],
            'RevisePriceAllowed' => ['type' => 'bool'],
            'StoreOwnerExtendedListingDurationsEnabled' => ['type' => 'bool'],
            'StoreOwnerExtendedListingDurations' => ['type' => 'StoreOwnerExtendedListingDurationsType', 'xmlns' => self::XMLNS],
            'ReturnPolicyEnabled' => ['type' => 'bool'],
            'HandlingTimeEnabled' => ['type' => 'bool'],
            'MaxFlatShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Group1MaxFlatShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Group2MaxFlatShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Group3MaxFlatShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PaymentMethod' => ['type' => 'BuyerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'VariationsEnabled' => ['type' => 'bool'],
            'AttributeConversionEnabled' => ['type' => 'AttributeConversionEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FreeGalleryPlusEnabled' => ['type' => 'bool'],
            'FreePicturePackEnabled' => ['type' => 'bool'],
            'ItemCompatibilityEnabled' => ['type' => 'ItemCompatibilityEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MinItemCompatibility' => ['type' => 'int'],
            'MaxItemCompatibility' => ['type' => 'int'],
            'ConditionEnabled' => ['type' => 'ConditionEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ConditionValues' => ['type' => 'ConditionValuesType', 'xmlns' => self::XMLNS],
            'SpecialFeatures' => ['type' => 'ConditionValuesType', 'xmlns' => self::XMLNS],
            'ValueCategory' => ['type' => 'bool'],
            'ProductCreationEnabled' => ['type' => 'ProductCreationEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'EANEnabled' => ['type' => 'ProductIdentiferEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ISBNEnabled' => ['type' => 'ProductIdentiferEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'UPCEnabled' => ['type' => 'ProductIdentiferEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MaxGranularFitmentCount' => ['type' => 'int'],
            'CompatibleVehicleType' => [],
            'PaymentOptionsGroup' => ['type' => 'PaymentOptionsGroupEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ShippingProfileCategoryGroup' => ['type' => 'ProfileCategoryGroupCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PaymentProfileCategoryGroup' => ['type' => 'ProfileCategoryGroupCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ReturnPolicyProfileCategoryGroup' => ['type' => 'ProfileCategoryGroupCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'VINSupported' => ['type' => 'bool'],
            'VRMSupported' => ['type' => 'bool'],
            'SellerProvidedTitleSupported' => ['type' => 'bool'],
            'DepositSupported' => ['type' => 'bool'],
            'GlobalShippingEnabled' => ['type' => 'bool'],
            'AdditionalCompatibilityEnabled' => ['type' => 'bool'],
            'PickupDropOffEnabled' => ['type' => 'bool'],
            'DigitalGoodDeliveryEnabled' => ['type' => 'bool'],
            'EpidSupported' => ['type' => 'bool'],
            'KTypeSupported' => ['type' => 'bool'],
            'ProductRequiredEnabled' => ['type' => 'ProductRequiredEnabledCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DomesticReturnsAcceptedValues' => ['type' => 'DomesticReturnsAcceptedCodeType', 'xmlns' => self::XMLNS],
            'InternationalReturnsAcceptedValues' => ['type' => 'InternationalReturnsAcceptedCodeType', 'xmlns' => self::XMLNS],
            'DomesticReturnsDurationValues' => ['type' => 'DomesticReturnsDurationCodeType', 'xmlns' => self::XMLNS],
            'InternationalReturnsDurationValues' => ['type' => 'InternationalReturnsDurationCodeType', 'xmlns' => self::XMLNS],
            'DomesticReturnsShipmentPayeeValues' => ['type' => 'DomesticReturnsShipmentPayeeCodeType', 'xmlns' => self::XMLNS],
            'InternationalReturnsShipmentPayeeValues' => ['type' => 'InternationalReturnsShipmentPayeeCodeType', 'xmlns' => self::XMLNS],
            'DomesticRefundMethodValues' => ['type' => 'DomesticRefundMethodCodeType', 'xmlns' => self::XMLNS],
            'InternationalRefundMethodValues' => ['type' => 'InternationalRefundMethodCodeType', 'xmlns' => self::XMLNS],
            'ReturnPolicyDescriptionEnabled' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CategoryFeatureType::_register();
