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
 * A shipping rate scale for shipping through UPS that affects the shipping cost calculated for UPS (lower if
 * <strong>ShippingRateType</strong> is <code>DailyPickup</code>). For calculated shipping only.
 **/
class ShippingRateTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'ShippingRateTypeCodeType';
    const NAME = 'ShippingRateTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * "On-demand" shipping rate scale.
     **/
    const CodeType_OnDemand = 'OnDemand';

    /**
     * "Daily pickup" shipping rate scale.
     **/
    const CodeType_DailyPickup = 'DailyPickup';

    /**
     * "Standard List" shipping rate scale.
     **/
    const CodeType_StandardList = 'StandardList';

    /**
     * "Counter" shipping rate scale.
     **/
    const CodeType_Counter = 'Counter';

    /**
     * "Discounted" shipping rate scale.
     **/
    const CodeType_Discounted = 'Discounted';

    /**
     * "Commercial Plus" shipping rate scale.
     **/
    const CodeType_CommercialPlus = 'CommercialPlus';

    /**
     * "Commercial Plus Discounted Rate1" shipping rate scale.
     **/
    const CodeType_GoldSilver = 'GoldSilver';

    /**
     * "Commercial Plus Discounted Rate2" shipping rate scale.
     **/
    const CodeType_PlatTitanium = 'PlatTitanium';

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
     * @return ShippingRateTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingRateTypeCodeType|null $value
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
    public function isOnDemand()
    {
        return $this->_value === self::CodeType_OnDemand;
    }

    /**
     * @return bool
     */
    public function isDailyPickup()
    {
        return $this->_value === self::CodeType_DailyPickup;
    }

    /**
     * @return bool
     */
    public function isStandardList()
    {
        return $this->_value === self::CodeType_StandardList;
    }

    /**
     * @return bool
     */
    public function isCounter()
    {
        return $this->_value === self::CodeType_Counter;
    }

    /**
     * @return bool
     */
    public function isDiscounted()
    {
        return $this->_value === self::CodeType_Discounted;
    }

    /**
     * @return bool
     */
    public function isCommercialPlus()
    {
        return $this->_value === self::CodeType_CommercialPlus;
    }

    /**
     * @return bool
     */
    public function isGoldSilver()
    {
        return $this->_value === self::CodeType_GoldSilver;
    }

    /**
     * @return bool
     */
    public function isPlatTitanium()
    {
        return $this->_value === self::CodeType_PlatTitanium;
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

ShippingRateTypeCodeType::_register();
