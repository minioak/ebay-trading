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
 * Enumerated type defining the possible states for a seller's charity seller account.
 **/
class CharitySellerStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'CharitySellerStatusCodeType';
    const NAME = 'CharitySellerStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The seller's charity seller account is suspended.
     **/
    const CodeType_Suspended = 'Suspended';

    /**
     * The seller is a registered charity seller.
     **/
    const CodeType_Registered = 'Registered';

    /**
     * The seller is no longer a registered charity seller. The account with the PayPal Giving Fund is closed.
     **/
    const CodeType_Closed = 'Closed';

    /**
     * The credit card associated with a seller's charity seller account has expired.
     **/
    const CodeType_CreditCardExpired = 'CreditCardExpired';

    /**
     * The token associated with a seller's charity seller account has expired.
     **/
    const CodeType_TokenExpired = 'TokenExpired';

    /**
     * The credit card associated with a seller's charity seller account will expire in 15 (or fewer) days.
     **/
    const CodeType_CreditCardAboutToExpire = 'CreditCardAboutToExpire';

    
    const CodeType_RegisteredNoCreditCard = 'RegisteredNoCreditCard';

    /**
     * The seller is no longer a registered charity seller and has lost direct seller status.
     **/
    const CodeType_NotRegisteredLostDirectSellerStatus = 'NotRegisteredLostDirectSellerStatus';

    
    const CodeType_DirectDebitRejected = 'DirectDebitRejected';

    /**
     * The seller is a registered direct seller, but has no credit card associated with the charity seller account.
     **/
    const CodeType_RegisteredDirectSeller = 'RegisteredDirectSeller';

    /**
     * The seller is a registered charity seller with no donation payment method on file.
     **/
    const CodeType_RegisteredNoPaymentMethod = 'RegisteredNoPaymentMethod';

    /**
     * Reserved for internal or future use.
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
     * @return CharitySellerStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CharitySellerStatusCodeType|null $value
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
    public function isSuspended()
    {
        return $this->_value === self::CodeType_Suspended;
    }

    /**
     * @return bool
     */
    public function isRegistered()
    {
        return $this->_value === self::CodeType_Registered;
    }

    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->_value === self::CodeType_Closed;
    }

    /**
     * @return bool
     */
    public function isCreditCardExpired()
    {
        return $this->_value === self::CodeType_CreditCardExpired;
    }

    /**
     * @return bool
     */
    public function isTokenExpired()
    {
        return $this->_value === self::CodeType_TokenExpired;
    }

    /**
     * @return bool
     */
    public function isCreditCardAboutToExpire()
    {
        return $this->_value === self::CodeType_CreditCardAboutToExpire;
    }

    /**
     * @return bool
     */
    public function isRegisteredNoCreditCard()
    {
        return $this->_value === self::CodeType_RegisteredNoCreditCard;
    }

    /**
     * @return bool
     */
    public function isNotRegisteredLostDirectSellerStatus()
    {
        return $this->_value === self::CodeType_NotRegisteredLostDirectSellerStatus;
    }

    /**
     * @return bool
     */
    public function isDirectDebitRejected()
    {
        return $this->_value === self::CodeType_DirectDebitRejected;
    }

    /**
     * @return bool
     */
    public function isRegisteredDirectSeller()
    {
        return $this->_value === self::CodeType_RegisteredDirectSeller;
    }

    /**
     * @return bool
     */
    public function isRegisteredNoPaymentMethod()
    {
        return $this->_value === self::CodeType_RegisteredNoPaymentMethod;
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

CharitySellerStatusCodeType::_register();
