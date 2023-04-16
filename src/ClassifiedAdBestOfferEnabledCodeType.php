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
 * Enumerated type that defines the values used to indicate whether Best Offers for the Classified Ad listing format
 * are enabled/disabled for all/most of a site's categories (
 * SiteDefaults.ClassifiedAdBestOfferEnabled
 * ), or enabled/required/disabled for a specific eBay category (
 * Category.ClassifiedAdBestOfferEnabled
 * ).
 **/
class ClassifiedAdBestOfferEnabledCodeType extends EbatNs_EnumType
{
    const TAG = 'ClassifiedAdBestOfferEnabledCodeType';
    const NAME = 'ClassifiedAdBestOfferEnabledCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that Classified Ad Best Offer feature is disabled for all/most of a site's categories (if
     * returned in the
     * SiteDefaults.ClassifiedAdBestOfferEnabled
     * field), or disabled for a specific category (if returned in the
     * Category.ClassifiedAdBestOfferEnabled
     * field).
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * This value indicates that Classified Ad Best Offer feature is enabled for all/most of a site's categories (if
     * returned in the
     * SiteDefaults.ClassifiedAdBestOfferEnabled
     * field), or enabled for a specific category (if returned in the
     * Category.ClassifiedAdBestOfferEnabled
     * field).
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This value indicates that Classified Ad Best Offer feature is required for a specific category (if returned in
     * the
     * Category.ClassifiedAdBestOfferEnabled
     * field). This value is not applicable at the site level (
     * SiteDefaults
     * container).
     **/
    const CodeType_Required = 'Required';

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
     * @return ClassifiedAdBestOfferEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ClassifiedAdBestOfferEnabledCodeType|null $value
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
    public function isDisabled()
    {
        return $this->_value === self::CodeType_Disabled;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_value === self::CodeType_Enabled;
    }

    /**
     * @return bool
     */
    public function isRequired()
    {
        return $this->_value === self::CodeType_Required;
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

ClassifiedAdBestOfferEnabledCodeType::_register();
