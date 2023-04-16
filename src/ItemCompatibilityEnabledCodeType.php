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
 * Used to indicate whether the parts compatibility feature is enabled for a
 * category.
 **/
class ItemCompatibilityEnabledCodeType extends EbatNs_EnumType
{
    const TAG = 'ItemCompatibilityEnabledCodeType';
    const NAME = 'ItemCompatibilityEnabledCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Parts Compatibility is not supported for the given category.
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * Parts Compatibility may be entered by application only for the given category.
     * Entering parts compatibility by application specifies the assemblies (e.g., a
     * specific year, make, and model of car) to which the item applies. Parts
     * compatibility by application can be specified by listing with a catalog
     * product that supports parts compatibility or by specifying parts compatibility
     * by application manually (
     * Item.ItemCompatibilityList
     * ).
     **/
    const CodeType_ByApplication = 'ByApplication';

    /**
     * Parts Compatibility may be entered by specification only for the given
     * category. Entering parts compatibility by specification involves specifying
     * the part's relevant dimensions or characteristics (e.g., Section Width, Aspect
     * Ratio, Rim Diammeter, Load Index, and Speed Rating values for a tire) using
     * attributes.
     **/
    const CodeType_BySpecification = 'BySpecification';

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
     * @return ItemCompatibilityEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ItemCompatibilityEnabledCodeType|null $value
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
    public function isByApplication()
    {
        return $this->_value === self::CodeType_ByApplication;
    }

    /**
     * @return bool
     */
    public function isBySpecification()
    {
        return $this->_value === self::CodeType_BySpecification;
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

ItemCompatibilityEnabledCodeType::_register();
