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
 * This enumerated type contains the list of values that can be used by the seller to set the length of time that a
 * Second Chance Offer or a Transaction Confirmation Request will be available to a specific recipient to whom the
 * Second Chance Offer or Transaction Confirmation Request was presented. The recipient must purchase the Second
 * Chance or Transaction Confirmation Request item within this time or the offer will expire. Second Chance Offers
 * are only applicable for closed auction listings and Transaction Confirmation Requests are only applicable for an
 * eBay Motors listing that were closed and converted to a Transaction Confirmation Request.
 **/
class SecondChanceOfferDurationCodeType extends EbatNs_EnumType
{
    const TAG = 'SecondChanceOfferDurationCodeType';
    const NAME = 'SecondChanceOfferDurationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The seller specifies this value to make the Second Chance offer available to the bidder for one day. This value
     * will affect the
     * EndTime
     * value returned in the
     * AddSecondChanceItem
     * or
     * AddTransactionConfirmationItem
     * responses.
     **/
    const CodeType_Days_1 = 'Days_1';

    /**
     * The seller specifies this value to make the Second Chance offer available to the bidder for three days. This
     * value will affect the
     * EndTime
     * value returned in the
     * AddSecondChanceItem
     * or
     * AddTransactionConfirmationItem
     * responses.
     **/
    const CodeType_Days_3 = 'Days_3';

    /**
     * The seller specifies this value to make the Second Chance offer available to the bidder for five days. This value
     * will affect the
     * AddSecondChanceItem
     * or
     * AddTransactionConfirmationItem
     * responses.
     **/
    const CodeType_Days_5 = 'Days_5';

    /**
     * The seller specifies this value to make the Second Chance offer available to the bidder for seven days. This
     * value will affect the
     * EndTime
     * value returned in the
     * AddSecondChanceItem
     * or
     * AddTransactionConfirmationItem
     * responses.
     **/
    const CodeType_Days_7 = 'Days_7';

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
     * @return SecondChanceOfferDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SecondChanceOfferDurationCodeType|null $value
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
    public function isDays_1()
    {
        return $this->_value === self::CodeType_Days_1;
    }

    /**
     * @return bool
     */
    public function isDays_3()
    {
        return $this->_value === self::CodeType_Days_3;
    }

    /**
     * @return bool
     */
    public function isDays_5()
    {
        return $this->_value === self::CodeType_Days_5;
    }

    /**
     * @return bool
     */
    public function isDays_7()
    {
        return $this->_value === self::CodeType_Days_7;
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

SecondChanceOfferDurationCodeType::_register();
