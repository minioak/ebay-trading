<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**Describes the inventory status of a specific Selling Manager Product
 **/

class SellingManagerProductInventoryStatusType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $QuantityScheduled;

	/**
	* @var int
	**/
	protected $QuantityActive;

	/**
	* @var int
	**/
	protected $QuantitySold;

	/**
	* @var int
	**/
	protected $QuantityUnsold;

	/**
	* @var float
	**/
	protected $SuccessPercent;

	/**
	* @var AmountType
	**/
	protected $AverageSellingPrice;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerProductInventoryStatusType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'QuantityScheduled' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityActive' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantitySold' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityUnsold' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SuccessPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AverageSellingPrice' =>
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
	 * @return int
	 **/
	function getQuantityScheduled()
	{
		return $this->QuantityScheduled;
	}

	/**
	 * @return void
	 **/
	function setQuantityScheduled($value)
	{
		$this->QuantityScheduled = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantityActive()
	{
		return $this->QuantityActive;
	}

	/**
	 * @return void
	 **/
	function setQuantityActive($value)
	{
		$this->QuantityActive = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantitySold()
	{
		return $this->QuantitySold;
	}

	/**
	 * @return void
	 **/
	function setQuantitySold($value)
	{
		$this->QuantitySold = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantityUnsold()
	{
		return $this->QuantityUnsold;
	}

	/**
	 * @return void
	 **/
	function setQuantityUnsold($value)
	{
		$this->QuantityUnsold = $value;
	}

	/**
	 * @return float
	 **/
	function getSuccessPercent()
	{
		return $this->SuccessPercent;
	}

	/**
	 * @return void
	 **/
	function setSuccessPercent($value)
	{
		$this->SuccessPercent = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getAverageSellingPrice()
	{
		return $this->AverageSellingPrice;
	}

	/**
	 * @return void
	 **/
	function setAverageSellingPrice($value)
	{
		$this->AverageSellingPrice = $value;
	}

}
?>
