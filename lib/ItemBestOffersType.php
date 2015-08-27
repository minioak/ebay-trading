<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'TradingRoleCodeType.php';
require_once 'BestOfferArrayType.php';
require_once 'ItemType.php';

/**
  * All Best Offers for the item according to the filter or Best Offer
  * ID (or both) used in the input.
  * For the notification client usage, this response includes a
  * single Best Offer.
  * 
 **/

class ItemBestOffersType extends EbatNs_ComplexType
{
	/**
	* @var TradingRoleCodeType
	**/
	protected $Role;

	/**
	* @var BestOfferArrayType
	**/
	protected $BestOfferArray;

	/**
	* @var ItemType
	**/
	protected $Item;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemBestOffersType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Role' =>
				array(
					'required' => false,
					'type' => 'TradingRoleCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return TradingRoleCodeType
	 **/
	function getRole()
	{
		return $this->Role;
	}

	/**
	 * @return void
	 **/
	function setRole($value)
	{
		$this->Role = $value;
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

}
?>
