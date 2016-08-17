<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
  * Creates a Selling Manager listing template that is similar to an item.
  * This call is subject to change without notice; the
  * deprecation process is inapplicable to this call.
  * 
 **/

class SaveItemToSellingManagerTemplateRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var long
	**/
	protected $ProductID;

	/**
	* @var string
	**/
	protected $TemplateName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SaveItemToSellingManagerTemplateRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				),
				'TemplateName' =>
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
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
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

	/**
	 * @return string
	 **/
	function getTemplateName()
	{
		return $this->TemplateName;
	}

	/**
	 * @return void
	 **/
	function setTemplateName($value)
	{
		$this->TemplateName = $value;
	}

}
?>
