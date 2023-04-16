<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from March 29, 2023, 11:17 am.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 *
 *
 * For paid support options ranging from on-demand,
 * best effort to 24/7 SLAs, please contact us anytime:
 *  ebay.api@InTradeSys.com
 *
 * For more information, visit:
 *  https://sdk.intradesys.com
 */


/**
 * This type is deprecated.
 **/
class GetRecommendationsResponseContainerType extends EbatNs_ComplexType
{
    const TAG = 'GetRecommendationsResponseContainerType';
    const NAME = 'GetRecommendationsResponseContainerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ListingAnalyzerRecommendationsType|null
     */
    protected $ListingAnalyzerRecommendations = null;

    /**
     * @var SIFFTASRecommendationsType|null
     */
    protected $SIFFTASRecommendations = null;

    /**
     * @var PricingRecommendationsType|null
     */
    protected $PricingRecommendations = null;

    /**
     * @var AttributeRecommendationsType|null
     */
    protected $AttributeRecommendations = null;

    /**
     * @var ProductRecommendationsType|null
     */
    protected $ProductRecommendations = null;

    /**
     * @var string|null
     */
    protected $CorrelationID = null;

    /**
     * @var RecommendationsType|null
     */
    protected $Recommendations = null;

    /**
     * @var ProductListingDetailsType|null
     */
    protected $ProductListingDetails = null;

    /**
     * @var string|null
     */
    protected $Title = null;


    /**
     * @return ListingAnalyzerRecommendationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingAnalyzerRecommendations()
    {
        return $this->_dc($this->ListingAnalyzerRecommendations, 'ListingAnalyzerRecommendations');
    }

    /**
     * @param ListingAnalyzerRecommendationsType|null $value
     * @return void
     */
    public function setListingAnalyzerRecommendations($value)
    {
        $this->ListingAnalyzerRecommendations = $value;
    }

    /**
     * @return SIFFTASRecommendationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSIFFTASRecommendations()
    {
        return $this->_dc($this->SIFFTASRecommendations, 'SIFFTASRecommendations');
    }

    /**
     * @param SIFFTASRecommendationsType|null $value
     * @return void
     */
    public function setSIFFTASRecommendations($value)
    {
        $this->SIFFTASRecommendations = $value;
    }

    /**
     * @return PricingRecommendationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPricingRecommendations()
    {
        return $this->_dc($this->PricingRecommendations, 'PricingRecommendations');
    }

    /**
     * @param PricingRecommendationsType|null $value
     * @return void
     */
    public function setPricingRecommendations($value)
    {
        $this->PricingRecommendations = $value;
    }

    /**
     * @return AttributeRecommendationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAttributeRecommendations()
    {
        return $this->_dc($this->AttributeRecommendations, 'AttributeRecommendations');
    }

    /**
     * @param AttributeRecommendationsType|null $value
     * @return void
     */
    public function setAttributeRecommendations($value)
    {
        $this->AttributeRecommendations = $value;
    }

    /**
     * @return ProductRecommendationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductRecommendations()
    {
        return $this->_dc($this->ProductRecommendations, 'ProductRecommendations');
    }

    /**
     * @param ProductRecommendationsType|null $value
     * @return void
     */
    public function setProductRecommendations($value)
    {
        $this->ProductRecommendations = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCorrelationID()
    {
        return $this->_dc($this->CorrelationID, 'CorrelationID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCorrelationID($value)
    {
        $this->CorrelationID = self::_string($value);
    }

    /**
     * @return RecommendationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecommendations()
    {
        return $this->_dc($this->Recommendations, 'Recommendations');
    }

    /**
     * @param RecommendationsType|null $value
     * @return void
     */
    public function setRecommendations($value)
    {
        $this->Recommendations = $value;
    }

    /**
     * @return ProductListingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductListingDetails()
    {
        return $this->_dc($this->ProductListingDetails, 'ProductListingDetails');
    }

    /**
     * @param ProductListingDetailsType|null $value
     * @return void
     */
    public function setProductListingDetails($value)
    {
        $this->ProductListingDetails = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitle()
    {
        return $this->_dc($this->Title, 'Title');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTitle($value)
    {
        $this->Title = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ListingAnalyzerRecommendations' => ['type' => 'ListingAnalyzerRecommendationsType', 'xmlns' => self::XMLNS],
            'SIFFTASRecommendations' => ['type' => 'SIFFTASRecommendationsType', 'xmlns' => self::XMLNS],
            'PricingRecommendations' => ['type' => 'PricingRecommendationsType', 'xmlns' => self::XMLNS],
            'AttributeRecommendations' => ['type' => 'AttributeRecommendationsType', 'xmlns' => self::XMLNS],
            'ProductRecommendations' => ['type' => 'ProductRecommendationsType', 'xmlns' => self::XMLNS],
            'CorrelationID' => [],
            'Recommendations' => ['type' => 'RecommendationsType', 'xmlns' => self::XMLNS],
            'ProductListingDetails' => ['type' => 'ProductListingDetailsType', 'xmlns' => self::XMLNS],
            'Title' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetRecommendationsResponseContainerType::_register();
