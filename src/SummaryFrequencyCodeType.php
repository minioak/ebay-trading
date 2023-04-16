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
 * How often the summary is to be delivered.
 **/
class SummaryFrequencyCodeType extends EbatNs_EnumType
{
    const TAG = 'SummaryFrequencyCodeType';
    const NAME = 'SummaryFrequencyCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Deliver every Sunday.
     **/
    const CodeType_EverySunday = 'EverySunday';

    /**
     * Deliver every Monday.
     **/
    const CodeType_EveryMonday = 'EveryMonday';

    /**
     * Deliver every Tuesday.
     **/
    const CodeType_EveryTuesday = 'EveryTuesday';

    /**
     * Deliver every Wednesday.
     **/
    const CodeType_EveryWednesday = 'EveryWednesday';

    /**
     * Deliver every Thursday.
     **/
    const CodeType_EveryThursday = 'EveryThursday';

    /**
     * Deliver every Friday.
     **/
    const CodeType_EveryFriday = 'EveryFriday';

    /**
     * Deliver every Saturday.
     **/
    const CodeType_EverySaturday = 'EverySaturday';

    /**
     * On day 1 of the month.
     **/
    const CodeType_MonthlyOn1st = 'MonthlyOn1st';

    /**
     * On day 2 of the month.
     **/
    const CodeType_MonthlyOn2nd = 'MonthlyOn2nd';

    /**
     * On day 3 of the month.
     **/
    const CodeType_MonthlyOn3rd = 'MonthlyOn3rd';

    /**
     * On day 4 of the month.
     **/
    const CodeType_MonthlyOn4th = 'MonthlyOn4th';

    /**
     * On day 5 of the month.
     **/
    const CodeType_MonthlyOn5th = 'MonthlyOn5th';

    /**
     * On day 6 of the month.
     **/
    const CodeType_MonthlyOn6th = 'MonthlyOn6th';

    /**
     * On day 7 of the month.
     **/
    const CodeType_MonthlyOn7th = 'MonthlyOn7th';

    /**
     * On day 8 of the month.
     **/
    const CodeType_MonthlyOn8th = 'MonthlyOn8th';

    /**
     * On day 9 of the month.
     **/
    const CodeType_MonthlyOn9th = 'MonthlyOn9th';

    /**
     * On day 10 of the month.
     **/
    const CodeType_MonthlyOn10th = 'MonthlyOn10th';

    /**
     * On day 11 of the month.
     **/
    const CodeType_MonthlyOn11th = 'MonthlyOn11th';

    /**
     * On day 12 of the month.
     **/
    const CodeType_MonthlyOn12th = 'MonthlyOn12th';

    /**
     * On day 13 of the month.
     **/
    const CodeType_MonthlyOn13th = 'MonthlyOn13th';

    /**
     * On day 14 of the month.
     **/
    const CodeType_MonthlyOn14th = 'MonthlyOn14th';

    /**
     * On day 15 of the month.
     **/
    const CodeType_MonthlyOn15th = 'MonthlyOn15th';

    /**
     * On day 16 of the month.
     **/
    const CodeType_MonthlyOn16th = 'MonthlyOn16th';

    /**
     * On day 17 of the month.
     **/
    const CodeType_MonthlyOn17th = 'MonthlyOn17th';

    /**
     * On day 18 of the month.
     **/
    const CodeType_MonthlyOn18th = 'MonthlyOn18th';

    /**
     * On day 19 of the month.
     **/
    const CodeType_MonthlyOn19th = 'MonthlyOn19th';

    /**
     * On day 20 of the month.
     **/
    const CodeType_MonthlyOn20th = 'MonthlyOn20th';

    /**
     * On day 21 of the month.
     **/
    const CodeType_MonthlyOn21st = 'MonthlyOn21st';

    /**
     * On day 22 of the month.
     **/
    const CodeType_MonthlyOn22nd = 'MonthlyOn22nd';

    /**
     * On day 23 of the month.
     **/
    const CodeType_MonthlyOn23rd = 'MonthlyOn23rd';

    /**
     * On day 24 of the month.
     **/
    const CodeType_MonthlyOn24th = 'MonthlyOn24th';

    /**
     * On day 25 of the month.
     **/
    const CodeType_MonthlyOn25th = 'MonthlyOn25th';

    /**
     * On day 26 of the month.
     **/
    const CodeType_MonthlyOn26th = 'MonthlyOn26th';

    /**
     * On day 27 of the month.
     **/
    const CodeType_MonthlyOn27th = 'MonthlyOn27th';

    /**
     * On day 28 of the month.
     **/
    const CodeType_MonthlyOn28th = 'MonthlyOn28th';

