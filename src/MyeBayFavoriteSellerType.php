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
 * Characteristics of the My eBay Favorite Seller.
 **/
class MyeBayFavoriteSellerType extends EbatNs_ComplexType
{
    const TAG = 'MyeBayFavoriteSellerType';
    const NAME = 'MyeBayFavoriteSellerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $UserID = null;

    /**
     * @var string|null
     */
    protected $StoreName = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreName()
    {
        return $this->_dc($this->StoreName, 'StoreName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStoreName($value)
    {
        $this->StoreName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'UserID' => [],
            'StoreName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyeBayFavoriteSellerType::_register();
