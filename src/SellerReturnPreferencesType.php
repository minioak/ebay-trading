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
 * Type defining the
 * SellerReturnPreferences
 * container, which consists of the
 * OptedIn
 * flag that indicates whether or not the seller has opted in to eBay Managed Returns.
 **/
class SellerReturnPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'SellerReturnPreferencesType';
    const NAME = 'SellerReturnPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $OptedIn = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOptedIn()
    {
        return $this->_dc($this->OptedIn === 'true', 'OptedIn');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setOptedIn($value)
    {
        $this->OptedIn = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['OptedIn' => ['type' => 'bool']], parent::NAME);
        self::assignAttributes([]);
    }

}

SellerReturnPreferencesType::_register();
