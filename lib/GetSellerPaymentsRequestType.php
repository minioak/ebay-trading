<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'RCSPaymentStatusCodeType.php';
require_once 'PaginationType.php';

/**
  * <b>Half.com only.</b>&nbsp;Retrieves a summary of pending or paid payments that Half.com created for the
  * seller identified by the authentication token in the request. 
  * This call retrieves only
  * payments that occurred within a particular pay period. 
  * <br/><br/>
  * Each payment is for one
  * order line item in one order. An order can contain order line items for
  * multiple items from multiple sellers, but this call only retrieves payments that
  * are relevant to one seller. The financial value of a payment is typically based on
  * an amount that a buyer paid to Half.com for an order line item, with adjustments for
  * shipping costs and Half.com's commission. 
  * <br/><br/>
  * For most sellers, each month contains
  * two pay periods: One from the 1st to the 15th of the month, and one from the 16th
  * to the last day of the month. Sellers can refer to their account information on
  * the Half.com site to determine their pay periods. (You cannot retrieve a seller's
  * pay periods by using eBay API.) 
  * <br/><br/>
  * When a buyer makes a purchase and an
  * order is created, Half.com creates a payment for the seller and marks it as
  * <b>Pending</b> in the seller's Half.com account. Within a certain number of days after
  * the pay period ends, Half.com settles payments for that period and marks each
  * completed payment as Paid. 
  * <br/><br/>
  * See the Half.com Web site online help for more
  * information about how payments are managed.
  * 
 **/

class GetSellerPaymentsRequestType extends AbstractRequestType
{
	/**
	* @var RCSPaymentStatusCodeType
	**/
	protected $PaymentStatus;

	/**
	* @var dateTime
	**/
	protected $PaymentTimeFrom;

	/**
	* @var dateTime
	**/
	protected $PaymentTimeTo;

	/**
	* @var PaginationType
	**/
	protected $Pagination;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellerPaymentsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PaymentStatus' =>
				array(
					'required' => false,
					'type' => 'RCSPaymentStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
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
	 * @return RCSPaymentStatusCodeType
	 **/
	function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}

	/**
	 * @return void
	 **/
	function setPaymentStatus($value)
	{
		$this->PaymentStatus = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getPaymentTimeFrom()
	{
		return $this->PaymentTimeFrom;
	}

	/**
	 * @return void
	 **/
	function setPaymentTimeFrom($value)
	{
		$this->PaymentTimeFrom = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getPaymentTimeTo()
	{
		return $this->PaymentTimeTo;
	}

	/**
	 * @return void
	 **/
	function setPaymentTimeTo($value)
	{
		$this->PaymentTimeTo = $value;
	}

	/**
	 * @return PaginationType
	 **/
	function getPagination()
	{
		return $this->Pagination;
	}

	/**
	 * @return void
	 **/
	function setPagination($value)
	{
		$this->Pagination = $value;
	}

}
?>
