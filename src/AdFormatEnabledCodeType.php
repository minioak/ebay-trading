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
 * This enumerated type contains a list of values that will indicate whether or not an Ad Format listing type is
 * enabled for an eBay site or for an eBay category.
 **/
class AdFormatEnabledCodeType extends EbatNs_EnumType
{
    const TAG = 'AdFormatEnabledCodeType';
    const NAME = 'AdFormatEnabledCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the Classified Ad format feature is disabled for the site or category.
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * This value indicates that the Classified Ad format feature is enabled for the site or category.
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This value indicates that the Classified Ad format is the only listing type supported by the eBay category. This
     * value is not applicable at the eBay site level.
     **/
    const CodeType_Only = 'Only';

    /**
     * This value indicates that the lead-generation Classified Ad format feature is enabled for the site or category.
     **/
    const CodeType_ClassifiedAdEnabled = 'ClassifiedAdEnabled';

    /**
     * This value indicates that the lead-generation Classified Ad format is the only listing type supported by the eBay
     * category. This value is not applicable at the eBay site level.
     **/
    const CodeType_ClassifiedAdOnly = 'ClassifiedAdOnly';

    /**
     * This value indicates that eBay Motors Local Market listings are enabled for the site or category.
     **/
    const CodeType_LocalMarketBestOfferOnly = 'LocalMarketBestOfferOnly';

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
     * @return AdFormatEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AdFormatEnabledCodeType|null $value
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
    public function isOnly()
    {
        return $this->_value === self::CodeType_Only;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdEnabled()
    {
        return $this->_value === self::CodeType_ClassifiedAdEnabled;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdOnly()
    {
        return $this->_value === self::CodeType_ClassifiedAdOnly;
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

AdFormatEnabledCodeType::_register();
