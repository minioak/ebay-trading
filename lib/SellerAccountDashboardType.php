<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellerAccountStatusCodeType.php';
require_once 'SellerDashboardAlertType.php';

/**
  * Type defining the <b>SellerAccount</b> container returned in the 
  * <b>GetSellerDashboard</b> response. 
  * 
 **/

class SellerAccountDashboardType extends EbatNs_ComplexType
{
	/**
	* @var SellerAccountStatusCodeType
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
		parent::__construct('SellerAccountDashboardType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Status' =>
				array(
					'required' => false,
					'type' => 'SellerAccountStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Alert' =>
				array(
					'required' => false,
					'type' => 'SellerDashboardAlertType',
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
	 * @return SellerAccountStatusCodeType
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
	 * @param integer $index 
	 **/
	function getAlert($index = null)
	{
		if ($index !== null)
		{
			return $this->Alert[$index];
		}
		else
		{
			return $this->Alert;
		}
	}

	/**
	 * @return void
	 * @param SellerDashboardAlertType $value
	 * @param integer $index 
	 **/
	function setAlert($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Alert[$index] = $value;
		}
		else
		{
			$this->Alert= $value;
		}
	}

	/**
	 * @return void
	 * @param SellerDashboardAlertType $value
	 **/
	function addAlert($value)
	{
		$this->Alert[] = $value;
	}

}
?>
