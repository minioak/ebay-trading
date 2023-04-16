<?php

namespace InTradeSys\eBay\trading;


class EbatNs_RequestHeaderType extends AbstractRequestType
{
    const NAME = 'EbatNs_RequestHeaderType';

    /**
     * @var EbatNs_RequesterCredentialType
     */
    protected $RequesterCredentials;


    /**
     * @return EbatNs_RequesterCredentialType
     */
    public function getRequesterCredentials()
    {
        return $this->RequesterCredentials;
    }

    /**
     * @param EbatNs_RequesterCredentialType $RequesterCredentials
     */
    public function setRequesterCredentials($requesterCredentials)
    {
        $this->RequesterCredentials = $requesterCredentials;
    }

    /**
     * Register child elements and attributes
     **/
    public static function _register()
    {
        self::assignAttributes([]);
        self::assignElement('RequesterCredentials', [
            'type' => 'EbatNs_RequesterCredentialType',
            'required' => true
        ]);
    }
}

EbatNs_RequestHeaderType::_register();
