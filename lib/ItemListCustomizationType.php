<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingTypeCodeType.php';
require_once 'ItemSortTypeCodeType.php';
require_once 'PaginationType.php';
require_once 'OrderStatusFilterCodeType.php';

/**
  * Defines how a list of items should be returned.
  * 
 **/

class ItemListCustomizationType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $Include;

	/**
	* @var ListingTypeCodeType
	**/
	protected $ListingType;

	/**
	* @var ItemSortTypeCodeType
	**/
	protected $Sort;

	/**
	* @var int
	**/
	protected $DurationInDays;

	/**
	* @var boolean
	**/
	protected $IncludeNotes;

	/**
	* @var PaginationType
	**/
	protected $Pagination;

	/**
	* @var OrderStatusFilterCodeType
	**/
	protected $OrderStatusFilter;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemListCustomizationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Include' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingType' =>
				array(
					'required' => false,
					'type' => 'ListingTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Sort' =>
				array(
					'required' => false,
					'type' => 'ItemSortTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DurationInDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeNotes' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
				'OrderStatusFilter' =>
				array(
					'required' => false,
					'type' => 'OrderStatusFilterCodeType',
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
	 * @return boolean
	 **/
	function getInclude()
	{
		return $this->Include;
	}

	/**
	 * @return void
	 **/
	function setInclude($value)
	{
		$this->Include = $value;
	}

	/**
	 * @return ListingTypeCodeType
	 **/
	function getListingType()
	{
		return $this->ListingType;
	}

	/**
	 * @return void
	 **/
	function setListingType($value)
	{
		$this->ListingType = $value;
	}

	/**
	 * @return ItemSortTypeCodeType
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
	 * @return int
	 **/
	function getDurationInDays()
	{
		return $this->DurationInDays;
	}

	/**
	 * @return void
	 **/
	function setDurationInDays($value)
	{
		$this->DurationInDays = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeNotes()
	{
		return $this->IncludeNotes;
	}

	/**
	 * @return void
	 **/
	function setIncludeNotes($value)
	{
		$this->IncludeNotes = $value;
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
	 * @return OrderStatusFilterCodeType
	 **/
	function getOrderStatusFilter()
	{
		return $this->OrderStatusFilter;
	}

	/**
	 * @return void
	 **/
	function setOrderStatusFilter($value)
	{
		$this->OrderStatusFilter = $value;
	}

}
?>
