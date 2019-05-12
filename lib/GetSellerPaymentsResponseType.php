<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';
require_once 'SellerPaymentType.php';

/**
  * Returns a summary of pending or paid payments that Half.com created for the seller
  * identified by the authentication token in the request. Only returns payments that
  * occurred within a particular pay period. 
  * <br/><br/>
  * Each payment is for one transaction for
  * one item in one order. An order can contain transactions for multiple items from
  * multiple sellers, but this call only retrieves payments that are relevant to one
  * seller. 
  * <br/><br/>
  * Payments are only issued for items and transactions that the seller has
  * confirmed (see the Half.com online help for details). The financial value of a
  * payment is typically based on an amount that a buyer paid to Half.com for a
  * transaction, plus the shipping cost the buyer paid to Half.com for the item, minus
  * Half.com's commission. 
  * <br/><br/>
  * For most sellers, each month contains two pay periods: One
  * from the 1st to the 15th of the month, and one from the 16th to the last day of
  * the month. Payments are submitted to the seller's financial institution a certain
  * number of days after the current pay period ends (see the Half.com online help for
  * details).
  * 
 **/

class GetSellerPaymentsResponseType extends AbstractResponseType
{
	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;

	/**
	* @var boolean
	**/
	protected $HasMorePayments;

	/**
	* @var SellerPaymentType
	**/
	protected $SellerPayment;

	/**
	* @var int
	**/
	protected $PaymentsPerPage;

	/**
	* @var int
	**/
	protected $PageNumber;

	/**
	* @var int
	**/
	protected $ReturnedPaymentCountActual;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellerPaymentsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMorePayments' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPayment' =>
				array(
					'required' => false,
					'type' => 'SellerPaymentType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'PaymentsPerPage' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PageNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnedPaymentCountActual' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return PaginationResultType
	 **/
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}

	/**
	 * @return void
	 **/
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHasMorePayments()
	{
		return $this->HasMorePayments;
	}

	/**
	 * @return void
	 **/
	function setHasMorePayments($value)
	{
		$this->HasMorePayments = $value;
	}

	/**
	 * @return SellerPaymentType
	 * @param integer $index 
	 **/
	function getSellerPayment($index = null)
	{
		if ($index !== null)
		{
			return $this->SellerPayment[$index];
		}
		else
		{
			return $this->SellerPayment;
		}
	}

	/**
	 * @return void
	 * @param SellerPaymentType $value
	 * @param integer $index 
	 **/
	function setSellerPayment($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SellerPayment[$index] = $value;
		}
		else
		{
			$this->SellerPayment= $value;
		}
	}

	/**
	 * @return void
	 * @param SellerPaymentType $value
	 **/
	function addSellerPayment($value)
	{
		$this->SellerPayment[] = $value;
	}

	/**
	 * @return int
	 **/
	function getPaymentsPerPage()
	{
		return $this->PaymentsPerPage;
	}

	/**
	 * @return void
	 **/
	function setPaymentsPerPage($value)
	{
		$this->PaymentsPerPage = $value;
	}

	/**
	 * @return int
	 **/
	function getPageNumber()
	{
		return $this->PageNumber;
	}

	/**
	 * @return void
	 **/
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}

	/**
	 * @return int
	 **/
	function getReturnedPaymentCountActual()
	{
		return $this->ReturnedPaymentCountActual;
	}

	/**
	 * @return void
	 **/
	function setReturnedPaymentCountActual($value)
	{
		$this->ReturnedPaymentCountActual = $value;
	}

}
?>
