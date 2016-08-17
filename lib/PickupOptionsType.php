<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <strong>PickupOptions</strong> container, which consists of a pickup method and the priority of the pickup method.
  * <br/><br/>
  * <span class="tablenote">
  * <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
  * </span>
  * 
 **/

class PickupOptionsType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $PickupMethod;

	/**
	* @var int
	**/
	protected $PickupPriority;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PickupOptionsType', 'urn:ebay:apis:eBLBaseComponents');
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
				'PickupPriority' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return int
	 **/
	function getPickupPriority()
	{
		return $this->PickupPriority;
	}

	/**
	 * @return void
	 **/
	function setPickupPriority($value)
	{
		$this->PickupPriority = $value;
	}

}
?>
