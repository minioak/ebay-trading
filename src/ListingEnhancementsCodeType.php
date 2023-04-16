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
 * Type defining all listing upgrades that may be available to the seller when listing an
 * item. The listing upgrades that are available vary by site and by the seller's
 * account status. To discover which listing upgrades are available,
 * call
 * GeteBayDetails
 * , pass in the appropriate
 * SiteID
 * value and set the
 * DetailName
 * input
 * filter to <code>ListingFeatureDetails</code>, and then look for the
 * ListingFeatureDetails
 * container
 * in the response. Listing upgrades will either be listed as <code>Enabled</code> or <code>Disabled</code>.
 **/
class ListingEnhancementsCodeType extends EbatNs_EnumType
{
    const TAG = 'ListingEnhancementsCodeType';
    const NAME = 'ListingEnhancementsCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <span class="tablenote">
     * Note:
     * The Picture Border feature is no longer available on any eBay Marketplace sites, so this value should not
     * be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     * </span>
     * 
     * If specified, the seller wants to add a border around the listing's pictures. Applicable listing fees
     * apply.
     **/
    const CodeType_Border = 'Border';

    /**
     * This value is used if the seller wants the listing title to
     * be in boldface type. This feature will incur a listing fee.
     * Note that this enhancement will not put the listing subtitle in boldface type (if a subtitle is used).
     * 
     * 
     * Currently, Bold Titles are only supported on eBay US, both Canada sites, eBay Netherlands, and eBay Poland.
     **/
    const CodeType_BoldTitle = 'BoldTitle';

    /**
     * <span class="tablenote">
     * Note:
     * The Featured listing feature is no longer available on any eBay Marketplace sites, so this value should not
     * be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     * </span>
     * 
     * Listing is a "Featured Plus" item. The item will display
     * prominently in the Featured Items section of its category list, and it will
     * stand out on search results pages. It will also display in the regular, non-
     * featured item list. Only available to users with a Feedback rating of 10 or
     * greater.
     **/
    const CodeType_Featured = 'Featured';

    /**
     * <span class="tablenote">
     * Note:
     * The Highlighted listing feature is no longer available on any eBay Marketplace sites, so this value should
     * not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     * </span>
     * 
     * Listing is highlighted in a different color in lists.
     **/
    const CodeType_Highlight = 'Highlight';

    /**
     * <span class="tablenote">
     * Note:
     * The Featured Gallery listing feature is no longer available on any eBay sites, so this value should not be
     * used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     * </span>
     * 
     * Listing will have a chance to rotate into a special display
     * on eBay's Home page. Your item is very likely to show up on the Home page,
     * although eBay does not guarantee that your item will be highlighted
     * in this way. This is the highest level of visibility on eBay.
     **/
    const CodeType_HomePageFeatured = 'HomePageFeatured';

    /**
     * <span class="tablenote">
     * Note:
     * The Pro Pack Bundle is no longer available on any eBay Marketplace sites, so this value should not be used
     * in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     * </span>
     * 
     * Listing is using ProPackBundle (a feature pack).
     * Applies only to vehicle listings on eBay Motors (US and Canada), and
     * to the Parts and Accessories category in the eBay Motors US site.
     * Contains the BoldTitle, Border, Featured and Highlight features.
     **/
    const CodeType_ProPackBundle = 'ProPackBundle';

    /**
     * <span class="tablenote">
     * Note:
     * The Basic Upgrade Pack Bundle is no longer available on any eBay Marketplace sites, so this value should
     * not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     * </span>
     **/
    const CodeType_BasicUpgradePackBundle = 'BasicUpgradePackBundle';

    /**
     * If this value is specified in an Add/Revise/Relist call, a Value Pack bundle is applied to the listing. The Value
     * Pack bundle includes the Gallery Plus feature, a listing subtitle, and use of a Listing Designer template for a
     * discounted price. Support for this feature varies by site and category.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create or revise
     * listings, so use of a Listing Designer template will no longer be a part of this bundle.</span>
     **/
    const CodeType_ValuePackBundle = 'ValuePackBundle';

    /**
     * <span class="tablenote">
     * Note:
     * The Pro Pack Plus Bundle is no longer available on any eBay Marketplace sites, so this value should not be
     * used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     * </span>
     * 
     * Support for this feature varies by site and category.
     * A ProPackPlusBundle listing is using ProPackPlus bundle (a feature pack),
     * which combines the features of BoldTitle, Border, Highlight, Featured (which
     * is equivalent to a GalleryType value of Featured), and
     * Gallery, for a discounted price.
     * Note that if, for example, in AddItem, if you use ProPackPlusBundle and
     * a GalleryType value of Gallery, then the resulting item will have a GalleryType
     * value of Featured.
     **/
    const CodeType_ProPackPlusBundle = 'ProPackPlusBundle';

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
     * @return ListingEnhancementsCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ListingEnhancementsCodeType|null $value
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
    public function isBorder()
    {
        return $this->_value === self::CodeType_Border;
    }

    /**
     * @return bool
     */
    public function isBoldTitle()
    {
        return $this->_value === self::CodeType_BoldTitle;
    }

    /**
     * @return bool
     */
    public function isFeatured()
    {
        return $this->_value === self::CodeType_Featured;
    }

    /**
     * @return bool
     */
    public function isHighlight()
    {
        return $this->_value === self::CodeType_Highlight;
    }

    /**
     * @return bool
     */
    public function isHomePageFeatured()
    {
        return $this->_value === self::CodeType_HomePageFeatured;
    }

    /**
     * @return bool
     */
    public function isProPackBundle()
    {
        return $this->_value === self::CodeType_ProPackBundle;
    }

    /**
     * @return bool
     */
    public function isBasicUpgradePackBundle()
    {
        return $this->_value === self::CodeType_BasicUpgradePackBundle;
    }

    /**
     * @return bool
     */
    public function isValuePackBundle()
    {
        return $this->_value === self::CodeType_ValuePackBundle;
    }

    /**
     * @return bool
     */
    public function isProPackPlusBundle()
    {
        return $this->_value === self::CodeType_ProPackPlusBundle;
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

ListingEnhancementsCodeType::_register();
