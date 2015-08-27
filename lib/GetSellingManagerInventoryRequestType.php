<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'SellingManagerProductSortCodeType.php';
require_once 'PaginationType.php';
require_once 'SortOrderCodeType.php';
require_once 'SellingManagerSearchType.php';
require_once 'SellingManagerInventoryPropertyTypeCodeType.php';

/**
  *       Retrieves a paginated list containing details of a user's Selling Manager inventory.
  * This call is subject to change without notice; the deprecation process is
  * inapplicable to this call.
  *     
 **/

class GetSellingManagerInventoryRequestType extends AbstractRequestType
{
	/**
	* @var SellingManagerProductSortCodeType
	**/
	protected $Sort;

	/**
	* @var long
	**/
	protected $FolderID;

	/**
	* @var PaginationType
	**/
	protected $Pagination;

	/**
	* @var SortOrderCodeType
	**/
	protected $SortOrder;

	/**
	* @var SellingManagerSearchType
	**/
	protected $Search;

	/**
	* @var long
	**/
	protected $StoreCategoryID;

	/**
	* @var SellingManagerInventoryPropertyTypeCodeType
	**/
	protected $Filter;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellingManagerInventoryRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Sort' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductSortCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FolderID' =>
				array(
					'required' => false,
					'type' => 'long',
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
				'SortOrder' =>
				array(
					'required' => false,
					'type' => 'SortOrderCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
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
					'type' => 'SellingManagerInventoryPropertyTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return SellingManagerProductSortCodeType
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
	 * @return long
	 **/
	function getFolderID()
	{
		return $this->FolderID;
	}

	/**
	 * @return void
	 **/
	function setFolderID($value)
	{
		$this->FolderID = $value;
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
	 * @return SellingManagerInventoryPropertyTypeCodeType
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
	 * @param SellingManagerInventoryPropertyTypeCodeType $value
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
	 * @param SellingManagerInventoryPropertyTypeCodeType $value
	 **/
	function addFilter($value)
	{
		$this->Filter[] = $value;
	}

}
?>
