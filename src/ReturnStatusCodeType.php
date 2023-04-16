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
 * Enumerated type that defines the possible states of an eBay return request.
 **/
class ReturnStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'ReturnStatusCodeType';
    const NAME = 'ReturnStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the return request is invalid.
     **/
    const CodeType_Invalid = 'Invalid';

    /**
     * This value indicates that the return request is not applicable.
     **/
    const CodeType_NotApplicable = 'NotApplicable';

    /**
     * This value indicates that the return request has been initiated by the buyer and is pending approval by the
     * seller.
     **/
    const CodeType_ReturnRequestPendingApproval = 'ReturnRequestPendingApproval';

    /**
     * This value indicates that the buyer's return request was rejected by the seller.
     **/
    const CodeType_ReturnRequestRejected = 'ReturnRequestRejected';

    /**
     * This value indicates that a return request was successfully opened by the buyer.
     **/
    const CodeType_ReturnOpen = 'ReturnOpen';

    /**
     * This value indicates that the buyer has return shipped the item(s) in the return request back to the seller.
     **/
    const CodeType_ReturnShipped = 'ReturnShipped';

    /**
     * This value indicates that the seller has received the item(s) that the buyer return shipped.
     **/
    const CodeType_ReturnDelivered = 'ReturnDelivered';

    /**
     * This value indicates that a return request was closed with a refund issued to the buyer.
     **/
    const CodeType_ReturnClosedWithRefund = 'ReturnClosedWithRefund';

    /**
     * This value indicates that a return request was closed after being escalated to an eBay return case.
     **/
    const CodeType_ReturnClosedEscalated = 'ReturnClosedEscalated';

    /**
     * This value indicates that a return request was closed with no refund issued to the buyer.
     **/
    const CodeType_ReturnClosedNoRefund = 'ReturnClosedNoRefund';

    /**
     * This value indicates that a return request was escalated to an eBay return case, and the case is awaiting a
     * response from the buyer.
     **/
    const CodeType_ReturnEscalatedPendingBuyer = 'ReturnEscalatedPendingBuyer';

    /**
     * This value indicates that a return request was escalated to an eBay return case, and the case is awaiting a
     * response from the seller.
     **/
    const CodeType_ReturnEscalatedPendingSeller = 'ReturnEscalatedPendingSeller';

    /**
     * This value indicates that a return request was escalated to an eBay return case, and the case is awaiting a
     * response from eBay Customer Support.
     **/
    const CodeType_ReturnEscalatedPendingCS = 'ReturnEscalatedPendingCS';

    /**
     * This value indicates that a return request was escalated to an eBay return case, but the case was closed with a
     * refund issued to the buyer.
     **/
    const CodeType_ReturnEscalatedClosedWithRefund = 'ReturnEscalatedClosedWithRefund';

    /**
     * This value indicates that a return request was escalated to an eBay return case, but the case was closed with no
     * refund issued to the buyer.
     **/
    const CodeType_ReturnEscalatedClosedNoRefund = 'ReturnEscalatedClosedNoRefund';

    /**
     * This value indicates that a return request was escalated to an eBay return case.
     **/
    const CodeType_ReturnEscalated = 'ReturnEscalated';

    /**
     * This value indicates that the return request is currently in the pending state.
     **/
    const CodeType_ReturnRequestPending = 'ReturnRequestPending';

    /**
     * This value indicates that the return request was closed with a refund to the buyer.
     **/
    const CodeType_ReturnRequestClosedWithRefund = 'ReturnRequestClosedWithRefund';

    /**
     * This value indicates that the return request was closed with no refund to the buyer.
     **/
    const CodeType_ReturnRequestClosedNoRefund = 'ReturnRequestClosedNoRefund';

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
     * @return ReturnStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ReturnStatusCodeType|null $value
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
    public function isInvalid()
    {
        return $this->_value === self::CodeType_Invalid;
    }

    /**
     * @return bool
     */
    public function isNotApplicable()
    {
        return $this->_value === self::CodeType_NotApplicable;
    }

    /**
     * @return bool
     */
    public function isReturnRequestPendingApproval()
    {
        return $this->_value === self::CodeType_ReturnRequestPendingApproval;
    }

    /**
     * @return bool
     */
    public function isReturnRequestRejected()
    {
        return $this->_value === self::CodeType_ReturnRequestRejected;
    }

    /**
     * @return bool
     */
    public function isReturnOpen()
    {
        return $this->_value === self::CodeType_ReturnOpen;
    }

    /**
     * @return bool
     */
    public function isReturnShipped()
    {
        return $this->_value === self::CodeType_ReturnShipped;
    }

    /**
     * @return bool
     */
    public function isReturnDelivered()
    {
        return $this->_value === self::CodeType_ReturnDelivered;
    }

    /**
     * @return bool
     */
    public function isReturnClosedWithRefund()
    {
        return $this->_value === self::CodeType_ReturnClosedWithRefund;
    }

    /**
     * @return bool
     */
    public function isReturnClosedEscalated()
    {
        return $this->_value === self::CodeType_ReturnClosedEscalated;
    }

    /**
     * @return bool
     */
    public function isReturnClosedNoRefund()
    {
        return $this->_value === self::CodeType_ReturnClosedNoRefund;
    }

    /**
     * @return bool
     */
    public function isReturnEscalatedPendingBuyer()
    {
        return $this->_value === self::CodeType_ReturnEscalatedPendingBuyer;
    }

    /**
     * @return bool
     */
    public function isReturnEscalatedPendingSeller()
    {
        return $this->_value === self::CodeType_ReturnEscalatedPendingSeller;
    }

    /**
     * @return bool
     */
    public function isReturnEscalatedPendingCS()
    {
        return $this->_value === self::CodeType_ReturnEscalatedPendingCS;
    }

    /**
     * @return bool
     */
    public function isReturnEscalatedClosedWithRefund()
    {
        return $this->_value === self::CodeType_ReturnEscalatedClosedWithRefund;
    }

    /**
     * @return bool
     */
    public function isReturnEscalatedClosedNoRefund()
    {
        return $this->_value === self::CodeType_ReturnEscalatedClosedNoRefund;
    }

    /**
     * @return bool
     */
    public function isReturnEscalated()
    {
        return $this->_value === self::CodeType_ReturnEscalated;
    }

    /**
     * @return bool
     */
    public function isReturnRequestPending()
    {
        return $this->_value === self::CodeType_ReturnRequestPending;
    }

    /**
     * @return bool
     */
    public function isReturnRequestClosedWithRefund()
    {
        return $this->_value === self::CodeType_ReturnRequestClosedWithRefund;
    }

    /**
     * @return bool
     */
    public function isReturnRequestClosedNoRefund()
    {
        return $this->_value === self::CodeType_ReturnRequestClosedNoRefund;
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

ReturnStatusCodeType::_register();
