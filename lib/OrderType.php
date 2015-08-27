<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'OrderIDType.php';
require_once 'OrderStatusCodeType.php';
require_once 'AmountType.php';
require_once 'CheckoutStatusType.php';
require_once 'ShippingDetailsType.php';
require_once 'TradingRoleCodeType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'AddressType.php';
require_once 'ShippingServiceOptionsType.php';
require_once 'ExternalTransactionType.php';
require_once 'TransactionArrayType.php';
require_once 'UserIDType.php';
require_once 'PaymentHoldStatusCodeType.php';
require_once 'PaymentHoldDetailType.php';
require_once 'RefundArrayType.php';
require_once 'MultiLegShippingDetailsType.php';
require_once 'PaymentsInformationType.php';
require_once 'PickupDetailsType.php';
require_once 'PickupMethodSelectedType.php';
require_once 'CancelStatusCodeType.php';
require_once 'CancelDetailType.php';
require_once 'TaxIdentifierType.php';
require_once 'BuyerPackageEnclosuresType.php';

/**
  * There are single line item and multiple line item orders. A single
  * payment is made for both order types.
  * <br>
  * <br>
  * We strongly recommend that you avoid mixing digital and non-digital listings in
  * the same <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a>
  * order.
  * 
 **/

class OrderType extends EbatNs_ComplexType
{
	/**
	* @var OrderIDType
	**/
	protected $OrderID;

	/**
	* @var OrderStatusCodeType
	**/
	protected $OrderStatus;

	/**
	* @var AmountType
	**/
	protected $AdjustmentAmount;

	/**
	* @var AmountType
	**/
	protected $AmountPaid;

	/**
	* @var AmountType
	**/
	protected $AmountSaved;

	/**
	* @var CheckoutStatusType
	**/
	protected $CheckoutStatus;

	/**
	* @var ShippingDetailsType
	**/
	protected $ShippingDetails;

	/**
	* @var TradingRoleCodeType
	**/
	protected $CreatingUserRole;

	/**
	* @var dateTime
	**/
	protected $CreatedTime;

	/**
	* @var BuyerPaymentMethodCodeType
	**/
	protected $PaymentMethods;

	/**
	* @var string
	**/
	protected $SellerEmail;

	/**
	* @var AddressType
	**/
	protected $ShippingAddress;

	/**
	* @var ShippingServiceOptionsType
	**/
	protected $ShippingServiceSelected;

	/**
	* @var AmountType
	**/
	protected $Subtotal;

	/**
	* @var AmountType
	**/
	protected $Total;

	/**
	* @var ExternalTransactionType
	**/
	protected $ExternalTransaction;

	/**
	* @var TransactionArrayType
	**/
	protected $TransactionArray;

	/**
	* @var UserIDType
	**/
	protected $BuyerUserID;

	/**
	* @var dateTime
	**/
	protected $PaidTime;

	/**
	* @var dateTime
	**/
	protected $ShippedTime;

	/**
	* @var boolean
	**/
	protected $IntegratedMerchantCreditCardEnabled;

	/**
	* @var boolean
	**/
	protected $BundlePurchase;

	/**
	* @var string
	**/
	protected $BuyerCheckoutMessage;

	/**
	* @var string
	**/
	protected $EIASToken;

	/**
	* @var PaymentHoldStatusCodeType
	**/
	protected $PaymentHoldStatus;

	/**
	* @var PaymentHoldDetailType
	**/
	protected $PaymentHoldDetails;

	/**
	* @var AmountType
	**/
	protected $RefundAmount;

	/**
	* @var string
	**/
	protected $RefundStatus;

	/**
	* @var RefundArrayType
	**/
	protected $RefundArray;

	/**
	* @var boolean
	**/
	protected $IsMultiLegShipping;

	/**
	* @var MultiLegShippingDetailsType
	**/
	protected $MultiLegShippingDetails;

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
	* @var UserIDType
	**/
	protected $SellerUserID;

	/**
	* @var string
	**/
	protected $SellerEIASToken;

	/**
	* @var token
	**/
	protected $CancelReason;

	/**
	* @var CancelStatusCodeType
	**/
	protected $CancelStatus;

	/**
	* @var string
	**/
	protected $CancelReasonDetails;

	/**
	* @var AmountType
	**/
	protected $ShippingConvenienceCharge;

	/**
	* @var CancelDetailType
	**/
	protected $CancelDetail;

	/**
	* @var token
	**/
	protected $LogisticsPlanType;

