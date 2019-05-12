<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'AddItemRequestContainerType.php';

/**
  * Defines from one to five items and lists them on a specified eBay site.
  * 
 **/

class AddItemsRequestType extends AbstractRequestType
{
	/**
	* @var AddItemRequestContainerType
	**/
	protected $AddItemRequestContainer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddItemsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AddItemRequestContainer' =>
				array(
					'required' => false,
					'type' => 'AddItemRequestContainerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return AddItemRequestContainerType
	 * @param integer $index 
	 **/
	function getAddItemRequestContainer($index = null)
	{
		if ($index !== null)
		{
			return $this->AddItemRequestContainer[$index];
		}
		else
		{
			return $this->AddItemRequestContainer;
		}
	}

	/**
	 * @return void
	 * @param AddItemRequestContainerType $value
	 * @param integer $index 
	 **/
	function setAddItemRequestContainer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AddItemRequestContainer[$index] = $value;
		}
		else
		{
			$this->AddItemRequestContainer= $value;
		}
	}

	/**
	 * @return void
	 * @param AddItemRequestContainerType $value
	 **/
	function addAddItemRequestContainer($value)
	{
		$this->AddItemRequestContainer[] = $value;
	}

}
?>
