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
 * How packaging/handling cost is to be determined for <a
 * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined
 * Invoice</a>
 * orders.
 **/
class HandlingNameCodeType extends EbatNs_EnumType
{
    const TAG = 'HandlingNameCodeType';
    const NAME = 'HandlingNameCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * After eBay assigns the highest packaging/handling cost to the first item, the
     * packaging/handling cost for each additional item is $n.
     **/
    const CodeType_EachAdditionalAmount = 'EachAdditionalAmount';

    /**
     * After eBay assigns the highest packaging/handling cost to the first item, the
     * packaging/handling cost for each additional item is to be reduced by amount N.
     **/
    const CodeType_EachAdditionalAmountOff = 'EachAdditionalAmountOff';

    /**
     * After eBay assigns the highest packaging/handling cost to the first item, the
     * packaging/handling cost for each additional item is to be reduced by N percent.
     **/
    const CodeType_EachAdditionalPercentOff = 'EachAdditionalPercentOff';

    /**
     * The total packaging/handling cost is to be the sum of the
     * packaging/handling costs of the individual items.
     **/
    const CodeType_IndividualHandlingFee = 'IndividualHandlingFee';

    /**
     * The packaging/handling cost is to be N for the entire order.
     **/
    const CodeType_CombinedHandlingFee = 'CombinedHandlingFee';

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
     * @return HandlingNameCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param HandlingNameCodeType|null $value
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
    public function isEachAdditionalAmount()
    {
        return $this->_value === self::CodeType_EachAdditionalAmount;
    }

    /**
     * @return bool
     */
    public function isEachAdditionalAmountOff()
    {
        return $this->_value === self::CodeType_EachAdditionalAmountOff;
    }

    /**
     * @return bool
     */
    public function isEachAdditionalPercentOff()
    {
        return $this->_value === self::CodeType_EachAdditionalPercentOff;
    }

    /**
     * @return bool
     */
    public function isIndividualHandlingFee()
    {
        return $this->_value === self::CodeType_IndividualHandlingFee;
    }

    /**
     * @return bool
     */
    public function isCombinedHandlingFee()
    {
        return $this->_value === self::CodeType_CombinedHandlingFee;
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

HandlingNameCodeType::_register();
