<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'BestOfferArrayType.php';

/**
  * Contains a list of BestOffers that were either accepted or declined.
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
