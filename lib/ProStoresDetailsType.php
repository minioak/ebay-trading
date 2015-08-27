<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'EnableCodeType.php';

/**
  * This type defines the <b>ProStoresDetails</b> container, which contains
  * details about the ProStore seller's store.
  * 
 **/

class ProStoresDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $SellerThirdPartyUsername;

	/**
	* @var string
	**/
	protected $StoreName;

	/**
	* @var EnableCodeType
	**/
	protected $Status;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProStoresDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellerThirdPartyUsername' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'EnableCodeType',
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
	 * @return string
	 **/
	function getSellerThirdPartyUsername()
	{
		return $this->SellerThirdPartyUsername;
	}

	/**
	 * @return void
	 **/
	function setSellerThirdPartyUsername($value)
	{
		$this->SellerThirdPartyUsername = $value;
	}

	/**
	 * @return string
	 **/
	function getStoreName()
	{
		return $this->StoreName;
	}

	/**
	 * @return void
	 **/
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}

	/**
	 * @return EnableCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

}
?>
