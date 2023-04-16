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
 * Enumeration type that indicates the current status of an Unpaid Item case.
 **/
class UnpaidItemCaseStatusTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'UnpaidItemCaseStatusTypeCodeType';
    const NAME = 'UnpaidItemCaseStatusTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the Unpaid Item case is open.
     **/
    const CodeType_Open = 'Open';

    /**
     * This value indicates that the Unpaid Item case is closed with payment
     * received from the buyer.
     **/
    const CodeType_ClosedWithPayment = 'ClosedWithPayment';

    /**
     * This value indicates that the Unpaid Item case is closed with no payment
     * received from the buyer.
     **/
    const CodeType_ClosedWithoutPayment = 'ClosedWithoutPayment';

    /**
     * This value is reserved for future or internal use.
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
     * @return UnpaidItemCaseStatusTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param UnpaidItemCaseStatusTypeCodeType|null $value
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
    public function isOpen()
    {
        return $this->_value === self::CodeType_Open;
    }

    /**
     * @return bool
     */
    public function isClosedWithPayment()
    {
        return $this->_value === self::CodeType_ClosedWithPayment;
    }

    /**
     * @return bool
     */
    public function isClosedWithoutPayment()
    {
        return $this->_value === self::CodeType_ClosedWithoutPayment;
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

UnpaidItemCaseStatusTypeCodeType::_register();
