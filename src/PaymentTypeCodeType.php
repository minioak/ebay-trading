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
 * This type is only applicable to the
 * GetSellerPayments
 * call, which is only relevant to Half.com orders, and since the Half.com site has been shut down, this type is no
 * longer applicable.
 * </span>
 **/
class PaymentTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'PaymentTypeCodeType';
    const NAME = 'PaymentTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * PaymentTypeCodeType
     * and all of its values will no longer be applicable since the Half.com site has been shut down.
     * </span>
     **/
    const CodeType_Sale = 'Sale';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * PaymentTypeCodeType
     * and all of its values will no longer be applicable since the Half.com site has been shut down.
     * </span>
     **/
    const CodeType_Refund = 'Refund';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * PaymentTypeCodeType
     * and all of its values will no longer be applicable since the Half.com site has been shut down.
     * </span>
     **/
    const CodeType_SellerDeniedPayment = 'SellerDeniedPayment';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * PaymentTypeCodeType
     * and all of its values will no longer be applicable since the Half.com site has been shut down.
     * </span>
     **/
    const CodeType_AdminReversal = 'AdminReversal';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * PaymentTypeCodeType
     * and all of its values will no longer be applicable since the Half.com site has been shut down.
     * </span>
     **/
    const CodeType_AllOther = 'AllOther';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * PaymentTypeCodeType
     * and all of its values will no longer be applicable since the Half.com site has been shut down
     * </span>
     **/
    const CodeType_RentalExtension = 'RentalExtension';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * PaymentTypeCodeType
     * and all of its values will no longer be applicable since the Half.com site has been shut down.
     * </span>
     **/
    const CodeType_RentalBuyout = 'RentalBuyout';

    /**
     * <span class="tablenote">
     * Note:
     * 
     * PaymentTypeCodeType
     * and all of its values will no longer be applicable since the Half.com site has been shut down.
     * </span>
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
     * @return PaymentTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaymentTypeCodeType|null $value
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
    public function isSale()
    {
        return $this->_value === self::CodeType_Sale;
    }

    /**
     * @return bool
     */
    public function isRefund()
    {
        return $this->_value === self::CodeType_Refund;
    }

    /**
     * @return bool
     */
    public function isSellerDeniedPayment()
    {
        return $this->_value === self::CodeType_SellerDeniedPayment;
    }

    /**
     * @return bool
     */
    public function isAdminReversal()
    {
        return $this->_value === self::CodeType_AdminReversal;
    }

    /**
     * @return bool
     */
    public function isAllOther()
    {
        return $this->_value === self::CodeType_AllOther;
    }

    /**
     * @return bool
     */
    public function isRentalExtension()
    {
        return $this->_value === self::CodeType_RentalExtension;
    }

    /**
     * @return bool
     */
    public function isRentalBuyout()
    {
        return $this->_value === self::CodeType_RentalBuyout;
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

PaymentTypeCodeType::_register();