	/**
	* @var TaxIdentifierType
	**/
	protected $BuyerTaxIdentifier;

	/**
	* @var BuyerPackageEnclosuresType
	**/
	protected $BuyerPackageEnclosures;

	/**
	* @var string
	**/
	protected $ExtendedOrderID;

	/**
	* @var boolean
	**/
	protected $ContainseBayPlusTransaction;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('OrderType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OrderID' =>
				array(
					'required' => false,
					'type' => 'OrderIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderStatus' =>
				array(
					'required' => false,
					'type' => 'OrderStatusCodeType',
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
				'AmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AmountSaved' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CheckoutStatus' =>
				array(
					'required' => false,
					'type' => 'CheckoutStatusType',
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
				'CreatingUserRole' =>
				array(
					'required' => false,
					'type' => 'TradingRoleCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreatedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentMethods' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'SellerEmail' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
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
				'Subtotal' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Total' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'TransactionArray' =>
				array(
					'required' => false,
					'type' => 'TransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerUserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
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
				'IntegratedMerchantCreditCardEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'BuyerCheckoutMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EIASToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentHoldStatus' =>
				array(
					'required' => false,
					'type' => 'PaymentHoldStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'RefundArray' =>
				array(
					'required' => false,
					'type' => 'RefundArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'SellerUserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerEIASToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CancelReason' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CancelStatus' =>
				array(
					'required' => false,
					'type' => 'CancelStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CancelReasonDetails' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'CancelDetail' =>
				array(
					'required' => false,
					'type' => 'CancelDetailType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'LogisticsPlanType' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerTaxIdentifier' =>
				array(
					'required' => false,
					'type' => 'TaxIdentifierType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'BuyerPackageEnclosures' =>
				array(
					'required' => false,
					'type' => 'BuyerPackageEnclosuresType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'ContainseBayPlusTransaction' =>
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
	 * @return OrderIDType
	 **/
	function getOrderID()
	{
		return $this->OrderID;
	}

	/**
	 * @return void
	 **/
	function setOrderID($value)
	{
		$this->OrderID = $value;
	}

	/**
	 * @return OrderStatusCodeType
	 **/
	function getOrderStatus()
	{
		return $this->OrderStatus;
	}

	/**
	 * @return void
	 **/
	function setOrderStatus($value)
	{
		$this->OrderStatus = $value;
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
	function getAmountSaved()
	{
		return $this->AmountSaved;
	}

	/**
	 * @return void
	 **/
	function setAmountSaved($value)
	{
		$this->AmountSaved = $value;
	}

	/**
	 * @return CheckoutStatusType
	 **/
	function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}

	/**
	 * @return void
	 **/
	function setCheckoutStatus($value)
	{
		$this->CheckoutStatus = $value;
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
	 * @return TradingRoleCodeType
	 **/
	function getCreatingUserRole()
	{
		return $this->CreatingUserRole;
	}

	/**
	 * @return void
	 **/
	function setCreatingUserRole($value)
	{
		$this->CreatingUserRole = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCreatedTime()
	{
		return $this->CreatedTime;
	}

	/**
	 * @return void
	 **/
	function setCreatedTime($value)
	{
		$this->CreatedTime = $value;
	}

	/**
	 * @return BuyerPaymentMethodCodeType
	 * @param integer $index 
	 **/
	function getPaymentMethods($index = null)
	{
		if ($index !== null)
		{
			return $this->PaymentMethods[$index];
		}
		else
		{
			return $this->PaymentMethods;
		}
	}

	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value
	 * @param integer $index 
	 **/
	function setPaymentMethods($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PaymentMethods[$index] = $value;
		}
		else
		{
			$this->PaymentMethods= $value;
		}
	}

	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value
	 **/
	function addPaymentMethods($value)
	{
		$this->PaymentMethods[] = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerEmail()
	{
		return $this->SellerEmail;
	}

	/**
	 * @return void
	 **/
	function setSellerEmail($value)
	{
		$this->SellerEmail = $value;
	}

	/**
	 * @return AddressType
	 **/
	function getShippingAddress()
	{
		return $this->ShippingAddress;
	}

	/**
	 * @return void
	 **/
	function setShippingAddress($value)
	{
		$this->ShippingAddress = $value;
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
	 * @return AmountType
	 **/
	function getSubtotal()
	{
		return $this->Subtotal;
	}

	/**
	 * @return void
	 **/
	function setSubtotal($value)
	{
		$this->Subtotal = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotal()
	{
		return $this->Total;
	}

	/**
	 * @return void
	 **/
	function setTotal($value)
	{
		$this->Total = $value;
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
	 * @return TransactionArrayType
	 **/
	function getTransactionArray()
	{
		return $this->TransactionArray;
	}

	/**
	 * @return void
	 **/
	function setTransactionArray($value)
	{
		$this->TransactionArray = $value;
	}

	/**
	 * @return UserIDType
	 **/
	function getBuyerUserID()
	{
		return $this->BuyerUserID;
	}

	/**
	 * @return void
	 **/
	function setBuyerUserID($value)
	{
		$this->BuyerUserID = $value;
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
	 * @return boolean
	 **/
	function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}

	/**
	 * @return void
	 **/
	function setIntegratedMerchantCreditCardEnabled($value)
	{
		$this->IntegratedMerchantCreditCardEnabled = $value;
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
	 * @return string
	 **/
	function getEIASToken()
	{
		return $this->EIASToken;
	}

	/**
	 * @return void
	 **/
	function setEIASToken($value)
	{
		$this->EIASToken = $value;
	}

	/**
	 * @return PaymentHoldStatusCodeType
	 **/
	function getPaymentHoldStatus()
	{
		return $this->PaymentHoldStatus;
	}

	/**
	 * @return void
	 **/
	function setPaymentHoldStatus($value)
	{
		$this->PaymentHoldStatus = $value;
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
	 * @return UserIDType
	 **/
	function getSellerUserID()
	{
		return $this->SellerUserID;
	}

	/**
	 * @return void
	 **/
	function setSellerUserID($value)
	{
		$this->SellerUserID = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerEIASToken()
	{
		return $this->SellerEIASToken;
	}

	/**
	 * @return void
	 **/
	function setSellerEIASToken($value)
	{
		$this->SellerEIASToken = $value;
	}

	/**
	 * @return token
	 **/
	function getCancelReason()
	{
		return $this->CancelReason;
	}

	/**
	 * @return void
	 **/
	function setCancelReason($value)
	{
		$this->CancelReason = $value;
	}

	/**
	 * @return CancelStatusCodeType
	 **/
	function getCancelStatus()
	{
		return $this->CancelStatus;
	}

	/**
	 * @return void
	 **/
	function setCancelStatus($value)
	{
		$this->CancelStatus = $value;
	}

	/**
	 * @return string
	 **/
	function getCancelReasonDetails()
	{
		return $this->CancelReasonDetails;
	}

	/**
	 * @return void
	 **/
	function setCancelReasonDetails($value)
	{
		$this->CancelReasonDetails = $value;
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
	 * @return CancelDetailType
	 * @param integer $index 
	 **/
	function getCancelDetail($index = null)
	{
		if ($index !== null)
		{
			return $this->CancelDetail[$index];
		}
		else
		{
			return $this->CancelDetail;
		}
	}

	/**
	 * @return void
	 * @param CancelDetailType $value
	 * @param integer $index 
	 **/
	function setCancelDetail($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CancelDetail[$index] = $value;
		}
		else
		{
			$this->CancelDetail= $value;
		}
	}

	/**
	 * @return void
	 * @param CancelDetailType $value
	 **/
	function addCancelDetail($value)
	{
		$this->CancelDetail[] = $value;
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
	 * @return TaxIdentifierType
	 * @param integer $index 
	 **/
	function getBuyerTaxIdentifier($index = null)
	{
		if ($index !== null)
		{
			return $this->BuyerTaxIdentifier[$index];
		}
		else
		{
			return $this->BuyerTaxIdentifier;
		}
	}

	/**
	 * @return void
	 * @param TaxIdentifierType $value
	 * @param integer $index 
	 **/
	function setBuyerTaxIdentifier($value, $index = null)
	{
		if ($index !== null)
		{
			$this->BuyerTaxIdentifier[$index] = $value;
		}
		else
		{
			$this->BuyerTaxIdentifier= $value;
		}
	}

	/**
	 * @return void
	 * @param TaxIdentifierType $value
	 **/
	function addBuyerTaxIdentifier($value)
	{
		$this->BuyerTaxIdentifier[] = $value;
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
	function getContainseBayPlusTransaction()
	{
		return $this->ContainseBayPlusTransaction;
	}

	/**
	 * @return void
	 **/
	function setContainseBayPlusTransaction($value)
	{
		$this->ContainseBayPlusTransaction = $value;
	}

}
?>
