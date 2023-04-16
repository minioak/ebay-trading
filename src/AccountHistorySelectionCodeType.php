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
 * This enumerated type contains the suppported values that may be used in the
 * AccountHistorySelection
 * field to control the account entries that are returned in a
 * GetAccount
 * response.
 **/
class AccountHistorySelectionCodeType extends EbatNs_EnumType
{
    const TAG = 'AccountHistorySelectionCodeType';
    const NAME = 'AccountHistorySelectionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value should be used if the eBay user wants to see the account entries posted to the last invoice that was
     * sent to the user by eBay. If this value is used, the
     * InvoiceDate
     * ,
     * BeginDate
     * , and
     * EndDate
     * fields of the
     * GetAccount
     * request are no longer applicable and will be ignored if they are included in the call request.
     **/
    const CodeType_LastInvoice = 'LastInvoice';

    /**
     * This value is no longer applicable or supported, and an error occurs if it is used. As an alternative, users can
     * use <code>BetweenSpecifiedDates</code> instead.
     **/
    const CodeType_SpecifiedInvoice = 'SpecifiedInvoice';

    /**
     * This value should be used if the eBay user wants to see account entries for a customized date range that can
     * overlap multiple formal eBay invoices. If this value is used, then you also must specify
     * BeginDate
     * and
     * EndDate
     * to set the date range for which to retrieve account entries. If this value is used, then
     * InvoiceDate
     * is no longer applicable and will be ignored if it is included in the call request.
     **/
    const CodeType_BetweenSpecifiedDates = 'BetweenSpecifiedDates';

    /**
     * This value should be used if the eBay user wants to see the account entries related to a specific eBay order. If
     * this value is used, the user must also include the
     * OrderID
     * field and sets its value to the identifier of the order for which they wish to retrieve account entries.
     * 
     * <span class="tablenote">
     * Note:
     * In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to
     * immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new
     * format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but
     * set the
     * X-EBAY-API-COMPATIBILITY-LEVEL
     * HTTP header value to <code>1113</code> in API calls.
     * Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders,
     * regardless of the WSDL version number or compatibility level.
     * 
     * Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid
     * order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request
     * payload, including the
     * GetAccount
     * call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable
     * string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line
     * item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order
     * identifiers will also be known and used/referenced by the buyer and eBay customer support.
     * 
     * Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the
     * CheckoutStatus.Status
     * field in the response of
     * GetOrders
     * or
     * GetOrderTransactions
     * call, or in the
     * Status.CompleteStatus
     * field in the response of
     * GetItemTransactions
     * or
     * GetSellerTransactions
     * call. Sellers should  not fulfill orders until buyer has made payment.
     * </span>
     **/
    const CodeType_OrderId = 'OrderId';

    /**
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
     * @return AccountHistorySelectionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AccountHistorySelectionCodeType|null $value
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
    public function isLastInvoice()
    {
        return $this->_value === self::CodeType_LastInvoice;
    }

    /**
     * @return bool
     */
    public function isSpecifiedInvoice()
    {
        return $this->_value === self::CodeType_SpecifiedInvoice;
    }

    /**
     * @return bool
     */
    public function isBetweenSpecifiedDates()
    {
        return $this->_value === self::CodeType_BetweenSpecifiedDates;
    }

    /**
     * @return bool
     */
    public function isOrderId()
    {
        return $this->_value === self::CodeType_OrderId;
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

AccountHistorySelectionCodeType::_register();
