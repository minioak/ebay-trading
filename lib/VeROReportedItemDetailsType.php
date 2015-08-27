<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'VeROReportedItemType.php';

/**
  * Container for a list of reported items. Can contain zero, one, or multiple
  * VeROReportedItemType objects, each of which conveys the data for one item listing.
  * 
 **/

class VeROReportedItemDetailsType extends EbatNs_ComplexType
{
	/**
	* @var VeROReportedItemType
	**/
	protected $ReportedItem;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VeROReportedItemDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReportedItem' =>
				array(
					'required' => false,
					'type' => 'VeROReportedItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return VeROReportedItemType
	 * @param integer $index 
	 **/
	function getReportedItem($index = null)
	{
		if ($index !== null)
		{
			return $this->ReportedItem[$index];
		}
		else
		{
			return $this->ReportedItem;
		}
	}

	/**
	 * @return void
	 * @param VeROReportedItemType $value
	 * @param integer $index 
	 **/
	function setReportedItem($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ReportedItem[$index] = $value;
		}
		else
		{
			$this->ReportedItem= $value;
		}
	}

	/**
	 * @return void
	 * @param VeROReportedItemType $value
	 **/
	function addReportedItem($value)
	{
		$this->ReportedItem[] = $value;
	}

}
?>
