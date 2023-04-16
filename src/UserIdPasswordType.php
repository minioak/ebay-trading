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


class UserIdPasswordType extends EbatNs_ComplexType
{
    const TAG = 'UserIdPasswordType';
    const NAME = 'UserIdPasswordType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $AppId = null;

    /**
     * @var string|null
     */
    protected $DevId = null;

    /**
     * @var string|null
     */
    protected $AuthCert = null;

    /**
     * @var string|null
     */
    protected $Username = null;

    /**
     * @var string|null
     */
    protected $Password = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAppId()
    {
        return $this->_dc($this->AppId, 'AppId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAppId($value)
    {
        $this->AppId = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDevId()
    {
        return $this->_dc($this->DevId, 'DevId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDevId($value)
    {
        $this->DevId = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAuthCert()
    {
        return $this->_dc($this->AuthCert, 'AuthCert');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAuthCert($value)
    {
        $this->AuthCert = self::_string($value);
    }

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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AppId' => [],
            'DevId' => [],
            'AuthCert' => [],
            'Username' => [],
            'Password' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UserIdPasswordType::_register();
