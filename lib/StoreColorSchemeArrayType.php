<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreColorSchemeType.php';

/**
  * Set of eBay Store color schemes.
  * 
 **/

class StoreColorSchemeArrayType extends EbatNs_ComplexType
{
	/**
	* @var StoreColorSchemeType
	**/
	protected $ColorScheme;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreColorSchemeArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ColorScheme' =>
				array(
					'required' => false,
					'type' => 'StoreColorSchemeType',
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
	 * @return StoreColorSchemeType
	 * @param integer $index 
	 **/
	function getColorScheme($index = null)
	{
		if ($index !== null)
		{
			return $this->ColorScheme[$index];
		}
		else
		{
			return $this->ColorScheme;
		}
	}

	/**
	 * @return void
	 * @param StoreColorSchemeType $value
	 * @param integer $index 
	 **/
	function setColorScheme($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ColorScheme[$index] = $value;
		}
		else
		{
			$this->ColorScheme= $value;
		}
	}

	/**
	 * @return void
	 * @param StoreColorSchemeType $value
	 **/
	function addColorScheme($value)
	{
		$this->ColorScheme[] = $value;
	}

}
?>
