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
 * Contains the data defining one item. A seller populates an object of this type at listing time with the
 * definition of a new item. A seller also uses an object of this type to relist or revise an item. Calls that
 * retrieve item data (such as the
 * GetSellerList
 * call) return an object of this type, filled with the item's data.
 **/
class ItemType extends EbatNs_ComplexType
{
    const TAG = 'ItemType';
    const NAME = 'ItemType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ApplicationData = null;

    /**
     * @var AttributeSetArrayType|null
     */
    protected $AttributeSetArray = null;

    /**
     * @var AttributeArrayType|null
     */
    protected $AttributeArray = null;

    /**
     * @var LookupAttributeArrayType|null
     */
    protected $LookupAttributeArray = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AutoPay = null;

    /**
     * @var BiddingDetailsType|null
     */
    protected $BiddingDetails = null;

    /**
     * @var BuyerProtectionCodeType|null
     */
    protected $BuyerProtection = null;

    /**
     * @var AmountType|null
     */
    protected $BuyItNowPrice = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CategoryMappingAllowed = null;

    /**
     * @var CharityType|null
     */
    protected $Charity = null;

    /**
     * @var CountryCodeType|null
     */
    protected $Country = null;

    /**
     * @var CrossPromotionsType|null
     */
    protected $CrossPromotion = null;

    /**
     * @var CurrencyCodeType|null
     */
    protected $Currency = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var DescriptionReviseModeCodeType|null
     */
    protected $DescriptionReviseMode = null;

    /**
     * @var DistanceType|null
     */
    protected $Distance = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var ListingDetailsType|null
     */
    protected $ListingDetails = null;

    /**
     * @var string|null
     */
    protected $ListingDuration = null;

    /**
     * @var ListingEnhancementsCodeType[]|null
     */
    protected $ListingEnhancement = [];

    /**
     * @var ListingTypeCodeType|null
     */
    protected $ListingType = null;

    /**
     * @var string|null
     */
    protected $Location = null;

    /**
     * @var int|null
     */
    protected $LotSize = null;

    /**
     * @var string|null
     */
    protected $PartnerCode = null;

    /**
     * @var string|null
     */
    protected $PartnerName = null;

    /**
     * @var PaymentDetailsType|null
     */
    protected $PaymentDetails = null;

    /**
     * @var BuyerPaymentMethodCodeType[]|null
     */
    protected $PaymentMethods = [];

    /**
     * @var string|null
     */
    protected $PayPalEmailAddress = null;

    /**
     * @var CategoryType|null
     */
    protected $PrimaryCategory = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PrivateListing = null;

    /**
     * @var ProductListingDetailsType|null
     */
    protected $ProductListingDetails = null;

    /**
     * @var int|null
     */
    protected $Quantity = null;

    /**
     * @var string|null
     */
    protected $PrivateNotes = null;

    /**
     * @var string|null
     */
    protected $RegionID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $RelistLink = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IsItemEMSEligible = null;

    /**
     * @var AmountType|null
     */
    protected $ReservePrice = null;

    /**
     * @var ReviseStatusType|null
     */
    protected $ReviseStatus = null;

    /**
     * @var string|null
     */
    protected $ScheduleTime = null;

    /**
     * @var CategoryType|null
     */
    protected $SecondaryCategory = null;

    /**
     * @var CategoryType|null
     */
    protected $FreeAddedCategory = null;

    /**
     * @var UserType|null
     */
    protected $Seller = null;

    /**
     * @var SellingStatusType|null
     */
    protected $SellingStatus = null;

    /**
     * @var ShippingDetailsType|null
     */
    protected $ShippingDetails = null;

    /**
     * @var string[]|null
     */
    protected $ShipToLocations = [];

    /**
     * @var SiteCodeType|null
     */
    protected $Site = null;

    /**
     * @var AmountType|null
     */
    protected $StartPrice = null;

    /**
     * @var StorefrontType|null
     */
    protected $Storefront = null;

    /**
     * @var string|null
     */
    protected $SubTitle = null;

    /**
     * @var string|null
     */
    protected $TimeLeft = null;

    /**
     * @var string|null
     */
    protected $Title = null;

    /**
     * @var UUIDType|null
     */
    protected $UUID = null;

    /**
     * @var VATDetailsType|null
     */
    protected $VATDetails = null;

    /**
     * @var string|null
     */
    protected $SellerVacationNote = null;

    /**
     * @var int|null
     */
    protected $WatchCount = null;

    /**
     * @var int|null
     */
    protected $HitCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DisableBuyerRequirements = null;

    /**
     * @var BestOfferDetailsType|null
     */
    protected $BestOfferDetails = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocationDefaulted = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UseTaxTable = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $GetItFast = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BuyerResponsibleForShipping = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LimitedWarrantyEligible = null;

    /**
     * @var string|null
     */
    protected $eBayNotes = null;

    /**
     * @var int|null
     */
    protected $QuestionCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Relisted = null;

    /**
     * @var int|null
     */
    protected $QuantityAvailable = null;

    /**
     * @var SKUType|null
     */
    protected $SKU = null;

    /**
     * @var SearchDetailsType|null
     */
    protected $SearchDetails = null;

    /**
     * @var string|null
     */
    protected $PostalCode = null;

    /**
     * @var PictureDetailsType|null
     */
    protected $PictureDetails = null;

    /**
     * @var VideoDetailsType|null
     */
    protected $VideoDetails = null;

    /**
     * @var ExtendedProducerResponsibilityType|null
     */
    protected $ExtendedProducerResponsibility = null;

    /**
     * @var CustomPoliciesType|null
     */
    protected $CustomPolicies = null;

    /**
     * @var int|null
     */
    protected $DispatchTimeMax = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BestOfferEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LocalListing = null;

    /**
     * @var AddressType|null
     */
    protected $SellerContactDetails = null;

    /**
     * @var int|null
     */
    protected $TotalQuestionCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ProxyItem = null;

    /**
     * @var ExtendedContactDetailsType|null
     */
    protected $ExtendedSellerContactDetails = null;

    /**
     * @var int|null
     */
    protected $LeadCount = null;

    /**
     * @var int|null
     */
    protected $NewLeadCount = null;

    /**
     * @var NameValueListArrayType|null
     */
    protected $ItemSpecifics = null;

    /**
     * @var string|null
     */
    protected $GroupCategoryID = null;

    /**
     * @var AmountType|null
     */
    protected $ClassifiedAdPayPerLeadFee = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BidGroupItem = null;

    /**
     * @var BuyerProtectionDetailsType|null
     */
    protected $ApplyBuyerProtection = null;

    /**
     * @var ListingSubtypeCodeType|null
     */
    protected $ListingSubtype2 = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $MechanicalCheckAccepted = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UpdateSellerInfo = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UpdateReturnPolicy = null;

    /**
     * @var ItemPolicyViolationType|null
     */
    protected $ItemPolicyViolation = null;

    /**
     * @var string[]|null
     */
    protected $CrossBorderTrade = [];

