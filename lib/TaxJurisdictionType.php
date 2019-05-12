<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Tax-related details for a region or jurisdiction.
  * 
 **/

class TaxJurisdictionType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $JurisdictionID;

	/**
	* @var float
	**/
	protected $SalesTaxPercent;

	/**
	* @var boolean
	**/
	protected $ShippingIncludedInTax;

	/**
	* @var string
	**/
	protected $JurisdictionName;

	/**
	* @var string
	**/
	protected $DetailVersion;

	/**
	* @var dateTime
	**/
	protected $UpdateTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TaxJurisdictionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'JurisdictionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalesTaxPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingIncludedInTax' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'JurisdictionName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	function getJurisdictionID()
	{
		return $this->JurisdictionID;
	}

	/**
	 * @return void
	 **/
	function setJurisdictionID($value)
	{
		$this->JurisdictionID = $value;
	}

	/**
	 * @return float
	 **/
	function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}

	/**
	 * @return void
	 **/
	function setSalesTaxPercent($value)
	{
		$this->SalesTaxPercent = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}

	/**
	 * @return void
	 **/
	function setShippingIncludedInTax($value)
	{
		$this->ShippingIncludedInTax = $value;
	}

	/**
	 * @return string
	 **/
	function getJurisdictionName()
	{
		return $this->JurisdictionName;
	}

	/**
	 * @return void
	 **/
	function setJurisdictionName($value)
	{
		$this->JurisdictionName = $value;
	}

	/**
	 * @return string
	 **/
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}

	/**
	 * @return void
	 **/
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}

	/**
	 * @return void
	 **/
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}

}
?>
