<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>BuyerRoleMetrics</b> container which is returned in the <b>GetFeedback</b> response. the <b>BuyerRoleMetrics</b> container consists of a eBay user's feedback statistics for the latest one-year period, dating back from the current date.
  * 
 **/

class BuyerRoleMetricsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $PositiveFeedbackLeftCount;

	/**
	* @var int
	**/
	protected $NegativeFeedbackLeftCount;

	/**
	* @var int
	**/
	protected $NeutralFeedbackLeftCount;

	/**
	* @var float
	**/
	protected $FeedbackLeftPercent;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BuyerRoleMetricsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PositiveFeedbackLeftCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NegativeFeedbackLeftCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NeutralFeedbackLeftCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackLeftPercent' =>
				array(
					'required' => false,
					'type' => 'float',
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
	function getPositiveFeedbackLeftCount()
	{
		return $this->PositiveFeedbackLeftCount;
	}

	/**
	 * @return void
	 **/
	function setPositiveFeedbackLeftCount($value)
	{
		$this->PositiveFeedbackLeftCount = $value;
	}

	/**
	 * @return int
	 **/
	function getNegativeFeedbackLeftCount()
	{
		return $this->NegativeFeedbackLeftCount;
	}

	/**
	 * @return void
	 **/
	function setNegativeFeedbackLeftCount($value)
	{
		$this->NegativeFeedbackLeftCount = $value;
	}

	/**
	 * @return int
	 **/
	function getNeutralFeedbackLeftCount()
	{
		return $this->NeutralFeedbackLeftCount;
	}

	/**
	 * @return void
	 **/
	function setNeutralFeedbackLeftCount($value)
	{
		$this->NeutralFeedbackLeftCount = $value;
	}

	/**
	 * @return float
	 **/
	function getFeedbackLeftPercent()
	{
		return $this->FeedbackLeftPercent;
	}

	/**
	 * @return void
	 **/
	function setFeedbackLeftPercent($value)
	{
		$this->FeedbackLeftPercent = $value;
	}

}
?>
