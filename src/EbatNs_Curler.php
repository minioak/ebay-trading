<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Curler
{
    const HEADER_SOA_SERVICE_NAME = 'X-EBAY-SOA-SERVICE-NAME';
    const HEADER_API_SERVICE_NAME = 'SERVICE-NAME';

    const HEADER_SOA_CALL_NAME = 'X-EBAY-SOA-OPERATION-NAME';
    const HEADER_API_CALL_NAME = 'X-EBAY-API-CALL-NAME';

    const HEADER_IAF_TOKEN = 'X-EBAY-API-IAF-TOKEN';

    private $timeout; // seconds (for curl and stream_set_timeout)
    private $logger = null;

    private $multiHandle = null;
    private $handles = [];
    private $customHandles = [];
    private $curlBlockedEndpoint = false;

    private $gzip = false;
    private $verbose = false;
    private $dumpOnRequest = false;
    private $multipartBoundary = 'MIME_boundary';
    private $multipartContent = '';
    private $headers = [];
    private $queryStringParameters = [];
    private $apiUrl = '';
    private $httpVersion = '1.0';
    private $requestType = null;
    private $requestTypeAttributes = [];
    private $requestTypeDataConverter = null;
    private $requestTypeMethodName = '';
    private $requestTypeEnvelope = '';
    private $requestTypeXmlNamespace = '';
    private $requestTypeSoapHeader = null;
    private $responseParser = null;
    private $soapAction = null;


    public function __construct($timeout = 300)
    {
        $this->timeout = $timeout;
    }

    public function withLogger($logger)
    {
        $this->logger = $logger;
        return $this;
    }

    public function withSoaServiceName($method)
    {
        $soa = self::HEADER_SOA_SERVICE_NAME;
        $api = self::HEADER_API_SERVICE_NAME;
        unset($this->headers[strtolower($api)]);
        return $this->withHeader($soa, $method);
    }

    public function withApiServiceName($method)
    {
        $soa = self::HEADER_SOA_SERVICE_NAME;
        $api = self::HEADER_API_SERVICE_NAME;
        unset($this->headers[strtolower($soa)]);
        return $this->withHeader($api, $method);
    }

    public function withSoaMethod($method)
    {
        $soa = self::HEADER_SOA_CALL_NAME;
        $api = self::HEADER_API_CALL_NAME;
        unset($this->headers[strtolower($api)]);
        return $this->withHeader($soa, $method);
    }

    public function withApiMethod($method)
    {
        $soa = self::HEADER_SOA_CALL_NAME;
        $api = self::HEADER_API_CALL_NAME;
        unset($this->headers[strtolower($soa)]);
        return $this->withHeader($api, $method);
    }

    public function withIafToken($token)
    {
        return $this->withHeader(self::HEADER_IAF_TOKEN, $token ?: null);
    }

    public function getHeader($name)
    {
        return isset($this->headers[strtolower($name)])
            ? $this->headers[strtolower($name)]
            : null;
    }

    public function withHeader($name, $value)
    {
        $this->headers = $this->mergeHeaders([$name => $value]);
        return $this;
    }

    public function withHeaders($headers)
    {
        $this->headers = $this->mergeHeaders($headers);
        return $this;
    }

    public function withApiUrl($apiUrl)
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    public function withCurlBlockedEndpoint($isCurBlocked = true)
    {
        $this->curlBlockedEndpoint = $isCurBlocked;
        return $this;
    }

    public function withHttpVersion($httpVersion)
    {
        if (!defined('CURL_HTTP_VERSION_' . str_replace('.', '_', $httpVersion))) {
            throw new \Exception('Invalid version: ' . $httpVersion);
        }

        $this->httpVersion = $httpVersion;
        return $this;
    }

    public function withCompression($gzip = true)
    {
        $this->gzip = !!$gzip;
        return $this;
    }

    public function withRequestType($request, $attributes = [])
    {
        $this->requestType = $request;
        $this->requestTypeAttributes = $attributes;
        return $this;
    }

    public function withMethodName($requestTypeMethodName)
    {
        $this->requestTypeMethodName = $requestTypeMethodName;
        return $this;
    }
    public function withDataConverter($requestTypeDataConverter)
    {
        $this->requestTypeDataConverter = $requestTypeDataConverter;
        return $this;
    }

    public function withXmlEnvelope($xmlns)
    {
        $this->requestTypeEnvelope = 'xml';
        $this->requestTypeXmlNamespace = $xmlns;
        return $this;
    }

    public function withSoapEnvelope($soapHeader = null)
    {
        $this->requestTypeEnvelope = 'soap';
        $this->requestTypeSoapHeader = $soapHeader;
        return $this;
    }

    public function withSoapAction($soapAction = 'dummy')
    {
        $this->soapAction = $soapAction;
        return $this;
    }

    public function getParser()
    {
        return $this->responseParser;
    }

    public function withParser($parser)
    {
        $this->responseParser = $parser;
        return $this;
    }

    public function withQueryString($queryString)
    {
        parse_str($queryString, $assoc);
        $this->queryStringParameters = array_merge($this->queryStringParameters, $assoc);
        return $this;
    }

    public function withVerboseOutput($verbose = true)
    {
        $this->verbose = !!$verbose;

        if (!$verbose) {
            ob_end_clean();
        }

        return $this;
    }

    public function dumpOnRequest()
    {
        $this->dumpOnRequest = true;
        return $this;
    }

    public function request($xml = '', $priorHeaders = [])
    {
        if (!$xml && $this->requestType) {
            $xml = $this->getXmlFromRequestType();
        }

        if (count($this->handles) === 1) {
            $this->multiHandle = curl_multi_init();
            curl_multi_add_handle($this->multiHandle, $this->handles[0]);
        }

        $headers = $priorHeaders; // copy intended
        $ch = $this->curlBlockedEndpoint ? null : curl_init();
        $queryString = http_build_query($this->queryStringParameters);
        $requestUrl = $this->apiUrl . ($queryString ? "?$queryString" : '');

        if ($this->httpVersion !== '1.0') {
            array_unshift($headers, 'Connection: close');
        }

        if ($ch !== null) {
            $httpVersion = constant('CURL_HTTP_VERSION_' . str_replace('.', '_', $this->httpVersion));
            curl_setopt($ch, CURLOPT_HTTP_VERSION, $httpVersion);
            curl_setopt($ch, CURLOPT_URL, $requestUrl);
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
            curl_setopt($ch, CURLOPT_VERBOSE, $this->verbose ? 1 : 0);
            curl_setopt($ch, CURLOPT_USERAGENT, 'ebatns;1.0');
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_FAILONERROR, 0);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 1);
        }

        if ($ch !== null && $this->gzip) {
            array_unshift($headers, 'Accept-Encoding: gzip, deflate');
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
            curl_setopt($ch, CURLOPT_ENCODING, 'deflate');
        }

        if ($this->soapAction !== null) {
            array_unshift($headers, "SOAPAction: \"$this->soapAction\"");
        }

        if (!$this->multipartContent) {
            array_unshift($headers, 'Content-Type: text/xml;charset=utf-8');
        } else {
            array_unshift($headers, "Content-Type: multipart/form-data; boundary=$this->multipartBoundary");
            $xml = implode("\r\n", [
                '--' . $this->multipartBoundary,
                'Content-Disposition: form-data; name="XML Payload"',
                'Content-Type: text/xml;charset=utf-8',
                '',
                $xml,
                $this->multipartContent
            ]);
        }

        array_unshift($headers, 'Content-Length: ' . mb_strlen($xml, '8bit'));
        $headers = array_values($this->mergeHeaders($headers));

        if ($this->verbose) {
            echo "\n----- withVerboseOutput HEADERS START\n";
            echo implode("\n", $headers);
            echo "\n----- withVerboseOutput HEADERS END\n";
        }

        if ($ch !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POSTFIELDS, is_string($xml) ? $xml : ''); // check str to prevent security issues
        }

        if ($this->multiHandle !== null) {
            curl_multi_add_handle($this->multiHandle, $ch);
        }

        if ($this->logger) {
            $this->logger->log($requestUrl, 'RequestUrl');
            $this->logger->logXml($xml, 'Request');
        }

        if ($this->dumpOnRequest) {
            echo "\n----- dumpOnRequest START string(" . strlen($xml) . ")\n";
            echo $xml;
            echo "\n----- dumpOnRequest END\n\n";
        }

        if ($ch) {
            $this->handles[] = $ch;
        } else {
            $this->customHandles[] = (object)[
                'xml' => $xml,
                'url' => $this->apiUrl,
                'headers' => array_merge([
                    'POST ' . parse_url($this->apiUrl, PHP_URL_PATH) .
                        ($queryString ? "?$queryString" : '') .
                        ' HTTP/' . $this->httpVersion,
                    'User-Agent: ebatns;shapi;1.0',
                    'Host: ' . parse_url($this->apiUrl, PHP_URL_HOST)
                ], array_values($headers))
            ];
        }

        return $this;
    }

    public function parse($responseParser = null)
    {
        $error = null;

        $mh = $this->multiHandle;
        $handles = $this->handles;
        $parser = $responseParser
            ? $responseParser
            : $this->responseParser;

        $this->multiHandle = null;
        $this->handles = [];

        if ($this->verbose) {
            echo "\n----- withVerboseOutput START\n";
            ob_start();
        }
        $results = $this->parseFromCurlBlockedApi($parser);

        if ($results && $results[0]->getContent() instanceof EbatNs_ResponseError) {
        } elseif (!$handles) {
        } elseif (!$mh) {
            $ch = $handles[0];
            $raw = curl_exec($ch);
            $errorNumber = curl_errno($ch);
            $errorMessage = $errorNumber ? curl_error($ch) : '';
            curl_close($ch);

            if ($raw !== false && $raw !== '') {
                $results[] = EbatNs_Decoder::decode($raw, $parser);
            } else {
                $message = $errorNumber ? "curl: $errorNumber $errorMessage" : 'Empty response';
                $error = new EbatNs_ResponseError($message);
            }
        } else {
            do {
                $status = curl_multi_exec($mh, $running);

                if ($running) {
                    curl_multi_select($mh);
                }

                if ($status !== CURLM_OK) {
                    $error = new EbatNs_ResponseError('curl(m): ' . curl_multi_strerror($status));
                    $handles = [];
                    break;
                }
            } while ($running);

            foreach ($handles as $ch) {
                $raw = curl_multi_getcontent($ch);
                $errorNumber = curl_errno($ch);

                if ($raw !== false && $raw !== '') {
                    $results[] = EbatNs_Decoder::decode($raw, $parser);
                } else {
                    $message = $errorNumber ? "curl(m): $errorNumber " . curl_error($ch) : 'curl(m): Empty response';
                    $error = new EbatNs_ResponseError($message);
                    break; // exit on first error
                }
            }

            curl_multi_close($mh);
        }

        if ($error) {
            $results[] = new EbatNs_DecodedResponse($error);
        }

        if ($this->verbose) {
            ob_end_flush();
            echo "----- withVerboseOutput END\n\n";
        }

        if ($this->logger) {
            foreach ($results as $result) {
                $this->logger->logXml($result . '', 'Response');
            }
        }

        return $results;
    }

    private function parseFromCurlBlockedApi($parser)
    {
        $results = [];
        $error = null;
        $timeout = $this->timeout;
        $chunkSizeKib = 512;
        $chunkSizeByte = $chunkSizeKib * 1024;

        foreach ($this->customHandles as $ch) {
            $raw = '';

            $isHTTPS = strpos($ch->url, 'https://') === 0;
            $host = ($isHTTPS ? 'tlsv1.2://' : '') . parse_url($ch->url, PHP_URL_HOST);
            $port = parse_url($ch->url, PHP_URL_PORT);
            $port = $port ? $port : ($isHTTPS ? 443 : 80);
            $headers = implode("\r\n", $ch->headers);

            if ($this->verbose) {
                echo "fsockopen('$host', $port, .. 10 seconds timeout)\n";
                echo "stream_set_timeout(FP, $timeout seconds timeout)\n";
                echo "\n-- Request headers\n";
                print_r($headers);
            }

            $fp = fsockopen($host, $port, $errNumber, $errString, 10 /* timeout */);

            if ($fp === false) {
                $results[] = new EbatNs_ResponseError("Problem with socket-connect ($host)");
                break;
            }

            if ($errNumber) {
                $results[] = new EbatNs_ResponseError("Problem with socket-connect ($host)");
                break;
            }

            stream_set_timeout($fp, $timeout);
            fwrite($fp, $headers);
            fwrite($fp, "\r\n\r\n");
            fwrite($fp, $ch->xml);
            fwrite($fp, "\r\n\r\n");

            $contentLength = 0;
            $transferEncoding = '';
            $headerText = '';

            while (!feof($fp) && ($line = (string)fgets($fp)) !== "\r\n") {
                $headerText .= $line;

                if (!$transferEncoding) {
                    preg_match('/^transfer-encoding:\s(.+)$/mi', $line, $transferEncoding);
                    $transferEncoding = isset($transferEncoding[1]) ? strtolower($transferEncoding[1]) : '';
                }

                if ($contentLength) {
                    preg_match('/^content-length:\s(.+)$/mi', $line, $contentLength);
                    $contentLength = isset($contentLength[1]) ? intval($contentLength[1]) : 0;
                }
            }

            if ($transferEncoding) {
                $error = new EbatNs_ResponseError("Transfer encoding not supported: $transferEncoding, Size: $contentLength");
                break;
            }

            while (!feof($fp) && (!$contentLength || mb_strlen($raw, '8bit') < $contentLength)) {
                $raw .= fgets($fp, $chunkSizeByte);
            }

            if ($this->verbose) {
                echo "\n\n-- Response headers\n$headerText";
                echo "\n-- Response body\n" . ($raw ? substr(ltrim($raw), 0, 200) . "\n..." : '-{EMPTY}-') . "\n";
            }

            fclose($fp);

            if ($raw === '') {
                $error = new EbatNs_ResponseError('Empty response from: ' . $ch->url . ' ' . $ch->headers[0]);
                break;
            }

            $results[] = EbatNs_Decoder::decode("$headerText\r\n$raw", $parser);
        }

        if ($error) {
            $results[] = new EbatNs_DecodedResponse($error);
        }

        return $results;
    }

    public function withMultipartOctetStream($data, $name, $filename, $type = null, $encoding = null)
    {
        if ($data) {
            $boundary = $this->multipartBoundary;
            $this->multipartContent .= implode("\r\n", [
                "--$boundary",
                "Content-Disposition: form-data; name=\"$name\"; filename=\"$filename\"",
                'Content-Transfer-Encoding: ' . ($encoding ? $encoding : 'binary'), // base64 is also possible
                'Content-Type: ' . ($type ? $type : 'application/octet-stream'),
                '', // blank line
                $data,
                "--$boundary--",
                '' // closing crlf
            ]);
        }

        return $this;
    }

    public function withMultipartXml($xml)
    {
        if ($xml) {
            $boundary = $this->multipartBoundary;
            $this->multipartContent = implode("\r\n", [
                "--$boundary",
                'Content-Disposition: form-data; name="XML Payload"',
                'Content-Transfer-Encoding: binary',
                'Content-Type: text/xml;charset=utf-8',
                '', // blank line
                $xml,
                "--$boundary--",
                '' // closing crlf
            ]) . $this->multipartContent;
        }

        return $this;
    }

    private function mergeHeaders($headers = [])
    {
        $order = [
            ['user-agent' => null, 'host' => null, 'content-type' => null],
            [],
            ['content-length' => null, 'connection' => null]
        ];

        foreach ([$this->headers, $headers] as $arr) {
            foreach ($arr as $key => $val) {
                $parts = $val === null ? [] : explode(': ', $val, 2);
                $nokey = count($parts) === 2;
                $name = strtolower($nokey ? $parts[0] : $key);
                $value = $val === null ? null : implode(': ', $nokey ? $parts : [$key, $val]);

                foreach ($order as &$map) {
                    if (array_key_exists($name, $map)) {
                        $map[$name] = $value;
                        break;
                    }
                }

                $order[1][$name] = $value;
            }
        }

        return array_filter(array_merge($order[0], $order[1], $order[2]));
    }

    protected function getXmlFromRequestType()
    {
        $request = $this->requestType;
        $method = $this->requestTypeMethodName;
        $attributes = $this->requestTypeAttributes;
        $dataConverter = $this->requestTypeDataConverter;

        $xmlNamespace = $this->requestTypeXmlNamespace;
        $soapHeader = $this->requestTypeSoapHeader;
        $envelope = $this->requestTypeEnvelope;
        $soapEnveloped = $envelope === 'soap';
        $xmlEnveloped = $envelope === 'xml';

        $method = $method
            ? "${method}Request"
            : ($request::TAG ? $request::TAG : $request::NAME);

        $attributes = $xmlEnveloped
            ? array_merge($attributes, ['xmlns' => $xmlNamespace])
            : $attributes;

        $requestXml = $request->toXml($method, $dataConverter, $attributes);

        if ($xmlEnveloped) {
            return '<?xml version="1.0" encoding="utf-8"?>' . "\n" . $requestXml;
        }

        if ($soapEnveloped) {
            $soap = '<?xml version="1.0" encoding="utf-8"?>';
            $soap .= '<soap:Envelope';
            $soap .= ' xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
            $soap .= ' xmlns:xsd="http://www.w3.org/2001/XMLSchema"';
            $soap .= ' xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"';
            $soap .= ' encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"';
            $soap .= ' xmlns="urn:ebay:apis:eBLBaseComponents"';
            $soap .= ' >';

            if ($soapHeader) {
                $soap .= $soapHeader->toXml('soap:Header', $dataConverter);
            }

            $soap .= '<soap:Body>';
            $soap .= $requestXml;
            $soap .= '</soap:Body>';
            $soap .= '</soap:Envelope>';

            return $soap;
        }

        return $requestXml;
    }
}
