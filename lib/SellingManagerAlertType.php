<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerAlertTypeCodeType.php';
require_once 'SellingManagerSoldListingsPropertyTypeCodeType.php';
require_once 'SellingManagerInventoryPropertyTypeCodeType.php';
require_once 'SellingManagerAutomationPropertyTypeCodeType.php';
require_once 'SellingManagerPaisaPayPropertyTypeCodeType.php';
require_once 'SellingManagerGeneralPropertyTypeCodeType.php';

/**
  * Type defining the Alert container, which contains summary information on one type of 
  * Selling Manager alert. 
  * 
 **/

class SellingManagerAlertType extends EbatNs_ComplexType
{
	/**
	* @var SellingManagerAlertTypeCodeType
	**/
	protected $AlertType;

	/**
	* @var SellingManagerSoldListingsPropertyTypeCodeType
	**/
	protected $SoldAlert;

	/**
	* @var SellingManagerInventoryPropertyTypeCodeType
	**/
	protected $InventoryAlert;

	/**
	* @var SellingManagerAutomationPropertyTypeCodeType
	**/
	protected $AutomationAlert;

	/**
	* @var SellingManagerPaisaPayPropertyTypeCodeType
	**/
	protected $PaisaPayAlert;

	/**
	* @var SellingManagerGeneralPropertyTypeCodeType
	**/
	protected $GeneralAlert;

	/**
	* @var int
	**/
	protected $DurationInDays;

	/**
	* @var long
	**/
	protected $Count;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAlertType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AlertType' =>
				array(
					'required' => false,
					'type' => 'SellingManagerAlertTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SoldAlert' =>
				array(
					'required' => false,
					'type' => 'SellingManagerSoldListingsPropertyTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InventoryAlert' =>
				array(
					'required' => false,
					'type' => 'SellingManagerInventoryPropertyTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AutomationAlert' =>
				array(
					'required' => false,
					'type' => 'SellingManagerAutomationPropertyTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaisaPayAlert' =>
				array(
					'required' => false,
					'type' => 'SellingManagerPaisaPayPropertyTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GeneralAlert' =>
				array(
					'required' => false,
					'type' => 'SellingManagerGeneralPropertyTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DurationInDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Count' =>
				array(
					'required' => false,
					'type' => 'long',
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
	 * @return SellingManagerAlertTypeCodeType
	 **/
	function getAlertType()
	{
		return $this->AlertType;
	}

	/**
	 * @return void
	 **/
	function setAlertType($value)
	{
		$this->AlertType = $value;
	}

	/**
	 * @return SellingManagerSoldListingsPropertyTypeCodeType
	 **/
	function getSoldAlert()
	{
		return $this->SoldAlert;
	}

	/**
	 * @return void
	 **/
	function setSoldAlert($value)
	{
		$this->SoldAlert = $value;
	}

	/**
	 * @return SellingManagerInventoryPropertyTypeCodeType
	 **/
	function getInventoryAlert()
	{
		return $this->InventoryAlert;
	}

	/**
	 * @return void
	 **/
	function setInventoryAlert($value)
	{
		$this->InventoryAlert = $value;
	}

	/**
	 * @return SellingManagerAutomationPropertyTypeCodeType
	 **/
	function getAutomationAlert()
	{
		return $this->AutomationAlert;
	}

	/**
	 * @return void
	 **/
	function setAutomationAlert($value)
	{
		$this->AutomationAlert = $value;
	}

	/**
	 * @return SellingManagerPaisaPayPropertyTypeCodeType
	 **/
	function getPaisaPayAlert()
	{
		return $this->PaisaPayAlert;
	}

	/**
	 * @return void
	 **/
	function setPaisaPayAlert($value)
	{
		$this->PaisaPayAlert = $value;
	}

	/**
	 * @return SellingManagerGeneralPropertyTypeCodeType
	 **/
	function getGeneralAlert()
	{
		return $this->GeneralAlert;
	}

	/**
	 * @return void
	 **/
	function setGeneralAlert($value)
	{
		$this->GeneralAlert = $value;
	}

	/**
	 * @return int
	 **/
	function getDurationInDays()
	{
		return $this->DurationInDays;
	}

	/**
	 * @return void
	 **/
	function setDurationInDays($value)
	{
		$this->DurationInDays = $value;
	}

	/**
	 * @return long
	 **/
	function getCount()
	{
		return $this->Count;
	}

	/**
	 * @return void
	 **/
	function setCount($value)
	{
		$this->Count = $value;
	}

}
?>
