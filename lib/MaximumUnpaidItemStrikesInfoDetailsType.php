<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MaximumUnpaidItemStrikesCountDetailsType.php';
require_once 'MaximumUnpaidItemStrikesDurationDetailsType.php';

/**Details of a buyer's maximum unpaid item strikes in a pre-defined time period. This is applicable only to sellers.
 **/

class MaximumUnpaidItemStrikesInfoDetailsType extends EbatNs_ComplexType
{
	/**
	* @var MaximumUnpaidItemStrikesCountDetailsType
	**/
	protected $MaximumUnpaidItemStrikesCount;

	/**
	* @var MaximumUnpaidItemStrikesDurationDetailsType
	**/
	protected $MaximumUnpaidItemStrikesDuration;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MaximumUnpaidItemStrikesInfoDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MaximumUnpaidItemStrikesCount' =>
				array(
					'required' => false,
					'type' => 'MaximumUnpaidItemStrikesCountDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaximumUnpaidItemStrikesDuration' =>
				array(
					'required' => false,
					'type' => 'MaximumUnpaidItemStrikesDurationDetailsType',
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
	 * @return MaximumUnpaidItemStrikesCountDetailsType
	 **/
	function getMaximumUnpaidItemStrikesCount()
	{
		return $this->MaximumUnpaidItemStrikesCount;
	}

	/**
	 * @return void
	 **/
	function setMaximumUnpaidItemStrikesCount($value)
	{
		$this->MaximumUnpaidItemStrikesCount = $value;
	}

	/**
	 * @return MaximumUnpaidItemStrikesDurationDetailsType
	 * @param integer $index 
	 **/
	function getMaximumUnpaidItemStrikesDuration($index = null)
	{
		if ($index !== null)
		{
			return $this->MaximumUnpaidItemStrikesDuration[$index];
		}
		else
		{
			return $this->MaximumUnpaidItemStrikesDuration;
		}
	}

	/**
	 * @return void
	 * @param MaximumUnpaidItemStrikesDurationDetailsType $value
	 * @param integer $index 
	 **/
	function setMaximumUnpaidItemStrikesDuration($value, $index = null)
	{
		if ($index !== null)
		{
			$this->MaximumUnpaidItemStrikesDuration[$index] = $value;
		}
		else
		{
			$this->MaximumUnpaidItemStrikesDuration= $value;
		}
	}

	/**
	 * @return void
	 * @param MaximumUnpaidItemStrikesDurationDetailsType $value
	 **/
	function addMaximumUnpaidItemStrikesDuration($value)
	{
		$this->MaximumUnpaidItemStrikesDuration[] = $value;
	}

}
?>
