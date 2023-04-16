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
 * This type is deprecated.
 **/
class SearchDetailsType extends EbatNs_ComplexType
{
    const TAG = 'SearchDetailsType';
    const NAME = 'SearchDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $BuyItNowEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Picture = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $RecentListing = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyItNowEnabled()
    {
        return $this->_dc($this->BuyItNowEnabled === 'true', 'BuyItNowEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBuyItNowEnabled($value)
    {
        $this->BuyItNowEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPicture()
    {
        return $this->_dc($this->Picture === 'true', 'Picture');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPicture($value)
    {
        $this->Picture = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecentListing()
    {
        return $this->_dc($this->RecentListing === 'true', 'RecentListing');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRecentListing($value)
    {
        $this->RecentListing = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BuyItNowEnabled' => ['type' => 'bool'],
            'Picture' => ['type' => 'bool'],
            'RecentListing' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SearchDetailsType::_register();
