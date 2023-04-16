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
 * This enumerated type contains the valid selling formats for eBay listings.
 **/
class ListingTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'ListingTypeCodeType';
    const NAME = 'ListingTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Unknown or undefined auction type. Applicable to
     * user preferences and other informational use cases.
     **/
    const CodeType_Unknown = 'Unknown';

    /**
     * This value indicates an auction listing. In an auction listing, prospective buyers engage in a competitive
     * bidding process, although Buy It Now may be offered as long as no bids have been placed. Auctions occur on the
     * eBay marketplace site, and the auction listings will also appear in the seller's eBay Store (if the seller has an
     * eBay Store).
     * 
     * Although listing durations may vary by eBay marketplace and category, typical listing durations for
     * auctions are 3, 5, 7, and 10 days. It is recommended that the seller uses the
     * GetCategoryFeatures
     * call to retrieve the actual listing durations that are supported for auctions on a particular marketplace and
     * category.
     **/
    const CodeType_Chinese = 'Chinese';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_Dutch = 'Dutch';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_Live = 'Live';

    /**
     * This enumeration value is only applicable to the
     * GetMyeBaySelling
     * call. This value is used in the
     * ActiveList.ListingType
     * field if the seller only wants to retrieve active listings that are in the auction format.
     **/
    const CodeType_Auction = 'Auction';

    /**
     * This enumeration value represents a classified ad in a Real Estate category. This listing type is only used to
     * solicit inquiries from interested parties. To express interest, a buyer fills in a contact form that eBay
     * forwards to the seller as a lead. This format does not enable buyers and sellers to transact online through eBay,
     * and eBay Feedback is not available for ad format listings.
     * 
     * Although listing durations may vary by eBay marketplace and category, typical listing durations for real
     * estate ads are 30 and 90 days. It is recommended that the seller uses the
     * GetCategoryFeatures
     * call to retrieve the actual listing durations that are supported for real estate ads on a particular marketplace
     * and category.
     **/
    const CodeType_AdType = 'AdType';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_StoresFixedPrice = 'StoresFixedPrice';

    /**
     * Second chance offer made to a non-winning bidder on an ended listing.
     * A seller can make an offer to a non-winning bidder when either the winning bidder
     * has failed to pay for an item or the seller has a duplicate of the item.
     * A seller can create a Second Chance Offer immediately after a listing ends and up to
     * 60 days after the end of the listing.
     * 
     * eBay does not charge an Insertion Fee,
     * but if the bidder accepts the offer, the regular Final Value Fee is charged.
     * In the case of an Unpaid Item, the seller should ensure that everything has
     * been done to resolve the issue with the winning bidder before sending a
     * Second Chance Offer to another bidder.
     * 
     * See the Unpaid Items Process for details.
     * Make sure you're aware of other rules and restrictions surrounding Second Chance Offers.
     * Use
     * AddSecondChanceItem
     * to submit Second Chance Offers.
     * Listed on eBay, but does not appear when browsing or searching listings.
     **/
    const CodeType_PersonalOffer = 'PersonalOffer';

    /**
     * With this listing format, the selling is offering the item at a fixed price, although it is still possible for
     * the seller to negotiate the price with prospective buyers using the Best Offer feature. A fixed-price listing can
     * offer a single item, or if the seller has multiple quantity of the same item, multiple quantity of that same item
     * can be made available for sale through the same listing. Additionally, the seller can set up a
     * multiple-variation, fixed-price listing, where similar items can be sold through the same listing. An example of
     * a multiple-variation, fixed-price listing might be a t-shirt (or another article of clothing) that is available
     * in multiple color and size combinations.
     * 
     * Traditionally, listing durations for fixed-prices listings have varied by eBay marketplace and
     * category. Typical listing durations for fixed-price listings ranged from three to 30 days, or GTC (Good 'Til
     * Cancelled). As of April 1, 2019, 'GTC' is the only supported listing duration for all eBay marketplaces with the
     * following exceptions:
     * <ul>
     * <li>The following eBay Motors US categories are exempt from this change: <em>Cars & Trucks</em>
     * (6001), <em>Motorcycles</em> (6024), <em>Other Vehicles & Trailers</em> (6038), <em>Boats</em> (26429),
     * <em>Powersports</em> (66466).</li>
     * <li>All child categories under <em>Cars, Motorcycles & Vehicles</em> (9800) categories on the eBay
     * UK and eBay Italy sites are also exempt from this change. </li>
     * </ul>
     * 
     * With the 'GTC' listing duration, the listing will remain active as long as the listing shows that
     * inventory is available for purchase (available quantity is '1' or more). For sellers listing motor vehicles on
     * the eBay US Motors, eBay UK, or eBay Italy sites, it is recommended that the seller uses the
     * GetCategoryFeatures
     * call to retrieve the supported listing durations for their particular marketplace and category.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified from every 30 days to once
     * per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August
     * 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal
     * will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the
     * renewal will happen on February 28th (or 29th during a 'Leap Year'). See the
     * <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled"
     * target="_blank">Good 'Til Cancelled listings update</a> in the
     * Spring 2019 Seller Updates
     * for more information about this change.
     * </span>
     **/
    const CodeType_FixedPriceItem = 'FixedPriceItem';

    /**
     * <span class="tablenote">
     * Note:
     * This listing type is no longer applicable as the Half.com site has been shut down.
     * </span>
     **/
    const CodeType_Half = 'Half';

    /**
     * This enumeration value represents a (non-Real Estate) classified ad listing. The <code>AdType</code> enumeration
     * value represents Real Estate classified ads. This listing type is only used to solicit inquiries from interested
     * parties. To express interest, a buyer fills in a contact form that eBay forwards to the seller as a lead. This
     * format does not enable buyers and sellers to transact online through eBay, and eBay Feedback is not available for
     * ad format listings. Non-Real Estate classified ads are only available in a limited number of eBay categories,
     * including Business and Industrial categories, Travel, ans Specialty Services.
     * 
     * Although listing durations may vary by eBay marketplace and category, typical listing durations for
     * (non-Real Estate) classified ads are 30, 60, and 90 days. It is recommended that the seller uses the
     * GetCategoryFeatures
     * call to retrieve the actual listing durations that are supported for real estate ads on a particular marketplace
     * and category.
     **/
    const CodeType_LeadGeneration = 'LeadGeneration';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_Express = 'Express';

    /**
     * This value is no longer applicable, as Shopping.com is no longer a property of eBay, Inc.
     **/
    const CodeType_Shopping = 'Shopping';

    /**
     * Reserved for internal or future use.
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
     * @return ListingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ListingTypeCodeType|null $value
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
    public function isUnknown()
    {
        return $this->_value === self::CodeType_Unknown;
    }

    /**
     * @return bool
     */
    public function isChinese()
    {
        return $this->_value === self::CodeType_Chinese;
    }

    /**
     * @return bool
     */
    public function isDutch()
    {
        return $this->_value === self::CodeType_Dutch;
    }

    /**
     * @return bool
     */
    public function isLive()
    {
        return $this->_value === self::CodeType_Live;
    }

    /**
     * @return bool
     */
    public function isAuction()
    {
        return $this->_value === self::CodeType_Auction;
    }

    /**
     * @return bool
     */
    public function isAdType()
    {
        return $this->_value === self::CodeType_AdType;
    }

    /**
     * @return bool
     */
    public function isStoresFixedPrice()
    {
        return $this->_value === self::CodeType_StoresFixedPrice;
    }

    /**
     * @return bool
     */
    public function isPersonalOffer()
    {
        return $this->_value === self::CodeType_PersonalOffer;
    }

    /**
     * @return bool
     */
    public function isFixedPriceItem()
    {
        return $this->_value === self::CodeType_FixedPriceItem;
    }

    /**
     * @return bool
     */
    public function isHalf()
    {
        return $this->_value === self::CodeType_Half;
    }

    /**
     * @return bool
     */
    public function isLeadGeneration()
    {
        return $this->_value === self::CodeType_LeadGeneration;
    }

    /**
     * @return bool
     */
    public function isExpress()
    {
        return $this->_value === self::CodeType_Express;
    }

    /**
     * @return bool
     */
    public function isShopping()
    {
        return $this->_value === self::CodeType_Shopping;
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

ListingTypeCodeType::_register();
