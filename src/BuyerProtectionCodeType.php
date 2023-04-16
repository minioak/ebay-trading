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
 * This enumeration type indicates the item's eligibility status for eBay's Money Back Guarantee program.
 **/
class BuyerProtectionCodeType extends EbatNs_EnumType
{
    const TAG = 'BuyerProtectionCodeType';
    const NAME = 'BuyerProtectionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the item is ineligible for buyer protection. In many
     * cases, the item is ineligible for buyer protection due to the listing category.
     **/
    const CodeType_ItemIneligible = 'ItemIneligible';

    /**
     * This value indicates that the item is eligible for buyer protection.
     **/
    const CodeType_ItemEligible = 'ItemEligible';

    /**
     * This value indicates that customer support has marked the item as
     * ineligible per special criteria (e.g., seller's account closed).
     **/
    const CodeType_ItemMarkedIneligible = 'ItemMarkedIneligible';

    /**
     * This value indicates that customer support has marked the item as
     * eligible per special criteria.
     **/
    const CodeType_ItemMarkedEligible = 'ItemMarkedEligible';

    /**
     * This value indicates that the item is ineligible for coverage under any buyer
     * protection program.
     **/
    const CodeType_NoCoverage = 'NoCoverage';

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
     * @return BuyerProtectionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BuyerProtectionCodeType|null $value
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
    public function isItemIneligible()
    {
        return $this->_value === self::CodeType_ItemIneligible;
    }

    /**
     * @return bool
     */
    public function isItemEligible()
    {
        return $this->_value === self::CodeType_ItemEligible;
    }

    /**
     * @return bool
     */
    public function isItemMarkedIneligible()
    {
        return $this->_value === self::CodeType_ItemMarkedIneligible;
    }

    /**
     * @return bool
     */
    public function isItemMarkedEligible()
    {
        return $this->_value === self::CodeType_ItemMarkedEligible;
    }

    /**
     * @return bool
     */
    public function isNoCoverage()
    {
        return $this->_value === self::CodeType_NoCoverage;
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

BuyerProtectionCodeType::_register();
