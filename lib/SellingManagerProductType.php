<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerProductDetailsType.php';
require_once 'SellingManagerTemplateDetailsArrayType.php';
require_once 'SellingManagerProductInventoryStatusType.php';
require_once 'SellingManagerProductSpecificsType.php';

/**Describes a Selling Manager Product
 **/

class SellingManagerProductType extends EbatNs_ComplexType
{
	/**
	* @var SellingManagerProductDetailsType
	**/
	protected $SellingManagerProductDetails;

	/**
	* @var SellingManagerTemplateDetailsArrayType
	**/
	protected $SellingManagerTemplateDetailsArray;

	/**
	* @var SellingManagerProductInventoryStatusType
	**/
	protected $SellingManagerProductInventoryStatus;

	/**
	* @var SellingManagerProductSpecificsType
	**/
	protected $SellingManagerProductSpecifics;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerProductType', 'urn:ebay:apis:eBLBaseComponents');
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
				'SellingManagerTemplateDetailsArray' =>
				array(
					'required' => false,
					'type' => 'SellingManagerTemplateDetailsArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellingManagerProductInventoryStatus' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductInventoryStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
	 * @return SellingManagerTemplateDetailsArrayType
	 **/
	function getSellingManagerTemplateDetailsArray()
	{
		return $this->SellingManagerTemplateDetailsArray;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerTemplateDetailsArray($value)
	{
		$this->SellingManagerTemplateDetailsArray = $value;
	}

	/**
	 * @return SellingManagerProductInventoryStatusType
	 **/
	function getSellingManagerProductInventoryStatus()
	{
		return $this->SellingManagerProductInventoryStatus;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerProductInventoryStatus($value)
	{
		$this->SellingManagerProductInventoryStatus = $value;
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
