<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemType.php';

/**
  * The base request for the <b>AddSellingManagerTemplate</b> call, which is used to create a Selling Manager listing template. Each Selling Manager listing template must be associated with an existing Selling Manager product, and each product can have up to 20 listing templates associated with it.
  * 
 **/

class AddSellingManagerTemplateRequestType extends AbstractRequestType
{
	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var string
	**/
	protected $SaleTemplateName;

	/**
	* @var long
	**/
	protected $ProductID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddSellingManagerTemplateRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'ProductID' =>
				array(
					'required' => false,
					'type' => 'long',
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
	 * @return ItemType
	 **/
	function getItem()
	{
		return $this->Item;
	}

	/**
	 * @return void
	 **/
	function setItem($value)
	{
		$this->Item = $value;
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
	 * @return long
	 **/
	function getProductID()
	{
		return $this->ProductID;
	}

	/**
	 * @return void
	 **/
	function setProductID($value)
	{
		$this->ProductID = $value;
	}

}
?>
