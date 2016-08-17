<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemCompatibilityType.php';

/**
  * A list of compatible applications specified as name and value pairs. Describes an
  * assembly with which a part is compatible (i.e., parts compatibility by application). For
  * example, to specify a part's compatibility with a vehicle, the name would map to
  * standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The
  * values would desribe the specific vehicle, such as a 2006 Honda Accord.
  * 
 **/

class ItemCompatibilityListType extends EbatNs_ComplexType
{
	/**
	* @var ItemCompatibilityType
	**/
	protected $Compatibility;

	/**
	* @var boolean
	**/
	protected $ReplaceAll;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemCompatibilityListType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Compatibility' =>
				array(
					'required' => false,
					'type' => 'ItemCompatibilityType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ReplaceAll' =>
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
	 * @return ItemCompatibilityType
	 * @param integer $index 
	 **/
	function getCompatibility($index = null)
	{
		if ($index !== null)
		{
			return $this->Compatibility[$index];
		}
		else
		{
			return $this->Compatibility;
		}
	}

	/**
	 * @return void
	 * @param ItemCompatibilityType $value
	 * @param integer $index 
	 **/
	function setCompatibility($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Compatibility[$index] = $value;
		}
		else
		{
			$this->Compatibility= $value;
		}
	}

	/**
	 * @return void
	 * @param ItemCompatibilityType $value
	 **/
	function addCompatibility($value)
	{
		$this->Compatibility[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getReplaceAll()
	{
		return $this->ReplaceAll;
	}

	/**
	 * @return void
	 **/
	function setReplaceAll($value)
	{
		$this->ReplaceAll = $value;
	}

}
?>
