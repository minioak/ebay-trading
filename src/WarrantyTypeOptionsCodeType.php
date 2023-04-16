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
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 **/
class WarrantyTypeOptionsCodeType extends EbatNs_EnumType
{
    const TAG = 'WarrantyTypeOptionsCodeType';
    const NAME = 'WarrantyTypeOptionsCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If this value is returned in the
     * ReturnPolicyDetails.WarrantyType
     * container of the
     * GeteBayDetails
     * response, the seller may offer a replacement warranty to the buyer. The seller can offer a replacement warranty
     * through the
     * ReturnPolicy.WarrantyTypeOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_ReplacementWarranty = 'ReplacementWarranty';

    /**
     * If this value is returned in the
     * ReturnPolicyDetails.WarrantyType
     * container of the
     * GeteBayDetails
     * response, the seller may offer a dealer warranty to the buyer. The seller can offer a dealer warranty through
     * the
     * ReturnPolicy.WarrantyTypeOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_DealerWarranty = 'DealerWarranty';

    /**
     * If this value is returned in the
     * ReturnPolicyDetails.WarrantyType
     * container of the
     * GeteBayDetails
     * response, the seller may offer a manufacturer warranty to the buyer. The seller can offer a manufacturer
     * warranty through the
     * ReturnPolicy.WarrantyTypeOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_ManufacturerWarranty = 'ManufacturerWarranty';

    /**
     * This value is reserved for internal or future use.
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
     * @return WarrantyTypeOptionsCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param WarrantyTypeOptionsCodeType|null $value
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
    public function isReplacementWarranty()
    {
        return $this->_value === self::CodeType_ReplacementWarranty;
    }

    /**
     * @return bool
     */
    public function isDealerWarranty()
    {
        return $this->_value === self::CodeType_DealerWarranty;
    }

    /**
     * @return bool
     */
    public function isManufacturerWarranty()
    {
        return $this->_value === self::CodeType_ManufacturerWarranty;
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

WarrantyTypeOptionsCodeType::_register();
