<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'DepositTypeCodeType.php';

/**
  * Type defining the <b>PaymentDetails</b> container, which is used by the seller to
  * specify amounts and due dates for deposits and full payment on motor vehicle listings.
  * 
 **/

class PaymentDetailsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $HoursToDeposit;

	/**
	* @var int
	**/
	protected $DaysToFullPayment;

	/**
	* @var AmountType
	**/
	protected $DepositAmount;

	/**
	* @var DepositTypeCodeType
	**/
	protected $DepositType;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaymentDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'HoursToDeposit' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DaysToFullPayment' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DepositAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DepositType' =>
				array(
					'required' => false,
					'type' => 'DepositTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return int
	 **/
	function getHoursToDeposit()
	{
		return $this->HoursToDeposit;
	}

	/**
	 * @return void
	 **/
	function setHoursToDeposit($value)
	{
		$this->HoursToDeposit = $value;
	}

	/**
	 * @return int
	 **/
	function getDaysToFullPayment()
	{
		return $this->DaysToFullPayment;
	}

	/**
	 * @return void
	 **/
	function setDaysToFullPayment($value)
	{
		$this->DaysToFullPayment = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getDepositAmount()
	{
		return $this->DepositAmount;
	}

	/**
	 * @return void
	 **/
	function setDepositAmount($value)
	{
		$this->DepositAmount = $value;
	}

	/**
	 * @return DepositTypeCodeType
	 **/
	function getDepositType()
	{
		return $this->DepositType;
	}

	/**
	 * @return void
	 **/
	function setDepositType($value)
	{
		$this->DepositType = $value;
	}

}
?>
