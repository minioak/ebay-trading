<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ShippingServiceCodeType.php';
require_once 'ShippingTypeCodeType.php';
require_once 'ShippingPackageCodeType.php';
require_once 'ShippingCarrierCodeType.php';
require_once 'AnnouncementMessageType.php';
require_once 'ShippingServicePackageDetailsType.php';

/**
  *         Details about a specific shipping service.
  *       
 **/

class ShippingServiceDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Description;

	/**
	* @var boolean
	**/
	protected $ExpeditedService;

	/**
	* @var boolean
	**/
	protected $InternationalService;

	/**
	* @var token
	**/
	protected $ShippingService;

	/**
	* @var int
	**/
	protected $ShippingServiceID;

	/**
	* @var int
	**/
	protected $ShippingTimeMax;

	/**
	* @var int
	**/
	protected $ShippingTimeMin;

	/**
	* @var ShippingServiceCodeType
	**/
	protected $ShippingServiceCode;

	/**
	* @var ShippingTypeCodeType
	**/
	protected $ServiceType;

	/**
	* @var ShippingPackageCodeType
	**/
	protected $ShippingPackage;

	/**
	* @var boolean
	**/
	protected $DimensionsRequired;

	/**
	* @var boolean
	**/
	protected $ValidForSellingFlow;

	/**
	* @var boolean
	**/
	protected $SurchargeApplicable;

	/**
	* @var ShippingCarrierCodeType
	**/
	protected $ShippingCarrier;

	/**
	* @var boolean
	**/
	protected $CODService;

	/**
	* @var AnnouncementMessageType
	**/
	protected $DeprecationDetails;

	/**
	* @var int
	**/
	protected $MappedToShippingServiceID;

	/**
	* @var token
	**/
	protected $CostGroupFlat;

	/**
	* @var ShippingServicePackageDetailsType
	**/
	protected $ShippingServicePackageDetails;

	/**
	* @var boolean
	**/
	protected $WeightRequired;

	/**
	* @var string
	**/
	protected $DetailVersion;

	/**
	* @var dateTime
	**/
	protected $UpdateTime;

	/**
	* @var token
	**/
	protected $ShippingCategory;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShippingServiceDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Description' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpeditedService' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalService' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingService' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingTimeMax' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingTimeMin' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceCode' =>
				array(
					'required' => false,
					'type' => 'ShippingServiceCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ServiceType' =>
				array(
					'required' => false,
					'type' => 'ShippingTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ShippingPackage' =>
				array(
					'required' => false,
					'type' => 'ShippingPackageCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'DimensionsRequired' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ValidForSellingFlow' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SurchargeApplicable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingCarrier' =>
				array(
					'required' => false,
					'type' => 'ShippingCarrierCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'CODService' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeprecationDetails' =>
				array(
					'required' => false,
					'type' => 'AnnouncementMessageType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'MappedToShippingServiceID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CostGroupFlat' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServicePackageDetails' =>
				array(
					'required' => false,
					'type' => 'ShippingServicePackageDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'WeightRequired' =>
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
				),
				'ShippingCategory' =>
				array(
					'required' => false,
					'type' => 'token',
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
	 * @return boolean
	 **/
	function getExpeditedService()
	{
		return $this->ExpeditedService;
	}

	/**
	 * @return void
	 **/
	function setExpeditedService($value)
	{
		$this->ExpeditedService = $value;
	}

	/**
	 * @return boolean
	 **/
	function getInternationalService()
	{
		return $this->InternationalService;
	}

	/**
	 * @return void
	 **/
	function setInternationalService($value)
	{
		$this->InternationalService = $value;
	}

	/**
	 * @return token
	 **/
	function getShippingService()
	{
		return $this->ShippingService;
	}

	/**
	 * @return void
	 **/
	function setShippingService($value)
	{
		$this->ShippingService = $value;
	}

	/**
	 * @return int
	 **/
	function getShippingServiceID()
	{
		return $this->ShippingServiceID;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceID($value)
	{
		$this->ShippingServiceID = $value;
	}

	/**
	 * @return int
	 **/
	function getShippingTimeMax()
	{
		return $this->ShippingTimeMax;
	}

	/**
	 * @return void
	 **/
	function setShippingTimeMax($value)
	{
		$this->ShippingTimeMax = $value;
	}

	/**
	 * @return int
	 **/
	function getShippingTimeMin()
	{
		return $this->ShippingTimeMin;
	}

	/**
	 * @return void
	 **/
	function setShippingTimeMin($value)
	{
		$this->ShippingTimeMin = $value;
	}

	/**
	 * @return ShippingServiceCodeType
	 **/
	function getShippingServiceCode()
	{
		return $this->ShippingServiceCode;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceCode($value)
	{
		$this->ShippingServiceCode = $value;
	}

	/**
	 * @return ShippingTypeCodeType
	 * @param integer $index 
	 **/
	function getServiceType($index = null)
	{
		if ($index !== null)
		{
			return $this->ServiceType[$index];
		}
		else
		{
			return $this->ServiceType;
		}
	}

	/**
	 * @return void
	 * @param ShippingTypeCodeType $value
	 * @param integer $index 
	 **/
	function setServiceType($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ServiceType[$index] = $value;
		}
		else
		{
			$this->ServiceType= $value;
		}
	}

	/**
	 * @return void
	 * @param ShippingTypeCodeType $value
	 **/
	function addServiceType($value)
	{
		$this->ServiceType[] = $value;
	}

	/**
	 * @return ShippingPackageCodeType
	 * @param integer $index 
	 **/
	function getShippingPackage($index = null)
	{
		if ($index !== null)
		{
			return $this->ShippingPackage[$index];
		}
		else
		{
			return $this->ShippingPackage;
		}
	}

	/**
	 * @return void
	 * @param ShippingPackageCodeType $value
	 * @param integer $index 
	 **/
	function setShippingPackage($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ShippingPackage[$index] = $value;
		}
		else
		{
			$this->ShippingPackage= $value;
		}
	}

	/**
	 * @return void
	 * @param ShippingPackageCodeType $value
	 **/
	function addShippingPackage($value)
	{
		$this->ShippingPackage[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDimensionsRequired()
	{
		return $this->DimensionsRequired;
	}

	/**
	 * @return void
	 **/
	function setDimensionsRequired($value)
	{
		$this->DimensionsRequired = $value;
	}

	/**
	 * @return boolean
	 **/
	function getValidForSellingFlow()
	{
		return $this->ValidForSellingFlow;
	}

	/**
	 * @return void
	 **/
	function setValidForSellingFlow($value)
	{
		$this->ValidForSellingFlow = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSurchargeApplicable()
	{
		return $this->SurchargeApplicable;
	}

	/**
	 * @return void
	 **/
	function setSurchargeApplicable($value)
	{
		$this->SurchargeApplicable = $value;
	}

	/**
	 * @return ShippingCarrierCodeType
	 * @param integer $index 
	 **/
	function getShippingCarrier($index = null)
	{
		if ($index !== null)
		{
			return $this->ShippingCarrier[$index];
		}
		else
		{
			return $this->ShippingCarrier;
		}
	}

	/**
	 * @return void
	 * @param ShippingCarrierCodeType $value
	 * @param integer $index 
	 **/
	function setShippingCarrier($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ShippingCarrier[$index] = $value;
		}
		else
		{
			$this->ShippingCarrier= $value;
		}
	}

	/**
	 * @return void
	 * @param ShippingCarrierCodeType $value
	 **/
	function addShippingCarrier($value)
	{
		$this->ShippingCarrier[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCODService()
	{
		return $this->CODService;
	}

	/**
	 * @return void
	 **/
	function setCODService($value)
	{
		$this->CODService = $value;
	}

	/**
	 * @return AnnouncementMessageType
	 * @param integer $index 
	 **/
	function getDeprecationDetails($index = null)
	{
		if ($index !== null)
		{
			return $this->DeprecationDetails[$index];
		}
		else
		{
			return $this->DeprecationDetails;
		}
	}

	/**
	 * @return void
	 * @param AnnouncementMessageType $value
	 * @param integer $index 
	 **/
	function setDeprecationDetails($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DeprecationDetails[$index] = $value;
		}
		else
		{
			$this->DeprecationDetails= $value;
		}
	}

	/**
	 * @return void
	 * @param AnnouncementMessageType $value
	 **/
	function addDeprecationDetails($value)
	{
		$this->DeprecationDetails[] = $value;
	}

	/**
	 * @return int
	 **/
	function getMappedToShippingServiceID()
	{
		return $this->MappedToShippingServiceID;
	}

	/**
	 * @return void
	 **/
	function setMappedToShippingServiceID($value)
	{
		$this->MappedToShippingServiceID = $value;
	}

	/**
	 * @return token
	 **/
	function getCostGroupFlat()
	{
		return $this->CostGroupFlat;
	}

	/**
	 * @return void
	 **/
	function setCostGroupFlat($value)
	{
		$this->CostGroupFlat = $value;
	}

	/**
	 * @return ShippingServicePackageDetailsType
	 * @param integer $index 
	 **/
	function getShippingServicePackageDetails($index = null)
	{
		if ($index !== null)
		{
			return $this->ShippingServicePackageDetails[$index];
		}
		else
		{
			return $this->ShippingServicePackageDetails;
		}
	}

	/**
	 * @return void
	 * @param ShippingServicePackageDetailsType $value
	 * @param integer $index 
	 **/
	function setShippingServicePackageDetails($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ShippingServicePackageDetails[$index] = $value;
		}
		else
		{
			$this->ShippingServicePackageDetails= $value;
		}
	}

	/**
	 * @return void
	 * @param ShippingServicePackageDetailsType $value
	 **/
	function addShippingServicePackageDetails($value)
	{
		$this->ShippingServicePackageDetails[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getWeightRequired()
	{
		return $this->WeightRequired;
	}

	/**
	 * @return void
	 **/
	function setWeightRequired($value)
	{
		$this->WeightRequired = $value;
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

	/**
	 * @return token
	 **/
	function getShippingCategory()
	{
		return $this->ShippingCategory;
	}

	/**
	 * @return void
	 **/
	function setShippingCategory($value)
	{
		$this->ShippingCategory = $value;
	}

}
?>
