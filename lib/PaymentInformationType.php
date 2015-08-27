<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PaymentTransactionType.php';

/**
  * This type contains information about the way a buyer payment is allocated for a specified order.
  * 
 **/

class PaymentInformationType extends EbatNs_ComplexType
{
	/**
	* @var PaymentTransactionType
	**/
	protected $Payment;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaymentInformationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Payment' =>
				array(
					'required' => false,
					'type' => 'PaymentTransactionType',
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
	 * @return PaymentTransactionType
	 * @param integer $index 
	 **/
	function getPayment($index = null)
	{
		if ($index !== null)
		{
			return $this->Payment[$index];
		}
		else
		{
			return $this->Payment;
		}
	}

	/**
	 * @return void
	 * @param PaymentTransactionType $value
	 * @param integer $index 
	 **/
	function setPayment($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Payment[$index] = $value;
		}
		else
		{
			$this->Payment= $value;
		}
	}

	/**
	 * @return void
	 * @param PaymentTransactionType $value
	 **/
	function addPayment($value)
	{
		$this->Payment[] = $value;
	}

}
?>
