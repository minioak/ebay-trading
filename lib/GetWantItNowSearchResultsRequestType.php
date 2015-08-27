<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'PaginationType.php';

/**
  * Retrieves a list of active Want It Now posts that match specified keywords
  * and/or a specific category ID. The response contains the following data:
  * CategoryID, PostID, StartTime, ResponseCount, Site, and Title. To get the post
  * description (Description), you must use GetWantItNowPost to retrieve individual
  * posts.
  * 
 **/

class GetWantItNowSearchResultsRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var string
	**/
	protected $Query;

	/**
	* @var boolean
	**/
	protected $SearchInDescription;

	/**
	* @var boolean
	**/
	protected $SearchWorldwide;

	/**
	* @var PaginationType
	**/
	protected $Pagination;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetWantItNowSearchResultsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Query' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchInDescription' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchWorldwide' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
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
	 * @return string
	 **/
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return string
	 **/
	function getQuery()
	{
		return $this->Query;
	}

	/**
	 * @return void
	 **/
	function setQuery($value)
	{
		$this->Query = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSearchInDescription()
	{
		return $this->SearchInDescription;
	}

	/**
	 * @return void
	 **/
	function setSearchInDescription($value)
	{
		$this->SearchInDescription = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSearchWorldwide()
	{
		return $this->SearchWorldwide;
	}

	/**
	 * @return void
	 **/
	function setSearchWorldwide($value)
	{
		$this->SearchWorldwide = $value;
	}

	/**
	 * @return PaginationType
	 **/
	function getPagination()
	{
		return $this->Pagination;
	}

	/**
	 * @return void
	 **/
	function setPagination($value)
	{
		$this->Pagination = $value;
	}

}
?>
