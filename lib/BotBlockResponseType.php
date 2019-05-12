<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used by the <b>BotBlock</b> container that is returned in the <b>PlaceOffer</b> call response if eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. The authentication token and URL values that are returned in the <b>PlaceOffer</b> call response are then passed in the <b>BotBlock</b> container of a subsequent <b>PlaceOffer</b> call.
  * 
 **/

class BotBlockResponseType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $BotBlockToken;

	/**
	* @var string
	**/
	protected $BotBlockUrl;

	/**
	* @var string
	**/
	protected $BotBlockAudioUrl;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BotBlockResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
				'BotBlockUrl' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BotBlockAudioUrl' =>
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
	function getBotBlockUrl()
	{
		return $this->BotBlockUrl;
	}

	/**
	 * @return void
	 **/
	function setBotBlockUrl($value)
	{
		$this->BotBlockUrl = $value;
	}

	/**
	 * @return string
	 **/
	function getBotBlockAudioUrl()
	{
		return $this->BotBlockAudioUrl;
	}

	/**
	 * @return void
	 **/
	function setBotBlockAudioUrl($value)
	{
		$this->BotBlockAudioUrl = $value;
	}

}
?>
