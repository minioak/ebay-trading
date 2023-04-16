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
 * This enumerated type defines the rate types that United States Postal Service (USPS) can offer to sellers for
 * shipping.
 **/
class USPSRateOptionCodeType extends EbatNs_EnumType
{
    const TAG = 'USPSRateOptionCodeType';
    const NAME = 'USPSRateOptionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the seller is currently receiving the USPS Discounted Rate for shipping
     * items.
     **/
    const CodeType_USPSDiscounted = 'USPSDiscounted';

    /**
     * This enumeration value indicates that the seller is currently receiving the USPS Retail Rate for shipping items.
     **/
    const CodeType_USPSRetail = 'USPSRetail';

    /**
     * Reserved for internal or future use
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
     * @return USPSRateOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param USPSRateOptionCodeType|null $value
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
    public function isUSPSDiscounted()
    {
        return $this->_value === self::CodeType_USPSDiscounted;
    }

    /**
     * @return bool
     */
    public function isUSPSRetail()
    {
        return $this->_value === self::CodeType_USPSRetail;
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

USPSRateOptionCodeType::_register();
