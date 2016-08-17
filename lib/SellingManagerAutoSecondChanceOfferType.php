<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerAutoSecondChanceOfferTypeCodeType.php';
require_once 'AmountType.php';
require_once 'SecondChanceOfferDurationCodeType.php';

/**
  * Defines the options available for an automated 
  * second chance offer rule.
  * 
 **/

class SellingManagerAutoSecondChanceOfferType extends EbatNs_ComplexType
{
	/**
	* @var SellingManagerAutoSecondChanceOfferTypeCodeType
	**/
	protected $SecondChanceOfferCondition;

	/**
	* @var AmountType
	**/
	protected $Amount;

	/**
	* @var float
	**/
	protected $ProfitPercent;

	/**
	* @var SecondChanceOfferDurationCodeType
	**/
	protected $Duration;

	/**
	* @var int
	**/
	protected $ListingHoldInventoryLevel;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAutoSecondChanceOfferType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SecondChanceOfferCondition' =>
				array(
					'required' => false,
					'type' => 'SellingManagerAutoSecondChanceOfferTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Amount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProfitPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Duration' =>
				array(
					'required' => false,
					'type' => 'SecondChanceOfferDurationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingHoldInventoryLevel' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return SellingManagerAutoSecondChanceOfferTypeCodeType
	 **/
	function getSecondChanceOfferCondition()
	{
		return $this->SecondChanceOfferCondition;
	}

	/**
	 * @return void
	 **/
	function setSecondChanceOfferCondition($value)
	{
		$this->SecondChanceOfferCondition = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getAmount()
	{
		return $this->Amount;
	}

	/**
	 * @return void
	 **/
	function setAmount($value)
	{
		$this->Amount = $value;
	}

	/**
	 * @return float
	 **/
	function getProfitPercent()
	{
		return $this->ProfitPercent;
	}

	/**
	 * @return void
	 **/
	function setProfitPercent($value)
	{
		$this->ProfitPercent = $value;
	}

	/**
	 * @return SecondChanceOfferDurationCodeType
	 **/
	function getDuration()
	{
		return $this->Duration;
	}

	/**
	 * @return void
	 **/
	function setDuration($value)
	{
		$this->Duration = $value;
	}

	/**
	 * @return int
	 **/
	function getListingHoldInventoryLevel()
	{
		return $this->ListingHoldInventoryLevel;
	}

	/**
	 * @return void
	 **/
	function setListingHoldInventoryLevel($value)
	{
		$this->ListingHoldInventoryLevel = $value;
	}

}
?>
