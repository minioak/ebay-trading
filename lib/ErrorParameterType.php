<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used by the <b>ErrorParameters</b> container if one or more errors or warnings occur with the call, and if a specific request parameter has been pinpointed as the reason why the error or warning was triggered.
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
