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
 * Specifies the range of days the seller can be contacted.
 **/
class DaysCodeType extends EbatNs_EnumType
{
    const TAG = 'DaysCodeType';
    const NAME = 'DaysCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Seller does not want to be contacted. Contact hours will not be supported for
     * any days. If contact hours are specified, they will be ignored.
     **/
    const CodeType_None = 'None';

    /**
     * Seller can be contacted any day during the specified contact hours.
     **/
    const CodeType_EveryDay = 'EveryDay';

    /**
     * Seller can be contacted Monday through Friday during the specified
     * contact hours.
     **/
    const CodeType_Weekdays = 'Weekdays';

    /**
     * Seller can  be contacted Saturday or Sunday during the specified
     * contact hours.
     **/
    const CodeType_Weekends = 'Weekends';

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
     * @return DaysCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DaysCodeType|null $value
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
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isEveryDay()
    {
        return $this->_value === self::CodeType_EveryDay;
    }

    /**
     * @return bool
     */
    public function isWeekdays()
    {
        return $this->_value === self::CodeType_Weekdays;
    }

    /**
     * @return bool
     */
    public function isWeekends()
    {
        return $this->_value === self::CodeType_Weekends;
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

DaysCodeType::_register();
