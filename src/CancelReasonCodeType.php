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
 * Enumerated type that defines all possible reasons why an eBay order can be cancelled.
 **/
class CancelReasonCodeType extends EbatNs_EnumType
{
    const TAG = 'CancelReasonCodeType';
    const NAME = 'CancelReasonCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the eBay order was cancelled by the seller due to the fact that one or more order line
     * items were out-of-stock. This reason given by the seller will result in a seller defect.
     **/
    const CodeType_OutOfStock = 'OutOfStock';

    /**
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that the buyer was not
     * at the expected delivery location to receive the order. This value is only applicable to eBay Scheduled Delivery
     * orders, a service that is currently only available in the London area (UK).
     **/
    const CodeType_BuyerNoShow = 'BuyerNoShow';

    /**
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that the buyer refused
     * to accept the order. This value is only applicable to eBay Scheduled Delivery orders, a service that is currently
     * only available in the London area (UK).
     **/
    const CodeType_BuyerRefused = 'BuyerRefused';

    /**
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that the buyer did not
     * successfully schedule the delivery of the order. This value is only applicable to eBay Scheduled Delivery orders,
     * a service that is currently only available in the London area (UK).
     **/
    const CodeType_BuyerNotSchedule = 'BuyerNotSchedule';

    /**
     * This value indicates that the seller initiated the cancellation of the order but at the request of the buyer.
     * This is a cancel reason that the seller gives to avoid a seller defect for the cancellation.
     **/
    const CodeType_BuyerCancelOrder = 'BuyerCancelOrder';

    /**
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that the delivery
     * person had an issue delivering the order to the buyer. This value is only applicable to eBay Scheduled Delivery
     * orders, a service that is currently only available in the London area (UK).
     **/
    const CodeType_ValetDeliveryIssues = 'ValetDeliveryIssues';

    /**
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that no delivery person
     * was available to deliver the order to the buyer. This value is only applicable to eBay Scheduled Delivery orders,
     * a service that is currently only available in the London area (UK).
     **/
    const CodeType_ValetUnavailable = 'ValetUnavailable';

    /**
     * This value indicates that the cancellation of the eBay order was initiated by the buyer because the order was
     * placed by mistake.
     **/
    const CodeType_OrderPlacedByMistake = 'OrderPlacedByMistake';

    /**
     * This value indicates that the cancellation of the eBay order was initiated by the buyer because the buyer decided
     * that the price for the item was too high.
     **/
    const CodeType_PriceTooHigh = 'PriceTooHigh';

    /**
     * This value indicates that the cancellation of the eBay order was initiated by the buyer because the buyer found
     * the same item somewhere else at a cheaper price.
     **/
    const CodeType_FoundCheaperPrice = 'FoundCheaperPrice';

    /**
     * This value indicates that the cancellation of the eBay order was initiated by the buyer because the buyer
     * realized that the order will not arrive soon enough.
     **/
    const CodeType_WontArriveInTime = 'WontArriveInTime';

    /**
     * THIS ENUMERATION VALUE IS DEPRECATED. This value indicates that the seller initiated the cancellation of the
     * order but at the request of the buyer, or if the buyer supplied a bad/incorrect address at purchase time. This is
     * a cancel reason that the seller can give to avoid a seller defect for the cancellation. Replacement values are
     * AddressIssues and BuyerCancelOrder.
     **/
    const CodeType_BuyerCancelOrAddressIssue = 'BuyerCancelOrAddressIssue';

    /**
     * This value indicates that the eBay order was cancelled by the seller due to the fact that one or more order line
     * items were out-of-stock, or due to another reason why the seller was unable to fulfill the order. This reason
     * given by the seller will result in a seller defect.
     **/
    const CodeType_OutOfStockOrCannotFulfill = 'OutOfStockOrCannotFulfill';

    /**
     * This enumeration value indicates that the seller initiated the order cancellation request because there are
     * issues with the destination address supplied by the buyer.
     * 
     * This cancellation reason can only be given by the seller and not the buyer.
     **/
    const CodeType_AddressIssues = 'AddressIssues';

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
     * @return CancelReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CancelReasonCodeType|null $value
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
    public function isOutOfStock()
    {
        return $this->_value === self::CodeType_OutOfStock;
    }

    /**
     * @return bool
     */
    public function isBuyerNoShow()
    {
        return $this->_value === self::CodeType_BuyerNoShow;
    }

    /**
     * @return bool
     */
    public function isBuyerRefused()
    {
        return $this->_value === self::CodeType_BuyerRefused;
    }

    /**
     * @return bool
     */
    public function isBuyerNotSchedule()
    {
        return $this->_value === self::CodeType_BuyerNotSchedule;
    }

    /**
     * @return bool
     */
    public function isBuyerCancelOrder()
    {
        return $this->_value === self::CodeType_BuyerCancelOrder;
    }

    /**
     * @return bool
     */
    public function isValetDeliveryIssues()
    {
        return $this->_value === self::CodeType_ValetDeliveryIssues;
    }

    /**
     * @return bool
     */
    public function isValetUnavailable()
    {
        return $this->_value === self::CodeType_ValetUnavailable;
    }

    /**
     * @return bool
     */
    public function isOrderPlacedByMistake()
    {
        return $this->_value === self::CodeType_OrderPlacedByMistake;
    }

    /**
     * @return bool
     */
    public function isPriceTooHigh()
    {
        return $this->_value === self::CodeType_PriceTooHigh;
    }

    /**
     * @return bool
     */
    public function isFoundCheaperPrice()
    {
        return $this->_value === self::CodeType_FoundCheaperPrice;
    }

    /**
     * @return bool
     */
    public function isWontArriveInTime()
    {
        return $this->_value === self::CodeType_WontArriveInTime;
    }

    /**
     * @return bool
     */
    public function isBuyerCancelOrAddressIssue()
    {
        return $this->_value === self::CodeType_BuyerCancelOrAddressIssue;
    }

    /**
     * @return bool
     */
    public function isOutOfStockOrCannotFulfill()
    {
        return $this->_value === self::CodeType_OutOfStockOrCannotFulfill;
    }

    /**
     * @return bool
     */
    public function isAddressIssues()
    {
        return $this->_value === self::CodeType_AddressIssues;
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

CancelReasonCodeType::_register();
