<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'BestOfferArrayType.php';

/**
  * This is the base response type for the <b>RespondToBestOffer</b> call. Along with the standard output fields for Trading API calls, this type contains a <b>RespondToBestOffer</b> container that indicates whether or not the action specified in the call request (accept, decline, or counter offer) was successful.
  * 
 **/

class RespondToBestOfferResponseType extends AbstractResponseType
{
	/**
	* @var BestOfferArrayType
	**/
	protected $RespondToBestOffer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RespondToBestOfferResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RespondToBestOffer' =>
				array(
					'required' => false,
					'type' => 'BestOfferArrayType',
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
	 * @return BestOfferArrayType
	 **/
	function getRespondToBestOffer()
	{
		return $this->RespondToBestOffer;
	}

	/**
	 * @return void
	 **/
	function setRespondToBestOffer($value)
	{
		$this->RespondToBestOffer = $value;
	}

}
?>
