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
 * This call allows you to add or modify sales tax rates for one or more tax jurisdictions within the specified
 * site. Any additions or modifications made with this call is saved in the seller's Sales Tax Table in My eBay.
 * 
 * Sales Tax Tables are only supported on the US and Canada (English and French versions) sites, so this call is
 * only applicable to those sites. To view their current Sales Tax Table, a seller may go to the Sales Tax Table in
 * My eBay, or they can make a
 * GetTaxTable
 * call.
 **/
class SetTaxTableRequestType extends AbstractRequestType
{
    const TAG = 'SetTaxTableRequest';
    const NAME = 'SetTaxTableRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetTaxTable';

    /**
     * @var TaxTableType|null
     */
    protected $TaxTable = null;


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
     * @return SetTaxTableResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['TaxTable' => ['type' => 'TaxTableType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

SetTaxTableRequestType::_register();
