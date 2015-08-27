<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>MaximumUnpaidItemStrikesCount</b> container that is returned 
  * in the <b>GeteBayDetails</b> response. The <b>MaximumUnpaidItemStrikesCount</b> 
  * container consists of multiple <b>Count</b> fields with values that can be 
  * used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b> 
  * field when using the Trading API to add, revise, or relist an item.
  * <br><br>
  * The <b>Item.MaximumUnpaidItemStrikesInfo</b> container in Add/Revise/Relist 
  * API calls is used to block buyers with unpaid item strikes equal to or exceeding
  * the specified <b>Count</b> value during the specified <b>Period</b> 
  * value from buying/bidding on the item.
  * 
 **/

class MaximumUnpaidItemStrikesCountDetailsType extends EbatNs_ComplexType
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
		parent::__construct('MaximumUnpaidItemStrikesCountDetailsType', 'urn:ebay:apis:eBLBaseComponents');
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
