<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'TaskStatusCodeType.php';

/**
  * Returns the store category structure update status, when a prior 
  * SetStoreCategories call was processed asynchronously. If a SetStoreCategories 
  * request affects many listings, then the category structure changes will be 
  * processed asynchronously. If not many listings are affected by category structure 
  * changes, the status is returned in the SetStoreCategories response.
  * 
 **/

class GetStoreCategoryUpdateStatusResponseType extends AbstractResponseType
{
	/**
	* @var TaskStatusCodeType
	**/
	protected $Status;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetStoreCategoryUpdateStatusResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Status' =>
				array(
					'required' => false,
					'type' => 'TaskStatusCodeType',
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
	 * @return TaskStatusCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

}
?>
