<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Validates the user response to a <b class="con">GetChallengeToken</b>
  * botblock challenge.
  * 
 **/

class ValidateChallengeInputRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $ChallengeToken;

	/**
	* @var string
	**/
	protected $UserInput;

	/**
	* @var boolean
	**/
	protected $KeepTokenValid;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ValidateChallengeInputRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ChallengeToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserInput' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'KeepTokenValid' =>
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
	function getChallengeToken()
	{
		return $this->ChallengeToken;
	}

	/**
	 * @return void
	 **/
	function setChallengeToken($value)
	{
		$this->ChallengeToken = $value;
	}

	/**
	 * @return string
	 **/
	function getUserInput()
	{
		return $this->UserInput;
	}

	/**
	 * @return void
	 **/
	function setUserInput($value)
	{
		$this->UserInput = $value;
	}

	/**
	 * @return boolean
	 **/
	function getKeepTokenValid()
	{
		return $this->KeepTokenValid;
	}

	/**
	 * @return void
	 **/
	function setKeepTokenValid($value)
	{
		$this->KeepTokenValid = $value;
	}

}
?>
