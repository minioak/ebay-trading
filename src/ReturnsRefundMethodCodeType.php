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
 * This enum defines the different options that are available for specifying the available refund methods.
 **/
class ReturnsRefundMethodCodeType extends EbatNs_EnumType
{
    const TAG = 'ReturnsRefundMethodCodeType';
    const NAME = 'ReturnsRefundMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <code>MoneyBack</code> indicates the seller will refund the cost of the item returned.
     **/
    const CodeType_MoneyBack = 'MoneyBack';

    /**
     * Available on the US marketplace only, <code>MoneyBackorReplacement</code> indicates the seller will refund the
     * cost of the item returned or they will replace the returned item.
     **/
    const CodeType_MoneyBackorReplacement = 'MoneyBackorReplacement';
    
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
     * @return ReturnsRefundMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ReturnsRefundMethodCodeType|null $value
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
    public function isMoneyBack()
    {
        return $this->_value === self::CodeType_MoneyBack;
    }

    /**
     * @return bool
     */
    public function isMoneyBackorReplacement()
    {
        return $this->_value === self::CodeType_MoneyBackorReplacement;
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

ReturnsRefundMethodCodeType::_register();
