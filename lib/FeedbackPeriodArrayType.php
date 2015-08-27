<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'FeedbackPeriodType.php';

/**
  * Container for a set of feedback statistics. Contains zero one or
  * multiple FeedbackPeriod objects. Output only, for the summary
  * feedback data returned by GetFeedback.
  * 
 **/

class FeedbackPeriodArrayType extends EbatNs_ComplexType
{
	/**
	* @var FeedbackPeriodType
	**/
	protected $FeedbackPeriod;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackPeriodArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FeedbackPeriod' =>
				array(
					'required' => false,
					'type' => 'FeedbackPeriodType',
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
	 * @return FeedbackPeriodType
	 * @param integer $index 
	 **/
	function getFeedbackPeriod($index = null)
	{
		if ($index !== null)
		{
			return $this->FeedbackPeriod[$index];
		}
		else
		{
			return $this->FeedbackPeriod;
		}
	}

	/**
	 * @return void
	 * @param FeedbackPeriodType $value
	 * @param integer $index 
	 **/
	function setFeedbackPeriod($value, $index = null)
	{
		if ($index !== null)
		{
			$this->FeedbackPeriod[$index] = $value;
		}
		else
		{
			$this->FeedbackPeriod= $value;
		}
	}

	/**
	 * @return void
	 * @param FeedbackPeriodType $value
	 **/
	function addFeedbackPeriod($value)
	{
		$this->FeedbackPeriod[] = $value;
	}

}
?>
