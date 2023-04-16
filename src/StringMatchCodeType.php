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
 * Indicates the type of string matching to use
 * when a value is submitted in CharityName. If no value is
 * specified, default behavior is "StartsWith." Does not
 * apply to Query.
 **/
class StringMatchCodeType extends EbatNs_EnumType
{
    const TAG = 'StringMatchCodeType';
    const NAME = 'StringMatchCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (in) Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * (in) Matches strings that begin with the submitted
     * value. For example, submitting a CharityName value
     * of "heart" matches "Heart of Gold," but not "Open
     * Hearts." Default behavior if no value is
     * specified.
     **/
    const CodeType_StartsWith = 'StartsWith';

    /**
     * (in) Matches strings that contain the submitted
     * value. For example, submitting a CharityName value
     * of "heart" matches both "Heart of Gold" and "Open
     * Hearts."
     **/
    const CodeType_Contains = 'Contains';
    
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
     * @return StringMatchCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StringMatchCodeType|null $value
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
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isStartsWith()
    {
        return $this->_value === self::CodeType_StartsWith;
    }

    /**
     * @return bool
     */
    public function isContains()
    {
        return $this->_value === self::CodeType_Contains;
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

StringMatchCodeType::_register();
