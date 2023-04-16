<?php

namespace InTradeSys\eBay\trading;


abstract class EbatNs_AbstractBasicSession
{
    private $appModeUrls;
    private $cryptoProvider = null;
    private $useHttpCompression = false;
    private $requestTimeout = 300;
    private $globalId = 'EBAY-US';
    private $siteId = 0;
    private $siteDomain = 'ebay.com';
    private $appId = null;
    private $appMode = 0;
    private $requestToken = null;
    private $pageSize = 200;
    private $tokenPickupFile = null;
    private $tokenUsePickupFile = false;
    private $proxyServer = null;
    private $proxyServerType = null;
    private $useStandardLogger = false;
    private $logDestination = null;
    private $logMode = 0;
    protected $keys = [
        'prod' => ['appId' => null],
        'test' => ['appId' => null], // e.g. sandbox
    ];


    /**
     * @param string|array|null $configFile
     * @param array $appModeUrls
     * @return void
     */
    public function __construct($configFile, $appModeUrls)
    {
        $this->appModeUrls = [
            $appModeUrls[0],
            $appModeUrls[isset($appModeUrls[1]) ? 1 : 0],
            $appModeUrls[isset($appModeUrls[2]) ? 2 : 0]
        ];

        if ($configFile) {
            $this->initFromConfig($configFile);
        }
    }

    public function curl()
    {
        $timeout = $this->getRequestTimeout();
        $apiUrl = $this->getApiUrl();
        $gzip = $this->getUseHttpCompression();
        $requestToken = $this->getRequestToken();

        return (new EbatNs_Curler($timeout))
            ->withApiUrl($apiUrl)
            ->withCompression($gzip)
            ->withIafToken($requestToken);
    }

    public function getXmlCredentialHeaders()
    {
        $appId = $this->getAppId();
        $siteId = $this->getSiteId();
        $headers = [
            'X-EBAY-API-REQUEST-ENCODING: XML',
            'X-EBAY-API-VERSION: 1299',
            'X-EBAY-API-COMPATIBILITY-LEVEL: 1299'
        ];


        if ($siteId !== null) {
            $headers[] = 'X-EBAY-API-SITE-ID: ' . $siteId;
        }

        if ($appId) {
            $headers[] = 'X-EBAY-API-APP-ID: ' . $appId;
            $headers[] = 'X-EBAY-API-APP-NAME: ' . $appId;
        }

        return $headers;
    }

    public function getSoapCredentialHeaders()
    {
        $globalId = $this->getGlobalId();
        $appId = $this->getAppId();
        $headers = [
            'X-EBAY-SOA-REQUEST-DATA-FORMAT: XML',
            'X-EBAY-SOA-SERVICE-VERSION: 1299'
        ];

        if ($globalId) {
            $headers[] = 'X-EBAY-SOA-GLOBAL-ID: ' . $globalId;
        }

        if ($appId) {
            $headers[] = 'X-EBAY-SOA-SECURITY-APPNAME: ' . $appId;
        }

        return $headers;
    }

    /**
     * Which API server to call (prod, test, qa).
     *
     * @return EbatNs_Defines::APPMODE_* Value of the AppMode property
     */
    public function getAppMode()
    {
        return $this->appMode;
    }

    /**
     * Defines which API server to call.
     *
     * @param EbatNs_Defines::APPMODE_* $value
     */
    public function setAppMode($value)
    {
        $this->appMode = intval($value);
    }

    /**
     * Read accessor of AppId.
     * The value of this property is used as the application ID in each XML request sent to the eBay API.
     *
     * @return string Value of the AppId property
     */
    public function getAppId()
    {
        return $this->appId
            ? $this->appId
            : $this->keys[$this->getAppMode() ? 'test' : 'prod']['appId'];
    }

    /**
    * Write accessor of AppId.
    * The value of this property is used as the application ID in each XML request sent to the eBay API.
    *
    * @param string $value The new value for the AppId property
    */
    public function setAppId($value)
    {
        $this->appId = $value;
    }

    /**
     * Read accessor of SiteId.
     * Defines the eBay Site from or to data will be sent.
     *
     * @return int Value of the SiteId property
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Write accessor of SiteId.
     *
     * @param int $value The new value for the SiteId property
     */
    public function setSiteId($value)
    {
        $this->setGlobalId($value);
    }

    /**
     * Defines the eBay website domain
     *
     * @return string
     */
    public function getSiteDomain()
    {
        return $this->siteDomain;
    }

    /**
     * Defines the eBay website domain
     *
     * @param int $domain
     */
    public function setSiteDomain($domain)
    {
        $this->setGlobalId($domain);
    }

