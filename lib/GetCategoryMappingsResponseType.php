<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'CategoryMappingType.php';

/**
  * Returns a map of old category IDs and corresponding active category IDs defined
  * for the site to which the request was sent. Typically used to update an older item
  * definition with a new category ID prior to listing the item.
  * 
 **/

class GetCategoryMappingsResponseType extends AbstractResponseType
{
	/**
	* @var CategoryMappingType
	**/
	protected $CategoryMapping;

	/**
	* @var string
	**/
	protected $CategoryVersion;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetCategoryMappingsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CategoryMapping' =>
				array(
					'required' => false,
					'type' => 'CategoryMappingType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'CategoryVersion' =>
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
	 * @return CategoryMappingType
	 * @param integer $index 
	 **/
	function getCategoryMapping($index = null)
	{
		if ($index !== null)
		{
			return $this->CategoryMapping[$index];
		}
		else
		{
			return $this->CategoryMapping;
		}
	}

	/**
	 * @return void
	 * @param CategoryMappingType $value
	 * @param integer $index 
	 **/
	function setCategoryMapping($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CategoryMapping[$index] = $value;
		}
		else
		{
			$this->CategoryMapping= $value;
		}
	}

	/**
	 * @return void
	 * @param CategoryMappingType $value
	 **/
	function addCategoryMapping($value)
	{
		$this->CategoryMapping[] = $value;
	}

	/**
	 * @return string
	 **/
	function getCategoryVersion()
	{
		return $this->CategoryVersion;
	}

	/**
	 * @return void
	 **/
	function setCategoryVersion($value)
	{
		$this->CategoryVersion = $value;
	}

}
?>
