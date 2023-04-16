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
 * Enumerated type that indicates if the Featured Plus listing upgrade is enabled for the specified site, and
 * whether it is restricted to a specific seller level.
 **/
class FeaturedPlusCodeType extends EbatNs_EnumType
{
    const TAG = 'FeaturedPlusCodeType';
    const NAME = 'FeaturedPlusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the Featured Plus listing upgrade is enabled for all sellers on the site.
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This enumeration value indicates that the Featured Plus listing upgrade is not available for any sellers on the
     * site.
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * This enumeration value indicates that the Featured Plus listing upgrade is only enabled for Power Sellers on the
     * site.
     **/
    const CodeType_PowerSellerOnly = 'PowerSellerOnly';

    /**
     * This enumeration value indicates that the Featured Plus listing upgrade is only enabled for Top-Rated Sellers on
     * the site.
     **/
    const CodeType_TopRatedSellerOnly = 'TopRatedSellerOnly';

    /**
     * Reserved for internal or future use.
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
     * @return FeaturedPlusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FeaturedPlusCodeType|null $value
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
    public function isEnabled()
    {
        return $this->_value === self::CodeType_Enabled;
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
    public function isPowerSellerOnly()
    {
        return $this->_value === self::CodeType_PowerSellerOnly;
    }

    /**
     * @return bool
     */
    public function isTopRatedSellerOnly()
    {
        return $this->_value === self::CodeType_TopRatedSellerOnly;
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

FeaturedPlusCodeType::_register();
