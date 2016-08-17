<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ShippingPackageCodeType.php';

/**
  * Details about type of package used to ship an item.
  * 
 **/

class ShippingPackageDetailsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $PackageID;

	/**
	* @var string
	**/
	protected $Description;

	/**
	* @var ShippingPackageCodeType
	**/
	protected $ShippingPackage;

	/**
	* @var boolean
	**/
	protected $DefaultValue;

	/**
	* @var boolean
	**/
	protected $DimensionsSupported;

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
		parent::__construct('ShippingPackageDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PackageID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingPackage' =>
				array(
					'required' => false,
					'type' => 'ShippingPackageCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DefaultValue' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DimensionsSupported' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return int
	 **/
	function getPackageID()
	{
		return $this->PackageID;
	}

	/**
	 * @return void
	 **/
	function setPackageID($value)
	{
		$this->PackageID = $value;
	}

	/**
	 * @return string
	 **/
	function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @return void
	 **/
	function setDescription($value)
	{
		$this->Description = $value;
	}

	/**
	 * @return ShippingPackageCodeType
	 **/
	function getShippingPackage()
	{
		return $this->ShippingPackage;
	}

	/**
	 * @return void
	 **/
	function setShippingPackage($value)
	{
		$this->ShippingPackage = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDefaultValue()
	{
		return $this->DefaultValue;
	}

	/**
	 * @return void
	 **/
	function setDefaultValue($value)
	{
		$this->DefaultValue = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDimensionsSupported()
	{
		return $this->DimensionsSupported;
	}

	/**
	 * @return void
	 **/
	function setDimensionsSupported($value)
	{
		$this->DimensionsSupported = $value;
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
