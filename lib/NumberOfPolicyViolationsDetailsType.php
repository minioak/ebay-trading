<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>NumberOfPolicyViolations</b> container that is returned 
  * in the <b>GeteBayDetails</b> response. The <b>NumberOfPolicyViolations</b> 
  * container consists of multiple <b>Count</b> fields with values that can be 
  * used in the <b>BuyerRequirementDetails.MaximumBuyerPolicyViolations.Count</b> 
  * field when using the Trading API to add, revise, or relist an item.
  * <br><br>
  * The <b>Item.MaximumBuyerPolicyViolations</b> container in Add/Revise/Relist 
  * API calls is used to block buyers with buyer policy violations equal to or exceeding
  * the specified <b>Count</b> value during the specified <b>Period</b> 
  * value from buying/bidding on the item.
  * 
 **/

class NumberOfPolicyViolationsDetailsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $Count;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NumberOfPolicyViolationsDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Count' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return int
	 * @param integer $index 
	 **/
	function getCount($index = null)
	{
		if ($index !== null)
		{
			return $this->Count[$index];
		}
		else
		{
			return $this->Count;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 * @param integer $index 
	 **/
	function setCount($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Count[$index] = $value;
		}
		else
		{
			$this->Count= $value;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 **/
	function addCount($value)
	{
		$this->Count[] = $value;
	}

}
?>