    public function getSignInUrl($ruName)
    {
        $isProduction = $this->getAppMode() === 0;
        $domain = $this->getSiteDomain();
        $url = $isProduction
            ? 'https://signin.' . $domain . '/ws/eBayISAPI.dll'
            : 'https://signin.sandbox.' . $domain . '/ws/eBayISAPI.dll';

        return $url . '?SignIn&runame=' . $ruName;
    }

    /**
     * Read accessor of SiteId.
     * Defines the eBay Site from or to data will be sent.
     * @return string Value of the SiteId property
     */
    public function getGlobalId()
    {
        return $this->globalId;
    }

    /**
     * Write accessor of GlobalId.
     * Defines the eBay Global Id from or to data will be sent.
     *
     * @param string|int $value The new value for the GlobalId property
     * @return void
     */
    public function setGlobalId($value)
    {
        $entry = EbatNs_Defines::getGlobalIdEntry($value);

        if (!$entry) {
            throw new \Exception('Invalid Site/GlobalId: ' . $value);
        }

        $this->globalId = $entry->GLOBAL_ID;
        $this->siteId = $entry->SITE_ID;
        $this->siteDomain = $entry->DOMAIN;
    }
    /**
     * Read accessor of PageSize.
     *
     * @return int Value of the PageSize property
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }
    /**
     * Write accessor of PageSize.
     *
     * @param int $value The new value for the PageSize property
     */
    public function setPageSize($value)
    {
        $this->pageSize = $value <= 0 ? 200 : intval($value);
    }

    /**
     * Read accessor of ApiUrl.
     * returns the API Url
     *
     * @return string Value of the ApiUrl property
     */
    public function getApiUrl()
    {
        return $this->appModeUrls[$this->getAppMode()];
    }

    /**
     * Read accessor of ProxyServer.
     * ProxyServer to pass down to cURL (CURLOPT_PROXY)
     * pass as a string in format "host:port"
     *
     * @return string Value of the ProxyServer property
     */
    public function getProxyServer()
    {
        return $this->proxyServer;
    }
    /**
     * Write accessor of ProxyServer.
     * ProxyServer to pass down to cURL (CURLOPT_PROXY)
     * pass as a string in format "host:port"
     *
     * @param string $value The new value for the ProxyServer property
     * @return void
     */
    public function setProxyServer($value)
    {
        $this->proxyServer = $value;
    }
    /**
     * Read accessor of ProxyServerType.
     * ProxyServer Type to pass down to cURL
     * CURLOPT_PROXYTYPE (101)
     * CURLPROXY_HTTP = 0,
     * CURLPROXY_SOCKS4 = 4,
     * CURLPROXY_SOCKS5 = 5
     * set to null if you are using direct access (default). The cURL operation will acutally check against this value and then use the more abritrate values ProxyXXX
     *
     * @return int Value of the ProxyServerType property
     */
    public function getProxyServerType()
    {
        return $this->proxyServerType;
    }
    /**
     * Write accessor of ProxyServerType.
     * ProxyServer Type to pass down to cURL
     * CURLOPT_PROXYTYPE (101)
     * CURLPROXY_HTTP = 0,
     * CURLPROXY_SOCKS4 = 4,
     * CURLPROXY_SOCKS5 = 5
     * set to null if you are using direct access (default). The cURL operation will acutally check against this value and then use the more abritrate values ProxyXXX
     *
     * @param int $value The new value for the ProxyServerType property
     * @return void
     */
    public function setProxyServerType($value)
    {
        $this->proxyServerType = $value;
    }

    /**
     * Read accessor of TokenPickupFile.
     * will be used to pickup / store the token information for this session
     *
     * @return string Value of the TokenPickupFile property
     */
    public function getTokenPickupFile()
    {
        return $this->tokenPickupFile;
    }
    /**
     * Write accessor of TokenPickupFile.
     * will be used to pickup / store the token information for this session
     *
     * @param string $value The new value for the TokenPickupFile property
     */
    public function setTokenPickupFile($value)
    {
        $this->tokenPickupFile = $value;
    }
    /**
     * Read accessor of TokenUsePickupFile.
     *
     * @return bool Value of the TokenUsePickupFile property
     */
    public function getTokenUsePickupFile()
    {
        return $this->tokenUsePickupFile;
    }
    /**
     * Write accessor of TokenUsePickupFile.
     *
     * @param bool $value The new value for the TokenUsePickupFile property
     */
    public function setTokenUsePickupFile($value)
    {
        $this->tokenUsePickupFile = $value;
    }
    /**
     * @param  string $data
     */
    public function encyrptData($data)
    {
        $crypto = $this->cryptoProvider;
        return $crypto ? $crypto->Encrypt($data) : $data;
    }
    /**
     * @param string $data
     */
    public function decyrptData($data)
    {
        $crypto = $this->cryptoProvider;
        return $crypto ? $crypto->Decrypt($data) : $data;
    }
    /**
     * @param string $value
     */
    public function setCryptoProvider($provider)
    {
        $this->cryptoProvider = $provider;
    }

