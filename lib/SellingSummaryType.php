<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Contains summary information about the items the seller is selling. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingSummaryType.html
 *
 */
class SellingSummaryType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ActiveAuctionCount;
	/**
	 * @var int
	 */
	protected $AuctionSellingCount;
	/**
	 * @var int
	 */
	protected $AuctionBidCount;
	/**
	 * @var AmountType
	 */
	protected $TotalAuctionSellingValue;
	/**
	 * @var int
	 */
	protected $TotalSoldCount;
	/**
	 * @var AmountType
	 */
	protected $TotalSoldValue;
	/**
	 * @var int
	 */
	protected $SoldDurationInDays;

	/**
	 * @return int
	 */
	function getActiveAuctionCount()
	{
		return $this->ActiveAuctionCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setActiveAuctionCount($value)
	{
		$this->ActiveAuctionCount = $value;
	}
	/**
	 * @return int
	 */
	function getAuctionSellingCount()
	{
		return $this->AuctionSellingCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setAuctionSellingCount($value)
	{
		$this->AuctionSellingCount = $value;
	}
	/**
	 * @return int
	 */
	function getAuctionBidCount()
	{
		return $this->AuctionBidCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setAuctionBidCount($value)
	{
		$this->AuctionBidCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalAuctionSellingValue()
	{
		return $this->TotalAuctionSellingValue;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalAuctionSellingValue($value)
	{
		$this->TotalAuctionSellingValue = $value;
	}
	/**
	 * @return int
	 */
	function getTotalSoldCount()
	{
		return $this->TotalSoldCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalSoldCount($value)
	{
		$this->TotalSoldCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalSoldValue()
	{
		return $this->TotalSoldValue;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalSoldValue($value)
	{
		$this->TotalSoldValue = $value;
	}
	/**
	 * @return int
	 */
	function getSoldDurationInDays()
	{
		return $this->SoldDurationInDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setSoldDurationInDays($value)
	{
		$this->SoldDurationInDays = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ActiveAuctionCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AuctionSellingCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AuctionBidCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalAuctionSellingValue' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalSoldCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalSoldValue' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SoldDurationInDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
