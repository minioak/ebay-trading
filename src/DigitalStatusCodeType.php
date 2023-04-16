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
 * This enumeration type lists the possible states of a purchased digital delivery card.
 **/
class DigitalStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'DigitalStatusCodeType';
    const NAME = 'DigitalStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the digital gift card has yet to be activated by the buyer or recipient of
     * gift card.
     **/
    const CodeType_Inactive = 'Inactive';

    /**
     * This enumeration value indicates that the digital gift card has been activated by the buyer or recipient of gift
     * card.
     **/
    const CodeType_Activated = 'Activated';

    /**
     * This enumeration value indicates that the digital gift card has been downloaded by the buyer or recipient of gift
     * card. The next step would be to activate the gift card.
     **/
    const CodeType_Downloaded = 'Downloaded';

    /**
     * This enumeration value indicates that the digital gift card has been deactivated.
     **/
    const CodeType_Deactivated = 'Deactivated';

    /**
     * This value is reserved for internal or future use.
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
     * @return DigitalStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DigitalStatusCodeType|null $value
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
    public function isInactive()
    {
        return $this->_value === self::CodeType_Inactive;
    }

    /**
     * @return bool
     */
    public function isActivated()
    {
        return $this->_value === self::CodeType_Activated;
    }

    /**
     * @return bool
     */
    public function isDownloaded()
    {
        return $this->_value === self::CodeType_Downloaded;
    }

    /**
     * @return bool
     */
    public function isDeactivated()
    {
        return $this->_value === self::CodeType_Deactivated;
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

DigitalStatusCodeType::_register();
