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
 * Part of the mechanism for eBay to control which announcement messages are
 * to be made available to the user.
 **/
class AnnouncementMessageCodeType extends EbatNs_EnumType
{
    const TAG = 'AnnouncementMessageCodeType';
    const NAME = 'AnnouncementMessageCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * No message is to be made available.
     **/
    const CodeType_None = 'None';

    /**
     * A deprecation message is to be made available,
     * but only if today's date is between
     * AnnouncementMessageType.AnnouncementStartTime
     * and
     * AnnouncementMessageType.EventTime
     * .
     **/
    const CodeType_Deprecation = 'Deprecation';

    /**
     * A mapping message is to be made available,
     * but only if today's date is after
     * AnnouncementMessageType.EventTime
     * .
     **/
    const CodeType_Mapping = 'Mapping';

    /**
     * Both "Deprecation" and "Mapping" enumerations are to apply.
     **/
    const CodeType_DeprecationAndMapping = 'DeprecationAndMapping';

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
     * @return AnnouncementMessageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AnnouncementMessageCodeType|null $value
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
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isDeprecation()
    {
        return $this->_value === self::CodeType_Deprecation;
    }

    /**
     * @return bool
     */
    public function isMapping()
    {
        return $this->_value === self::CodeType_Mapping;
    }

    /**
     * @return bool
     */
    public function isDeprecationAndMapping()
    {
        return $this->_value === self::CodeType_DeprecationAndMapping;
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

AnnouncementMessageCodeType::_register();
