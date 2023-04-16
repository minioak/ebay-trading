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
 * Enumerated type that lists the types of taxes that may be charged to the buyer for each order line item
 * purchased.
 **/
class TaxTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'TaxTypeCodeType';
    const NAME = 'TaxTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that standard sales tax was charged to the buyer against the order line item.
     **/
    const CodeType_SalesTax = 'SalesTax';

    /**
     * This enumeration value indicates that an electronic waste recycling fee was charged to the buyer against the
     * order line item.
     **/
    const CodeType_WasteRecyclingFee = 'WasteRecyclingFee';

    /**
     * This enumeration value indicates that a Goods and Services import tax was charged to the buyer against the order
     * line item.
     * 
     * This tax type is only applicable for items being sold by Australian or New Zealand sellers.
     **/
    const CodeType_GST = 'GST';

    /**
     * This enumeration value indicates that French VAT tax was charged to the buyer against the order line item.
     * 
     * This tax type is only applicable for items sold on the eBay France marketplaces.
     **/
    const CodeType_ImportVAT = 'ImportVAT';

    /**
     * This enumeration value indicates that European VAT tax was charged to the buyer against the order line item.
     * 
     * This enumeration applies to VAT tax on the UK marketplace, the Norway marketplace, and other EU
     * marketplaces (except for France).
     **/
    const CodeType_VAT = 'VAT';

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
     * @return TaxTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TaxTypeCodeType|null $value
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
    public function isSalesTax()
    {
        return $this->_value === self::CodeType_SalesTax;
    }

    /**
     * @return bool
     */
    public function isWasteRecyclingFee()
    {
        return $this->_value === self::CodeType_WasteRecyclingFee;
    }

    /**
     * @return bool
     */
    public function isGST()
    {
        return $this->_value === self::CodeType_GST;
    }

    /**
     * @return bool
     */
    public function isImportVAT()
    {
        return $this->_value === self::CodeType_ImportVAT;
    }

    /**
     * @return bool
     */
    public function isVAT()
    {
        return $this->_value === self::CodeType_VAT;
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

TaxTypeCodeType::_register();
