<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerSoldTransactionType.php';
require_once 'AddressType.php';
require_once 'ShippingDetailsType.php';
require_once 'AmountType.php';
require_once 'VATRateType.php';
require_once 'SellingManagerOrderStatusType.php';
require_once 'UnpaidItemStatusTypeCodeType.php';

/**
  * Contains information about a sale record.
  * 
 **/

class SellingManagerSoldOrderType extends EbatNs_ComplexType
{
	/**
	* @var SellingManagerSoldTransactionType
	**/
	protected $SellingManagerSoldTransaction;

	/**
	* @var AddressType
	**/
	protected $ShippingAddress;

	/**
	* @var ShippingDetailsType
	**/
	protected $ShippingDetails;

	/**
	* @var AmountType
	**/
	protected $CashOnDeliveryCost;

	/**
	* @var AmountType
	**/
	protected $TotalAmount;

	/**
	* @var int
	**/
	protected $TotalQuantity;

	/**
	* @var AmountType
	**/
	protected $ItemCost;

	/**
	* @var VATRateType
	**/
	protected $VATRate;

	/**
	* @var AmountType
	**/
	protected $NetInsuranceFee;

	/**
	* @var AmountType
	**/
	protected $VATInsuranceFee;

	/**
	* @var AmountType
	**/
	protected $VATShippingFee;

	/**
	* @var AmountType
	**/
	protected $NetShippingFee;

	/**
	* @var AmountType
	**/
	protected $NetTotalAmount;

	/**
	* @var AmountType
	**/
	protected $VATTotalAmount;

	/**
	* @var AmountType
	**/
	protected $ActualShippingCost;

	/**
	* @var AmountType
	**/
	protected $AdjustmentAmount;

	/**
	* @var string
	**/
	protected $NotesToBuyer;

	/**
	* @var string
	**/
	protected $NotesFromBuyer;

	/**
	* @var string
	**/
	protected $NotesToSeller;

	/**
	* @var SellingManagerOrderStatusType
	**/
	protected $OrderStatus;

	/**
	* @var UnpaidItemStatusTypeCodeType
	**/
	protected $UnpaidItemStatus;

	/**
	* @var AmountType
	**/
	protected $SalePrice;

	/**
	* @var int
	**/
	protected $EmailsSent;

	/**
	* @var int
	**/
	protected $DaysSinceSale;

	/**
	* @var string
	**/
	protected $BuyerID;

	/**
	* @var string
	**/
	protected $BuyerEmail;

	/**
	* @var long
	**/
	protected $SaleRecordID;

	/**
	* @var dateTime
	**/
	protected $CreationTime;

	/**
	* @var AmountType
	**/
	protected $RefundAmount;

