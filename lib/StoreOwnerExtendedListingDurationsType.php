<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Defines the extended listing durations available to store owners. If the field is
  * present, the corresponding feature applies to the category. The field is returned as
  * anempty element (e.g., a boolean value is not returned). Applies to Fixed Price
  * Listings.
  * 
 **/

class StoreOwnerExtendedListingDurationsType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $Duration;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreOwnerExtendedListingDurationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Duration' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return token
	 * @param integer $index 
	 **/
	function getDuration($index = null)
	{
		if ($index !== null)
		{
			return $this->Duration[$index];
		}
		else
		{
			return $this->Duration;
		}
	}

	/**
	 * @return void
	 * @param token $value
	 * @param integer $index 
	 **/
	function setDuration($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Duration[$index] = $value;
		}
		else
		{
			$this->Duration= $value;
		}
	}

	/**
	 * @return void
	 * @param token $value
	 **/
	function addDuration($value)
	{
		$this->Duration[] = $value;
	}

}
?>
