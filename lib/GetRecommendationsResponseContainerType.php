<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingAnalyzerRecommendationsType.php';
require_once 'SIFFTASRecommendationsType.php';
require_once 'PricingRecommendationsType.php';
require_once 'AttributeRecommendationsType.php';
require_once 'ProductRecommendationsType.php';
require_once 'RecommendationsType.php';
require_once 'ProductListingDetailsType.php';

/**
  * Returns recommended changes or opportunities for improvement
  * related to listing data that was passed in a GetItemRecommendations request.
  * 
 **/

class GetRecommendationsResponseContainerType extends EbatNs_ComplexType
{
	/**
	* @var ListingAnalyzerRecommendationsType
	**/
	protected $ListingAnalyzerRecommendations;

	/**
	* @var SIFFTASRecommendationsType
	**/
	protected $SIFFTASRecommendations;

	/**
	* @var PricingRecommendationsType
	**/
	protected $PricingRecommendations;

	/**
	* @var AttributeRecommendationsType
	**/
	protected $AttributeRecommendations;

	/**
	* @var ProductRecommendationsType
	**/
	protected $ProductRecommendations;

	/**
	* @var string
	**/
	protected $CorrelationID;

	/**
	* @var RecommendationsType
	**/
	protected $Recommendations;

	/**
	* @var ProductListingDetailsType
	**/
	protected $ProductListingDetails;

	/**
	* @var string
	**/
	protected $Title;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetRecommendationsResponseContainerType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ListingAnalyzerRecommendations' =>
				array(
					'required' => false,
					'type' => 'ListingAnalyzerRecommendationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SIFFTASRecommendations' =>
				array(
					'required' => false,
					'type' => 'SIFFTASRecommendationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PricingRecommendations' =>
				array(
					'required' => false,
					'type' => 'PricingRecommendationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeRecommendations' =>
				array(
					'required' => false,
					'type' => 'AttributeRecommendationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductRecommendations' =>
				array(
					'required' => false,
					'type' => 'ProductRecommendationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CorrelationID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Recommendations' =>
				array(
					'required' => false,
					'type' => 'RecommendationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductListingDetails' =>
				array(
					'required' => false,
					'type' => 'ProductListingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Title' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return ListingAnalyzerRecommendationsType
	 **/
	function getListingAnalyzerRecommendations()
	{
		return $this->ListingAnalyzerRecommendations;
	}

	/**
	 * @return void
	 **/
	function setListingAnalyzerRecommendations($value)
	{
		$this->ListingAnalyzerRecommendations = $value;
	}

	/**
	 * @return SIFFTASRecommendationsType
	 **/
	function getSIFFTASRecommendations()
	{
		return $this->SIFFTASRecommendations;
	}

	/**
	 * @return void
	 **/
	function setSIFFTASRecommendations($value)
	{
		$this->SIFFTASRecommendations = $value;
	}

	/**
	 * @return PricingRecommendationsType
	 **/
	function getPricingRecommendations()
	{
		return $this->PricingRecommendations;
	}

	/**
	 * @return void
	 **/
	function setPricingRecommendations($value)
	{
		$this->PricingRecommendations = $value;
	}

	/**
	 * @return AttributeRecommendationsType
	 **/
	function getAttributeRecommendations()
	{
		return $this->AttributeRecommendations;
	}

	/**
	 * @return void
	 **/
	function setAttributeRecommendations($value)
	{
		$this->AttributeRecommendations = $value;
	}

	/**
	 * @return ProductRecommendationsType
	 **/
	function getProductRecommendations()
	{
		return $this->ProductRecommendations;
	}

	/**
	 * @return void
	 **/
	function setProductRecommendations($value)
	{
		$this->ProductRecommendations = $value;
	}

	/**
	 * @return string
	 **/
	function getCorrelationID()
	{
		return $this->CorrelationID;
	}

	/**
	 * @return void
	 **/
	function setCorrelationID($value)
	{
		$this->CorrelationID = $value;
	}

	/**
	 * @return RecommendationsType
	 **/
	function getRecommendations()
	{
		return $this->Recommendations;
	}

	/**
	 * @return void
	 **/
	function setRecommendations($value)
	{
		$this->Recommendations = $value;
	}

	/**
	 * @return ProductListingDetailsType
	 **/
	function getProductListingDetails()
	{
		return $this->ProductListingDetails;
	}

	/**
	 * @return void
	 **/
	function setProductListingDetails($value)
	{
		$this->ProductListingDetails = $value;
	}

	/**
	 * @return string
	 **/
	function getTitle()
	{
		return $this->Title;
	}

	/**
	 * @return void
	 **/
	function setTitle($value)
	{
		$this->Title = $value;
	}

}
?>
