<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MeasurementSystemCodeType.php';
require_once 'MeasureType.php';
require_once 'AmountType.php';
require_once 'ShippingPackageCodeType.php';

/**
  * Details pertinent to one or more items for which
  * calculated shipping (or flat rate shipping using shipping rate tables with
  * weight surcharges) has been offered by the seller, such as package
  * dimension and weight and packaging/handling costs. Also returned
  * with the data for an item's transaction.
  * <br><br>
  * <span class="tablenote"><strong>Note:</strong>
  * The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container are used to specify package dimensions and package weight, and these values should now be specified in the <strong>ShippingPackageDetails</strong> container instead.
  * </span>
  * 
 **/

class CalculatedShippingRateType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $OriginatingPostalCode;

	/**
	* @var MeasurementSystemCodeType
	**/
	protected $MeasurementUnit;

	/**
	* @var MeasureType
	**/
	protected $PackageDepth;

	/**
	* @var MeasureType
	**/
	protected $PackageLength;

	/**
	* @var MeasureType
	**/
	protected $PackageWidth;

	/**
	* @var AmountType
	**/
	protected $PackagingHandlingCosts;

	/**
	* @var boolean
	**/
	protected $ShippingIrregular;

	/**
	* @var ShippingPackageCodeType
	**/
	protected $ShippingPackage;

	/**
	* @var MeasureType
	**/
	protected $WeightMajor;

	/**
	* @var MeasureType
	**/
	protected $WeightMinor;

	/**
	* @var AmountType
	**/
	protected $InternationalPackagingHandlingCosts;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CalculatedShippingRateType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OriginatingPostalCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MeasurementUnit' =>
				array(
					'required' => false,
					'type' => 'MeasurementSystemCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PackageDepth' =>
				array(
					'required' => false,
					'type' => 'MeasureType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PackageLength' =>
				array(
					'required' => false,
					'type' => 'MeasureType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PackageWidth' =>
				array(
					'required' => false,
					'type' => 'MeasureType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PackagingHandlingCosts' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingIrregular' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
				'WeightMajor' =>
				array(
					'required' => false,
					'type' => 'MeasureType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WeightMinor' =>
				array(
					'required' => false,
					'type' => 'MeasureType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalPackagingHandlingCosts' =>
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
	function getOriginatingPostalCode()
	{
		return $this->OriginatingPostalCode;
	}

	/**
	 * @return void
	 **/
	function setOriginatingPostalCode($value)
	{
		$this->OriginatingPostalCode = $value;
	}

	/**
	 * @return MeasurementSystemCodeType
	 **/
	function getMeasurementUnit()
	{
		return $this->MeasurementUnit;
	}

	/**
	 * @return void
	 **/
	function setMeasurementUnit($value)
	{
		$this->MeasurementUnit = $value;
	}

	/**
	 * @return MeasureType
	 **/
	function getPackageDepth()
	{
		return $this->PackageDepth;
	}

	/**
	 * @return void
	 **/
	function setPackageDepth($value)
	{
		$this->PackageDepth = $value;
	}

	/**
	 * @return MeasureType
	 **/
	function getPackageLength()
	{
		return $this->PackageLength;
	}

	/**
	 * @return void
	 **/
	function setPackageLength($value)
	{
		$this->PackageLength = $value;
	}

	/**
	 * @return MeasureType
	 **/
	function getPackageWidth()
	{
		return $this->PackageWidth;
	}

	/**
	 * @return void
	 **/
	function setPackageWidth($value)
	{
		$this->PackageWidth = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getPackagingHandlingCosts()
	{
		return $this->PackagingHandlingCosts;
	}

	/**
	 * @return void
	 **/
	function setPackagingHandlingCosts($value)
	{
		$this->PackagingHandlingCosts = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShippingIrregular()
	{
		return $this->ShippingIrregular;
	}

	/**
	 * @return void
	 **/
	function setShippingIrregular($value)
	{
		$this->ShippingIrregular = $value;
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
	 * @return MeasureType
	 **/
	function getWeightMajor()
	{
		return $this->WeightMajor;
	}

	/**
	 * @return void
	 **/
	function setWeightMajor($value)
	{
		$this->WeightMajor = $value;
	}

	/**
	 * @return MeasureType
	 **/
	function getWeightMinor()
	{
		return $this->WeightMinor;
	}

	/**
	 * @return void
	 **/
	function setWeightMinor($value)
	{
		$this->WeightMinor = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getInternationalPackagingHandlingCosts()
	{
		return $this->InternationalPackagingHandlingCosts;
	}

	/**
	 * @return void
	 **/
	function setInternationalPackagingHandlingCosts($value)
	{
		$this->InternationalPackagingHandlingCosts = $value;
	}

}
?>
