<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemBidDetailsType.php';

/**
  * Type used by the <b>BiddingSummary</b> container, which is returned in the <b>GetAllBidders</b> response if the <b>IncludeBiddingSummary</b> boolean field is included and set to <code>true</code> in the call request. The <b>BiddingSummary</b> container consists of bidding history information for a specific bidder (specified in the <b>User.UserID</b> field).
  * 
 **/

class BiddingSummaryType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $SummaryDays;

	/**
	* @var int
	**/
	protected $TotalBids;

	/**
	* @var int
	**/
	protected $BidActivityWithSeller;

	/**
	* @var int
	**/
	protected $BidsToUniqueSellers;

	/**
	* @var int
	**/
	protected $BidsToUniqueCategories;

	/**
	* @var int
	**/
	protected $BidRetractions;

	/**
	* @var ItemBidDetailsType
	**/
	protected $ItemBidDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BiddingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SummaryDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalBids' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidActivityWithSeller' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidsToUniqueSellers' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidsToUniqueCategories' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidRetractions' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemBidDetails' =>
				array(
					'required' => false,
					'type' => 'ItemBidDetailsType',
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
	 * @return int
	 **/
	function getSummaryDays()
	{
		return $this->SummaryDays;
	}

	/**
	 * @return void
	 **/
	function setSummaryDays($value)
	{
		$this->SummaryDays = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalBids()
	{
		return $this->TotalBids;
	}

	/**
	 * @return void
	 **/
	function setTotalBids($value)
	{
		$this->TotalBids = $value;
	}

	/**
	 * @return int
	 **/
	function getBidActivityWithSeller()
	{
		return $this->BidActivityWithSeller;
	}

	/**
	 * @return void
	 **/
	function setBidActivityWithSeller($value)
	{
		$this->BidActivityWithSeller = $value;
	}

	/**
	 * @return int
	 **/
	function getBidsToUniqueSellers()
	{
		return $this->BidsToUniqueSellers;
	}

	/**
	 * @return void
	 **/
	function setBidsToUniqueSellers($value)
	{
		$this->BidsToUniqueSellers = $value;
	}

	/**
	 * @return int
	 **/
	function getBidsToUniqueCategories()
	{
		return $this->BidsToUniqueCategories;
	}

	/**
	 * @return void
	 **/
	function setBidsToUniqueCategories($value)
	{
		$this->BidsToUniqueCategories = $value;
	}

	/**
	 * @return int
	 **/
	function getBidRetractions()
	{
		return $this->BidRetractions;
	}

	/**
	 * @return void
	 **/
	function setBidRetractions($value)
	{
		$this->BidRetractions = $value;
	}

	/**
	 * @return ItemBidDetailsType
	 * @param integer $index 
	 **/
	function getItemBidDetails($index = null)
	{
		if ($index !== null)
		{
			return $this->ItemBidDetails[$index];
		}
		else
		{
			return $this->ItemBidDetails;
		}
	}

	/**
	 * @return void
	 * @param ItemBidDetailsType $value
	 * @param integer $index 
	 **/
	function setItemBidDetails($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ItemBidDetails[$index] = $value;
		}
		else
		{
			$this->ItemBidDetails= $value;
		}
	}

	/**
	 * @return void
	 * @param ItemBidDetailsType $value
	 **/
	function addItemBidDetails($value)
	{
		$this->ItemBidDetails[] = $value;
	}

}
?>
