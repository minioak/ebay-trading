<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharacteristicsSetType.php';

/**
  * A list of one or more characteristics sets mapped to the category, 
  * if any. Use this information when working with Item Specifics (Attributes) 
  * and Pre-filled Item Information (Catalogs) functionality.
  * 
 **/

class SiteWideCharacteristicsType extends EbatNs_ComplexType
{
	/**
	* @var CharacteristicsSetType
	**/
	protected $CharacteristicsSet;

	/**
	* @var string
	**/
	protected $ExcludeCategoryID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SiteWideCharacteristicsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CharacteristicsSet' =>
				array(
					'required' => false,
					'type' => 'CharacteristicsSetType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExcludeCategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return CharacteristicsSetType
	 **/
	function getCharacteristicsSet()
	{
		return $this->CharacteristicsSet;
	}

	/**
	 * @return void
	 **/
	function setCharacteristicsSet($value)
	{
		$this->CharacteristicsSet = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getExcludeCategoryID($index = null)
	{
		if ($index !== null)
		{
			return $this->ExcludeCategoryID[$index];
		}
		else
		{
			return $this->ExcludeCategoryID;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setExcludeCategoryID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ExcludeCategoryID[$index] = $value;
		}
		else
		{
			$this->ExcludeCategoryID= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addExcludeCategoryID($value)
	{
		$this->ExcludeCategoryID[] = $value;
	}

}
?>
