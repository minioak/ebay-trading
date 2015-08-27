<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'PaginationType.php';
require_once 'TransactionPlatformCodeType.php';

/**
  * Retrieves order line item information for a specified <b>ItemID</b>. &
  * nbsp;<b>Also for Half.com</b>. The call returns zero, one, or
  * multiple order line items, depending on the number of items sold from the listing.
  * <br><br>
  * You can retrieve order line item data for a specific time range or
  * number of days. If you don't specify a range or number of days, order line item
  * data will be returned for the past 30 days.
  * 
 **/

class GetItemTransactionsRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var dateTime
	**/
	protected $ModTimeFrom;

	/**
	* @var dateTime
	**/
	protected $ModTimeTo;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var PaginationType
	**/
	protected $Pagination;

	/**
	* @var boolean
	**/
	protected $IncludeFinalValueFee;

	/**
	* @var boolean
	**/
	protected $IncludeContainingOrder;

	/**
	* @var TransactionPlatformCodeType
	**/
	protected $Platform;

	/**
	* @var int
	**/
	protected $NumberOfDays;

	/**
	* @var boolean
	**/
	protected $IncludeVariations;

	/**
	* @var string
	**/
	protected $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemTransactionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeFinalValueFee' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeContainingOrder' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'NumberOfDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeVariations' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}

	/**
	 * @return void
	 **/
	function setModTimeFrom($value)
	{
		$this->ModTimeFrom = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getModTimeTo()
	{
		return $this->ModTimeTo;
	}

	/**
	 * @return void
	 **/
	function setModTimeTo($value)
	{
		$this->ModTimeTo = $value;
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

	/**
	 * @return boolean
	 **/
	function getIncludeFinalValueFee()
	{
		return $this->IncludeFinalValueFee;
	}

	/**
	 * @return void
	 **/
	function setIncludeFinalValueFee($value)
	{
		$this->IncludeFinalValueFee = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeContainingOrder()
	{
		return $this->IncludeContainingOrder;
	}

	/**
	 * @return void
	 **/
	function setIncludeContainingOrder($value)
	{
		$this->IncludeContainingOrder = $value;
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
	 * @return int
	 **/
	function getNumberOfDays()
	{
		return $this->NumberOfDays;
	}

	/**
	 * @return void
	 **/
	function setNumberOfDays($value)
	{
		$this->NumberOfDays = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeVariations()
	{
		return $this->IncludeVariations;
	}

	/**
	 * @return void
	 **/
	function setIncludeVariations($value)
	{
		$this->IncludeVariations = $value;
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

}
?>
