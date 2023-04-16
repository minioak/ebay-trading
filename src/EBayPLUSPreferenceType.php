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
 * Contains information about a country where a specified seller is eligible to offer eBay Plus on listings, as well
 * as the seller's opt-in status and listing preference for that country.
 * 
 * eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping
 * and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to be able offer the program
 * on qualifying listings. Sellers must commit to next-day delivery of those items.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In
 * Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead,
 * eBay will evaluate/determine whether a listing is eligible for eBay Plus.
 * </span>
 * For more details about eBay Plus, see <a
 * href="../../../../guides/features-guide/default.html#development/Feature-eBayPlus.html">Offering eBay Plus</a>.
 **/
class EBayPLUSPreferenceType extends EbatNs_ComplexType
{
    const TAG = 'eBayPLUSPreferenceType';
    const NAME = 'EBayPLUSPreferenceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CountryCodeType|null
     */
    protected $Country = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $OptInStatus = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ListingPreference = null;


    /**
     * @return CountryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCountry()
    {
        return $this->_dc($this->Country);
    }

    /**
     * @param CountryCodeType|null $value
     * @return void
     */
    public function setCountry($value)
    {
        $this->Country = $this->_enum($value, CountryCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOptInStatus()
    {
        return $this->_dc($this->OptInStatus === 'true', 'OptInStatus');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setOptInStatus($value)
    {
        $this->OptInStatus = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingPreference()
    {
        return $this->_dc($this->ListingPreference === 'true', 'ListingPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setListingPreference($value)
    {
        $this->ListingPreference = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Country' => ['type' => 'CountryCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'OptInStatus' => ['type' => 'bool'],
            'ListingPreference' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

EBayPLUSPreferenceType::_register();
