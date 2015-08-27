<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'SellingManagerProductDetailsType.php';
require_once 'SellingManagerProductSpecificsType.php';

/**
  * Creates a Selling Manager product. Sellers use Selling Manager products to store SYI forms for use
  * as listing templates.
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
