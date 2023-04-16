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
 * Miscellaneous details of the shipment.
 **/
class ShippingFeatureCodeType extends EbatNs_EnumType
{
    const TAG = 'ShippingFeatureCodeType';
    const NAME = 'ShippingFeatureCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Confirmation requested.
     **/
    const CodeType_DeliveryConfirmation = 'DeliveryConfirmation';

    /**
     * Signature requested upon receipt.
     **/
    const CodeType_SignatureConfirmation = 'SignatureConfirmation';

    /**
     * Stealth postage.
     **/
    const CodeType_StealthPostage = 'StealthPostage';

    /**
     * Saturday delivery.
     **/
    const CodeType_SaturdayDelivery = 'SaturdayDelivery';

    /**
     * Other.
     **/
    const CodeType_Other = 'Other';

    /**
     * Not defined.
     **/
    const CodeType_NotDefined = 'NotDefined';

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
     * @return ShippingFeatureCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingFeatureCodeType|null $value
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
    public function isDeliveryConfirmation()
    {
        return $this->_value === self::CodeType_DeliveryConfirmation;
    }

    /**
     * @return bool
     */
    public function isSignatureConfirmation()
    {
        return $this->_value === self::CodeType_SignatureConfirmation;
    }

    /**
     * @return bool
     */
    public function isStealthPostage()
    {
        return $this->_value === self::CodeType_StealthPostage;
    }

    /**
     * @return bool
     */
    public function isSaturdayDelivery()
    {
        return $this->_value === self::CodeType_SaturdayDelivery;
    }

    /**
     * @return bool
     */
    public function isOther()
    {
        return $this->_value === self::CodeType_Other;
    }

    /**
     * @return bool
     */
    public function isNotDefined()
    {
        return $this->_value === self::CodeType_NotDefined;
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

ShippingFeatureCodeType::_register();
