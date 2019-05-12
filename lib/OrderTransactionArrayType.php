<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'OrderTransactionType.php';

/**
  * Contains a list of orders, transactions, or both, each of OrderTransactionType.
  * 
 **/

class OrderTransactionArrayType extends EbatNs_ComplexType
{
	/**
	* @var OrderTransactionType
	**/
	protected $OrderTransaction;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('OrderTransactionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OrderTransaction' =>
				array(
					'required' => false,
					'type' => 'OrderTransactionType',
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
	 * @return OrderTransactionType
	 * @param integer $index 
	 **/
	function getOrderTransaction($index = null)
	{
		if ($index !== null)
		{
			return $this->OrderTransaction[$index];
		}
		else
		{
			return $this->OrderTransaction;
		}
	}

	/**
	 * @return void
	 * @param OrderTransactionType $value
	 * @param integer $index 
	 **/
	function setOrderTransaction($value, $index = null)
	{
		if ($index !== null)
		{
			$this->OrderTransaction[$index] = $value;
		}
		else
		{
			$this->OrderTransaction= $value;
		}
	}

	/**
	 * @return void
	 * @param OrderTransactionType $value
	 **/
	function addOrderTransaction($value)
	{
		$this->OrderTransaction[] = $value;
	}

}
?>
