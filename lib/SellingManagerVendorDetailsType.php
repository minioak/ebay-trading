<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**Describes vendor information.
 **/

class SellingManagerVendorDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $VendorName;

	/**
	* @var string
	**/
	protected $VendorContactInfo;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerVendorDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'VendorName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VendorContactInfo' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return string
	 **/
	function getVendorName()
	{
		return $this->VendorName;
	}

	/**
	 * @return void
	 **/
	function setVendorName($value)
	{
		$this->VendorName = $value;
	}

	/**
	 * @return string
	 **/
	function getVendorContactInfo()
	{
		return $this->VendorContactInfo;
	}

	/**
	 * @return void
	 **/
	function setVendorContactInfo($value)
	{
		$this->VendorContactInfo = $value;
	}

}
?>
