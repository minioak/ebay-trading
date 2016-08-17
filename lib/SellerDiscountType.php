<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * Type that defines the <b>SellerDiscount</b> container, which contains the ID,
  * name, and amount of the seller discount.
  * 
 **/

class SellerDiscountType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $CampaignID;

	/**
	* @var string
	**/
	protected $CampaignDisplayName;

	/**
	* @var AmountType
	**/
	protected $ItemDiscountAmount;

	/**
	* @var AmountType
	**/
	protected $ShippingDiscountAmount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerDiscountType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CampaignID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CampaignDisplayName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemDiscountAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingDiscountAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
	 * @return long
	 **/
	function getCampaignID()
	{
		return $this->CampaignID;
	}

	/**
	 * @return void
	 **/
	function setCampaignID($value)
	{
		$this->CampaignID = $value;
	}

	/**
	 * @return string
	 **/
	function getCampaignDisplayName()
	{
		return $this->CampaignDisplayName;
	}

	/**
	 * @return void
	 **/
	function setCampaignDisplayName($value)
	{
		$this->CampaignDisplayName = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getItemDiscountAmount()
	{
		return $this->ItemDiscountAmount;
	}

	/**
	 * @return void
	 **/
	function setItemDiscountAmount($value)
	{
		$this->ItemDiscountAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingDiscountAmount()
	{
		return $this->ShippingDiscountAmount;
	}

	/**
	 * @return void
	 **/
	function setShippingDiscountAmount($value)
	{
		$this->ShippingDiscountAmount = $value;
	}

}
?>
