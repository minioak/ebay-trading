<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ASQPreferencesType.php';

/**
  * Enables a seller to add custom Ask Seller a Question (ASQ) subjects to their
  * Ask a Question page, or to reset any custom subjects to their default values.
  * 
 **/

class SetMessagePreferencesRequestType extends AbstractRequestType
{
	/**
	* @var ASQPreferencesType
	**/
	protected $ASQPreferences;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetMessagePreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ASQPreferences' =>
				array(
					'required' => false,
					'type' => 'ASQPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ASQPreferencesType
	 **/
	function getASQPreferences()
	{
		return $this->ASQPreferences;
	}

	/**
	 * @return void
	 **/
	function setASQPreferences($value)
	{
		$this->ASQPreferences = $value;
	}

}
?>
