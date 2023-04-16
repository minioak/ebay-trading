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
 * Contains a paginated list of items.
 **/
class PaginatedItemArrayType extends EbatNs_ComplexType
{
    const TAG = 'PaginatedItemArrayType';
    const NAME = 'PaginatedItemArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemArrayType|null
     */
    protected $ItemArray = null;

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;


    /**
     * @return ItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemArray()
    {
        return $this->_dc($this->ItemArray, 'ItemArray');
    }

    /**
     * @param ItemArrayType|null $value
     * @return void
     */
    public function setItemArray($value)
    {
        $this->ItemArray = $value;
    }

    /**
     * @return PaginationResultType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaginationResult()
    {
        return $this->_dc($this->PaginationResult, 'PaginationResult');
    }

    /**
     * @param PaginationResultType|null $value
     * @return void
     */
    public function setPaginationResult($value)
    {
        $this->PaginationResult = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemArray' => ['type' => 'ItemArrayType', 'xmlns' => self::XMLNS],
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PaginatedItemArrayType::_register();
