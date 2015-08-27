<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'PaginationType.php';
require_once 'SKUArrayType.php';
require_once 'TransactionPlatformCodeType.php';
require_once 'InventoryTrackingMethodCodeType.php';

/**
  * Retrieves order line item (transaction) information for the user for which the
  * call is made, and not for any other user.&nbsp;<b>Also for
  * Half.com</b>. (To retrieve order line items for another seller's listings, use
  * GetItemTransactions.)
  * 
 **/

class GetSellerTransactionsRequestType extends AbstractRequestType
{
	/**
	* @var dateTime
	**/
	protected $ModTimeFrom;

	/**
	* @var dateTime
	**/
	protected $ModTimeTo;

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
	* @var SKUArrayType
	**/
	protected $SKUArray;

	/**
	* @var TransactionPlatformCodeType
	**/
	protected $Platform;

	/**
	* @var int
	**/
	protected $NumberOfDays;

	/**
	* @var InventoryTrackingMethodCodeType
	**/
	protected $InventoryTrackingMethod;

	/**
	* @var boolean
	**/
	protected $IncludeCodiceFiscale;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellerTransactionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
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
				'SKUArray' =>
				array(
					'required' => false,
					'type' => 'SKUArrayType',
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
				'NumberOfDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InventoryTrackingMethod' =>
				array(
					'required' => false,
					'type' => 'InventoryTrackingMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeCodiceFiscale' =>
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
	 * @return SKUArrayType
	 **/
	function getSKUArray()
	{
		return $this->SKUArray;
	}

	/**
	 * @return void
	 **/
	function setSKUArray($value)
	{
		$this->SKUArray = $value;
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
	 * @return InventoryTrackingMethodCodeType
	 **/
	function getInventoryTrackingMethod()
	{
		return $this->InventoryTrackingMethod;
	}

	/**
	 * @return void
	 **/
	function setInventoryTrackingMethod($value)
	{
		$this->InventoryTrackingMethod = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeCodiceFiscale()
	{
		return $this->IncludeCodiceFiscale;
	}

	/**
	 * @return void
	 **/
	function setIncludeCodiceFiscale($value)
	{
		$this->IncludeCodiceFiscale = $value;
	}

}
?>
