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
 * Includes the authentication token for the user and the date it expires.
 **/
class FetchTokenResponseType extends EbatNs_Response
{
    const TAG = 'FetchTokenResponseType';
    const NAME = 'FetchTokenResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $eBayAuthToken = null;

    /**
     * @var string|null
     */
    protected $HardExpirationTime = null;

    /**
     * @var string|null
     */
    protected $RESTToken = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayAuthToken()
    {
        return $this->_dc($this->eBayAuthToken, 'eBayAuthToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEBayAuthToken($value)
    {
        $this->eBayAuthToken = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHardExpirationTime()
    {
        return $this->_dc($this->HardExpirationTime, 'HardExpirationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHardExpirationTime($value)
    {
        $this->HardExpirationTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRESTToken()
    {
        return $this->_dc($this->RESTToken, 'RESTToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRESTToken($value)
    {
        $this->RESTToken = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'eBayAuthToken' => [],
            'HardExpirationTime' => [],
            'RESTToken' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FetchTokenResponseType::_register();
