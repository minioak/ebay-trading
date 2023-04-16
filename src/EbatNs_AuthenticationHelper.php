<?php

namespace InTradeSys\eBay\trading;


class EbatNs_AuthenticationHelper
{
    protected $_cs;

    public function __construct($cs)
    {
        $this->_cs = $cs;
    }

    public function GetEbaySignInUrl($RuName, $Params = null)
    {
        return $this->_cs->getSession()->getSignInUrl($RuName) .
            ($Params === null ? '' : '&ruparams=' . $Params);
    }

    public function getFetchSecretId()
    {
        srand((double)microtime() * 1000000);
        $r = rand ;
        $u = uniqid(getmypid() . $r . (double)microtime() * 1000000, 1);
        $uuid = md5($u);
        return $uuid;
    }

    public function GetEbaySignInUrlFetch($RuName, $SecretId)
    {
        return $this->_cs->getSession()->getSignInUrl($RuName) . '&sid=' . $SecretId;
    }
}
