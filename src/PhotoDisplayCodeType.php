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
 * Specifies the type of image display used in a listing. Some options are
 * only available if images are hosted through eBay Picture Services (EPS).
 **/
class PhotoDisplayCodeType extends EbatNs_EnumType
{
    const TAG = 'PhotoDisplayCodeType';
    const NAME = 'PhotoDisplayCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * No special image display options. Valid for US Motors listings.
     **/
    const CodeType_None = 'None';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_SlideShow = 'SlideShow';

    /**
     * Increase the size of each image and allow buyers to enlarge images
     * further. Only available for site-hosted (EPS) images. Not valid for US Motors
     * listings. For all sites that do not automatically upgrade SuperSize to
     * PicturePack (see note below), specifying no SuperSize-qualified images is now
     * accepted in the request.
     * 
     * <span class="tablenote">
     * Note:
     * SuperSize is automatically upgraded to PicturePack for the same SuperSize
     * fee on the US Motors Parts & Accessories Category and US (site ID 0)
     * and CA (site ID 2) and CAFR (site ID 210). This upgrade applies
     * only to EPS images.
     * </span>
     **/
    const CodeType_SuperSize = 'SuperSize';

    /**
     * Increase the number of images displayed. This is only available for
     * images hosted with eBay. See GetCategoryFeatures and the
     * online Help (on the eBay site) for additional information.
     * 
     * Picture Pack applies to all sites
     * (including US    Motors), except for NL (site ID 146). You can specify a minimum of
     * one EPS picture, or no SuperSize-qualified EPS pictures in the request. For
     * the NL site, PicturePack is replaced with SuperSize.
     **/
    const CodeType_PicturePack = 'PicturePack';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_SiteHostedPictureShow = 'SiteHostedPictureShow';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_VendorHostedPictureShow = 'VendorHostedPictureShow';

    /**
     * This is valid for US Motors listing only. For other listings, use SuperSize.
     **/
    const CodeType_SuperSizePictureShow = 'SuperSizePictureShow';

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
     * @return PhotoDisplayCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PhotoDisplayCodeType|null $value
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
    public function isSlideShow()
    {
        return $this->_value === self::CodeType_SlideShow;
    }

    /**
     * @return bool
     */
    public function isSuperSize()
    {
        return $this->_value === self::CodeType_SuperSize;
    }

    /**
     * @return bool
     */
    public function isPicturePack()
    {
        return $this->_value === self::CodeType_PicturePack;
    }

    /**
     * @return bool
     */
    public function isSiteHostedPictureShow()
    {
        return $this->_value === self::CodeType_SiteHostedPictureShow;
    }

    /**
     * @return bool
     */
    public function isVendorHostedPictureShow()
    {
        return $this->_value === self::CodeType_VendorHostedPictureShow;
    }

    /**
     * @return bool
     */
    public function isSuperSizePictureShow()
    {
        return $this->_value === self::CodeType_SuperSizePictureShow;
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

PhotoDisplayCodeType::_register();
