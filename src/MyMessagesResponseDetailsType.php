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
 * Details relating to the response to a message.
 **/
class MyMessagesResponseDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesResponseDetailsType';
    const NAME = 'MyMessagesResponseDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $ResponseEnabled = null;

    /**
     * @var string|null
     */
    protected $ResponseURL = null;

    /**
     * @var string|null
     */
    protected $UserResponseDate = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResponseEnabled()
    {
        return $this->_dc($this->ResponseEnabled === 'true', 'ResponseEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setResponseEnabled($value)
    {
        $this->ResponseEnabled = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResponseURL()
    {
        return $this->_dc($this->ResponseURL, 'ResponseURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setResponseURL($value)
    {
        $this->ResponseURL = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserResponseDate()
    {
        return $this->_dc($this->UserResponseDate, 'UserResponseDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserResponseDate($value)
    {
        $this->UserResponseDate = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ResponseEnabled' => ['type' => 'bool'],
            'ResponseURL' => [],
            'UserResponseDate' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyMessagesResponseDetailsType::_register();
