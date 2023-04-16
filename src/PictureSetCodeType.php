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
 * Specifies whether to generate the 'standard' set of images for each picture or to also generate a super-sized
 * image.
 * 
 * 
 * Note:
 * This type is used only for images that will be used in a listing.
 **/
class PictureSetCodeType extends EbatNs_EnumType
{
    const TAG = 'PictureSetCodeType';
    const NAME = 'PictureSetCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Indicates to generate the "Standard" set of images, which is a set of 7 images of various sizes, for each
     * ExternalPictureURL
     * submitted in the request.
     * This is the default.
     * Note:
     * This field is used only for images that will be used in a listing.
     **/
    const CodeType_Standard = 'Standard';

    /**
     * Indicates to generate the "Standard" set <i>plus</i> a super-sized image for each
     * ExternalPictureURL
     * submitted in the request.
     * In order to include the super-sized image in the Add Item calls, you must also specify
     * Item.PictureDetails.PhotoDisplay.Supersize
     * or
     * Item.PictureDetails.PhotoDisplay.PicturePack
     * .
     * 
     * Note:
     * This field is used only for images that will be used in a listing.
     **/
    const CodeType_Supersize = 'Supersize';

    /**
     * This field is no longer returned.
     **/
    const CodeType_Large = 'Large';

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
     * @return PictureSetCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PictureSetCodeType|null $value
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
    public function isStandard()
    {
        return $this->_value === self::CodeType_Standard;
    }

    /**
     * @return bool
     */
    public function isSupersize()
    {
        return $this->_value === self::CodeType_Supersize;
    }

    /**
     * @return bool
     */
    public function isLarge()
    {
        return $this->_value === self::CodeType_Large;
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

PictureSetCodeType::_register();
