<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
  * Retrieves the set of Selling Manager automation rules
  * associated with an item.
  * This call is subject to change without notice; the
  * deprecation process is inapplicable to this call.
  * 
 **/

class GetSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellingManagerItemAutomationRuleRequestType', 'urn:ebay:apis:eBLBaseComponents');
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

}
?>
