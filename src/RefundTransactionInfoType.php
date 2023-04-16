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
 * Type defining the <strong>Refund</strong> container, which consists of detailed information on an In-Store Pickup
 * item refund.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail
 * merchants in US, and can only be applied to multi-quantity, fixed-price listings.
 * </span>
 **/
class RefundTransactionInfoType extends EbatNs_ComplexType
{
    const TAG = 'RefundTransactionInfoType';
    const NAME = 'RefundTransactionInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaymentTransactionStatusCodeType|null
     */
    protected $RefundStatus = null;

    /**
     * @var RefundSourceTypeCodeType|null
     */
    protected $RefundType = null;

    /**
     * @var UserIdentityType|null
     */
    protected $RefundTo = null;

    /**
     * @var string|null
     */
    protected $RefundTime = null;

    /**
     * @var AmountType|null
     */
    protected $RefundAmount = null;

    /**
     * @var TransactionReferenceType|null
     */
    protected $ReferenceID = null;

    /**
     * @var AmountType|null
     */
    protected $FeeOrCreditAmount = null;


    /**
     * @return PaymentTransactionStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundStatus()
    {
        return $this->_dc($this->RefundStatus);
    }

    /**
     * @param PaymentTransactionStatusCodeType|null $value
     * @return void
     */
    public function setRefundStatus($value)
    {
        $this->RefundStatus = $this->_enum($value, PaymentTransactionStatusCodeType::class);
    }

    /**
     * @return RefundSourceTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundType()
    {
        return $this->_dc($this->RefundType);
    }

    /**
     * @param RefundSourceTypeCodeType|null $value
     * @return void
     */
    public function setRefundType($value)
    {
        $this->RefundType = $this->_enum($value, RefundSourceTypeCodeType::class);
    }

    /**
     * @return UserIdentityType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundTo()
    {
        return $this->_dc($this->RefundTo, 'RefundTo');
    }

    /**
     * @param UserIdentityType|null $value
     * @return void
     */
    public function setRefundTo($value)
    {
        $this->RefundTo = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundTime()
    {
        return $this->_dc($this->RefundTime, 'RefundTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundTime($value)
    {
        $this->RefundTime = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundAmount()
    {
        return $this->_dc($this->RefundAmount, 'RefundAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setRefundAmount($value)
    {
        $this->RefundAmount = $value;
    }

    /**
     * @return TransactionReferenceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReferenceID()
    {
        return $this->_dc($this->ReferenceID, 'ReferenceID');
    }

    /**
     * @param TransactionReferenceType|null $value
     * @return void
     */
    public function setReferenceID($value)
    {
        $this->ReferenceID = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeeOrCreditAmount()
    {
        return $this->_dc($this->FeeOrCreditAmount, 'FeeOrCreditAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setFeeOrCreditAmount($value)
    {
        $this->FeeOrCreditAmount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'RefundStatus' => ['type' => 'PaymentTransactionStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RefundType' => ['type' => 'RefundSourceTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RefundTo' => ['type' => 'UserIdentityType', 'xmlns' => self::XMLNS],
            'RefundTime' => [],
            'RefundAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ReferenceID' => ['type' => 'TransactionReferenceType', 'xmlns' => self::XMLNS],
            'FeeOrCreditAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RefundTransactionInfoType::_register();
