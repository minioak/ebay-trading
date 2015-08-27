<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
  * Retrieves data for a specific, active Want It Now post identified by a post ID.
  * The response includes the following fields: CategoryID, Description, PostID,
  * Site, StartTime, ResponseCount, and Title. Although GetWantItNowSearchResults
  * returns most of this information, only GetWantItNowPost returns Description for
  * a post.
  * 
 **/

class GetWantItNowPostRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $PostID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetWantItNowPostRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
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
