<?php

namespace InTradeSys\eBay\trading;


class EbatNs_ResponseParser
{
    protected $typeNs;
    protected $dataConverter;
    protected $callbacks;

    protected $defaultTag;
    protected $defaultType;

    protected $response;
    protected $startTags;
    protected $startTag;
    protected $type;
    protected $inResponse;
    protected $map;
    protected $hasFault;
    protected $hasError;


    public function __construct($dataConverter, $callbacks = [], $typeNs = 'urn:ebay:apis:eBLBaseComponents')
    {
        $this->dataConverter = $dataConverter;
        $this->callbacks = $callbacks;
        $this->typeNs = $typeNs;
        $this->reset();
    }

    public function withDefaultTag($tag)
    {
        $this->defaultTag = $tag;
        return $this;
    }

    public function withDefaultType($type)
    {
        $this->defaultType = $type;
        return $this;
    }

    private function reset()
    {
        $this->response = null;
        $this->startTags = [];
        $this->startTag = null;
        $this->type = null;
        $this->inResponse = false;
        $this->map = [];
        $this->hasFault = false;
        $this->hasError = false;
        return $this;
    }

    public function parse($xml, $tag = null, $type = null, $errorParsingEnabled = true)
    {
        $tag = $tag ? $tag : ($this->defaultTag ? $this->defaultTag : null);
        $type = $type ? $type : ($this->defaultType ? $this->defaultType : $tag);
        $this->startTags = explode(';', strtolower(is_array($tag) ? implode(';', $tag) : $tag));
        $this->type = $type;

        $parser = xml_parser_create('UTF-8');
        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_set_object($parser, $this);
        xml_set_element_handler($parser, '_startElement', '_endElement');
        xml_set_character_data_handler($parser, '_cData');
        $xmlParserError = xml_parse($parser, $xml, true) ? null : sprintf(
            'XML error on line %d col %d byte %d %s',
            xml_get_current_line_number($parser),
            xml_get_current_column_number($parser),
            xml_get_current_byte_index($parser),
            xml_error_string(xml_get_error_code($parser))
        );
        xml_parser_free($parser);

        $hasFault = $this->hasFault;
        $response = $this->response;
        $this->reset(); // important to free memory and re-use the instance

        if ($xmlParserError) {
            return new EbatNs_ResponseError($xmlParserError, 90000 + 1);
        }

        if ($hasFault) {
            return self::parseFault($xml);
        }

        if ($response) {
            return $response;
        }

        if (!$errorParsingEnabled) {
            return new EbatNs_ResponseError($xml, 90000 + 11);
        }

        return EbatNs_ResponseError::parseError($xml, $this);
    }

    protected function _startElement($parser, $prefixedName, $attrs)
    {
        if ($this->hasFault || $this->response) {
            return;
        }

        $name = preg_replace('/^.+:/', '', $prefixedName);
        $tag = null;
        $cls = null;
        $info = null;

        if (strtolower($prefixedName) === 'soapenv:fault') { // fault found before in response
            $this->hasFault = true;
            return;
        } elseif ($this->inResponse) {
            $tag = $name;
            $parent = end($this->map);
            $parentCls = $parent->cls;
            $info = $parentCls ? $parentCls::readElement($tag) : null;
            $nsTypeName = self::resolveTypeClass($info === null ? $tag : $info['type']);
            $isEnum = $nsTypeName && is_subclass_of($nsTypeName,'InTradeSys\eBay\trading\EbatNs_EnumType');
            $isAcceptedNs = $nsTypeName && $nsTypeName::XMLNS === $this->typeNs;

            if ($isAcceptedNs && !$isEnum) {
                $cls = new $nsTypeName();
                $cls->assignDataConverter($this->dataConverter);

                foreach ($attrs as $key => $value) {
                    $cls->assignTagAttribute($key, $value);
                }
            }
        } elseif (in_array(strtolower($name), $this->startTags)) { // start found
            $className = is_object($this->type) ? $this->type : self::resolveTypeClass($this->type);
            $cls = new $className();
            $cls->assignDataConverter($this->dataConverter);
            $this->inResponse = true;
            $this->startTag = $prefixedName;
        } elseif ($this->startTag === null && $prefixedName === $name) { // without specified start type
            $className = self::resolveTypeClass($name);

            if (!$className) {
                return;
            }

            $cls = new $className();
            $this->inResponse = true;
        } else {
            return;
        }

        $this->map[] = (object)[
            'cls' => $cls,
            'tag' => $tag,
            'type' => $info ? $info['type'] : null,
            'array' => $info && preg_replace('/^.+\.\./', '', $info['cardinality']) !== '1',
            'leaf' => $cls && !$cls::listElements(),
            'data' => ''
        ];
    }

    protected function _endElement($parser, $prefixedName)
    {
        if (!$this->inResponse || $this->response) {
            return;
        }

        if ($prefixedName === $this->startTag) {
            $this->response = $this->map[0]->cls;
            return;
        }

        $current = array_pop($this->map);
        $parent = end($this->map);

        if ($parent === false) {
            return;
        }

        if ($current->leaf) {
            if ($this->triggerCallback($current->type, $current->cls, $current->tag)) {
                return;
            }

            if (!($current->cls instanceof EbatNs_ComplexType)) {
                $current->cls->setTypeValue($current->data);
            }
        }

        if ($current->array) {
            $parent->cls->callPropertyAdder($current->tag, $current->cls ? $current->cls : $current->data);
        } elseif ($parent->cls) {
            $parent->cls->callPropertySetter($current->tag, $current->cls ? $current->cls : $current->data);
        }
    }

    protected function _cData($parser, $data)
    {
        if ($this->inResponse && !$this->response) {
            $item = end($this->map);
            $item->data .= $data;
        }
    }

    protected function triggerCallback($type, $prop, $tag)
    {
        return isset($this->callbacks[strtolower($type)]) &&
            call_user_func($this->callbacks[strtolower($type)], $type, $prop, $tag);
    }

    protected static function resolveTypeClass($name)
    {
        $base = strpos($name, '\\') ? $name : 'InTradeSys\eBay\trading\\' . ucfirst($name);

        return class_exists($cls = $base) ||
            class_exists($cls = $base . 'Type') ||
            class_exists($cls = $base . 'CodeType') ? $cls : null;
    }

    protected static function parseFault($xml)
    {
        $response = new EbatNs_ResponseError();
        $code = '';
        $severity = '';

        $parser = xml_parser_create();
        xml_parse_into_struct($parser, $xml, $lstValues, $index);
        xml_parser_free($parser);

        foreach ($lstValues as $value) {
            if ($value['type'] === 'complete') {
                switch ($value['tag']) {
                  case 'FAULTSTRING':
                      $response->raiseError('soap-fault: ' . utf8_decode($value['value']));
                      break;
                  case 'ERRORCODE':
                      $code = $value['value'];
                      break;
                  case 'SEVERITY':
                      $severity = $value['value'];
                      break;
                  case 'DETAILEDMESSAGE':
                      $response->raiseError($value['value'], $code, $severity);
                      break;
                }
            }
        }

        return $response;
    }
}
