<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PromotionRuleArrayType.php';

/**
  * Returns all promotion rules associated with the specified item or store category. 
  * <strong>Note:</strong> eBay Store Cross Promotions are no longer supported in the 
  * Trading API.
  * 
 **/

class GetPromotionRulesResponseType extends AbstractResponseType
{
	/**
	* @var PromotionRuleArrayType
	**/
	protected $PromotionRuleArray;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetPromotionRulesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PromotionRuleArray' =>
				array(
					'required' => false,
					'type' => 'PromotionRuleArrayType',
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
	 * @return PromotionRuleArrayType
	 **/
	function getPromotionRuleArray()
	{
		return $this->PromotionRuleArray;
	}

	/**
	 * @return void
	 **/
	function setPromotionRuleArray($value)
	{
		$this->PromotionRuleArray = $value;
	}

}
?>
