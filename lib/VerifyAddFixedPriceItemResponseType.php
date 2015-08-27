<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'ItemIDType.php';
require_once 'SKUType.php';
require_once 'FeesType.php';
require_once 'ExpressItemRequirementsType.php';
require_once 'DiscountReasonCodeType.php';
require_once 'ListingRecommendationsType.php';

/**
  * Returns the listing recommendations (if applicable), the
  * estimated fees for the proposed new listing (except the Final Value Fee, which isn't calculated
  * until the item has sold), and other details.
  * 
 **/

class VerifyAddFixedPriceItemResponseType extends AbstractResponseType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var SKUType
	**/
	protected $SKU;

	/**
	* @var FeesType
	**/
	protected $Fees;

	/**
	* @var boolean
	**/
	protected $ExpressListing;

	/**
	* @var ExpressItemRequirementsType
	**/
	protected $ExpressItemRequirements;

	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var string
	**/
	protected $Category2ID;

	/**
	* @var DiscountReasonCodeType
	**/
	protected $DiscountReason;

	/**
	* @var ListingRecommendationsType
	**/
	protected $ListingRecommendations;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VerifyAddFixedPriceItemResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SKU' =>
				array(
					'required' => false,
					'type' => 'SKUType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fees' =>
				array(
					'required' => false,
					'type' => 'FeesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressListing' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressItemRequirements' =>
				array(
					'required' => false,
					'type' => 'ExpressItemRequirementsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'Category2ID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountReason' =>
				array(
					'required' => false,
					'type' => 'DiscountReasonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ListingRecommendations' =>
				array(
					'required' => false,
					'type' => 'ListingRecommendationsType',
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
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return SKUType
	 **/
	function getSKU()
	{
		return $this->SKU;
	}

	/**
	 * @return void
	 **/
	function setSKU($value)
	{
		$this->SKU = $value;
	}

	/**
	 * @return FeesType
	 **/
	function getFees()
	{
		return $this->Fees;
	}

	/**
	 * @return void
	 **/
	function setFees($value)
	{
		$this->Fees = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpressListing()
	{
		return $this->ExpressListing;
	}

	/**
	 * @return void
	 **/
	function setExpressListing($value)
	{
		$this->ExpressListing = $value;
	}

	/**
	 * @return ExpressItemRequirementsType
	 **/
	function getExpressItemRequirements()
	{
		return $this->ExpressItemRequirements;
	}

	/**
	 * @return void
	 **/
	function setExpressItemRequirements($value)
	{
		$this->ExpressItemRequirements = $value;
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
	 * @return string
	 **/
	function getCategory2ID()
	{
		return $this->Category2ID;
	}

	/**
	 * @return void
	 **/
	function setCategory2ID($value)
	{
		$this->Category2ID = $value;
	}

	/**
	 * @return DiscountReasonCodeType
	 * @param integer $index 
	 **/
	function getDiscountReason($index = null)
	{
		if ($index !== null)
		{
			return $this->DiscountReason[$index];
		}
		else
		{
			return $this->DiscountReason;
		}
	}

	/**
	 * @return void
	 * @param DiscountReasonCodeType $value
	 * @param integer $index 
	 **/
	function setDiscountReason($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DiscountReason[$index] = $value;
		}
		else
		{
			$this->DiscountReason= $value;
		}
	}

	/**
	 * @return void
	 * @param DiscountReasonCodeType $value
	 **/
	function addDiscountReason($value)
	{
		$this->DiscountReason[] = $value;
	}

	/**
	 * @return ListingRecommendationsType
	 **/
	function getListingRecommendations()
	{
		return $this->ListingRecommendations;
	}

	/**
	 * @return void
	 **/
	function setListingRecommendations($value)
	{
		$this->ListingRecommendations = $value;
	}

}
?>
