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
 * Retrieves an authentication token for a user.
 **/
class FetchTokenRequestType extends AbstractRequestType
{
    const TAG = 'FetchTokenRequest';
    const NAME = 'FetchTokenRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'FetchToken';

    /**
     * @var string|null
     */
    protected $SecretID = null;

    /**
     * @var string|null
     */
    protected $SessionID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecretID()
    {
        return $this->_dc($this->SecretID, 'SecretID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSecretID($value)
    {
        $this->SecretID = self::_string($value);
    }

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
     * @return FetchTokenResponseType|EbatNs_ResponseError
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
        self::assignElements([
            'SecretID' => [],
            'SessionID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FetchTokenRequestType::_register();
