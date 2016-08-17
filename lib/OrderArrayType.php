<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'OrderType.php';

/**
  * An array of Orders.
  * 
 **/

class OrderArrayType extends EbatNs_ComplexType
{
	/**
	* @var OrderType
	**/
	protected $Order;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('OrderArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Order' =>
				array(
					'required' => false,
					'type' => 'OrderType',
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
	 * @return OrderType
	 * @param integer $index 
	 **/
	function getOrder($index = null)
	{
		if ($index !== null)
		{
			return $this->Order[$index];
		}
		else
		{
			return $this->Order;
		}
	}

	/**
	 * @return void
	 * @param OrderType $value
	 * @param integer $index 
	 **/
	function setOrder($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Order[$index] = $value;
		}
		else
		{
			$this->Order= $value;
		}
	}

	/**
	 * @return void
	 * @param OrderType $value
	 **/
	function addOrder($value)
	{
		$this->Order[] = $value;
	}

}
?>
