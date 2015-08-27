<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Retrieves the latest eBay category hierarchy for a given eBay site.
  * Information returned for each category includes the category name
  * and the unique ID for the category (unique within the eBay site for which
  * categories are retrieved). A category ID is a required input when you list most items.
  * 
 **/

class GetCategoriesRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $CategorySiteID;

	/**
	* @var string
	**/
	protected $CategoryParent;

	/**
	* @var int
	**/
	protected $LevelLimit;

	/**
	* @var boolean
	**/
	protected $ViewAllNodes;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetCategoriesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CategorySiteID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryParent' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return string
	 **/
	function getCategorySiteID()
	{
		return $this->CategorySiteID;
	}

	/**
	 * @return void
	 **/
	function setCategorySiteID($value)
	{
		$this->CategorySiteID = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getCategoryParent($index = null)
	{
		if ($index !== null)
		{
			return $this->CategoryParent[$index];
		}
		else
		{
			return $this->CategoryParent;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setCategoryParent($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CategoryParent[$index] = $value;
		}
		else
		{
			$this->CategoryParent= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addCategoryParent($value)
	{
		$this->CategoryParent[] = $value;
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

}
?>
