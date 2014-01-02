<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'NumberOfPolicyViolationsDetailsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'PolicyViolationDurationDetailsType.php';

/**
 * The maximum number of policy violations and the durations that can be designated 
 * by sellers at this site. This is applicable only to sellers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MaximumBuyerPolicyViolationsDetailsType.html
 *
 */
class MaximumBuyerPolicyViolationsDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var NumberOfPolicyViolationsDetailsType
	 */
	protected $NumberOfPolicyViolations;
	/**
	 * @var PolicyViolationDurationDetailsType
	 */
	protected $PolicyViolationDuration;

	/**
	 * @return NumberOfPolicyViolationsDetailsType
	 */
	function getNumberOfPolicyViolations()
	{
		return $this->NumberOfPolicyViolations;
	}
	/**
	 * @return void
	 * @param NumberOfPolicyViolationsDetailsType $value 
	 */
	function setNumberOfPolicyViolations($value)
	{
		$this->NumberOfPolicyViolations = $value;
	}
	/**
	 * @return PolicyViolationDurationDetailsType
	 * @param integer $index 
	 */
	function getPolicyViolationDuration($index = null)
	{
		if ($index !== null) {
			return $this->PolicyViolationDuration[$index];
		} else {
			return $this->PolicyViolationDuration;
		}
	}
	/**
	 * @return void
	 * @param PolicyViolationDurationDetailsType $value 
	 * @param  $index 
	 */
	function setPolicyViolationDuration($value, $index = null)
	{
		if ($index !== null) {
			$this->PolicyViolationDuration[$index] = $value;
		} else {
			$this->PolicyViolationDuration = $value;
		}
	}
	/**
	 * @return void
	 * @param PolicyViolationDurationDetailsType $value 
	 */
	function addPolicyViolationDuration($value)
	{
		$this->PolicyViolationDuration[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MaximumBuyerPolicyViolationsDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'NumberOfPolicyViolations' =>
					array(
						'required' => false,
						'type' => 'NumberOfPolicyViolationsDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PolicyViolationDuration' =>
					array(
						'required' => false,
						'type' => 'PolicyViolationDurationDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
