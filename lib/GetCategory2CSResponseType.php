<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'CategoryArrayType.php';
require_once 'SiteWideCharacteristicsType.php';

/**
  * Only applicable for determining whether a category is catalog-enabled.
  * 
 **/

class GetCategory2CSResponseType extends AbstractResponseType
{
	/**
	* @var CategoryArrayType
	**/
	protected $MappedCategoryArray;

	/**
	* @var CategoryArrayType
	**/
	protected $UnmappedCategoryArray;

	/**
	* @var string
	**/
	protected $AttributeSystemVersion;

	/**
	* @var SiteWideCharacteristicsType
	**/
	protected $SiteWideCharacteristicSets;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetCategory2CSResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MappedCategoryArray' =>
				array(
					'required' => false,
					'type' => 'CategoryArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnmappedCategoryArray' =>
				array(
					'required' => false,
					'type' => 'CategoryArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeSystemVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SiteWideCharacteristicSets' =>
				array(
					'required' => false,
					'type' => 'SiteWideCharacteristicsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return CategoryArrayType
	 **/
	function getMappedCategoryArray()
	{
		return $this->MappedCategoryArray;
	}

	/**
	 * @return void
	 **/
	function setMappedCategoryArray($value)
	{
		$this->MappedCategoryArray = $value;
	}

	/**
	 * @return CategoryArrayType
	 **/
	function getUnmappedCategoryArray()
	{
		return $this->UnmappedCategoryArray;
	}

	/**
	 * @return void
	 **/
	function setUnmappedCategoryArray($value)
	{
		$this->UnmappedCategoryArray = $value;
	}

	/**
	 * @return string
	 **/
	function getAttributeSystemVersion()
	{
		return $this->AttributeSystemVersion;
	}

	/**
	 * @return void
	 **/
	function setAttributeSystemVersion($value)
	{
		$this->AttributeSystemVersion = $value;
	}

	/**
	 * @return SiteWideCharacteristicsType
	 * @param integer $index 
	 **/
	function getSiteWideCharacteristicSets($index = null)
	{
		if ($index !== null)
		{
			return $this->SiteWideCharacteristicSets[$index];
		}
		else
		{
			return $this->SiteWideCharacteristicSets;
		}
	}

	/**
	 * @return void
	 * @param SiteWideCharacteristicsType $value
	 * @param integer $index 
	 **/
	function setSiteWideCharacteristicSets($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SiteWideCharacteristicSets[$index] = $value;
		}
		else
		{
			$this->SiteWideCharacteristicSets= $value;
		}
	}

	/**
	 * @return void
	 * @param SiteWideCharacteristicsType $value
	 **/
	function addSiteWideCharacteristicSets($value)
	{
		$this->SiteWideCharacteristicSets[] = $value;
	}

}
?>
