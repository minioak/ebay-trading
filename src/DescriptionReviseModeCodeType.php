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
 * Enumerated type containing the list of values that can be used when revising the
 * item description of an active listing through the Revise API calls.
 **/
class DescriptionReviseModeCodeType extends EbatNs_EnumType
{
    const TAG = 'DescriptionReviseModeCodeType';
    const NAME = 'DescriptionReviseModeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Use this value in the
     * Item.DescriptionReviseMode
     * field if you want
     * to completely replace (overwrite) the item description of the active listing.
     **/
    const CodeType_Replace = 'Replace';

    /**
     * Use this value in the
     * Item.DescriptionReviseMode
     * field if you want
     * to prepend text to the item description of the active listing.
     **/
    const CodeType_Prepend = 'Prepend';

    /**
     * Use this value in the
     * Item.DescriptionReviseMode
     * field if you want
     * to append text to the item description of the active listing.
     **/
    const CodeType_Append = 'Append';

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
     * @return DescriptionReviseModeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DescriptionReviseModeCodeType|null $value
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
    public function isReplace()
    {
        return $this->_value === self::CodeType_Replace;
    }

    /**
     * @return bool
     */
    public function isPrepend()
    {
        return $this->_value === self::CodeType_Prepend;
    }

    /**
     * @return bool
     */
    public function isAppend()
    {
        return $this->_value === self::CodeType_Append;
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

DescriptionReviseModeCodeType::_register();
