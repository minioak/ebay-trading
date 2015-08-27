<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'TransactionType.php';

/**
  * Type defining the <b>TransactionArray</b> container, which contains an 
  * array of <b>Transaction</b> containers. Each <b>Transaction</b> 
  * container consists of detailed information on one order line item.
  * 
 **/

class TransactionArrayType extends EbatNs_ComplexType
{
	/**
	* @var TransactionType
	**/
	protected $Transaction;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TransactionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Transaction' =>
				array(
					'required' => false,
					'type' => 'TransactionType',
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
	 * @return TransactionType
	 * @param integer $index 
	 **/
	function getTransaction($index = null)
	{
		if ($index !== null)
		{
			return $this->Transaction[$index];
		}
		else
		{
			return $this->Transaction;
		}
	}

	/**
	 * @return void
	 * @param TransactionType $value
	 * @param integer $index 
	 **/
	function setTransaction($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Transaction[$index] = $value;
		}
		else
		{
			$this->Transaction= $value;
		}
	}

	/**
	 * @return void
	 * @param TransactionType $value
	 **/
	function addTransaction($value)
	{
		$this->Transaction[] = $value;
	}

}
?>
