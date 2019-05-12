<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BuyerProtectionSourceCodeType.php';
require_once 'BuyerProtectionCodeType.php';

/**
  * Type defining the <strong>ApplyBuyerProtection</strong> container, which
  * consists of details related to whether or not the item is eligible for buyer protection
  * and which of the buyer protection programs will cover the item.
  * 
 **/

class BuyerProtectionDetailsType extends EbatNs_ComplexType
{
	/**
	* @var BuyerProtectionSourceCodeType
	**/
	protected $BuyerProtectionSource;

	/**
	* @var BuyerProtectionCodeType
	**/
	protected $BuyerProtectionStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BuyerProtectionDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BuyerProtectionSource' =>
				array(
					'required' => false,
					'type' => 'BuyerProtectionSourceCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerProtectionStatus' =>
				array(
					'required' => false,
					'type' => 'BuyerProtectionCodeType',
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
	 * @return BuyerProtectionSourceCodeType
	 **/
	function getBuyerProtectionSource()
	{
		return $this->BuyerProtectionSource;
	}

	/**
	 * @return void
	 **/
	function setBuyerProtectionSource($value)
	{
		$this->BuyerProtectionSource = $value;
	}

	/**
	 * @return BuyerProtectionCodeType
	 **/
	function getBuyerProtectionStatus()
	{
		return $this->BuyerProtectionStatus;
	}

	/**
	 * @return void
	 **/
	function setBuyerProtectionStatus($value)
	{
		$this->BuyerProtectionStatus = $value;
	}

}
?>
