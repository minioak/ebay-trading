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
 * Indicates whether or not the user is subject to VAT.
 * Users who have registered with eBay as VAT-exempt are not
 * subject to VAT. See documentation on Value-Added Tax (VAT).
 **/
class VATStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'VATStatusCodeType';
    const NAME = 'VATStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (out) VAT is not applicable
     **/
    const CodeType_NoVATTax = 'NoVATTax';

    /**
     * (out) Residence in a country with VAT and user is not registered as VAT-exempt
     **/
    const CodeType_VATTax = 'VATTax';

    /**
     * (out) Residence in a country with VAT and user is registered as VAT-exempt
     **/
    const CodeType_VATExempt = 'VATExempt';

    /**
     * (out) Reserved for internal or future use
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
     * @return VATStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param VATStatusCodeType|null $value
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
    public function isNoVATTax()
    {
        return $this->_value === self::CodeType_NoVATTax;
    }

    /**
     * @return bool
     */
    public function isVATTax()
    {
        return $this->_value === self::CodeType_VATTax;
    }

    /**
     * @return bool
     */
    public function isVATExempt()
    {
        return $this->_value === self::CodeType_VATExempt;
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

VATStatusCodeType::_register();
