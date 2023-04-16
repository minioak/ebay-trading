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
 * Returns the ID of a user who has gone through an application's consent flow
 * process for obtaining an authorization token.
 **/
class ConfirmIdentityRequestType extends AbstractRequestType
{
    const TAG = 'ConfirmIdentityRequest';
    const NAME = 'ConfirmIdentityRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ConfirmIdentity';

    /**
     * @var string|null
     */
    protected $SessionID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSessionID()
    {
        return $this->_dc($this->SessionID, 'SessionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSessionID($value)
    {
        $this->SessionID = self::_string($value);
    }

    /**
     * @return ConfirmIdentityResponseType|EbatNs_ResponseError
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
        self::assignElements(['SessionID' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

ConfirmIdentityRequestType::_register();
