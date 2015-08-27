<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'PaginationType.php';

/**
  * Retrieves status information about VeRO reported items you have submitted. You 
  * can receive the status of individual items you have reported or, by specifying 
  * VeROReportPacketID, you can retrieve status for all items reported with a given 
  * VeROReportItems request. You can also retrieve items that were reported during a 
  * given time period. If no input parameters are specified, status is returned on all 
  * items you have reported in the last two years.
  * You must be a member of the Verified Rights Owner (VeRO) Program to use this 
  * call.
  * 
 **/

class GetVeROReportStatusRequestType extends AbstractRequestType
{
	/**
	* @var long
	**/
	protected $VeROReportPacketID;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var boolean
	**/
	protected $IncludeReportedItemDetails;

	/**
	* @var dateTime
	**/
	protected $TimeFrom;

	/**
	* @var dateTime
	**/
	protected $TimeTo;

	/**
	* @var PaginationType
	**/
	protected $Pagination;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetVeROReportStatusRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'VeROReportPacketID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeReportedItemDetails' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
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
	 * @return long
	 **/
	function getVeROReportPacketID()
	{
		return $this->VeROReportPacketID;
	}

	/**
	 * @return void
	 **/
	function setVeROReportPacketID($value)
	{
		$this->VeROReportPacketID = $value;
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
	 * @return boolean
	 **/
	function getIncludeReportedItemDetails()
	{
		return $this->IncludeReportedItemDetails;
	}

	/**
	 * @return void
	 **/
	function setIncludeReportedItemDetails($value)
	{
		$this->IncludeReportedItemDetails = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getTimeFrom()
	{
		return $this->TimeFrom;
	}

	/**
	 * @return void
	 **/
	function setTimeFrom($value)
	{
		$this->TimeFrom = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getTimeTo()
	{
		return $this->TimeTo;
	}

	/**
	 * @return void
	 **/
	function setTimeTo($value)
	{
		$this->TimeTo = $value;
	}

	/**
	 * @return PaginationType
	 **/
	function getPagination()
	{
		return $this->Pagination;
	}

	/**
	 * @return void
	 **/
	function setPagination($value)
	{
		$this->Pagination = $value;
	}

}
?>
