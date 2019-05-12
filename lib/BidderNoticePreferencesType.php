<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  *   This type is used by the <b>BidderNoticePreferences</b> container, which consists of the seller's preference for receiving contact information for unsuccessful bidders in auction listings.
  * 
 **/

class BidderNoticePreferencesType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $UnsuccessfulBidderNoticeIncludeMyItems;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BidderNoticePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'UnsuccessfulBidderNoticeIncludeMyItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return boolean
	 **/
	function getUnsuccessfulBidderNoticeIncludeMyItems()
	{
		return $this->UnsuccessfulBidderNoticeIncludeMyItems;
	}

	/**
	 * @return void
	 **/
	function setUnsuccessfulBidderNoticeIncludeMyItems($value)
	{
		$this->UnsuccessfulBidderNoticeIncludeMyItems = $value;
	}

}
?>
