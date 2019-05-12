<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ModifyNameType.php';

/**
  * A list of one or more ModifyName containers. Each ModifyName container has Name and NewName elements.
  * 
 **/

class ModifyNameArrayType extends EbatNs_ComplexType
{
	/**
	* @var ModifyNameType
	**/
	protected $ModifyName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ModifyNameArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ModifyName' =>
				array(
					'required' => false,
					'type' => 'ModifyNameType',
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
	 * @return ModifyNameType
	 * @param integer $index 
	 **/
	function getModifyName($index = null)
	{
		if ($index !== null)
		{
			return $this->ModifyName[$index];
		}
		else
		{
			return $this->ModifyName;
		}
	}

	/**
	 * @return void
	 * @param ModifyNameType $value
	 * @param integer $index 
	 **/
	function setModifyName($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ModifyName[$index] = $value;
		}
		else
		{
			$this->ModifyName= $value;
		}
	}

	/**
	 * @return void
	 * @param ModifyNameType $value
	 **/
	function addModifyName($value)
	{
		$this->ModifyName[] = $value;
	}

}
?>
