<?php

namespace InTradeSys\eBay\trading;


/**
 * This class represents a leaf in xml structures.
 */
class EbatNs_SimpleType
{
    const TAG = '';
    const NAME = 'EbatNs_SimpleType';
    const XMLNS = 'http://www.w3.org/2001/XMLSchema';
    const REQUEST = null;

    protected static $_attributes = [
        /* pre-registered attributes */
        'EbatNs_SimpleType' => [],
        'EbatNs_EnumType' => [],
        'EbatNs_ComplexType' => []
    ];
    protected static $_elements = [
        /* pre-registered elements */
        'EbatNs_SimpleType' => [],
        'EbatNs_EnumType' => [],
        'EbatNs_ComplexType' => []
    ];
    private static $elementDefaults = [
        'required' => false,
        'enum' => false,
        'type' => 'string',
        'xmlns' => 'http://www.w3.org/2001/XMLSchema',
        'cardinality' => '0..1'
    ];
    protected $_decoder = null;
    protected $_tagAttributes = [];
    protected $_undeclaredProperties = [];

    /**
     * This value should never be used for anything!
     * It is declared just about linting.
     * Specialized type classes will hold
     * their own "_value" attribute.
     *
     * @var mixed
     */
    protected $_value = null;

    /**
     * @return array @see readElement
     */
    public static function listElements()
    {
        return self::$_elements[self::shortClassName()];
    }

    /**
     * @param string $name
     * @param array $attributes
     * @param string|null $parent
     */
    public static function assignElement($name, $attributes, $parent = null)
    {
        self::assignElements([$name => $attributes], $parent);
    }

    /**
     * @param $elements array
     * @param string|null $parent
     */
    public static function assignElements($elements, $parent = null)
    {
        $clsName = self::shortClassName();

        if ($parent) {
            self::$_elements[$clsName] = self::$_elements[$parent];
        }

        foreach ($elements as $name => $attributes) {
            self::$_elements[$clsName][$name] = array_merge(self::$elementDefaults, $attributes);
        }
    }

    /**
     * @param array $entries
     * @param string|null $parent
     */
    public static function assignAttributes($entries, $parent = null)
    {
        $clsName = self::shortClassName();
        foreach ($entries as $name => $attributes) {
            self::$_attributes[$clsName][$name] = array_merge(['name' => $name, 'use' => 'optional'], $attributes);
        }
    }

    /**
     * @return array|mixed
     * @param string|null $entry (name|type|use)
     */
    public static function readAttribute($entry = null)
    {
        $info = self::$_attributes[self::shortClassName()];
        return $entry ? $info[$entry] : $info;
    }

    /**
     * @param mixed $value
     * @return string|null
     */
    protected static function _string($value)
    {
        if ($value === null) {
            return null;
        }

        return strval($value);
    }

    /**
     * @param mixed $value
     * @return string|null "true" or "false"
     */
    protected static function _bool($value)
    {
        if ($value === null) {
            return null;
        }

        $isTrue = (is_string($value) && strtolower($value) !== 'false') || $value;
        return $isTrue ? 'true' : 'false';
    }

    /**
     * @param mixed $value
     * @return int|null
     */
    protected static function _int($value)
    {
        if ($value === null) {
            return null;
        }

        return intval($value);
    }

    /**
     * @param mixed $value
     * @return float|null
     */
    protected static function _float($value)
    {
        if ($value === null) {
            return null;
        }

        return floatval($value);
    }

