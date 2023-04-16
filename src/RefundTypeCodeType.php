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
 * This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type
 * will also be deprecated.
 * </span>
 * Explanation of the reason that the refund is being issued. Applicable to Half.com
 * refunds only.
 **/
class RefundTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'RefundTypeCodeType';
    const NAME = 'RefundTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundTypeCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
     * The seller has issued a refund for the transaction price that
     * was originally paid to the seller.
     * (The seller's shipping reimbursement is not included
     * if Half.com calculates the refund amount).
     **/
    const CodeType_Full = 'Full';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundTypeCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
     * The seller has issued a refund for the transaction price and
     * shipping reimbursement that was originally paid to the seller.
     * (The buyer's return shipping costs
     * might not be included if Half.com calculates the refund amount.)
     **/
    const CodeType_FullPlusShipping = 'FullPlusShipping';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundTypeCodeType
     * and all of its values are no longer applicable since the Half.com site has been shut down.
     * </span>
     * The seller has issued a refund amount that is different from
     * the full refund (with or without shipping). If specified,
     * it may be helpful to explain the amount in your note to the buyer.
     **/
    const CodeType_CustomOrPartial = 'CustomOrPartial';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * RefundTypeCodeType
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
     * @return RefundTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RefundTypeCodeType|null $value
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
    public function isFull()
    {
        return $this->_value === self::CodeType_Full;
    }

    /**
     * @return bool
     */
    public function isFullPlusShipping()
    {
        return $this->_value === self::CodeType_FullPlusShipping;
    }

    /**
     * @return bool
     */
    public function isCustomOrPartial()
    {
        return $this->_value === self::CodeType_CustomOrPartial;
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

RefundTypeCodeType::_register();
