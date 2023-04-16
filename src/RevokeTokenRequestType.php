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
 * Revokes a token before it would otherwise expire.
 **/
class RevokeTokenRequestType extends AbstractRequestType
{
    const TAG = 'RevokeTokenRequest';
    const NAME = 'RevokeTokenRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'RevokeToken';

    /**
     * @var bool|null "true" or "false"
     */
    protected $UnsubscribeNotification = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnsubscribeNotification()
    {
        return $this->_dc($this->UnsubscribeNotification === 'true', 'UnsubscribeNotification');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUnsubscribeNotification($value)
    {
        $this->UnsubscribeNotification = self::_bool($value);
    }

    /**
     * @return RevokeTokenResponseType|EbatNs_ResponseError
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
        self::assignElements(['UnsubscribeNotification' => ['type' => 'bool']], parent::NAME);
        self::assignAttributes([]);
    }

}

RevokeTokenRequestType::_register();
