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
 * Store logo.
 * 
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * The
 * Store.Logo
 * container can no longer be used in a
 * SetStore
 * call to upload a new logo to a store, and the
 * SetStore
 * call will be decommissioned on September 30, 2022.
 * 
 * 
 * The
 * GetStore
 * call now only returns the
 * Logo.URL
 * value, but not
 * Logo.LogoID
 * or
 * Logo.Name
 * .
 * </span>
 **/
class StoreLogoType extends EbatNs_ComplexType
{
    const TAG = 'StoreLogoType';
    const NAME = 'StoreLogoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $URL = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURL()
    {
        return $this->_dc($this->URL, 'URL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setURL($value)
    {
        $this->URL = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['URL' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

StoreLogoType::_register();
