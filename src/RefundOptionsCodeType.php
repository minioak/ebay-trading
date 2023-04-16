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
 * This enumerated type contains the possible refund, exchange, or store credit options that a
 * seller may offer the buyer as part of the return policy.
 **/
class RefundOptionsCodeType extends EbatNs_EnumType
{
    const TAG = 'RefundOptionsCodeType';
    const NAME = 'RefundOptionsCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the seller will refund the buyer the cost of the item, excluding shipping and handling
     * costs.
     **/
    const CodeType_MoneyBack = 'MoneyBack';

    /**
     * This value is deprecated since receiving money back must always be one of the options in a return policy and not
     * just exchanging the item. If a seller wants to make an exchange one of the options, the
     * <code>MoneyBackOrExchange</code> option should be used.
     **/
    const CodeType_Exchange = 'Exchange';

    /**
     * This value is deprecated since receiving money back must always be one of the options in a return policy and not
     * just store credit.
     **/
    const CodeType_MerchandiseCredit = 'MerchandiseCredit';

    /**
     * <span class="tablenote">
     * Note:
     * This value has been deprecated and US sellers that are willing to refund buyers or offer an identical
     * replacement item should use the <code>MoneyBackOrReplacement</code> value instead.
     * </span>
     **/
    const CodeType_MoneyBackOrExchange = 'MoneyBackOrExchange';

    /**
     * <span class="tablenote">
     * Note:
     * This value is only available on the US site. US sellers should use this value if they are willing to refund
     * buyers or offer an identical replacement item.
     * </span>
     * This value indicates that the seller will refund the buyer the cost of the item (excluding shipping and
     * handling costs) through eBay returns, or the seller will replace the returned item with another identical item if
     * the buyer prefers this.
     **/
    const CodeType_MoneyBackOrReplacement = 'MoneyBackOrReplacement';

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
     * @return RefundOptionsCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RefundOptionsCodeType|null $value
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
    public function isExchange()
    {
        return $this->_value === self::CodeType_Exchange;
    }

    /**
     * @return bool
     */
    public function isMerchandiseCredit()
    {
        return $this->_value === self::CodeType_MerchandiseCredit;
    }

    /**
     * @return bool
     */
    public function isMoneyBackOrExchange()
    {
        return $this->_value === self::CodeType_MoneyBackOrExchange;
    }

    /**
     * @return bool
     */
    public function isMoneyBackOrReplacement()
    {
        return $this->_value === self::CodeType_MoneyBackOrReplacement;
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

RefundOptionsCodeType::_register();
