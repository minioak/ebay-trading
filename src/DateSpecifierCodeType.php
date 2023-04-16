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
 * This type is deprecated.
 **/
class DateSpecifierCodeType extends EbatNs_EnumType
{
    const TAG = 'DateSpecifierCodeType';
    const NAME = 'DateSpecifierCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This field is deprecated.
     **/
    const CodeType_M = 'M';

    /**
     * This field is deprecated.
     **/
    const CodeType_D = 'D';

    /**
     * This field is deprecated.
     **/
    const CodeType_Y = 'Y';

    /**
     * This field is deprecated.
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
     * @return DateSpecifierCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DateSpecifierCodeType|null $value
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
    public function isM()
    {
        return $this->_value === self::CodeType_M;
    }

    /**
     * @return bool
     */
    public function isD()
    {
        return $this->_value === self::CodeType_D;
    }

    /**
     * @return bool
     */
    public function isY()
    {
        return $this->_value === self::CodeType_Y;
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

DateSpecifierCodeType::_register();
