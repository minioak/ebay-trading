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
 * This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 **/
class InsuranceSelectedCodeType extends EbatNs_EnumType
{
    const TAG = 'InsuranceSelectedCodeType';
    const NAME = 'InsuranceSelectedCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Shipping insurance was not offered.
     **/
    const CodeType_NotOffered = 'NotOffered';

    /**
     * Shipping insurance was offered but not selected.
     **/
    const CodeType_OfferedNotSelected = 'OfferedNotSelected';

    /**
     * Shipping insurance was offered and selected.
     **/
    const CodeType_OfferedSelected = 'OfferedSelected';

    /**
     * Shipping insurance was required.
     **/
    const CodeType_Required = 'Required';

    /**
     * Shipping insurance was included in Shipping and Handling fee.
     **/
    const CodeType_IncludedInShippingHandling = 'IncludedInShippingHandling';

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
     * @return InsuranceSelectedCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param InsuranceSelectedCodeType|null $value
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
    public function isNotOffered()
    {
        return $this->_value === self::CodeType_NotOffered;
    }

    /**
     * @return bool
     */
    public function isOfferedNotSelected()
    {
        return $this->_value === self::CodeType_OfferedNotSelected;
    }

    /**
     * @return bool
     */
    public function isOfferedSelected()
    {
        return $this->_value === self::CodeType_OfferedSelected;
    }

    /**
     * @return bool
     */
    public function isRequired()
    {
        return $this->_value === self::CodeType_Required;
    }

    /**
     * @return bool
     */
    public function isIncludedInShippingHandling()
    {
        return $this->_value === self::CodeType_IncludedInShippingHandling;
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

InsuranceSelectedCodeType::_register();
