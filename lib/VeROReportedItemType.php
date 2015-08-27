<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';
require_once 'VeROItemStatusCodeType.php';

/**
  * Type defining the <b>ReportedItem</b> container which is returned in the 
  * <b>GetVeROReportStatus</b> response. The <b>ReportedItem</b> 
  * container consists of the <b>ItemID</b> of the item that has infringed 
  * upon the seller's copyright, trademark, or intellectual property rights, as well as the
  * submission status of the VeRO Report.
  * 
 **/

class VeROReportedItemType extends EbatNs_ComplexType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var VeROItemStatusCodeType
	**/
	protected $ItemStatus;

	/**
	* @var string
	**/
	protected $ItemReasonForFailure;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VeROReportedItemType', 'urn:ebay:apis:eBLBaseComponents');
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
				),
				'ItemStatus' =>
				array(
					'required' => false,
					'type' => 'VeROItemStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemReasonForFailure' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return VeROItemStatusCodeType
	 **/
	function getItemStatus()
	{
		return $this->ItemStatus;
	}

	/**
	 * @return void
	 **/
	function setItemStatus($value)
	{
		$this->ItemStatus = $value;
	}

	/**
	 * @return string
	 **/
	function getItemReasonForFailure()
	{
		return $this->ItemReasonForFailure;
	}

	/**
	 * @return void
	 **/
	function setItemReasonForFailure($value)
	{
		$this->ItemReasonForFailure = $value;
	}

}
?>
