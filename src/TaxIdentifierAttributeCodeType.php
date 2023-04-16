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
 * This enumerated type contains the possible values that can be returned in the
 * name
 * attribute of the
 * BuyerTaxIdentifier.Attribute
 * field. Currently, this type only contains one enumeration value, but in the future, other attributes related to
 * the tax ID may be created for this type.
 **/
class TaxIdentifierAttributeCodeType extends EbatNs_EnumType
{
    const TAG = 'TaxIdentifierAttributeCodeType';
    const NAME = 'TaxIdentifierAttributeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the value returned in the
     * BuyerTaxIdentifier.Attribute
     * field is the country that issued the buyer tax ID.
     **/
    const CodeType_IssuingCountry = 'IssuingCountry';

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
     * @return TaxIdentifierAttributeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TaxIdentifierAttributeCodeType|null $value
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
    public function isIssuingCountry()
    {
        return $this->_value === self::CodeType_IssuingCountry;
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

TaxIdentifierAttributeCodeType::_register();
