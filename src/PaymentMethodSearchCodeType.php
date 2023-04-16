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
 * <span class="tablenote">
 * Note:
 * This enumerated type is no longer applicable, as filtering by a payment method in an advanced item search is
 * no longer supported.
 * </span>
 **/
class PaymentMethodSearchCodeType extends EbatNs_EnumType
{
    const TAG = 'PaymentMethodSearchCodeType';
    const NAME = 'PaymentMethodSearchCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_PayPal = 'PayPal';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_PaisaPay = 'PaisaPay';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_PayPalOrPaisaPay = 'PayPalOrPaisaPay';

    /**
     * This enumeration value is reserved for future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_PaisaPayEscrowEMI = 'PaisaPayEscrowEMI';
    
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
     * @return PaymentMethodSearchCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaymentMethodSearchCodeType|null $value
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
    public function isPayPal()
    {
        return $this->_value === self::CodeType_PayPal;
    }

    /**
     * @return bool
     */
    public function isPaisaPay()
    {
        return $this->_value === self::CodeType_PaisaPay;
    }

    /**
     * @return bool
     */
    public function isPayPalOrPaisaPay()
    {
        return $this->_value === self::CodeType_PayPalOrPaisaPay;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isPaisaPayEscrowEMI()
    {
        return $this->_value === self::CodeType_PaisaPayEscrowEMI;
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

PaymentMethodSearchCodeType::_register();
