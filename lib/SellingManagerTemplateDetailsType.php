<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerProductDetailsType.php';
require_once 'ItemType.php';

/**Describes a Selling Manager Template
  * 
 **/

class SellingManagerTemplateDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $SaleTemplateID;

	/**
	* @var string
	**/
	protected $SaleTemplateName;

	/**
	* @var float
	**/
	protected $SuccessPercent;

	/**
	* @var SellingManagerProductDetailsType
	**/
	protected $SellingManagerProductDetails;

	/**
	* @var ItemType
	**/
	protected $Template;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerTemplateDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SaleTemplateID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SaleTemplateName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SuccessPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellingManagerProductDetails' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Template' =>
				array(
					'required' => false,
					'type' => 'ItemType',
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
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}

	/**
	 * @return void
	 **/
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
	}

	/**
	 * @return string
	 **/
	function getSaleTemplateName()
	{
		return $this->SaleTemplateName;
	}

	/**
	 * @return void
	 **/
	function setSaleTemplateName($value)
	{
		$this->SaleTemplateName = $value;
	}

	/**
	 * @return float
	 **/
	function getSuccessPercent()
	{
		return $this->SuccessPercent;
	}

	/**
	 * @return void
	 **/
	function setSuccessPercent($value)
	{
		$this->SuccessPercent = $value;
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
	 * @return ItemType
	 **/
	function getTemplate()
	{
		return $this->Template;
	}

	/**
	 * @return void
	 **/
	function setTemplate($value)
	{
		$this->Template = $value;
	}

}
?>
