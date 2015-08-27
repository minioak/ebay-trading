<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreSubscriptionType.php';

/**
  * Set of eBay Store subscription levels.
  * 
 **/

class StoreSubscriptionArrayType extends EbatNs_ComplexType
{
	/**
	* @var StoreSubscriptionType
	**/
	protected $Subscription;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreSubscriptionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Subscription' =>
				array(
					'required' => false,
					'type' => 'StoreSubscriptionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return StoreSubscriptionType
	 * @param integer $index 
	 **/
	function getSubscription($index = null)
	{
		if ($index !== null)
		{
			return $this->Subscription[$index];
		}
		else
		{
			return $this->Subscription;
		}
	}

	/**
	 * @return void
	 * @param StoreSubscriptionType $value
	 * @param integer $index 
	 **/
	function setSubscription($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Subscription[$index] = $value;
		}
		else
		{
			$this->Subscription= $value;
		}
	}

	/**
	 * @return void
	 * @param StoreSubscriptionType $value
	 **/
	function addSubscription($value)
	{
		$this->Subscription[] = $value;
	}

}
?>
