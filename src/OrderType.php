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
 * This type is used to express the details of an order. An order may contain one or more line items (purchases)
 * from the same buyer. Regardless of how many line items an order has, only one payment is made for the order.
 * 
 * The
 * GetOrders
 * and
 * GetOrderTransactions
 * calls return many of the fields of this type.
 * 
 * The
 * GetItemTransactions
 * and
 * GetSellerTransactions
 * calls will only return order-level details if the
 * IncludeContainingOrder
 * boolean field is included in the call request and set to <code>true</code>.
 * 
 * The
 * AddOrder
 * call is used to combine two or more unpaid order line items (between the same seller and buyer) into a 'Combined
 * Invoice' order. While combining these order line items into one 'Combined Invoice' order, the seller can make
 * adjustments to accepted payment methods, shipping details (including costs), and the total cost of the order.
 * Sometimes, sellers will reduce the cost of shipping if one or more order line items can be shipped together in
 * the same package.
 * 
 * The
 * GetMyeBaySelling
 * call returns order details if the seller wishes to view listings that have sold, and the
 * GetMyeBayBuying
 * call returns order details if the buyer wishes to view items they have won or purchased.
 **/
class OrderType extends EbatNs_ComplexType
{
    const TAG = 'OrderType';
    const NAME = 'OrderType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OrderIDType|null
     */
    protected $OrderID = null;

    /**
     * @var OrderStatusCodeType|null
     */
    protected $OrderStatus = null;

    /**
     * @var AmountType|null
     */
    protected $AdjustmentAmount = null;

    /**
     * @var AmountType|null
     */
    protected $AmountPaid = null;

    /**
     * @var AmountType|null
     */
    protected $AmountSaved = null;

    /**
     * @var CheckoutStatusType|null
     */
    protected $CheckoutStatus = null;

    /**
     * @var ShippingDetailsType|null
     */
    protected $ShippingDetails = null;

    /**
     * @var TradingRoleCodeType|null
     */
    protected $CreatingUserRole = null;

    /**
     * @var string|null
     */
    protected $CreatedTime = null;

    /**
     * @var BuyerPaymentMethodCodeType[]|null
     */
    protected $PaymentMethods = [];

    /**
     * @var string|null
     */
    protected $SellerEmail = null;

    /**
     * @var AddressType|null
     */
    protected $ShippingAddress = null;

    /**
     * @var ShippingServiceOptionsType|null
     */
    protected $ShippingServiceSelected = null;

    /**
     * @var AmountType|null
     */
    protected $Subtotal = null;

    /**
     * @var AmountType|null
     */
    protected $Total = null;

    /**
     * @var ExternalTransactionType[]|null
     */
    protected $ExternalTransaction = [];

    /**
     * @var TransactionArrayType|null
     */
    protected $TransactionArray = null;

    /**
     * @var UserIDType|null
     */
    protected $BuyerUserID = null;

    /**
     * @var string|null
     */
    protected $PaidTime = null;

    /**
     * @var string|null
     */
    protected $ShippedTime = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IntegratedMerchantCreditCardEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BundlePurchase = null;

    /**
     * @var string|null
     */
    protected $BuyerCheckoutMessage = null;

    /**
     * @var string|null
     */
    protected $EIASToken = null;

    /**
     * @var PaymentHoldStatusCodeType|null
     */
    protected $PaymentHoldStatus = null;

    /**
     * @var PaymentHoldDetailType|null
     */
    protected $PaymentHoldDetails = null;

    /**
     * @var AmountType|null
     */
    protected $RefundAmount = null;

    /**
     * @var string|null
     */
    protected $RefundStatus = null;

    /**
     * @var RefundArrayType|null
     */
    protected $RefundArray = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IsMultiLegShipping = null;

    /**
     * @var MultiLegShippingDetailsType|null
     */
    protected $MultiLegShippingDetails = null;

    /**
     * @var PaymentsInformationType|null
     */
    protected $MonetaryDetails = null;

    /**
     * @var PickupDetailsType|null
     */
    protected $PickupDetails = null;

    /**
     * @var PickupMethodSelectedType|null
     */
    protected $PickupMethodSelected = null;

    /**
     * @var UserIDType|null
     */
    protected $SellerUserID = null;

    /**
     * @var string|null
     */
    protected $SellerEIASToken = null;

    /**
     * @var string|null
     */
    protected $CancelReason = null;

