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
 * Enumerated type that lists the possible checkout states of an order line item.
 **/
class CheckoutStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'CheckoutStatusCodeType';
    const NAME = 'CheckoutStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the buyer has paid and checkout is complete.
     **/
    const CodeType_CheckoutComplete = 'CheckoutComplete';

    /**
     * This value indicates that checkout is incomplete, generally because the buyer has not paid yet.
     **/
    const CodeType_CheckoutIncomplete = 'CheckoutIncomplete';

    /**
     * This value indicates that the buyer wants to confirm the total price of the order line item before making a
     * payment.
     **/
    const CodeType_BuyerRequestsTotal = 'BuyerRequestsTotal';

    /**
     * This value indicates that the seller has just responded to the buyer concerning the total price of the order line
     * item.
     **/
    const CodeType_SellerResponded = 'SellerResponded';

    /**
     * Reserved for future use.
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
     * @return CheckoutStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CheckoutStatusCodeType|null $value
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
    public function isCheckoutComplete()
    {
        return $this->_value === self::CodeType_CheckoutComplete;
    }

    /**
     * @return bool
     */
    public function isCheckoutIncomplete()
    {
        return $this->_value === self::CodeType_CheckoutIncomplete;
    }

    /**
     * @return bool
     */
    public function isBuyerRequestsTotal()
    {
        return $this->_value === self::CodeType_BuyerRequestsTotal;
    }

    /**
     * @return bool
     */
    public function isSellerResponded()
    {
        return $this->_value === self::CodeType_SellerResponded;
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

CheckoutStatusCodeType::_register();
