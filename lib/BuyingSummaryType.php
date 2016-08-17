<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * Type defining the <b>BuyingSummary</b> container returned in
  * <b>GetMyeBayBuying</b>. The <b>BuyingSummary</b> container
  * consists of data that summarizes the buyer's recent buying activity, including the
  * number of items the user has bid on, the number of items the user is winning, and the number of items
  * the user has won. The <b>BuyingSummary</b> container is only returned if
  * the <b>BuyingSummary.Include</b> field is included in the <b>GetMyeBayBuying</b> request and set to
  * <code>true</code>.
  * 
 **/

class BuyingSummaryType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $BiddingCount;

	/**
	* @var int
	**/
	protected $WinningCount;

	/**
	* @var AmountType
	**/
	protected $TotalWinningCost;

	/**
	* @var int
	**/
	protected $WonCount;

	/**
	* @var AmountType
	**/
	protected $TotalWonCost;

	/**
	* @var int
	**/
	protected $WonDurationInDays;

	/**
	* @var int
	**/
	protected $BestOfferCount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BuyingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BiddingCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WinningCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalWinningCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WonCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalWonCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WonDurationInDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferCount' =>
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
	function getBiddingCount()
	{
		return $this->BiddingCount;
	}

	/**
	 * @return void
	 **/
	function setBiddingCount($value)
	{
		$this->BiddingCount = $value;
	}

	/**
	 * @return int
	 **/
	function getWinningCount()
	{
		return $this->WinningCount;
	}

	/**
	 * @return void
	 **/
	function setWinningCount($value)
	{
		$this->WinningCount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalWinningCost()
	{
		return $this->TotalWinningCost;
	}

	/**
	 * @return void
	 **/
	function setTotalWinningCost($value)
	{
		$this->TotalWinningCost = $value;
	}

	/**
	 * @return int
	 **/
	function getWonCount()
	{
		return $this->WonCount;
	}

	/**
	 * @return void
	 **/
	function setWonCount($value)
	{
		$this->WonCount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalWonCost()
	{
		return $this->TotalWonCost;
	}

	/**
	 * @return void
	 **/
	function setTotalWonCost($value)
	{
		$this->TotalWonCost = $value;
	}

	/**
	 * @return int
	 **/
	function getWonDurationInDays()
	{
		return $this->WonDurationInDays;
	}

	/**
	 * @return void
	 **/
	function setWonDurationInDays($value)
	{
		$this->WonDurationInDays = $value;
	}

	/**
	 * @return int
	 **/
	function getBestOfferCount()
	{
		return $this->BestOfferCount;
	}

	/**
	 * @return void
	 **/
	function setBestOfferCount($value)
	{
		$this->BestOfferCount = $value;
	}

}
?>
