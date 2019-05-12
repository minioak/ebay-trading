<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * Contains summary information about the items the seller is selling.
  * 
 **/

class SellingSummaryType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $ActiveAuctionCount;

	/**
	* @var int
	**/
	protected $AuctionSellingCount;

	/**
	* @var int
	**/
	protected $AuctionBidCount;

	/**
	* @var AmountType
	**/
	protected $TotalAuctionSellingValue;

	/**
	* @var int
	**/
	protected $TotalSoldCount;

	/**
	* @var AmountType
	**/
	protected $TotalSoldValue;

	/**
	* @var int
	**/
	protected $SoldDurationInDays;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return int
	 **/
	function getActiveAuctionCount()
	{
		return $this->ActiveAuctionCount;
	}

	/**
	 * @return void
	 **/
	function setActiveAuctionCount($value)
	{
		$this->ActiveAuctionCount = $value;
	}

	/**
	 * @return int
	 **/
	function getAuctionSellingCount()
	{
		return $this->AuctionSellingCount;
	}

	/**
	 * @return void
	 **/
	function setAuctionSellingCount($value)
	{
		$this->AuctionSellingCount = $value;
	}

	/**
	 * @return int
	 **/
	function getAuctionBidCount()
	{
		return $this->AuctionBidCount;
	}

	/**
	 * @return void
	 **/
	function setAuctionBidCount($value)
	{
		$this->AuctionBidCount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalAuctionSellingValue()
	{
		return $this->TotalAuctionSellingValue;
	}

	/**
	 * @return void
	 **/
	function setTotalAuctionSellingValue($value)
	{
		$this->TotalAuctionSellingValue = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalSoldCount()
	{
		return $this->TotalSoldCount;
	}

	/**
	 * @return void
	 **/
	function setTotalSoldCount($value)
	{
		$this->TotalSoldCount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalSoldValue()
	{
		return $this->TotalSoldValue;
	}

	/**
	 * @return void
	 **/
	function setTotalSoldValue($value)
	{
		$this->TotalSoldValue = $value;
	}

	/**
	 * @return int
	 **/
	function getSoldDurationInDays()
	{
		return $this->SoldDurationInDays;
	}

	/**
	 * @return void
	 **/
	function setSoldDurationInDays($value)
	{
		$this->SoldDurationInDays = $value;
	}

}
?>
