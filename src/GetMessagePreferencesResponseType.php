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
 * Contains the ASQ subjects for the user specified in the request.
 **/
class GetMessagePreferencesResponseType extends EbatNs_Response
{
    const TAG = 'GetMessagePreferencesResponseType';
    const NAME = 'GetMessagePreferencesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ASQPreferencesType|null
     */
    protected $ASQPreferences = null;


    /**
     * @return ASQPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getASQPreferences()
    {
        return $this->_dc($this->ASQPreferences, 'ASQPreferences');
    }

    /**
     * @param ASQPreferencesType|null $value
     * @return void
     */
    public function setASQPreferences($value)
    {
        $this->ASQPreferences = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ASQPreferences' => ['type' => 'ASQPreferencesType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetMessagePreferencesResponseType::_register();
