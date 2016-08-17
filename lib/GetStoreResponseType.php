<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'StoreType.php';

/**
  * Returns the data describing a seller's eBay store, including name, description,
  * URL, and other information. The caller making the request must be the owner
  * of an eBay store. If the authenticated caller does not have an eBay store, the
  * response is an error. A successful response contains either the complete store
  * configuration or information about the category hierarchy for the store only.
  * 
 **/

class GetStoreResponseType extends AbstractResponseType
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
		parent::__construct('GetStoreResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
