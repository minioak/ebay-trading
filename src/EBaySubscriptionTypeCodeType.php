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
 * This enumerated type contains a list of eBay subscriptions that an eBay user may be subscribed to.
 **/
class EBaySubscriptionTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'EBaySubscriptionTypeCodeType';
    const NAME = 'EBaySubscriptionTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This eBay subscription is no longer available.
     **/
    const CodeType_SellerAssistant = 'SellerAssistant';

    /**
     * This eBay subscription is no longer available.
     **/
    const CodeType_SellerAssistantPro = 'SellerAssistantPro';

    /**
     * This value indicates that the user has a Basic eBay Store membership. See the <a
     * href="http://pages.ebay.com/sellerinformation/stores/Subscriptions.html target="_blank">Welcome to eBay
     * Stores</a> help page for more information on eBay Store subscriptions.
     **/
    const CodeType_EBayStoreBasic = 'EBayStoreBasic';

    /**
     * This value indicates that the user has a Premium eBay Store membership. See the <a
     * href="http://pages.ebay.com/sellerinformation/stores/Subscriptions.html target="_blank">Welcome to eBay
     * Stores</a> help page for more information on eBay Store subscriptions.
     **/
    const CodeType_EBayStoreFeatured = 'EBayStoreFeatured';

    /**
     * This value indicates that the user has a Anchor eBay Store membership. See the <a
     * href="http://pages.ebay.com/sellerinformation/stores/Subscriptions.html target="_blank">Welcome to eBay
     * Stores</a> help page for more information on eBay Store subscriptions.
     **/
    const CodeType_EBayStoreAnchor = 'EBayStoreAnchor';

    /**
     * This value indicates that the user has a Selling Manager subscription. Selling Manager is free to all sellers and
     * can be subscribed to through the
     * Subscriptions
     * section of My eBay. See the <a href="http://pages.ebay.com/help/sell/selling-manager-subscription.html
     * target="_blank">Selling Manager and Selling Manager Pro</a> help page for more information on Selling Manager.
     **/
    const CodeType_SellingManager = 'SellingManager';

    /**
     * This value indicates that the user has a Selling Manager Pro subscription. Selling Manager Pro is free to all
     * sellers for the first 30 days, and a Selling Manager Pro subscription is included at no charge for eBay Store
     * Premium and Anchor subscriptions. Selling Manager Pro can be subscribed to through the
     * Subscriptions
     * section of My eBay. See the <a href="http://pages.ebay.com/help/sell/selling-manager-subscription.html
     * target="_blank">Selling Manager and Selling Manager Pro</a> help page for more information on Selling Manager
     * Pro.
     **/
    const CodeType_SellingManagerPro = 'SellingManagerPro';

    /**
     * This value is no longer applicable because Picture Manager has been EOLed.
     **/
    const CodeType_PictureManagerLevel1 = 'PictureManagerLevel1';

    /**
     * This value is no longer applicable because Picture Manager has been EOLed.
     **/
    const CodeType_PictureManagerLevel2 = 'PictureManagerLevel2';

    /**
     * This value is no longer applicable because Picture Manager has been EOLed.
     **/
    const CodeType_PictureManagerLevel3 = 'PictureManagerLevel3';

    /**
     * This value is no longer applicable because Picture Manager has been EOLed.
     **/
    const CodeType_PictureManagerLevel4 = 'PictureManagerLevel4';

    /**
     * This value is no longer applicable because Picture Manager has been EOLed.
     **/
    const CodeType_PictureManagerLevel5 = 'PictureManagerLevel5';

    /**
     * This value is no longer applicable because Picture Manager has been EOLed.
     **/
    const CodeType_PictureManagerLevel6 = 'PictureManagerLevel6';

    /**
     * This value is no longer applicable because Picture Manager has been EOLed.
     **/
    const CodeType_PictureManagerLevel7 = 'PictureManagerLevel7';

    /**
     * Basic Sales Reports are no longer available. Sellers should subsribe to Sales Reports Plus instead.
     **/
    const CodeType_SellerReportsBasic = 'SellerReportsBasic';

    /**
     * This value indicates that the user has a Sales Reports Plus subscription. A user can subscribe to Sales Report
     * Plus through the
     * Subscriptions
     * section of My eBay. See the <a href="http://pages.ebay.com/help/sell/viewing-sales-reports.html
     * target="_blank">Sales Report Plus</a> help page for more information.
     **/
    const CodeType_SellerReportsPlus = 'SellerReportsPlus';

    /**
     * This value indicates that the user has a File Exchange subscription. A user can subscribe to File Exchange
     * through the
     * Subscriptions
     * section of My eBay. See the <a href="http://pages.ebay.com/sellerinformation/sellingresources/fileexchange.html
     * target="_blank">File Exchange</a> help page for more information.
     **/
    const CodeType_FileExchange = 'FileExchange';

    /**
     * This value indicates that the Motors Dealer has a Local Market Specialty subscription. This type of account is
     * used to sell in the Motorcycles, Powersports, and Other Vehicles and Trailers categories. Not Cars and Trucks.
     **/
    const CodeType_LocalMarketSpecialty = 'LocalMarketSpecialty';

    /**
     * This value indicates that the Motors Dealer has a Local Market Regular  subscription. This type of account is
     * used to sell in all eBay Motors categories.
     **/
    const CodeType_LocalMarketRegular = 'LocalMarketRegular';

    /**
     * This value indicates that the Motors Dealer has a Local Market Premium  subscription. This type of account is
     * used to sell in all eBay Motors categories.
     **/
    const CodeType_LocalMarketPremium = 'LocalMarketPremium';

    
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
     * @return EBaySubscriptionTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param EBaySubscriptionTypeCodeType|null $value
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
    public function isSellerAssistant()
    {
        return $this->_value === self::CodeType_SellerAssistant;
    }

    /**
     * @return bool
     */
    public function isSellerAssistantPro()
    {
        return $this->_value === self::CodeType_SellerAssistantPro;
    }

    /**
     * @return bool
     */
    public function isEBayStoreBasic()
    {
        return $this->_value === self::CodeType_EBayStoreBasic;
    }

    /**
     * @return bool
     */
    public function isEBayStoreFeatured()
    {
        return $this->_value === self::CodeType_EBayStoreFeatured;
    }

    /**
     * @return bool
     */
    public function isEBayStoreAnchor()
    {
        return $this->_value === self::CodeType_EBayStoreAnchor;
    }

    /**
     * @return bool
     */
    public function isSellingManager()
    {
        return $this->_value === self::CodeType_SellingManager;
    }

    /**
     * @return bool
     */
    public function isSellingManagerPro()
    {
        return $this->_value === self::CodeType_SellingManagerPro;
    }

    /**
     * @return bool
     */
    public function isPictureManagerLevel1()
    {
        return $this->_value === self::CodeType_PictureManagerLevel1;
    }

    /**
     * @return bool
     */
    public function isPictureManagerLevel2()
    {
        return $this->_value === self::CodeType_PictureManagerLevel2;
    }

    /**
     * @return bool
     */
    public function isPictureManagerLevel3()
    {
        return $this->_value === self::CodeType_PictureManagerLevel3;
    }

    /**
     * @return bool
     */
    public function isPictureManagerLevel4()
    {
        return $this->_value === self::CodeType_PictureManagerLevel4;
    }

    /**
     * @return bool
     */
    public function isPictureManagerLevel5()
    {
        return $this->_value === self::CodeType_PictureManagerLevel5;
    }

    /**
     * @return bool
     */
    public function isPictureManagerLevel6()
    {
        return $this->_value === self::CodeType_PictureManagerLevel6;
    }

    /**
     * @return bool
     */
    public function isPictureManagerLevel7()
    {
        return $this->_value === self::CodeType_PictureManagerLevel7;
    }

    /**
     * @return bool
     */
    public function isSellerReportsBasic()
    {
        return $this->_value === self::CodeType_SellerReportsBasic;
    }

    /**
     * @return bool
     */
    public function isSellerReportsPlus()
    {
        return $this->_value === self::CodeType_SellerReportsPlus;
    }

    /**
     * @return bool
     */
    public function isFileExchange()
    {
        return $this->_value === self::CodeType_FileExchange;
    }

    /**
     * @return bool
     */
    public function isLocalMarketSpecialty()
    {
        return $this->_value === self::CodeType_LocalMarketSpecialty;
    }

    /**
     * @return bool
     */
    public function isLocalMarketRegular()
    {
        return $this->_value === self::CodeType_LocalMarketRegular;
    }

    /**
     * @return bool
     */
    public function isLocalMarketPremium()
    {
        return $this->_value === self::CodeType_LocalMarketPremium;
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

EBaySubscriptionTypeCodeType::_register();
