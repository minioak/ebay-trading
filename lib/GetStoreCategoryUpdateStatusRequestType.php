<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Returns the status of the processing for category-structure changes specified
  * with a call to SetStoreCategories.
  * 
 **/

class GetStoreCategoryUpdateStatusRequestType extends AbstractRequestType
{
	/**
	* @var long
	**/
	protected $TaskID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetStoreCategoryUpdateStatusRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TaskID' =>
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
	 * @return long
	 **/
	function getTaskID()
	{
		return $this->TaskID;
	}

	/**
	 * @return void
	 **/
	function setTaskID($value)
	{
		$this->TaskID = $value;
	}

}
?>
