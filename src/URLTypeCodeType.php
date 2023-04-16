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
 * This enumerated type consists of the different eBay URLs that can be returned under the
 * URLDetails
 * containers of a
 * GeteBayDetails
 * response.
 **/
class URLTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'URLTypeCodeType';
    const NAME = 'URLTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the base URL for the View Item page. The user will just input the Item ID for a listing at the end of
     * the URL to retrieve the View Item page for that listing.
     **/
    const CodeType_ViewItemURL = 'ViewItemURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the base URL for the eBay User page. The user will just input the user ID for an eBay user at the end
     * of the URL to retrieve the eBay User page.
     **/
    const CodeType_ViewUserURL = 'ViewUserURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the URL for the My eBay home page.
     **/
    const CodeType_MyeBayURL = 'MyeBayURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the URL for the user's My eBay Bids/Offer page.
     **/
    const CodeType_MyeBayBiddingURL = 'MyeBayBiddingURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the URL to the 'Didn't Win' section on the user's My eBay Bids/Offer page.
     **/
    const CodeType_MyeBayNotWonURL = 'MyeBayNotWonURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the URL to the 'Bidding' section on the user's My eBay Bids/Offer page.
     **/
    const CodeType_MyeBayWonURL = 'MyeBayWonURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the URL to the user's My eBay Watch List page.
     **/
    const CodeType_MyeBayWatchingURL = 'MyeBayWatchingURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the base URL to the user's eBay Store page. The seller will just add a forward slash (/) and their eBay
     * Store name to get to their eBay Store home page.
     **/
    const CodeType_eBayStoreURL = 'eBayStoreURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the full URL to the small version of the eBay Marketplace logo.
     **/
    const CodeType_SmallLogoURL = 'SmallLogoURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the full URL to the medium version of the eBay Marketplace logo.
     **/
    const CodeType_MediumLogoURL = 'MediumLogoURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the full URL to the large version of the eBay Marketplace logo.
     **/
    const CodeType_LargeLogoURL = 'LargeLogoURL';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the base URL that a seller needs to enter the UI flow to make a request that a missing product be added
     * to the eBay Catalog.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * Catalog change requests through the UI flow are currently not available, so this URL will not be returned
     * in
     * GeteBayDetails
     * .
     * </span>
     **/
    const CodeType_CreateProductUrl = 'CreateProductUrl';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the base URL that a seller needs to enter the UI flow to make a request that an existing eBay Catalog
     * product be revised. The seller will have to append the ePID value of the catalog product to the end of the URL.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * Catalog change requests through the UI flow are currently not available, so this URL will not be returned
     * in
     * GeteBayDetails
     * .
     * </span>
     **/
    const CodeType_AppealProductUrl = 'AppealProductUrl';

    /**
     * This value indicates that the URL in the corresponding
     * URL
     * field is the base URL that a seller needs to enter the UI flow to get the status of a catalog change request
     * (request for a new catalog product or request to revise an existing product). The seller will have to append the
     * identifier of the catalog change request to the end of the URL.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * Catalog change requests through the UI flow are currently not available, so this URL will not be returned
     * in
     * GeteBayDetails
     * .
     * </span>
     **/
    const CodeType_ManageProductUrl = 'ManageProductUrl';

    /**
     * Reserved for future use.
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
     * @return URLTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param URLTypeCodeType|null $value
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
    public function isViewItemURL()
    {
        return $this->_value === self::CodeType_ViewItemURL;
    }

    /**
     * @return bool
     */
    public function isViewUserURL()
    {
        return $this->_value === self::CodeType_ViewUserURL;
    }

    /**
     * @return bool
     */
    public function isMyeBayURL()
    {
        return $this->_value === self::CodeType_MyeBayURL;
    }

    /**
     * @return bool
     */
    public function isMyeBayBiddingURL()
    {
        return $this->_value === self::CodeType_MyeBayBiddingURL;
    }

    /**
     * @return bool
     */
    public function isMyeBayNotWonURL()
    {
        return $this->_value === self::CodeType_MyeBayNotWonURL;
    }

    /**
     * @return bool
     */
    public function isMyeBayWonURL()
    {
        return $this->_value === self::CodeType_MyeBayWonURL;
    }

    /**
     * @return bool
     */
    public function isMyeBayWatchingURL()
    {
        return $this->_value === self::CodeType_MyeBayWatchingURL;
    }

    /**
     * @return bool
     */
    public function isEBayStoreURL()
    {
        return $this->_value === self::CodeType_eBayStoreURL;
    }

    /**
     * @return bool
     */
    public function isSmallLogoURL()
    {
        return $this->_value === self::CodeType_SmallLogoURL;
    }

    /**
     * @return bool
     */
    public function isMediumLogoURL()
    {
        return $this->_value === self::CodeType_MediumLogoURL;
    }

    /**
     * @return bool
     */
    public function isLargeLogoURL()
    {
        return $this->_value === self::CodeType_LargeLogoURL;
    }

    /**
     * @return bool
     */
    public function isCreateProductUrl()
    {
        return $this->_value === self::CodeType_CreateProductUrl;
    }

    /**
     * @return bool
     */
    public function isAppealProductUrl()
    {
        return $this->_value === self::CodeType_AppealProductUrl;
    }

    /**
     * @return bool
     */
    public function isManageProductUrl()
    {
        return $this->_value === self::CodeType_ManageProductUrl;
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

URLTypeCodeType::_register();
