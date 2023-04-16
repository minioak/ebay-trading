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
 * This enumerated type contains all data filters that can be used to control which metadata is returned in the
 * response of a
 * GeteBayDetails
 * call. The user can use as little or as many values as desired. If none of these data filters are used, all
 * applicable metadata will be returned.
 **/
class DetailNameCodeType extends EbatNs_EnumType
{
    const TAG = 'DetailNameCodeType';
    const NAME = 'DetailNameCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the two-digit country codes for all countries of the world. Among other
     * things, the two-digit country codes can be used when a seller is creating a 'ship-to' and/or an 'exclude ship-to'
     * location list.
     * 
     * The same
     * CountryDetails
     * metadata will be returned regardless of the value that is passed into the
     * X-EBAY-API-SITEID
     * request header.
     **/
    const CodeType_CountryDetails = 'CountryDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the three-digit currency codes for each country where the Trading API is
     * supported. These three-digit currency codes are used when a seller is expressing a dollar value in Trading API
     * calls. For example, the
     * currencyID
     * attribute value in the
     * StartPrice
     * field of an
     * AddItem
     * call.
     * 
     * The same
     * CurrencyDetails
     * metadata will be returned regardless of the value that is passed into the
     * X-EBAY-API-SITEID
     * request header.
     **/
    const CodeType_CurrencyDetails = 'CurrencyDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve all payment methods that are accepted on the specified eBay site. Note that
     * the accepted payment methods within an eBay site can vary by category and/or by listing format, so a user may
     * also want to make a
     * GetCategoryFeatures
     * call to retrieve category-level payment method metadata. To retrieve the accepted payment methods for a specific
     * category on a specific site with
     * GetCategoryFeatures
     * , the user specifies the listing category ID through the
     * CategoryID
     * , and sets the
     * FeatureID
     * value to <code>PaymentMethods</code>.
     **/
    const CodeType_PaymentOptionDetails = 'PaymentOptionDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the local regions within the specified country.
     **/
    const CodeType_RegionDetails = 'RegionDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the geographical regions and country codes that can be used when creating a
     * 'ship-to' location list.
     **/
    const CodeType_ShippingLocationDetails = 'ShippingLocationDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the domestic and international shipping service options available on the
     * specified eBay site. The returned metadata on each available shipping service will include the full name of the
     * shipping service option (including carrier name), the actual shipping service enumeration value that will be used
     * in an
     * AddItem
     * call, the expected shipping time range, the package types that can be used for that shipping service, and
     * whether the shipping service is for domestic or international shipping. In addition to this information, the
     * seller will have to look for a value of <code>true</code> in the
     * ValidForSellingFlow
     * field. If the value in this field is <code>false</code>, it indicates that the shipping service is no longer
     * available for shipping.
     **/
    const CodeType_ShippingServiceDetails = 'ShippingServiceDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the eBay sites that are supported in Trading API calls. The
     * SiteID
     * values that are returned for each country are specified as an HTTP header if the seller wants to see site
     * metadata returned for that particular site.
     * 
     * The same
     * SiteDetails
     * metadata will be returned regardless of the value that is passed into the
     * X-EBAY-API-SITEID
     * request header.
     **/
    const CodeType_SiteDetails = 'SiteDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the different tax jurisdictions (such as states or provinces) within the
     * specified eBay site. The two-digit
     * JurisdictionID
     * codes that are returned are used when a seller is setting/configuring sales tax rates in a Sales Tax Table, or
     * when creating a listing. For example, the
     * SalesTax.SalesTaxState
     * field of an
     * AddItem
     * call.
     * 
     * Sales tax jurisdictions are only applicable to the US and Canada, so the
     * TaxJurisdiction
     * metadata will only be returned for these sites:
     * <ul>
     * <li>
     * eBay US
     * :
     * SiteID
     * <code>0</code></li>
     * <li>
     * eBay Motors (US)
     * :
     * SiteID
     * <code>100</code></li>
     * <li>
     * eBay Canada (English language)
     * :
     * SiteID
     * <code>2</code></li>
     * <li>
     * eBay Canada (French language)
     * :
     * SiteID
     * <code>210</code></li>
     * </ul>
     **/
    const CodeType_TaxJurisdiction = 'TaxJurisdiction';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the different eBay URLs associated with the specified eBay site.
     **/
    const CodeType_URLDetails = 'URLDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the names of the different global time zones. The returned information
     * includes the number of hours that each time zone is either ahead or behind UTC time, and it also indicates if the
     * time zone participates in 'Daylight Savings'.
     * 
     * The same
     * TimeZoneDetails
     * metadata will be returned regardless of the value that is passed into the
     * X-EBAY-API-SITEID
     * request header, although the metadata text will be localized for that site's language.
     **/
    const CodeType_TimeZoneDetails = 'TimeZoneDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the international regions and individual countries.
     * 
     * The same
     * RegionOfOriginDetails
     * metadata will be returned regardless of the value that is passed into the
     * X-EBAY-API-SITEID
     * request header.
     **/
    const CodeType_RegionOfOriginDetails = 'RegionOfOriginDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the handling time values (in number of business days) that the seller can
     * set on a listing. The seller must ship an order line item within this time or risk getting a seller defect. For
     * the US, the supported handling times are 0-3 days. Some listing categories support 'extended handling' time, and
     * if this is the case, the handling times will be longer, and the
     * ExtendedHandling
     * field will be returned as <code>true</code>.
     **/
    const CodeType_DispatchTimeMaxDetails = 'DispatchTimeMaxDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the maximum thresholds for Item Specifics in listings. These thresholds
     * include the maximum number of item specifics that can be used for an item (or item variation), as well as the
     * maximum number of characters that can be used for Item Specific names and values.
     **/
    const CodeType_ItemSpecificDetails = 'ItemSpecificDetails';

