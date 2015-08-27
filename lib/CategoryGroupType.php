<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  *  Type defining the <b>CategoryGroup</b> container, which defines the category
  *  group to which the corresponding Business Policies profile will be applied, and a flag that
  *  indicates whether or not that Business Policies profile is the default for that category
  *  group. 
  * 
 **/

class CategoryGroupType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var boolean
	**/
	protected $IsDefault;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CategoryGroupType', 'urn:ebay:apis:eBLBaseComponents');
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
				'IsDefault' =>
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
	 * @return boolean
	 **/
	function getIsDefault()
	{
		return $this->IsDefault;
	}

	/**
	 * @return void
	 **/
	function setIsDefault($value)
	{
		$this->IsDefault = $value;
	}

}
?>
