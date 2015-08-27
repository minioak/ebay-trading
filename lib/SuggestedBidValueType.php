<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * Container for next bid suggestion values for auction items.
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
