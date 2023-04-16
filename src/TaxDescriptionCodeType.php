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
class TaxDescriptionCodeType extends EbatNs_EnumType
{
    const TAG = 'TaxDescriptionCodeType';
    const NAME = 'TaxDescriptionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that standard sales tax was charged to the buyer against the order line item.
     **/
    const CodeType_SalesTax = 'SalesTax';

    /**
     * This enumeration value indicates that an electronic waste recycling fee was charged to the buyer against the
     * order line item.
     **/
    const CodeType_ElectronicWasteRecyclingFee = 'ElectronicWasteRecyclingFee';

    /**
     * This enumeration value indicates that a tire recycling fee was charged to the buyer against the order line item.
     **/
    const CodeType_TireRecyclingFee = 'TireRecyclingFee';

    /**
     * This enumeration value indicates that a Goods and Services import tax was charged to the buyer against the order
     * line item.
     * 
     * <span class="tablenote">
     * Note:
     * At this time, this tax type is only applicable to the Australia site.
     * </span>
     **/
    const CodeType_GST = 'GST';

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
     * @return TaxDescriptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TaxDescriptionCodeType|null $value
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
    public function isElectronicWasteRecyclingFee()
    {
        return $this->_value === self::CodeType_ElectronicWasteRecyclingFee;
    }

    /**
     * @return bool
     */
    public function isTireRecyclingFee()
    {
        return $this->_value === self::CodeType_TireRecyclingFee;
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

TaxDescriptionCodeType::_register();
