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
 * Type defining the possible states of a payment transaction. This type is used by several containers in order
 * management-related calls.
 **/
class PaymentTransactionStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PaymentTransactionStatusCodeType';
    const NAME = 'PaymentTransactionStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the payment transaction failed.
     **/
    const CodeType_Failed = 'Failed';

    /**
     * This value indicates that the payment transaction succeeded. If the payment transaction is a buyer's payment for
     * an order, once this <code>Succeeded</code> value is returned in an order management call, it is safe for the
     * seller to ship the order to the buyer.
     * 
     * <span class="tablenote">
     * Note:
     * Previously, the <code>Succeeded</code> value would automatically get returned for order payment transactions
     * that were occurring off of eBay's platform. As of March 2020, the <code>Pending</code> value will get returned
     * instead for order payment transactions occurring off of eBay's platform, and the seller can use the
     * CompleteSale
     * call to mark the order as paid. Once the seller does this, the payment status will change from
     * <code>Pending</code> to <code>Succeeded</code>.
     * </span>
     **/
    const CodeType_Succeeded = 'Succeeded';

    /**
     * This value indicates that the payment transaction is pending.
     * 
     * <span class="tablenote">
     * Note:
     * Previously, the <code>Succeeded</code> value would automatically get returned for order payment transactions
     * that were occurring off of eBay's platform. As of March 2020, the <code>Pending</code> value will get returned
     * instead for order payment transactions occurring off of eBay's platform, and the seller can use the
     * CompleteSale
     * call to mark the order as paid. Once the seller does this, the payment status will change from
     * <code>Pending</code> to <code>Succeeded</code>.
     * </span>
     **/
    const CodeType_Pending = 'Pending';

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
     * @return PaymentTransactionStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaymentTransactionStatusCodeType|null $value
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
    public function isFailed()
    {
        return $this->_value === self::CodeType_Failed;
    }

    /**
     * @return bool
     */
    public function isSucceeded()
    {
        return $this->_value === self::CodeType_Succeeded;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->_value === self::CodeType_Pending;
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

PaymentTransactionStatusCodeType::_register();
