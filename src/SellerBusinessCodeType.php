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
 * Type of seller account. This value is returned if the user is a
 * business seller with a site ID of 77 (Germany), 3 (UK), 205 (Ireland) or 0 (US Motors).
 **/
class SellerBusinessCodeType extends EbatNs_EnumType
{
    const TAG = 'SellerBusinessCodeType';
    const NAME = 'SellerBusinessCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Type of seller account not defined.
     **/
    const CodeType_Undefined = 'Undefined';

    /**
     * Private seller account.
     **/
    const CodeType_Private = 'Private';

    /**
     * Commercial seller account.
     **/
    const CodeType_Commercial = 'Commercial';

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
     * @return SellerBusinessCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellerBusinessCodeType|null $value
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
    public function isUndefined()
    {
        return $this->_value === self::CodeType_Undefined;
    }

    /**
     * @return bool
     */
    public function isPrivate()
    {
        return $this->_value === self::CodeType_Private;
    }

    /**
     * @return bool
     */
    public function isCommercial()
    {
        return $this->_value === self::CodeType_Commercial;
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

SellerBusinessCodeType::_register();
