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
 * This enumerated type is deprecated.
 **/
class PictureManagerPictureDisplayTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'PictureManagerPictureDisplayTypeCodeType';
    const NAME = 'PictureManagerPictureDisplayTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_Thumbnail = 'Thumbnail';

    /**
     * This value is not used.
     **/
    const CodeType_BIBO = 'BIBO';

    /**
     * This value is not used.
     **/
    const CodeType_Standard = 'Standard';

    /**
     * This value is not used.
     **/
    const CodeType_Large = 'Large';

    /**
     * This value is not used.
     **/
    const CodeType_Supersize = 'Supersize';

    /**
     * This value is not used.
     **/
    const CodeType_Original = 'Original';

    /**
     * This value is not used.
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
     * @return PictureManagerPictureDisplayTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PictureManagerPictureDisplayTypeCodeType|null $value
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
    public function isThumbnail()
    {
        return $this->_value === self::CodeType_Thumbnail;
    }

    /**
     * @return bool
     */
    public function isBIBO()
    {
        return $this->_value === self::CodeType_BIBO;
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
    public function isLarge()
    {
        return $this->_value === self::CodeType_Large;
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
    public function isOriginal()
    {
        return $this->_value === self::CodeType_Original;
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

PictureManagerPictureDisplayTypeCodeType::_register();
