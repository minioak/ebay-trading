<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PromotionalSaleStatusCodeType.php';

/**
  * Contains the ID and status of a promotional sale.
  * The Promotional Price Display feature enables sellers
  * to apply discounts and/or free shipping across many listings.  
  * 
 **/

class SetPromotionalSaleResponseType extends AbstractResponseType
{
	/**
	* @var PromotionalSaleStatusCodeType
	**/
	protected $Status;

	/**
	* @var long
	**/
	protected $PromotionalSaleID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetPromotionalSaleResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Status' =>
				array(
					'required' => false,
					'type' => 'PromotionalSaleStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalSaleID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return PromotionalSaleStatusCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

	/**
	 * @return long
	 **/
	function getPromotionalSaleID()
	{
		return $this->PromotionalSaleID;
	}

	/**
	 * @return void
	 **/
	function setPromotionalSaleID($value)
	{
		$this->PromotionalSaleID = $value;
	}

}
?>
