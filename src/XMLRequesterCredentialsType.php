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


class XMLRequesterCredentialsType extends EbatNs_ComplexType
{
    const TAG = 'XMLRequesterCredentialsType';
    const NAME = 'XMLRequesterCredentialsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Username = null;

    /**
     * @var string|null
     */
    protected $Password = null;

    /**
     * @var string|null
     */
    protected $eBayAuthToken = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUsername()
    {
        return $this->_dc($this->Username, 'Username');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUsername($value)
    {
        $this->Username = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPassword()
    {
        return $this->_dc($this->Password, 'Password');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPassword($value)
    {
        $this->Password = self::_string($value);
    }

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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Username' => [],
            'Password' => [],
            'eBayAuthToken' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

XMLRequesterCredentialsType::_register();
