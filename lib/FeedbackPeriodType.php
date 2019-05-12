<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Contains the data for one type of feedback for one predefined time
  * period. Parent FeedbackPeriodArrayType object indicates the type of
  * feedback counted: positive, neutral, negative, or total. Output only,
  * in the summary feedback data returned by GetFeedback.
  * 
 **/

class FeedbackPeriodType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $PeriodInDays;

	/**
	* @var int
	**/
	protected $Count;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackPeriodType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PeriodInDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Count' =>
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
	 * @return int
	 **/
	function getPeriodInDays()
	{
		return $this->PeriodInDays;
	}

	/**
	 * @return void
	 **/
	function setPeriodInDays($value)
	{
		$this->PeriodInDays = $value;
	}

	/**
	 * @return int
	 **/
	function getCount()
	{
		return $this->Count;
	}

	/**
	 * @return void
	 **/
	function setCount($value)
	{
		$this->Count = $value;
	}

}
?>
