<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';
require_once 'PerformanceStatusCodeType.php';
require_once 'SellerDashboardAlertType.php';

/**
  * Type defining the <b>Performance</b> container returned in the 
  * <b>GetSellerDashboard</b> response. The <b>Performance</b> 
  * container consists of the seller's overall selling performance rating on all eBay sites 
  * on which the seller is sellling, as well as any alerts related to performance.
  * 
 **/

class PerformanceDashboardType extends EbatNs_ComplexType
{
	/**
	* @var SiteCodeType
	**/
	protected $Site;

	/**
	* @var PerformanceStatusCodeType
	**/
	protected $Status;

	/**
	* @var SellerDashboardAlertType
	**/
	protected $Alert;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PerformanceDashboardType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Site' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'PerformanceStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Alert' =>
				array(
					'required' => false,
					'type' => 'SellerDashboardAlertType',
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
	 * @return SiteCodeType
	 * @param integer $index 
	 **/
	function getSite($index = null)
	{
		if ($index !== null)
		{
			return $this->Site[$index];
		}
		else
		{
			return $this->Site;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 * @param integer $index 
	 **/
	function setSite($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Site[$index] = $value;
		}
		else
		{
			$this->Site= $value;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 **/
	function addSite($value)
	{
		$this->Site[] = $value;
	}

	/**
	 * @return PerformanceStatusCodeType
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

	/**
	 * @return SellerDashboardAlertType
	 **/
	function getAlert()
	{
		return $this->Alert;
	}

	/**
	 * @return void
	 **/
	function setAlert($value)
	{
		$this->Alert = $value;
	}

}
?>
