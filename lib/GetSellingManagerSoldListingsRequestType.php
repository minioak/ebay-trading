<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'SellingManagerSearchType.php';
require_once 'SellingManagerSoldListingsPropertyTypeCodeType.php';
require_once 'SellingManagerSoldListingsSortTypeCodeType.php';
require_once 'SortOrderCodeType.php';
require_once 'PaginationType.php';
require_once 'TimeRangeType.php';

/**
  *   Retrieves a Selling Manager user's sold listings.
  * <br><br>
  * This call is subject to change without notice; the deprecation process is
  * inapplicable to this call.
  * 
 **/

class GetSellingManagerSoldListingsRequestType extends AbstractRequestType
{
	/**
	* @var SellingManagerSearchType
	**/
	protected $Search;

	/**
	* @var long
	**/
	protected $StoreCategoryID;

	/**
	* @var SellingManagerSoldListingsPropertyTypeCodeType
	**/
	protected $Filter;

	/**
	* @var boolean
	**/
	protected $Archived;

	/**
	* @var SellingManagerSoldListingsSortTypeCodeType
	**/
	protected $Sort;

	/**
	* @var SortOrderCodeType
	**/
	protected $SortOrder;

	/**
	* @var PaginationType
	**/
	protected $Pagination;

	/**
	* @var TimeRangeType
	**/
	protected $SaleDateRange;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellingManagerSoldListingsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Search' =>
				array(
					'required' => false,
					'type' => 'SellingManagerSearchType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Filter' =>
				array(
					'required' => false,
					'type' => 'SellingManagerSoldListingsPropertyTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Archived' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Sort' =>
				array(
					'required' => false,
					'type' => 'SellingManagerSoldListingsSortTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SortOrder' =>
				array(
					'required' => false,
					'type' => 'SortOrderCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'SaleDateRange' =>
				array(
					'required' => false,
					'type' => 'TimeRangeType',
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
	 * @return SellingManagerSearchType
	 **/
	function getSearch()
	{
		return $this->Search;
	}

	/**
	 * @return void
	 **/
	function setSearch($value)
	{
		$this->Search = $value;
	}

	/**
	 * @return long
	 **/
	function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}

	/**
	 * @return void
	 **/
	function setStoreCategoryID($value)
	{
		$this->StoreCategoryID = $value;
	}

	/**
	 * @return SellingManagerSoldListingsPropertyTypeCodeType
	 * @param integer $index 
	 **/
	function getFilter($index = null)
	{
		if ($index !== null)
		{
			return $this->Filter[$index];
		}
		else
		{
			return $this->Filter;
		}
	}

	/**
	 * @return void
	 * @param SellingManagerSoldListingsPropertyTypeCodeType $value
	 * @param integer $index 
	 **/
	function setFilter($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Filter[$index] = $value;
		}
		else
		{
			$this->Filter= $value;
		}
	}

	/**
	 * @return void
	 * @param SellingManagerSoldListingsPropertyTypeCodeType $value
	 **/
	function addFilter($value)
	{
		$this->Filter[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getArchived()
	{
		return $this->Archived;
	}

	/**
	 * @return void
	 **/
	function setArchived($value)
	{
		$this->Archived = $value;
	}

	/**
	 * @return SellingManagerSoldListingsSortTypeCodeType
	 **/
	function getSort()
	{
		return $this->Sort;
	}

	/**
	 * @return void
	 **/
	function setSort($value)
	{
		$this->Sort = $value;
	}

	/**
	 * @return SortOrderCodeType
	 **/
	function getSortOrder()
	{
		return $this->SortOrder;
	}

	/**
	 * @return void
	 **/
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
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
	 * @return TimeRangeType
	 **/
	function getSaleDateRange()
	{
		return $this->SaleDateRange;
	}

	/**
	 * @return void
	 **/
	function setSaleDateRange($value)
	{
		$this->SaleDateRange = $value;
	}

}
?>
