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
 * This enumerated type is deprecated.
 **/
class RecommendationEngineCodeType extends EbatNs_EnumType
{
    const TAG = 'RecommendationEngineCodeType';
    const NAME = 'RecommendationEngineCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_ListingAnalyzer = 'ListingAnalyzer';

    /**
     * This value is not used.
     **/
    const CodeType_SIFFTAS = 'SIFFTAS';

    /**
     * This value is not used.
     **/
    const CodeType_ProductPricing = 'ProductPricing';

    /**
     * This value is not used.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This value is not used.
     **/
    const CodeType_SuggestedAttributes = 'SuggestedAttributes';

    /**
     * This value is not used.
     **/
    const CodeType_ItemSpecifics = 'ItemSpecifics';
    
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
     * @return RecommendationEngineCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RecommendationEngineCodeType|null $value
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
    public function isListingAnalyzer()
    {
        return $this->_value === self::CodeType_ListingAnalyzer;
    }

    /**
     * @return bool
     */
    public function isSIFFTAS()
    {
        return $this->_value === self::CodeType_SIFFTAS;
    }

    /**
     * @return bool
     */
    public function isProductPricing()
    {
        return $this->_value === self::CodeType_ProductPricing;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isSuggestedAttributes()
    {
        return $this->_value === self::CodeType_SuggestedAttributes;
    }

    /**
     * @return bool
     */
    public function isItemSpecifics()
    {
        return $this->_value === self::CodeType_ItemSpecifics;
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

RecommendationEngineCodeType::_register();
