<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Decoder
{
    public static function decode($raw, $parser = null)
    {
        $match = explode("\r\n\r\n", $raw, 2);

        if (count($match) !== 2) {
            return new EbatNs_DecodedResponse($raw);
        }

        list($header, $raw) = $match;
        $match = null;
        $assocHeaders = self::parseHeaders($header);
        $contentType = $assocHeaders['content-type'];
        $isMultipart = preg_match('/boundary="?([\w\d_]+)/i', $contentType, $boundary);
        $result = self::parseContent(new EbatNs_DecodedResponse($isMultipart ? null : $raw, $assocHeaders), $parser);

        if (!$isMultipart) {
            return $result;
        }

        $boundary = preg_quote($boundary[1]);
        $boundaryPattern = '/\r\n--+' . $boundary . '\r\n/';
        $eofPattern = '/\r\n--+' . $boundary . '--+/';
        $preambleAlreadyPassed = false;
        $eof = false;

        while ($eof !== true) {
            $match = preg_split($boundaryPattern, $raw, 2);

            if (count($match) !== 2) {
                $match = preg_split($eofPattern, $raw, 2);
                $eof = true;

                if (count($match) !== 2) {
                    break;
                }
            }

            list($body, $raw) = $match;
            $match = explode("\r\n\r\n", $body, 2);

            if (count($match) === 2) {
                list($header, $body) = $match;

                if (!$eof) {
                    list($body) = preg_split($eofPattern, $body, 2); // ignore the epilogue
                }

                $file = new EbatNs_DecodedResponse($body, self::parseHeaders($header));
                $result->addFile(self::parseContent($file, $parser));
            } elseif ($preambleAlreadyPassed) {
                break; // incorrect multipart format
            } else {
                $result->setPreamble($match[0]);
                $preambleAlreadyPassed = true;
            }
        }

        if (!$result->getContent() && !$result->getFiles()) {
            $result->setContent(new EbatNs_ResponseError('Was not able to decode the response!'));
        }

        return $result;
    }

    protected static function parseHeaders($text)
    {
        $assoc = ['content-type' => ''];
        $key = '';

        foreach (explode("\r\n", $text) as $line) {
            $parts = explode(': ', $line, 2);
            $count = count($parts);

            if ($count === 2) {
                $key = strtolower($parts[0]);
                $assoc[$key] = $parts[1];
            } elseif ($key !== '') {
                $assoc[$key] .= $parts[0];
            }
        }

        return $assoc;
    }

    private static function parseContent($file, $parser = null)
    {
        if ($parser && $file->hasXmlHeader()) {
            $parsedContent = $parser->parse($file->getContent());
            $file->setContent($parsedContent);
        }

        return $file;
    }
}
