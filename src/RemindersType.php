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
 * This type contains the counts of various eBay Buying and Seller Reminders that are returned in the
 * GetMyeBayReminders
 * call.
 **/
class RemindersType extends EbatNs_ComplexType
{
    const TAG = 'RemindersType';
    const NAME = 'RemindersType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PaymentToSendCount = null;

    /**
     * @var int|null
     */
    protected $FeedbackToReceiveCount = null;

    /**
     * @var int|null
     */
    protected $FeedbackToSendCount = null;

    /**
     * @var int|null
     */
    protected $OutbidCount = null;

    /**
     * @var int|null
     */
    protected $PaymentToReceiveCount = null;

    /**
     * @var int|null
     */
    protected $SecondChanceOfferCount = null;

    /**
     * @var int|null
     */
    protected $ShippingNeededCount = null;

    /**
     * @var int|null
     */
    protected $RelistingNeededCount = null;

    /**
     * @var int|null
     */
    protected $TotalNewLeadsCount = null;

    /**
     * @var int|null
     */
    protected $DocsForCCProcessingToSendCount = null;

    /**
     * @var int|null
     */
    protected $RTEToProcessCount = null;

    /**
     * @var int|null
     */
    protected $ItemReceiptToConfirmCount = null;

    /**
     * @var int|null
     */
    protected $RefundOnHoldCount = null;

    /**
     * @var int|null
     */
    protected $RefundCancelledCount = null;

    /**
     * @var int|null
     */
    protected $ShippingDetailsToBeProvidedCount = null;

    /**
     * @var int|null
     */
    protected $ItemReceiptConfirmationToReceiveCount = null;

    /**
     * @var int|null
     */
    protected $RefundInitiatedCount = null;

    /**
     * @var int|null
     */
    protected $PendingRTERequestCount = null;

    /**
     * @var int|null
     */
    protected $DeclinedRTERequestCount = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentToSendCount()
    {
        return $this->_dc($this->PaymentToSendCount, 'PaymentToSendCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPaymentToSendCount($value)
    {
        $this->PaymentToSendCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackToReceiveCount()
    {
        return $this->_dc($this->FeedbackToReceiveCount, 'FeedbackToReceiveCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFeedbackToReceiveCount($value)
    {
        $this->FeedbackToReceiveCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackToSendCount()
    {
        return $this->_dc($this->FeedbackToSendCount, 'FeedbackToSendCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFeedbackToSendCount($value)
    {
        $this->FeedbackToSendCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOutbidCount()
    {
        return $this->_dc($this->OutbidCount, 'OutbidCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setOutbidCount($value)
    {
        $this->OutbidCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentToReceiveCount()
    {
        return $this->_dc($this->PaymentToReceiveCount, 'PaymentToReceiveCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPaymentToReceiveCount($value)
    {
        $this->PaymentToReceiveCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecondChanceOfferCount()
    {
        return $this->_dc($this->SecondChanceOfferCount, 'SecondChanceOfferCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSecondChanceOfferCount($value)
    {
        $this->SecondChanceOfferCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingNeededCount()
    {
        return $this->_dc($this->ShippingNeededCount, 'ShippingNeededCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingNeededCount($value)
    {
        $this->ShippingNeededCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelistingNeededCount()
    {
        return $this->_dc($this->RelistingNeededCount, 'RelistingNeededCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRelistingNeededCount($value)
    {
        $this->RelistingNeededCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalNewLeadsCount()
    {
        return $this->_dc($this->TotalNewLeadsCount, 'TotalNewLeadsCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalNewLeadsCount($value)
    {
        $this->TotalNewLeadsCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDocsForCCProcessingToSendCount()
    {
        return $this->_dc($this->DocsForCCProcessingToSendCount, 'DocsForCCProcessingToSendCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDocsForCCProcessingToSendCount($value)
    {
        $this->DocsForCCProcessingToSendCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRTEToProcessCount()
    {
        return $this->_dc($this->RTEToProcessCount, 'RTEToProcessCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRTEToProcessCount($value)
    {
        $this->RTEToProcessCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemReceiptToConfirmCount()
    {
        return $this->_dc($this->ItemReceiptToConfirmCount, 'ItemReceiptToConfirmCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setItemReceiptToConfirmCount($value)
    {
        $this->ItemReceiptToConfirmCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundOnHoldCount()
    {
        return $this->_dc($this->RefundOnHoldCount, 'RefundOnHoldCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRefundOnHoldCount($value)
    {
        $this->RefundOnHoldCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundCancelledCount()
    {
        return $this->_dc($this->RefundCancelledCount, 'RefundCancelledCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRefundCancelledCount($value)
    {
        $this->RefundCancelledCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingDetailsToBeProvidedCount()
    {
        return $this->_dc($this->ShippingDetailsToBeProvidedCount, 'ShippingDetailsToBeProvidedCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingDetailsToBeProvidedCount($value)
    {
        $this->ShippingDetailsToBeProvidedCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemReceiptConfirmationToReceiveCount()
    {
        return $this->_dc($this->ItemReceiptConfirmationToReceiveCount, 'ItemReceiptConfirmationToReceiveCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setItemReceiptConfirmationToReceiveCount($value)
    {
        $this->ItemReceiptConfirmationToReceiveCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundInitiatedCount()
    {
        return $this->_dc($this->RefundInitiatedCount, 'RefundInitiatedCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRefundInitiatedCount($value)
    {
        $this->RefundInitiatedCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPendingRTERequestCount()
    {
        return $this->_dc($this->PendingRTERequestCount, 'PendingRTERequestCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPendingRTERequestCount($value)
    {
        $this->PendingRTERequestCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeclinedRTERequestCount()
    {
        return $this->_dc($this->DeclinedRTERequestCount, 'DeclinedRTERequestCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDeclinedRTERequestCount($value)
    {
        $this->DeclinedRTERequestCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PaymentToSendCount' => ['type' => 'int'],
            'FeedbackToReceiveCount' => ['type' => 'int'],
            'FeedbackToSendCount' => ['type' => 'int'],
            'OutbidCount' => ['type' => 'int'],
            'PaymentToReceiveCount' => ['type' => 'int'],
            'SecondChanceOfferCount' => ['type' => 'int'],
            'ShippingNeededCount' => ['type' => 'int'],
            'RelistingNeededCount' => ['type' => 'int'],
            'TotalNewLeadsCount' => ['type' => 'int'],
            'DocsForCCProcessingToSendCount' => ['type' => 'int'],
            'RTEToProcessCount' => ['type' => 'int'],
            'ItemReceiptToConfirmCount' => ['type' => 'int'],
            'RefundOnHoldCount' => ['type' => 'int'],
            'RefundCancelledCount' => ['type' => 'int'],
            'ShippingDetailsToBeProvidedCount' => ['type' => 'int'],
            'ItemReceiptConfirmationToReceiveCount' => ['type' => 'int'],
            'RefundInitiatedCount' => ['type' => 'int'],
            'PendingRTERequestCount' => ['type' => 'int'],
            'DeclinedRTERequestCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RemindersType::_register();
