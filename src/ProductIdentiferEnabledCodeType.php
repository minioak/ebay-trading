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
 * This enumeration type contains the values that may be returned in the
 * EANEnabled
 * ,
 * ISBNEnabled
 * , and
 * UPCEnabled
 * fields at the site level (
 * SiteDefaults
 * container) and category level (
 * Category
 * nodes) to indicate which sites and categories support, require, or do not support the use of product identifiers
 * to help create a listing.
 **/
class ProductIdentiferEnabledCodeType extends EbatNs_EnumType
{
    const TAG = 'ProductIdentiferEnabledCodeType';
    const NAME = 'ProductIdentiferEnabledCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that a product identifier (EAN, ISBN, UPC) may not be used to help create a
     * listing. If returned at the site level (
     * SiteDefaults
     * container), most categories on the site (specified in the X-EBAY-API-SITEID) do not support the use of product
     * identifiers. If returned at the category level (
     * Category
     * nodes), that specific category does not support the use of product identifiers.
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * This enumeration value indicates that a product identifier (EAN, ISBN, UPC) may be used to help create a listing.
     * If returned at the site level (
     * SiteDefaults
     * container), most categories on the site (specified in the X-EBAY-API-SITEID) support the use of product
     * identifiers. If returned at the category level (
     * Category
     * nodes), that specific category supports the use of product identifiers.
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This enumeration value indicates that a product identifier (EAN, ISBN, UPC) is required when creating a listing.
     * If returned at the site level (
     * SiteDefaults
     * container), most categories on the site (specified in the X-EBAY-API-SITEID) require the use of product
     * identifiers. If returned at the category level (
     * Category
     * nodes), that specific category requires the use of product identifiers when creating a listing.
     **/
    const CodeType_Required = 'Required';

    /**
     * This value is for future use.
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
     * @return ProductIdentiferEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ProductIdentiferEnabledCodeType|null $value
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

ProductIdentiferEnabledCodeType::_register();
