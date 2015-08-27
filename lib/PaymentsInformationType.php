<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PaymentInformationType.php';
require_once 'RefundInformationType.php';

/**
  * This type defines the <strong>MonetaryDetails</strong> container, which consists of detailed information about one or more exchanges of funds that occur between the buyer, seller, eBay, and eBay partners during the lifecycle of an order, as well as detailed information about a merchant's refund (or store credit) to a buyer who has returned an In-Store Pickup item. 
  * <br/><br/>
  * <span class="tablenote">
  * <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. 
  * </span>
  * 
 **/

class PaymentsInformationType extends EbatNs_ComplexType
{
	/**
	* @var PaymentInformationType
	**/
	protected $Payments;

	/**
	* @var RefundInformationType
	**/
	protected $Refunds;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaymentsInformationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Payments' =>
				array(
					'required' => false,
					'type' => 'PaymentInformationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Refunds' =>
				array(
					'required' => false,
					'type' => 'RefundInformationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return PaymentInformationType
	 **/
	function getPayments()
	{
		return $this->Payments;
	}

	/**
	 * @return void
	 **/
	function setPayments($value)
	{
		$this->Payments = $value;
	}

	/**
	 * @return RefundInformationType
	 **/
	function getRefunds()
	{
		return $this->Refunds;
	}

	/**
	 * @return void
	 **/
	function setRefunds($value)
	{
		$this->Refunds = $value;
	}

}
?>
