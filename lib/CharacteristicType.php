<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'LabelType.php';
require_once 'SortOrderCodeType.php';
require_once 'ValType.php';

/**
  * This type is deprecated.
  * 
 **/

class CharacteristicType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $AttributeID;

	/**
	* @var string
	**/
	protected $DateFormat;

	/**
	* @var string
	**/
	protected $DisplaySequence;

	/**
	* @var string
	**/
	protected $DisplayUOM;

	/**
	* @var LabelType
	**/
	protected $Label;

	/**
	* @var SortOrderCodeType
	**/
	protected $SortOrder;

	/**
	* @var ValType
	**/
	protected $ValueList;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharacteristicType', 'urn:ebay:apis:eBLBaseComponents');
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
				'DateFormat' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplaySequence' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayUOM' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Label' =>
				array(
					'required' => false,
					'type' => 'LabelType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SortOrder' =>
				array(
					'required' => false,
					'type' => 'SortOrderCodeType',
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
	 * @return string
	 **/
	function getDateFormat()
	{
		return $this->DateFormat;
	}

	/**
	 * @return void
	 **/
	function setDateFormat($value)
	{
		$this->DateFormat = $value;
	}

	/**
	 * @return string
	 **/
	function getDisplaySequence()
	{
		return $this->DisplaySequence;
	}

	/**
	 * @return void
	 **/
	function setDisplaySequence($value)
	{
		$this->DisplaySequence = $value;
	}

	/**
	 * @return string
	 **/
	function getDisplayUOM()
	{
		return $this->DisplayUOM;
	}

	/**
	 * @return void
	 **/
	function setDisplayUOM($value)
	{
		$this->DisplayUOM = $value;
	}

	/**
	 * @return LabelType
	 **/
	function getLabel()
	{
		return $this->Label;
	}

	/**
	 * @return void
	 **/
	function setLabel($value)
	{
		$this->Label = $value;
	}

	/**
	 * @return SortOrderCodeType
	 **/
	function getSortOrder()
	{
		return $this->SortOrder;
	}

	/**
	 * @return void
	 **/
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
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
