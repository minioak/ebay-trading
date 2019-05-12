<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'SellingManagerProductDetailsType.php';
require_once 'SellingManagerProductSpecificsType.php';

/**
  * The base request type of the <b>AddSellingManagerProduct</b> call, which is used to create a product or a group of product variations within the Selling Manager Pro system. Once a Selling Manager Pro product or production variation group is created, the product settings and product specifics can be transferred over into a Selling Manager Pro listing template with the <b>AddSellingManagerTemplate</b> call.
  * 
 **/

class AddSellingManagerProductRequestType extends AbstractRequestType
{
	/**
	* @var SellingManagerProductDetailsType
	**/
	protected $SellingManagerProductDetails;

	/**
	* @var long
	**/
	protected $FolderID;

	/**
	* @var SellingManagerProductSpecificsType
	**/
	protected $SellingManagerProductSpecifics;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddSellingManagerProductRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellingManagerProductDetails' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FolderID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellingManagerProductSpecifics' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductSpecificsType',
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
	 * @return SellingManagerProductDetailsType
	 **/
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}

	/**
	 * @return long
	 **/
	function getFolderID()
	{
		return $this->FolderID;
	}

	/**
	 * @return void
	 **/
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}

	/**
	 * @return SellingManagerProductSpecificsType
	 **/
	function getSellingManagerProductSpecifics()
	{
		return $this->SellingManagerProductSpecifics;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerProductSpecifics($value)
	{
		$this->SellingManagerProductSpecifics = $value;
	}

}
?>
