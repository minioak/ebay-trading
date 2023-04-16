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
 * Contains information about a sales transaction from an eBay listing. This identifier is automatically created by
 * the eBay system once a buyer has committed to make a purchase in an
 * auction or fixed-price listing. A fixed-priced listing (single or multiple-variation) with multiple quantity
 * can spawn one or more sales transactions.
 **/
class TransactionType extends EbatNs_ComplexType
{
    const TAG = 'TransactionType';
    const NAME = 'TransactionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $AmountPaid = null;

    /**
     * @var AmountType|null
     */
    protected $AdjustmentAmount = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedAdjustmentAmount = null;

    /**
     * @var UserType|null
     */
    protected $Buyer = null;

    /**
     * @var ShippingDetailsType|null
     */
    protected $ShippingDetails = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedAmountPaid = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedTransactionPrice = null;

    /**
     * @var string|null
     */
    protected $CreatedDate = null;

    /**
     * @var DepositTypeCodeType|null
     */
    protected $DepositType = null;

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var int|null
     */
    protected $QuantityPurchased = null;

    /**
     * @var TransactionStatusType|null
     */
    protected $Status = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var AmountType|null
     */
    protected $TransactionPrice = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BestOfferSale = null;

    /**
     * @var float|null
     */
    protected $VATPercent = null;

    /**
     * @var ExternalTransactionType[]|null
     */
    protected $ExternalTransaction = [];

    /**
     * @var SellingManagerProductDetailsType|null
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var ShippingServiceOptionsType|null
     */
    protected $ShippingServiceSelected = null;

    /**
     * @var string|null
     */
    protected $BuyerMessage = null;

    /**
     * @var AmountType|null
     */
    protected $DutchAuctionBid = null;

    /**
     * @var PaidStatusCodeType|null
     */
    protected $BuyerPaidStatus = null;

    /**
     * @var PaidStatusCodeType|null
     */
    protected $SellerPaidStatus = null;

    /**
     * @var string|null
     */
    protected $PaidTime = null;

    /**
     * @var string|null
     */
    protected $ShippedTime = null;

    /**
     * @var AmountType|null
     */
    protected $TotalPrice = null;

    /**
     * @var FeedbackInfoType|null
     */
    protected $FeedbackLeft = null;

    /**
     * @var FeedbackInfoType|null
     */
    protected $FeedbackReceived = null;

    /**
     * @var OrderType|null
     */
    protected $ContainingOrder = null;

    /**
     * @var AmountType|null
     */
    protected $FinalValueFee = null;

    /**
     * @var ListingCheckoutRedirectPreferenceType|null
     */
    protected $ListingCheckoutRedirectPreference = null;

    /**
     * @var RefundArrayType|null
     */
    protected $RefundArray = null;

    /**
     * @var SiteCodeType|null
     */
    protected $TransactionSiteID = null;

    /**
     * @var TransactionPlatformCodeType|null
     */
    protected $Platform = null;

    /**
     * @var string|null
     */
    protected $CartID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SellerContactBuyerByEmail = null;

    /**
     * @var string|null
     */
    protected $PayPalEmailAddress = null;

    /**
     * @var string|null
     */
    protected $PaisaPayID = null;

    /**
     * @var AmountType|null
     */
    protected $BuyerGuaranteePrice = null;

    /**
     * @var VariationType|null
     */
    protected $Variation = null;

    /**
     * @var string|null
     */
    protected $BuyerCheckoutMessage = null;

    /**
     * @var AmountType|null
     */
    protected $TotalTransactionPrice = null;

    /**
     * @var TaxesType|null
     */
    protected $Taxes = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BundlePurchase = null;

    /**
     * @var AmountType|null
     */
    protected $ActualShippingCost = null;

    /**
     * @var AmountType|null
     */
    protected $ActualHandlingCost = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;

    /**
     * @var string|null
     */
    protected $eBayPaymentID = null;

    /**
     * @var PaymentHoldDetailType|null
     */
    protected $PaymentHoldDetails = null;

    /**
     * @var SellerDiscountsType|null
     */
    protected $SellerDiscounts = null;

    /**
     * @var AmountType|null
     */
    protected $RefundAmount = null;

    /**
     * @var string|null
     */
    protected $RefundStatus = null;

    /**
     * @var string|null
     */
    protected $CodiceFiscale = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IsMultiLegShipping = null;

    /**
     * @var MultiLegShippingDetailsType|null
     */
    protected $MultiLegShippingDetails = null;

