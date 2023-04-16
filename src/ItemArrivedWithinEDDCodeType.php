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
 * This enumerated type list the possible status values regarding whether or not a buyer received an order line item
 * within the estimated delivery date timeframe.
 **/
class ItemArrivedWithinEDDCodeType extends EbatNs_EnumType
{
    const TAG = 'ItemArrivedWithinEDDCodeType';
    const NAME = 'ItemArrivedWithinEDDCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is for internal use only.
     **/
    const CodeType_EddQuestionWasNotAsked = 'EddQuestionWasNotAsked';

    /**
     * This value is for internal use only.
     **/
    const CodeType_BuyerDidntProvideAnswer = 'BuyerDidntProvideAnswer';

    /**
     * This value indicates that the buyer indicated that the order line item did arrive within the estimated delivery
     * date when they left feedback for the transaction.
     **/
    const CodeType_BuyerIndicatedItemArrivedWithinEDDRange = 'BuyerIndicatedItemArrivedWithinEDDRange';

    /**
     * This value indicates that the buyer indicated that the order line item did not arrive within the estimated
     * delivery date when they left feedback for the transaction.
     **/
    const CodeType_BuyerIndicatedItemNotArrivedWithinEDDRange = 'BuyerIndicatedItemNotArrivedWithinEDDRange';

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
     * @return ItemArrivedWithinEDDCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ItemArrivedWithinEDDCodeType|null $value
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
    public function isEddQuestionWasNotAsked()
    {
        return $this->_value === self::CodeType_EddQuestionWasNotAsked;
    }

    /**
     * @return bool
     */
    public function isBuyerDidntProvideAnswer()
    {
        return $this->_value === self::CodeType_BuyerDidntProvideAnswer;
    }

    /**
     * @return bool
     */
    public function isBuyerIndicatedItemArrivedWithinEDDRange()
    {
        return $this->_value === self::CodeType_BuyerIndicatedItemArrivedWithinEDDRange;
    }

    /**
     * @return bool
     */
    public function isBuyerIndicatedItemNotArrivedWithinEDDRange()
    {
        return $this->_value === self::CodeType_BuyerIndicatedItemNotArrivedWithinEDDRange;
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

ItemArrivedWithinEDDCodeType::_register();
