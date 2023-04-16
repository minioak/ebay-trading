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
 * An eBay-defined complex type for specifying monetary amounts.
 * 
 * A double value (e.g., 1.00 or 1.0) is meaningful as a monetary amount when accompanied by a specification of
 * the currency, in which case the value specifies the amount in that currency. An
 * AmountType
 * expresses both the value (a double) and the currency.
 * 
 * The
 * AmountType
 * data type is typically used to specify details such as prices, fees, costs, and payments. In some cases, a whole
 * number (i.e., without a period) can be passed or returned as a monetary value. This is necessary to support
 * certain currencies that are only expressed as whole numbers.
 * 
 * Because a double is used to represent the amount, this also means whole monetary amounts may be returned with
 * only one 0 after the decimal. For example, a dollar value could be returned as 1.0 instead of 1.00 in calls like
 * AddItem
 * .
 **/
class AmountType extends EbatNs_SimpleType
{
    const TAG = 'AmountType';
    const NAME = 'AmountType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var float|null
     */
    protected $_value = null;


    /**
     * @param float|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value, '_value');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = self::_float($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes(['currencyID' => ['type' => 'CurrencyCodeType', 'use' => 'required']]);
    }

}

AmountType::_register();
