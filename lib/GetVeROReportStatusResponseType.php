<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';
require_once 'VeROReportPacketStatusCodeType.php';
require_once 'VeROReportedItemDetailsType.php';

/**
  * Contains status information for items reported by the VeRO Program member. 
  * 
 **/

class GetVeROReportStatusResponseType extends AbstractResponseType
{
	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;

	/**
	* @var boolean
	**/
	protected $HasMoreItems;

	/**
	* @var int
	**/
	protected $ItemsPerPage;

	/**
	* @var int
	**/
	protected $PageNumber;

	/**
	* @var long
	**/
	protected $VeROReportPacketID;

	/**
	* @var VeROReportPacketStatusCodeType
	**/
	protected $VeROReportPacketStatus;

	/**
	* @var VeROReportedItemDetailsType
	**/
	protected $ReportedItemDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetVeROReportStatusResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMoreItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemsPerPage' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PageNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VeROReportPacketID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VeROReportPacketStatus' =>
				array(
					'required' => false,
					'type' => 'VeROReportPacketStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReportedItemDetails' =>
				array(
					'required' => false,
					'type' => 'VeROReportedItemDetailsType',
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
	 * @return PaginationResultType
	 **/
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}

	/**
	 * @return void
	 **/
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}

	/**
	 * @return void
	 **/
	function setHasMoreItems($value)
	{
		$this->HasMoreItems = $value;
	}

	/**
	 * @return int
	 **/
	function getItemsPerPage()
	{
		return $this->ItemsPerPage;
	}

	/**
	 * @return void
	 **/
	function setItemsPerPage($value)
	{
		$this->ItemsPerPage = $value;
	}

	/**
	 * @return int
	 **/
	function getPageNumber()
	{
		return $this->PageNumber;
	}

	/**
	 * @return void
	 **/
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
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
	 * @return VeROReportPacketStatusCodeType
	 **/
	function getVeROReportPacketStatus()
	{
		return $this->VeROReportPacketStatus;
	}

	/**
	 * @return void
	 **/
	function setVeROReportPacketStatus($value)
	{
		$this->VeROReportPacketStatus = $value;
	}

	/**
	 * @return VeROReportedItemDetailsType
	 **/
	function getReportedItemDetails()
	{
		return $this->ReportedItemDetails;
	}

	/**
	 * @return void
	 **/
	function setReportedItemDetails($value)
	{
		$this->ReportedItemDetails = $value;
	}

}
?>
