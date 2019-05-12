<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'FeatureIDCodeType.php';

/**
  * Returns information about the features that are applicable to different categories,
  * such as listing durations, shipping term requirements, and Best Offer support.
  * 
 **/

class GetCategoryFeaturesRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var int
	**/
	protected $LevelLimit;

	/**
	* @var boolean
	**/
	protected $ViewAllNodes;

	/**
	* @var FeatureIDCodeType
	**/
	protected $FeatureID;

	/**
	* @var boolean
	**/
	protected $AllFeaturesForCategory;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetCategoryFeaturesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LevelLimit' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ViewAllNodes' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeatureID' =>
				array(
					'required' => false,
					'type' => 'FeatureIDCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'AllFeaturesForCategory' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return int
	 **/
	function getLevelLimit()
	{
		return $this->LevelLimit;
	}

	/**
	 * @return void
	 **/
	function setLevelLimit($value)
	{
		$this->LevelLimit = $value;
	}

	/**
	 * @return boolean
	 **/
	function getViewAllNodes()
	{
		return $this->ViewAllNodes;
	}

	/**
	 * @return void
	 **/
	function setViewAllNodes($value)
	{
		$this->ViewAllNodes = $value;
	}

	/**
	 * @return FeatureIDCodeType
	 * @param integer $index 
	 **/
	function getFeatureID($index = null)
	{
		if ($index !== null)
		{
			return $this->FeatureID[$index];
		}
		else
		{
			return $this->FeatureID;
		}
	}

	/**
	 * @return void
	 * @param FeatureIDCodeType $value
	 * @param integer $index 
	 **/
	function setFeatureID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->FeatureID[$index] = $value;
		}
		else
		{
			$this->FeatureID= $value;
		}
	}

	/**
	 * @return void
	 * @param FeatureIDCodeType $value
	 **/
	function addFeatureID($value)
	{
		$this->FeatureID[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAllFeaturesForCategory()
	{
		return $this->AllFeaturesForCategory;
	}

	/**
	 * @return void
	 **/
	function setAllFeaturesForCategory($value)
	{
		$this->AllFeaturesForCategory = $value;
	}

}
?>
