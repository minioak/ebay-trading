<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharacteristicType.php';

/**
  * This type is deprecated.
  * 
 **/

class CharacteristicsSetType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var int
	**/
	protected $AttributeSetID;

	/**
	* @var string
	**/
	protected $AttributeSetVersion;

	/**
	* @var CharacteristicType
	**/
	protected $Characteristics;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharacteristicsSetType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeSetID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeSetVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Characteristics' =>
				array(
					'required' => false,
					'type' => 'CharacteristicType',
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
	 * @return int
	 **/
	function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}

	/**
	 * @return void
	 **/
	function setAttributeSetID($value)
	{
		$this->AttributeSetID = $value;
	}

	/**
	 * @return string
	 **/
	function getAttributeSetVersion()
	{
		return $this->AttributeSetVersion;
	}

	/**
	 * @return void
	 **/
	function setAttributeSetVersion($value)
	{
		$this->AttributeSetVersion = $value;
	}

	/**
	 * @return CharacteristicType
	 * @param integer $index 
	 **/
	function getCharacteristics($index = null)
	{
		if ($index !== null)
		{
			return $this->Characteristics[$index];
		}
		else
		{
			return $this->Characteristics;
		}
	}

	/**
	 * @return void
	 * @param CharacteristicType $value
	 * @param integer $index 
	 **/
	function setCharacteristics($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Characteristics[$index] = $value;
		}
		else
		{
			$this->Characteristics= $value;
		}
	}

	/**
	 * @return void
	 * @param CharacteristicType $value
	 **/
	function addCharacteristics($value)
	{
		$this->Characteristics[] = $value;
	}

}
?>
