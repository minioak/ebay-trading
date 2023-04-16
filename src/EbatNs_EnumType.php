<?php

namespace InTradeSys\eBay\trading;


class EbatNs_EnumType extends EbatNs_SimpleType
{
    public function __toString()
    {
        return $this->getTypeValue();
    }
}
