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
 * This enumeration type indicates the applicable buyer protection program that the item is eligible to be covered
 * under.
 **/
class BuyerProtectionSourceCodeType extends EbatNs_EnumType
{
    const TAG = 'BuyerProtectionSourceCodeType';
    const NAME = 'BuyerProtectionSourceCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the item is possibly eligible for buyer protection under the eBay Money Back Guarantee
     * program.
     **/
    const CodeType_eBay = 'eBay';

    /**
     * This value is deprecated.
     **/
    const CodeType_PayPal = 'PayPal';

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
     * @return BuyerProtectionSourceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BuyerProtectionSourceCodeType|null $value
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
    public function isEBay()
    {
        return $this->_value === self::CodeType_eBay;
    }

    /**
     * @return bool
     */
    public function isPayPal()
    {
        return $this->_value === self::CodeType_PayPal;
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

BuyerProtectionSourceCodeType::_register();
