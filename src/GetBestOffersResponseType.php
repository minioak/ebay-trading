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
 * All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. For the
 * notification client usage, this response includes a single Best Offer.
 **/
class GetBestOffersResponseType extends EbatNs_Response
{
    const TAG = 'GetBestOffersResponseType';
    const NAME = 'GetBestOffersResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BestOfferArrayType|null
     */
    protected $BestOfferArray = null;

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var ItemBestOffersArrayType|null
     */
    protected $ItemBestOffersArray = null;

    /**
     * @var int|null
     */
    protected $PageNumber = null;

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;


    /**
     * @return BestOfferArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferArray()
    {
        return $this->_dc($this->BestOfferArray, 'BestOfferArray');
    }

    /**
     * @param BestOfferArrayType|null $value
     * @return void
     */
    public function setBestOfferArray($value)
    {
        $this->BestOfferArray = $value;
    }

    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return ItemBestOffersArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemBestOffersArray()
    {
        return $this->_dc($this->ItemBestOffersArray, 'ItemBestOffersArray');
    }

    /**
     * @param ItemBestOffersArrayType|null $value
     * @return void
     */
    public function setItemBestOffersArray($value)
    {
        $this->ItemBestOffersArray = $value;
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
            'BestOfferArray' => ['type' => 'BestOfferArrayType', 'xmlns' => self::XMLNS],
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'ItemBestOffersArray' => ['type' => 'ItemBestOffersArrayType', 'xmlns' => self::XMLNS],
            'PageNumber' => ['type' => 'int'],
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetBestOffersResponseType::_register();
