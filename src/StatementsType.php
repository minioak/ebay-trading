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
 * Type defining the
 * Statements
 * regulatory container used at the listing level to provide hazard statements for the listing.
 **/
class StatementsType extends EbatNs_ComplexType
{
    const TAG = 'StatementsType';
    const NAME = 'StatementsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Statement = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatement()
    {
        return $this->_dc($this->Statement, 'Statement');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStatement($value)
    {
        $this->Statement = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Statement' => ['cardinality' => '0..8']], parent::NAME);
        self::assignAttributes([]);
    }

}

StatementsType::_register();
