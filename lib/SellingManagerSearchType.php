<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerSearchTypeCodeType.php';

/**
  * For searches of Selling Manager listings, specifies search type, such as ProductID or BuyerUserID,
  * and search value.
  * 
 **/

class SellingManagerSearchType extends EbatNs_ComplexType
{
	/**
	* @var SellingManagerSearchTypeCodeType
	**/
	protected $SearchType;

	/**
	* @var string
	**/
	protected $SearchValue;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerSearchType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SearchType' =>
				array(
					'required' => false,
					'type' => 'SellingManagerSearchTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchValue' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return SellingManagerSearchTypeCodeType
	 **/
	function getSearchType()
	{
		return $this->SearchType;
	}

	/**
	 * @return void
	 **/
	function setSearchType($value)
	{
		$this->SearchType = $value;
	}

	/**
	 * @return string
	 **/
	function getSearchValue()
	{
		return $this->SearchValue;
	}

	/**
	 * @return void
	 **/
	function setSearchValue($value)
	{
		$this->SearchValue = $value;
	}

}
?>
