<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ProStoresDetailsType.php';

/**
  * This type is deprecated.
  * 
 **/

class ProStoresCheckoutPreferenceType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $CheckoutRedirectProStores;

	/**
	* @var ProStoresDetailsType
	**/
	protected $ProStoresDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProStoresCheckoutPreferenceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CheckoutRedirectProStores' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProStoresDetails' =>
				array(
					'required' => false,
					'type' => 'ProStoresDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..0'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return boolean
	 **/
	function getCheckoutRedirectProStores()
	{
		return $this->CheckoutRedirectProStores;
	}

	/**
	 * @return void
	 **/
	function setCheckoutRedirectProStores($value)
	{
		$this->CheckoutRedirectProStores = $value;
	}

	/**
	 * @return ProStoresDetailsType
	 **/
	function getProStoresDetails()
	{
		return $this->ProStoresDetails;
	}

	/**
	 * @return void
	 **/
	function setProStoresDetails($value)
	{
		$this->ProStoresDetails = $value;
	}

}
?>
