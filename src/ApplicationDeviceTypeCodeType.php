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
 * This enumerated type list the possible devices that may be running a affiliate user's application. The affiliate
 * must mark the type of device that is running their application when the
 * PlaceOffer
 * call is made.
 **/
class ApplicationDeviceTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'ApplicationDeviceTypeCodeType';
    const NAME = 'ApplicationDeviceTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the user's application is running in a browser.
     **/
    const CodeType_Browser = 'Browser';

    /**
     * This enumeration value indicates that the user's application is a wireless application.
     **/
    const CodeType_Wireless = 'Wireless';

    /**
     * This enumeration value indicates that the user's application is a desktop application.
     **/
    const CodeType_Desktop = 'Desktop';

    /**
     * This enumeration value indicates that the user's application is running through a television set-top box.
     **/
    const CodeType_SetTopTVBox = 'SetTopTVBox';

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
     * @return ApplicationDeviceTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ApplicationDeviceTypeCodeType|null $value
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
    public function isBrowser()
    {
        return $this->_value === self::CodeType_Browser;
    }

    /**
     * @return bool
     */
    public function isWireless()
    {
        return $this->_value === self::CodeType_Wireless;
    }

    /**
     * @return bool
     */
    public function isDesktop()
    {
        return $this->_value === self::CodeType_Desktop;
    }

    /**
     * @return bool
     */
    public function isSetTopTVBox()
    {
        return $this->_value === self::CodeType_SetTopTVBox;
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

ApplicationDeviceTypeCodeType::_register();
