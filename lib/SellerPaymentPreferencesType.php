<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DisplayPayNowButtonCodeType.php';
require_once 'AddressType.php';
require_once 'UPSRateOptionCodeType.php';
require_once 'FedExRateOptionCodeType.php';
require_once 'USPSRateOptionCodeType.php';

/**
  *   Type defining the <b>SellerPaymentPreferences</b> container, which
  * consists of the seller's payment preferences. Payment preferences specified in a 
  * <b>SetUserPreferences</b> call override the settings in My eBay payment 
  * preferences.
  * 
 **/

class SellerPaymentPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $AlwaysUseThisPaymentAddress;

	/**
	* @var DisplayPayNowButtonCodeType
	**/
	protected $DisplayPayNowButton;

	/**
	* @var boolean
	**/
	protected $PayPalPreferred;

	/**
	* @var string
	**/
	protected $DefaultPayPalEmailAddress;

	/**
	* @var boolean
	**/
	protected $PayPalAlwaysOn;

	/**
	* @var AddressType
	**/
	protected $SellerPaymentAddress;

	/**
	* @var UPSRateOptionCodeType
	**/
	protected $UPSRateOption;

	/**
	* @var FedExRateOptionCodeType
	**/
	protected $FedExRateOption;

	/**
	* @var USPSRateOptionCodeType
	**/
	protected $USPSRateOption;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerPaymentPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AlwaysUseThisPaymentAddress' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayPayNowButton' =>
				array(
					'required' => false,
					'type' => 'DisplayPayNowButtonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalPreferred' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DefaultPayPalEmailAddress' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalAlwaysOn' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaymentAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UPSRateOption' =>
				array(
					'required' => false,
					'type' => 'UPSRateOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FedExRateOption' =>
				array(
					'required' => false,
					'type' => 'FedExRateOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'USPSRateOption' =>
				array(
					'required' => false,
					'type' => 'USPSRateOptionCodeType',
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
	 * @return boolean
	 **/
	function getAlwaysUseThisPaymentAddress()
	{
		return $this->AlwaysUseThisPaymentAddress;
	}

	/**
	 * @return void
	 **/
	function setAlwaysUseThisPaymentAddress($value)
	{
		$this->AlwaysUseThisPaymentAddress = $value;
	}

	/**
	 * @return DisplayPayNowButtonCodeType
	 **/
	function getDisplayPayNowButton()
	{
		return $this->DisplayPayNowButton;
	}

	/**
	 * @return void
	 **/
	function setDisplayPayNowButton($value)
	{
		$this->DisplayPayNowButton = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPayPalPreferred()
	{
		return $this->PayPalPreferred;
	}

	/**
	 * @return void
	 **/
	function setPayPalPreferred($value)
	{
		$this->PayPalPreferred = $value;
	}

	/**
	 * @return string
	 **/
	function getDefaultPayPalEmailAddress()
	{
		return $this->DefaultPayPalEmailAddress;
	}

	/**
	 * @return void
	 **/
	function setDefaultPayPalEmailAddress($value)
	{
		$this->DefaultPayPalEmailAddress = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPayPalAlwaysOn()
	{
		return $this->PayPalAlwaysOn;
	}

	/**
	 * @return void
	 **/
	function setPayPalAlwaysOn($value)
	{
		$this->PayPalAlwaysOn = $value;
	}

	/**
	 * @return AddressType
	 **/
	function getSellerPaymentAddress()
	{
		return $this->SellerPaymentAddress;
	}

	/**
	 * @return void
	 **/
	function setSellerPaymentAddress($value)
	{
		$this->SellerPaymentAddress = $value;
	}

	/**
	 * @return UPSRateOptionCodeType
	 **/
	function getUPSRateOption()
	{
		return $this->UPSRateOption;
	}

	/**
	 * @return void
	 **/
	function setUPSRateOption($value)
	{
		$this->UPSRateOption = $value;
	}

	/**
	 * @return FedExRateOptionCodeType
	 **/
	function getFedExRateOption()
	{
		return $this->FedExRateOption;
	}

	/**
	 * @return void
	 **/
	function setFedExRateOption($value)
	{
		$this->FedExRateOption = $value;
	}

	/**
	 * @return USPSRateOptionCodeType
	 **/
	function getUSPSRateOption()
	{
		return $this->USPSRateOption;
	}

	/**
	 * @return void
	 **/
	function setUSPSRateOption($value)
	{
		$this->USPSRateOption = $value;
	}

}
?>
