<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Container of token and user reply.
  * 
 **/

class BotBlockRequestType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $BotBlockToken;

	/**
	* @var string
	**/
	protected $BotBlockUserInput;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BotBlockRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BotBlockToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BotBlockUserInput' =>
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
	function getBotBlockToken()
	{
		return $this->BotBlockToken;
	}

	/**
	 * @return void
	 **/
	function setBotBlockToken($value)
	{
		$this->BotBlockToken = $value;
	}

	/**
	 * @return string
	 **/
	function getBotBlockUserInput()
	{
		return $this->BotBlockUserInput;
	}

	/**
	 * @return void
	 **/
	function setBotBlockUserInput($value)
	{
		$this->BotBlockUserInput = $value;
	}

}
?>
