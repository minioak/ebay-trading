<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'HandlingNameCodeType.php';
require_once 'AmountType.php';

/**
  * Type defining the <b>CalculatedHandlingDiscount</b> container that is used in the <b>SetShippingDiscountProfiles</b> call to specify the rules used to determine package handling costs for an order in which calculated shipping is used.
  * 
 **/

class CalculatedHandlingDiscountType extends EbatNs_ComplexType
{
	/**
	* @var HandlingNameCodeType
	**/
	protected $DiscountName;

	/**
	* @var AmountType
	**/
	protected $OrderHandlingAmount;

	/**
	* @var AmountType
	**/
	protected $EachAdditionalAmount;

	/**
	* @var AmountType
	**/
	protected $EachAdditionalOffAmount;

	/**
	* @var float
	**/
	protected $EachAdditionalPercentOff;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CalculatedHandlingDiscountType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DiscountName' =>
				array(
					'required' => false,
					'type' => 'HandlingNameCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderHandlingAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EachAdditionalAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EachAdditionalOffAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EachAdditionalPercentOff' =>
				array(
					'required' => false,
					'type' => 'float',
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
	 * @return HandlingNameCodeType
	 **/
	function getDiscountName()
	{
		return $this->DiscountName;
	}

	/**
	 * @return void
	 **/
	function setDiscountName($value)
	{
		$this->DiscountName = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getOrderHandlingAmount()
	{
		return $this->OrderHandlingAmount;
	}

	/**
	 * @return void
	 **/
	function setOrderHandlingAmount($value)
	{
		$this->OrderHandlingAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getEachAdditionalAmount()
	{
		return $this->EachAdditionalAmount;
	}

	/**
	 * @return void
	 **/
	function setEachAdditionalAmount($value)
	{
		$this->EachAdditionalAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getEachAdditionalOffAmount()
	{
		return $this->EachAdditionalOffAmount;
	}

	/**
	 * @return void
	 **/
	function setEachAdditionalOffAmount($value)
	{
		$this->EachAdditionalOffAmount = $value;
	}

	/**
	 * @return float
	 **/
	function getEachAdditionalPercentOff()
	{
		return $this->EachAdditionalPercentOff;
	}

	/**
	 * @return void
	 **/
	function setEachAdditionalPercentOff($value)
	{
		$this->EachAdditionalPercentOff = $value;
	}

}
?>
