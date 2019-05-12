<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type used by the <b>BotBlock</b> container of the <b>PlaceOffer</b> call request. The <b>BotBlock</b> container is conditionally required in a <b>PlaceOffer</b> call request if the previous <b>PlaceOffer</b> call resulted in a <b>BotBlock</b> container being returned in the response. The <b>BotBlock</b> container in the response will contain an authentication token and a URL that will need to be passed into the <b>BotBlock</b> container of the <b>PlaceOffer</b> call request in the subsequent call.
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
