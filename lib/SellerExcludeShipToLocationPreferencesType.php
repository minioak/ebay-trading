<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type used by the <b>SellerExcludeShipToLocationPreferences</b> container which is returned in the <b>GetUserPreferences</b> response to indicate which geographical regions and/or individual countries the seller has added as excluded ship-to locations.
  * 
 **/

class SellerExcludeShipToLocationPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ExcludeShipToLocation;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerExcludeShipToLocationPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ExcludeShipToLocation' =>
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
	 * @return string
	 * @param integer $index 
	 **/
	function getExcludeShipToLocation($index = null)
	{
		if ($index !== null)
		{
			return $this->ExcludeShipToLocation[$index];
		}
		else
		{
			return $this->ExcludeShipToLocation;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setExcludeShipToLocation($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ExcludeShipToLocation[$index] = $value;
		}
		else
		{
			$this->ExcludeShipToLocation= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addExcludeShipToLocation($value)
	{
		$this->ExcludeShipToLocation[] = $value;
	}

}
?>
