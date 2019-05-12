<?php
/* Generated on 10.08.16 17:04 by globalsync
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

class OfferArrayType extends EbatNs_ComplexType
{
	/**
	* @var OfferType
	**/
	protected $Offer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('OfferArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Offer' =>
				array(
					'required' => false,
					'type' => 'OfferType',
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
	 * @return OfferType
	 * @param integer $index 
	 **/
	function getOffer($index = null)
	{
		if ($index !== null)
		{
			return $this->Offer[$index];
		}
		else
		{
			return $this->Offer;
		}
	}

	/**
	 * @return void
	 * @param OfferType $value
	 * @param integer $index 
	 **/
	function setOffer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Offer[$index] = $value;
		}
		else
		{
			$this->Offer= $value;
		}
	}

	/**
	 * @return void
	 * @param OfferType $value
	 **/
	function addOffer($value)
	{
		$this->Offer[] = $value;
	}

}
?>
