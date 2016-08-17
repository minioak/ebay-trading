<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'NameValueListArrayType.php';

/**
  * This type is used by the <b>CategorySpecific</b> container in the <b>GetCategorySpecifics</b> request. The  <b>CategorySpecific</b> container is used when a seller wants to pass in customized Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific.
  * 
 **/

class CategoryItemSpecificsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var NameValueListArrayType
	**/
	protected $ItemSpecifics;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CategoryItemSpecificsType', 'urn:ebay:apis:eBLBaseComponents');
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
				'ItemSpecifics' =>
				array(
					'required' => false,
					'type' => 'NameValueListArrayType',
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
	 * @return NameValueListArrayType
	 **/
	function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}

	/**
	 * @return void
	 **/
	function setItemSpecifics($value)
	{
		$this->ItemSpecifics = $value;
	}

}
?>
