<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'NumberOfPolicyViolationsDetailsType.php';
require_once 'PolicyViolationDurationDetailsType.php';

/**The maximum number of policy violations and the durations that can be designated by sellers at this site. This is applicable only to sellers.
 **/

class MaximumBuyerPolicyViolationsDetailsType extends EbatNs_ComplexType
{
	/**
	* @var NumberOfPolicyViolationsDetailsType
	**/
	protected $NumberOfPolicyViolations;

	/**
	* @var PolicyViolationDurationDetailsType
	**/
	protected $PolicyViolationDuration;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MaximumBuyerPolicyViolationsDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return NumberOfPolicyViolationsDetailsType
	 **/
	function getNumberOfPolicyViolations()
	{
		return $this->NumberOfPolicyViolations;
	}

	/**
	 * @return void
	 **/
	function setNumberOfPolicyViolations($value)
	{
		$this->NumberOfPolicyViolations = $value;
	}

	/**
	 * @return PolicyViolationDurationDetailsType
	 * @param integer $index 
	 **/
	function getPolicyViolationDuration($index = null)
	{
		if ($index !== null)
		{
			return $this->PolicyViolationDuration[$index];
		}
		else
		{
			return $this->PolicyViolationDuration;
		}
	}

	/**
	 * @return void
	 * @param PolicyViolationDurationDetailsType $value
	 * @param integer $index 
	 **/
	function setPolicyViolationDuration($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PolicyViolationDuration[$index] = $value;
		}
		else
		{
			$this->PolicyViolationDuration= $value;
		}
	}

	/**
	 * @return void
	 * @param PolicyViolationDurationDetailsType $value
	 **/
	function addPolicyViolationDuration($value)
	{
		$this->PolicyViolationDuration[] = $value;
	}

}
?>
