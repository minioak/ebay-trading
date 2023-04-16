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
 * This enumeration type is used to indicate whether an application/URL/device is enabled to receive notifications,
 * or to indicate whether a specific notification event is enabled.
 **/
class EnableCodeType extends EbatNs_EnumType
{
    const TAG = 'EnableCodeType';
    const NAME = 'EnableCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that an application/URL/device is enabled to receive notifications, or to
     * indicate that a specific notification event is enabled.
     **/
    const CodeType_Enable = 'Enable';

    /**
     * This enumeration value indicates that an application/URL/device is disabled, or being blocked from receiving
     * notifications, or to indicate that a specific notification event is disabled.
     **/
    const CodeType_Disable = 'Disable';

    /**
     * Reserved for future use.
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
     * @return EnableCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param EnableCodeType|null $value
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
    public function isEnable()
    {
        return $this->_value === self::CodeType_Enable;
    }

    /**
     * @return bool
     */
    public function isDisable()
    {
        return $this->_value === self::CodeType_Disable;
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

EnableCodeType::_register();