    /**
     * @var BusinessSellerDetailsType|null
     */
    protected $BusinessSellerDetails = null;

    /**
     * @var AmountType|null
     */
    protected $BuyerGuaranteePrice = null;

    /**
     * @var BuyerRequirementDetailsType|null
     */
    protected $BuyerRequirementDetails = null;

    /**
     * @var ReturnPolicyType|null
     */
    protected $ReturnPolicy = null;

    /**
     * @var SiteCodeType[]|null
     */
    protected $PaymentAllowedSite = [];

    /**
     * @var InventoryTrackingMethodCodeType|null
     */
    protected $InventoryTrackingMethod = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IntegratedMerchantCreditCardEnabled = null;

    /**
     * @var VariationsType|null
     */
    protected $Variations = null;

    /**
     * @var ItemCompatibilityListType|null
     */
    protected $ItemCompatibilityList = null;

    /**
     * @var int|null
     */
    protected $ItemCompatibilityCount = null;

    /**
     * @var int|null
     */
    protected $ConditionID = null;

    /**
     * @var string|null
     */
    protected $ConditionDescription = null;

    /**
     * @var string|null
     */
    protected $ConditionDisplayName = null;

    /**
     * @var RegulatoryType|null
     */
    protected $Regulatory = null;

    /**
     * @var string|null
     */
    protected $TaxCategory = null;

    /**
     * @var QuantityAvailableHintCodeType|null
     */
    protected $QuantityAvailableHint = null;

    /**
     * @var int|null
     */
    protected $QuantityThreshold = null;

    /**
     * @var DiscountPriceInfoType|null
     */
    protected $DiscountPriceInfo = null;

    /**
     * @var string|null
     */
    protected $SellerProvidedTitle = null;

    /**
     * @var string|null
     */
    protected $VIN = null;

    /**
     * @var string|null
     */
    protected $VINLink = null;

    /**
     * @var string|null
     */
    protected $VRM = null;

    /**
     * @var string|null
     */
    protected $VRMLink = null;

    /**
     * @var QuantityInfoType|null
     */
    protected $QuantityInfo = null;

    /**
     * @var SellerProfilesType|null
     */
    protected $SellerProfiles = null;

    /**
     * @var ShippingServiceCostOverrideListType|null
     */
    protected $ShippingServiceCostOverrideList = null;

    /**
     * @var ShippingOverrideType|null
     */
    protected $ShippingOverride = null;

    /**
     * @var ShipPackageDetailsType|null
     */
    protected $ShippingPackageDetails = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $TopRatedListing = null;

    /**
     * @var QuantityRestrictionPerBuyerInfoType|null
     */
    protected $QuantityRestrictionPerBuyer = null;

    /**
     * @var AmountType|null
     */
    protected $FloorPrice = null;

    /**
     * @var AmountType|null
     */
    protected $CeilingPrice = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IsIntermediatedShippingEligible = null;

    /**
     * @var UnitInfoType|null
     */
    protected $UnitInfo = null;

    /**
     * @var int|null
     */
    protected $RelistParentID = null;

    /**
     * @var string|null
     */
    protected $ConditionDefinition = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HideFromSearch = null;

    /**
     * @var ReasonHideFromSearchCodeType|null
     */
    protected $ReasonHideFromSearch = null;

    /**
     * @var PickupInStoreDetailsType|null
     */
    protected $PickupInStoreDetails = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IgnoreQuantity = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AvailableForPickupDropOff = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EligibleForPickupDropOff = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LiveAuction = null;

