<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'StoreType.php';

/**
  * Sets the configuration of the eBay store owned by the caller.
  * 
 **/

class SetStoreRequestType extends AbstractRequestType
{
	/**
	* @var StoreType
	**/
	protected $Store;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetStoreRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Store' =>
				array(
					'required' => false,
					'type' => 'StoreType',
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
	 * @return StoreType
	 **/
	function getStore()
	{
		return $this->Store;
	}

	/**
	 * @return void
	 **/
	function setStore($value)
	{
		$this->Store = $value;
	}

}
?>
