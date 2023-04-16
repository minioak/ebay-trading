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
 * SellerProfilePreferences
 * container. This container
 * consists of a flag that indicates whether or not the seller has opted into Business
 * Policies, as well as a list of Business Policies profiles that have been set up for the
 * seller's account.
 **/
class SellerProfilePreferencesType extends EbatNs_ComplexType
{
    const TAG = 'SellerProfilePreferencesType';
    const NAME = 'SellerProfilePreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $SellerProfileOptedIn = null;

    /**
     * @var SupportedSellerProfilesType|null
     */
    protected $SupportedSellerProfiles = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerProfileOptedIn()
    {
        return $this->_dc($this->SellerProfileOptedIn === 'true', 'SellerProfileOptedIn');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSellerProfileOptedIn($value)
    {
        $this->SellerProfileOptedIn = self::_bool($value);
    }

    /**
     * @return SupportedSellerProfilesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSupportedSellerProfiles()
    {
        return $this->_dc($this->SupportedSellerProfiles, 'SupportedSellerProfiles');
    }

    /**
     * @param SupportedSellerProfilesType|null $value
     * @return void
     */
    public function setSupportedSellerProfiles($value)
    {
        $this->SupportedSellerProfiles = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SellerProfileOptedIn' => ['type' => 'bool'],
            'SupportedSellerProfiles' => ['type' => 'SupportedSellerProfilesType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerProfilePreferencesType::_register();
