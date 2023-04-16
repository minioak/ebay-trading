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
 * Valid application status codes, either MarkUp (application was marked up,
 * communication is restored) or MarkDown (application was marked down, no
 * communication).
 **/
class MarkUpMarkDownEventTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'MarkUpMarkDownEventTypeCodeType';
    const NAME = 'MarkUpMarkDownEventTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Status indicating the application was or is marked up.
     **/
    const CodeType_MarkUp = 'MarkUp';

    /**
     * Status indicating the application was marked down.
     **/
    const CodeType_MarkDown = 'MarkDown';

    /**
     * Reserved for future internal or external use.
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
     * @return MarkUpMarkDownEventTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param MarkUpMarkDownEventTypeCodeType|null $value
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
    public function isMarkUp()
    {
        return $this->_value === self::CodeType_MarkUp;
    }

    /**
     * @return bool
     */
    public function isMarkDown()
    {
        return $this->_value === self::CodeType_MarkDown;
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

MarkUpMarkDownEventTypeCodeType::_register();
