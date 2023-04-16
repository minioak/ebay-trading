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
 * This type has been deprecated, as Pro Stores and other third-party checkouts have been deprecated.
 **/
class ListingCheckoutRedirectPreferenceType extends EbatNs_ComplexType
{
    const TAG = 'ListingCheckoutRedirectPreferenceType';
    const NAME = 'ListingCheckoutRedirectPreferenceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ProStoresStoreName = null;

    /**
     * @var string|null
     */
    protected $SellerThirdPartyUsername = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProStoresStoreName()
    {
        return $this->_dc($this->ProStoresStoreName, 'ProStoresStoreName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProStoresStoreName($value)
    {
        $this->ProStoresStoreName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerThirdPartyUsername()
    {
        return $this->_dc($this->SellerThirdPartyUsername, 'SellerThirdPartyUsername');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerThirdPartyUsername($value)
    {
        $this->SellerThirdPartyUsername = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ProStoresStoreName' => [],
            'SellerThirdPartyUsername' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ListingCheckoutRedirectPreferenceType::_register();
