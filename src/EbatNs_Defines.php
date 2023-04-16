<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Defines
{
    const APPMODE_PRODUCTION = 0;
    const APPMODE_SANDBOX = 1;
    const APPMODE_QA = 2;

    const PARSER_MODE_CALL = 1;
    const PARSER_MODE_NOTIFICATION = 2;
    const PARSER_MODE_CALLEXTENSION = 3;

    const CURLAUTH_NONE = 0;
    const CURLPROXY_HTTP = 0;
    const CURLPROXY_SOCKS4 = 4;
    const CURLPROXY_SOCKS5 = 5;
    const CURLOPT_BUFFERSIZE = 98;
    const CURLOPT_PROXYTYPE = 101;

    const EBAY_AUTHTYPE_AUTHNAUTH = 'authnauth';
    const EBAY_AUTHTYPE_OAUTH = 'oauth';
    const EBAY_OAUTH_TOKENMODE_ENABLED = 1;
    const EBAY_OAUTH_TOKENMODE_DISABLED = 0;

    public static function getGlobalIds()
    {
        return array_keys(self::$EBAY_GLOBAL_IDS);
    }

    public static function getGlobalIdEntry($identifier)
    {
        $findSiteId = is_numeric($identifier) ? intval($identifier) : null;
        $findDomain = strpos(strval($identifier), '.') !== false ? strtolower($identifier) : null;
        $findGlobalId = $findSiteId === null && $findDomain === null ? strtoupper(strval($identifier)) : null;

        foreach (self::$EBAY_GLOBAL_IDS as $globalId => $entry) {
            if ($findGlobalId !== null && $findGlobalId !== $globalId) {
                continue;
            }

            if ($findDomain !== null && $findDomain !== $entry['DOMAIN']) {
                continue;
            }

            if ($findSiteId !== null && $findSiteId !== $entry['SITE_ID']) {
                continue;
            }

            return (object)($entry + ['GLOBAL_ID' => $globalId]);
        }

        return null;
    }
    private static $EBAY_GLOBAL_IDS = [
        'EBAY-US' => ['SITE_ID' =>  0, 'NAME' => 'United States', 'DOMAIN' => 'ebay.com'],
        'EBAY-ENCA' => ['SITE_ID' =>  2, 'NAME' => 'Canada (English)', 'DOMAIN' => 'ebay.ca'],
        'EBAY-GB' => ['SITE_ID' =>  3, 'NAME' => 'UK', 'DOMAIN' => 'ebay.co.uk'],
        'EBAY-AU' => ['SITE_ID' =>  15, 'NAME' => 'Australia', 'DOMAIN' => 'ebay.com.au'],
        'EBAY-AT' => ['SITE_ID' =>  16, 'NAME' => 'Austria', 'DOMAIN' => 'ebay.at'],
        'EBAY-FRBE' => ['SITE_ID' =>  23, 'NAME' => 'Belgium (French)', 'DOMAIN' => 'ebay.be'],
        'EBAY-FR' => ['SITE_ID' =>  71, 'NAME' => 'France', 'DOMAIN' => 'ebay.fr'],
        'EBAY-DE' => ['SITE_ID' =>  77, 'NAME' => 'Germany', 'DOMAIN' => 'ebay.de'],
        'EBAY-MOTOR' => ['SITE_ID' =>  100, 'NAME' => 'Motors', 'DOMAIN' => 'ebaymotors.com'],
        'EBAY-IT' => ['SITE_ID' =>  101, 'NAME' => 'Italy', 'DOMAIN' => 'ebay.it'],
        'EBAY-NLBE' => ['SITE_ID' =>  123, 'NAME' => 'Belgium (Dutch)', 'DOMAIN' => 'ebay.be'],
        'EBAY-NL' => ['SITE_ID' =>  146, 'NAME' => 'Netherlands', 'DOMAIN' => 'ebay.nl'],
        'EBAY-ES' => ['SITE_ID' =>  186, 'NAME' => 'Spain', 'DOMAIN' => 'ebay.es'],
        'EBAY-CH' => ['SITE_ID' =>  193, 'NAME' => 'Switzerland', 'DOMAIN' => 'ebay.ch'],
        'EBAY-HK' => ['SITE_ID' =>  201, 'NAME' => 'Hong Kong', 'DOMAIN' => 'ebay.com.hk'],
        'EBAY-IN' => ['SITE_ID' =>  203, 'NAME' => 'India', 'DOMAIN' => 'ebay.in'],
        'EBAY-IE' => ['SITE_ID' =>  205, 'NAME' => 'Ireland', 'DOMAIN' => 'ebay.ie'],
        'EBAY-MY' => ['SITE_ID' =>  207, 'NAME' => 'Malaysia', 'DOMAIN' => 'ebay.com.my'],
        'EBAY-FRCA' => ['SITE_ID' =>  210, 'NAME' => 'Canada (French)', 'DOMAIN' => 'cafr.ebay.ca'],
        'EBAY-PH' => ['SITE_ID' =>  211, 'NAME' => 'Philippines', 'DOMAIN' => 'ebay.ph'],
        'EBAY-PL' => ['SITE_ID' =>  212, 'NAME' => 'Poland', 'DOMAIN' => 'ebay.pl'],
        'EBAY-SG' => ['SITE_ID' =>  216, 'NAME' => 'Singapore', 'DOMAIN' => 'ebay.com.sg']
    ];
}
