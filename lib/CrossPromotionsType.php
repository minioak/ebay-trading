<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';
require_once 'PromotionSchemeCodeType.php';
require_once 'PromotionMethodCodeType.php';
require_once 'PromotedItemType.php';

/**
  * eBay Store Cross Promotions are no longer supported in the Trading API, so the 
  * <b>CrossPromotion</b> container will either not be returned, or, if it is 
  * returned, the data in the container may not be accurate. Contains one or
  * more items cross-promoted with the display or purchase of a referring item.
  * 
 **/

class CrossPromotionsType extends EbatNs_ComplexType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var PromotionSchemeCodeType
	**/
	protected $PrimaryScheme;

	/**
	* @var PromotionMethodCodeType
	**/
	protected $PromotionMethod;

	/**
	* @var string
	**/
	protected $SellerID;

	/**
	* @var boolean
	**/
	protected $ShippingDiscount;

	/**
	* @var string
	**/
	protected $StoreName;

	/**
	* @var PromotedItemType
	**/
	protected $PromotedItem;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CrossPromotionsType', 'urn:ebay:apis:eBLBaseComponents');
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
				'PrimaryScheme' =>
				array(
					'required' => false,
					'type' => 'PromotionSchemeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionMethod' =>
				array(
					'required' => false,
					'type' => 'PromotionMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotedItem' =>
				array(
					'required' => false,
					'type' => 'PromotedItemType',
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
	 * @return PromotionSchemeCodeType
	 **/
	function getPrimaryScheme()
	{
		return $this->PrimaryScheme;
	}

	/**
	 * @return void
	 **/
	function setPrimaryScheme($value)
	{
		$this->PrimaryScheme = $value;
	}

	/**
	 * @return PromotionMethodCodeType
	 **/
	function getPromotionMethod()
	{
		return $this->PromotionMethod;
	}

	/**
	 * @return void
	 **/
	function setPromotionMethod($value)
	{
		$this->PromotionMethod = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerID()
	{
		return $this->SellerID;
	}

	/**
	 * @return void
	 **/
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShippingDiscount()
	{
		return $this->ShippingDiscount;
	}

	/**
	 * @return void
	 **/
	function setShippingDiscount($value)
	{
		$this->ShippingDiscount = $value;
	}

	/**
	 * @return string
	 **/
	function getStoreName()
	{
		return $this->StoreName;
	}

	/**
	 * @return void
	 **/
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}

	/**
	 * @return PromotedItemType
	 * @param integer $index 
	 **/
	function getPromotedItem($index = null)
	{
		if ($index !== null)
		{
			return $this->PromotedItem[$index];
		}
		else
		{
			return $this->PromotedItem;
		}
	}

	/**
	 * @return void
	 * @param PromotedItemType $value
	 * @param integer $index 
	 **/
	function setPromotedItem($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PromotedItem[$index] = $value;
		}
		else
		{
			$this->PromotedItem= $value;
		}
	}

	/**
	 * @return void
	 * @param PromotedItemType $value
	 **/
	function addPromotedItem($value)
	{
		$this->PromotedItem[] = $value;
	}

}
?>
