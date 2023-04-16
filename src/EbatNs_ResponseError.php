<?php

namespace InTradeSys\eBay\trading;


class EbatNs_ResponseError extends EbatNs_Response
{
    /**
    * @param string|null $msg
    * @param string|int|null $msg
    */
    public function __construct($msg = null, $code = null)
    {
        if ($msg !== null) {
            $this->raiseError($msg, $code);
        }
    }

    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }
}

EbatNs_ResponseError::_register();
