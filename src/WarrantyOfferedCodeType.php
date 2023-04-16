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
class WarrantyOfferedCodeType extends EbatNs_EnumType
{
    const TAG = 'WarrantyOfferedCodeType';
    const NAME = 'WarrantyOfferedCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If this value is returned in the
     * ReturnPolicyDetails.WarrantyOffered
     * container of the
     * GeteBayDetails
     * response, the seller may offer a warranty to the buyer. This value that should be passed into the
     * ReturnPolicy.WarrantyOfferedOption
     * field of an add/revise/relist API call if the seller wishes to offer a warranty to the buyer.
     **/
    const CodeType_WarrantyOffered = 'WarrantyOffered';

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
     * @return WarrantyOfferedCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param WarrantyOfferedCodeType|null $value
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
    public function isWarrantyOffered()
    {
        return $this->_value === self::CodeType_WarrantyOffered;
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

WarrantyOfferedCodeType::_register();
