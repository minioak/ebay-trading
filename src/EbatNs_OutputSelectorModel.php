<?php

namespace InTradeSys\eBay\trading;


class EbatNs_OutputSelectorModel
{
    protected $outputSelectors;
    protected $name;
    protected $active;

    public function __construct($name = null, $active = true)
    {
        $this->name = $name;
        $this->active = $active;
    }

    /**
    * @param EbatNs_OutputSelector $selector
    */
    public function addSelector($selector)
    {
        $this->outputSelectors[] = $selector;
    }

    /**
     * combine all selectors tagnames and return an array for OutputSelector
     */
    public function getSelectorArray()
    {
        $selectorArray = [];

        foreach ($this->outputSelectors as $outputSelector) {
            $selectorArray = array_merge($selectorArray, $outputSelector->getSelectorTagNames());
        }

        return $selectorArray;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getActive()
    {
        return $this->active;
    }
}
