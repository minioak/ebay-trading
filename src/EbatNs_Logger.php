<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Logger
{
    protected $debugXmlBeautify = true;
    protected $debugLogDestination = 'stdout';
    protected $debugSecureLogging = true;
    protected $debugHtml = true;

    public function __construct($beautfyXml = false, $destination = 'stdout', $asHtml = true, $SecureLogging = true)
    {
        $this->debugLogDestination = $destination;
        $this->debugXmlBeautify = $beautfyXml;
        $this->debugHtml = $asHtml;
        $this->debugSecureLogging = $SecureLogging;
    }

    public function log($msg, $subject = null)
    {
        if ($this->debugLogDestination) {
            if ($this->debugSecureLogging) {
                $msg = preg_replace("/X-EBAY-SOA-SECURITY-TOKEN: .*/", "X-EBAY-SOA-SECURITY-TOKEN: ...", $msg);
            }

            if ($this->debugLogDestination == 'stdout') {
                if ($this->debugHtml) {
                    print_r("<pre>");
                    if ($subject) {
                        print_r("$subject :<br>");
                    }
                    print_r(htmlentities($msg) . "\r\n");
                    print_r("</pre>");
                } else {
                    if ($subject) {
                        print_r($subject . ' : ' . "\r\n");
                    }
                    print_r($msg . "\r\n");
                }
            } else {
                ob_start();
                echo date('r') . "\t" . $subject . "\t";
                print_r($msg);
                echo "\r\n";
                error_log(ob_get_clean(), 3, $this->debugLogDestination);
            }
        }
    }

    public function logXml($xmlMsg, $subject = null)
    {
        if ($this->debugSecureLogging) {
            $xmlMsg = preg_replace("/<eBayAuthToken>.*<\/eBayAuthToken>/", "<eBayAuthToken>...</eBayAuthToken>", $xmlMsg);
            $xmlMsg = preg_replace("/<AuthCert>.*<\/AuthCert>/", "<AuthCert>...</AuthCert>", $xmlMsg);
            $xmlMsg = preg_replace("/<AppId>.*<\/AppId>/", "<AppId>...</AppId>", $xmlMsg);
            $xmlMsg = preg_replace("/<DevId>.*<\/DevId>/", "<DevId>...</DevId>", $xmlMsg);
        }

        if (is_object($xmlMsg)) {
            $this->log($xmlMsg);
        } elseif ($this->debugXmlBeautify) {
            $this->log(self::beautfyXml($xmlMsg), $subject);
        } else {
            $this->log($xmlMsg, $subject);
        }
    }

    public static function beautfyXml($xml)
    {
        $xml = explode("\r\n", $xml);
        $lineOn = false;
        $headerOn = false;

        foreach ($xml as &$line) {
            if (!$line || $line[0] === '<') {
                $headerOn = false;
                continue;
            }

            if ($line[0] === '-') {
                $lineOn = $line[strlen($line) - 1] === '-';
                $headerOn = !$lineOn;
                $line = '';
                continue;
            }

            if (!$lineOn) { // handle multipart data
                $line = $headerOn ? "<!-- $line -->" : '';  // show headers as xml comments and drop data
            }
        }

        $xml = implode("\r\n", $xml);
        if (extension_loaded('tidy')) {
            $xml = \tidy_repair_string($xml, [
              'input-xml'=> 1,
              'indent' => 1,
              'wrap' => 0
            ]);
        }

        $dom = new \DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml);

        return preg_replace('/^[<][?]xml[^>]+[>]\s*/', '', $dom->loadXML($xml)
            ? $dom->saveXML()
            : $xml);
    }
}
