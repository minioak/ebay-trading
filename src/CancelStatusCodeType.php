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
 * Enumerated type that defines the possible states of an eBay order cancellation.
 **/
class CancelStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'CancelStatusCodeType';
    const NAME = 'CancelStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the order cancellation request is invalid.
     **/
    const CodeType_Invalid = 'Invalid';

    /**
     * This value indicates that the order cancellation request is not applicable.
     **/
    const CodeType_NotApplicable = 'NotApplicable';

    /**
     * This value indicates that the buyer has initiated the cancellation of the eBay order. It will be up to the seller
     * to decide to approve or reject the cancellation request.
     **/
    const CodeType_CancelRequested = 'CancelRequested';

    /**
     * This value indicates that the cancellation of the eBay order has been initiated by the buyer and approved by the
     * seller, but the cancellation request has yet to be completed.
     **/
    const CodeType_CancelPending = 'CancelPending';

    /**
     * This value indicates that the cancellation of the eBay order initiated by the buyer has been rejected by the
     * seller.
     **/
    const CodeType_CancelRejected = 'CancelRejected';

    /**
     * This value indicates that the order cancellation request has been closed, with no refund issued to the buyer.
     **/
    const CodeType_CancelClosedNoRefund = 'CancelClosedNoRefund';

    /**
     * This value indicates that the order cancellation request has been closed, with a refund issued to the buyer.
     **/
    const CodeType_CancelClosedWithRefund = 'CancelClosedWithRefund';

    /**
     * This value indicates that the order cancellation request has been closed, and it is unknown whether or not a
     * refund was issued to the buyer.
     **/
    const CodeType_CancelClosedUnknownRefund = 'CancelClosedUnknownRefund';

    /**
     * This value indicates that since the buyer committed to buying the item but did not pay for it, the cancellation
     * succeeded and no refund is needed.
     **/
    const CodeType_CancelClosedForCommitment = 'CancelClosedForCommitment';

    /**
     * This value indicates that the cancellation of the eBay order has been completed.
     **/
    const CodeType_CancelComplete = 'CancelComplete';

    /**
     * This value indicates that the cancellation of the eBay order has failed.
     **/
    const CodeType_CancelFailed = 'CancelFailed';

    /**
     * This value is reserved for internal or future use.
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
     * @return CancelStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CancelStatusCodeType|null $value
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
    public function isCancelRequested()
    {
        return $this->_value === self::CodeType_CancelRequested;
    }

    /**
     * @return bool
     */
    public function isCancelPending()
    {
        return $this->_value === self::CodeType_CancelPending;
    }

    /**
     * @return bool
     */
    public function isCancelRejected()
    {
        return $this->_value === self::CodeType_CancelRejected;
    }

    /**
     * @return bool
     */
    public function isCancelClosedNoRefund()
    {
        return $this->_value === self::CodeType_CancelClosedNoRefund;
    }

    /**
     * @return bool
     */
    public function isCancelClosedWithRefund()
    {
        return $this->_value === self::CodeType_CancelClosedWithRefund;
    }

    /**
     * @return bool
     */
    public function isCancelClosedUnknownRefund()
    {
        return $this->_value === self::CodeType_CancelClosedUnknownRefund;
    }

    /**
     * @return bool
     */
    public function isCancelClosedForCommitment()
    {
        return $this->_value === self::CodeType_CancelClosedForCommitment;
    }

    /**
     * @return bool
     */
    public function isCancelComplete()
    {
        return $this->_value === self::CodeType_CancelComplete;
    }

    /**
     * @return bool
     */
    public function isCancelFailed()
    {
        return $this->_value === self::CodeType_CancelFailed;
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

CancelStatusCodeType::_register();
