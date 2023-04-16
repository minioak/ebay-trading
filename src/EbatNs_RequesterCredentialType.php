<?php

namespace InTradeSys\eBay\trading;


class EbatNs_RequesterCredentialType extends EbatNs_ComplexType
{
    const NAME = 'EbatNs_RequesterCredentialType';

    /**
     * @var string
     */
    protected $eBayAuthToken;

    /**
     * @var EbatNs_RequesterCredentialType
     */
    protected $Credentials;


    public function __construct()
    {
        $this->assignTagAttribute('soap:actor', '');
        $this->assignTagAttribute('soap:mustUnderstand', '0');
        $this->assignTagAttribute('xmlns', 'urn:ebay:apis:eBLBaseComponents');
    }

    /**
     * @return EbatNs_RequesterCredentialType
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }

    /**
     * @param EbatNs_RequesterCredentialType $Credentials
     */
    public function setCredentials($credentials)
    {
        $this->Credentials = $credentials;
    }

    /**
     * @return string $eBayAuthToken
     */
    public function getEBayAuthToken()
    {
        return $this->eBayAuthToken;
    }

    /**
     * @param string $eBayAuthToken
     */
    public function setEBayAuthToken($eBayAuthToken)
    {
        $this->eBayAuthToken = $eBayAuthToken;
    }

    /**
     * Register child elements and attributes
     **/
    public static function _register()
    {
        self::assignElement('eBayAuthToken', ['type' => 'string']);
        self::assignElement('Credentials', ['type' => 'CredentialType']);
    }
}

EbatNs_RequesterCredentialType::_register();
