<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreColorSchemeType.php';

/**
  * Store theme.
  * 
 **/

class StoreThemeType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $ThemeID;

	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var StoreColorSchemeType
	**/
	protected $ColorScheme;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreThemeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ThemeID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ColorScheme' =>
				array(
					'required' => false,
					'type' => 'StoreColorSchemeType',
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
	 * @return int
	 **/
	function getThemeID()
	{
		return $this->ThemeID;
	}

	/**
	 * @return void
	 **/
	function setThemeID($value)
	{
		$this->ThemeID = $value;
	}

	/**
	 * @return string
	 **/
	function getName()
	{
		return $this->Name;
	}

	/**
	 * @return void
	 **/
	function setName($value)
	{
		$this->Name = $value;
	}

	/**
	 * @return StoreColorSchemeType
	 **/
	function getColorScheme()
	{
		return $this->ColorScheme;
	}

	/**
	 * @return void
	 **/
	function setColorScheme($value)
	{
		$this->ColorScheme = $value;
	}

}
?>
