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
 * This enumerated type is used to indicate if an eBay site or category supports Motors National Listings and/or
 * Motors Local Market listings.
 **/
class GeographicExposureCodeType extends EbatNs_EnumType
{
    const TAG = 'GeographicExposureCodeType';
    const NAME = 'GeographicExposureCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If this enumeration value is returned, the eBay site or category only supports Motors National Listings for the
     * corresponding Motors dealer subscription level/type.
     **/
    const CodeType_National = 'National';

    /**
     * If this enumeration value is returned, the eBay site or category only supports Motors Local Market Listings for
     * the corresponding Motors dealer subscription level/type.
     **/
    const CodeType_LocalOnly = 'LocalOnly';

    /**
     * If this enumeration value is returned, the eBay site or category supports Motors National Listings and Motors
     * Local Market listing for the corresponding Motors dealer subscription level/type.
     **/
    const CodeType_LocalOptional = 'LocalOptional';

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
     * @return GeographicExposureCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param GeographicExposureCodeType|null $value
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
    public function isNational()
    {
        return $this->_value === self::CodeType_National;
    }

    /**
     * @return bool
     */
    public function isLocalOnly()
    {
        return $this->_value === self::CodeType_LocalOnly;
    }

    /**
     * @return bool
     */
    public function isLocalOptional()
    {
        return $this->_value === self::CodeType_LocalOptional;
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

GeographicExposureCodeType::_register();
