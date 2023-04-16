<?php

namespace InTradeSys\eBay\trading;


class EbatNs_OutputSelector
{
    protected $selectorTagNames = [];

    public function __construct($selectorTagName)
    {
        $this->addTagName($selectorTagName);
    }

    public function addTagName($selectorTagName)
    {
        if (is_array($selectorTagName)) {
            $this->selectorTagNames = array_merge($this->selectorTagNames, $selectorTagName);
        } else {
            $this->selectorTagNames[] = $selectorTagName;
        }
    }

    public function getSelectorTagNames()
    {
        return $this->selectorTagNames;
    }
}
