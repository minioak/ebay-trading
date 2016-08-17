<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DateSpecifierCodeType.php';
require_once 'RangeCodeType.php';
require_once 'ValType.php';

/**
  * This type is deprecated.  
  * 
 **/

class SearchAttributesType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $AttributeID;

	/**
	* @var DateSpecifierCodeType
	**/
	protected $DateSpecifier;

	/**
	* @var RangeCodeType
	**/
	protected $RangeSpecifier;

	/**
	* @var ValType
	**/
	protected $ValueList;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SearchAttributesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AttributeID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DateSpecifier' =>
				array(
					'required' => false,
					'type' => 'DateSpecifierCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RangeSpecifier' =>
				array(
					'required' => false,
					'type' => 'RangeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ValueList' =>
				array(
					'required' => false,
					'type' => 'ValType',
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
	 * @return int
	 **/
	function getAttributeID()
	{
		return $this->AttributeID;
	}

	/**
	 * @return void
	 **/
	function setAttributeID($value)
	{
		$this->AttributeID = $value;
	}

	/**
	 * @return DateSpecifierCodeType
	 **/
	function getDateSpecifier()
	{
		return $this->DateSpecifier;
	}

	/**
	 * @return void
	 **/
	function setDateSpecifier($value)
	{
		$this->DateSpecifier = $value;
	}

	/**
	 * @return RangeCodeType
	 **/
	function getRangeSpecifier()
	{
		return $this->RangeSpecifier;
	}

	/**
	 * @return void
	 **/
	function setRangeSpecifier($value)
	{
		$this->RangeSpecifier = $value;
	}

	/**
	 * @return ValType
	 * @param integer $index 
	 **/
	function getValueList($index = null)
	{
		if ($index !== null)
		{
			return $this->ValueList[$index];
		}
		else
		{
			return $this->ValueList;
		}
	}

	/**
	 * @return void
	 * @param ValType $value
	 * @param integer $index 
	 **/
	function setValueList($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ValueList[$index] = $value;
		}
		else
		{
			$this->ValueList= $value;
		}
	}

	/**
	 * @return void
	 * @param ValType $value
	 **/
	function addValueList($value)
	{
		$this->ValueList[] = $value;
	}

}
?>
