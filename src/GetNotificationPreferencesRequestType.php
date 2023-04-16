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
 * Retrieves the requesting application's notification preferences. Details are only returned for events for which a
 * preference has been set. For example, if you enabled notification for the
 * EndOfAuction
 * event and later disabled it, the
 * GetNotificationPreferences
 * response would cite the
 * EndOfAuction
 * event preference as
 * Disabled
 * . Otherwise, no details would be returned regarding
 * EndOfAuction
 * .
 **/
class GetNotificationPreferencesRequestType extends AbstractRequestType
{
    const TAG = 'GetNotificationPreferencesRequest';
    const NAME = 'GetNotificationPreferencesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetNotificationPreferences';

    /**
     * @var NotificationRoleCodeType|null
     */
    protected $PreferenceLevel = null;


    /**
     * @return NotificationRoleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPreferenceLevel()
    {
        return $this->_dc($this->PreferenceLevel);
    }

    /**
     * @param NotificationRoleCodeType|null $value
     * @return void
     */
    public function setPreferenceLevel($value)
    {
        $this->PreferenceLevel = $this->_enum($value, NotificationRoleCodeType::class);
    }

    /**
     * @return GetNotificationPreferencesResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['PreferenceLevel' => ['type' => 'NotificationRoleCodeType', 'enum' => true, 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetNotificationPreferencesRequestType::_register();
