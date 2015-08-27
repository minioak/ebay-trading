<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PromotionalSaleArrayType.php';

/**
  * Contains information about promotional sales. This call
  * is part of the Promotional Price Display feature.
  * 
 **/

class GetPromotionalSaleDetailsResponseType extends AbstractResponseType
{
	/**
	* @var PromotionalSaleArrayType
	**/
	protected $PromotionalSaleDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetPromotionalSaleDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PromotionalSaleDetails' =>
				array(
					'required' => false,
					'type' => 'PromotionalSaleArrayType',
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
	 * @return PromotionalSaleArrayType
	 **/
	function getPromotionalSaleDetails()
	{
		return $this->PromotionalSaleDetails;
	}

	/**
	 * @return void
	 **/
	function setPromotionalSaleDetails($value)
	{
		$this->PromotionalSaleDetails = $value;
	}

}
?>
