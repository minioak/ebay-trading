<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * A variable that contains specific information about the context of this error.
  * For example, if you pass in an attribute set ID that does not match
  * the specified category, the attribute set ID might be returned as an error parameter.
  * Use error parameters to flag fields that users need to correct.
  * Also use error parameters to distinguish between errors when multiple
  * errors are returned.
  * 
 **/

class ErrorParameterType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Value;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ErrorParameterType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Value' =>
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
			'ParamID' =>
			array(
				'name' => ' ParamID',
				'type' => 'string',
				'use' => 'optional'
			)));
	}

	/**
	 * @return string
	 **/
	function getValue()
	{
		return $this->Value;
	}

	/**
	 * @return void
	 **/
	function setValue($value)
	{
		$this->Value = $value;
	}


}
?>