    /**
     * @var string|null
     */
    protected $InvoiceSentTime = null;

    /**
     * @var UnpaidItemType|null
     */
    protected $UnpaidItem = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IntangibleItem = null;

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
     * @var AmountType|null
     */
    protected $ShippingConvenienceCharge = null;

    /**
     * @var string|null
     */
    protected $LogisticsPlanType = null;

    /**
     * @var BuyerPackageEnclosuresType|null
     */
    protected $BuyerPackageEnclosures = null;

    /**
     * @var string|null
     */
    protected $InventoryReservationID = null;

    /**
     * @var string|null
     */
    protected $ExtendedOrderID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayPlusTransaction = null;

    /**
     * @var GiftSummaryType|null
     */
    protected $GiftSummary = null;

    /**
     * @var DigitalDeliverySelectedType|null
     */
    protected $DigitalDeliverySelected = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Gift = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $GuaranteedShipping = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $GuaranteedDelivery = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayCollectAndRemitTax = null;

    /**
     * @var TaxesType|null
     */
    protected $eBayCollectAndRemitTaxes = null;

    /**
     * @var TransactionProgramType|null
     */
    protected $Program = null;


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
    public function getConvertedAdjustmentAmount()
    {
        return $this->_dc($this->ConvertedAdjustmentAmount, 'ConvertedAdjustmentAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedAdjustmentAmount($value)
    {
        $this->ConvertedAdjustmentAmount = $value;
    }

    /**
     * @return UserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyer()
    {
        return $this->_dc($this->Buyer, 'Buyer');
    }

    /**
     * @param UserType|null $value
     * @return void
     */
    public function setBuyer($value)
    {
        $this->Buyer = $value;
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedAmountPaid()
    {
        return $this->_dc($this->ConvertedAmountPaid, 'ConvertedAmountPaid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedAmountPaid($value)
    {
        $this->ConvertedAmountPaid = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedTransactionPrice()
    {
        return $this->_dc($this->ConvertedTransactionPrice, 'ConvertedTransactionPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedTransactionPrice($value)
    {
        $this->ConvertedTransactionPrice = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreatedDate()
    {
        return $this->_dc($this->CreatedDate, 'CreatedDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreatedDate($value)
    {
        $this->CreatedDate = self::_string($value);
    }

    /**
     * @return DepositTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDepositType()
    {
        return $this->_dc($this->DepositType);
    }

    /**
     * @param DepositTypeCodeType|null $value
     * @return void
     */
    public function setDepositType($value)
    {
        $this->DepositType = $this->_enum($value, DepositTypeCodeType::class);
    }

    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityPurchased()
    {
        return $this->_dc($this->QuantityPurchased, 'QuantityPurchased');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantityPurchased($value)
    {
        $this->QuantityPurchased = self::_int($value);
    }

    /**
     * @return TransactionStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status, 'Status');
    }

    /**
     * @param TransactionStatusType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionPrice()
    {
        return $this->_dc($this->TransactionPrice, 'TransactionPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTransactionPrice($value)
    {
        $this->TransactionPrice = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferSale()
    {
        return $this->_dc($this->BestOfferSale === 'true', 'BestOfferSale');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBestOfferSale($value)
    {
        $this->BestOfferSale = self::_bool($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATPercent()
    {
        return $this->_dc($this->VATPercent, 'VATPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setVATPercent($value)
    {
        $this->VATPercent = self::_float($value);
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
     * @return SellingManagerProductDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerProductDetails()
    {
        return $this->_dc($this->SellingManagerProductDetails, 'SellingManagerProductDetails');
    }

    /**
     * @param SellingManagerProductDetailsType|null $value
     * @return void
     */
    public function setSellingManagerProductDetails($value)
    {
        $this->SellingManagerProductDetails = $value;
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerMessage()
    {
        return $this->_dc($this->BuyerMessage, 'BuyerMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBuyerMessage($value)
    {
        $this->BuyerMessage = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDutchAuctionBid()
    {
        return $this->_dc($this->DutchAuctionBid, 'DutchAuctionBid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setDutchAuctionBid($value)
    {
        $this->DutchAuctionBid = $value;
    }

    /**
     * @return PaidStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerPaidStatus()
    {
        return $this->_dc($this->BuyerPaidStatus);
    }

    /**
     * @param PaidStatusCodeType|null $value
     * @return void
     */
    public function setBuyerPaidStatus($value)
    {
        $this->BuyerPaidStatus = $this->_enum($value, PaidStatusCodeType::class);
    }

    /**
     * @return PaidStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerPaidStatus()
    {
        return $this->_dc($this->SellerPaidStatus);
    }

    /**
     * @param PaidStatusCodeType|null $value
     * @return void
     */
    public function setSellerPaidStatus($value)
    {
        $this->SellerPaidStatus = $this->_enum($value, PaidStatusCodeType::class);
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalPrice()
    {
        return $this->_dc($this->TotalPrice, 'TotalPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalPrice($value)
    {
        $this->TotalPrice = $value;
    }

    /**
     * @return FeedbackInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackLeft()
    {
        return $this->_dc($this->FeedbackLeft, 'FeedbackLeft');
    }

    /**
     * @param FeedbackInfoType|null $value
     * @return void
     */
    public function setFeedbackLeft($value)
    {
        $this->FeedbackLeft = $value;
    }

    /**
     * @return FeedbackInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackReceived()
    {
        return $this->_dc($this->FeedbackReceived, 'FeedbackReceived');
    }

    /**
     * @param FeedbackInfoType|null $value
     * @return void
     */
    public function setFeedbackReceived($value)
    {
        $this->FeedbackReceived = $value;
    }

    /**
     * @return OrderType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getContainingOrder()
    {
        return $this->_dc($this->ContainingOrder, 'ContainingOrder');
    }

    /**
     * @param OrderType|null $value
     * @return void
     */
    public function setContainingOrder($value)
    {
        $this->ContainingOrder = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFinalValueFee()
    {
        return $this->_dc($this->FinalValueFee, 'FinalValueFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setFinalValueFee($value)
    {
        $this->FinalValueFee = $value;
    }

    /**
     * @return ListingCheckoutRedirectPreferenceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingCheckoutRedirectPreference()
    {
        return $this->_dc($this->ListingCheckoutRedirectPreference, 'ListingCheckoutRedirectPreference');
    }

    /**
     * @param ListingCheckoutRedirectPreferenceType|null $value
     * @return void
     */
    public function setListingCheckoutRedirectPreference($value)
    {
        $this->ListingCheckoutRedirectPreference = $value;
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
     * @return SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionSiteID()
    {
        return $this->_dc($this->TransactionSiteID);
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function setTransactionSiteID($value)
    {
        $this->TransactionSiteID = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return TransactionPlatformCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPlatform()
    {
        return $this->_dc($this->Platform);
    }

    /**
     * @param TransactionPlatformCodeType|null $value
     * @return void
     */
    public function setPlatform($value)
    {
        $this->Platform = $this->_enum($value, TransactionPlatformCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCartID()
    {
        return $this->_dc($this->CartID, 'CartID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCartID($value)
    {
        $this->CartID = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerContactBuyerByEmail()
    {
        return $this->_dc($this->SellerContactBuyerByEmail === 'true', 'SellerContactBuyerByEmail');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSellerContactBuyerByEmail($value)
    {
        $this->SellerContactBuyerByEmail = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalEmailAddress()
    {
        return $this->_dc($this->PayPalEmailAddress, 'PayPalEmailAddress');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPayPalEmailAddress($value)
    {
        $this->PayPalEmailAddress = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaisaPayID()
    {
        return $this->_dc($this->PaisaPayID, 'PaisaPayID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPaisaPayID($value)
    {
        $this->PaisaPayID = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerGuaranteePrice()
    {
        return $this->_dc($this->BuyerGuaranteePrice, 'BuyerGuaranteePrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setBuyerGuaranteePrice($value)
    {
        $this->BuyerGuaranteePrice = $value;
    }

    /**
     * @return VariationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariation()
    {
        return $this->_dc($this->Variation, 'Variation');
    }

    /**
     * @param VariationType|null $value
     * @return void
     */
    public function setVariation($value)
    {
        $this->Variation = $value;
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalTransactionPrice()
    {
        return $this->_dc($this->TotalTransactionPrice, 'TotalTransactionPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalTransactionPrice($value)
    {
        $this->TotalTransactionPrice = $value;
    }

    /**
     * @return TaxesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxes()
    {
        return $this->_dc($this->Taxes, 'Taxes');
    }

    /**
     * @param TaxesType|null $value
     * @return void
     */
    public function setTaxes($value)
    {
        $this->Taxes = $value;
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActualShippingCost()
    {
        return $this->_dc($this->ActualShippingCost, 'ActualShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setActualShippingCost($value)
    {
        $this->ActualShippingCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActualHandlingCost()
    {
        return $this->_dc($this->ActualHandlingCost, 'ActualHandlingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setActualHandlingCost($value)
    {
        $this->ActualHandlingCost = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderLineItemID()
    {
        return $this->_dc($this->OrderLineItemID, 'OrderLineItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderLineItemID($value)
    {
        $this->OrderLineItemID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayPaymentID()
    {
        return $this->_dc($this->eBayPaymentID, 'eBayPaymentID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEBayPaymentID($value)
    {
        $this->eBayPaymentID = self::_string($value);
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
     * @return SellerDiscountsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerDiscounts()
    {
        return $this->_dc($this->SellerDiscounts, 'SellerDiscounts');
    }

    /**
     * @param SellerDiscountsType|null $value
     * @return void
     */
    public function setSellerDiscounts($value)
    {
        $this->SellerDiscounts = $value;
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCodiceFiscale()
    {
        return $this->_dc($this->CodiceFiscale, 'CodiceFiscale');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCodiceFiscale($value)
    {
        $this->CodiceFiscale = self::_string($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvoiceSentTime()
    {
        return $this->_dc($this->InvoiceSentTime, 'InvoiceSentTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInvoiceSentTime($value)
    {
        $this->InvoiceSentTime = self::_string($value);
    }

    /**
     * @return UnpaidItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnpaidItem()
    {
        return $this->_dc($this->UnpaidItem, 'UnpaidItem');
    }

    /**
     * @param UnpaidItemType|null $value
     * @return void
     */
    public function setUnpaidItem($value)
    {
        $this->UnpaidItem = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIntangibleItem()
    {
        return $this->_dc($this->IntangibleItem === 'true', 'IntangibleItem');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIntangibleItem($value)
    {
        $this->IntangibleItem = self::_bool($value);
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
    public function getInventoryReservationID()
    {
        return $this->_dc($this->InventoryReservationID, 'InventoryReservationID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInventoryReservationID($value)
    {
        $this->InventoryReservationID = self::_string($value);
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
    public function getEBayPlusTransaction()
    {
        return $this->_dc($this->eBayPlusTransaction === 'true', 'eBayPlusTransaction');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayPlusTransaction($value)
    {
        $this->eBayPlusTransaction = self::_bool($value);
    }

    /**
     * @return GiftSummaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGiftSummary()
    {
        return $this->_dc($this->GiftSummary, 'GiftSummary');
    }

    /**
     * @param GiftSummaryType|null $value
     * @return void
     */
    public function setGiftSummary($value)
    {
        $this->GiftSummary = $value;
    }

    /**
     * @return DigitalDeliverySelectedType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDigitalDeliverySelected()
    {
        return $this->_dc($this->DigitalDeliverySelected, 'DigitalDeliverySelected');
    }

    /**
     * @param DigitalDeliverySelectedType|null $value
     * @return void
     */
    public function setDigitalDeliverySelected($value)
    {
        $this->DigitalDeliverySelected = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGift()
    {
        return $this->_dc($this->Gift === 'true', 'Gift');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setGift($value)
    {
        $this->Gift = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGuaranteedShipping()
    {
        return $this->_dc($this->GuaranteedShipping === 'true', 'GuaranteedShipping');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setGuaranteedShipping($value)
    {
        $this->GuaranteedShipping = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGuaranteedDelivery()
    {
        return $this->_dc($this->GuaranteedDelivery === 'true', 'GuaranteedDelivery');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setGuaranteedDelivery($value)
    {
        $this->GuaranteedDelivery = self::_bool($value);
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
     * @return TaxesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayCollectAndRemitTaxes()
    {
        return $this->_dc($this->eBayCollectAndRemitTaxes, 'eBayCollectAndRemitTaxes');
    }

    /**
     * @param TaxesType|null $value
     * @return void
     */
    public function setEBayCollectAndRemitTaxes($value)
    {
        $this->eBayCollectAndRemitTaxes = $value;
    }

    /**
     * @return TransactionProgramType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProgram()
    {
        return $this->_dc($this->Program, 'Program');
    }

    /**
     * @param TransactionProgramType|null $value
     * @return void
     */
    public function setProgram($value)
    {
        $this->Program = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AmountPaid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'AdjustmentAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ConvertedAdjustmentAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Buyer' => ['type' => 'UserType', 'xmlns' => self::XMLNS],
            'ShippingDetails' => ['type' => 'ShippingDetailsType', 'xmlns' => self::XMLNS],
            'ConvertedAmountPaid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ConvertedTransactionPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'CreatedDate' => [],
            'DepositType' => ['type' => 'DepositTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'QuantityPurchased' => ['type' => 'int'],
            'Status' => ['type' => 'TransactionStatusType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'TransactionPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'BestOfferSale' => ['type' => 'bool'],
            'VATPercent' => ['type' => 'float'],
            'ExternalTransaction' => ['type' => 'ExternalTransactionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'SellingManagerProductDetails' => ['type' => 'SellingManagerProductDetailsType', 'xmlns' => self::XMLNS],
            'ShippingServiceSelected' => ['type' => 'ShippingServiceOptionsType', 'xmlns' => self::XMLNS],
            'BuyerMessage' => [],
            'DutchAuctionBid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'BuyerPaidStatus' => ['type' => 'PaidStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellerPaidStatus' => ['type' => 'PaidStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PaidTime' => [],
            'ShippedTime' => [],
            'TotalPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'FeedbackLeft' => ['type' => 'FeedbackInfoType', 'xmlns' => self::XMLNS],
            'FeedbackReceived' => ['type' => 'FeedbackInfoType', 'xmlns' => self::XMLNS],
            'ContainingOrder' => ['type' => 'OrderType', 'xmlns' => self::XMLNS],
            'FinalValueFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ListingCheckoutRedirectPreference' => ['type' => 'ListingCheckoutRedirectPreferenceType', 'xmlns' => self::XMLNS],
            'RefundArray' => ['type' => 'RefundArrayType', 'xmlns' => self::XMLNS],
            'TransactionSiteID' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Platform' => ['type' => 'TransactionPlatformCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CartID' => [],
            'SellerContactBuyerByEmail' => ['type' => 'bool'],
            'PayPalEmailAddress' => [],
            'PaisaPayID' => [],
            'BuyerGuaranteePrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Variation' => ['type' => 'VariationType', 'xmlns' => self::XMLNS],
            'BuyerCheckoutMessage' => [],
            'TotalTransactionPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Taxes' => ['type' => 'TaxesType', 'xmlns' => self::XMLNS],
            'BundlePurchase' => ['type' => 'bool'],
            'ActualShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ActualHandlingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => [],
            'eBayPaymentID' => [],
            'PaymentHoldDetails' => ['type' => 'PaymentHoldDetailType', 'xmlns' => self::XMLNS],
            'SellerDiscounts' => ['type' => 'SellerDiscountsType', 'xmlns' => self::XMLNS],
            'RefundAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'RefundStatus' => [],
            'CodiceFiscale' => [],
            'IsMultiLegShipping' => ['type' => 'bool'],
            'MultiLegShippingDetails' => ['type' => 'MultiLegShippingDetailsType', 'xmlns' => self::XMLNS],
            'InvoiceSentTime' => [],
            'UnpaidItem' => ['type' => 'UnpaidItemType', 'xmlns' => self::XMLNS],
            'IntangibleItem' => ['type' => 'bool'],
            'MonetaryDetails' => ['type' => 'PaymentsInformationType', 'xmlns' => self::XMLNS],
            'PickupDetails' => ['type' => 'PickupDetailsType', 'xmlns' => self::XMLNS],
            'PickupMethodSelected' => ['type' => 'PickupMethodSelectedType', 'xmlns' => self::XMLNS],
            'ShippingConvenienceCharge' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'LogisticsPlanType' => [],
            'BuyerPackageEnclosures' => ['type' => 'BuyerPackageEnclosuresType', 'xmlns' => self::XMLNS],
            'InventoryReservationID' => [],
            'ExtendedOrderID' => [],
            'eBayPlusTransaction' => ['type' => 'bool'],
            'GiftSummary' => ['type' => 'GiftSummaryType', 'xmlns' => self::XMLNS],
            'DigitalDeliverySelected' => ['type' => 'DigitalDeliverySelectedType', 'xmlns' => self::XMLNS],
            'Gift' => ['type' => 'bool'],
            'GuaranteedShipping' => ['type' => 'bool'],
            'GuaranteedDelivery' => ['type' => 'bool'],
            'eBayCollectAndRemitTax' => ['type' => 'bool'],
            'eBayCollectAndRemitTaxes' => ['type' => 'TaxesType', 'xmlns' => self::XMLNS],
            'Program' => ['type' => 'TransactionProgramType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TransactionType::_register();
