<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'FeedbackPeriodArrayType.php';
require_once 'SellerRatingSummaryArrayType.php';
require_once 'SellerRoleMetricsType.php';
require_once 'BuyerRoleMetricsType.php';

/**
  * Specifies all feedback summary information (except Score). Contains
  * FeedbackPeriodArrayType objects that each convey feedback counts for positive,
  * negative, neutral, and total feedback counts - for various time periods each. Also
  * conveys counts of bid retractions for the predefined time periods.
  * 
 **/

class FeedbackSummaryType extends EbatNs_ComplexType
{
	/**
	* @var FeedbackPeriodArrayType
	**/
	protected $BidRetractionFeedbackPeriodArray;

	/**
	* @var FeedbackPeriodArrayType
	**/
	protected $NegativeFeedbackPeriodArray;

	/**
	* @var FeedbackPeriodArrayType
	**/
	protected $NeutralFeedbackPeriodArray;

	/**
	* @var FeedbackPeriodArrayType
	**/
	protected $PositiveFeedbackPeriodArray;

	/**
	* @var FeedbackPeriodArrayType
	**/
	protected $TotalFeedbackPeriodArray;

	/**
	* @var int
	**/
	protected $NeutralCommentCountFromSuspendedUsers;

	/**
	* @var int
	**/
	protected $UniqueNegativeFeedbackCount;

	/**
	* @var int
	**/
	protected $UniquePositiveFeedbackCount;

	/**
	* @var int
	**/
	protected $UniqueNeutralFeedbackCount;

	/**
	* @var SellerRatingSummaryArrayType
	**/
	protected $SellerRatingSummaryArray;

	/**
	* @var SellerRoleMetricsType
	**/
	protected $SellerRoleMetrics;

	/**
	* @var BuyerRoleMetricsType
	**/
	protected $BuyerRoleMetrics;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BidRetractionFeedbackPeriodArray' =>
				array(
					'required' => false,
					'type' => 'FeedbackPeriodArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NegativeFeedbackPeriodArray' =>
				array(
					'required' => false,
					'type' => 'FeedbackPeriodArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NeutralFeedbackPeriodArray' =>
				array(
					'required' => false,
					'type' => 'FeedbackPeriodArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PositiveFeedbackPeriodArray' =>
				array(
					'required' => false,
					'type' => 'FeedbackPeriodArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalFeedbackPeriodArray' =>
				array(
					'required' => false,
					'type' => 'FeedbackPeriodArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NeutralCommentCountFromSuspendedUsers' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UniqueNegativeFeedbackCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UniquePositiveFeedbackCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UniqueNeutralFeedbackCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerRatingSummaryArray' =>
				array(
					'required' => false,
					'type' => 'SellerRatingSummaryArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerRoleMetrics' =>
				array(
					'required' => false,
					'type' => 'SellerRoleMetricsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerRoleMetrics' =>
				array(
					'required' => false,
					'type' => 'BuyerRoleMetricsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return FeedbackPeriodArrayType
	 **/
	function getBidRetractionFeedbackPeriodArray()
	{
		return $this->BidRetractionFeedbackPeriodArray;
	}

	/**
	 * @return void
	 **/
	function setBidRetractionFeedbackPeriodArray($value)
	{
		$this->BidRetractionFeedbackPeriodArray = $value;
	}

	/**
	 * @return FeedbackPeriodArrayType
	 **/
	function getNegativeFeedbackPeriodArray()
	{
		return $this->NegativeFeedbackPeriodArray;
	}

	/**
	 * @return void
	 **/
	function setNegativeFeedbackPeriodArray($value)
	{
		$this->NegativeFeedbackPeriodArray = $value;
	}

	/**
	 * @return FeedbackPeriodArrayType
	 **/
	function getNeutralFeedbackPeriodArray()
	{
		return $this->NeutralFeedbackPeriodArray;
	}

	/**
	 * @return void
	 **/
	function setNeutralFeedbackPeriodArray($value)
	{
		$this->NeutralFeedbackPeriodArray = $value;
	}

	/**
	 * @return FeedbackPeriodArrayType
	 **/
	function getPositiveFeedbackPeriodArray()
	{
		return $this->PositiveFeedbackPeriodArray;
	}

	/**
	 * @return void
	 **/
	function setPositiveFeedbackPeriodArray($value)
	{
		$this->PositiveFeedbackPeriodArray = $value;
	}

	/**
	 * @return FeedbackPeriodArrayType
	 **/
	function getTotalFeedbackPeriodArray()
	{
		return $this->TotalFeedbackPeriodArray;
	}

	/**
	 * @return void
	 **/
	function setTotalFeedbackPeriodArray($value)
	{
		$this->TotalFeedbackPeriodArray = $value;
	}

	/**
	 * @return int
	 **/
	function getNeutralCommentCountFromSuspendedUsers()
	{
		return $this->NeutralCommentCountFromSuspendedUsers;
	}

	/**
	 * @return void
	 **/
	function setNeutralCommentCountFromSuspendedUsers($value)
	{
		$this->NeutralCommentCountFromSuspendedUsers = $value;
	}

	/**
	 * @return int
	 **/
	function getUniqueNegativeFeedbackCount()
	{
		return $this->UniqueNegativeFeedbackCount;
	}

	/**
	 * @return void
	 **/
	function setUniqueNegativeFeedbackCount($value)
	{
		$this->UniqueNegativeFeedbackCount = $value;
	}

	/**
	 * @return int
	 **/
	function getUniquePositiveFeedbackCount()
	{
		return $this->UniquePositiveFeedbackCount;
	}

	/**
	 * @return void
	 **/
	function setUniquePositiveFeedbackCount($value)
	{
		$this->UniquePositiveFeedbackCount = $value;
	}

	/**
	 * @return int
	 **/
	function getUniqueNeutralFeedbackCount()
	{
		return $this->UniqueNeutralFeedbackCount;
	}

	/**
	 * @return void
	 **/
	function setUniqueNeutralFeedbackCount($value)
	{
		$this->UniqueNeutralFeedbackCount = $value;
	}

	/**
	 * @return SellerRatingSummaryArrayType
	 **/
	function getSellerRatingSummaryArray()
	{
		return $this->SellerRatingSummaryArray;
	}

	/**
	 * @return void
	 **/
	function setSellerRatingSummaryArray($value)
	{
		$this->SellerRatingSummaryArray = $value;
	}

	/**
	 * @return SellerRoleMetricsType
	 **/
	function getSellerRoleMetrics()
	{
		return $this->SellerRoleMetrics;
	}

	/**
	 * @return void
	 **/
	function setSellerRoleMetrics($value)
	{
		$this->SellerRoleMetrics = $value;
	}

	/**
	 * @return BuyerRoleMetricsType
	 **/
	function getBuyerRoleMetrics()
	{
		return $this->BuyerRoleMetrics;
	}

	/**
	 * @return void
	 **/
	function setBuyerRoleMetrics($value)
	{
		$this->BuyerRoleMetrics = $value;
	}

}
?>
