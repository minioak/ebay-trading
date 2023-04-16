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
 * This enumerated type contains a list of wireless carriers that may be providing SMS messages for a Platform
 * Notifications subscriber.
 **/
class WirelessCarrierIDCodeType extends EbatNs_EnumType
{
    const TAG = 'WirelessCarrierIDCodeType';
    const NAME = 'WirelessCarrierIDCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is no longer applicable, as Cingular is no longer in existence.
     **/
    const CodeType_Cingular = 'Cingular';

    /**
     * This value indicates that T-Mobile is providing SMS messages for the Platform Notifications subscriber.
     **/
    const CodeType_TMobile = 'TMobile';

    /**
     * This value indicates that Sprint is providing SMS messages for the Platform Notifications subscriber.
     **/
    const CodeType_Sprint = 'Sprint';

    /**
     * This value is no longer applicable, as Nextel was purchased by Sprint.
     **/
    const CodeType_Nextel = 'Nextel';

    /**
     * This value indicates that Verizon is providing SMS messages for the Platform Notifications subscriber.
     **/
    const CodeType_Verizon = 'Verizon';

    /**
     * This value indicates that Cincinnati Bell is providing SMS messages for the Platform Notifications subscriber.
     **/
    const CodeType_CincinnatiBell = 'CincinnatiBell';

    /**
     * This value is no longer applicable, as Dobson is no longer in existence.
     **/
    const CodeType_Dobson = 'Dobson';

    /**
     * This value is no longer applicable, as Alltel is no longer in existence.
     **/
    const CodeType_Alltel = 'Alltel';

    /**
     * This value is no longer applicable, as Leap is no longer in existence.
     **/
    const CodeType_Leap = 'Leap';

    /**
     * This value indicates that US Cellular is providing SMS messages for the Platform Notifications subscriber.
     **/
    const CodeType_USCellular = 'USCellular';

    /**
     * This value indicates that Movistar is providing SMS messages for the Platform Notifications subscriber.
     **/
    const CodeType_Movistar = 'Movistar';

    /**
     * This value is no longer applicable, as Amena is no longer in existence.
     **/
    const CodeType_Amena = 'Amena';

    /**
     * This value indicates that Vodafone is providing SMS messages for the Platform Notifications subscriber.
     **/
    const CodeType_Vodafone = 'Vodafone';

    /**
     * This value indicates that AT&T is providing SMS messages for the Platform Notifications subscriber.
     **/
    const CodeType_ATT = 'ATT';

    /**
     * This value is reserved for future use.
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
     * @return WirelessCarrierIDCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param WirelessCarrierIDCodeType|null $value
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
    public function isCingular()
    {
        return $this->_value === self::CodeType_Cingular;
    }

    /**
     * @return bool
     */
    public function isTMobile()
    {
        return $this->_value === self::CodeType_TMobile;
    }

    /**
     * @return bool
     */
    public function isSprint()
    {
        return $this->_value === self::CodeType_Sprint;
    }

    /**
     * @return bool
     */
    public function isNextel()
    {
        return $this->_value === self::CodeType_Nextel;
    }

    /**
     * @return bool
     */
    public function isVerizon()
    {
        return $this->_value === self::CodeType_Verizon;
    }

    /**
     * @return bool
     */
    public function isCincinnatiBell()
    {
        return $this->_value === self::CodeType_CincinnatiBell;
    }

    /**
     * @return bool
     */
    public function isDobson()
    {
        return $this->_value === self::CodeType_Dobson;
    }

    /**
     * @return bool
     */
    public function isAlltel()
    {
        return $this->_value === self::CodeType_Alltel;
    }

    /**
     * @return bool
     */
    public function isLeap()
    {
        return $this->_value === self::CodeType_Leap;
    }

    /**
     * @return bool
     */
    public function isUSCellular()
    {
        return $this->_value === self::CodeType_USCellular;
    }

    /**
     * @return bool
     */
    public function isMovistar()
    {
        return $this->_value === self::CodeType_Movistar;
    }

    /**
     * @return bool
     */
    public function isAmena()
    {
        return $this->_value === self::CodeType_Amena;
    }

    /**
     * @return bool
     */
    public function isVodafone()
    {
        return $this->_value === self::CodeType_Vodafone;
    }

    /**
     * @return bool
     */
    public function isATT()
    {
        return $this->_value === self::CodeType_ATT;
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

WirelessCarrierIDCodeType::_register();
