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
 * The current state of user SMS subscription.
 **/
class SMSSubscriptionUserStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'SMSSubscriptionUserStatusCodeType';
    const NAME = 'SMSSubscriptionUserStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (out) Registered.
     **/
    const CodeType_Registered = 'Registered';

    /**
     * (out) Unregistered.
     **/
    const CodeType_Unregistered = 'Unregistered';

    /**
     * (out) Pending subscription.
     **/
    const CodeType_Pending = 'Pending';

    /**
     * (out) Subscription failed.
     **/
    const CodeType_Failed = 'Failed';

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
     * @return SMSSubscriptionUserStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SMSSubscriptionUserStatusCodeType|null $value
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
    public function isRegistered()
    {
        return $this->_value === self::CodeType_Registered;
    }

    /**
     * @return bool
     */
    public function isUnregistered()
    {
        return $this->_value === self::CodeType_Unregistered;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->_value === self::CodeType_Pending;
    }

    /**
     * @return bool
     */
    public function isFailed()
    {
        return $this->_value === self::CodeType_Failed;
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

SMSSubscriptionUserStatusCodeType::_register();
