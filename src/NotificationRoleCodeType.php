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
 * Defines roles for platform notifications.
 **/
class NotificationRoleCodeType extends EbatNs_EnumType
{
    const TAG = 'NotificationRoleCodeType';
    const NAME = 'NotificationRoleCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (in) Specifies that you want to set or return application-level
     * preferences. Default value.
     **/
    const CodeType_Application = 'Application';

    /**
     * (in) Specifies that you want to set or return user-level preferences.
     **/
    const CodeType_User = 'User';

    /**
     * (in) Specifies that you want to set or return user data-level preferences.
     **/
    const CodeType_UserData = 'UserData';

    /**
     * (in) Specifies that you want to set or return event-level preferences.
     **/
    const CodeType_Event = 'Event';

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
     * @return NotificationRoleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param NotificationRoleCodeType|null $value
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
    public function isApplication()
    {
        return $this->_value === self::CodeType_Application;
    }

    /**
     * @return bool
     */
    public function isUser()
    {
        return $this->_value === self::CodeType_User;
    }

    /**
     * @return bool
     */
    public function isUserData()
    {
        return $this->_value === self::CodeType_UserData;
    }

    /**
     * @return bool
     */
    public function isEvent()
    {
        return $this->_value === self::CodeType_Event;
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

NotificationRoleCodeType::_register();
