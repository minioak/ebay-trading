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
 * Enumerated type that defines the possible parties that can initiate the cancellation of an eBay order.
 **/
class CancelInitiatorCodeType extends EbatNs_EnumType
{
    const TAG = 'CancelInitiatorCodeType';
    const NAME = 'CancelInitiatorCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the party whom initiated the cancellation of the order is not known.
     **/
    const CodeType_Unknown = 'Unknown';

    /**
     * This value indicates that the seller initiated the cancellation of the order.
     **/
    const CodeType_Seller = 'Seller';

    /**
     * This value indicates that the buyer initiated the cancellation of the order.
     **/
    const CodeType_Buyer = 'Buyer';

    /**
     * This value indicates that eBay customer support initiated the cancellation of the order.
     **/
    const CodeType_CS = 'CS';

    /**
     * This value indicates that the cancellation of the order was initiated by the system.
     **/
    const CodeType_System = 'System';

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
     * @return CancelInitiatorCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CancelInitiatorCodeType|null $value
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
    public function isUnknown()
    {
        return $this->_value === self::CodeType_Unknown;
    }

    /**
     * @return bool
     */
    public function isSeller()
    {
        return $this->_value === self::CodeType_Seller;
    }

    /**
     * @return bool
     */
    public function isBuyer()
    {
        return $this->_value === self::CodeType_Buyer;
    }

    /**
     * @return bool
     */
    public function isCS()
    {
        return $this->_value === self::CodeType_CS;
    }

    /**
     * @return bool
     */
    public function isSystem()
    {
        return $this->_value === self::CodeType_System;
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

CancelInitiatorCodeType::_register();
