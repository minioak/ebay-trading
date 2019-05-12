<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PictureManagerSubscriptionLevelCodeType.php';
require_once 'AmountType.php';

/**
  * This type is deprecated.  
  * 
 **/

class PictureManagerSubscriptionType extends EbatNs_ComplexType
{
	/**
	* @var PictureManagerSubscriptionLevelCodeType
	**/
	protected $SubscriptionLevel;

	/**
	* @var AmountType
	**/
	protected $Fee;

	/**
	* @var int
	**/
	protected $StorageSize;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PictureManagerSubscriptionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SubscriptionLevel' =>
				array(
					'required' => false,
					'type' => 'PictureManagerSubscriptionLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StorageSize' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return PictureManagerSubscriptionLevelCodeType
	 **/
	function getSubscriptionLevel()
	{
		return $this->SubscriptionLevel;
	}

	/**
	 * @return void
	 **/
	function setSubscriptionLevel($value)
	{
		$this->SubscriptionLevel = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getFee()
	{
		return $this->Fee;
	}

	/**
	 * @return void
	 **/
	function setFee($value)
	{
		$this->Fee = $value;
	}

	/**
	 * @return int
	 **/
	function getStorageSize()
	{
		return $this->StorageSize;
	}

	/**
	 * @return void
	 **/
	function setStorageSize($value)
	{
		$this->StorageSize = $value;
	}

}
?>
