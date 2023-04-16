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
 * Values to be used in choosing that an uploaded picture is added to the available pictures on the eBay site.
 **/
class PictureUploadPolicyCodeType extends EbatNs_EnumType
{
    const TAG = 'PictureUploadPolicyCodeType';
    const NAME = 'PictureUploadPolicyCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Specifies that an uploaded picture is added to the pictures available to a
     * seller on the eBay site.
     **/
    const CodeType_Add = 'Add';

    /**
     * Specifies, first, that all pictures available to a seller on the eBay site are
     * removed, and then second, that the currently uploaded picture is made
     * available to the seller.
     **/
    const CodeType_ClearAndAdd = 'ClearAndAdd';

    /**
     * Reserved for internal use ONLY.
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
     * @return PictureUploadPolicyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PictureUploadPolicyCodeType|null $value
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
    public function isAdd()
    {
        return $this->_value === self::CodeType_Add;
    }

    /**
     * @return bool
     */
    public function isClearAndAdd()
    {
        return $this->_value === self::CodeType_ClearAndAdd;
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

PictureUploadPolicyCodeType::_register();
