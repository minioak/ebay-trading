<?php

namespace InTradeSys\eBay\trading;


class EbatNs_DecodedResponse
{
    /**
    * @var null|string
    */
    protected $preamble = null;

    /**
    * @var null|string|object
    */
    protected $content = null;

    /**
    * @var array assoc
    */
    protected $headers = [];

    /**
    * @var EbatNs_DecodedResponse[] e.g. multipart contents
    */
    protected $files = [];


    public function __construct($content, $headers = [], $files = [])
    {
        $this->content = $content;
        $this->headers = $headers;
        $this->files = $files;
    }

    public function getPreamble()
    {
        return $this->preamble;
    }

    public function setPreamble($preamble)
    {
        $this->preamble = $preamble;
    }

    public function getObject()
    {
        $content = $this->getContent();
        return is_string($content) ? new EbatNs_ResponseError($content) : $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function isXml()
    {
        return $this->content && $this->hasXmlHeader();
    }

    public function hasXmlHeader()
    {
        $header = $this->getHeader('content-type');
        return stripos($header, 'text/xml') !== false ||
            stripos($header, 'application/xml') !== false;
    }

    public function getHeader($name)
    {
        $name = strtolower($name);
        return isset($this->headers[$name]) ? $this->headers[$name] : '';
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    public function getFiles()
    {
        return $this->files;
    }

    public function setFiles($files)
    {
        $this->files = $files;
    }

    public function addFile($file)
    {
        $this->files[] = $file;
    }

    public function __toString()
    {
        if ($this->content === null) {
            return $this->files
                ? $this->files[0] . ''
                : '';
        }

        return is_string($this->content)
            ? $this->content
            : $this->content->toXml();
    }
}
