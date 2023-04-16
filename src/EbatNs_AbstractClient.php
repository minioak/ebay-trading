<?php

namespace InTradeSys\eBay\trading;


abstract class EbatNs_AbstractClient
{
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const XMLNS_BASE_COMPONENTS = 'urn:ebay:apis:eBLBaseComponents';

    /**
    * @var EbatNs_Session
    */
    protected $session;

    /**
    * @var array $callbacks array of callables
    */
    protected $callbacks = [];

    /**
    * @var EbatNs_DataConverter
    */
    protected $dataConverter = null;


    public function __construct($session, $dataConverter = 'EbatNs_DataConverter')
    {
        if (is_string($dataConverter)) {
            $dataConverter = (strpos($dataConverter, '\\') === false ? 'InTradeSys\eBay\trading\\' : '') . $dataConverter;
            $dataConverter = new $dataConverter();
        }

        if ($session->getUseStandardLogger()) {
            $this->attachLogger(new EbatNs_Logger(true, 'stdout', true, true));
        }

        $this->session = $session;
        $this->dataConverter = $dataConverter;
    }

    public function getSession()
    {
        return $this->session;
    }

    public function getDataConverter()
    {
        return $this->dataConverter;
    }

    public function getWsdlVersion()
    {
        return '1299';
    }

    public function setHandler($typeName, $callable)
    {
        $this->callbacks[strtolower($typeName)] = $callable;
    }

    /**
     * @param object $requestType
     * @param string|null $apiMethod
     * @param string $xmlns
     * @return EbatNs_Curler
     */
    public function curlRequestType($requestType, $apiMethod = null, $xmlns = 'urn:ebay:apis:eBLBaseComponents')
    {
        $session = $this->getSession();
        $callbacks = $this->callbacks;
        $dataConverter = $this->getDataConverter();
        $responseTag = $apiMethod ? $apiMethod . 'Response' : null;
        $parser = (new EbatNs_ResponseParser($dataConverter, $callbacks, $xmlns))
            ->withDefaultTag($responseTag);

        return $session->curl()
            ->withDataConverter($dataConverter) // data converter acts as literal request encoder
            ->withLogger($this->logger)
            ->withRequestType($requestType)
            ->withApiMethod($apiMethod) // default here, but you can change it by "withSoaMethod"
            ->withXmlEnvelope(self::XMLNS)  // default here, but you can change it by "withSoapEnvelope"
            ->withParser($parser);

        return $request;
    }

    /**
     * @param string $method
     * @param object|array $request
     * @return EbatNs_Response
     */
    public abstract function call($method, $request);

    /**
     * @param string $method
     * @param object $request
     * @return EbatNs_Curler
     */
    protected abstract function prepareCall($method, $request);

    /**
     * @param string $method
     * @param object|array $request
     * @return EbatNs_DecodedResponse[]
     */
    public function callEach($method, $request)
    {
        /** @var EbatNs_Curler|null */
        $curler = null;

        foreach (is_array($request) ? array_values($request) : [$request] as $i => $requestType) {
            if ($i === 0) {
                $curler = $this->prepareCall($method, $requestType);
            } else {
                $curler->withRequestType($requestType)->request();
            }
        }

        return $curler->parse();
    }

    /*****************/
    /**** logging ****/
    /*****************/

    protected $callUsage = [];
    protected $logger = null;
    protected $timePoints = null;
    protected $timePointsSEQ = null;
    protected $logOptionTp = false; // LOG TIMEPOINTS
    protected $logOptionApiCalls = false; // LOG API_USAGE


    /**
    * @param array $options [LOG_TIMEPOINTS => bool, LOG_API_USAGE => bool]
    */
    public function setLoggingOptions($options)
    {
        $options = array_merge([
            'LOG_TIMEPOINTS' => $this->logTP,
            'LOG_API_USAGE' => $this->logOptionApiCalls
        ], $options);

        $this->logOptionTp = $options['LOG_TIMEPOINTS'];
        $this->logOptionApiCalls = $options['LOG_API_USAGE'];
    }

    public function log($msg, $subject = null)
    {
        if ($this->logger) {
            $this->logger->log($msg, $subject);
        }
    }

    public function logXml($xmlMsg, $subject = null)
    {
        if ($this->logger) {
            $this->logger->logXml($xmlMsg, $subject);
        }
    }

    public function attachLogger($logger)
    {
        $this->logger = $logger;
    }

    protected static function microseconds()
    {
        list($ms, $s) = explode(' ', microtime());
        return floor($ms * 1000) + 1000 * $s;
    }

    protected static function elapsed($start)
    {
        return self::microseconds() - $start;
    }

    protected function startTp($key)
    {
        if ($this->logOptionTp) {
            $this->timePoints[$key] = [
                'start_tp' => time(),
                'start' => self::microseconds()
            ];
        }
    }

    protected function stopTp($key)
    {
        if ($this->logOptionTp && isset($this->timePoints[$key]['start'])) {
            $tp = $this->timePoints[$key];
            $this->timePoints[$key] = [
                'start_tp' => $tp['start_tp'],
                'duration' => self::elapsed($tp['start']) . 'ms'
            ];
        }
    }

    protected function logTp()
    {
        if ($this->logOptionTp) {
            ob_start();
            echo "<pre><br>\n";
            print_r($this->timePoints);
            echo "</pre><br>\n";
            $this->log(ob_get_clean(), '_EBATNS_TIMEPOINTS');
        }
    }
    protected function reportApiCall($callName)
    {
        if ($this->logOptionApiCalls) {
            $this->callUsage[$callName] = 1 + (isset($this->callUsage[$callName]) ? $this->callUsage[$callName] : 0);
        }
    }

    public function getApiUsage()
    {
        return $this->callUsage;
    }
}
