<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PickupStatusCodeType.php';

/**
  * Type defining the <strong>PickupMethodSelected</strong> container, which consists of details related to the selected local pickup method (In-Store Pickup or "Click and Collect"), including the pickup method, the merchant's store ID, the status of the pickup, and the pickup reference code (if provided by merchant).
  * <br/><br/>
  * <span class="tablenote">
  * <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. The "Click and Collect" feature is only available to large merchants on the eBay UK (site ID - 3) and eBay Australia (Site ID - 15) sites.
  * </span>
  * 
 **/

class PickupMethodSelectedType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $PickupMethod;

	/**
	* @var string
	**/
	protected $PickupStoreID;

	/**
	* @var PickupStatusCodeType
	**/
	protected $PickupStatus;

	/**
	* @var string
	**/
	protected $MerchantPickupCode;

	/**
	* @var dateTime
	**/
	protected $PickupFulfillmentTime;

	/**
	* @var string
	**/
	protected $PickupLocationUUID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PickupMethodSelectedType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PickupMethod' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupStoreID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupStatus' =>
				array(
					'required' => false,
					'type' => 'PickupStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MerchantPickupCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupFulfillmentTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupLocationUUID' =>
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
	 * @return token
	 **/
	function getPickupMethod()
	{
		return $this->PickupMethod;
	}

	/**
	 * @return void
	 **/
	function setPickupMethod($value)
	{
		$this->PickupMethod = $value;
	}

	/**
	 * @return string
	 **/
	function getPickupStoreID()
	{
		return $this->PickupStoreID;
	}

	/**
	 * @return void
	 **/
	function setPickupStoreID($value)
	{
		$this->PickupStoreID = $value;
	}

	/**
	 * @return PickupStatusCodeType
	 **/
	function getPickupStatus()
	{
		return $this->PickupStatus;
	}

	/**
	 * @return void
	 **/
	function setPickupStatus($value)
	{
		$this->PickupStatus = $value;
	}

	/**
	 * @return string
	 **/
	function getMerchantPickupCode()
	{
		return $this->MerchantPickupCode;
	}

	/**
	 * @return void
	 **/
	function setMerchantPickupCode($value)
	{
		$this->MerchantPickupCode = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getPickupFulfillmentTime()
	{
		return $this->PickupFulfillmentTime;
	}

	/**
	 * @return void
	 **/
	function setPickupFulfillmentTime($value)
	{
		$this->PickupFulfillmentTime = $value;
	}

	/**
	 * @return string
	 **/
	function getPickupLocationUUID()
	{
		return $this->PickupLocationUUID;
	}

	/**
	 * @return void
	 **/
	function setPickupLocationUUID($value)
	{
		$this->PickupLocationUUID = $value;
	}

}
?>
