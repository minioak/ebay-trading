<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AttributeSetType.php';

/**
  * This type is deprecated as "old" eBay attributes are no longer supported.
  * 
 **/

class AttributeSetArrayType extends EbatNs_ComplexType
{
	/**
	* @var AttributeSetType
	**/
	protected $AttributeSet;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AttributeSetArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AttributeSet' =>
				array(
					'required' => false,
					'type' => 'AttributeSetType',
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
	 * @return AttributeSetType
	 * @param integer $index 
	 **/
	function getAttributeSet($index = null)
	{
		if ($index !== null)
		{
			return $this->AttributeSet[$index];
		}
		else
		{
			return $this->AttributeSet;
		}
	}

	/**
	 * @return void
	 * @param AttributeSetType $value
	 * @param integer $index 
	 **/
	function setAttributeSet($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AttributeSet[$index] = $value;
		}
		else
		{
			$this->AttributeSet= $value;
		}
	}

	/**
	 * @return void
	 * @param AttributeSetType $value
	 **/
	function addAttributeSet($value)
	{
		$this->AttributeSet[] = $value;
	}

}
?>