    /**
     * @var DigitalGoodInfoType|null
     */
    protected $DigitalGoodInfo = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayPlus = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayPlusEligible = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eMailDeliveryAvailable = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IsSecureDescription = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getApplicationData()
    {
        return $this->_dc($this->ApplicationData, 'ApplicationData');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setApplicationData($value)
    {
        $this->ApplicationData = self::_string($value);
    }

    /**
     * @return AttributeSetArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAttributeSetArray()
    {
        return $this->_dc($this->AttributeSetArray, 'AttributeSetArray');
    }

    /**
     * @param AttributeSetArrayType|null $value
     * @return void
     */
    public function setAttributeSetArray($value)
    {
        $this->AttributeSetArray = $value;
    }

    /**
     * @return AttributeArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAttributeArray()
    {
        return $this->_dc($this->AttributeArray, 'AttributeArray');
    }

    /**
     * @param AttributeArrayType|null $value
     * @return void
     */
    public function setAttributeArray($value)
    {
        $this->AttributeArray = $value;
    }

    /**
     * @return LookupAttributeArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLookupAttributeArray()
    {
        return $this->_dc($this->LookupAttributeArray, 'LookupAttributeArray');
    }

    /**
     * @param LookupAttributeArrayType|null $value
     * @return void
     */
    public function setLookupAttributeArray($value)
    {
        $this->LookupAttributeArray = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAutoPay()
    {
        return $this->_dc($this->AutoPay === 'true', 'AutoPay');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAutoPay($value)
    {
        $this->AutoPay = self::_bool($value);
    }

    /**
     * @return BiddingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBiddingDetails()
    {
        return $this->_dc($this->BiddingDetails, 'BiddingDetails');
    }

    /**
     * @param BiddingDetailsType|null $value
     * @return void
     */
    public function setBiddingDetails($value)
    {
        $this->BiddingDetails = $value;
    }

    /**
     * @return BuyerProtectionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerProtection()
    {
        return $this->_dc($this->BuyerProtection);
    }

    /**
     * @param BuyerProtectionCodeType|null $value
     * @return void
     */
    public function setBuyerProtection($value)
    {
        $this->BuyerProtection = $this->_enum($value, BuyerProtectionCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyItNowPrice()
    {
        return $this->_dc($this->BuyItNowPrice, 'BuyItNowPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setBuyItNowPrice($value)
    {
        $this->BuyItNowPrice = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryMappingAllowed()
    {
        return $this->_dc($this->CategoryMappingAllowed === 'true', 'CategoryMappingAllowed');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCategoryMappingAllowed($value)
    {
        $this->CategoryMappingAllowed = self::_bool($value);
    }

    /**
     * @return CharityType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharity()
    {
        return $this->_dc($this->Charity, 'Charity');
    }

    /**
     * @param CharityType|null $value
     * @return void
     */
    public function setCharity($value)
    {
        $this->Charity = $value;
    }

    /**
     * @return CountryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCountry()
    {
        return $this->_dc($this->Country);
    }

    /**
     * @param CountryCodeType|null $value
     * @return void
     */
    public function setCountry($value)
    {
        $this->Country = $this->_enum($value, CountryCodeType::class);
    }

    /**
     * @return CrossPromotionsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossPromotion()
    {
        return $this->_dc($this->CrossPromotion, 'CrossPromotion');
    }

    /**
     * @param CrossPromotionsType|null $value
     * @return void
     */
    public function setCrossPromotion($value)
    {
        $this->CrossPromotion = $value;
    }

    /**
     * @return CurrencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrency()
    {
        return $this->_dc($this->Currency);
    }

    /**
     * @param CurrencyCodeType|null $value
     * @return void
     */
    public function setCurrency($value)
    {
        $this->Currency = $this->_enum($value, CurrencyCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

    /**
     * @return DescriptionReviseModeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescriptionReviseMode()
    {
        return $this->_dc($this->DescriptionReviseMode);
    }

    /**
     * @param DescriptionReviseModeCodeType|null $value
     * @return void
     */
    public function setDescriptionReviseMode($value)
    {
        $this->DescriptionReviseMode = $this->_enum($value, DescriptionReviseModeCodeType::class);
    }

    /**
     * @return DistanceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDistance()
    {
        return $this->_dc($this->Distance, 'Distance');
    }

    /**
     * @param DistanceType|null $value
     * @return void
     */
    public function setDistance($value)
    {
        $this->Distance = $value;
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return ListingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingDetails()
    {
        return $this->_dc($this->ListingDetails, 'ListingDetails');
    }

    /**
     * @param ListingDetailsType|null $value
     * @return void
     */
    public function setListingDetails($value)
    {
        $this->ListingDetails = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingDuration()
    {
        return $this->_dc($this->ListingDuration, 'ListingDuration');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setListingDuration($value)
    {
        $this->ListingDuration = self::_string($value);
    }

    /**
     * @return string[]|ListingEnhancementsCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getListingEnhancement($index = null)
    {
        return $this->_dc($index === null
            ? $this->ListingEnhancement
            : (count($this->ListingEnhancement) > $index
                ? $this->ListingEnhancement[$index]
                : null));
    }

    /**
     * @param ListingEnhancementsCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setListingEnhancement($value, $index = null)
    {
        if ($index === null) {
            $this->ListingEnhancement = $value;
        } else {
            $this->ListingEnhancement[$index] = [];
            
            foreach ($value as $item) {
                $this->addListingEnhancement($item);
            }
        }
    }

    /**
     * @param ListingEnhancementsCodeType|null $value
     * @return void
     */
    public function addListingEnhancement($value)
    {
        $this->ListingEnhancement[] = $this->_enum($value, ListingEnhancementsCodeType::class);
    }

    /**
     * @return ListingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingType()
    {
        return $this->_dc($this->ListingType);
    }

    /**
     * @param ListingTypeCodeType|null $value
     * @return void
     */
    public function setListingType($value)
    {
        $this->ListingType = $this->_enum($value, ListingTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocation()
    {
        return $this->_dc($this->Location, 'Location');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLocation($value)
    {
        $this->Location = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLotSize()
    {
        return $this->_dc($this->LotSize, 'LotSize');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLotSize($value)
    {
        $this->LotSize = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPartnerCode()
    {
        return $this->_dc($this->PartnerCode, 'PartnerCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPartnerCode($value)
    {
        $this->PartnerCode = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPartnerName()
    {
        return $this->_dc($this->PartnerName, 'PartnerName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPartnerName($value)
    {
        $this->PartnerName = self::_string($value);
    }

    /**
     * @return PaymentDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentDetails()
    {
        return $this->_dc($this->PaymentDetails, 'PaymentDetails');
    }

    /**
     * @param PaymentDetailsType|null $value
     * @return void
     */
    public function setPaymentDetails($value)
    {
        $this->PaymentDetails = $value;
    }

    /**
     * @return string[]|BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPaymentMethods($index = null)
    {
        return $this->_dc($index === null
            ? $this->PaymentMethods
            : (count($this->PaymentMethods) > $index
                ? $this->PaymentMethods[$index]
                : null));
    }

    /**
     * @param BuyerPaymentMethodCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPaymentMethods($value, $index = null)
    {
        if ($index === null) {
            $this->PaymentMethods = $value;
        } else {
            $this->PaymentMethods[$index] = [];
            
            foreach ($value as $item) {
                $this->addPaymentMethods($item);
            }
        }
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
     * @return void
     */
    public function addPaymentMethods($value)
    {
        $this->PaymentMethods[] = $this->_enum($value, BuyerPaymentMethodCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalEmailAddress()
    {
        return $this->_dc($this->PayPalEmailAddress, 'PayPalEmailAddress');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPayPalEmailAddress($value)
    {
        $this->PayPalEmailAddress = self::_string($value);
    }

    /**
     * @return CategoryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrimaryCategory()
    {
        return $this->_dc($this->PrimaryCategory, 'PrimaryCategory');
    }

    /**
     * @param CategoryType|null $value
     * @return void
     */
    public function setPrimaryCategory($value)
    {
        $this->PrimaryCategory = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrivateListing()
    {
        return $this->_dc($this->PrivateListing === 'true', 'PrivateListing');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPrivateListing($value)
    {
        $this->PrivateListing = self::_bool($value);
    }

    /**
     * @return ProductListingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductListingDetails()
    {
        return $this->_dc($this->ProductListingDetails, 'ProductListingDetails');
    }

    /**
     * @param ProductListingDetailsType|null $value
     * @return void
     */
    public function setProductListingDetails($value)
    {
        $this->ProductListingDetails = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantity()
    {
        return $this->_dc($this->Quantity, 'Quantity');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantity($value)
    {
        $this->Quantity = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrivateNotes()
    {
        return $this->_dc($this->PrivateNotes, 'PrivateNotes');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPrivateNotes($value)
    {
        $this->PrivateNotes = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegionID()
    {
        return $this->_dc($this->RegionID, 'RegionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRegionID($value)
    {
        $this->RegionID = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelistLink()
    {
        return $this->_dc($this->RelistLink === 'true', 'RelistLink');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRelistLink($value)
    {
        $this->RelistLink = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIsItemEMSEligible()
    {
        return $this->_dc($this->IsItemEMSEligible === 'true', 'IsItemEMSEligible');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIsItemEMSEligible($value)
    {
        $this->IsItemEMSEligible = self::_bool($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReservePrice()
    {
        return $this->_dc($this->ReservePrice, 'ReservePrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setReservePrice($value)
    {
        $this->ReservePrice = $value;
    }

    /**
     * @return ReviseStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReviseStatus()
    {
        return $this->_dc($this->ReviseStatus, 'ReviseStatus');
    }

    /**
     * @param ReviseStatusType|null $value
     * @return void
     */
    public function setReviseStatus($value)
    {
        $this->ReviseStatus = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getScheduleTime()
    {
        return $this->_dc($this->ScheduleTime, 'ScheduleTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setScheduleTime($value)
    {
        $this->ScheduleTime = self::_string($value);
    }

    /**
     * @return CategoryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecondaryCategory()
    {
        return $this->_dc($this->SecondaryCategory, 'SecondaryCategory');
    }

    /**
     * @param CategoryType|null $value
     * @return void
     */
    public function setSecondaryCategory($value)
    {
        $this->SecondaryCategory = $value;
    }

    /**
     * @return CategoryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFreeAddedCategory()
    {
        return $this->_dc($this->FreeAddedCategory, 'FreeAddedCategory');
    }

    /**
     * @param CategoryType|null $value
     * @return void
     */
    public function setFreeAddedCategory($value)
    {
        $this->FreeAddedCategory = $value;
    }

    /**
     * @return UserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSeller()
    {
        return $this->_dc($this->Seller, 'Seller');
    }

    /**
     * @param UserType|null $value
     * @return void
     */
    public function setSeller($value)
    {
        $this->Seller = $value;
    }

    /**
     * @return SellingStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingStatus()
    {
        return $this->_dc($this->SellingStatus, 'SellingStatus');
    }

    /**
     * @param SellingStatusType|null $value
     * @return void
     */
    public function setSellingStatus($value)
    {
        $this->SellingStatus = $value;
    }

    /**
     * @return ShippingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingDetails()
    {
        return $this->_dc($this->ShippingDetails, 'ShippingDetails');
    }

    /**
     * @param ShippingDetailsType|null $value
     * @return void
     */
    public function setShippingDetails($value)
    {
        $this->ShippingDetails = $value;
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShipToLocations($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShipToLocations
            : (count($this->ShipToLocations) > $index
                ? $this->ShipToLocations[$index]
                : null), 'ShipToLocations');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShipToLocations($value, $index = null)
    {
        if ($index === null) {
            $this->ShipToLocations = $value;
        } else {
            $this->ShipToLocations[$index] = [];
            
            foreach ($value as $item) {
                $this->addShipToLocations($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addShipToLocations($value)
    {
        $this->ShipToLocations[] = self::_string($value);
    }

    /**
     * @return SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSite()
    {
        return $this->_dc($this->Site);
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function setSite($value)
    {
        $this->Site = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartPrice()
    {
        return $this->_dc($this->StartPrice, 'StartPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setStartPrice($value)
    {
        $this->StartPrice = $value;
    }

    /**
     * @return StorefrontType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStorefront()
    {
        return $this->_dc($this->Storefront, 'Storefront');
    }

    /**
     * @param StorefrontType|null $value
     * @return void
     */
    public function setStorefront($value)
    {
        $this->Storefront = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubTitle()
    {
        return $this->_dc($this->SubTitle, 'SubTitle');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSubTitle($value)
    {
        $this->SubTitle = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeLeft()
    {
        return $this->_dc($this->TimeLeft, 'TimeLeft');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeLeft($value)
    {
        $this->TimeLeft = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitle()
    {
        return $this->_dc($this->Title, 'Title');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTitle($value)
    {
        $this->Title = self::_string($value);
    }

    /**
     * @return UUIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUUID()
    {
        return $this->_dc($this->UUID, 'UUID');
    }

    /**
     * @param UUIDType|null $value
     * @return void
     */
    public function setUUID($value)
    {
        $this->UUID = $value;
    }

    /**
     * @return VATDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATDetails()
    {
        return $this->_dc($this->VATDetails, 'VATDetails');
    }

    /**
     * @param VATDetailsType|null $value
     * @return void
     */
    public function setVATDetails($value)
    {
        $this->VATDetails = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerVacationNote()
    {
        return $this->_dc($this->SellerVacationNote, 'SellerVacationNote');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerVacationNote($value)
    {
        $this->SellerVacationNote = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWatchCount()
    {
        return $this->_dc($this->WatchCount, 'WatchCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setWatchCount($value)
    {
        $this->WatchCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHitCount()
    {
        return $this->_dc($this->HitCount, 'HitCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setHitCount($value)
    {
        $this->HitCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisableBuyerRequirements()
    {
        return $this->_dc($this->DisableBuyerRequirements === 'true', 'DisableBuyerRequirements');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDisableBuyerRequirements($value)
    {
        $this->DisableBuyerRequirements = self::_bool($value);
    }

    /**
     * @return BestOfferDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferDetails()
    {
        return $this->_dc($this->BestOfferDetails, 'BestOfferDetails');
    }

    /**
     * @param BestOfferDetailsType|null $value
     * @return void
     */
    public function setBestOfferDetails($value)
    {
        $this->BestOfferDetails = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocationDefaulted()
    {
        return $this->_dc($this->LocationDefaulted === 'true', 'LocationDefaulted');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocationDefaulted($value)
    {
        $this->LocationDefaulted = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUseTaxTable()
    {
        return $this->_dc($this->UseTaxTable === 'true', 'UseTaxTable');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUseTaxTable($value)
    {
        $this->UseTaxTable = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGetItFast()
    {
        return $this->_dc($this->GetItFast === 'true', 'GetItFast');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setGetItFast($value)
    {
        $this->GetItFast = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->_dc($this->BuyerResponsibleForShipping === 'true', 'BuyerResponsibleForShipping');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBuyerResponsibleForShipping($value)
    {
        $this->BuyerResponsibleForShipping = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLimitedWarrantyEligible()
    {
        return $this->_dc($this->LimitedWarrantyEligible === 'true', 'LimitedWarrantyEligible');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLimitedWarrantyEligible($value)
    {
        $this->LimitedWarrantyEligible = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayNotes()
    {
        return $this->_dc($this->eBayNotes, 'eBayNotes');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEBayNotes($value)
    {
        $this->eBayNotes = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuestionCount()
    {
        return $this->_dc($this->QuestionCount, 'QuestionCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuestionCount($value)
    {
        $this->QuestionCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelisted()
    {
        return $this->_dc($this->Relisted === 'true', 'Relisted');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRelisted($value)
    {
        $this->Relisted = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityAvailable()
    {
        return $this->_dc($this->QuantityAvailable, 'QuantityAvailable');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantityAvailable($value)
    {
        $this->QuantityAvailable = self::_int($value);
    }

    /**
     * @return SKUType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSKU()
    {
        return $this->_dc($this->SKU, 'SKU');
    }

    /**
     * @param SKUType|null $value
     * @return void
     */
    public function setSKU($value)
    {
        $this->SKU = $value;
    }

    /**
     * @return SearchDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchDetails()
    {
        return $this->_dc($this->SearchDetails, 'SearchDetails');
    }

    /**
     * @param SearchDetailsType|null $value
     * @return void
     */
    public function setSearchDetails($value)
    {
        $this->SearchDetails = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPostalCode()
    {
        return $this->_dc($this->PostalCode, 'PostalCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPostalCode($value)
    {
        $this->PostalCode = self::_string($value);
    }

    /**
     * @return PictureDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureDetails()
    {
        return $this->_dc($this->PictureDetails, 'PictureDetails');
    }

    /**
     * @param PictureDetailsType|null $value
     * @return void
     */
    public function setPictureDetails($value)
    {
        $this->PictureDetails = $value;
    }

    /**
     * @return VideoDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVideoDetails()
    {
        return $this->_dc($this->VideoDetails, 'VideoDetails');
    }

    /**
     * @param VideoDetailsType|null $value
     * @return void
     */
    public function setVideoDetails($value)
    {
        $this->VideoDetails = $value;
    }

    /**
     * @return ExtendedProducerResponsibilityType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExtendedProducerResponsibility()
    {
        return $this->_dc($this->ExtendedProducerResponsibility, 'ExtendedProducerResponsibility');
    }

    /**
     * @param ExtendedProducerResponsibilityType|null $value
     * @return void
     */
    public function setExtendedProducerResponsibility($value)
    {
        $this->ExtendedProducerResponsibility = $value;
    }

    /**
     * @return CustomPoliciesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomPolicies()
    {
        return $this->_dc($this->CustomPolicies, 'CustomPolicies');
    }

    /**
     * @param CustomPoliciesType|null $value
     * @return void
     */
    public function setCustomPolicies($value)
    {
        $this->CustomPolicies = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDispatchTimeMax()
    {
        return $this->_dc($this->DispatchTimeMax, 'DispatchTimeMax');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDispatchTimeMax($value)
    {
        $this->DispatchTimeMax = self::_int($value);
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
    public function getLocalListing()
    {
        return $this->_dc($this->LocalListing === 'true', 'LocalListing');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLocalListing($value)
    {
        $this->LocalListing = self::_bool($value);
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerContactDetails()
    {
        return $this->_dc($this->SellerContactDetails, 'SellerContactDetails');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setSellerContactDetails($value)
    {
        $this->SellerContactDetails = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalQuestionCount()
    {
        return $this->_dc($this->TotalQuestionCount, 'TotalQuestionCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalQuestionCount($value)
    {
        $this->TotalQuestionCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProxyItem()
    {
        return $this->_dc($this->ProxyItem === 'true', 'ProxyItem');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setProxyItem($value)
    {
        $this->ProxyItem = self::_bool($value);
    }

    /**
     * @return ExtendedContactDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExtendedSellerContactDetails()
    {
        return $this->_dc($this->ExtendedSellerContactDetails, 'ExtendedSellerContactDetails');
    }

    /**
     * @param ExtendedContactDetailsType|null $value
     * @return void
     */
    public function setExtendedSellerContactDetails($value)
    {
        $this->ExtendedSellerContactDetails = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLeadCount()
    {
        return $this->_dc($this->LeadCount, 'LeadCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLeadCount($value)
    {
        $this->LeadCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNewLeadCount()
    {
        return $this->_dc($this->NewLeadCount, 'NewLeadCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNewLeadCount($value)
    {
        $this->NewLeadCount = self::_int($value);
    }

    /**
     * @return NameValueListArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemSpecifics()
    {
        return $this->_dc($this->ItemSpecifics, 'ItemSpecifics');
    }

    /**
     * @param NameValueListArrayType|null $value
     * @return void
     */
    public function setItemSpecifics($value)
    {
        $this->ItemSpecifics = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroupCategoryID()
    {
        return $this->_dc($this->GroupCategoryID, 'GroupCategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setGroupCategoryID($value)
    {
        $this->GroupCategoryID = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getClassifiedAdPayPerLeadFee()
    {
        return $this->_dc($this->ClassifiedAdPayPerLeadFee, 'ClassifiedAdPayPerLeadFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setClassifiedAdPayPerLeadFee($value)
    {
        $this->ClassifiedAdPayPerLeadFee = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidGroupItem()
    {
        return $this->_dc($this->BidGroupItem === 'true', 'BidGroupItem');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBidGroupItem($value)
    {
        $this->BidGroupItem = self::_bool($value);
    }

    /**
     * @return BuyerProtectionDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getApplyBuyerProtection()
    {
        return $this->_dc($this->ApplyBuyerProtection, 'ApplyBuyerProtection');
    }

    /**
     * @param BuyerProtectionDetailsType|null $value
     * @return void
     */
    public function setApplyBuyerProtection($value)
    {
        $this->ApplyBuyerProtection = $value;
    }

    /**
     * @return ListingSubtypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingSubtype2()
    {
        return $this->_dc($this->ListingSubtype2);
    }

    /**
     * @param ListingSubtypeCodeType|null $value
     * @return void
     */
    public function setListingSubtype2($value)
    {
        $this->ListingSubtype2 = $this->_enum($value, ListingSubtypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMechanicalCheckAccepted()
    {
        return $this->_dc($this->MechanicalCheckAccepted === 'true', 'MechanicalCheckAccepted');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setMechanicalCheckAccepted($value)
    {
        $this->MechanicalCheckAccepted = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateSellerInfo()
    {
        return $this->_dc($this->UpdateSellerInfo === 'true', 'UpdateSellerInfo');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUpdateSellerInfo($value)
    {
        $this->UpdateSellerInfo = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateReturnPolicy()
    {
        return $this->_dc($this->UpdateReturnPolicy === 'true', 'UpdateReturnPolicy');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUpdateReturnPolicy($value)
    {
        $this->UpdateReturnPolicy = self::_bool($value);
    }

    /**
     * @return ItemPolicyViolationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemPolicyViolation()
    {
        return $this->_dc($this->ItemPolicyViolation, 'ItemPolicyViolation');
    }

    /**
     * @param ItemPolicyViolationType|null $value
     * @return void
     */
    public function setItemPolicyViolation($value)
    {
        $this->ItemPolicyViolation = $value;
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCrossBorderTrade($index = null)
    {
        return $this->_dc($index === null
            ? $this->CrossBorderTrade
            : (count($this->CrossBorderTrade) > $index
                ? $this->CrossBorderTrade[$index]
                : null), 'CrossBorderTrade');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCrossBorderTrade($value, $index = null)
    {
        if ($index === null) {
            $this->CrossBorderTrade = $value;
        } else {
            $this->CrossBorderTrade[$index] = [];
            
            foreach ($value as $item) {
                $this->addCrossBorderTrade($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addCrossBorderTrade($value)
    {
        $this->CrossBorderTrade[] = self::_string($value);
    }

    /**
     * @return BusinessSellerDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBusinessSellerDetails()
    {
        return $this->_dc($this->BusinessSellerDetails, 'BusinessSellerDetails');
    }

    /**
     * @param BusinessSellerDetailsType|null $value
     * @return void
     */
    public function setBusinessSellerDetails($value)
    {
        $this->BusinessSellerDetails = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerGuaranteePrice()
    {
        return $this->_dc($this->BuyerGuaranteePrice, 'BuyerGuaranteePrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setBuyerGuaranteePrice($value)
    {
        $this->BuyerGuaranteePrice = $value;
    }

    /**
     * @return BuyerRequirementDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerRequirementDetails()
    {
        return $this->_dc($this->BuyerRequirementDetails, 'BuyerRequirementDetails');
    }

    /**
     * @param BuyerRequirementDetailsType|null $value
     * @return void
     */
    public function setBuyerRequirementDetails($value)
    {
        $this->BuyerRequirementDetails = $value;
    }

    /**
     * @return ReturnPolicyType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnPolicy()
    {
        return $this->_dc($this->ReturnPolicy, 'ReturnPolicy');
    }

    /**
     * @param ReturnPolicyType|null $value
     * @return void
     */
    public function setReturnPolicy($value)
    {
        $this->ReturnPolicy = $value;
    }

    /**
     * @return string[]|SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPaymentAllowedSite($index = null)
    {
        return $this->_dc($index === null
            ? $this->PaymentAllowedSite
            : (count($this->PaymentAllowedSite) > $index
                ? $this->PaymentAllowedSite[$index]
                : null));
    }

    /**
     * @param SiteCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPaymentAllowedSite($value, $index = null)
    {
        if ($index === null) {
            $this->PaymentAllowedSite = $value;
        } else {
            $this->PaymentAllowedSite[$index] = [];
            
            foreach ($value as $item) {
                $this->addPaymentAllowedSite($item);
            }
        }
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function addPaymentAllowedSite($value)
    {
        $this->PaymentAllowedSite[] = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return InventoryTrackingMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInventoryTrackingMethod()
    {
        return $this->_dc($this->InventoryTrackingMethod);
    }

    /**
     * @param InventoryTrackingMethodCodeType|null $value
     * @return void
     */
    public function setInventoryTrackingMethod($value)
    {
        $this->InventoryTrackingMethod = $this->_enum($value, InventoryTrackingMethodCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->_dc($this->IntegratedMerchantCreditCardEnabled === 'true', 'IntegratedMerchantCreditCardEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIntegratedMerchantCreditCardEnabled($value)
    {
        $this->IntegratedMerchantCreditCardEnabled = self::_bool($value);
    }

    /**
     * @return VariationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariations()
    {
        return $this->_dc($this->Variations, 'Variations');
    }

    /**
     * @param VariationsType|null $value
     * @return void
     */
    public function setVariations($value)
    {
        $this->Variations = $value;
    }

    /**
     * @return ItemCompatibilityListType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemCompatibilityList()
    {
        return $this->_dc($this->ItemCompatibilityList, 'ItemCompatibilityList');
    }

    /**
     * @param ItemCompatibilityListType|null $value
     * @return void
     */
    public function setItemCompatibilityList($value)
    {
        $this->ItemCompatibilityList = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemCompatibilityCount()
    {
        return $this->_dc($this->ItemCompatibilityCount, 'ItemCompatibilityCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setItemCompatibilityCount($value)
    {
        $this->ItemCompatibilityCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConditionID()
    {
        return $this->_dc($this->ConditionID, 'ConditionID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setConditionID($value)
    {
        $this->ConditionID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConditionDescription()
    {
        return $this->_dc($this->ConditionDescription, 'ConditionDescription');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setConditionDescription($value)
    {
        $this->ConditionDescription = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConditionDisplayName()
    {
        return $this->_dc($this->ConditionDisplayName, 'ConditionDisplayName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setConditionDisplayName($value)
    {
        $this->ConditionDisplayName = self::_string($value);
    }

    /**
     * @return RegulatoryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegulatory()
    {
        return $this->_dc($this->Regulatory, 'Regulatory');
    }

    /**
     * @param RegulatoryType|null $value
     * @return void
     */
    public function setRegulatory($value)
    {
        $this->Regulatory = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxCategory()
    {
        return $this->_dc($this->TaxCategory, 'TaxCategory');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTaxCategory($value)
    {
        $this->TaxCategory = self::_string($value);
    }

    /**
     * @return QuantityAvailableHintCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityAvailableHint()
    {
        return $this->_dc($this->QuantityAvailableHint);
    }

    /**
     * @param QuantityAvailableHintCodeType|null $value
     * @return void
     */
    public function setQuantityAvailableHint($value)
    {
        $this->QuantityAvailableHint = $this->_enum($value, QuantityAvailableHintCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityThreshold()
    {
        return $this->_dc($this->QuantityThreshold, 'QuantityThreshold');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantityThreshold($value)
    {
        $this->QuantityThreshold = self::_int($value);
    }

    /**
     * @return DiscountPriceInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountPriceInfo()
    {
        return $this->_dc($this->DiscountPriceInfo, 'DiscountPriceInfo');
    }

    /**
     * @param DiscountPriceInfoType|null $value
     * @return void
     */
    public function setDiscountPriceInfo($value)
    {
        $this->DiscountPriceInfo = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerProvidedTitle()
    {
        return $this->_dc($this->SellerProvidedTitle, 'SellerProvidedTitle');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerProvidedTitle($value)
    {
        $this->SellerProvidedTitle = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVIN()
    {
        return $this->_dc($this->VIN, 'VIN');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVIN($value)
    {
        $this->VIN = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVINLink()
    {
        return $this->_dc($this->VINLink, 'VINLink');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVINLink($value)
    {
        $this->VINLink = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVRM()
    {
        return $this->_dc($this->VRM, 'VRM');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVRM($value)
    {
        $this->VRM = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVRMLink()
    {
        return $this->_dc($this->VRMLink, 'VRMLink');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVRMLink($value)
    {
        $this->VRMLink = self::_string($value);
    }

    /**
     * @return QuantityInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityInfo()
    {
        return $this->_dc($this->QuantityInfo, 'QuantityInfo');
    }

    /**
     * @param QuantityInfoType|null $value
     * @return void
     */
    public function setQuantityInfo($value)
    {
        $this->QuantityInfo = $value;
    }

    /**
     * @return SellerProfilesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerProfiles()
    {
        return $this->_dc($this->SellerProfiles, 'SellerProfiles');
    }

    /**
     * @param SellerProfilesType|null $value
     * @return void
     */
    public function setSellerProfiles($value)
    {
        $this->SellerProfiles = $value;
    }

    /**
     * @return ShippingServiceCostOverrideListType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceCostOverrideList()
    {
        return $this->_dc($this->ShippingServiceCostOverrideList, 'ShippingServiceCostOverrideList');
    }

    /**
     * @param ShippingServiceCostOverrideListType|null $value
     * @return void
     */
    public function setShippingServiceCostOverrideList($value)
    {
        $this->ShippingServiceCostOverrideList = $value;
    }

    /**
     * @return ShippingOverrideType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingOverride()
    {
        return $this->_dc($this->ShippingOverride, 'ShippingOverride');
    }

    /**
     * @param ShippingOverrideType|null $value
     * @return void
     */
    public function setShippingOverride($value)
    {
        $this->ShippingOverride = $value;
    }

    /**
     * @return ShipPackageDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingPackageDetails()
    {
        return $this->_dc($this->ShippingPackageDetails, 'ShippingPackageDetails');
    }

    /**
     * @param ShipPackageDetailsType|null $value
     * @return void
     */
    public function setShippingPackageDetails($value)
    {
        $this->ShippingPackageDetails = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTopRatedListing()
    {
        return $this->_dc($this->TopRatedListing === 'true', 'TopRatedListing');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setTopRatedListing($value)
    {
        $this->TopRatedListing = self::_bool($value);
    }

    /**
     * @return QuantityRestrictionPerBuyerInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityRestrictionPerBuyer()
    {
        return $this->_dc($this->QuantityRestrictionPerBuyer, 'QuantityRestrictionPerBuyer');
    }

    /**
     * @param QuantityRestrictionPerBuyerInfoType|null $value
     * @return void
     */
    public function setQuantityRestrictionPerBuyer($value)
    {
        $this->QuantityRestrictionPerBuyer = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFloorPrice()
    {
        return $this->_dc($this->FloorPrice, 'FloorPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setFloorPrice($value)
    {
        $this->FloorPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCeilingPrice()
    {
        return $this->_dc($this->CeilingPrice, 'CeilingPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCeilingPrice($value)
    {
        $this->CeilingPrice = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIsIntermediatedShippingEligible()
    {
        return $this->_dc($this->IsIntermediatedShippingEligible === 'true', 'IsIntermediatedShippingEligible');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIsIntermediatedShippingEligible($value)
    {
        $this->IsIntermediatedShippingEligible = self::_bool($value);
    }

    /**
     * @return UnitInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnitInfo()
    {
        return $this->_dc($this->UnitInfo, 'UnitInfo');
    }

    /**
     * @param UnitInfoType|null $value
     * @return void
     */
    public function setUnitInfo($value)
    {
        $this->UnitInfo = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelistParentID()
    {
        return $this->_dc($this->RelistParentID, 'RelistParentID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRelistParentID($value)
    {
        $this->RelistParentID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConditionDefinition()
    {
        return $this->_dc($this->ConditionDefinition, 'ConditionDefinition');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setConditionDefinition($value)
    {
        $this->ConditionDefinition = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHideFromSearch()
    {
        return $this->_dc($this->HideFromSearch === 'true', 'HideFromSearch');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHideFromSearch($value)
    {
        $this->HideFromSearch = self::_bool($value);
    }

    /**
     * @return ReasonHideFromSearchCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReasonHideFromSearch()
    {
        return $this->_dc($this->ReasonHideFromSearch);
    }

    /**
     * @param ReasonHideFromSearchCodeType|null $value
     * @return void
     */
    public function setReasonHideFromSearch($value)
    {
        $this->ReasonHideFromSearch = $this->_enum($value, ReasonHideFromSearchCodeType::class);
    }

    /**
     * @return PickupInStoreDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupInStoreDetails()
    {
        return $this->_dc($this->PickupInStoreDetails, 'PickupInStoreDetails');
    }

    /**
     * @param PickupInStoreDetailsType|null $value
     * @return void
     */
    public function setPickupInStoreDetails($value)
    {
        $this->PickupInStoreDetails = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIgnoreQuantity()
    {
        return $this->_dc($this->IgnoreQuantity === 'true', 'IgnoreQuantity');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIgnoreQuantity($value)
    {
        $this->IgnoreQuantity = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAvailableForPickupDropOff()
    {
        return $this->_dc($this->AvailableForPickupDropOff === 'true', 'AvailableForPickupDropOff');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAvailableForPickupDropOff($value)
    {
        $this->AvailableForPickupDropOff = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEligibleForPickupDropOff()
    {
        return $this->_dc($this->EligibleForPickupDropOff === 'true', 'EligibleForPickupDropOff');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEligibleForPickupDropOff($value)
    {
        $this->EligibleForPickupDropOff = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLiveAuction()
    {
        return $this->_dc($this->LiveAuction === 'true', 'LiveAuction');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLiveAuction($value)
    {
        $this->LiveAuction = self::_bool($value);
    }

    /**
     * @return DigitalGoodInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDigitalGoodInfo()
    {
        return $this->_dc($this->DigitalGoodInfo, 'DigitalGoodInfo');
    }

    /**
     * @param DigitalGoodInfoType|null $value
     * @return void
     */
    public function setDigitalGoodInfo($value)
    {
        $this->DigitalGoodInfo = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayPlus()
    {
        return $this->_dc($this->eBayPlus === 'true', 'eBayPlus');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayPlus($value)
    {
        $this->eBayPlus = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayPlusEligible()
    {
        return $this->_dc($this->eBayPlusEligible === 'true', 'eBayPlusEligible');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayPlusEligible($value)
    {
        $this->eBayPlusEligible = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEMailDeliveryAvailable()
    {
        return $this->_dc($this->eMailDeliveryAvailable === 'true', 'eMailDeliveryAvailable');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEMailDeliveryAvailable($value)
    {
        $this->eMailDeliveryAvailable = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIsSecureDescription()
    {
        return $this->_dc($this->IsSecureDescription === 'true', 'IsSecureDescription');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIsSecureDescription($value)
    {
        $this->IsSecureDescription = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ApplicationData' => [],
            'AttributeSetArray' => ['type' => 'AttributeSetArrayType', 'xmlns' => self::XMLNS],
            'AttributeArray' => ['type' => 'AttributeArrayType', 'xmlns' => self::XMLNS],
            'LookupAttributeArray' => ['type' => 'LookupAttributeArrayType', 'xmlns' => self::XMLNS],
            'AutoPay' => ['type' => 'bool'],
            'BiddingDetails' => ['type' => 'BiddingDetailsType', 'xmlns' => self::XMLNS],
            'BuyerProtection' => ['type' => 'BuyerProtectionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BuyItNowPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'CategoryMappingAllowed' => ['type' => 'bool'],
            'Charity' => ['type' => 'CharityType', 'xmlns' => self::XMLNS],
            'Country' => ['type' => 'CountryCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CrossPromotion' => ['type' => 'CrossPromotionsType', 'xmlns' => self::XMLNS],
            'Currency' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Description' => [],
            'DescriptionReviseMode' => ['type' => 'DescriptionReviseModeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Distance' => ['type' => 'DistanceType', 'xmlns' => self::XMLNS],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'ListingDetails' => ['type' => 'ListingDetailsType', 'xmlns' => self::XMLNS],
            'ListingDuration' => [],
            'ListingEnhancement' => ['type' => 'ListingEnhancementsCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ListingType' => ['type' => 'ListingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Location' => [],
            'LotSize' => ['type' => 'int'],
            'PartnerCode' => [],
            'PartnerName' => [],
            'PaymentDetails' => ['type' => 'PaymentDetailsType', 'xmlns' => self::XMLNS],
            'PaymentMethods' => ['type' => 'BuyerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'PayPalEmailAddress' => [],
            'PrimaryCategory' => ['type' => 'CategoryType', 'xmlns' => self::XMLNS],
            'PrivateListing' => ['type' => 'bool'],
            'ProductListingDetails' => ['type' => 'ProductListingDetailsType', 'xmlns' => self::XMLNS],
            'Quantity' => ['type' => 'int'],
            'PrivateNotes' => [],
            'RegionID' => [],
            'RelistLink' => ['type' => 'bool'],
            'IsItemEMSEligible' => ['type' => 'bool'],
            'ReservePrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ReviseStatus' => ['type' => 'ReviseStatusType', 'xmlns' => self::XMLNS],
            'ScheduleTime' => [],
            'SecondaryCategory' => ['type' => 'CategoryType', 'xmlns' => self::XMLNS],
            'FreeAddedCategory' => ['type' => 'CategoryType', 'xmlns' => self::XMLNS],
            'Seller' => ['type' => 'UserType', 'xmlns' => self::XMLNS],
            'SellingStatus' => ['type' => 'SellingStatusType', 'xmlns' => self::XMLNS],
            'ShippingDetails' => ['type' => 'ShippingDetailsType', 'xmlns' => self::XMLNS],
            'ShipToLocations' => ['cardinality' => '0..*'],
            'Site' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'StartPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Storefront' => ['type' => 'StorefrontType', 'xmlns' => self::XMLNS],
            'SubTitle' => [],
            'TimeLeft' => [],
            'Title' => [],
            'UUID' => ['type' => 'UUIDType', 'xmlns' => self::XMLNS],
            'VATDetails' => ['type' => 'VATDetailsType', 'xmlns' => self::XMLNS],
            'SellerVacationNote' => [],
            'WatchCount' => ['type' => 'int'],
            'HitCount' => ['type' => 'int'],
            'DisableBuyerRequirements' => ['type' => 'bool'],
            'BestOfferDetails' => ['type' => 'BestOfferDetailsType', 'xmlns' => self::XMLNS],
            'LocationDefaulted' => ['type' => 'bool'],
            'UseTaxTable' => ['type' => 'bool'],
            'GetItFast' => ['type' => 'bool'],
            'BuyerResponsibleForShipping' => ['type' => 'bool'],
            'LimitedWarrantyEligible' => ['type' => 'bool'],
            'eBayNotes' => [],
            'QuestionCount' => ['type' => 'int'],
            'Relisted' => ['type' => 'bool'],
            'QuantityAvailable' => ['type' => 'int'],
            'SKU' => ['type' => 'SKUType', 'xmlns' => self::XMLNS],
            'SearchDetails' => ['type' => 'SearchDetailsType', 'xmlns' => self::XMLNS],
            'PostalCode' => [],
            'PictureDetails' => ['type' => 'PictureDetailsType', 'xmlns' => self::XMLNS],
            'VideoDetails' => ['type' => 'VideoDetailsType', 'xmlns' => self::XMLNS],
            'ExtendedProducerResponsibility' => ['type' => 'ExtendedProducerResponsibilityType', 'xmlns' => self::XMLNS],
            'CustomPolicies' => ['type' => 'CustomPoliciesType', 'xmlns' => self::XMLNS],
            'DispatchTimeMax' => ['type' => 'int'],
            'BestOfferEnabled' => ['type' => 'bool'],
            'LocalListing' => ['type' => 'bool'],
            'SellerContactDetails' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'TotalQuestionCount' => ['type' => 'int'],
            'ProxyItem' => ['type' => 'bool'],
            'ExtendedSellerContactDetails' => ['type' => 'ExtendedContactDetailsType', 'xmlns' => self::XMLNS],
            'LeadCount' => ['type' => 'int'],
            'NewLeadCount' => ['type' => 'int'],
            'ItemSpecifics' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS],
            'GroupCategoryID' => [],
            'ClassifiedAdPayPerLeadFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'BidGroupItem' => ['type' => 'bool'],
            'ApplyBuyerProtection' => ['type' => 'BuyerProtectionDetailsType', 'xmlns' => self::XMLNS],
            'ListingSubtype2' => ['type' => 'ListingSubtypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MechanicalCheckAccepted' => ['type' => 'bool'],
            'UpdateSellerInfo' => ['type' => 'bool'],
            'UpdateReturnPolicy' => ['type' => 'bool'],
            'ItemPolicyViolation' => ['type' => 'ItemPolicyViolationType', 'xmlns' => self::XMLNS],
            'CrossBorderTrade' => ['cardinality' => '0..*'],
            'BusinessSellerDetails' => ['type' => 'BusinessSellerDetailsType', 'xmlns' => self::XMLNS],
            'BuyerGuaranteePrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'BuyerRequirementDetails' => ['type' => 'BuyerRequirementDetailsType', 'xmlns' => self::XMLNS],
            'ReturnPolicy' => ['type' => 'ReturnPolicyType', 'xmlns' => self::XMLNS],
            'PaymentAllowedSite' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'InventoryTrackingMethod' => ['type' => 'InventoryTrackingMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'IntegratedMerchantCreditCardEnabled' => ['type' => 'bool'],
            'Variations' => ['type' => 'VariationsType', 'xmlns' => self::XMLNS],
            'ItemCompatibilityList' => ['type' => 'ItemCompatibilityListType', 'xmlns' => self::XMLNS],
            'ItemCompatibilityCount' => ['type' => 'int'],
            'ConditionID' => ['type' => 'int'],
            'ConditionDescription' => [],
            'ConditionDisplayName' => [],
            'Regulatory' => ['type' => 'RegulatoryType', 'xmlns' => self::XMLNS],
            'TaxCategory' => [],
            'QuantityAvailableHint' => ['type' => 'QuantityAvailableHintCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'QuantityThreshold' => ['type' => 'int'],
            'DiscountPriceInfo' => ['type' => 'DiscountPriceInfoType', 'xmlns' => self::XMLNS],
            'SellerProvidedTitle' => [],
            'VIN' => [],
            'VINLink' => [],
            'VRM' => [],
            'VRMLink' => [],
            'QuantityInfo' => ['type' => 'QuantityInfoType', 'xmlns' => self::XMLNS],
            'SellerProfiles' => ['type' => 'SellerProfilesType', 'xmlns' => self::XMLNS],
            'ShippingServiceCostOverrideList' => ['type' => 'ShippingServiceCostOverrideListType', 'xmlns' => self::XMLNS],
            'ShippingOverride' => ['type' => 'ShippingOverrideType', 'xmlns' => self::XMLNS],
            'ShippingPackageDetails' => ['type' => 'ShipPackageDetailsType', 'xmlns' => self::XMLNS],
            'TopRatedListing' => ['type' => 'bool'],
            'QuantityRestrictionPerBuyer' => ['type' => 'QuantityRestrictionPerBuyerInfoType', 'xmlns' => self::XMLNS],
            'FloorPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'CeilingPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'IsIntermediatedShippingEligible' => ['type' => 'bool'],
            'UnitInfo' => ['type' => 'UnitInfoType', 'xmlns' => self::XMLNS],
            'RelistParentID' => ['type' => 'int'],
            'ConditionDefinition' => [],
            'HideFromSearch' => ['type' => 'bool'],
            'ReasonHideFromSearch' => ['type' => 'ReasonHideFromSearchCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PickupInStoreDetails' => ['type' => 'PickupInStoreDetailsType', 'xmlns' => self::XMLNS],
            'IgnoreQuantity' => ['type' => 'bool'],
            'AvailableForPickupDropOff' => ['type' => 'bool'],
            'EligibleForPickupDropOff' => ['type' => 'bool'],
            'LiveAuction' => ['type' => 'bool'],
            'DigitalGoodInfo' => ['type' => 'DigitalGoodInfoType', 'xmlns' => self::XMLNS],
            'eBayPlus' => ['type' => 'bool'],
            'eBayPlusEligible' => ['type' => 'bool'],
            'eMailDeliveryAvailable' => ['type' => 'bool'],
            'IsSecureDescription' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemType::_register();
