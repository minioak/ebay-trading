<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from March 29, 2023, 11:17 am.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 *
 *
 * For paid support options ranging from on-demand,
 * best effort to 24/7 SLAs, please contact us anytime:
 *  ebay.api@InTradeSys.com
 *
 * For more information, visit:
 *  https://sdk.intradesys.com
 */


/**
 * This type is deprecated.
 **/
class HistogramEntryType extends EbatNs_ComplexType
{
    const TAG = 'HistogramEntryType';
    const NAME = 'HistogramEntryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $Count = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCount()
    {
        return $this->_dc($this->Count, 'Count');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCount($value)
    {
        $this->Count = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Count' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([
            'id' => ['type' => 'string'],
            'name' => ['type' => 'string']]);
    }

}

HistogramEntryType::_register();
