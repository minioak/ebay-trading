<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'FeedbackSummaryPeriodCodeType.php';
require_once 'AverageRatingDetailsType.php';

/**
  * This type is used by the <b>AverageRatingSummary</b> container that is returned in the <b>GetFeedback</b> call to display the seller's rating information across the four different Detail Seller Rating areas. The Detail Seller Rating subject areas include Item as Described, Communication, Shipping Time, and Shipping and Handling charges.
  * 
 **/

class AverageRatingSummaryType extends EbatNs_ComplexType
{
	/**
	* @var FeedbackSummaryPeriodCodeType
	**/
	protected $FeedbackSummaryPeriod;

	/**
	* @var AverageRatingDetailsType
	**/
	protected $AverageRatingDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AverageRatingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FeedbackSummaryPeriod' =>
				array(
					'required' => false,
					'type' => 'FeedbackSummaryPeriodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AverageRatingDetails' =>
				array(
					'required' => false,
					'type' => 'AverageRatingDetailsType',
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
	 * @return FeedbackSummaryPeriodCodeType
	 **/
	function getFeedbackSummaryPeriod()
	{
		return $this->FeedbackSummaryPeriod;
	}

	/**
	 * @return void
	 **/
	function setFeedbackSummaryPeriod($value)
	{
		$this->FeedbackSummaryPeriod = $value;
	}

	/**
	 * @return AverageRatingDetailsType
	 * @param integer $index 
	 **/
	function getAverageRatingDetails($index = null)
	{
		if ($index !== null)
		{
			return $this->AverageRatingDetails[$index];
		}
		else
		{
			return $this->AverageRatingDetails;
		}
	}

	/**
	 * @return void
	 * @param AverageRatingDetailsType $value
	 * @param integer $index 
	 **/
	function setAverageRatingDetails($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AverageRatingDetails[$index] = $value;
		}
		else
		{
			$this->AverageRatingDetails= $value;
		}
	}

	/**
	 * @return void
	 * @param AverageRatingDetailsType $value
	 **/
	function addAverageRatingDetails($value)
	{
		$this->AverageRatingDetails[] = $value;
	}

}
?>
