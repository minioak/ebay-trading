<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Specifies 1 year feedback metrics for a seller.
  * 
 **/

class SellerRoleMetricsType extends EbatNs_ComplexType
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
	* @var int
	**/
	protected $RepeatBuyerCount;

	/**
	* @var float
	**/
	protected $RepeatBuyerPercent;

	/**
	* @var int
	**/
	protected $UniqueBuyerCount;

	/**
	* @var float
	**/
	protected $TransactionPercent;

	/**
	* @var int
	**/
	protected $CrossBorderTransactionCount;

	/**
	* @var float
	**/
	protected $CrossBorderTransactionPercent;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerRoleMetricsType', 'urn:ebay:apis:eBLBaseComponents');
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
				),
				'RepeatBuyerCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RepeatBuyerPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UniqueBuyerCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossBorderTransactionCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossBorderTransactionPercent' =>
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

	/**
	 * @return int
	 **/
	function getRepeatBuyerCount()
	{
		return $this->RepeatBuyerCount;
	}

	/**
	 * @return void
	 **/
	function setRepeatBuyerCount($value)
	{
		$this->RepeatBuyerCount = $value;
	}

	/**
	 * @return float
	 **/
	function getRepeatBuyerPercent()
	{
		return $this->RepeatBuyerPercent;
	}

	/**
	 * @return void
	 **/
	function setRepeatBuyerPercent($value)
	{
		$this->RepeatBuyerPercent = $value;
	}

	/**
	 * @return int
	 **/
	function getUniqueBuyerCount()
	{
		return $this->UniqueBuyerCount;
	}

	/**
	 * @return void
	 **/
	function setUniqueBuyerCount($value)
	{
		$this->UniqueBuyerCount = $value;
	}

	/**
	 * @return float
	 **/
	function getTransactionPercent()
	{
		return $this->TransactionPercent;
	}

	/**
	 * @return void
	 **/
	function setTransactionPercent($value)
	{
		$this->TransactionPercent = $value;
	}

	/**
	 * @return int
	 **/
	function getCrossBorderTransactionCount()
	{
		return $this->CrossBorderTransactionCount;
	}

	/**
	 * @return void
	 **/
	function setCrossBorderTransactionCount($value)
	{
		$this->CrossBorderTransactionCount = $value;
	}

	/**
	 * @return float
	 **/
	function getCrossBorderTransactionPercent()
	{
		return $this->CrossBorderTransactionPercent;
	}

	/**
	 * @return void
	 **/
	function setCrossBorderTransactionPercent($value)
	{
		$this->CrossBorderTransactionPercent = $value;
	}

}
?>
