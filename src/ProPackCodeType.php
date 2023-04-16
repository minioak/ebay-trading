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
 * <span class="tablenote">
 * Note:
 * This enumerated type is deprecated as the Pro Pack Bundle feature is no longer available on any eBay Marketplace
 * sites.
 * </span>
 **/
class ProPackCodeType extends EbatNs_EnumType
{
    const TAG = 'ProPackCodeType';
    const NAME = 'ProPackCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the Pro Pack listing upgrade is available for all sellers on the listing site.
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This value indicates that the Pro Pack listing upgrade is not available to any sellers on the listing site.
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * This value indicates that the Pro Pack listing upgrade is only available to seller with Power Seller status on
     * the listing site.
     **/
    const CodeType_PowerSellerOnly = 'PowerSellerOnly';

    /**
     * This value indicates that the Pro Pack listing upgrade is only available to Top Rated sellers on the listing
     * site.
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
     * @return ProPackCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ProPackCodeType|null $value
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

ProPackCodeType::_register();
