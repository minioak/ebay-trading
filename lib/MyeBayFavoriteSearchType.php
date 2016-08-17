<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SimpleItemSortCodeType.php';
require_once 'SortOrderCodeType.php';
require_once 'ItemTypeCodeType.php';
require_once 'AmountType.php';
require_once 'CurrencyCodeType.php';
require_once 'SearchFlagCodeType.php';
require_once 'PaymentMethodSearchCodeType.php';
require_once 'PreferredLocationCodeType.php';
require_once 'CountryCodeType.php';
require_once 'SellerBusinessCodeType.php';
require_once 'ItemConditionCodeType.php';
require_once 'QuantityOperatorCodeType.php';

/**
  * Type defining the <b>FavoriteSearch</b> container returned in
  * <b>GetMyeBayBuying</b>. The <b>FavoriteSearch</b> container
  * consists of options and filtering used in a buyer's Saved Search on My eBay, and is
  * only returned in <b>GetMyeBayBuying</b> if the <b>FavoriteSearches</b>
  * container is included the request, and if there is at least one Saved Search for
  * the buyer.
  * 
 **/

class MyeBayFavoriteSearchType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $SearchName;

	/**
	* @var string
	**/
	protected $SearchQuery;

	/**
	* @var string
	**/
	protected $QueryKeywords;

	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var SimpleItemSortCodeType
	**/
	protected $ItemSort;

	/**
	* @var SortOrderCodeType
	**/
	protected $SortOrder;

	/**
	* @var dateTime
	**/
	protected $EndTimeFrom;

	/**
	* @var dateTime
	**/
	protected $EndTimeTo;

	/**
	* @var int
	**/
	protected $MaxDistance;

	/**
	* @var string
	**/
	protected $PostalCode;

	/**
	* @var ItemTypeCodeType
	**/
	protected $ItemType;

	/**
	* @var AmountType
	**/
	protected $PriceMax;

	/**
	* @var AmountType
	**/
	protected $PriceMin;

	/**
	* @var CurrencyCodeType
	**/
	protected $Currency;

	/**
	* @var int
	**/
	protected $BidCountMax;

	/**
	* @var int
	**/
	protected $BidCountMin;

	/**
	* @var SearchFlagCodeType
	**/
	protected $SearchFlag;

	/**
	* @var PaymentMethodSearchCodeType
	**/
	protected $PaymentMethod;

	/**
	* @var PreferredLocationCodeType
	**/
	protected $PreferredLocation;

	/**
	* @var string
	**/
	protected $SellerID;

	/**
	* @var string
	**/
	protected $SellerIDExclude;

	/**
	* @var CountryCodeType
	**/
	protected $ItemsAvailableTo;

	/**
	* @var CountryCodeType
	**/
	protected $ItemsLocatedIn;

	/**
	* @var SellerBusinessCodeType
	**/
	protected $SellerBusinessType;

	/**
	* @var ItemConditionCodeType
	**/
	protected $Condition;

	/**
	* @var int
	**/
	protected $Quantity;

	/**
	* @var QuantityOperatorCodeType
	**/
	protected $QuantityOperator;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyeBayFavoriteSearchType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SearchName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchQuery' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QueryKeywords' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemSort' =>
				array(
					'required' => false,
					'type' => 'SimpleItemSortCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SortOrder' =>
				array(
					'required' => false,
					'type' => 'SortOrderCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxDistance' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PostalCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemType' =>
				array(
					'required' => false,
					'type' => 'ItemTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PriceMax' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PriceMin' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Currency' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidCountMax' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidCountMin' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchFlag' =>
				array(
					'required' => false,
					'type' => 'SearchFlagCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'PaymentMethod' =>
				array(
					'required' => false,
					'type' => 'PaymentMethodSearchCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PreferredLocation' =>
				array(
					'required' => false,
					'type' => 'PreferredLocationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'SellerIDExclude' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ItemsAvailableTo' =>
				array(
					'required' => false,
					'type' => 'CountryCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemsLocatedIn' =>
				array(
					'required' => false,
					'type' => 'CountryCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerBusinessType' =>
				array(
					'required' => false,
					'type' => 'SellerBusinessCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Condition' =>
				array(
					'required' => false,
					'type' => 'ItemConditionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Quantity' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityOperator' =>
				array(
					'required' => false,
					'type' => 'QuantityOperatorCodeType',
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
	 * @return string
	 **/
	function getSearchName()
	{
		return $this->SearchName;
	}

	/**
	 * @return void
	 **/
	function setSearchName($value)
	{
		$this->SearchName = $value;
	}

	/**
	 * @return string
	 **/
	function getSearchQuery()
	{
		return $this->SearchQuery;
	}

	/**
	 * @return void
	 **/
	function setSearchQuery($value)
	{
		$this->SearchQuery = $value;
	}

	/**
	 * @return string
	 **/
	function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}

	/**
	 * @return void
	 **/
	function setQueryKeywords($value)
	{
		$this->QueryKeywords = $value;
	}

	/**
	 * @return string
	 **/
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return SimpleItemSortCodeType
	 **/
	function getItemSort()
	{
		return $this->ItemSort;
	}

	/**
	 * @return void
	 **/
	function setItemSort($value)
	{
		$this->ItemSort = $value;
	}

	/**
	 * @return SortOrderCodeType
	 **/
	function getSortOrder()
	{
		return $this->SortOrder;
	}

	/**
	 * @return void
	 **/
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndTimeFrom()
	{
		return $this->EndTimeFrom;
	}

	/**
	 * @return void
	 **/
	function setEndTimeFrom($value)
	{
		$this->EndTimeFrom = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndTimeTo()
	{
		return $this->EndTimeTo;
	}

	/**
	 * @return void
	 **/
	function setEndTimeTo($value)
	{
		$this->EndTimeTo = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxDistance()
	{
		return $this->MaxDistance;
	}

	/**
	 * @return void
	 **/
	function setMaxDistance($value)
	{
		$this->MaxDistance = $value;
	}

	/**
	 * @return string
	 **/
	function getPostalCode()
	{
		return $this->PostalCode;
	}

	/**
	 * @return void
	 **/
	function setPostalCode($value)
	{
		$this->PostalCode = $value;
	}

	/**
	 * @return ItemTypeCodeType
	 **/
	function getItemType()
	{
		return $this->ItemType;
	}

	/**
	 * @return void
	 **/
	function setItemType($value)
	{
		$this->ItemType = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getPriceMax()
	{
		return $this->PriceMax;
	}

	/**
	 * @return void
	 **/
	function setPriceMax($value)
	{
		$this->PriceMax = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getPriceMin()
	{
		return $this->PriceMin;
	}

	/**
	 * @return void
	 **/
	function setPriceMin($value)
	{
		$this->PriceMin = $value;
	}

	/**
	 * @return CurrencyCodeType
	 **/
	function getCurrency()
	{
		return $this->Currency;
	}

	/**
	 * @return void
	 **/
	function setCurrency($value)
	{
		$this->Currency = $value;
	}

	/**
	 * @return int
	 **/
	function getBidCountMax()
	{
		return $this->BidCountMax;
	}

	/**
	 * @return void
	 **/
	function setBidCountMax($value)
	{
		$this->BidCountMax = $value;
	}

	/**
	 * @return int
	 **/
	function getBidCountMin()
	{
		return $this->BidCountMin;
	}

	/**
	 * @return void
	 **/
	function setBidCountMin($value)
	{
		$this->BidCountMin = $value;
	}

	/**
	 * @return SearchFlagCodeType
	 * @param integer $index 
	 **/
	function getSearchFlag($index = null)
	{
		if ($index !== null)
		{
			return $this->SearchFlag[$index];
		}
		else
		{
			return $this->SearchFlag;
		}
	}

	/**
	 * @return void
	 * @param SearchFlagCodeType $value
	 * @param integer $index 
	 **/
	function setSearchFlag($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SearchFlag[$index] = $value;
		}
		else
		{
			$this->SearchFlag= $value;
		}
	}

	/**
	 * @return void
	 * @param SearchFlagCodeType $value
	 **/
	function addSearchFlag($value)
	{
		$this->SearchFlag[] = $value;
	}

	/**
	 * @return PaymentMethodSearchCodeType
	 **/
	function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}

	/**
	 * @return void
	 **/
	function setPaymentMethod($value)
	{
		$this->PaymentMethod = $value;
	}

	/**
	 * @return PreferredLocationCodeType
	 **/
	function getPreferredLocation()
	{
		return $this->PreferredLocation;
	}

	/**
	 * @return void
	 **/
	function setPreferredLocation($value)
	{
		$this->PreferredLocation = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getSellerID($index = null)
	{
		if ($index !== null)
		{
			return $this->SellerID[$index];
		}
		else
		{
			return $this->SellerID;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setSellerID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SellerID[$index] = $value;
		}
		else
		{
			$this->SellerID= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addSellerID($value)
	{
		$this->SellerID[] = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getSellerIDExclude($index = null)
	{
		if ($index !== null)
		{
			return $this->SellerIDExclude[$index];
		}
		else
		{
			return $this->SellerIDExclude;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setSellerIDExclude($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SellerIDExclude[$index] = $value;
		}
		else
		{
			$this->SellerIDExclude= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addSellerIDExclude($value)
	{
		$this->SellerIDExclude[] = $value;
	}

	/**
	 * @return CountryCodeType
	 **/
	function getItemsAvailableTo()
	{
		return $this->ItemsAvailableTo;
	}

	/**
	 * @return void
	 **/
	function setItemsAvailableTo($value)
	{
		$this->ItemsAvailableTo = $value;
	}

	/**
	 * @return CountryCodeType
	 **/
	function getItemsLocatedIn()
	{
		return $this->ItemsLocatedIn;
	}

	/**
	 * @return void
	 **/
	function setItemsLocatedIn($value)
	{
		$this->ItemsLocatedIn = $value;
	}

	/**
	 * @return SellerBusinessCodeType
	 **/
	function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}

	/**
	 * @return void
	 **/
	function setSellerBusinessType($value)
	{
		$this->SellerBusinessType = $value;
	}

	/**
	 * @return ItemConditionCodeType
	 **/
	function getCondition()
	{
		return $this->Condition;
	}

	/**
	 * @return void
	 **/
	function setCondition($value)
	{
		$this->Condition = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantity()
	{
		return $this->Quantity;
	}

	/**
	 * @return void
	 **/
	function setQuantity($value)
	{
		$this->Quantity = $value;
	}

	/**
	 * @return QuantityOperatorCodeType
	 **/
	function getQuantityOperator()
	{
		return $this->QuantityOperator;
	}

	/**
	 * @return void
	 **/
	function setQuantityOperator($value)
	{
		$this->QuantityOperator = $value;
	}

}
?>
