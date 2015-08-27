<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'WantItNowPostArrayType.php';
require_once 'PaginationResultType.php';

/**
  * Response contains the Want It Now posts that have the specified keyword(s) in the
  * title and (optionally) the description.
  *  
 **/

class GetWantItNowSearchResultsResponseType extends AbstractResponseType
{
	/**
	* @var WantItNowPostArrayType
	**/
	protected $WantItNowPostArray;

	/**
	* @var boolean
	**/
	protected $HasMoreItems;

	/**
	* @var int
	**/
	protected $ItemsPerPage;

	/**
	* @var int
	**/
	protected $PageNumber;

	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetWantItNowSearchResultsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'WantItNowPostArray' =>
				array(
					'required' => false,
					'type' => 'WantItNowPostArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMoreItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemsPerPage' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PageNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
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
	 * @return WantItNowPostArrayType
	 **/
	function getWantItNowPostArray()
	{
		return $this->WantItNowPostArray;
	}

	/**
	 * @return void
	 **/
	function setWantItNowPostArray($value)
	{
		$this->WantItNowPostArray = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}

	/**
	 * @return void
	 **/
	function setHasMoreItems($value)
	{
		$this->HasMoreItems = $value;
	}

	/**
	 * @return int
	 **/
	function getItemsPerPage()
	{
		return $this->ItemsPerPage;
	}

	/**
	 * @return void
	 **/
	function setItemsPerPage($value)
	{
		$this->ItemsPerPage = $value;
	}

	/**
	 * @return int
	 **/
	function getPageNumber()
	{
		return $this->PageNumber;
	}

	/**
	 * @return void
	 **/
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}

	/**
	 * @return PaginationResultType
	 **/
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}

	/**
	 * @return void
	 **/
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}

}
?>
