<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'WantItNowPostType.php';

/**
  * Contains the Want It Now post data returned by the call. The data for the
  * specified post listing is returned in a WantItNowPostType object.
  *  
 **/

class GetWantItNowPostResponseType extends AbstractResponseType
{
	/**
	* @var WantItNowPostType
	**/
	protected $WantItNowPost;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetWantItNowPostResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'WantItNowPost' =>
				array(
					'required' => false,
					'type' => 'WantItNowPostType',
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
	 * @return WantItNowPostType
	 **/
	function getWantItNowPost()
	{
		return $this->WantItNowPost;
	}

	/**
	 * @return void
	 **/
	function setWantItNowPost($value)
	{
		$this->WantItNowPost = $value;
	}

}
?>
