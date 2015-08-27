<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'OrderIDType.php';

/**
  * Returns a unique identifier for the order. A buyer may make a single
  * payment to purchase all of the order line items included
  * in the order.
  * 
 **/

class AddOrderResponseType extends AbstractResponseType
{
	/**
	* @var OrderIDType
	**/
	protected $OrderID;

	/**
	* @var dateTime
	**/
	protected $CreatedTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddOrderResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OrderID' =>
				array(
					'required' => false,
					'type' => 'OrderIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreatedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return OrderIDType
	 **/
	function getOrderID()
	{
		return $this->OrderID;
	}

	/**
	 * @return void
	 **/
	function setOrderID($value)
	{
		$this->OrderID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCreatedTime()
	{
		return $this->CreatedTime;
	}

	/**
	 * @return void
	 **/
	function setCreatedTime($value)
	{
		$this->CreatedTime = $value;
	}

}
?>
