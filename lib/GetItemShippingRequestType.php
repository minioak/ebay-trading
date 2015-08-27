<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'CountryCodeType.php';

/**
  * Returns shipping cost estimates for an item for every calculated shipping service
  * that the seller has offered with the listing. This is analogous to the Shipping
  * Calculator seen in both the buyer and seller web pages.
  * 
 **/

class GetItemShippingRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var int
	**/
	protected $QuantitySold;

	/**
	* @var string
	**/
	protected $DestinationPostalCode;

	/**
	* @var CountryCodeType
	**/
	protected $DestinationCountryCode;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemShippingRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantitySold' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DestinationPostalCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DestinationCountryCode' =>
				array(
					'required' => false,
					'type' => 'CountryCodeType',
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
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantitySold()
	{
		return $this->QuantitySold;
	}

	/**
	 * @return void
	 **/
	function setQuantitySold($value)
	{
		$this->QuantitySold = $value;
	}

	/**
	 * @return string
	 **/
	function getDestinationPostalCode()
	{
		return $this->DestinationPostalCode;
	}

	/**
	 * @return void
	 **/
	function setDestinationPostalCode($value)
	{
		$this->DestinationPostalCode = $value;
	}

	/**
	 * @return CountryCodeType
	 **/
	function getDestinationCountryCode()
	{
		return $this->DestinationCountryCode;
	}

	/**
	 * @return void
	 **/
	function setDestinationCountryCode($value)
	{
		$this->DestinationCountryCode = $value;
	}

}
?>
