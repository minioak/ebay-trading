<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'UserType.php';
require_once 'ShippingDetailsType.php';
require_once 'DepositTypeCodeType.php';
require_once 'ItemType.php';
require_once 'TransactionStatusType.php';
require_once 'ExternalTransactionType.php';
require_once 'SellingManagerProductDetailsType.php';
require_once 'ShippingServiceOptionsType.php';
require_once 'PaidStatusCodeType.php';
require_once 'FeedbackInfoType.php';
require_once 'OrderType.php';
require_once 'ListingCheckoutRedirectPreferenceType.php';
require_once 'RefundArrayType.php';
require_once 'SiteCodeType.php';
require_once 'TransactionPlatformCodeType.php';
require_once 'VariationType.php';
require_once 'TaxesType.php';
require_once 'PaymentHoldDetailType.php';
require_once 'SellerDiscountsType.php';
require_once 'MultiLegShippingDetailsType.php';
require_once 'UnpaidItemType.php';
require_once 'PaymentsInformationType.php';
require_once 'PickupDetailsType.php';
require_once 'PickupMethodSelectedType.php';
require_once 'BuyerPackageEnclosuresType.php';
require_once 'GiftSummaryType.php';
require_once 'DigitalDeliverySelectedType.php';

/**
  * Contains information about a single order line item (transaction). An order
  * line item contains information about the sale of one or multiple
  * items from a single listing to a single buyer. The eBay system creates an order
  * line item when a buyer has committed to make a purchase in an
  * auction or fixed-price listing. A fixed-priced listing (with multiple identical
  * items or a similar item with variations) can spawn one or more order line items. Auction listings and single-item, fixed-price listings can only spawn one order line item.
  * 
 **/

