<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PaymentTransactionCodeType.php';

/**
  * Contains details payment information
  * 
 **/

class PaymentInformationCodeType extends EbatNs_ComplexType
{
	/**
	* @var PaymentTransactionCodeType
	**/
	protected $Payment;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaymentInformationCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Payment' =>
				array(
					'required' => false,
					'type' => 'PaymentTransactionCodeType',
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
	 * @return PaymentTransactionCodeType
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
	 * @param PaymentTransactionCodeType $value
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
	 * @param PaymentTransactionCodeType $value
	 **/
	function addPayment($value)
	{
		$this->Payment[] = $value;
	}

}
?>
