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
 * <span class="tablenote">
 * Note:
 * This type was only used for Half.com order refunds, and since the Half.com site has been shut down, this type is
 * no longer applicable.
 * </span>
 **/
class RefundReasonCodeType extends EbatNs_EnumType
{
    const TAG = 'RefundReasonCodeType';
    const NAME = 'RefundReasonCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundReasonCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
     * Seller is unable to ship the product to the buyer.
     **/
    const CodeType_CannotShipProduct = 'CannotShipProduct';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundReasonCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
     * Seller shipped the wrong item to the buyer.
     **/
    const CodeType_WrongItemShipped = 'WrongItemShipped';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundReasonCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
     * The buyer returned the item due to its quality.
     **/
    const CodeType_ItemBadQuality = 'ItemBadQuality';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundReasonCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
     * The buyer returned the item due to damage.
     **/
    const CodeType_ItemDamaged = 'ItemDamaged';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundReasonCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
     * The buyer decided they did not want the item.
     **/
    const CodeType_BuyerRemorse = 'BuyerRemorse';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundReasonCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
     * The seller has another reason for issuing a Half.com refund.
     **/
    const CodeType_Other = 'Other';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundReasonCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
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
     * @return RefundReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RefundReasonCodeType|null $value
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
    public function isCannotShipProduct()
    {
        return $this->_value === self::CodeType_CannotShipProduct;
    }

    /**
     * @return bool
     */
    public function isWrongItemShipped()
    {
        return $this->_value === self::CodeType_WrongItemShipped;
    }

    /**
     * @return bool
     */
    public function isItemBadQuality()
    {
        return $this->_value === self::CodeType_ItemBadQuality;
    }

    /**
     * @return bool
     */
    public function isItemDamaged()
    {
        return $this->_value === self::CodeType_ItemDamaged;
    }

    /**
     * @return bool
     */
    public function isBuyerRemorse()
    {
        return $this->_value === self::CodeType_BuyerRemorse;
    }

    /**
     * @return bool
     */
    public function isOther()
    {
        return $this->_value === self::CodeType_Other;
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

RefundReasonCodeType::_register();
