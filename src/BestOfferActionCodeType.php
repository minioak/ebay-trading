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
 * Enumerated type that defines the possible values that can be passed in to the
 * Action
 * field in a
 * RespondToBestOffer
 * request.
 **/
class BestOfferActionCodeType extends EbatNs_EnumType
{
    const TAG = 'BestOfferActionCodeType';
    const NAME = 'BestOfferActionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value should be passed in to the
     * Action
     * field to accept the Best Offer identified in the
     * BestOfferID
     * field. Note that only one Best Offer may be accepted in a single
     * RespondToBestOffer
     * call.
     **/
    const CodeType_Accept = 'Accept';

    /**
     * This value should be passed in to the
     * Action
     * field to decline one or more Best Offers identified by one or more
     * BestOfferID
     * fields. Note that multiple Best Offers may be declined in a single
     * RespondToBestOffer
     * call.
     **/
    const CodeType_Decline = 'Decline';

    /**
     * This value should be passed in to the
     * Action
     * field to counter a buyer's Best Offer or Counter Offer. Note that a seller may only counter one Best Offer in a
     * single
     * RespondToBestOffer
     * call. If a seller is using the
     * RespondToBestOffer
     * call to counter a Best Offer, the counter offer price must be specified in the
     * CounterOfferPrice
     * field, and the quantity of items in the Best Offer must be specified in the
     * CounterOfferQuantity
     * field.
     **/
    const CodeType_Counter = 'Counter';

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
     * @return BestOfferActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BestOfferActionCodeType|null $value
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
    public function isAccept()
    {
        return $this->_value === self::CodeType_Accept;
    }

    /**
     * @return bool
     */
    public function isDecline()
    {
        return $this->_value === self::CodeType_Decline;
    }

    /**
     * @return bool
     */
    public function isCounter()
    {
        return $this->_value === self::CodeType_Counter;
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

BestOfferActionCodeType::_register();
