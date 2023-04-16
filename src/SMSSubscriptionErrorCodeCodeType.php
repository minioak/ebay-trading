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
 * Type of SMS subscription error.
 **/
class SMSSubscriptionErrorCodeCodeType extends EbatNs_EnumType
{
    const TAG = 'SMSSubscriptionErrorCodeCodeType';
    const NAME = 'SMSSubscriptionErrorCodeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Aggregator not available.
     **/
    const CodeType_SMSAggregatorNotAvailable = 'SMSAggregatorNotAvailable';

    /**
     * Phone number invalid.
     **/
    const CodeType_PhoneNumberInvalid = 'PhoneNumberInvalid';

    /**
     * Phone number has changed.
     **/
    const CodeType_PhoneNumberChanged = 'PhoneNumberChanged';

    /**
     * The carrier has changed.
     **/
    const CodeType_PhoneNumberCarrierChanged = 'PhoneNumberCarrierChanged';

    /**
     * The user has requested to be unregistered.
     **/
    const CodeType_UserRequestedUnregistration = 'UserRequestedUnregistration';

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
     * @return SMSSubscriptionErrorCodeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SMSSubscriptionErrorCodeCodeType|null $value
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
    public function isSMSAggregatorNotAvailable()
    {
        return $this->_value === self::CodeType_SMSAggregatorNotAvailable;
    }

    /**
     * @return bool
     */
    public function isPhoneNumberInvalid()
    {
        return $this->_value === self::CodeType_PhoneNumberInvalid;
    }

    /**
     * @return bool
     */
    public function isPhoneNumberChanged()
    {
        return $this->_value === self::CodeType_PhoneNumberChanged;
    }

    /**
     * @return bool
     */
    public function isPhoneNumberCarrierChanged()
    {
        return $this->_value === self::CodeType_PhoneNumberCarrierChanged;
    }

    /**
     * @return bool
     */
    public function isUserRequestedUnregistration()
    {
        return $this->_value === self::CodeType_UserRequestedUnregistration;
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

SMSSubscriptionErrorCodeCodeType::_register();
