<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated as the <b>GetProduct*</b> calls are no longer available.
  * 
  * 
 **/

class CharacteristicSetIDsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharacteristicSetIDsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ID' =>
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
	function getID($index = null)
	{
		if ($index !== null)
		{
			return $this->ID[$index];
		}
		else
		{
			return $this->ID;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ID[$index] = $value;
		}
		else
		{
			$this->ID= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addID($value)
	{
		$this->ID[] = $value;
	}

}
?>
