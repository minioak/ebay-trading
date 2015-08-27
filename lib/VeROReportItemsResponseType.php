<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'VeROReportPacketStatusCodeType.php';

/**
  * Contains a packet ID and status for the items reported by the VeRO Program member.
  * 
 **/

class VeROReportItemsResponseType extends AbstractResponseType
{
	/**
	* @var long
	**/
	protected $VeROReportPacketID;

	/**
	* @var VeROReportPacketStatusCodeType
	**/
	protected $VeROReportPacketStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VeROReportItemsResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
				'VeROReportPacketStatus' =>
				array(
					'required' => false,
					'type' => 'VeROReportPacketStatusCodeType',
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

}
?>
