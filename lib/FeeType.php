<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * Identifies the name and cost of a listing feature that a member pays to eBay (or an eBay
  * company). These listing feature names, fees, and possible discounts are intended only as
  * an aid to help estimate the fees for a listing. Use GetAccount for an accurate final fee
  * breakdown. Returned in AddItemResponseType and related response types.
  * 
 **/

class FeeType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var AmountType
	**/
	protected $Fee;

	/**
	* @var AmountType
	**/
	protected $PromotionalDiscount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FeeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalDiscount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
	 * @return string
	 **/
	function getName()
	{
		return $this->Name;
	}

	/**
	 * @return void
	 **/
	function setName($value)
	{
		$this->Name = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getFee()
	{
		return $this->Fee;
	}

	/**
	 * @return void
	 **/
	function setFee($value)
	{
		$this->Fee = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getPromotionalDiscount()
	{
		return $this->PromotionalDiscount;
	}

	/**
	 * @return void
	 **/
	function setPromotionalDiscount($value)
	{
		$this->PromotionalDiscount = $value;
	}

}
?>