    /**
     * This enumeration value is no longer applicable, and should not be used.
     **/
    const CodeType_UnitOfMeasurementDetails = 'UnitOfMeasurementDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the shipping package types that are supported by the specified eBay site. A
     * seller can also just use the
     * ShippingServiceDetails
     * filter, and the supported shipping package types for each shipping service option will be returned.
     **/
    const CodeType_ShippingPackageDetails = 'ShippingPackageDetails';

    /**
     * Reserved for future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the shipping carriers supported by the specified eBay site for domestic and
     * international shipping.
     **/
    const CodeType_ShippingCarrierDetails = 'ShippingCarrierDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the minimum starting prices for each applicable listing format for the
     * specified eBay site. The price input into the
     * StartPrice
     * field of an
     * AddItem
     * call must be at or above this minimum threshold value or the listing will be blocked.
     **/
    const CodeType_ListingStartPriceDetails = 'ListingStartPriceDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the return policy values that can be passed in through the
     * ReturnPolicy
     * container of an Add/Revise/Relist API call (or in a Return business policy). These values include the return
     * period, the 'Money back' options that the seller can make available to the buyers, and who pays for return
     * shipping (Buyer or Seller).
     * 
     * <span class="tablenote">
     * Note:
     * As of September 2018, the
     * GetCategoryFeatures
     * call started returning category-level metadata for both domestic and international return policies. Due to this
     * update, developers may want to consider using that call for return policy metadata instead, as the
     * GeteBayDetails
     * call only retrieves site-level metadata, and does not distinguish between domestic and international
     * metadata.</span>
     **/
    const CodeType_ReturnPolicyDetails = 'ReturnPolicyDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the Buyer Requirement values that can be passed in through the
     * BuyerRequirementDetails
     * container of an Add/Revise/Relist API call.
     **/
    const CodeType_BuyerRequirementDetails = 'BuyerRequirementDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the listing features/upgrades that are enabled or disabled for the
     * specified site.
     **/
    const CodeType_ListingFeatureDetails = 'ListingFeatureDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the maximum thresholds when using multiple-variation listings.
     **/
    const CodeType_VariationDetails = 'VariationDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the geographical regions and individual countries that can be passed in to
     * the
     * ShippingDetails.ExcludeShipToLocation
     * field in an Add/Revise/Relist API call. Multiple
     * ShippingDetails.ExcludeShipToLocation
     * can be used, and any region or country value that is passed in to one of these fields will exclude that region
     * or country as a "ship-to" location.
     **/
    const CodeType_ExcludeShippingLocationDetails = 'ExcludeShippingLocationDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve details on a site's recoupment policy.
     **/
    const CodeType_RecoupmentPolicyDetails = 'RecoupmentPolicyDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the shipping service categories (Standard, Expedited, Economy, etc.)
     * supported for the site.
     **/
    const CodeType_ShippingCategoryDetails = 'ShippingCategoryDetails';

