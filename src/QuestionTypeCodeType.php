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
 * Enumerated type used by the member messaging calls to indicate the type of question that was asked.
 **/
class QuestionTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'QuestionTypeCodeType';
    const NAME = 'QuestionTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that a general question was asked about the order line item.
     **/
    const CodeType_General = 'General';

    /**
     * This enumeration value indicates that a question about shipping the order line item was asked.
     **/
    const CodeType_Shipping = 'Shipping';

    /**
     * This enumeration value indicates that a payment question was asked about the order line item.
     **/
    const CodeType_Payment = 'Payment';

    /**
     * This enumeration value indicates that a question was asked about a shipment that involves multiple packages.
     **/
    const CodeType_MultipleItemShipping = 'MultipleItemShipping';

    /**
     * This enumeration value indicates that question was asked about a customized subject.
     **/
    const CodeType_CustomizedSubject = 'CustomizedSubject';

    /**
     * This enumeration value indicates that question does not have a subject.
     **/
    const CodeType_None = 'None';

    /**
     * Reserved for future or internal use.
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
     * @return QuestionTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param QuestionTypeCodeType|null $value
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
    public function isGeneral()
    {
        return $this->_value === self::CodeType_General;
    }

    /**
     * @return bool
     */
    public function isShipping()
    {
        return $this->_value === self::CodeType_Shipping;
    }

    /**
     * @return bool
     */
    public function isPayment()
    {
        return $this->_value === self::CodeType_Payment;
    }

    /**
     * @return bool
     */
    public function isMultipleItemShipping()
    {
        return $this->_value === self::CodeType_MultipleItemShipping;
    }

    /**
     * @return bool
     */
    public function isCustomizedSubject()
    {
        return $this->_value === self::CodeType_CustomizedSubject;
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

QuestionTypeCodeType::_register();
