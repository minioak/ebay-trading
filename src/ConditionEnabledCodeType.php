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
 * Enumerated type that defines the values used to indicate whether Condition IDs are enabled/disabled for all/most
 * of a site's categories (
 * SiteDefaults.ConditionEnabled
 * ), or enabled/required/disabled for a specific eBay category (
 * Category.ConditionEnabled
 * ).
 **/
class ConditionEnabledCodeType extends EbatNs_EnumType
{
    const TAG = 'ConditionEnabledCodeType';
    const NAME = 'ConditionEnabledCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that Condition IDs are disabled for all/most of a site's categories (if returned in the
     * SiteDefaults.ConditionEnabled
     * field), or disabled for a specific category (if returned in the
     * Category.ConditionEnabled
     * field).
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * This value indicates that Condition IDs are enabled for all/most of a site's categories (if returned in the
     * SiteDefaults.ConditionEnabled
     * field), or enabled for a specific category (if returned in the
     * Category.ConditionEnabled
     * field).
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This value indicates that Condition IDs are required for a specific category (if returned in the
     * Category.ConditionEnabled
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
     * @return ConditionEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ConditionEnabledCodeType|null $value
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

ConditionEnabledCodeType::_register();
