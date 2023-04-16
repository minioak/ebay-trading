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
 * Type defining the time periods used when evaluating the number of unpaid item strikes that a buyer has against
 * their account. A seller can set up listing-level Buyer Requirements in an Add/Revise/Relist call that will block
 * a buyer if that buyer has a specified number of unpaid item strikes against their account during a specified time
 * period.
 **/
class PeriodCodeType extends EbatNs_EnumType
{
    const TAG = 'PeriodCodeType';
    const NAME = 'PeriodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_Days_1 = 'Days_1';

    /**
     * This value indicates that the evaluation period is set back 30 days from the
     * present date.
     **/
    const CodeType_Days_30 = 'Days_30';

    /**
     * This value indicates that the evaluation period is set back 180 days (approximately 6 months) from the present
     * date.
     **/
    const CodeType_Days_180 = 'Days_180';

    /**
     * This value indicates that the evaluation period is set back 360 days (approximately 12 months) from the present
     * date.
     **/
    const CodeType_Days_360 = 'Days_360';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_Days_540 = 'Days_540';

    /**
     * This value is reserved for future or internal use.
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
     * @return PeriodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PeriodCodeType|null $value
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
    public function isDays_1()
    {
        return $this->_value === self::CodeType_Days_1;
    }

    /**
     * @return bool
     */
    public function isDays_30()
    {
        return $this->_value === self::CodeType_Days_30;
    }

    /**
     * @return bool
     */
    public function isDays_180()
    {
        return $this->_value === self::CodeType_Days_180;
    }

    /**
     * @return bool
     */
    public function isDays_360()
    {
        return $this->_value === self::CodeType_Days_360;
    }

    /**
     * @return bool
     */
    public function isDays_540()
    {
        return $this->_value === self::CodeType_Days_540;
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

PeriodCodeType::_register();