    /**
     * This enumeration value can be included in a
     * DetailName
     * field if the user wishes to retrieve the appropriate text to insert into a product identifier field (EAN, ISBN,
     * UPC, MPN/Brand) if eBay is prompting/expecting one of these fields in the call request, but the identifiers do
     * not exist/apply for the product. The
     * ProductDetails.ProductIdentifierUnavailableText
     * field that is returned in the response will contain the actual text that should be passed into the relevant
     * product identification fields when creating a listing.
     **/
    const CodeType_ProductDetails = 'ProductDetails';
    
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
     * @return DetailNameCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DetailNameCodeType|null $value
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
    public function isCountryDetails()
    {
        return $this->_value === self::CodeType_CountryDetails;
    }

    /**
     * @return bool
     */
    public function isCurrencyDetails()
    {
        return $this->_value === self::CodeType_CurrencyDetails;
    }

    /**
     * @return bool
     */
    public function isPaymentOptionDetails()
    {
        return $this->_value === self::CodeType_PaymentOptionDetails;
    }

    /**
     * @return bool
     */
    public function isRegionDetails()
    {
        return $this->_value === self::CodeType_RegionDetails;
    }

    /**
     * @return bool
     */
    public function isShippingLocationDetails()
    {
        return $this->_value === self::CodeType_ShippingLocationDetails;
    }

    /**
     * @return bool
     */
    public function isShippingServiceDetails()
    {
        return $this->_value === self::CodeType_ShippingServiceDetails;
    }

    /**
     * @return bool
     */
    public function isSiteDetails()
    {
        return $this->_value === self::CodeType_SiteDetails;
    }

    /**
     * @return bool
     */
    public function isTaxJurisdiction()
    {
        return $this->_value === self::CodeType_TaxJurisdiction;
    }

    /**
     * @return bool
     */
    public function isURLDetails()
    {
        return $this->_value === self::CodeType_URLDetails;
    }

    /**
     * @return bool
     */
    public function isTimeZoneDetails()
    {
        return $this->_value === self::CodeType_TimeZoneDetails;
    }

    /**
     * @return bool
     */
    public function isRegionOfOriginDetails()
    {
        return $this->_value === self::CodeType_RegionOfOriginDetails;
    }

    /**
     * @return bool
     */
    public function isDispatchTimeMaxDetails()
    {
        return $this->_value === self::CodeType_DispatchTimeMaxDetails;
    }

    /**
     * @return bool
     */
    public function isItemSpecificDetails()
    {
        return $this->_value === self::CodeType_ItemSpecificDetails;
    }

    /**
     * @return bool
     */
    public function isUnitOfMeasurementDetails()
    {
        return $this->_value === self::CodeType_UnitOfMeasurementDetails;
    }

    /**
     * @return bool
     */
    public function isShippingPackageDetails()
    {
        return $this->_value === self::CodeType_ShippingPackageDetails;
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
    public function isShippingCarrierDetails()
    {
        return $this->_value === self::CodeType_ShippingCarrierDetails;
    }

    /**
     * @return bool
     */
    public function isListingStartPriceDetails()
    {
        return $this->_value === self::CodeType_ListingStartPriceDetails;
    }

    /**
     * @return bool
     */
    public function isReturnPolicyDetails()
    {
        return $this->_value === self::CodeType_ReturnPolicyDetails;
    }

    /**
     * @return bool
     */
    public function isBuyerRequirementDetails()
    {
        return $this->_value === self::CodeType_BuyerRequirementDetails;
    }

    /**
     * @return bool
     */
    public function isListingFeatureDetails()
    {
        return $this->_value === self::CodeType_ListingFeatureDetails;
    }

    /**
     * @return bool
     */
    public function isVariationDetails()
    {
        return $this->_value === self::CodeType_VariationDetails;
    }

    /**
     * @return bool
     */
    public function isExcludeShippingLocationDetails()
    {
        return $this->_value === self::CodeType_ExcludeShippingLocationDetails;
    }

    /**
     * @return bool
     */
    public function isRecoupmentPolicyDetails()
    {
        return $this->_value === self::CodeType_RecoupmentPolicyDetails;
    }

    /**
     * @return bool
     */
    public function isShippingCategoryDetails()
    {
        return $this->_value === self::CodeType_ShippingCategoryDetails;
    }

    /**
     * @return bool
     */
    public function isProductDetails()
    {
        return $this->_value === self::CodeType_ProductDetails;
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

DetailNameCodeType::_register();
