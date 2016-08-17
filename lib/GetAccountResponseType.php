<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'AccountSummaryType.php';
require_once 'CurrencyCodeType.php';
require_once 'AccountEntriesType.php';
require_once 'PaginationResultType.php';

/**
  * Returns information about an eBay seller's own account.
  * 
 **/

class GetAccountResponseType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $AccountID;

	/**
	* @var AccountSummaryType
	**/
	protected $AccountSummary;

	/**
	* @var CurrencyCodeType
	**/
	protected $Currency;

	/**
	* @var AccountEntriesType
	**/
	protected $AccountEntries;

	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;

	/**
	* @var boolean
	**/
	protected $HasMoreEntries;

	/**
	* @var int
	**/
	protected $EntriesPerPage;

	/**
	* @var int
	**/
	protected $PageNumber;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetAccountResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AccountID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AccountSummary' =>
				array(
					'required' => false,
					'type' => 'AccountSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Currency' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AccountEntries' =>
				array(
					'required' => false,
					'type' => 'AccountEntriesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMoreEntries' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EntriesPerPage' =>
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return string
	 **/
	function getAccountID()
	{
		return $this->AccountID;
	}

	/**
	 * @return void
	 **/
	function setAccountID($value)
	{
		$this->AccountID = $value;
	}

	/**
	 * @return AccountSummaryType
	 **/
	function getAccountSummary()
	{
		return $this->AccountSummary;
	}

	/**
	 * @return void
	 **/
	function setAccountSummary($value)
	{
		$this->AccountSummary = $value;
	}

	/**
	 * @return CurrencyCodeType
	 **/
	function getCurrency()
	{
		return $this->Currency;
	}

	/**
	 * @return void
	 **/
	function setCurrency($value)
	{
		$this->Currency = $value;
	}

	/**
	 * @return AccountEntriesType
	 **/
	function getAccountEntries()
	{
		return $this->AccountEntries;
	}

	/**
	 * @return void
	 **/
	function setAccountEntries($value)
	{
		$this->AccountEntries = $value;
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
	function getHasMoreEntries()
	{
		return $this->HasMoreEntries;
	}

	/**
	 * @return void
	 **/
	function setHasMoreEntries($value)
	{
		$this->HasMoreEntries = $value;
	}

	/**
	 * @return int
	 **/
	function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
	}

	/**
	 * @return void
	 **/
	function setEntriesPerPage($value)
	{
		$this->EntriesPerPage = $value;
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

}
?>
