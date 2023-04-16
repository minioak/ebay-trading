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
 * Retrieves a session ID that identifies a user and your application when you make a
 * FetchToken
 * request.
 **/
class GetSessionIDRequestType extends AbstractRequestType
{
    const TAG = 'GetSessionIDRequest';
    const NAME = 'GetSessionIDRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSessionID';

    /**
     * @var string|null
     */
    protected $RuName = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRuName()
    {
        return $this->_dc($this->RuName, 'RuName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRuName($value)
    {
        $this->RuName = self::_string($value);
    }

    /**
     * @return GetSessionIDResponseType|EbatNs_ResponseError
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
        self::assignElements(['RuName' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSessionIDRequestType::_register();
