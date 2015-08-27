<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BoldTitleCodeType.php';
require_once 'BorderCodeType.php';
require_once 'HighlightCodeType.php';
require_once 'GiftIconCodeType.php';
require_once 'HomePageFeaturedCodeType.php';
require_once 'FeaturedFirstCodeType.php';
require_once 'FeaturedPlusCodeType.php';
require_once 'ProPackCodeType.php';

/**
  * Details about feature availability for the site.
  * 
 **/

class ListingFeatureDetailsType extends EbatNs_ComplexType
{
	/**
	* @var BoldTitleCodeType
	**/
	protected $BoldTitle;

	/**
	* @var BorderCodeType
	**/
	protected $Border;

	/**
	* @var HighlightCodeType
	**/
	protected $Highlight;

	/**
	* @var GiftIconCodeType
	**/
	protected $GiftIcon;

	/**
	* @var HomePageFeaturedCodeType
	**/
	protected $HomePageFeatured;

	/**
	* @var FeaturedFirstCodeType
	**/
	protected $FeaturedFirst;

	/**
	* @var FeaturedPlusCodeType
	**/
	protected $FeaturedPlus;

	/**
	* @var ProPackCodeType
	**/
	protected $ProPack;

	/**
	* @var string
	**/
	protected $DetailVersion;

	/**
	* @var dateTime
	**/
	protected $UpdateTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingFeatureDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BoldTitle' =>
				array(
					'required' => false,
					'type' => 'BoldTitleCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Border' =>
				array(
					'required' => false,
					'type' => 'BorderCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Highlight' =>
				array(
					'required' => false,
					'type' => 'HighlightCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GiftIcon' =>
				array(
					'required' => false,
					'type' => 'GiftIconCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HomePageFeatured' =>
				array(
					'required' => false,
					'type' => 'HomePageFeaturedCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeaturedFirst' =>
				array(
					'required' => false,
					'type' => 'FeaturedFirstCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeaturedPlus' =>
				array(
					'required' => false,
					'type' => 'FeaturedPlusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProPack' =>
				array(
					'required' => false,
					'type' => 'ProPackCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return BoldTitleCodeType
	 **/
	function getBoldTitle()
	{
		return $this->BoldTitle;
	}

	/**
	 * @return void
	 **/
	function setBoldTitle($value)
	{
		$this->BoldTitle = $value;
	}

	/**
	 * @return BorderCodeType
	 **/
	function getBorder()
	{
		return $this->Border;
	}

	/**
	 * @return void
	 **/
	function setBorder($value)
	{
		$this->Border = $value;
	}

	/**
	 * @return HighlightCodeType
	 **/
	function getHighlight()
	{
		return $this->Highlight;
	}

	/**
	 * @return void
	 **/
	function setHighlight($value)
	{
		$this->Highlight = $value;
	}

	/**
	 * @return GiftIconCodeType
	 **/
	function getGiftIcon()
	{
		return $this->GiftIcon;
	}

	/**
	 * @return void
	 **/
	function setGiftIcon($value)
	{
		$this->GiftIcon = $value;
	}

	/**
	 * @return HomePageFeaturedCodeType
	 **/
	function getHomePageFeatured()
	{
		return $this->HomePageFeatured;
	}

	/**
	 * @return void
	 **/
	function setHomePageFeatured($value)
	{
		$this->HomePageFeatured = $value;
	}

	/**
	 * @return FeaturedFirstCodeType
	 **/
	function getFeaturedFirst()
	{
		return $this->FeaturedFirst;
	}

	/**
	 * @return void
	 **/
	function setFeaturedFirst($value)
	{
		$this->FeaturedFirst = $value;
	}

	/**
	 * @return FeaturedPlusCodeType
	 **/
	function getFeaturedPlus()
	{
		return $this->FeaturedPlus;
	}

	/**
	 * @return void
	 **/
	function setFeaturedPlus($value)
	{
		$this->FeaturedPlus = $value;
	}

	/**
	 * @return ProPackCodeType
	 **/
	function getProPack()
	{
		return $this->ProPack;
	}

	/**
	 * @return void
	 **/
	function setProPack($value)
	{
		$this->ProPack = $value;
	}

	/**
	 * @return string
	 **/
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}

	/**
	 * @return void
	 **/
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}

	/**
	 * @return void
	 **/
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}

}
?>
