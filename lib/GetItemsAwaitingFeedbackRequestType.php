<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemSortTypeCodeType.php';
require_once 'PaginationType.php';

/**
  * Returns orders in which the user was involved and for which feedback
  * is still needed from either the buyer or seller.
  * 
 **/

class GetItemsAwaitingFeedbackRequestType extends AbstractRequestType
{
	/**
	* @var ItemSortTypeCodeType
	**/
	protected $Sort;

	/**
	* @var PaginationType
	**/
	protected $Pagination;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemsAwaitingFeedbackRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Sort' =>
				array(
					'required' => false,
					'type' => 'ItemSortTypeCodeType',
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
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

}
?>
