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
 * The base response of the
 * GetTaxTable
 * call.
 **/
class GetTaxTableResponseType extends EbatNs_Response
{
    const TAG = 'GetTaxTableResponseType';
    const NAME = 'GetTaxTableResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $LastUpdateTime = null;

    /**
     * @var TaxTableType|null
     */
    protected $TaxTable = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastUpdateTime()
    {
        return $this->_dc($this->LastUpdateTime, 'LastUpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastUpdateTime($value)
    {
        $this->LastUpdateTime = self::_string($value);
    }

    /**
     * @return TaxTableType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxTable()
    {
        return $this->_dc($this->TaxTable, 'TaxTable');
    }

    /**
     * @param TaxTableType|null $value
     * @return void
     */
    public function setTaxTable($value)
    {
        $this->TaxTable = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'LastUpdateTime' => [],
            'TaxTable' => ['type' => 'TaxTableType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetTaxTableResponseType::_register();
