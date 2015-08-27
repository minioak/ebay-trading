<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreThemeType.php';
require_once 'StoreColorSchemeArrayType.php';

/**
  * Set of Store themes.
  * 
 **/

class StoreThemeArrayType extends EbatNs_ComplexType
{
	/**
	* @var StoreThemeType
	**/
	protected $Theme;

	/**
	* @var StoreColorSchemeArrayType
	**/
	protected $GenericColorSchemeArray;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreThemeArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Theme' =>
				array(
					'required' => false,
					'type' => 'StoreThemeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'GenericColorSchemeArray' =>
				array(
					'required' => false,
					'type' => 'StoreColorSchemeArrayType',
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
	 * @return StoreThemeType
	 * @param integer $index 
	 **/
	function getTheme($index = null)
	{
		if ($index !== null)
		{
			return $this->Theme[$index];
		}
		else
		{
			return $this->Theme;
		}
	}

	/**
	 * @return void
	 * @param StoreThemeType $value
	 * @param integer $index 
	 **/
	function setTheme($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Theme[$index] = $value;
		}
		else
		{
			$this->Theme= $value;
		}
	}

	/**
	 * @return void
	 * @param StoreThemeType $value
	 **/
	function addTheme($value)
	{
		$this->Theme[] = $value;
	}

	/**
	 * @return StoreColorSchemeArrayType
	 **/
	function getGenericColorSchemeArray()
	{
		return $this->GenericColorSchemeArray;
	}

	/**
	 * @return void
	 **/
	function setGenericColorSchemeArray($value)
	{
		$this->GenericColorSchemeArray = $value;
	}

}
?>
