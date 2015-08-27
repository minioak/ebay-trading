<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Contains data for controlling pagination in API requests.
  * Pagination of returned data is required for some calls and not
  * needed in or not supported for some calls. See the documentation
  * for individual calls to determine whether pagination is supported,
  * required, or desirable.
  * 
 **/

class PaginationType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $EntriesPerPage;

	/**
	* @var int
	**/
	protected $PageNumber;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaginationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EntriesPerPage' =>
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return int
	 **/
	function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
	}

	/**
	 * @return void
	 **/
	function setEntriesPerPage($value)
	{
		$this->EntriesPerPage = $value;
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

}
?>
