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
 * This enumeration type lists the values that will be returned to the seller in a
 * GetOrders
 * call (and other order management calls) to indicate that the shipping address is the buyer's default shipping
 * address, an alternative/secondary shipping address, or an invalid shipping address.
 **/
class AddressUsageCodeType extends EbatNs_EnumType
{
    const TAG = 'AddressUsageCodeType';
    const NAME = 'AddressUsageCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the shipping address provided by the buyer at checkout time is the buyer's
     * default/primary shipping address.
     **/
    const CodeType_DefaultShipping = 'DefaultShipping';

    /**
     * This value indicates that the shipping address provided by the buyer at checkout time is one of the buyer's
     * secondary shipping addresses on file with eBay.
     **/
    const CodeType_Shipping = 'Shipping';

    /**
     * This value indicates that the address is not valid, and an alternative address will have to be provided before
     * the order is shipped.
     **/
    const CodeType_Invalid = 'Invalid';

    /**
     * (out) Reserved for internal or future use.
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
     * @return AddressUsageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AddressUsageCodeType|null $value
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
    public function isDefaultShipping()
    {
        return $this->_value === self::CodeType_DefaultShipping;
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
    public function isInvalid()
    {
        return $this->_value === self::CodeType_Invalid;
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

AddressUsageCodeType::_register();
