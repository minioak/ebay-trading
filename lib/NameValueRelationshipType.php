<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Information about a parent name-value pair. Currently used to indicate
  * relationships betweenItem Specifics.
  * 
 **/

class NameValueRelationshipType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ParentName;

	/**
	* @var string
	**/
	protected $ParentValue;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NameValueRelationshipType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ParentName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ParentValue' =>
				array(
					'required' => false,
					'type' => 'string',
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
	function getParentName()
	{
		return $this->ParentName;
	}

	/**
	 * @return void
	 **/
	function setParentName($value)
	{
		$this->ParentName = $value;
	}

	/**
	 * @return string
	 **/
	function getParentValue()
	{
		return $this->ParentValue;
	}

	/**
	 * @return void
	 **/
	function setParentValue($value)
	{
		$this->ParentValue = $value;
	}

}
?>
