<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'RequiredSellerActionArrayType.php';
require_once 'PaymentHoldReasonCodeType.php';

/**
  * This type defines the <b>PaymentHoldDetails</b> container, which
  * consists of information related to the payment hold on the order, including the
  * reason why the buyer's payment for the order is being held, the expected 
  * release date of the funds into the seller's account, and possible action(s) the
  * seller can take to expedite the payout of funds into their account.
  * 
 **/

class PaymentHoldDetailType extends EbatNs_ComplexType
{
	/**
	* @var dateTime
	**/
	protected $ExpectedReleaseDate;

	/**
	* @var RequiredSellerActionArrayType
	**/
	protected $RequiredSellerActionArray;

	/**
	* @var int
	**/
	protected $NumOfReqSellerActions;

	/**
	* @var PaymentHoldReasonCodeType
	**/
	protected $PaymentHoldReason;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaymentHoldDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ExpectedReleaseDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RequiredSellerActionArray' =>
				array(
					'required' => false,
					'type' => 'RequiredSellerActionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NumOfReqSellerActions' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentHoldReason' =>
				array(
					'required' => false,
					'type' => 'PaymentHoldReasonCodeType',
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
	 * @return dateTime
	 **/
	function getExpectedReleaseDate()
	{
		return $this->ExpectedReleaseDate;
	}

	/**
	 * @return void
	 **/
	function setExpectedReleaseDate($value)
	{
		$this->ExpectedReleaseDate = $value;
	}

	/**
	 * @return RequiredSellerActionArrayType
	 **/
	function getRequiredSellerActionArray()
	{
		return $this->RequiredSellerActionArray;
	}

	/**
	 * @return void
	 **/
	function setRequiredSellerActionArray($value)
	{
		$this->RequiredSellerActionArray = $value;
	}

	/**
	 * @return int
	 **/
	function getNumOfReqSellerActions()
	{
		return $this->NumOfReqSellerActions;
	}

	/**
	 * @return void
	 **/
	function setNumOfReqSellerActions($value)
	{
		$this->NumOfReqSellerActions = $value;
	}

	/**
	 * @return PaymentHoldReasonCodeType
	 **/
	function getPaymentHoldReason()
	{
		return $this->PaymentHoldReason;
	}

	/**
	 * @return void
	 **/
	function setPaymentHoldReason($value)
	{
		$this->PaymentHoldReason = $value;
	}

}
?>