    /**
     * On day 29 of the month.
     **/
    const CodeType_MonthlyOn29th = 'MonthlyOn29th';

    /**
     * On day 30 of the month.
     **/
    const CodeType_MonthlyOn30th = 'MonthlyOn30th';

    /**
     * On day 31 of the month.
     **/
    const CodeType_MonthlyOn31st = 'MonthlyOn31st';

    /**
     * Every 31 days.
     **/
    const CodeType_Every31Days = 'Every31Days';

    /**
     * Every 60 days.
     **/
    const CodeType_Every60Days = 'Every60Days';

    
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
     * @return SummaryFrequencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SummaryFrequencyCodeType|null $value
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
    public function isEverySunday()
    {
        return $this->_value === self::CodeType_EverySunday;
    }

    /**
     * @return bool
     */
    public function isEveryMonday()
    {
        return $this->_value === self::CodeType_EveryMonday;
    }

    /**
     * @return bool
     */
    public function isEveryTuesday()
    {
        return $this->_value === self::CodeType_EveryTuesday;
    }

    /**
     * @return bool
     */
    public function isEveryWednesday()
    {
        return $this->_value === self::CodeType_EveryWednesday;
    }

    /**
     * @return bool
     */
    public function isEveryThursday()
    {
        return $this->_value === self::CodeType_EveryThursday;
    }

    /**
     * @return bool
     */
    public function isEveryFriday()
    {
        return $this->_value === self::CodeType_EveryFriday;
    }

    /**
     * @return bool
     */
    public function isEverySaturday()
    {
        return $this->_value === self::CodeType_EverySaturday;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn1st()
    {
        return $this->_value === self::CodeType_MonthlyOn1st;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn2nd()
    {
        return $this->_value === self::CodeType_MonthlyOn2nd;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn3rd()
    {
        return $this->_value === self::CodeType_MonthlyOn3rd;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn4th()
    {
        return $this->_value === self::CodeType_MonthlyOn4th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn5th()
    {
        return $this->_value === self::CodeType_MonthlyOn5th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn6th()
    {
        return $this->_value === self::CodeType_MonthlyOn6th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn7th()
    {
        return $this->_value === self::CodeType_MonthlyOn7th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn8th()
    {
        return $this->_value === self::CodeType_MonthlyOn8th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn9th()
    {
        return $this->_value === self::CodeType_MonthlyOn9th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn10th()
    {
        return $this->_value === self::CodeType_MonthlyOn10th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn11th()
    {
        return $this->_value === self::CodeType_MonthlyOn11th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn12th()
    {
        return $this->_value === self::CodeType_MonthlyOn12th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn13th()
    {
        return $this->_value === self::CodeType_MonthlyOn13th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn14th()
    {
        return $this->_value === self::CodeType_MonthlyOn14th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn15th()
    {
        return $this->_value === self::CodeType_MonthlyOn15th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn16th()
    {
        return $this->_value === self::CodeType_MonthlyOn16th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn17th()
    {
        return $this->_value === self::CodeType_MonthlyOn17th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn18th()
    {
        return $this->_value === self::CodeType_MonthlyOn18th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn19th()
    {
        return $this->_value === self::CodeType_MonthlyOn19th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn20th()
    {
        return $this->_value === self::CodeType_MonthlyOn20th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn21st()
    {
        return $this->_value === self::CodeType_MonthlyOn21st;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn22nd()
    {
        return $this->_value === self::CodeType_MonthlyOn22nd;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn23rd()
    {
        return $this->_value === self::CodeType_MonthlyOn23rd;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn24th()
    {
        return $this->_value === self::CodeType_MonthlyOn24th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn25th()
    {
        return $this->_value === self::CodeType_MonthlyOn25th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn26th()
    {
        return $this->_value === self::CodeType_MonthlyOn26th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn27th()
    {
        return $this->_value === self::CodeType_MonthlyOn27th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn28th()
    {
        return $this->_value === self::CodeType_MonthlyOn28th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn29th()
    {
        return $this->_value === self::CodeType_MonthlyOn29th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn30th()
    {
        return $this->_value === self::CodeType_MonthlyOn30th;
    }

    /**
     * @return bool
     */
    public function isMonthlyOn31st()
    {
        return $this->_value === self::CodeType_MonthlyOn31st;
    }

    /**
     * @return bool
     */
    public function isEvery31Days()
    {
        return $this->_value === self::CodeType_Every31Days;
    }

    /**
     * @return bool
     */
    public function isEvery60Days()
    {
        return $this->_value === self::CodeType_Every60Days;
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

SummaryFrequencyCodeType::_register();
