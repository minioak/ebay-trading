<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'OrderIDType.php';

/**
  * Type defining the <b>OrderIDArray</b> container, which consists of an array of order IDs. These order IDs specify the single and multiple line item orders to retrieve.
  * 
 **/

class OrderIDArrayType extends EbatNs_ComplexType
{
	/**
	* @var OrderIDType
	**/
	protected $OrderID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('OrderIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OrderID' =>
				array(
					'required' => false,
					'type' => 'OrderIDType',
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
	 * @return OrderIDType
	 * @param integer $index 
	 **/
	function getOrderID($index = null)
	{
		if ($index !== null)
		{
			return $this->OrderID[$index];
		}
		else
		{
			return $this->OrderID;
		}
	}

	/**
	 * @return void
	 * @param OrderIDType $value
	 * @param integer $index 
	 **/
	function setOrderID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->OrderID[$index] = $value;
		}
		else
		{
			$this->OrderID= $value;
		}
	}

	/**
	 * @return void
	 * @param OrderIDType $value
	 **/
	function addOrderID($value)
	{
		$this->OrderID[] = $value;
	}

}
?>
