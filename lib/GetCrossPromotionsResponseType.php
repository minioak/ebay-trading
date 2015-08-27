<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'CrossPromotionsType.php';

/**
  * <b>No longer recommended.</b> The eBay Store Cross Promotions are no longer supported in the Trading API, so the 
  * <b>CrossPromotion</b> container will either not be returned, or, if it is 
  * returned, the data in the container may not be accurate. Returns a list of either upsell or cross-sell items for a given item ID.
  * The list can be filtered by the viewer's role, either buyer or seller.
  * 
 **/

class GetCrossPromotionsResponseType extends AbstractResponseType
{
	/**
	* @var CrossPromotionsType
	**/
	protected $CrossPromotion;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetCrossPromotionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CrossPromotion' =>
				array(
					'required' => false,
					'type' => 'CrossPromotionsType',
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
	 * @return CrossPromotionsType
	 **/
	function getCrossPromotion()
	{
		return $this->CrossPromotion;
	}

	/**
	 * @return void
	 **/
	function setCrossPromotion($value)
	{
		$this->CrossPromotion = $value;
	}

}
?>
