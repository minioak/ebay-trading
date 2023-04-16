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
 * This enumerated type is a list of applicable values that indicate how a motor vehicle deposit should be paid.
 **/
class DepositTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'DepositTypeCodeType';
    const NAME = 'DepositTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that no deposit is required.
     **/
    const CodeType_None = 'None';

    /**
     * This value indicates that a deposit is required from the buyer when purchasing a motor vehicle. Deposits for a
     * motor vehicle are either due in 24, 48, or 72 hours after commitment to purchase. Or, in the case of a motor
     * vehicle listing that is requiring immediate payment, the deposit it due immediately after commitment to purchase.
     * 
     * This value should be used in an Add/Revise call if the seller is requiring a deposit for a motor vehicle
     * listing.
     **/
    const CodeType_OtherMethod = 'OtherMethod';

    /**
     * (out) No longer used.
     **/
    const CodeType_FastDeposit = 'FastDeposit';

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
     * @return DepositTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DepositTypeCodeType|null $value
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
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isOtherMethod()
    {
        return $this->_value === self::CodeType_OtherMethod;
    }

    /**
     * @return bool
     */
    public function isFastDeposit()
    {
        return $this->_value === self::CodeType_FastDeposit;
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

DepositTypeCodeType::_register();
