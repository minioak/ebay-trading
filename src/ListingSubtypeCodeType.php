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
 * This enumerated type defines the two subtypes that can be used if the main listing type (in
 * <strong>ListingType</strong> field) is <code>LeadGeneration</code>. A <strong>ListingSubtype2</strong> value must
 * be specified if the <strong>ListingType</strong> value is set to <code>LeadGeneration</code>.
 **/
class ListingSubtypeCodeType extends EbatNs_EnumType
{
    const TAG = 'ListingSubtypeCodeType';
    const NAME = 'ListingSubtypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the lead generation listing is a classifed ad. Note that only some eBay categories
     * support classified ad listings. Use the <strong>GetCategoryFeatures</strong> call (with
     * <strong>FeatureID</strong> value set to <code>AdFormatEnabled</code>) to see which categories support classified
     * ad listings.
     **/
    const CodeType_ClassifiedAd = 'ClassifiedAd';

    /**
     * This value indicates that the lead generation listing is a US Motors Local Market listing. Note that only some
     * eBay Motors categories support Motors Local Market listings. Use the <strong>GetCategoryFeatures</strong> call
     * (with the <strong>SITEID</strong> header set to <code>100</code> and the <strong>FeatureID</strong> value set to
     * <code>LocalMarketAdFormatEnabled</code>) to see which eBay Motors categories support Motors Local Market
     * listings.
     **/
    const CodeType_LocalMarketBestOfferOnly = 'LocalMarketBestOfferOnly';

    /**
     * Reserved for internal or future use
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return ListingSubtypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ListingSubtypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isClassifiedAd()
    {
        return $this->_value === self::CodeType_ClassifiedAd;
    }

    /**
     * @return bool
     */
    public function isLocalMarketBestOfferOnly()
    {
        return $this->_value === self::CodeType_LocalMarketBestOfferOnly;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

ListingSubtypeCodeType::_register();
