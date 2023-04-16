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
 * Enumerated type used to specify where a listing's image(s) are hosted.
 **/
class PictureSourceCodeType extends EbatNs_EnumType
{
    const TAG = 'PictureSourceCodeType';
    const NAME = 'PictureSourceCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the image(s) specified in the
     * PictureURL
     * field(s) are hosted by eBay Picture Services.
     **/
    const CodeType_EPS = 'EPS';

    /**
     * This value is deprecated.
     **/
    const CodeType_PictureManager = 'PictureManager';

    /**
     * This value indicates that the image(s) specified in the
     * PictureURL
     * field(s) are hosted by a third-party vendor. Note that if pictures are externally-hosted, they must be hosted on
     * a site that is using the 'https' protocol.
     **/
    const CodeType_Vendor = 'Vendor';

    /**
     * (out) Reserved for internal or future use.
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
     * @return PictureSourceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PictureSourceCodeType|null $value
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
    public function isEPS()
    {
        return $this->_value === self::CodeType_EPS;
    }

    /**
     * @return bool
     */
    public function isPictureManager()
    {
        return $this->_value === self::CodeType_PictureManager;
    }

    /**
     * @return bool
     */
    public function isVendor()
    {
        return $this->_value === self::CodeType_Vendor;
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

PictureSourceCodeType::_register();
