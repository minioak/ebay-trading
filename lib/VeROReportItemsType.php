<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'VeROReportItemType.php';

/**
  * Type defining the <b>ReportItems</b> container in the 
  * <b>VeROReportItems</b> request. The <b>ReportItems</b> container 
  * consists of an array of items which, according to the seller, are infringing upon the
  * seller's copyright, trademark, or intellectual property rights (according to the seller).
  * 
 **/

class VeROReportItemsType extends EbatNs_ComplexType
{
	/**
	* @var VeROReportItemType
	**/
	protected $ReportItem;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VeROReportItemsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReportItem' =>
				array(
					'required' => false,
					'type' => 'VeROReportItemType',
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
	 * @return VeROReportItemType
	 * @param integer $index 
	 **/
	function getReportItem($index = null)
	{
		if ($index !== null)
		{
			return $this->ReportItem[$index];
		}
		else
		{
			return $this->ReportItem;
		}
	}

	/**
	 * @return void
	 * @param VeROReportItemType $value
	 * @param integer $index 
	 **/
	function setReportItem($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ReportItem[$index] = $value;
		}
		else
		{
			$this->ReportItem= $value;
		}
	}

	/**
	 * @return void
	 * @param VeROReportItemType $value
	 **/
	function addReportItem($value)
	{
		$this->ReportItem[] = $value;
	}

}
?>
