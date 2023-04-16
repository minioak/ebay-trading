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
 * This enumerated type contains the list of values that can be used by the seller to set the duration (number of
 * days or Good 'Til Cancelled) of a listing.
 * 
 * Listing durations available to the seller vary based on the site, category, listing type, and the seller's
 * selling profile, so it is a best practice for the seller to call
 * GetCategoryFeatures
 * with
 * ListingDurations
 * included as a
 * FeatureID
 * value in the call request. The
 * GetCategoryFeatures
 * response will include the complete list of listing duration values that can be used for the various listing
 * types.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * As of April 1, 2019, <code>GTC</code> (Good 'Til Cancelled) is the only supported listing duration for
 * fixed-price listings on all eBay marketplaces and categories except for motor vehicle listings on eBay Motors US,
 * and on the eBay UK and eBay Italy sites. Sellers do not have to take any action on existing listings with listing
 * durations other than GTC, but if/when these items need to be relisted, only GTC will be supported. If any other
 * listing duration value besides <code>GTC</code> is specified in this field, it will be ignored, and GTC will be
 * used instead.
 * </span>
 **/
class ListingDurationCodeType extends EbatNs_EnumType
{
    const TAG = 'ListingDurationCodeType';
    const NAME = 'ListingDurationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is used to set the duration of the listing to one day. A one-day listing duration is typically only
     * available to sellers with a Feedback score of 10 or higher, so sellers with a Feedback score of less than 10 may
     * be restricted from using a one-day listing duration. The seller can call
     * GetCategoryFeatures
     * with
     * ListingDurations
     * included as a
     * FeatureID
     * value in the call request to see if the one-day listing duration is available.
     * A one-day listing duration is generally applicable to an auction listing or to a Real Estate Classified Ad.
     **/
    const CodeType_Days_1 = 'Days_1';

    /**
     * This value is used to set the duration of the listing to three days.
     **/
    const CodeType_Days_3 = 'Days_3';

    /**
     * This value is used to set the duration of the listing to five days.
     **/
    const CodeType_Days_5 = 'Days_5';

    /**
     * This value is used to set the duration of the listing to seven days.
     **/
    const CodeType_Days_7 = 'Days_7';

    /**
     * This value is used to set the duration of the listing to 10 days.
     **/
    const CodeType_Days_10 = 'Days_10';

    /**
     * This value is used to set the duration of the listing to 14 days.
     **/
    const CodeType_Days_14 = 'Days_14';

    /**
     * This value is used to set the duration of the listing to 21 days.
     * <span class="tablenote">
     * Note:
     * A 21-day listing duration was typically only applicable to eBay Motors Local Market vehicle listings, but this
     * listing duration is no longer valid/supported. </span>
     **/
    const CodeType_Days_21 = 'Days_21';

    /**
     * This value is used to set the duration of the listing to 30 days.
     * 
     * <span class="tablenote">
     * Note:
     * In October 2018, this listing duration was enabled for eBay Motors Local Listings, and replaced the formerly
     * supported <code>Days_21</code> enumeration value.
     * </span>
     **/
    const CodeType_Days_30 = 'Days_30';

    /**
     * This value is used to set the duration of the listing to 60 days.
     * 
     * A 60-day listing duration is typically only applicable to Classified Ad listings in specific categories.
     **/
    const CodeType_Days_60 = 'Days_60';

    /**
     * This value is used to set the duration of the listing to 90 days.
     * 
     * A 90-day listing duration is generally only applicable to a Real Estate Classified Ad.
     **/
    const CodeType_Days_90 = 'Days_90';

    /**
     * This value is used to set the duration of the listing to 120 days.
     * 
     * An 120-day listing duration is typically only applicable to Classified Ad listings in specific categories.
     **/
    const CodeType_Days_120 = 'Days_120';

    /**
     * This value is used to set the duration of the listing to 'Good 'Til Cancelled. This option is available for
     * fixed-price and Classified Ad listings. "Good 'Til Cancelled" fixed-price listings will be relisted automatically
     * each month until all inventory is sold out (e.g.,
     * Item.Quantity
     * =0 in a single-variation fixed-price listing, or all occurences of
     * Item.Variations.Variation.Quantity
     * =0 in a multi-variation fixed-price listing), or the seller ends the fixed-price listing.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * As of April 1, 2019, <code>GTC</code> (Good 'Til Cancelled) is the only supported listing duration for
     * fixed-price listings on all eBay marketplaces and categories except for motor vehicle listings on eBay Motors US,
     * and on the eBay UK and eBay Italy sites. Sellers do not have to take any action on existing listings with listing
     * durations other than GTC, but if/when these items need to be relisted, only GTC will be supported. If any other
     * listing duration value besides <code>GTC</code> is specified in this field, it will be ignored, and GTC will be
     * used instead.
     * </span>
     * 
     * <span class="tablenote">
     * Note:
     * On July 1, 2019, the Good 'Til Cancelled renewal schedule was modified from every 30 days to once per
     * calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5.
     * If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will
     * happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal
     * will happen on February 28th (or 29th during a 'Leap Year'). See the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled"
     * target="_blank">Good 'Til Cancelled listings update</a> in the
     * Spring 2019 Seller Updates
     * for more information about this change.
     * </span>
     **/
    const CodeType_GTC = 'GTC';

    /**
     * This value is reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
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
     * @return ListingDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ListingDurationCodeType|null $value
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
    public function isDays_1()
    {
        return $this->_value === self::CodeType_Days_1;
    }

    /**
     * @return bool
     */
    public function isDays_3()
    {
        return $this->_value === self::CodeType_Days_3;
    }

    /**
     * @return bool
     */
    public function isDays_5()
    {
        return $this->_value === self::CodeType_Days_5;
    }

    /**
     * @return bool
     */
    public function isDays_7()
    {
        return $this->_value === self::CodeType_Days_7;
    }

    /**
     * @return bool
     */
    public function isDays_10()
    {
        return $this->_value === self::CodeType_Days_10;
    }

    /**
     * @return bool
     */
    public function isDays_14()
    {
        return $this->_value === self::CodeType_Days_14;
    }

    /**
     * @return bool
     */
    public function isDays_21()
    {
        return $this->_value === self::CodeType_Days_21;
    }

    /**
     * @return bool
     */
    public function isDays_30()
    {
        return $this->_value === self::CodeType_Days_30;
    }

    /**
     * @return bool
     */
    public function isDays_60()
    {
        return $this->_value === self::CodeType_Days_60;
    }

    /**
     * @return bool
     */
    public function isDays_90()
    {
        return $this->_value === self::CodeType_Days_90;
    }

    /**
     * @return bool
     */
    public function isDays_120()
    {
        return $this->_value === self::CodeType_Days_120;
    }

    /**
     * @return bool
     */
    public function isGTC()
    {
        return $this->_value === self::CodeType_GTC;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
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

ListingDurationCodeType::_register();