    /**
     * @return string
     */
    public function getRequestToken()
    {
        $token = $this->requestToken;
        $file = $this->getTokenUsePickupFile() ? $this->getTokenPickupFile() : null;

        if (!$token && $file) {
            $token = trim(file_get_contents($file));
            $this->requestToken = $token;
        }

        return $this->decyrptData($token);
    }

    /**
     * @param string $value
     */
    public function setRequestToken($value)
    {
        $this->requestToken = $this->encyrptData(trim($value));
    }

    /**
     * @param bool $value
     */
    public function setUseStandardLogger($value)
    {
        $this->useStandardLogger = $value;
    }

    /**
     * @return bool $value
     */
    public function getUseStandardLogger()
    {
        return $this->useStandardLogger;
    }

    /**
     * gzip request encoding
     * @param bool $value
     */
    public function setUseHttpCompression($value)
    {
        $this->useHttpCompression = !!$value;
    }

    /**
     * gzip request encoding
     * @return bool
     */
    public function getUseHttpCompression()
    {
        return $this->useHttpCompression;
    }

    /**
     * @param int $timeout millis
     */
    public function setRequestTimeout($timeout)
    {
        $this->requestTimeout = $timeout > 0 ? $timeout : 300;
    }

    /**
     * @return int $timeout millis
     */
    public function getRequestTimeout()
    {
        return $this->requestTimeout;
    }

    /**
     * @deprecated
     * @param string $configFile Path to a config-file (ini-style) to read main config parameters from.
     * @return bool
     */
    public function initFromConfig($configFile)
    {
        $cfg = is_array($configFile) ? $configFile : parse_ini_file($configFile);

        if (!$cfg) {
            $this->logMessage('config file not found', 0, E_ERROR);
        }

        if (isset($cfg['app-key-test'])) {
            $this->keys['test']['appId'] = $cfg['app-key-test'];
        }

        if (isset($cfg['app-key-prod'])) {
            $this->keys['prod']['appId'] = $cfg['app-key-prod'];
        }

        if (isset($cfg['global-id'])) {
            $this->setGlobalId($cfg['global-id']);
        }

        if (isset($cfg['app-mode'])) {
            $this->appMode = intval($cfg['app-mode']);
        }

        if (isset($cfg['max-transactions-per-page'])) {
            $this->setPageSize($cfg['max-transactions-per-page']);
        }

        if (isset($cfg['use-http-compression'])) {
            $this->setUseHttpCompression($cfg['use-http-compression']);
        }

        if (isset($cfg['log-file'])) {
            $this->setLogDestination($cfg['log-file']);
        }

        if (isset($cfg['log-mode'])) {
            $this->setLogMode($cfg['log-mode']);
        }

        if (isset($cfg['token-pickup-file'])) {
            $this->setTokenPickupFile($cfg['token-pickup-file']);
            $this->setTokenUsePickupFile(true);
        }
    }

    /**
     * @return void
     */
    public function getLogger()
    {
        return $this->useStandardLogger
            ? new EbatNs_Logger(true, 'stdout', true, true)
            : null;
    }

    /**
     * Writes a log-message
     *
     * @param string $msg
     * @param int|string $code
     * @param int|string $severity
     */
    public function logMessage($message, $code, $severity)
    {
        $line = date('Y-m-d H:i:s (T)') . ",#$code,$severity,$message\r\n";
        $mode = $this->getLogMode();

        if ($mode > 0) {
            error_log($line, $mode, $this->logDestination);
        } else {
            error_log($line, 0);
        }
    }

    /**
    * @param string its meaning depends on the message_type parameter (setLogMode)
    */
    public function setLogDestination($destination)
    {
        $this->logDestination = $destination;
    }

    /**
     * Says where the error should go. The possible message types are as follows:
     * 0	message is sent to PHP's system logger, using the Operating System's system logging mechanism or a file, depending on what the error_log configuration directive is set to. This is the default option.
     * 1	message is sent by email to the address in the destination parameter. This is the only message type where the fourth parameter, extra_headers is used.
     * 2	No longer an option.
     * 3	message is appended to the file destination. A newline is not automatically added to the end of the message string.
     * 4	message is sent directly to the SAPI logging handler.
     *
     * @param int $value The new value for the LogMode property
     * @return void
     */
    public function setLogMode($value)
    {
        $this->logMode = $value;
    }
}
