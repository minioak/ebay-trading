<?php

namespace InTradeSys\eBay\trading;


class EbatNs_DataConverter
{
    /**
     * This function is used to modify data which will be actually sent.
     * @param $value mixed The value which has been applied to "typePropertyName".
     * @param $type string Can be "string", "bool", "int", "float" or a class name.
     * @param $typePropertyName null|string Is null for literal types.
     * @return mixed
     */
    public function encodeData($value, $type, $typePropertyName)
    {
        return $type === 'string' && $value !== null
            ? htmlspecialchars($value, ENT_NOQUOTES)
            : $value;
    }

    /**
     * This function is used to modify response values accessed by getters.
     * @param $value mixed The value which has been applied to "typePropertyName".
     * @param $type string Can be "string", "bool", "int", "float" or a class name.
     * @param $typePropertyName null|string Is null for literal types.
     * @return mixed
     */
    public function decodeData($value, $type, $typePropertyName)
    {
        return $value;
    }
}
