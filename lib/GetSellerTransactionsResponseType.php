<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';
require_once 'UserType.php';
require_once 'TransactionArrayType.php';

/**
  * Returns an array of order line item (transaction) data for the seller specified in the request.
  * The results can be used to create a report of data that is commonly
  * necessary for order processing.
  * <br/><br/>
  * Zero, one, or many <b>Transaction</b> objects can be returned in the <b>TransactionArray</b>.
  * The set of order line items returned is limited to those that were modified between
  * the times specified in the request's <b>ModTimeFrom</b> and <b>ModTimeTo</b> filters.
  * The order line items returned are sorted by <b>Transaction.Status.LastTimeModified</b>,
  * ascending order (that is, order line items that more recently were modified are returned last).
  * This call also returns information about the seller whose order line items were requested.
  * <br/><br/>
  * If pagination filters were specified in the request, returns meta-data describing
  * the effects of those filters on the current response and the estimated effects if
  * the same filters are used in subsequent calls.
  * 
 **/

class GetSellerTransactionsResponseType extends AbstractResponseType
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
	* @var UserType
	**/
	protected $Seller;

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
		parent::__construct('GetSellerTransactionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
				'Seller' =>
				array(
					'required' => false,
					'type' => 'UserType',
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
	 * @return UserType
	 **/
	function getSeller()
	{
		return $this->Seller;
	}

	/**
	 * @return void
	 **/
	function setSeller($value)
	{
		$this->Seller = $value;
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