    /**
    * @param object|null $decoder
    */
    public function assignDataConverter($decoder)
    {
        $this->_decoder = $decoder;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function callPropertyGetter($key)
    {
        return $this->propertyExists($key) ? $this->{'get' . ucfirst($key)}() : null;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function propertyExists($key)
    {
        return $key && $key[0] !== '_' && property_exists($this, $key) && self::readElement($key);
    }

    /**
     * @param string $name
     * @param string|null $entry (type|name|nsURI|required|enum|cardinality)
     * @return array|string|bool|null
     */
    public static function readElement($name, $entry = null)
    {
        $clsName = self::shortClassName();
        $info = isset(self::$_elements[$clsName][$name])
            ? self::$_elements[$clsName][$name]
            : null;

        return $entry && $info ? $info[$entry] : $info;
    }

    /**
     * @return string
     */
    protected static function shortClassName()
    {
        $cls = self::className();
        return substr($cls, strrpos($cls, '\\') + 1);
    }

    /**
     * @return string
     */
    protected static function className()
    {
        return get_called_class();
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    public function callPropertySetter($key, $value)
    {
        if (!$this->propertyExists($key)) {
            $this->_undeclaredProperties[$key][] = $value;
        } else {
            $this->{'set' . ucfirst($key)}($value);
        }
    }

    /**
     * @param string $key
     * @param mixed|null $value
     */
    public function callPropertyAdder($key, $value)
    {
        if (!$this->propertyExists($key)) {
            $this->callPropertySetter($key, $value);
        } elseif (is_array($this->{$key})) {
            $this->{'add' . ucfirst($key)}($value);
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toXml();
    }

    /**
     * @param string|null $element
     * @param object|null $encoder
     * @return string
     */
    public function toXml($element = null, $encoder = null)
    {
        return self::tagify(
            $element,
            $this->_value,
            $this->listTagAttributes(),
            $encoder,
            $encoder ? self::readElement($element, 'type') : null
        );
    }

    /**
     * @param string|null $name
     * @param mixed|null $value
     * @param array $attributes
     * @param object|null|true $encoder
     * @param string $valueType
     * @return string
     */
    protected static function tagify($name, $value, $attributes = [], $encoder = null, $valueType = null)
    {
        if ($encoder && $encoder !== true) {
            $value = $encoder->encodeData($value, $valueType, $name);
        }

        if ($value === null && !$attributes) {
            return '';
        }

        $attrs = '';
        foreach ($attributes as $key => $val) {
            $attrs .= " $key=\"$val\"";
        }

        if (!$name) {
            $cls = self::className();
            $name = $cls::TAG ? $cls::TAG : $cls::NAME;
        }

        if (
            $encoder && // without data converter, we proceed raw
            is_string($value) && // apply cdata only to strings
            !in_array(strtolower($value), ['true', 'false']) && // no cdata needed for boolean representations
            (strpos($value, '<') !== false || strpos($value, '>') !== false)
        ) {
            /**
             * Dear developer!
             * Please note that we only want to avoid xml here that can not get parsed.
             * In history some endpoints accepted un-encoded special characters. So we decided to preserve
             * the potential benefits and give you full control over your strings.
             * Sorry for the inconvenience.
             */
            $doc = new \DOMDocument();
            $value = $doc->saveXML($doc->createCDATASection($value));
        }

        return $value === null
            ? "<${name}${attrs} />"
            : "<${name}${attrs}>${value}</${name}>";
    }

    /**
     * @deprecated
     * @return string|null
     */
    public function getTypeAttribute($key)
    {
        $attributes = $this->listTagAttributes();
        return isset($attributes[$key]) ? $attributes[$key] : null;
    }

    /**
     * @return string[] assoc
     */
    public function listTagAttributes()
    {
        return array_filter($this->_tagAttributes);
    }

    public function __clone()
    {
        foreach (array_keys(get_object_vars($this)) as $oKey) {
            if (is_array($this->{$oKey})) {
                foreach (array_keys($this->{$oKey}) as $aKey) {
                    if (is_object($this->{$oKey}[$aKey])) {
                        $this->{$oKey}[$aKey] = clone $this->{$oKey}[$aKey];
                    }
                }
            }

            if (is_object($this->{$oKey})) {
                $this->{$oKey} = clone $this->{$oKey};
            }
        }
    }

    /**
     * @param string $key
     * @param string|null $value
     */
    public function assignTagAttribute($key, $value = null)
    {
        $this->_tagAttributes[$key] = strval($value === null ? $key : $value);
    }

    /**
     * @param string $key
     * @return mixed
     */
    protected function readProperty($key)
    {
        return $this->propertyExists($key) ? $this->$key : null;
    }

    /**
     * @param mixed $value
     * @param string $cls
     * @return null
     */
    protected function _enum($value, $cls)
    {
        if ($value === null || is_object($value)) {
            return $value;
        }

        $enum = new $cls($value);
        $enum->assignDataConverter($this->_decoder);

        return $enum;
    }

    /**
    * decodes value and is used from every generated getter
    * @param mixed $value
    * @param string|null $name
    * @return mixed
    */
    protected function _dc($value, $name = null)
    {
        $decoder = $this->_decoder;

        if (!$decoder) {
            return $value;
        }

        $type = $name
            ? self::readElement($name, 'type')
            : self::shortClassName(); // is enum and means "value is typed by itself"

        if (!is_array($value)) {
            return $decoder->decodeData($value, $type, $name);
        }

        $items = [];
        foreach ($value as $item) {
            $items[] = $decoder->decodeData($item, $type, $name);
        }

        return $items;
    }
}
