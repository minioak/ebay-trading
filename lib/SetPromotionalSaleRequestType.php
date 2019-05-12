<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ModifyActionCodeType.php';
require_once 'PromotionalSaleType.php';

/**
  * Creates or modifies a promotional sale. Promotional sales enable sellers
  * to apply discounts and/or free shipping across many listings.
  * 
 **/

class SetPromotionalSaleRequestType extends AbstractRequestType
{
	/**
	* @var ModifyActionCodeType
	**/
	protected $Action;

	/**
	* @var PromotionalSaleType
	**/
	protected $PromotionalSaleDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetPromotionalSaleRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Action' =>
				array(
					'required' => false,
					'type' => 'ModifyActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleDetails' =>
				array(
					'required' => false,
					'type' => 'PromotionalSaleType',
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
	 * @return ModifyActionCodeType
	 **/
	function getAction()
	{
		return $this->Action;
	}

	/**
	 * @return void
	 **/
	function setAction($value)
	{
		$this->Action = $value;
	}

	/**
	 * @return PromotionalSaleType
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
