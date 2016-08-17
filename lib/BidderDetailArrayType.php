<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BidderDetailType.php';

/**
  * This type is deprecated.
  * 
 **/

class BidderDetailArrayType extends EbatNs_ComplexType
{
	/**
	* @var BidderDetailType
	**/
	protected $BidderDetail;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BidderDetailArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BidderDetail' =>
				array(
					'required' => false,
					'type' => 'BidderDetailType',
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
	 * @return BidderDetailType
	 * @param integer $index 
	 **/
	function getBidderDetail($index = null)
	{
		if ($index !== null)
		{
			return $this->BidderDetail[$index];
		}
		else
		{
			return $this->BidderDetail;
		}
	}

	/**
	 * @return void
	 * @param BidderDetailType $value
	 * @param integer $index 
	 **/
	function setBidderDetail($value, $index = null)
	{
		if ($index !== null)
		{
			$this->BidderDetail[$index] = $value;
		}
		else
		{
			$this->BidderDetail= $value;
		}
	}

	/**
	 * @return void
	 * @param BidderDetailType $value
	 **/
	function addBidderDetail($value)
	{
		$this->BidderDetail[] = $value;
	}

}
?>
