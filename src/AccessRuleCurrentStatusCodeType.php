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
 * Enumerated type that defines the possible values that can be returned in the
 * RuleCurrentStatus
 * output field of the
 * GetApiAccessRules
 * call. The
 * RuleCurrentStatus
 * is only returned if the daily, hourly, or periodic call limit for the corresponding API call has been exceeded,
 * or if a call limit does not apply to the API call.
 **/
class AccessRuleCurrentStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'AccessRuleCurrentStatusCodeType';
    const NAME = 'AccessRuleCurrentStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that usage limits do not apply to the corresponding API call.
     **/
    const CodeType_NotSet = 'NotSet';

    /**
     * This value indicates that your application has exceeded its hourly hard call limit for the corresponding API
     * call.
     **/
    const CodeType_HourlyLimitExceeded = 'HourlyLimitExceeded';

    /**
     * This value indicates that your application has exceeded its daily hard call limit for the corresponding API call.
     **/
    const CodeType_DailyLimitExceeded = 'DailyLimitExceeded';

    /**
     * This value indicates that your application has exceeded its periodic hard call limit for the corresponding API
     * call. The period is defined in the
     * ApiAccessRule.Period
     * field and can be a calendar month or a specific number of days.
     **/
    const CodeType_PeriodicLimitExceeded = 'PeriodicLimitExceeded';

    /**
     * This value indicates that your application has exceeded its hourly soft call limit for the corresponding API
     * call.
     **/
    const CodeType_HourlySoftLimitExceeded = 'HourlySoftLimitExceeded';

    /**
     * This value indicates that your application has exceeded its daily soft call limit for the corresponding API call.
     **/
    const CodeType_DailySoftLimitExceeded = 'DailySoftLimitExceeded';

    /**
     * This value indicates that your application has exceeded its periodic soft call limit for the corresponding API
     * call. The period is defined in the
     * ApiAccessRule.Period
     * field and can be a calendar month or a specific number of days.
     **/
    const CodeType_PeriodicSoftLimitExceeded = 'PeriodicSoftLimitExceeded';

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
     * @return AccessRuleCurrentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AccessRuleCurrentStatusCodeType|null $value
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
    public function isNotSet()
    {
        return $this->_value === self::CodeType_NotSet;
    }

    /**
     * @return bool
     */
    public function isHourlyLimitExceeded()
    {
        return $this->_value === self::CodeType_HourlyLimitExceeded;
    }

    /**
     * @return bool
     */
    public function isDailyLimitExceeded()
    {
        return $this->_value === self::CodeType_DailyLimitExceeded;
    }

    /**
     * @return bool
     */
    public function isPeriodicLimitExceeded()
    {
        return $this->_value === self::CodeType_PeriodicLimitExceeded;
    }

    /**
     * @return bool
     */
    public function isHourlySoftLimitExceeded()
    {
        return $this->_value === self::CodeType_HourlySoftLimitExceeded;
    }

    /**
     * @return bool
     */
    public function isDailySoftLimitExceeded()
    {
        return $this->_value === self::CodeType_DailySoftLimitExceeded;
    }

    /**
     * @return bool
     */
    public function isPeriodicSoftLimitExceeded()
    {
        return $this->_value === self::CodeType_PeriodicSoftLimitExceeded;
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

AccessRuleCurrentStatusCodeType::_register();
