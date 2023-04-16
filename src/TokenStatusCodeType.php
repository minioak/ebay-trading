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
 * Contains the status of the token
 **/
class TokenStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'TokenStatusCodeType';
    const NAME = 'TokenStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Token is Active
     **/
    const CodeType_Active = 'Active';

    /**
     * Token is Expired
     **/
    const CodeType_Expired = 'Expired';

    /**
     * Token is revoked by eBay
     **/
    const CodeType_RevokedByeBay = 'RevokedByeBay';

    /**
     * Token is revoked by user
     **/
    const CodeType_RevokedByUser = 'RevokedByUser';

    /**
     * Token is revoked by Application
     **/
    const CodeType_RevokedByApp = 'RevokedByApp';

    /**
     * Token is Invalid
     **/
    const CodeType_Invalid = 'Invalid';

    /**
     * Reserved for internal or future use
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
     * @return TokenStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TokenStatusCodeType|null $value
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
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isExpired()
    {
        return $this->_value === self::CodeType_Expired;
    }

    /**
     * @return bool
     */
    public function isRevokedByeBay()
    {
        return $this->_value === self::CodeType_RevokedByeBay;
    }

    /**
     * @return bool
     */
    public function isRevokedByUser()
    {
        return $this->_value === self::CodeType_RevokedByUser;
    }

    /**
     * @return bool
     */
    public function isRevokedByApp()
    {
        return $this->_value === self::CodeType_RevokedByApp;
    }

    /**
     * @return bool
     */
    public function isInvalid()
    {
        return $this->_value === self::CodeType_Invalid;
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

TokenStatusCodeType::_register();
