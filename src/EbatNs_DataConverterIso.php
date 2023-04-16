<?php

namespace InTradeSys\eBay\trading;


class EbatNs_DataConverterIso extends EbatNs_DataConverter
{
    public function encodeData($value, $type, $typePropertyName)
    {
        $value = $type === 'string' ? utf8_encode($value) : $value;
        return parent::encodeData($value, $type, $typePropertyName);
    }

    public function decodeData($value, $type, $typePropertyName)
    {
        $value = $type === 'string' ? utf8_decode($value) : $value;
        return parent::decodeData($value, $type, $typePropertyName);
    }
}
