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
 * Specifies standard subsets of data to return for each result
 * within the set of results in the response payload. If no
 * detail level is specified, a base set of data is returned.
 * The base set of data varies per call.
 **/
class DetailLevelCodeType extends EbatNs_EnumType
{
    const TAG = 'DetailLevelCodeType';
    const NAME = 'DetailLevelCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Returns all available data.
     * With
     * GetSellerList
     * and other calls that retrieve large data sets,
     * please avoid using
     * ReturnAll
     * when possible. For example, if you use
     * 
     * GetSellerList
     * , use a
     * GranularityLevel
     * or use the
     * 
     * GetSellerEvents
     * call instead. If you use
     * ReturnAll
     * with
     * GetSellerList
     * ,
     * use a small
     * EntriesPerPage
     * value and a short
     * 
     * EndTimeFrom
     * /
     * EndTimeTo
     * range for better performance.
     **/
    const CodeType_ReturnAll = 'ReturnAll';

    /**
     * Returns the description, plus the
     * 
     * ListingDesigner
     * node and some additional information if applicable
     **/
    const CodeType_ItemReturnDescription = 'ItemReturnDescription';

    /**
     * For
     * GetItem
     * , returns Item Specifics and
     * Pre-filled Item Information, if any.
     * Also see the description of
     * 
     * Item.ProductListingDetails
     * for
     * GetItem
     * .
     **/
    const CodeType_ItemReturnAttributes = 'ItemReturnAttributes';

    /**
     * If this value is used, the primary category and, if applicable, the secondary category is returned.
     **/
    const CodeType_ItemReturnCategories = 'ItemReturnCategories';

    /**
     * Returns the summary data.
     * For
     * GetMyMessages
     * , this detail level returns the same data
     * whether or not you include
     * MessageIDs
     * or
     * AlertIDs
     * in the
     * request. Returns up to 10
     * FolderID
     * and
     * FolderName
     * values.
     * Currently, this detail level is the only way to retrieve
     * 
     * FolderID
     * and
     * FolderName
     * values. See
     * GetMyMessages
     * for a code sample that demonstrates
     * this.
     **/
    const CodeType_ReturnSummary = 'ReturnSummary';

    /**
     * Returns message headers.
     * For
     * GetMyMessages
     * , if you include
     * MessageIDs
     * or
     * AlertIDs
     * in
     * the request, this detail level returns header information,
     * without body text, for the specified message ID or alert ID
     * values. If you include a
     * FolderID
     * , header information is
     * returned only for the messages and alerts in the specified
     * folder.
     * If you do not include
     * MessageIDs
     * or
     * AlertIDs
     * , this detail
     * level returns header information for Alerts and Messages as follows:
     * <ul>
     * <li>If all the Alerts have been read, they are sorted in date order,
     * with the most recent first.</li>
     * <li>If one of the Alerts has not been read, the Read Alerts come first,
     * sorted most recent first, followed by the Unread Alert(s).</li>
     * <li>All messages in ascending order by date received with the
     * oldest messages first.</li>
     * </ul>
     * 
     * <span class="tablenote">
     * Note:
     * Even when restricted by this detail level to return only header information,
     * GetMyMessages
     * may return a high volume of data.
     * </span>
     **/
    const CodeType_ReturnHeaders = 'ReturnHeaders';

    /**
     * Returns full message information.
     * For
     * GetMyMessages
     * , if you include
     * MessageIDs
     * or
     * AlertIDs
     * in
     * the request, this detail level returns message information
     * for the specified message ID or alert ID values. If you
     * include a
     * FolderID
     * , message information is returned only for
     * the messages and alerts in the specified folder.
     **/
    const CodeType_ReturnMessages = 'ReturnMessages';
    
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
     * @return DetailLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DetailLevelCodeType|null $value
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
    public function isReturnAll()
    {
        return $this->_value === self::CodeType_ReturnAll;
    }

    /**
     * @return bool
     */
    public function isItemReturnDescription()
    {
        return $this->_value === self::CodeType_ItemReturnDescription;
    }

    /**
     * @return bool
     */
    public function isItemReturnAttributes()
    {
        return $this->_value === self::CodeType_ItemReturnAttributes;
    }

    /**
     * @return bool
     */
    public function isItemReturnCategories()
    {
        return $this->_value === self::CodeType_ItemReturnCategories;
    }

    /**
     * @return bool
     */
    public function isReturnSummary()
    {
        return $this->_value === self::CodeType_ReturnSummary;
    }

    /**
     * @return bool
     */
    public function isReturnHeaders()
    {
        return $this->_value === self::CodeType_ReturnHeaders;
    }

    /**
     * @return bool
     */
    public function isReturnMessages()
    {
        return $this->_value === self::CodeType_ReturnMessages;
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

DetailLevelCodeType::_register();
