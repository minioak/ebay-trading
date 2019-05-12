<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellerLevelCodeType.php';
require_once 'SellerDashboardAlertType.php';

/**
  * Type defining the <b>PowerSellerStatus</b> container returned in the 
  * <b>GetSellerDashboard</b> response. The <b>PowerSellerStatus</b> 
  * container is only returned if the seller making the call is a Power Seller.
  * 
 **/

class PowerSellerDashboardType extends EbatNs_ComplexType
{
	/**
	* @var SellerLevelCodeType
	**/
	protected $Level;

	/**
	* @var SellerDashboardAlertType
	**/
	protected $Alert;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PowerSellerDashboardType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Level' =>
				array(
					'required' => false,
					'type' => 'SellerLevelCodeType',
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
	 * @return SellerLevelCodeType
	 **/
	function getLevel()
	{
		return $this->Level;
	}

	/**
	 * @return void
	 **/
	function setLevel($value)
	{
		$this->Level = $value;
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
