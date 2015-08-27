<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'UserIDType.php';
require_once 'VeROReportItemsType.php';

/**
  * Reports items that allegedly infringe your copyright, trademark, or other 
  * intellectual property rights. You can report one or more items at a time with this 
  * call. You must be a member of the Verified Rights Owner (VeRO) Program to use this 
  * call. 
  * 
 **/

class VeROReportItemsRequestType extends AbstractRequestType
{
	/**
	* @var UserIDType
	**/
	protected $RightsOwnerID;

	/**
	* @var VeROReportItemsType
	**/
	protected $ReportItems;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VeROReportItemsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RightsOwnerID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReportItems' =>
				array(
					'required' => false,
					'type' => 'VeROReportItemsType',
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
	 * @return UserIDType
	 **/
	function getRightsOwnerID()
	{
		return $this->RightsOwnerID;
	}

	/**
	 * @return void
	 **/
	function setRightsOwnerID($value)
	{
		$this->RightsOwnerID = $value;
	}

	/**
	 * @return VeROReportItemsType
	 **/
	function getReportItems()
	{
		return $this->ReportItems;
	}

	/**
	 * @return void
	 **/
	function setReportItems($value)
	{
		$this->ReportItems = $value;
	}

}
?>
