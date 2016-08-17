<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'FeedbackRatingDetailCodeType.php';

/** 
  * Applicable to sites that support the Detailed Seller Ratings feature.
  * The ItemRatingDetailsType contains detailed seller ratings for an order line item in one area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers. 
  * 
 **/

class ItemRatingDetailsType extends EbatNs_ComplexType
{
	/**
	* @var FeedbackRatingDetailCodeType
	**/
	protected $RatingDetail;

	/**
	* @var int
	**/
	protected $Rating;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemRatingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RatingDetail' =>
				array(
					'required' => false,
					'type' => 'FeedbackRatingDetailCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Rating' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return FeedbackRatingDetailCodeType
	 **/
	function getRatingDetail()
	{
		return $this->RatingDetail;
	}

	/**
	 * @return void
	 **/
	function setRatingDetail($value)
	{
		$this->RatingDetail = $value;
	}

	/**
	 * @return int
	 **/
	function getRating()
	{
		return $this->Rating;
	}

	/**
	 * @return void
	 **/
	function setRating($value)
	{
		$this->Rating = $value;
	}

}
?>
