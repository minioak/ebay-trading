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
 * Enumerated type that indicates whether or not a nonprofit charity organization is
 * registered with the PayPal Giving Fund. See the <a
 * href="http://pages.ebay.com/help/sell/nonprofit.html#enrolling">Enrolling your nonprofit</a> help topic for more
 * information on registering with
 * the PayPal Giving Fund and the benefits that come with being a registered eBay for Charity organization.
 **/
class AddressTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'AddressTypeCodeType';
    const NAME = 'AddressTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the address contained in the
     * NonProfitAddress
     * container is for a non-registered charity organization.
     **/
    const CodeType_Contact = 'Contact';

    /**
     * This value indicates that the address contained in the
     * NonProfitAddress
     * container is for a charity organization registered with the PayPal Giving Fund.
     **/
    const CodeType_Registered = 'Registered';

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
     * @return AddressTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AddressTypeCodeType|null $value
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
    public function isContact()
    {
        return $this->_value === self::CodeType_Contact;
    }

    /**
     * @return bool
     */
    public function isRegistered()
    {
        return $this->_value === self::CodeType_Registered;
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

AddressTypeCodeType::_register();