	/**
	* @var string
	**/
	protected $RefundStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerSoldOrderType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellingManagerSoldTransaction' =>
				array(
					'required' => false,
					'type' => 'SellingManagerSoldTransactionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ShippingAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
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
				'CashOnDeliveryCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalQuantity' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATRate' =>
				array(
					'required' => false,
					'type' => 'VATRateType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'NetInsuranceFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATInsuranceFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATShippingFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NetShippingFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NetTotalAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATTotalAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'AdjustmentAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NotesToBuyer' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NotesFromBuyer' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NotesToSeller' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderStatus' =>
				array(
					'required' => false,
					'type' => 'SellingManagerOrderStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnpaidItemStatus' =>
				array(
					'required' => false,
					'type' => 'UnpaidItemStatusTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalePrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EmailsSent' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DaysSinceSale' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerEmail' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SaleRecordID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return SellingManagerSoldTransactionType
	 * @param integer $index 
	 **/
	function getSellingManagerSoldTransaction($index = null)
	{
		if ($index !== null)
		{
			return $this->SellingManagerSoldTransaction[$index];
		}
		else
		{
			return $this->SellingManagerSoldTransaction;
		}
	}

	/**
	 * @return void
	 * @param SellingManagerSoldTransactionType $value
	 * @param integer $index 
	 **/
	function setSellingManagerSoldTransaction($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SellingManagerSoldTransaction[$index] = $value;
		}
		else
		{
			$this->SellingManagerSoldTransaction= $value;
		}
	}

	/**
	 * @return void
	 * @param SellingManagerSoldTransactionType $value
	 **/
	function addSellingManagerSoldTransaction($value)
	{
		$this->SellingManagerSoldTransaction[] = $value;
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
	function getCashOnDeliveryCost()
	{
		return $this->CashOnDeliveryCost;
	}

	/**
	 * @return void
	 **/
	function setCashOnDeliveryCost($value)
	{
		$this->CashOnDeliveryCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalAmount()
	{
		return $this->TotalAmount;
	}

	/**
	 * @return void
	 **/
	function setTotalAmount($value)
	{
		$this->TotalAmount = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalQuantity()
	{
		return $this->TotalQuantity;
	}

	/**
	 * @return void
	 **/
	function setTotalQuantity($value)
	{
		$this->TotalQuantity = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getItemCost()
	{
		return $this->ItemCost;
	}

	/**
	 * @return void
	 **/
	function setItemCost($value)
	{
		$this->ItemCost = $value;
	}

	/**
	 * @return VATRateType
	 * @param integer $index 
	 **/
	function getVATRate($index = null)
	{
		if ($index !== null)
		{
			return $this->VATRate[$index];
		}
		else
		{
			return $this->VATRate;
		}
	}

	/**
	 * @return void
	 * @param VATRateType $value
	 * @param integer $index 
	 **/
	function setVATRate($value, $index = null)
	{
		if ($index !== null)
		{
			$this->VATRate[$index] = $value;
		}
		else
		{
			$this->VATRate= $value;
		}
	}

	/**
	 * @return void
	 * @param VATRateType $value
	 **/
	function addVATRate($value)
	{
		$this->VATRate[] = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getNetInsuranceFee()
	{
		return $this->NetInsuranceFee;
	}

	/**
	 * @return void
	 **/
	function setNetInsuranceFee($value)
	{
		$this->NetInsuranceFee = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getVATInsuranceFee()
	{
		return $this->VATInsuranceFee;
	}

	/**
	 * @return void
	 **/
	function setVATInsuranceFee($value)
	{
		$this->VATInsuranceFee = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getVATShippingFee()
	{
		return $this->VATShippingFee;
	}

	/**
	 * @return void
	 **/
	function setVATShippingFee($value)
	{
		$this->VATShippingFee = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getNetShippingFee()
	{
		return $this->NetShippingFee;
	}

	/**
	 * @return void
	 **/
	function setNetShippingFee($value)
	{
		$this->NetShippingFee = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getNetTotalAmount()
	{
		return $this->NetTotalAmount;
	}

	/**
	 * @return void
	 **/
	function setNetTotalAmount($value)
	{
		$this->NetTotalAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getVATTotalAmount()
	{
		return $this->VATTotalAmount;
	}

	/**
	 * @return void
	 **/
	function setVATTotalAmount($value)
	{
		$this->VATTotalAmount = $value;
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
	 * @return string
	 **/
	function getNotesToBuyer()
	{
		return $this->NotesToBuyer;
	}

	/**
	 * @return void
	 **/
	function setNotesToBuyer($value)
	{
		$this->NotesToBuyer = $value;
	}

	/**
	 * @return string
	 **/
	function getNotesFromBuyer()
	{
		return $this->NotesFromBuyer;
	}

	/**
	 * @return void
	 **/
	function setNotesFromBuyer($value)
	{
		$this->NotesFromBuyer = $value;
	}

	/**
	 * @return string
	 **/
	function getNotesToSeller()
	{
		return $this->NotesToSeller;
	}

	/**
	 * @return void
	 **/
	function setNotesToSeller($value)
	{
		$this->NotesToSeller = $value;
	}

	/**
	 * @return SellingManagerOrderStatusType
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
	 * @return UnpaidItemStatusTypeCodeType
	 **/
	function getUnpaidItemStatus()
	{
		return $this->UnpaidItemStatus;
	}

	/**
	 * @return void
	 **/
	function setUnpaidItemStatus($value)
	{
		$this->UnpaidItemStatus = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getSalePrice()
	{
		return $this->SalePrice;
	}

	/**
	 * @return void
	 **/
	function setSalePrice($value)
	{
		$this->SalePrice = $value;
	}

	/**
	 * @return int
	 **/
	function getEmailsSent()
	{
		return $this->EmailsSent;
	}

	/**
	 * @return void
	 **/
	function setEmailsSent($value)
	{
		$this->EmailsSent = $value;
	}

	/**
	 * @return int
	 **/
	function getDaysSinceSale()
	{
		return $this->DaysSinceSale;
	}

	/**
	 * @return void
	 **/
	function setDaysSinceSale($value)
	{
		$this->DaysSinceSale = $value;
	}

	/**
	 * @return string
	 **/
	function getBuyerID()
	{
		return $this->BuyerID;
	}

	/**
	 * @return void
	 **/
	function setBuyerID($value)
	{
		$this->BuyerID = $value;
	}

	/**
	 * @return string
	 **/
	function getBuyerEmail()
	{
		return $this->BuyerEmail;
	}

	/**
	 * @return void
	 **/
	function setBuyerEmail($value)
	{
		$this->BuyerEmail = $value;
	}

	/**
	 * @return long
	 **/
	function getSaleRecordID()
	{
		return $this->SaleRecordID;
	}

	/**
	 * @return void
	 **/
	function setSaleRecordID($value)
	{
		$this->SaleRecordID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCreationTime()
	{
		return $this->CreationTime;
	}

	/**
	 * @return void
	 **/
	function setCreationTime($value)
	{
		$this->CreationTime = $value;
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

}
?>
