<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';
require_once 'ItemType.php';
require_once 'TransactionArrayType.php';

/**
  * Returns an array of order line item (transaction) data for the item specified in the request.
  * The results can be used to create a report of data that is commonly
  * necessary for order processing.
  * Zero, one, or many <b>Transaction</b> objects can be returned in the <b>TransactionArray</b>.
  * The set of order line items returned is limited to those that were modified between
  * the times specified in the request's <b>ModTimeFrom</b> and <b>ModTime</b> filters.
  * Also returns the <b>Item</b> object that spawned the order line items.
  * If pagination filters were specified in the request, returns meta-data describing
  * the effects of those filters on the current response and the estimated effects if
  * the same filters are used in subsequent calls.
  * <br><br>
  * Data from the <b>TransactionArray</b> may be used to trigger the following Platform
  * Notifications: EndOfAuction, AuctionCheckoutComplete, FixedPriceEndOfTransaction,
  * CheckoutBuyerRequestTotal, FixedPriceTransaction, Checkout,
  * FixedPriceTransactionForSeller, FixedPriceTransactionForBuyer, ItemMarkedAsShipped,
  * and ItemMarkedAsPaid. Each notification will be based on the state of the item
  * (a 'snapshot' of the item) at the time the order line item was created.
  * 
 **/

class GetItemTransactionsResponseType extends AbstractResponseType
{
	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;

	/**
	* @var boolean
	**/
	protected $HasMoreTransactions;

	/**
	* @var int
	**/
	protected $TransactionsPerPage;

	/**
	* @var int
	**/
	protected $PageNumber;

	/**
	* @var int
	**/
	protected $ReturnedTransactionCountActual;

	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var TransactionArrayType
	**/
	protected $TransactionArray;

	/**
	* @var boolean
	**/
	protected $PayPalPreferred;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemTransactionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
				'HasMoreTransactions' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionsPerPage' =>
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
				'ReturnedTransactionCountActual' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'TransactionArray' =>
				array(
					'required' => false,
					'type' => 'TransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalPreferred' =>
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
	function getHasMoreTransactions()
	{
		return $this->HasMoreTransactions;
	}

	/**
	 * @return void
	 **/
	function setHasMoreTransactions($value)
	{
		$this->HasMoreTransactions = $value;
	}

	/**
	 * @return int
	 **/
	function getTransactionsPerPage()
	{
		return $this->TransactionsPerPage;
	}

	/**
	 * @return void
	 **/
	function setTransactionsPerPage($value)
	{
		$this->TransactionsPerPage = $value;
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
	function getReturnedTransactionCountActual()
	{
		return $this->ReturnedTransactionCountActual;
	}

	/**
	 * @return void
	 **/
	function setReturnedTransactionCountActual($value)
	{
		$this->ReturnedTransactionCountActual = $value;
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
	 * @return boolean
	 **/
	function getPayPalPreferred()
	{
		return $this->PayPalPreferred;
	}

	/**
	 * @return void
	 **/
	function setPayPalPreferred($value)
	{
		$this->PayPalPreferred = $value;
	}

}
?>
