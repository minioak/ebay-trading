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
 * Specifies an active or ended listing's status in eBay's processing
 * workflow. If a listing ends with a sale (or sales), eBay needs to
 * update the sale details (e.g., total price and buyer/high bidder)
 * and the final value fee. This processing can take several minutes.
 * If you retrieve a sold item and no details about the buyer/high
 * bidder are returned or no final value fee is available, use this
 * listing status information to determine whether eBay has finished
 * processing the listing.
 **/
class ListingStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'ListingStatusCodeType';
    const NAME = 'ListingStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The listing is still active or the listing has ended with
     * a sale but eBay has not completed processing the sale details
     * (e.g., total price and high bidder). A multi-item listing is
     * considered active until all items have winning bids or
     * purchases or the listing ends with at least one winning bid or
     * purchase. If the listing has ended with a sale but this Active
     * status is returned, please allow several minutes for eBay to
     * finish processing the listing.
     **/
    const CodeType_Active = 'Active';

    /**
     * The listing has ended. If the listing ended with a sale,
     * eBay has completed processing of the sale. All sale information
     * returned from eBay (e.g., total price and high bidder) should be
     * considered accurate and complete. However, the final value fee is
     * not yet available.
     **/
    const CodeType_Ended = 'Ended';

    /**
     * The listing has closed and eBay has completed processing the sale. All
     * sale information returned from eBay (e.g., total price and high bidder) should
     * be considered accurate and complete. Although the Final Value Fee (FVF) for
     * FixedPriceItem and StoresFixedPrice items is returned by GetSellerTransactions
     * and GetItemTransactions, all other listing types (excluding Buy It Now
     * purchases) require the listing status to be Completed before the Final Value
     * Fee is returned.
     **/
    const CodeType_Completed = 'Completed';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_Custom = 'Custom';
    
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
     * @return ListingStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ListingStatusCodeType|null $value
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
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isEnded()
    {
        return $this->_value === self::CodeType_Ended;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->_value === self::CodeType_Completed;
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
    public function isCustom()
    {
        return $this->_value === self::CodeType_Custom;
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

ListingStatusCodeType::_register();
