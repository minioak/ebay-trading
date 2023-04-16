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
 * Specifies the criteria for filtering search results by site, where site is determined by the site ID in the
 * request.
 **/
class PreferredLocationCodeType extends EbatNs_EnumType
{
    const TAG = 'PreferredLocationCodeType';
    const NAME = 'PreferredLocationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (in) Items listed in the currency implied by the site specified in the
     * request.
     **/
    const CodeType_ListedInCurrencyImplied = 'ListedInCurrencyImplied';

    /**
     * (in) Items located in the country implied by the site specified in the
     * request.
     **/
    const CodeType_LocatedInCountryImplied = 'LocatedInCountryImplied';

    /**
     * (in) Items available to the country implied by the site specified in the
     * request. For the US site, this implies listings from ALL English-language
     * countries that are available to the US.
     **/
    const CodeType_AvailableInCountryImplied = 'AvailableInCountryImplied';

    /**
     * (in) Items listed on the site specified in the request, regardless of listing
     * currency.
     **/
    const CodeType_SiteImplied = 'SiteImplied';

    /**
     * (in) Items located in Belgium or listed on one of the two Belgian sites.
     **/
    const CodeType_BelgiumListing = 'BelgiumListing';

    /**
     * (out) Reserved for internal or future use.
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
     * @return PreferredLocationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PreferredLocationCodeType|null $value
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
    public function isListedInCurrencyImplied()
    {
        return $this->_value === self::CodeType_ListedInCurrencyImplied;
    }

    /**
     * @return bool
     */
    public function isLocatedInCountryImplied()
    {
        return $this->_value === self::CodeType_LocatedInCountryImplied;
    }

    /**
     * @return bool
     */
    public function isAvailableInCountryImplied()
    {
        return $this->_value === self::CodeType_AvailableInCountryImplied;
    }

    /**
     * @return bool
     */
    public function isSiteImplied()
    {
        return $this->_value === self::CodeType_SiteImplied;
    }

    /**
     * @return bool
     */
    public function isBelgiumListing()
    {
        return $this->_value === self::CodeType_BelgiumListing;
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

PreferredLocationCodeType::_register();
