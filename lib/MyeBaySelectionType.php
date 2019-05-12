<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SortOrderCodeType.php';

/**
  * Specifies how to return the result list for My eBay features such as saved
  * searches, favorite sellers, and second chance offers.
  * 
 **/

class MyeBaySelectionType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $Include;

	/**
	* @var boolean
	**/
	protected $IncludeItemCount;

	/**
	* @var boolean
	**/
	protected $IncludeFavoriteSearcheCount;

	/**
	* @var boolean
	**/
	protected $IncludeFavoriteSellerCount;

	/**
	* @var SortOrderCodeType
	**/
	protected $Sort;

	/**
	* @var int
	**/
	protected $MaxResults;

	/**
	* @var string
	**/
	protected $UserDefinedListName;

	/**
	* @var boolean
	**/
	protected $IncludeListContents;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyeBaySelectionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Include' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeItemCount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeFavoriteSearcheCount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeFavoriteSellerCount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Sort' =>
				array(
					'required' => false,
					'type' => 'SortOrderCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxResults' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserDefinedListName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeListContents' =>
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
	function getInclude()
	{
		return $this->Include;
	}

	/**
	 * @return void
	 **/
	function setInclude($value)
	{
		$this->Include = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeItemCount()
	{
		return $this->IncludeItemCount;
	}

	/**
	 * @return void
	 **/
	function setIncludeItemCount($value)
	{
		$this->IncludeItemCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeFavoriteSearcheCount()
	{
		return $this->IncludeFavoriteSearcheCount;
	}

	/**
	 * @return void
	 **/
	function setIncludeFavoriteSearcheCount($value)
	{
		$this->IncludeFavoriteSearcheCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeFavoriteSellerCount()
	{
		return $this->IncludeFavoriteSellerCount;
	}

	/**
	 * @return void
	 **/
	function setIncludeFavoriteSellerCount($value)
	{
		$this->IncludeFavoriteSellerCount = $value;
	}

	/**
	 * @return SortOrderCodeType
	 **/
	function getSort()
	{
		return $this->Sort;
	}

	/**
	 * @return void
	 **/
	function setSort($value)
	{
		$this->Sort = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxResults()
	{
		return $this->MaxResults;
	}

	/**
	 * @return void
	 **/
	function setMaxResults($value)
	{
		$this->MaxResults = $value;
	}

	/**
	 * @return string
	 **/
	function getUserDefinedListName()
	{
		return $this->UserDefinedListName;
	}

	/**
	 * @return void
	 **/
	function setUserDefinedListName($value)
	{
		$this->UserDefinedListName = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeListContents()
	{
		return $this->IncludeListContents;
	}

	/**
	 * @return void
	 **/
	function setIncludeListContents($value)
	{
		$this->IncludeListContents = $value;
	}

}
?>
