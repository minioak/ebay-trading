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
class ListingAnalyzerRecommendationsType extends EbatNs_ComplexType
{
    const TAG = 'ListingAnalyzerRecommendationsType';
    const NAME = 'ListingAnalyzerRecommendationsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ListingTipArrayType|null
     */
    protected $ListingTipArray = null;


    /**
     * @return ListingTipArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingTipArray()
    {
        return $this->_dc($this->ListingTipArray, 'ListingTipArray');
    }

    /**
     * @param ListingTipArrayType|null $value
     * @return void
     */
    public function setListingTipArray($value)
    {
        $this->ListingTipArray = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ListingTipArray' => ['type' => 'ListingTipArrayType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

ListingAnalyzerRecommendationsType::_register();
