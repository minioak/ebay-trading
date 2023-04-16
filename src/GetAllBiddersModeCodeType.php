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
 * This enumerated type defines the values that can be used in the
 * CallMode
 * field of the
 * GetAllBidders
 * call request to control which type of auction bidders are returned in the response.
 **/
class GetAllBiddersModeCodeType extends EbatNs_EnumType
{
    const TAG = 'GetAllBiddersModeCodeType';
    const NAME = 'GetAllBiddersModeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value is used if the user wants to retrieve all bidders on an active or recently-ended auction
     * listing. This value can be used by any user, and it is the default value if the
     * CallMode
     * field is not included in the call request.
     **/
    const CodeType_ViewAll = 'ViewAll';

    /**
     * This enumeration value is used if the user wants to retrieve all non-winning bidders for a recently-ended auction
     * listing. This value can be only be used by the seller of the item.
     **/
    const CodeType_EndedListing = 'EndedListing';

    /**
     * This enumeration value is used if the user wants to retrieve all non-winning bidders, for a recently-ended
     * auction listing, who are eligible for, and who accept Second Chance Offers. This value can be only be used by the
     * seller of the item.  See <a href="http://pages.ebay.com/help/sell/second_chance_offer.html#when"
     * target="_blank">When to use a Second Chance Offer</a> for more information on Second Chance Offers.
     **/
    const CodeType_SecondChanceEligibleEndedListing = 'SecondChanceEligibleEndedListing';

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
     * @return GetAllBiddersModeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param GetAllBiddersModeCodeType|null $value
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
    public function isViewAll()
    {
        return $this->_value === self::CodeType_ViewAll;
    }

    /**
     * @return bool
     */
    public function isEndedListing()
    {
        return $this->_value === self::CodeType_EndedListing;
    }

    /**
     * @return bool
     */
    public function isSecondChanceEligibleEndedListing()
    {
        return $this->_value === self::CodeType_SecondChanceEligibleEndedListing;
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

GetAllBiddersModeCodeType::_register();
