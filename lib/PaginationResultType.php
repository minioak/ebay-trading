<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Shows the pagination of data returned by call requests.
  * Pagination of returned data is not needed nor
  * supported for every Trading API call. See the documentation for
  * individual calls to determine whether pagination is
  * supported, required, or desirable.
  * 
 **/

class PaginationResultType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $TotalNumberOfPages;

	/**
	* @var int
	**/
	protected $TotalNumberOfEntries;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaginationResultType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TotalNumberOfPages' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalNumberOfEntries' =>
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
	function getTotalNumberOfPages()
	{
		return $this->TotalNumberOfPages;
	}

	/**
	 * @return void
	 **/
	function setTotalNumberOfPages($value)
	{
		$this->TotalNumberOfPages = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalNumberOfEntries()
	{
		return $this->TotalNumberOfEntries;
	}

	/**
	 * @return void
	 **/
	function setTotalNumberOfEntries($value)
	{
		$this->TotalNumberOfEntries = $value;
	}

}
?>
