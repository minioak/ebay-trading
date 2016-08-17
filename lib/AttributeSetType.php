<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AttributeType.php';

/**
  * This type is deprecated.
  * 
 **/

class AttributeSetType extends EbatNs_ComplexType
{
	/**
	* @var AttributeType
	**/
	protected $Attribute;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AttributeSetType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Attribute' =>
				array(
					'required' => false,
					'type' => 'AttributeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'attributeSetID' =>
			array(
				'name' => ' attributeSetID',
				'type' => 'int',
				'use' => 'optional'
			),
			'attributeSetVersion' =>
			array(
				'name' => ' attributeSetVersion',
				'type' => 'string',
				'use' => 'optional'
			)));
	}

	/**
	 * @return AttributeType
	 * @param integer $index 
	 **/
	function getAttribute($index = null)
	{
		if ($index !== null)
		{
			return $this->Attribute[$index];
		}
		else
		{
			return $this->Attribute;
		}
	}

	/**
	 * @return void
	 * @param AttributeType $value
	 * @param integer $index 
	 **/
	function setAttribute($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Attribute[$index] = $value;
		}
		else
		{
			$this->Attribute= $value;
		}
	}

	/**
	 * @return void
	 * @param AttributeType $value
	 **/
	function addAttribute($value)
	{
		$this->Attribute[] = $value;
	}



}
?>
