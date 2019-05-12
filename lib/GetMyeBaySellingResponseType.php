<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SellingSummaryType.php';
require_once 'PaginatedItemArrayType.php';
require_once 'PaginatedOrderTransactionArrayType.php';
require_once 'MyeBaySellingSummaryType.php';

/**
  * Returns summary and detail information about items the user is selling,
  * items scheduled to sell, currently listed, sold, and closed but not sold.
  * 
 **/

class GetMyeBaySellingResponseType extends AbstractResponseType
{
	/**
	* @var SellingSummaryType
	**/
	protected $SellingSummary;

	/**
	* @var PaginatedItemArrayType
	**/
	protected $ScheduledList;

	/**
	* @var PaginatedItemArrayType
	**/
	protected $ActiveList;

	/**
	* @var PaginatedOrderTransactionArrayType
	**/
	protected $SoldList;

	/**
	* @var PaginatedItemArrayType
	**/
	protected $UnsoldList;

	/**
	* @var MyeBaySellingSummaryType
	**/
	protected $Summary;

	/**
	* @var PaginatedItemArrayType
	**/
	protected $BidList;

	/**
	* @var PaginatedOrderTransactionArrayType
	**/
	protected $DeletedFromSoldList;

	/**
	* @var PaginatedItemArrayType
	**/
	protected $DeletedFromUnsoldList;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetMyeBaySellingResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellingSummary' =>
				array(
					'required' => false,
					'type' => 'SellingSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ScheduledList' =>
				array(
					'required' => false,
					'type' => 'PaginatedItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ActiveList' =>
				array(
					'required' => false,
					'type' => 'PaginatedItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SoldList' =>
				array(
					'required' => false,
					'type' => 'PaginatedOrderTransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnsoldList' =>
				array(
					'required' => false,
					'type' => 'PaginatedItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Summary' =>
				array(
					'required' => false,
					'type' => 'MyeBaySellingSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidList' =>
				array(
					'required' => false,
					'type' => 'PaginatedItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedFromSoldList' =>
				array(
					'required' => false,
					'type' => 'PaginatedOrderTransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedFromUnsoldList' =>
				array(
					'required' => false,
					'type' => 'PaginatedItemArrayType',
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
	 * @return SellingSummaryType
	 **/
	function getSellingSummary()
	{
		return $this->SellingSummary;
	}

	/**
	 * @return void
	 **/
	function setSellingSummary($value)
	{
		$this->SellingSummary = $value;
	}

	/**
	 * @return PaginatedItemArrayType
	 **/
	function getScheduledList()
	{
		return $this->ScheduledList;
	}

	/**
	 * @return void
	 **/
	function setScheduledList($value)
	{
		$this->ScheduledList = $value;
	}

	/**
	 * @return PaginatedItemArrayType
	 **/
	function getActiveList()
	{
		return $this->ActiveList;
	}

	/**
	 * @return void
	 **/
	function setActiveList($value)
	{
		$this->ActiveList = $value;
	}

	/**
	 * @return PaginatedOrderTransactionArrayType
	 **/
	function getSoldList()
	{
		return $this->SoldList;
	}

	/**
	 * @return void
	 **/
	function setSoldList($value)
	{
		$this->SoldList = $value;
	}

	/**
	 * @return PaginatedItemArrayType
	 **/
	function getUnsoldList()
	{
		return $this->UnsoldList;
	}

	/**
	 * @return void
	 **/
	function setUnsoldList($value)
	{
		$this->UnsoldList = $value;
	}

	/**
	 * @return MyeBaySellingSummaryType
	 **/
	function getSummary()
	{
		return $this->Summary;
	}

	/**
	 * @return void
	 **/
	function setSummary($value)
	{
		$this->Summary = $value;
	}

	/**
	 * @return PaginatedItemArrayType
	 **/
	function getBidList()
	{
		return $this->BidList;
	}

	/**
	 * @return void
	 **/
	function setBidList($value)
	{
		$this->BidList = $value;
	}

	/**
	 * @return PaginatedOrderTransactionArrayType
	 **/
	function getDeletedFromSoldList()
	{
		return $this->DeletedFromSoldList;
	}

	/**
	 * @return void
	 **/
	function setDeletedFromSoldList($value)
	{
		$this->DeletedFromSoldList = $value;
	}

	/**
	 * @return PaginatedItemArrayType
	 **/
	function getDeletedFromUnsoldList()
	{
		return $this->DeletedFromUnsoldList;
	}

	/**
	 * @return void
	 **/
	function setDeletedFromUnsoldList($value)
	{
		$this->DeletedFromUnsoldList = $value;
	}

}
?>
