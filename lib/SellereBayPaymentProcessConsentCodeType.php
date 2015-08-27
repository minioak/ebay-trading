<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PayoutMethodType.php';
require_once 'UserAgreementInfoType.php';

/**
  * This type is no longer used.
  * 
 **/

class SellereBayPaymentProcessConsentCodeType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $PayoutMethodSet;

	/**
	* @var PayoutMethodType
	**/
	protected $PayoutMethod;

	/**
	* @var UserAgreementInfoType
	**/
	protected $UserAgreementInfo;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellereBayPaymentProcessConsentCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PayoutMethodSet' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayoutMethod' =>
				array(
					'required' => false,
					'type' => 'PayoutMethodType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserAgreementInfo' =>
				array(
					'required' => false,
					'type' => 'UserAgreementInfoType',
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
	 * @return boolean
	 **/
	function getPayoutMethodSet()
	{
		return $this->PayoutMethodSet;
	}

	/**
	 * @return void
	 **/
	function setPayoutMethodSet($value)
	{
		$this->PayoutMethodSet = $value;
	}

	/**
	 * @return PayoutMethodType
	 **/
	function getPayoutMethod()
	{
		return $this->PayoutMethod;
	}

	/**
	 * @return void
	 **/
	function setPayoutMethod($value)
	{
		$this->PayoutMethod = $value;
	}

	/**
	 * @return UserAgreementInfoType
	 * @param integer $index 
	 **/
	function getUserAgreementInfo($index = null)
	{
		if ($index !== null)
		{
			return $this->UserAgreementInfo[$index];
		}
		else
		{
			return $this->UserAgreementInfo;
		}
	}

	/**
	 * @return void
	 * @param UserAgreementInfoType $value
	 * @param integer $index 
	 **/
	function setUserAgreementInfo($value, $index = null)
	{
		if ($index !== null)
		{
			$this->UserAgreementInfo[$index] = $value;
		}
		else
		{
			$this->UserAgreementInfo= $value;
		}
	}

	/**
	 * @return void
	 * @param UserAgreementInfoType $value
	 **/
	function addUserAgreementInfo($value)
	{
		$this->UserAgreementInfo[] = $value;
	}

}
?>
