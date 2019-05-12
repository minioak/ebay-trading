<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Validate the user response to botblock challenge.
  * 
 **/

class ValidateChallengeInputResponseType extends AbstractResponseType
{
	/**
	* @var boolean
	**/
	protected $ValidToken;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ValidateChallengeInputResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ValidToken' =>
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
	 * @return boolean
	 **/
	function getValidToken()
	{
		return $this->ValidToken;
	}

	/**
	 * @return void
	 **/
	function setValidToken($value)
	{
		$this->ValidToken = $value;
	}

}
?>
