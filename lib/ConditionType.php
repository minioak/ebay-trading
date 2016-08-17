<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>ConditionValues.Condition</b> container that is returned at the category level in the <b>GetCategoryFeatures</b> response if 'ConditionValues' is specified as a <b>FeatureID</b> value, or if no <b>FeatureID</b> values are specified. A <b>ConditionValues.Condition</b> container is returned for each supported item condition value for each eBay category returned in the response.
  * 
 **/

class ConditionType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $ID;

	/**
	* @var string
	**/
	protected $DisplayName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ConditionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayName' =>
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
	 * @return int
	 **/
	function getID()
	{
		return $this->ID;
	}

	/**
	 * @return void
	 **/
	function setID($value)
	{
		$this->ID = $value;
	}

	/**
	 * @return string
	 **/
	function getDisplayName()
	{
		return $this->DisplayName;
	}

	/**
	 * @return void
	 **/
	function setDisplayName($value)
	{
		$this->DisplayName = $value;
	}

}
?>
