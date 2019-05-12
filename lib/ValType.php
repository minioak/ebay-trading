<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * The type the defines the fields for Half.com item attributes. This is used only for Half.com items.
  * 
 **/

class ValType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ValueLiteral;

	/**
	* @var string
	**/
	protected $SuggestedValueLiteral;

	/**
	* @var int
	**/
	protected $ValueID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ValType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ValueLiteral' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SuggestedValueLiteral' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ValueID' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return string
	 **/
	function getValueLiteral()
	{
		return $this->ValueLiteral;
	}

	/**
	 * @return void
	 **/
	function setValueLiteral($value)
	{
		$this->ValueLiteral = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getSuggestedValueLiteral($index = null)
	{
		if ($index !== null)
		{
			return $this->SuggestedValueLiteral[$index];
		}
		else
		{
			return $this->SuggestedValueLiteral;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setSuggestedValueLiteral($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SuggestedValueLiteral[$index] = $value;
		}
		else
		{
			$this->SuggestedValueLiteral= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addSuggestedValueLiteral($value)
	{
		$this->SuggestedValueLiteral[] = $value;
	}

	/**
	 * @return int
	 **/
	function getValueID()
	{
		return $this->ValueID;
	}

	/**
	 * @return void
	 **/
	function setValueID($value)
	{
		$this->ValueID = $value;
	}

}
?>
