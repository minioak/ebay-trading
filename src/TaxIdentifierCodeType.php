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
 * This type is not currently used.
 **/
class TaxIdentifierCodeType extends EbatNs_EnumType
{
    const TAG = 'TaxIdentifierCodeType';
    const NAME = 'TaxIdentifierCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    
    const CodeType_CodiceFiscale = 'CodiceFiscale';

    
    const CodeType_DNI = 'DNI';

    
    const CodeType_RussianPassport = 'RussianPassport';

    
    const CodeType_CPFTaxID = 'CPFTaxID';

    
    const CodeType_TurkeyID = 'TurkeyID';

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
     * @return TaxIdentifierCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TaxIdentifierCodeType|null $value
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
    public function isCodiceFiscale()
    {
        return $this->_value === self::CodeType_CodiceFiscale;
    }

    /**
     * @return bool
     */
    public function isDNI()
    {
        return $this->_value === self::CodeType_DNI;
    }

    /**
     * @return bool
     */
    public function isRussianPassport()
    {
        return $this->_value === self::CodeType_RussianPassport;
    }

    /**
     * @return bool
     */
    public function isCPFTaxID()
    {
        return $this->_value === self::CodeType_CPFTaxID;
    }

    /**
     * @return bool
     */
    public function isTurkeyID()
    {
        return $this->_value === self::CodeType_TurkeyID;
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

TaxIdentifierCodeType::_register();
