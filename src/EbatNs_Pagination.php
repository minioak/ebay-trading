<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Pagination
{
    protected $_counter = 0;
    protected $_max = -1;

    public function reset($maxElements = -1)
    {
        $this->_counter = 0;
        $this->_max = $maxElements > 0 ? $maxElements : -1;
    }

    public function increment()
    {
        return ($this->_counter++ < $this->_max) || $this->_max < 1;
    }

    public function count()
    {
        return $this->_counter;
    }
}
