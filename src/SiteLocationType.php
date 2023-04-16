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
 * Contains the data that defines a site-based filter (used when searching for
 * items and filtering the search result set).
 **/
class SiteLocationType extends EbatNs_ComplexType
{
    const TAG = 'SiteLocationType';
    const NAME = 'SiteLocationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SiteIDFilterCodeType|null
     */
    protected $SiteID = null;


    /**
     * @return SiteIDFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSiteID()
    {
        return $this->_dc($this->SiteID);
    }

    /**
     * @param SiteIDFilterCodeType|null $value
     * @return void
     */
    public function setSiteID($value)
    {
        $this->SiteID = $this->_enum($value, SiteIDFilterCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SiteID' => ['type' => 'SiteIDFilterCodeType', 'enum' => true, 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

SiteLocationType::_register();