    /**
     * @var CancelStatusCodeType|null
     */
    protected $CancelStatus = null;

    /**
     * @var string|null
     */
    protected $CancelReasonDetails = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingConvenienceCharge = null;

    /**
     * @var CancelDetailType[]|null
     */
    protected $CancelDetail = [];

    /**
     * @var string|null
     */
    protected $LogisticsPlanType = null;

    /**
     * @var TaxIdentifierType[]|null
     */
    protected $BuyerTaxIdentifier = [];

    /**
     * @var BuyerPackageEnclosuresType|null
     */
    protected $BuyerPackageEnclosures = null;

    /**
     * @var string|null
     */
    protected $ExtendedOrderID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ContainseBayPlusTransaction = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayCollectAndRemitTax = null;

    /**
     * @var int|null
     */
    protected $OrderLineItemCount = null;


    /**
     * @return OrderIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderID()
    {
        return $this->_dc($this->OrderID, 'OrderID');
    }

    /**
     * @param OrderIDType|null $value
     * @return void
     */
    public function setOrderID($value)
    {
        $this->OrderID = $value;
    }

    /**
     * @return OrderStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderStatus()
    {
        return $this->_dc($this->OrderStatus);
    }

    /**
     * @param OrderStatusCodeType|null $value
     * @return void
     */
    public function setOrderStatus($value)
    {
        $this->OrderStatus = $this->_enum($value, OrderStatusCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdjustmentAmount()
    {
        return $this->_dc($this->AdjustmentAmount, 'AdjustmentAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAdjustmentAmount($value)
    {
        $this->AdjustmentAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAmountPaid()
    {
        return $this->_dc($this->AmountPaid, 'AmountPaid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAmountPaid($value)
    {
        $this->AmountPaid = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAmountSaved()
    {
        return $this->_dc($this->AmountSaved, 'AmountSaved');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAmountSaved($value)
    {
        $this->AmountSaved = $value;
    }

    /**
     * @return CheckoutStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCheckoutStatus()
    {
        return $this->_dc($this->CheckoutStatus, 'CheckoutStatus');
    }

    /**
     * @param CheckoutStatusType|null $value
     * @return void
     */
    public function setCheckoutStatus($value)
    {
        $this->CheckoutStatus = $value;
    }

    /**
     * @return ShippingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingDetails()
    {
        return $this->_dc($this->ShippingDetails, 'ShippingDetails');
    }

    /**
     * @param ShippingDetailsType|null $value
     * @return void
     */
    public function setShippingDetails($value)
    {
        $this->ShippingDetails = $value;
    }

    /**
     * @return TradingRoleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreatingUserRole()
    {
        return $this->_dc($this->CreatingUserRole);
    }

    /**
     * @param TradingRoleCodeType|null $value
     * @return void
     */
    public function setCreatingUserRole($value)
    {
        $this->CreatingUserRole = $this->_enum($value, TradingRoleCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreatedTime()
    {
        return $this->_dc($this->CreatedTime, 'CreatedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreatedTime($value)
    {
        $this->CreatedTime = self::_string($value);
    }

    /**
     * @return string[]|BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPaymentMethods($index = null)
    {
        return $this->_dc($index === null
            ? $this->PaymentMethods
            : (count($this->PaymentMethods) > $index
                ? $this->PaymentMethods[$index]
                : null));
    }

    /**
     * @param BuyerPaymentMethodCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPaymentMethods($value, $index = null)
    {
        if ($index === null) {
            $this->PaymentMethods = $value;
        } else {
            $this->PaymentMethods[$index] = [];
            
            foreach ($value as $item) {
                $this->addPaymentMethods($item);
            }
        }
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
     * @return void
     */
    public function addPaymentMethods($value)
    {
        $this->PaymentMethods[] = $this->_enum($value, BuyerPaymentMethodCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerEmail()
    {
        return $this->_dc($this->SellerEmail, 'SellerEmail');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerEmail($value)
    {
        $this->SellerEmail = self::_string($value);
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingAddress()
    {
        return $this->_dc($this->ShippingAddress, 'ShippingAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setShippingAddress($value)
    {
        $this->ShippingAddress = $value;
    }

    /**
     * @return ShippingServiceOptionsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceSelected()
    {
        return $this->_dc($this->ShippingServiceSelected, 'ShippingServiceSelected');
    }

    /**
     * @param ShippingServiceOptionsType|null $value
     * @return void
     */
    public function setShippingServiceSelected($value)
    {
        $this->ShippingServiceSelected = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubtotal()
    {
        return $this->_dc($this->Subtotal, 'Subtotal');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setSubtotal($value)
    {
        $this->Subtotal = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotal()
    {
        return $this->_dc($this->Total, 'Total');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotal($value)
    {
        $this->Total = $value;
    }

    /**
     * @return ExternalTransactionType[]|ExternalTransactionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getExternalTransaction($index = null)
    {
        return $this->_dc($index === null
            ? $this->ExternalTransaction
            : (count($this->ExternalTransaction) > $index
                ? $this->ExternalTransaction[$index]
                : null), 'ExternalTransaction');
    }

    /**
     * @param ExternalTransactionType|null|ExternalTransactionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setExternalTransaction($value, $index = null)
    {
        if ($index === null) {
            $this->ExternalTransaction = $value;
        } else {
            $this->ExternalTransaction[$index] = [];
            
            foreach ($value as $item) {
                $this->addExternalTransaction($item);
            }
        }
    }

    /**
     * @param ExternalTransactionType|null $value
     * @return void
     */
    public function addExternalTransaction($value)
    {
        $this->ExternalTransaction[] = $value;
    }

    /**
     * @return TransactionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionArray()
    {
        return $this->_dc($this->TransactionArray, 'TransactionArray');
    }

    /**
     * @param TransactionArrayType|null $value
     * @return void
     */
    public function setTransactionArray($value)
    {
        $this->TransactionArray = $value;
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerUserID()
    {
        return $this->_dc($this->BuyerUserID, 'BuyerUserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setBuyerUserID($value)
    {
        $this->BuyerUserID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaidTime()
    {
        return $this->_dc($this->PaidTime, 'PaidTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPaidTime($value)
    {
        $this->PaidTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippedTime()
    {
        return $this->_dc($this->ShippedTime, 'ShippedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippedTime($value)
    {
        $this->ShippedTime = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->_dc($this->IntegratedMerchantCreditCardEnabled === 'true', 'IntegratedMerchantCreditCardEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIntegratedMerchantCreditCardEnabled($value)
    {
        $this->IntegratedMerchantCreditCardEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBundlePurchase()
    {
        return $this->_dc($this->BundlePurchase === 'true', 'BundlePurchase');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBundlePurchase($value)
    {
        $this->BundlePurchase = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerCheckoutMessage()
    {
        return $this->_dc($this->BuyerCheckoutMessage, 'BuyerCheckoutMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBuyerCheckoutMessage($value)
    {
        $this->BuyerCheckoutMessage = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEIASToken()
    {
        return $this->_dc($this->EIASToken, 'EIASToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEIASToken($value)
    {
        $this->EIASToken = self::_string($value);
    }

    /**
     * @return PaymentHoldStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentHoldStatus()
    {
        return $this->_dc($this->PaymentHoldStatus);
    }

    /**
     * @param PaymentHoldStatusCodeType|null $value
     * @return void
     */
    public function setPaymentHoldStatus($value)
    {
        $this->PaymentHoldStatus = $this->_enum($value, PaymentHoldStatusCodeType::class);
    }

    /**
     * @return PaymentHoldDetailType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentHoldDetails()
    {
        return $this->_dc($this->PaymentHoldDetails, 'PaymentHoldDetails');
    }

    /**
     * @param PaymentHoldDetailType|null $value
     * @return void
     */
    public function setPaymentHoldDetails($value)
    {
        $this->PaymentHoldDetails = $value;
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundStatus()
    {
        return $this->_dc($this->RefundStatus, 'RefundStatus');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundStatus($value)
    {
        $this->RefundStatus = self::_string($value);
    }

    /**
     * @return RefundArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundArray()
    {
        return $this->_dc($this->RefundArray, 'RefundArray');
    }

    /**
     * @param RefundArrayType|null $value
     * @return void
     */
    public function setRefundArray($value)
    {
        $this->RefundArray = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIsMultiLegShipping()
    {
        return $this->_dc($this->IsMultiLegShipping === 'true', 'IsMultiLegShipping');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIsMultiLegShipping($value)
    {
        $this->IsMultiLegShipping = self::_bool($value);
    }

    /**
     * @return MultiLegShippingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMultiLegShippingDetails()
    {
        return $this->_dc($this->MultiLegShippingDetails, 'MultiLegShippingDetails');
    }

    /**
     * @param MultiLegShippingDetailsType|null $value
     * @return void
     */
    public function setMultiLegShippingDetails($value)
    {
        $this->MultiLegShippingDetails = $value;
    }

    /**
     * @return PaymentsInformationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMonetaryDetails()
    {
        return $this->_dc($this->MonetaryDetails, 'MonetaryDetails');
    }

    /**
     * @param PaymentsInformationType|null $value
     * @return void
     */
    public function setMonetaryDetails($value)
    {
        $this->MonetaryDetails = $value;
    }

    /**
     * @return PickupDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupDetails()
    {
        return $this->_dc($this->PickupDetails, 'PickupDetails');
    }

    /**
     * @param PickupDetailsType|null $value
     * @return void
     */
    public function setPickupDetails($value)
    {
        $this->PickupDetails = $value;
    }

    /**
     * @return PickupMethodSelectedType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupMethodSelected()
    {
        return $this->_dc($this->PickupMethodSelected, 'PickupMethodSelected');
    }

    /**
     * @param PickupMethodSelectedType|null $value
     * @return void
     */
    public function setPickupMethodSelected($value)
    {
        $this->PickupMethodSelected = $value;
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerUserID()
    {
        return $this->_dc($this->SellerUserID, 'SellerUserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setSellerUserID($value)
    {
        $this->SellerUserID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerEIASToken()
    {
        return $this->_dc($this->SellerEIASToken, 'SellerEIASToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerEIASToken($value)
    {
        $this->SellerEIASToken = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCancelReason()
    {
        return $this->_dc($this->CancelReason, 'CancelReason');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCancelReason($value)
    {
        $this->CancelReason = self::_string($value);
    }

    /**
     * @return CancelStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCancelStatus()
    {
        return $this->_dc($this->CancelStatus);
    }

    /**
     * @param CancelStatusCodeType|null $value
     * @return void
     */
    public function setCancelStatus($value)
    {
        $this->CancelStatus = $this->_enum($value, CancelStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCancelReasonDetails()
    {
        return $this->_dc($this->CancelReasonDetails, 'CancelReasonDetails');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCancelReasonDetails($value)
    {
        $this->CancelReasonDetails = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingConvenienceCharge()
    {
        return $this->_dc($this->ShippingConvenienceCharge, 'ShippingConvenienceCharge');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingConvenienceCharge($value)
    {
        $this->ShippingConvenienceCharge = $value;
    }

    /**
     * @return CancelDetailType[]|CancelDetailType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCancelDetail($index = null)
    {
        return $this->_dc($index === null
            ? $this->CancelDetail
            : (count($this->CancelDetail) > $index
                ? $this->CancelDetail[$index]
                : null), 'CancelDetail');
    }

    /**
     * @param CancelDetailType|null|CancelDetailType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCancelDetail($value, $index = null)
    {
        if ($index === null) {
            $this->CancelDetail = $value;
        } else {
            $this->CancelDetail[$index] = [];
            
            foreach ($value as $item) {
                $this->addCancelDetail($item);
            }
        }
    }

    /**
     * @param CancelDetailType|null $value
     * @return void
     */
    public function addCancelDetail($value)
    {
        $this->CancelDetail[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogisticsPlanType()
    {
        return $this->_dc($this->LogisticsPlanType, 'LogisticsPlanType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLogisticsPlanType($value)
    {
        $this->LogisticsPlanType = self::_string($value);
    }

    /**
     * @return TaxIdentifierType[]|TaxIdentifierType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBuyerTaxIdentifier($index = null)
    {
        return $this->_dc($index === null
            ? $this->BuyerTaxIdentifier
            : (count($this->BuyerTaxIdentifier) > $index
                ? $this->BuyerTaxIdentifier[$index]
                : null), 'BuyerTaxIdentifier');
    }

    /**
     * @param TaxIdentifierType|null|TaxIdentifierType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBuyerTaxIdentifier($value, $index = null)
    {
        if ($index === null) {
            $this->BuyerTaxIdentifier = $value;
        } else {
            $this->BuyerTaxIdentifier[$index] = [];
            
            foreach ($value as $item) {
                $this->addBuyerTaxIdentifier($item);
            }
        }
    }

    /**
     * @param TaxIdentifierType|null $value
     * @return void
     */
    public function addBuyerTaxIdentifier($value)
    {
        $this->BuyerTaxIdentifier[] = $value;
    }

    /**
     * @return BuyerPackageEnclosuresType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerPackageEnclosures()
    {
        return $this->_dc($this->BuyerPackageEnclosures, 'BuyerPackageEnclosures');
    }

    /**
     * @param BuyerPackageEnclosuresType|null $value
     * @return void
     */
    public function setBuyerPackageEnclosures($value)
    {
        $this->BuyerPackageEnclosures = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExtendedOrderID()
    {
        return $this->_dc($this->ExtendedOrderID, 'ExtendedOrderID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExtendedOrderID($value)
    {
        $this->ExtendedOrderID = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getContainseBayPlusTransaction()
    {
        return $this->_dc($this->ContainseBayPlusTransaction === 'true', 'ContainseBayPlusTransaction');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setContainseBayPlusTransaction($value)
    {
        $this->ContainseBayPlusTransaction = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayCollectAndRemitTax()
    {
        return $this->_dc($this->eBayCollectAndRemitTax === 'true', 'eBayCollectAndRemitTax');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayCollectAndRemitTax($value)
    {
        $this->eBayCollectAndRemitTax = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderLineItemCount()
    {
        return $this->_dc($this->OrderLineItemCount, 'OrderLineItemCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setOrderLineItemCount($value)
    {
        $this->OrderLineItemCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'OrderID' => ['type' => 'OrderIDType', 'xmlns' => self::XMLNS],
            'OrderStatus' => ['type' => 'OrderStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AdjustmentAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'AmountPaid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'AmountSaved' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'CheckoutStatus' => ['type' => 'CheckoutStatusType', 'xmlns' => self::XMLNS],
            'ShippingDetails' => ['type' => 'ShippingDetailsType', 'xmlns' => self::XMLNS],
            'CreatingUserRole' => ['type' => 'TradingRoleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CreatedTime' => [],
            'PaymentMethods' => ['type' => 'BuyerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'SellerEmail' => [],
            'ShippingAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'ShippingServiceSelected' => ['type' => 'ShippingServiceOptionsType', 'xmlns' => self::XMLNS],
            'Subtotal' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Total' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ExternalTransaction' => ['type' => 'ExternalTransactionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'TransactionArray' => ['type' => 'TransactionArrayType', 'xmlns' => self::XMLNS],
            'BuyerUserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'PaidTime' => [],
            'ShippedTime' => [],
            'IntegratedMerchantCreditCardEnabled' => ['type' => 'bool'],
            'BundlePurchase' => ['type' => 'bool'],
            'BuyerCheckoutMessage' => [],
            'EIASToken' => [],
            'PaymentHoldStatus' => ['type' => 'PaymentHoldStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PaymentHoldDetails' => ['type' => 'PaymentHoldDetailType', 'xmlns' => self::XMLNS],
            'RefundAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'RefundStatus' => [],
            'RefundArray' => ['type' => 'RefundArrayType', 'xmlns' => self::XMLNS],
            'IsMultiLegShipping' => ['type' => 'bool'],
            'MultiLegShippingDetails' => ['type' => 'MultiLegShippingDetailsType', 'xmlns' => self::XMLNS],
            'MonetaryDetails' => ['type' => 'PaymentsInformationType', 'xmlns' => self::XMLNS],
            'PickupDetails' => ['type' => 'PickupDetailsType', 'xmlns' => self::XMLNS],
            'PickupMethodSelected' => ['type' => 'PickupMethodSelectedType', 'xmlns' => self::XMLNS],
            'SellerUserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'SellerEIASToken' => [],
            'CancelReason' => [],
            'CancelStatus' => ['type' => 'CancelStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CancelReasonDetails' => [],
            'ShippingConvenienceCharge' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'CancelDetail' => ['type' => 'CancelDetailType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'LogisticsPlanType' => [],
            'BuyerTaxIdentifier' => ['type' => 'TaxIdentifierType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'BuyerPackageEnclosures' => ['type' => 'BuyerPackageEnclosuresType', 'xmlns' => self::XMLNS],
            'ExtendedOrderID' => [],
            'ContainseBayPlusTransaction' => ['type' => 'bool'],
            'eBayCollectAndRemitTax' => ['type' => 'bool'],
            'OrderLineItemCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

OrderType::_register();
