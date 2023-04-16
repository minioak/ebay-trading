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
 * This enumerated type is used in the response of Add/Revise/Relist item calls to indicate if eBay has applied a
 * Special offer or Promotional discount to the order line item.
 **/
class DiscountReasonCodeType extends EbatNs_EnumType
{
    const TAG = 'DiscountReasonCodeType';
    const NAME = 'DiscountReasonCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * An offer that applies to a limited number of listings during the offering
     * period. Example:  "There is no insertion fee for up to 5 auctions when
     * listing between 12/1 and 12/10."
     **/
    const CodeType_SpecialOffer = 'SpecialOffer';

    /**
     * An offer that applies to an unlimited number of listings during the offering
     * period. Example:  "Get subtitle for $0.10 in Tech category when listing between
     * 12/25 and 12/28.  No limit to the number of items listed during this period."
     **/
    const CodeType_Promotion = 'Promotion';

    /**
     * Reserved for future use
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
     * @return DiscountReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DiscountReasonCodeType|null $value
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
    public function isSpecialOffer()
    {
        return $this->_value === self::CodeType_SpecialOffer;
    }

    /**
     * @return bool
     */
    public function isPromotion()
    {
        return $this->_value === self::CodeType_Promotion;
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

DiscountReasonCodeType::_register();
