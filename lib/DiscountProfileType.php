<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'MeasureType.php';

/**
  * Details of a flat or calculated shipping discount profile.
  * 
 **/

class DiscountProfileType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $DiscountProfileID;

	/**
	* @var string
	**/
	protected $DiscountProfileName;

	/**
	* @var AmountType
	**/
	protected $EachAdditionalAmount;

	/**
	* @var AmountType
	**/
	protected $EachAdditionalAmountOff;

	/**
	* @var float
	**/
	protected $EachAdditionalPercentOff;

	/**
	* @var MeasureType
	**/
	protected $WeightOff;

	/**
	* @var string
	**/
	protected $MappedDiscountProfileID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DiscountProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DiscountProfileID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountProfileName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'EachAdditionalAmountOff' =>
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
				),
				'WeightOff' =>
				array(
					'required' => false,
					'type' => 'MeasureType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MappedDiscountProfileID' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return string
	 **/
	function getDiscountProfileID()
	{
		return $this->DiscountProfileID;
	}

	/**
	 * @return void
	 **/
	function setDiscountProfileID($value)
	{
		$this->DiscountProfileID = $value;
	}

	/**
	 * @return string
	 **/
	function getDiscountProfileName()
	{
		return $this->DiscountProfileName;
	}

	/**
	 * @return void
	 **/
	function setDiscountProfileName($value)
	{
		$this->DiscountProfileName = $value;
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
	function getEachAdditionalAmountOff()
	{
		return $this->EachAdditionalAmountOff;
	}

	/**
	 * @return void
	 **/
	function setEachAdditionalAmountOff($value)
	{
		$this->EachAdditionalAmountOff = $value;
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

	/**
	 * @return MeasureType
	 **/
	function getWeightOff()
	{
		return $this->WeightOff;
	}

	/**
	 * @return void
	 **/
	function setWeightOff($value)
	{
		$this->WeightOff = $value;
	}

	/**
	 * @return string
	 **/
	function getMappedDiscountProfileID()
	{
		return $this->MappedDiscountProfileID;
	}

	/**
	 * @return void
	 **/
	function setMappedDiscountProfileID($value)
	{
		$this->MappedDiscountProfileID = $value;
	}

}
?>
