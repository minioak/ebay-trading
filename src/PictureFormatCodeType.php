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
 * Indicates the format of the picture returned. Sometimes this is different than the format of the uploaded
 * picture.
 **/
class PictureFormatCodeType extends EbatNs_EnumType
{
    const TAG = 'PictureFormatCodeType';
    const NAME = 'PictureFormatCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Indicates the picture was returned in JPG format. Uploaded pictures in JPG, TIF, or BMP will be returned as JPG.
     **/
    const CodeType_JPG = 'JPG';

    /**
     * Indicates the picture was returned in GIF format.
     **/
    const CodeType_GIF = 'GIF';

    /**
     * Indicates the picture was returned in PNG format.
     **/
    const CodeType_PNG = 'PNG';

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
     * @return PictureFormatCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PictureFormatCodeType|null $value
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
    public function isJPG()
    {
        return $this->_value === self::CodeType_JPG;
    }

    /**
     * @return bool
     */
    public function isGIF()
    {
        return $this->_value === self::CodeType_GIF;
    }

    /**
     * @return bool
     */
    public function isPNG()
    {
        return $this->_value === self::CodeType_PNG;
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

PictureFormatCodeType::_register();
