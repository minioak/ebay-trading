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
 * Indicates how the application wants eBay to handle the user's token after
 * the user signs in.
 **/
class TokenReturnMethodCodeType extends EbatNs_EnumType
{
    const TAG = 'TokenReturnMethodCodeType';
    const NAME = 'TokenReturnMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Return the token in the HTTP redirect to the application-specified
     * accept URL.
     **/
    const CodeType_Redirect = 'Redirect';

    /**
     * Leave the token at eBay so that the application can get
     * the token through the FetchToken API call (SecretId required).
     **/
    const CodeType_FetchToken = 'FetchToken';

    /**
     * Reserved for future use
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
     * @return TokenReturnMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TokenReturnMethodCodeType|null $value
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
    public function isRedirect()
    {
        return $this->_value === self::CodeType_Redirect;
    }

    /**
     * @return bool
     */
    public function isFetchToken()
    {
        return $this->_value === self::CodeType_FetchToken;
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

TokenReturnMethodCodeType::_register();
