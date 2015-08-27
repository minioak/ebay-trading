<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'OfferType.php';

/**
  * Container for a list of offers. May contain zero, one, or multiple
  * OfferType objects, each of which represents one offer extended by
  * a user on a listing.
  * 
 **/

class CancelOfferType extends EbatNs_ComplexType
{
	/**
	* @var OfferType
	**/
	protected $Offer;

	/**
	* @var string
	**/
	protected $Explanation;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CancelOfferType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Offer' =>
				array(
					'required' => false,
					'type' => 'OfferType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Explanation' =>
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
	 * @return OfferType
	 **/
	function getOffer()
	{
		return $this->Offer;
	}

	/**
	 * @return void
	 **/
	function setOffer($value)
	{
		$this->Offer = $value;
	}

	/**
	 * @return string
	 **/
	function getExplanation()
	{
		return $this->Explanation;
	}

	/**
	 * @return void
	 **/
	function setExplanation($value)
	{
		$this->Explanation = $value;
	}

}
?>
