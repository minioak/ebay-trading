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
 * This type was deprecated along with the Seller Guarantee feature.
 **/
class SellerGuaranteeLevelCodeType extends EbatNs_EnumType
{
    const TAG = 'SellerGuaranteeLevelCodeType';
    const NAME = 'SellerGuaranteeLevelCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (out) Not eligible for Seller Level Guarantee
     **/
    const CodeType_NotEligible = 'NotEligible';

    /**
     * (out) Regular eligibility level
     **/
    const CodeType_Regular = 'Regular';

    /**
     * (out) Premium eligibility level
     **/
    const CodeType_Premium = 'Premium';

    /**
     * (out) Ultra eligibility level
     **/
    const CodeType_Ultra = 'Ultra';

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
     * @return SellerGuaranteeLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellerGuaranteeLevelCodeType|null $value
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
    public function isNotEligible()
    {
        return $this->_value === self::CodeType_NotEligible;
    }

    /**
     * @return bool
     */
    public function isRegular()
    {
        return $this->_value === self::CodeType_Regular;
    }

    /**
     * @return bool
     */
    public function isPremium()
    {
        return $this->_value === self::CodeType_Premium;
    }

    /**
     * @return bool
     */
    public function isUltra()
    {
        return $this->_value === self::CodeType_Ultra;
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

SellerGuaranteeLevelCodeType::_register();
