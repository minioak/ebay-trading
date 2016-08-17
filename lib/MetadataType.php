<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used by the <b>Metadata</b> container to provide price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items. 
  * 
 **/

class MetadataType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var string
	**/
	protected $Value;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MetadataType', 'urn:ebay:apis:eBLBaseComponents');
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
				'Value' =>
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
	 * @return string
	 * @param integer $index 
	 **/
	function getValue($index = null)
	{
		if ($index !== null)
		{
			return $this->Value[$index];
		}
		else
		{
			return $this->Value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setValue($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Value[$index] = $value;
		}
		else
		{
			$this->Value= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addValue($value)
	{
		$this->Value[] = $value;
	}

}
?>
