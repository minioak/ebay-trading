<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'BestOfferArrayType.php';
require_once 'ItemType.php';
require_once 'ItemBestOffersArrayType.php';
require_once 'PaginationResultType.php';

/**
  * All Best Offers for the item according to the filter or Best Offer
  * ID (or both) used in the input.
  * For the notification client usage, this response includes a
  * single Best Offer.
  * 
 **/

class GetBestOffersResponseType extends AbstractResponseType
{
	/**
	* @var BestOfferArrayType
	**/
	protected $BestOfferArray;

	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var ItemBestOffersArrayType
	**/
	protected $ItemBestOffersArray;

	/**
	* @var int
	**/
	protected $PageNumber;

	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetBestOffersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BestOfferArray' =>
				array(
					'required' => false,
					'type' => 'BestOfferArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'ItemBestOffersArray' =>
				array(
					'required' => false,
					'type' => 'ItemBestOffersArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
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
	 * @return BestOfferArrayType
	 **/
	function getBestOfferArray()
	{
		return $this->BestOfferArray;
	}

	/**
	 * @return void
	 **/
	function setBestOfferArray($value)
	{
		$this->BestOfferArray = $value;
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
	 * @return ItemBestOffersArrayType
	 **/
	function getItemBestOffersArray()
	{
		return $this->ItemBestOffersArray;
	}

	/**
	 * @return void
	 **/
	function setItemBestOffersArray($value)
	{
		$this->ItemBestOffersArray = $value;
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

}
?>
