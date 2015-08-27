<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BestOfferType.php';

/** 
  * An array of one or more Best Offers. This type is used in the responses of the  <b>GetBestOffers</b> and <b>RespondToBestOffer</b> calls. 
  * 
 **/

class BestOfferArrayType extends EbatNs_ComplexType
{
	/**
	* @var BestOfferType
	**/
	protected $BestOffer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BestOfferArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BestOffer' =>
				array(
					'required' => false,
					'type' => 'BestOfferType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return BestOfferType
	 * @param integer $index 
	 **/
	function getBestOffer($index = null)
	{
		if ($index !== null)
		{
			return $this->BestOffer[$index];
		}
		else
		{
			return $this->BestOffer;
		}
	}

	/**
	 * @return void
	 * @param BestOfferType $value
	 * @param integer $index 
	 **/
	function setBestOffer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->BestOffer[$index] = $value;
		}
		else
		{
			$this->BestOffer= $value;
		}
	}

	/**
	 * @return void
	 * @param BestOfferType $value
	 **/
	function addBestOffer($value)
	{
		$this->BestOffer[] = $value;
	}

}
?>
