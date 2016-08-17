<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * This type is used by the <b>SuggestedBidValues</b> container that is returned if the buyer is attempting to bid on an auction item through the <b>PlaceOffer</b> call.
  * 
 **/

class SuggestedBidValueType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $BidValue;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SuggestedBidValueType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BidValue' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
	 * @return AmountType
	 * @param integer $index 
	 **/
	function getBidValue($index = null)
	{
		if ($index !== null)
		{
			return $this->BidValue[$index];
		}
		else
		{
			return $this->BidValue;
		}
	}

	/**
	 * @return void
	 * @param AmountType $value
	 * @param integer $index 
	 **/
	function setBidValue($value, $index = null)
	{
		if ($index !== null)
		{
			$this->BidValue[$index] = $value;
		}
		else
		{
			$this->BidValue= $value;
		}
	}

	/**
	 * @return void
	 * @param AmountType $value
	 **/
	function addBidValue($value)
	{
		$this->BidValue[] = $value;
	}

}
?>
