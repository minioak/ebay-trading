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
 * Indicates which Gallery image enhancements to apply to the listing.
 **/
class GalleryTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'GalleryTypeCodeType';
    const NAME = 'GalleryTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Gallery is supported free on all sites. So this field is useful only for removing an existing feature setting
     * when using
     * RelistItem
     * .
     **/
    const CodeType_None = 'None';

    /**
     * Highlights the listing by randomly placing it at the top of the search results.
     * When the Featured First listing upgrade is selected for an item listing, the listing also automatically
     * gets the
     * Gallery and Plus functionality at no extra cost.
     * 
     * A user can see if a site supports the Featured First listing upgrade by using the
     * GeteBayDetails
     * call and passing in <code>ListingFeatureDetails</code> in the
     * DetailName
     * field. In the response, the value of the
     * ListingFeatureDetails.FeaturedFirst
     * field will show a value other than <code>Disabled</code> if the eBay site supports the Featured First listing
     * upgrade.
     * 
     * <span class="tablenote"><strong>Note:</strong>
     * The Featured First listing upgrade can no longer be used for new listings or revising existing listings in
     * any eBay marketplace. If this value is used in an Add/Revise/Relist call, sellers will get a warning message
     * about this value/feature being deprecated.
     * </span>
     **/
    const CodeType_Featured = 'Featured';

    /**
     * This feature, which is free on all sites, adds a Gallery image in the search results. A Gallery image is an image
     * that was uploaded and copied to EPS (eBay Picture Service). This copy is stored  for 30 days or until the image
     * is associated with a listing. Once the image is associated with a listing, the period is extended to 90 days
     * after the item's sale_end date  and is extended again if the item is relisted or used in subsequent listings.  As
     * part of storing a copy, EPS also makes additional sizes available (thumbnail,  main image, supersize,  popup,
     * etc.), which are used by the various Gallery enhancements.
     * 
     * All images must comply to the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture
     * Requirements.</a>
     **/
    const CodeType_Gallery = 'Gallery';

    /**
     * Adds a Gallery Plus icon to the listing.
     * 
     * When Plus is selected in a request that specifies at least two images (using
     * ItemType.PictureDetailsType.PictureURL), the Gallery Plus feature automatically includes a Gallery Showcase of
     * all the listing's images.
     * 
     * The Gallery Showcase displays when hovering over or clicking on the listing's Gallery Plus icon in the
     * search results. The Showcase window displays a large (400px x 400px) preview image which is first image specified
     * PictureURL, as well as up to 11 (64 px x 64 px) selectable thumbnails for the remaining EPS images. Clicking on
     * the preview image displays the item's listing page.
     * 
     * If Plus is selected and the request includes only one EPS image or any self-hosted images, the listing
     * includes a Gallery Plus icon that, when hovered over or clicked, displays a large (400px x 400px) preview image
     * of the item. Clicking the image displays the View Item page for that listing.
     * 
     * When using RelistItem or ReviseItem (item has no bids and more than 12 hours before the listing's end),
     * Plus can be unselected in the request. However, the Plus fee will still apply if a previous request selected
     * Plus. There is at most one Plus fee per listing.
     * 
     * When "Plus" is included in an item listing, the listing also automatically gets the
     * Gallery functionality at no extra cost. "Gallery" does not need to be specified
     * separately in the listing.
     * 
     * Listing images that are originally smaller than 400px x 400px are centered in the
     * preview frame. Images that are originally larger than 400px x 400px are scaled down
     * to 400px on their longest side (maintaining their original aspect ratio).
     **/
    const CodeType_Plus = 'Plus';

    /**
     * Reserved for internal use
     * only
     * .
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
     * @return GalleryTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param GalleryTypeCodeType|null $value
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
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
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
    public function isGallery()
    {
        return $this->_value === self::CodeType_Gallery;
    }

    /**
     * @return bool
     */
    public function isPlus()
    {
        return $this->_value === self::CodeType_Plus;
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

GalleryTypeCodeType::_register();
