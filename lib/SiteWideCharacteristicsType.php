<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharacteristicsSetType.php';

/**
  * This type is deprecated.
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
