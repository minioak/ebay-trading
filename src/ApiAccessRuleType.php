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
 * This type is used by the
 * ApiAccessRule
 * container that is returned in the
 * GetApiAccessRules
 * call response. An
 * ApiAccessRule
 * container will be returned for every Trading API call that the user/application has used. The
 * ApiAccessRule
 * container consists of hourly, daily, and periodic call limits for the call, the total number of times the call
 * was used, and other information about usage of the call.
 **/
class ApiAccessRuleType extends EbatNs_ComplexType
{
    const TAG = 'ApiAccessRuleType';
    const NAME = 'ApiAccessRuleType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CallName = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CountsTowardAggregate = null;

    /**
     * @var int|null
     */
    protected $DailyHardLimit = null;

    /**
     * @var int|null
     */
    protected $DailySoftLimit = null;

    /**
     * @var int|null
     */
    protected $DailyUsage = null;

    /**
     * @var int|null
     */
    protected $HourlyHardLimit = null;

    /**
     * @var int|null
     */
    protected $HourlySoftLimit = null;

    /**
     * @var int|null
     */
    protected $HourlyUsage = null;

    /**
     * @var int|null
     */
    protected $Period = null;

    /**
     * @var int|null
     */
    protected $PeriodicHardLimit = null;

    /**
     * @var int|null
     */
    protected $PeriodicSoftLimit = null;

    /**
     * @var int|null
     */
    protected $PeriodicUsage = null;

    /**
     * @var string|null
     */
    protected $PeriodicStartDate = null;

    /**
     * @var string|null
     */
    protected $ModTime = null;

    /**
     * @var AccessRuleCurrentStatusCodeType|null
     */
    protected $RuleCurrentStatus = null;

    /**
     * @var AccessRuleStatusCodeType|null
     */
    protected $RuleStatus = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCallName()
    {
        return $this->_dc($this->CallName, 'CallName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCallName($value)
    {
        $this->CallName = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCountsTowardAggregate()
    {
        return $this->_dc($this->CountsTowardAggregate === 'true', 'CountsTowardAggregate');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCountsTowardAggregate($value)
    {
        $this->CountsTowardAggregate = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDailyHardLimit()
    {
        return $this->_dc($this->DailyHardLimit, 'DailyHardLimit');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDailyHardLimit($value)
    {
        $this->DailyHardLimit = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDailySoftLimit()
    {
        return $this->_dc($this->DailySoftLimit, 'DailySoftLimit');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDailySoftLimit($value)
    {
        $this->DailySoftLimit = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDailyUsage()
    {
        return $this->_dc($this->DailyUsage, 'DailyUsage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDailyUsage($value)
    {
        $this->DailyUsage = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHourlyHardLimit()
    {
        return $this->_dc($this->HourlyHardLimit, 'HourlyHardLimit');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setHourlyHardLimit($value)
    {
        $this->HourlyHardLimit = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHourlySoftLimit()
    {
        return $this->_dc($this->HourlySoftLimit, 'HourlySoftLimit');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setHourlySoftLimit($value)
    {
        $this->HourlySoftLimit = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHourlyUsage()
    {
        return $this->_dc($this->HourlyUsage, 'HourlyUsage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setHourlyUsage($value)
    {
        $this->HourlyUsage = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPeriod()
    {
        return $this->_dc($this->Period, 'Period');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPeriod($value)
    {
        $this->Period = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPeriodicHardLimit()
    {
        return $this->_dc($this->PeriodicHardLimit, 'PeriodicHardLimit');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPeriodicHardLimit($value)
    {
        $this->PeriodicHardLimit = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPeriodicSoftLimit()
    {
        return $this->_dc($this->PeriodicSoftLimit, 'PeriodicSoftLimit');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPeriodicSoftLimit($value)
    {
        $this->PeriodicSoftLimit = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPeriodicUsage()
    {
        return $this->_dc($this->PeriodicUsage, 'PeriodicUsage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPeriodicUsage($value)
    {
        $this->PeriodicUsage = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPeriodicStartDate()
    {
        return $this->_dc($this->PeriodicStartDate, 'PeriodicStartDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPeriodicStartDate($value)
    {
        $this->PeriodicStartDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTime()
    {
        return $this->_dc($this->ModTime, 'ModTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setModTime($value)
    {
        $this->ModTime = self::_string($value);
    }

    /**
     * @return AccessRuleCurrentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRuleCurrentStatus()
    {
        return $this->_dc($this->RuleCurrentStatus);
    }

    /**
     * @param AccessRuleCurrentStatusCodeType|null $value
     * @return void
     */
    public function setRuleCurrentStatus($value)
    {
        $this->RuleCurrentStatus = $this->_enum($value, AccessRuleCurrentStatusCodeType::class);
    }

    /**
     * @return AccessRuleStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRuleStatus()
    {
        return $this->_dc($this->RuleStatus);
    }

    /**
     * @param AccessRuleStatusCodeType|null $value
     * @return void
     */
    public function setRuleStatus($value)
    {
        $this->RuleStatus = $this->_enum($value, AccessRuleStatusCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CallName' => [],
            'CountsTowardAggregate' => ['type' => 'bool'],
            'DailyHardLimit' => ['type' => 'int'],
            'DailySoftLimit' => ['type' => 'int'],
            'DailyUsage' => ['type' => 'int'],
            'HourlyHardLimit' => ['type' => 'int'],
            'HourlySoftLimit' => ['type' => 'int'],
            'HourlyUsage' => ['type' => 'int'],
            'Period' => ['type' => 'int'],
            'PeriodicHardLimit' => ['type' => 'int'],
            'PeriodicSoftLimit' => ['type' => 'int'],
            'PeriodicUsage' => ['type' => 'int'],
            'PeriodicStartDate' => [],
            'ModTime' => [],
            'RuleCurrentStatus' => ['type' => 'AccessRuleCurrentStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RuleStatus' => ['type' => 'AccessRuleStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ApiAccessRuleType::_register();