class TransactionType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $AmountPaid;

	/**
	* @var AmountType
	**/
	protected $AdjustmentAmount;

	/**
	* @var AmountType
	**/
	protected $ConvertedAdjustmentAmount;

	/**
	* @var UserType
	**/
	protected $Buyer;

	/**
	* @var ShippingDetailsType
	**/
	protected $ShippingDetails;

	/**
	* @var AmountType
	**/
	protected $ConvertedAmountPaid;

	/**
	* @var AmountType
	**/
	protected $ConvertedTransactionPrice;

	/**
	* @var dateTime
	**/
	protected $CreatedDate;

	/**
	* @var DepositTypeCodeType
	**/
	protected $DepositType;

	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var int
	**/
	protected $QuantityPurchased;

	/**
	* @var TransactionStatusType
	**/
	protected $Status;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var AmountType
	**/
	protected $TransactionPrice;

	/**
	* @var boolean
	**/
	protected $BestOfferSale;

	/**
	* @var decimal
	**/
	protected $VATPercent;

	/**
	* @var ExternalTransactionType
	**/
	protected $ExternalTransaction;

	/**
	* @var SellingManagerProductDetailsType
	**/
	protected $SellingManagerProductDetails;

	/**
	* @var ShippingServiceOptionsType
	**/
	protected $ShippingServiceSelected;

	/**
	* @var string
	**/
	protected $BuyerMessage;

	/**
	* @var AmountType
	**/
	protected $DutchAuctionBid;

	/**
	* @var PaidStatusCodeType
	**/
	protected $BuyerPaidStatus;

	/**
	* @var PaidStatusCodeType
	**/
	protected $SellerPaidStatus;

	/**
	* @var dateTime
	**/
	protected $PaidTime;

	/**
	* @var dateTime
	**/
	protected $ShippedTime;

	/**
	* @var AmountType
	**/
	protected $TotalPrice;

	/**
	* @var FeedbackInfoType
	**/
	protected $FeedbackLeft;

	/**
	* @var FeedbackInfoType
	**/
	protected $FeedbackReceived;

	/**
	* @var OrderType
	**/
	protected $ContainingOrder;

	/**
	* @var AmountType
	**/
	protected $FinalValueFee;

	/**
	* @var ListingCheckoutRedirectPreferenceType
	**/
	protected $ListingCheckoutRedirectPreference;

	/**
	* @var RefundArrayType
	**/
	protected $RefundArray;

	/**
	* @var SiteCodeType
	**/
	protected $TransactionSiteID;

	/**
	* @var TransactionPlatformCodeType
	**/
	protected $Platform;

	/**
	* @var string
	**/
	protected $CartID;

	/**
	* @var boolean
	**/
	protected $SellerContactBuyerByEmail;

	/**
	* @var string
	**/
	protected $PayPalEmailAddress;

	/**
	* @var string
	**/
	protected $PaisaPayID;

	/**
	* @var AmountType
	**/
	protected $BuyerGuaranteePrice;

	/**
	* @var VariationType
	**/
	protected $Variation;

	/**
	* @var string
	**/
	protected $BuyerCheckoutMessage;

	/**
	* @var TaxesType
	**/
	protected $Taxes;

	/**
	* @var boolean
	**/
	protected $BundlePurchase;

	/**
	* @var AmountType
	**/
	protected $ActualShippingCost;

	/**
	* @var AmountType
	**/
	protected $ActualHandlingCost;

	/**
	* @var string
	**/
	protected $OrderLineItemID;

	/**
	* @var PaymentHoldDetailType
	**/
	protected $PaymentHoldDetails;

	/**
	* @var SellerDiscountsType
	**/
	protected $SellerDiscounts;

	/**
	* @var AmountType
	**/
	protected $RefundAmount;

	/**
	* @var string
	**/
	protected $RefundStatus;

	/**
	* @var string
	**/
	protected $CodiceFiscale;

	/**
	* @var boolean
	**/
	protected $IsMultiLegShipping;

	/**
	* @var MultiLegShippingDetailsType
	**/
	protected $MultiLegShippingDetails;

	/**
	* @var dateTime
	**/
	protected $InvoiceSentTime;

	/**
	* @var UnpaidItemType
	**/
	protected $UnpaidItem;

	/**
	* @var boolean
	**/
	protected $IntangibleItem;

	/**
	* @var PaymentsInformationType
	**/
	protected $MonetaryDetails;

	/**
	* @var PickupDetailsType
	**/
	protected $PickupDetails;

	/**
	* @var PickupMethodSelectedType
	**/
	protected $PickupMethodSelected;

	/**
	* @var AmountType
	**/
	protected $ShippingConvenienceCharge;

	/**
	* @var token
	**/
	protected $LogisticsPlanType;

	/**
	* @var BuyerPackageEnclosuresType
	**/
	protected $BuyerPackageEnclosures;

	/**
	* @var string
	**/
	protected $InventoryReservationID;

	/**
	* @var string
	**/
	protected $ExtendedOrderID;

	/**
	* @var boolean
	**/
	protected $eBayPlusTransaction;

	/**
	* @var GiftSummaryType
	**/
	protected $GiftSummary;

	/**
	* @var DigitalDeliverySelectedType
	**/
	protected $DigitalDeliverySelected;

	/**
	* @var boolean
	**/
	protected $Gift;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TransactionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AdjustmentAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedAdjustmentAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Buyer' =>
				array(
					'required' => false,
					'type' => 'UserType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingDetails' =>
				array(
					'required' => false,
					'type' => 'ShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedAmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedTransactionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreatedDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DepositType' =>
				array(
					'required' => false,
					'type' => 'DepositTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityPurchased' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'TransactionStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferSale' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATPercent' =>
				array(
					'required' => false,
					'type' => 'decimal',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalTransaction' =>
				array(
					'required' => false,
					'type' => 'ExternalTransactionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'SellingManagerProductDetails' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceSelected' =>
				array(
					'required' => false,
					'type' => 'ShippingServiceOptionsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DutchAuctionBid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerPaidStatus' =>
				array(
					'required' => false,
					'type' => 'PaidStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaidStatus' =>
				array(
					'required' => false,
					'type' => 'PaidStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaidTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackLeft' =>
				array(
					'required' => false,
					'type' => 'FeedbackInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackReceived' =>
				array(
					'required' => false,
					'type' => 'FeedbackInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ContainingOrder' =>
				array(
					'required' => false,
					'type' => 'OrderType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FinalValueFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingCheckoutRedirectPreference' =>
				array(
					'required' => false,
					'type' => 'ListingCheckoutRedirectPreferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundArray' =>
				array(
					'required' => false,
					'type' => 'RefundArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionSiteID' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Platform' =>
				array(
					'required' => false,
					'type' => 'TransactionPlatformCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CartID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerContactBuyerByEmail' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalEmailAddress' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaisaPayID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerGuaranteePrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Variation' =>
				array(
					'required' => false,
					'type' => 'VariationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerCheckoutMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Taxes' =>
				array(
					'required' => false,
					'type' => 'TaxesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BundlePurchase' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ActualShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ActualHandlingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderLineItemID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentHoldDetails' =>
				array(
					'required' => false,
					'type' => 'PaymentHoldDetailType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerDiscounts' =>
				array(
					'required' => false,
					'type' => 'SellerDiscountsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundStatus' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CodiceFiscale' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IsMultiLegShipping' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MultiLegShippingDetails' =>
				array(
					'required' => false,
					'type' => 'MultiLegShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvoiceSentTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnpaidItem' =>
				array(
					'required' => false,
					'type' => 'UnpaidItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IntangibleItem' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MonetaryDetails' =>
				array(
					'required' => false,
					'type' => 'PaymentsInformationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupDetails' =>
				array(
					'required' => false,
					'type' => 'PickupDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupMethodSelected' =>
				array(
					'required' => false,
					'type' => 'PickupMethodSelectedType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingConvenienceCharge' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LogisticsPlanType' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerPackageEnclosures' =>
				array(
					'required' => false,
					'type' => 'BuyerPackageEnclosuresType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InventoryReservationID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExtendedOrderID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayPlusTransaction' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GiftSummary' =>
				array(
					'required' => false,
					'type' => 'GiftSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DigitalDeliverySelected' =>
				array(
					'required' => false,
					'type' => 'DigitalDeliverySelectedType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Gift' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return AmountType
	 **/
	function getAmountPaid()
	{
		return $this->AmountPaid;
	}

	/**
	 * @return void
	 **/
	function setAmountPaid($value)
	{
		$this->AmountPaid = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getAdjustmentAmount()
	{
		return $this->AdjustmentAmount;
	}

	/**
	 * @return void
	 **/
	function setAdjustmentAmount($value)
	{
		$this->AdjustmentAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedAdjustmentAmount()
	{
		return $this->ConvertedAdjustmentAmount;
	}

	/**
	 * @return void
	 **/
	function setConvertedAdjustmentAmount($value)
	{
		$this->ConvertedAdjustmentAmount = $value;
	}

	/**
	 * @return UserType
	 **/
	function getBuyer()
	{
		return $this->Buyer;
	}

	/**
	 * @return void
	 **/
	function setBuyer($value)
	{
		$this->Buyer = $value;
	}

	/**
	 * @return ShippingDetailsType
	 **/
	function getShippingDetails()
	{
		return $this->ShippingDetails;
	}

	/**
	 * @return void
	 **/
	function setShippingDetails($value)
	{
		$this->ShippingDetails = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedAmountPaid()
	{
		return $this->ConvertedAmountPaid;
	}

	/**
	 * @return void
	 **/
	function setConvertedAmountPaid($value)
	{
		$this->ConvertedAmountPaid = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedTransactionPrice()
	{
		return $this->ConvertedTransactionPrice;
	}

	/**
	 * @return void
	 **/
	function setConvertedTransactionPrice($value)
	{
		$this->ConvertedTransactionPrice = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCreatedDate()
	{
		return $this->CreatedDate;
	}

	/**
	 * @return void
	 **/
	function setCreatedDate($value)
	{
		$this->CreatedDate = $value;
	}

	/**
	 * @return DepositTypeCodeType
	 **/
	function getDepositType()
	{
		return $this->DepositType;
	}

	/**
	 * @return void
	 **/
	function setDepositType($value)
	{
		$this->DepositType = $value;
	}

	/**
	 * @return ItemType
	 **/
	function getItem()
	{
		return $this->Item;
	}

	/**
	 * @return void
	 **/
	function setItem($value)
	{
		$this->Item = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantityPurchased()
	{
		return $this->QuantityPurchased;
	}

	/**
	 * @return void
	 **/
	function setQuantityPurchased($value)
	{
		$this->QuantityPurchased = $value;
	}

	/**
	 * @return TransactionStatusType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

	/**
	 * @return string
	 **/
	function getTransactionID()
	{
		return $this->TransactionID;
	}

	/**
	 * @return void
	 **/
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTransactionPrice()
	{
		return $this->TransactionPrice;
	}

	/**
	 * @return void
	 **/
	function setTransactionPrice($value)
	{
		$this->TransactionPrice = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBestOfferSale()
	{
		return $this->BestOfferSale;
	}

	/**
	 * @return void
	 **/
	function setBestOfferSale($value)
	{
		$this->BestOfferSale = $value;
	}

	/**
	 * @return decimal
	 **/
	function getVATPercent()
	{
		return $this->VATPercent;
	}

	/**
	 * @return void
	 **/
	function setVATPercent($value)
	{
		$this->VATPercent = $value;
	}

	/**
	 * @return ExternalTransactionType
	 * @param integer $index 
	 **/
	function getExternalTransaction($index = null)
	{
		if ($index !== null)
		{
			return $this->ExternalTransaction[$index];
		}
		else
		{
			return $this->ExternalTransaction;
		}
	}

	/**
	 * @return void
	 * @param ExternalTransactionType $value
	 * @param integer $index 
	 **/
	function setExternalTransaction($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ExternalTransaction[$index] = $value;
		}
		else
		{
			$this->ExternalTransaction= $value;
		}
	}

	/**
	 * @return void
	 * @param ExternalTransactionType $value
	 **/
	function addExternalTransaction($value)
	{
		$this->ExternalTransaction[] = $value;
	}

	/**
	 * @return SellingManagerProductDetailsType
	 **/
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}

	/**
	 * @return ShippingServiceOptionsType
	 **/
	function getShippingServiceSelected()
	{
		return $this->ShippingServiceSelected;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceSelected($value)
	{
		$this->ShippingServiceSelected = $value;
	}

	/**
	 * @return string
	 **/
	function getBuyerMessage()
	{
		return $this->BuyerMessage;
	}

	/**
	 * @return void
	 **/
	function setBuyerMessage($value)
	{
		$this->BuyerMessage = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getDutchAuctionBid()
	{
		return $this->DutchAuctionBid;
	}

	/**
	 * @return void
	 **/
	function setDutchAuctionBid($value)
	{
		$this->DutchAuctionBid = $value;
	}

	/**
	 * @return PaidStatusCodeType
	 **/
	function getBuyerPaidStatus()
	{
		return $this->BuyerPaidStatus;
	}

	/**
	 * @return void
	 **/
	function setBuyerPaidStatus($value)
	{
		$this->BuyerPaidStatus = $value;
	}

	/**
	 * @return PaidStatusCodeType
	 **/
	function getSellerPaidStatus()
	{
		return $this->SellerPaidStatus;
	}

	/**
	 * @return void
	 **/
	function setSellerPaidStatus($value)
	{
		$this->SellerPaidStatus = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getPaidTime()
	{
		return $this->PaidTime;
	}

	/**
	 * @return void
	 **/
	function setPaidTime($value)
	{
		$this->PaidTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getShippedTime()
	{
		return $this->ShippedTime;
	}

	/**
	 * @return void
	 **/
	function setShippedTime($value)
	{
		$this->ShippedTime = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalPrice()
	{
		return $this->TotalPrice;
	}

	/**
	 * @return void
	 **/
	function setTotalPrice($value)
	{
		$this->TotalPrice = $value;
	}

	/**
	 * @return FeedbackInfoType
	 **/
	function getFeedbackLeft()
	{
		return $this->FeedbackLeft;
	}

	/**
	 * @return void
	 **/
	function setFeedbackLeft($value)
	{
		$this->FeedbackLeft = $value;
	}

	/**
	 * @return FeedbackInfoType
	 **/
	function getFeedbackReceived()
	{
		return $this->FeedbackReceived;
	}

	/**
	 * @return void
	 **/
	function setFeedbackReceived($value)
	{
		$this->FeedbackReceived = $value;
	}

	/**
	 * @return OrderType
	 **/
	function getContainingOrder()
	{
		return $this->ContainingOrder;
	}

	/**
	 * @return void
	 **/
	function setContainingOrder($value)
	{
		$this->ContainingOrder = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getFinalValueFee()
	{
		return $this->FinalValueFee;
	}

	/**
	 * @return void
	 **/
	function setFinalValueFee($value)
	{
		$this->FinalValueFee = $value;
	}

	/**
	 * @return ListingCheckoutRedirectPreferenceType
	 **/
	function getListingCheckoutRedirectPreference()
	{
		return $this->ListingCheckoutRedirectPreference;
	}

	/**
	 * @return void
	 **/
	function setListingCheckoutRedirectPreference($value)
	{
		$this->ListingCheckoutRedirectPreference = $value;
	}

	/**
	 * @return RefundArrayType
	 **/
	function getRefundArray()
	{
		return $this->RefundArray;
	}

	/**
	 * @return void
	 **/
	function setRefundArray($value)
	{
		$this->RefundArray = $value;
	}

	/**
	 * @return SiteCodeType
	 **/
	function getTransactionSiteID()
	{
		return $this->TransactionSiteID;
	}

	/**
	 * @return void
	 **/
	function setTransactionSiteID($value)
	{
		$this->TransactionSiteID = $value;
	}

	/**
	 * @return TransactionPlatformCodeType
	 **/
	function getPlatform()
	{
		return $this->Platform;
	}

	/**
	 * @return void
	 **/
	function setPlatform($value)
	{
		$this->Platform = $value;
	}

	/**
	 * @return string
	 **/
	function getCartID()
	{
		return $this->CartID;
	}

	/**
	 * @return void
	 **/
	function setCartID($value)
	{
		$this->CartID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSellerContactBuyerByEmail()
	{
		return $this->SellerContactBuyerByEmail;
	}

	/**
	 * @return void
	 **/
	function setSellerContactBuyerByEmail($value)
	{
		$this->SellerContactBuyerByEmail = $value;
	}

	/**
	 * @return string
	 **/
	function getPayPalEmailAddress()
	{
		return $this->PayPalEmailAddress;
	}

	/**
	 * @return void
	 **/
	function setPayPalEmailAddress($value)
	{
		$this->PayPalEmailAddress = $value;
	}

	/**
	 * @return string
	 **/
	function getPaisaPayID()
	{
		return $this->PaisaPayID;
	}

	/**
	 * @return void
	 **/
	function setPaisaPayID($value)
	{
		$this->PaisaPayID = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getBuyerGuaranteePrice()
	{
		return $this->BuyerGuaranteePrice;
	}

	/**
	 * @return void
	 **/
	function setBuyerGuaranteePrice($value)
	{
		$this->BuyerGuaranteePrice = $value;
	}

	/**
	 * @return VariationType
	 **/
	function getVariation()
	{
		return $this->Variation;
	}

	/**
	 * @return void
	 **/
	function setVariation($value)
	{
		$this->Variation = $value;
	}

	/**
	 * @return string
	 **/
	function getBuyerCheckoutMessage()
	{
		return $this->BuyerCheckoutMessage;
	}

	/**
	 * @return void
	 **/
	function setBuyerCheckoutMessage($value)
	{
		$this->BuyerCheckoutMessage = $value;
	}

	/**
	 * @return TaxesType
	 **/
	function getTaxes()
	{
		return $this->Taxes;
	}

	/**
	 * @return void
	 **/
	function setTaxes($value)
	{
		$this->Taxes = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBundlePurchase()
	{
		return $this->BundlePurchase;
	}

	/**
	 * @return void
	 **/
	function setBundlePurchase($value)
	{
		$this->BundlePurchase = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getActualShippingCost()
	{
		return $this->ActualShippingCost;
	}

	/**
	 * @return void
	 **/
	function setActualShippingCost($value)
	{
		$this->ActualShippingCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getActualHandlingCost()
	{
		return $this->ActualHandlingCost;
	}

	/**
	 * @return void
	 **/
	function setActualHandlingCost($value)
	{
		$this->ActualHandlingCost = $value;
	}

	/**
	 * @return string
	 **/
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}

	/**
	 * @return void
	 **/
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}

	/**
	 * @return PaymentHoldDetailType
	 **/
	function getPaymentHoldDetails()
	{
		return $this->PaymentHoldDetails;
	}

	/**
	 * @return void
	 **/
	function setPaymentHoldDetails($value)
	{
		$this->PaymentHoldDetails = $value;
	}

	/**
	 * @return SellerDiscountsType
	 **/
	function getSellerDiscounts()
	{
		return $this->SellerDiscounts;
	}

	/**
	 * @return void
	 **/
	function setSellerDiscounts($value)
	{
		$this->SellerDiscounts = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getRefundAmount()
	{
		return $this->RefundAmount;
	}

	/**
	 * @return void
	 **/
	function setRefundAmount($value)
	{
		$this->RefundAmount = $value;
	}

	/**
	 * @return string
	 **/
	function getRefundStatus()
	{
		return $this->RefundStatus;
	}

	/**
	 * @return void
	 **/
	function setRefundStatus($value)
	{
		$this->RefundStatus = $value;
	}

	/**
	 * @return string
	 **/
	function getCodiceFiscale()
	{
		return $this->CodiceFiscale;
	}

	/**
	 * @return void
	 **/
	function setCodiceFiscale($value)
	{
		$this->CodiceFiscale = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIsMultiLegShipping()
	{
		return $this->IsMultiLegShipping;
	}

	/**
	 * @return void
	 **/
	function setIsMultiLegShipping($value)
	{
		$this->IsMultiLegShipping = $value;
	}

	/**
	 * @return MultiLegShippingDetailsType
	 **/
	function getMultiLegShippingDetails()
	{
		return $this->MultiLegShippingDetails;
	}

	/**
	 * @return void
	 **/
	function setMultiLegShippingDetails($value)
	{
		$this->MultiLegShippingDetails = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getInvoiceSentTime()
	{
		return $this->InvoiceSentTime;
	}

	/**
	 * @return void
	 **/
	function setInvoiceSentTime($value)
	{
		$this->InvoiceSentTime = $value;
	}

	/**
	 * @return UnpaidItemType
	 **/
	function getUnpaidItem()
	{
		return $this->UnpaidItem;
	}

	/**
	 * @return void
	 **/
	function setUnpaidItem($value)
	{
		$this->UnpaidItem = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIntangibleItem()
	{
		return $this->IntangibleItem;
	}

	/**
	 * @return void
	 **/
	function setIntangibleItem($value)
	{
		$this->IntangibleItem = $value;
	}

	/**
	 * @return PaymentsInformationType
	 **/
	function getMonetaryDetails()
	{
		return $this->MonetaryDetails;
	}

	/**
	 * @return void
	 **/
	function setMonetaryDetails($value)
	{
		$this->MonetaryDetails = $value;
	}

	/**
	 * @return PickupDetailsType
	 **/
	function getPickupDetails()
	{
		return $this->PickupDetails;
	}

	/**
	 * @return void
	 **/
	function setPickupDetails($value)
	{
		$this->PickupDetails = $value;
	}

	/**
	 * @return PickupMethodSelectedType
	 **/
	function getPickupMethodSelected()
	{
		return $this->PickupMethodSelected;
	}

	/**
	 * @return void
	 **/
	function setPickupMethodSelected($value)
	{
		$this->PickupMethodSelected = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingConvenienceCharge()
	{
		return $this->ShippingConvenienceCharge;
	}

	/**
	 * @return void
	 **/
	function setShippingConvenienceCharge($value)
	{
		$this->ShippingConvenienceCharge = $value;
	}

	/**
	 * @return token
	 **/
	function getLogisticsPlanType()
	{
		return $this->LogisticsPlanType;
	}

	/**
	 * @return void
	 **/
	function setLogisticsPlanType($value)
	{
		$this->LogisticsPlanType = $value;
	}

	/**
	 * @return BuyerPackageEnclosuresType
	 **/
	function getBuyerPackageEnclosures()
	{
		return $this->BuyerPackageEnclosures;
	}

	/**
	 * @return void
	 **/
	function setBuyerPackageEnclosures($value)
	{
		$this->BuyerPackageEnclosures = $value;
	}

	/**
	 * @return string
	 **/
	function getInventoryReservationID()
	{
		return $this->InventoryReservationID;
	}

	/**
	 * @return void
	 **/
	function setInventoryReservationID($value)
	{
		$this->InventoryReservationID = $value;
	}

	/**
	 * @return string
	 **/
	function getExtendedOrderID()
	{
		return $this->ExtendedOrderID;
	}

	/**
	 * @return void
	 **/
	function setExtendedOrderID($value)
	{
		$this->ExtendedOrderID = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayPlusTransaction()
	{
		return $this->eBayPlusTransaction;
	}

	/**
	 * @return void
	 **/
	function seteBayPlusTransaction($value)
	{
		$this->eBayPlusTransaction = $value;
	}

	/**
	 * @return GiftSummaryType
	 **/
	function getGiftSummary()
	{
		return $this->GiftSummary;
	}

	/**
	 * @return void
	 **/
	function setGiftSummary($value)
	{
		$this->GiftSummary = $value;
	}

	/**
	 * @return DigitalDeliverySelectedType
	 **/
	function getDigitalDeliverySelected()
	{
		return $this->DigitalDeliverySelected;
	}

	/**
	 * @return void
	 **/
	function setDigitalDeliverySelected($value)
	{
		$this->DigitalDeliverySelected = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGift()
	{
		return $this->Gift;
	}

	/**
	 * @return void
	 **/
	function setGift($value)
	{
		$this->Gift = $value;
	}

}
?>
