<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'FeedbackDetailArrayType.php';
require_once 'FeedbackSummaryType.php';
require_once 'PaginationResultType.php';

/**
  * The <b>GetFeedback</b> response contains the feedback summary if a 
  * <b>TransactionID</b> or <b>ItemID</b> is specified, and contains the specified user's total
  * feedback score and feedback summary data if a <b>UserID</b> is specified. If no
  * value is supplied, the feedback score and feedback summary for the requesting
  * user will be returned. 
  * <br>
  * If a detail level value of <b>ReturnAll</b> is specified, an array of all feedback 
  * records will be returned.
  * 
 **/

class GetFeedbackResponseType extends AbstractResponseType
{
	/**
	* @var FeedbackDetailArrayType
	**/
	protected $FeedbackDetailArray;

	/**
	* @var int
	**/
	protected $FeedbackDetailItemTotal;

	/**
	* @var FeedbackSummaryType
	**/
	protected $FeedbackSummary;

	/**
	* @var int
	**/
	protected $FeedbackScore;

	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;

	/**
	* @var int
	**/
	protected $EntriesPerPage;

	/**
	* @var int
	**/
	protected $PageNumber;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FeedbackDetailArray' =>
				array(
					'required' => false,
					'type' => 'FeedbackDetailArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackDetailItemTotal' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackSummary' =>
				array(
					'required' => false,
					'type' => 'FeedbackSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EntriesPerPage' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PageNumber' =>
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
	 * @return FeedbackDetailArrayType
	 **/
	function getFeedbackDetailArray()
	{
		return $this->FeedbackDetailArray;
	}

	/**
	 * @return void
	 **/
	function setFeedbackDetailArray($value)
	{
		$this->FeedbackDetailArray = $value;
	}

	/**
	 * @return int
	 **/
	function getFeedbackDetailItemTotal()
	{
		return $this->FeedbackDetailItemTotal;
	}

	/**
	 * @return void
	 **/
	function setFeedbackDetailItemTotal($value)
	{
		$this->FeedbackDetailItemTotal = $value;
	}

	/**
	 * @return FeedbackSummaryType
	 **/
	function getFeedbackSummary()
	{
		return $this->FeedbackSummary;
	}

	/**
	 * @return void
	 **/
	function setFeedbackSummary($value)
	{
		$this->FeedbackSummary = $value;
	}

	/**
	 * @return int
	 **/
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}

	/**
	 * @return void
	 **/
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}

	/**
	 * @return PaginationResultType
	 **/
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}

	/**
	 * @return void
	 **/
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}

	/**
	 * @return int
	 **/
	function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
	}

	/**
	 * @return void
	 **/
	function setEntriesPerPage($value)
	{
		$this->EntriesPerPage = $value;
	}

	/**
	 * @return int
	 **/
	function getPageNumber()
	{
		return $this->PageNumber;
	}

	/**
	 * @return void
	 **/
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}

}
?>
