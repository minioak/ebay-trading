<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreSubscriptionLevelCodeType.php';
require_once 'AmountType.php';

/**
  * Type used by the Subscription container that is returned in GetStoreOptions to indicate the subscription level and monthly fee associated with the eBay Store.
  * 
 **/

class StoreSubscriptionType extends EbatNs_ComplexType
{
	/**
	* @var StoreSubscriptionLevelCodeType
	**/
	protected $Level;

	/**
	* @var AmountType
	**/
	protected $Fee;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreSubscriptionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Level' =>
				array(
					'required' => false,
					'type' => 'StoreSubscriptionLevelCodeType',
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return StoreSubscriptionLevelCodeType
	 **/
	function getLevel()
	{
		return $this->Level;
	}

	/**
	 * @return void
	 **/
	function setLevel($value)
	{
		$this->Level = $value;
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

}
?>
