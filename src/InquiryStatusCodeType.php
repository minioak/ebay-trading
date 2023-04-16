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
 * Enumerated type that defines the possible states of a buyer's Item Not Received (INR) inquiry.
 **/
class InquiryStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'InquiryStatusCodeType';
    const NAME = 'InquiryStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the INR inquiry is invalid.
     **/
    const CodeType_Invalid = 'Invalid';

    /**
     * This value indicates that the INR inquiry is not applicable.
     **/
    const CodeType_NotApplicable = 'NotApplicable';

    /**
     * This value indicates that the INR inquiry is pending a response from the buyer.
     **/
    const CodeType_TrackInquiryPendingBuyerResponse = 'TrackInquiryPendingBuyerResponse';

    /**
     * This value indicates that the INR inquiry is pending a response from the  seller.
     **/
    const CodeType_TrackInquiryPendingSellerResponse = 'TrackInquiryPendingSellerResponse';

    /**
     * This value indicates that the INR inquiry was closed with a refund issued to the buyer.
     **/
    const CodeType_TrackInquiryClosedWithRefund = 'TrackInquiryClosedWithRefund';

    /**
     * This value indicates that the INR inquiry was closed with no refund issued to the buyer.
     **/
    const CodeType_TrackInquiryClosedNoRefund = 'TrackInquiryClosedNoRefund';

    /**
     * This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, and it is pending a
     * response from the buyer.
     **/
    const CodeType_TrackInquiryEscalatedPendingBuyer = 'TrackInquiryEscalatedPendingBuyer';

    /**
     * This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, and it is pending a
     * response from the seller.
     **/
    const CodeType_TrackInquiryEscalatedPendingSeller = 'TrackInquiryEscalatedPendingSeller';

    /**
     * This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, and it is pending a
     * response from eBay Customer Support.
     **/
    const CodeType_TrackInquiryEscalatedPendingCS = 'TrackInquiryEscalatedPendingCS';

    /**
     * This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, but it was closed
     * with a refund issued to the buyer.
     **/
    const CodeType_TrackInquiryEscalatedClosedWithRefund = 'TrackInquiryEscalatedClosedWithRefund';

    /**
     * This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, but it was closed
     * with no refund issued to the buyer.
     **/
    const CodeType_TrackInquiryEscalatedClosedNoRefund = 'TrackInquiryEscalatedClosedNoRefund';

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
     * @return InquiryStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param InquiryStatusCodeType|null $value
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
    public function isTrackInquiryPendingBuyerResponse()
    {
        return $this->_value === self::CodeType_TrackInquiryPendingBuyerResponse;
    }

    /**
     * @return bool
     */
    public function isTrackInquiryPendingSellerResponse()
    {
        return $this->_value === self::CodeType_TrackInquiryPendingSellerResponse;
    }

    /**
     * @return bool
     */
    public function isTrackInquiryClosedWithRefund()
    {
        return $this->_value === self::CodeType_TrackInquiryClosedWithRefund;
    }

    /**
     * @return bool
     */
    public function isTrackInquiryClosedNoRefund()
    {
        return $this->_value === self::CodeType_TrackInquiryClosedNoRefund;
    }

    /**
     * @return bool
     */
    public function isTrackInquiryEscalatedPendingBuyer()
    {
        return $this->_value === self::CodeType_TrackInquiryEscalatedPendingBuyer;
    }

    /**
     * @return bool
     */
    public function isTrackInquiryEscalatedPendingSeller()
    {
        return $this->_value === self::CodeType_TrackInquiryEscalatedPendingSeller;
    }

    /**
     * @return bool
     */
    public function isTrackInquiryEscalatedPendingCS()
    {
        return $this->_value === self::CodeType_TrackInquiryEscalatedPendingCS;
    }

    /**
     * @return bool
     */
    public function isTrackInquiryEscalatedClosedWithRefund()
    {
        return $this->_value === self::CodeType_TrackInquiryEscalatedClosedWithRefund;
    }

    /**
     * @return bool
     */
    public function isTrackInquiryEscalatedClosedNoRefund()
    {
        return $this->_value === self::CodeType_TrackInquiryEscalatedClosedNoRefund;
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

InquiryStatusCodeType::_register();
