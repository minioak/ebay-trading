<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'PromotionMethodCodeType.php';
require_once 'TradingRoleCodeType.php';

/**
  * <b>This call is deprecated.</b>
  * 
 **/

class GetCrossPromotionsRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var PromotionMethodCodeType
	**/
	protected $PromotionMethod;

	/**
	* @var TradingRoleCodeType
	**/
	protected $PromotionViewMode;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetCrossPromotionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'PromotionMethod' =>
				array(
					'required' => false,
					'type' => 'PromotionMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionViewMode' =>
				array(
					'required' => false,
					'type' => 'TradingRoleCodeType',
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
	 * @return TradingRoleCodeType
	 **/
	function getPromotionViewMode()
	{
		return $this->PromotionViewMode;
	}

	/**
	 * @return void
	 **/
	function setPromotionViewMode($value)
	{
		$this->PromotionViewMode = $value;
	}

}
?>
