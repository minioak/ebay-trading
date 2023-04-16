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
 * The period of time for which to create a summary.
 **/
class SummaryWindowPeriodCodeType extends EbatNs_EnumType
{
    const TAG = 'SummaryWindowPeriodCodeType';
    const NAME = 'SummaryWindowPeriodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The last 24 hours.
     **/
    const CodeType_Last24Hours = 'Last24Hours';

    /**
     * The last 7 days.
     **/
    const CodeType_Last7Days = 'Last7Days';

    /**
     * The last 31 days.
     **/
    const CodeType_Last31Days = 'Last31Days';

    /**
     * The current week.
     **/
    const CodeType_CurrentWeek = 'CurrentWeek';

    /**
     * The prior week.
     **/
    const CodeType_LastWeek = 'LastWeek';

    /**
     * The current month.
     **/
    const CodeType_CurrentMonth = 'CurrentMonth';

    /**
     * The prior month.
     **/
    const CodeType_LastMonth = 'LastMonth';

    /**
     * The last 60 days.
     **/
    const CodeType_Last60Days = 'Last60Days';

    
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
     * @return SummaryWindowPeriodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SummaryWindowPeriodCodeType|null $value
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
    public function isLast24Hours()
    {
        return $this->_value === self::CodeType_Last24Hours;
    }

    /**
     * @return bool
     */
    public function isLast7Days()
    {
        return $this->_value === self::CodeType_Last7Days;
    }

    /**
     * @return bool
     */
    public function isLast31Days()
    {
        return $this->_value === self::CodeType_Last31Days;
    }

    /**
     * @return bool
     */
    public function isCurrentWeek()
    {
        return $this->_value === self::CodeType_CurrentWeek;
    }

    /**
     * @return bool
     */
    public function isLastWeek()
    {
        return $this->_value === self::CodeType_LastWeek;
    }

    /**
     * @return bool
     */
    public function isCurrentMonth()
    {
        return $this->_value === self::CodeType_CurrentMonth;
    }

    /**
     * @return bool
     */
    public function isLastMonth()
    {
        return $this->_value === self::CodeType_LastMonth;
    }

    /**
     * @return bool
     */
    public function isLast60Days()
    {
        return $this->_value === self::CodeType_Last60Days;
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

SummaryWindowPeriodCodeType::_register();
