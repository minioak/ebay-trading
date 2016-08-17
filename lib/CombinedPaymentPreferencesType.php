<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CalculatedShippingPreferencesType.php';
require_once 'CombinedPaymentOptionCodeType.php';
require_once 'CombinedPaymentPeriodCodeType.php';
require_once 'FlatShippingPreferencesType.php';

/**
  * Type used to define all combined payment preferences, including preferences and
  * rules for Calculated and Flat Rate shipping, a flag to allow or disallow <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> 
  * orders, and the time period in which to allow buyers to combine multiple
  * purchases from the seller into a Combined Invoice order.
  * 
 **/

class CombinedPaymentPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var CalculatedShippingPreferencesType
	**/
	protected $CalculatedShippingPreferences;

	/**
	* @var CombinedPaymentOptionCodeType
	**/
	protected $CombinedPaymentOption;

	/**
	* @var CombinedPaymentPeriodCodeType
	**/
	protected $CombinedPaymentPeriod;

	/**
	* @var FlatShippingPreferencesType
	**/
	protected $FlatShippingPreferences;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CombinedPaymentPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CalculatedShippingPreferences' =>
				array(
					'required' => false,
					'type' => 'CalculatedShippingPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedPaymentOption' =>
				array(
					'required' => false,
					'type' => 'CombinedPaymentOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedPaymentPeriod' =>
				array(
					'required' => false,
					'type' => 'CombinedPaymentPeriodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FlatShippingPreferences' =>
				array(
					'required' => false,
					'type' => 'FlatShippingPreferencesType',
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
	 * @return CalculatedShippingPreferencesType
	 **/
	function getCalculatedShippingPreferences()
	{
		return $this->CalculatedShippingPreferences;
	}

	/**
	 * @return void
	 **/
	function setCalculatedShippingPreferences($value)
	{
		$this->CalculatedShippingPreferences = $value;
	}

	/**
	 * @return CombinedPaymentOptionCodeType
	 **/
	function getCombinedPaymentOption()
	{
		return $this->CombinedPaymentOption;
	}

	/**
	 * @return void
	 **/
	function setCombinedPaymentOption($value)
	{
		$this->CombinedPaymentOption = $value;
	}

	/**
	 * @return CombinedPaymentPeriodCodeType
	 **/
	function getCombinedPaymentPeriod()
	{
		return $this->CombinedPaymentPeriod;
	}

	/**
	 * @return void
	 **/
	function setCombinedPaymentPeriod($value)
	{
		$this->CombinedPaymentPeriod = $value;
	}

	/**
	 * @return FlatShippingPreferencesType
	 **/
	function getFlatShippingPreferences()
	{
		return $this->FlatShippingPreferences;
	}

	/**
	 * @return void
	 **/
	function setFlatShippingPreferences($value)
	{
		$this->FlatShippingPreferences = $value;
	}

}
?>
