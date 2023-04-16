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
 * Enumerated type that contains the different states of a seller's account.
 **/
class SellerAccountStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'SellerAccountStatusCodeType';
    const NAME = 'SellerAccountStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Your account is current.
     **/
    const CodeType_Current = 'Current';

    /**
     * Your account is past due.
     **/
    const CodeType_PastDue = 'PastDue';

    /**
     * Your account is on hold and risking suspension.
     **/
    const CodeType_OnHold = 'OnHold';

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
     * @return SellerAccountStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellerAccountStatusCodeType|null $value
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
    public function isCurrent()
    {
        return $this->_value === self::CodeType_Current;
    }

    /**
     * @return bool
     */
    public function isPastDue()
    {
        return $this->_value === self::CodeType_PastDue;
    }

    /**
     * @return bool
     */
    public function isOnHold()
    {
        return $this->_value === self::CodeType_OnHold;
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

SellerAccountStatusCodeType::_register();
