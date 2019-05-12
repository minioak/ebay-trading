<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreColorType.php';
require_once 'StoreFontType.php';

/**
  * Store color scheme.
  * 
 **/

class StoreColorSchemeType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $ColorSchemeID;

	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var StoreColorType
	**/
	protected $Color;

	/**
	* @var StoreFontType
	**/
	protected $Font;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreColorSchemeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ColorSchemeID' =>
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
				'Color' =>
				array(
					'required' => false,
					'type' => 'StoreColorType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Font' =>
				array(
					'required' => false,
					'type' => 'StoreFontType',
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
	function getColorSchemeID()
	{
		return $this->ColorSchemeID;
	}

	/**
	 * @return void
	 **/
	function setColorSchemeID($value)
	{
		$this->ColorSchemeID = $value;
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
	 * @return StoreColorType
	 **/
	function getColor()
	{
		return $this->Color;
	}

	/**
	 * @return void
	 **/
	function setColor($value)
	{
		$this->Color = $value;
	}

	/**
	 * @return StoreFontType
	 **/
	function getFont()
	{
		return $this->Font;
	}

	/**
	 * @return void
	 **/
	function setFont($value)
	{
		$this->Font = $value;
	}

}
?>
