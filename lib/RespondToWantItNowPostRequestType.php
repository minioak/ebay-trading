<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
  * Enables a seller to respond to a Want It Now post with an item listed on the eBay
  * site. Responses appear on the Want It Now post page, with the item title, the
  * price of the item, the number of bids on the item, and the time left before the
  * listing ends. If the item has a picture, the picture is also included on the Want
  * It Now post page.
  * 
 **/

class RespondToWantItNowPostRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var ItemIDType
	**/
	protected $PostID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RespondToWantItNowPostRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PostID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
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
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return ItemIDType
	 **/
	function getPostID()
	{
		return $this->PostID;
	}

	/**
	 * @return void
	 **/
	function setPostID($value)
	{
		$this->PostID = $value;
	}

}
?>
