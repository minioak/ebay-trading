<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';
require_once 'SellereBayPaymentProcessStatusCodeType.php';

/**
  * This type is deprecated.
  * 
 **/

class UserAgreementInfoType extends EbatNs_ComplexType
{
	/**
	* @var SiteCodeType
	**/
	protected $Site;

	/**
	* @var SellereBayPaymentProcessStatusCodeType
	**/
	protected $SellereBayPaymentProcessStatus;

	/**
	* @var dateTime
	**/
	protected $AcceptedTime;

	/**
	* @var dateTime
	**/
	protected $SellereBayPaymentProcessEnableTime;

	/**
	* @var anyURI
	**/
	protected $UserAgreementURL;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UserAgreementInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Site' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellereBayPaymentProcessStatus' =>
				array(
					'required' => false,
					'type' => 'SellereBayPaymentProcessStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AcceptedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellereBayPaymentProcessEnableTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserAgreementURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
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
	 * @return SiteCodeType
	 **/
	function getSite()
	{
		return $this->Site;
	}

	/**
	 * @return void
	 **/
	function setSite($value)
	{
		$this->Site = $value;
	}

	/**
	 * @return SellereBayPaymentProcessStatusCodeType
	 **/
	function getSellereBayPaymentProcessStatus()
	{
		return $this->SellereBayPaymentProcessStatus;
	}

	/**
	 * @return void
	 **/
	function setSellereBayPaymentProcessStatus($value)
	{
		$this->SellereBayPaymentProcessStatus = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getAcceptedTime()
	{
		return $this->AcceptedTime;
	}

	/**
	 * @return void
	 **/
	function setAcceptedTime($value)
	{
		$this->AcceptedTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getSellereBayPaymentProcessEnableTime()
	{
		return $this->SellereBayPaymentProcessEnableTime;
	}

	/**
	 * @return void
	 **/
	function setSellereBayPaymentProcessEnableTime($value)
	{
		$this->SellereBayPaymentProcessEnableTime = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getUserAgreementURL()
	{
		return $this->UserAgreementURL;
	}

	/**
	 * @return void
	 **/
	function setUserAgreementURL($value)
	{
		$this->UserAgreementURL = $value;
	}

}
?>
