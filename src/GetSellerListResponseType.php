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
 * This is the base response type of the
 * GetSellerList
 * call. The
 * GetSellerList
 * response includes an array of one or more listings that matched the input criteria, as well as pagination data.
 **/
class GetSellerListResponseType extends EbatNs_Response
{
    const TAG = 'GetSellerListResponseType';
    const NAME = 'GetSellerListResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasMoreItems = null;

    /**
     * @var ItemArrayType|null
     */
    protected $ItemArray = null;

    /**
     * @var int|null
     */
    protected $ItemsPerPage = null;

    /**
     * @var int|null
     */
    protected $PageNumber = null;

    /**
     * @var int|null
     */
    protected $ReturnedItemCountActual = null;

    /**
     * @var UserType|null
     */
    protected $Seller = null;


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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHasMoreItems()
    {
        return $this->_dc($this->HasMoreItems === 'true', 'HasMoreItems');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasMoreItems($value)
    {
        $this->HasMoreItems = self::_bool($value);
    }

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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemsPerPage()
    {
        return $this->_dc($this->ItemsPerPage, 'ItemsPerPage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setItemsPerPage($value)
    {
        $this->ItemsPerPage = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPageNumber()
    {
        return $this->_dc($this->PageNumber, 'PageNumber');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPageNumber($value)
    {
        $this->PageNumber = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnedItemCountActual()
    {
        return $this->_dc($this->ReturnedItemCountActual, 'ReturnedItemCountActual');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setReturnedItemCountActual($value)
    {
        $this->ReturnedItemCountActual = self::_int($value);
    }

    /**
     * @return UserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSeller()
    {
        return $this->_dc($this->Seller, 'Seller');
    }

    /**
     * @param UserType|null $value
     * @return void
     */
    public function setSeller($value)
    {
        $this->Seller = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS],
            'HasMoreItems' => ['type' => 'bool'],
            'ItemArray' => ['type' => 'ItemArrayType', 'xmlns' => self::XMLNS],
            'ItemsPerPage' => ['type' => 'int'],
            'PageNumber' => ['type' => 'int'],
            'ReturnedItemCountActual' => ['type' => 'int'],
            'Seller' => ['type' => 'UserType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellerListResponseType::_register();
