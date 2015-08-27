<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'OfferArrayType.php';
require_once 'ListingStatusCodeType.php';

/**
  * This type is deprecated as the call is no longer available.
  * 
  * 
 **/

class GetHighBiddersResponseType extends AbstractResponseType
{
	/**
	* @var OfferArrayType
	**/
	protected $BidArray;

	/**
	* @var ListingStatusCodeType
	**/
	protected $ListingStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetHighBiddersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BidArray' =>
				array(
					'required' => false,
					'type' => 'OfferArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingStatus' =>
				array(
					'required' => false,
					'type' => 'ListingStatusCodeType',
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
	 * @return OfferArrayType
	 **/
	function getBidArray()
	{
		return $this->BidArray;
	}

	/**
	 * @return void
	 **/
	function setBidArray($value)
	{
		$this->BidArray = $value;
	}

	/**
	 * @return ListingStatusCodeType
	 **/
	function getListingStatus()
	{
		return $this->ListingStatus;
	}

	/**
	 * @return void
	 **/
	function setListingStatus($value)
	{
		$this->ListingStatus = $value;
	}

}
?>
