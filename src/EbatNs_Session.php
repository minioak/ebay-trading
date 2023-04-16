<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Session extends EbatNs_AbstractAuthSession
{
    /**
    * @param string|null $configFile
    */
    public function __construct($configFile = null)
    {
        parent::__construct($configFile, [
            'https://api.ebay.com/wsapi',
            'https://api.sandbox.ebay.com/wsapi'
        ]);
    }

    public function getCredentialType()
    {
        $passwordType = new UserIdPasswordType();
        $credentialType = new EbatNs_RequesterCredentialType();
        $credentialType->setCredentials($passwordType);

        $passwordType->setAppId($this->getAppId());
        $passwordType->setDevId($this->getDevId());
        $passwordType->setAuthCert($this->getCertId());

        if ($this->getTokenMode() === self::OAUTH_TOKENMODE_DISABLED) {
            $passwordType->setUsername($this->getRequestUser());
            $passwordType->setPassword($this->getRequestPassword());
        } elseif ($this->getAuthType() === self::AUTHTYPE_AUTHNAUTH) {
            $credentialType->setEBayAuthToken($this->getRequestToken());
        }

        return $credentialType;
    }

    public function getSoapHeader()
    {
        $header = new EbatNs_RequestHeaderType();

        if ($this->getTokenMode() === self::OAUTH_TOKENMODE_DISABLED) {
            $header->setRequesterCredentials($this->getCredentialType());
        }

        return $header;
    }

    public function curl()
    {
        $curler = parent::curl();

        if ($this->getTokenMode() === self::OAUTH_TOKENMODE_DISABLED) {
            $curler->withIafToken(null);
        }

        return $curler;
    }
}
