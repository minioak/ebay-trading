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
 * Defines how a list of items should be returned.
 **/
class ItemListCustomizationType extends EbatNs_ComplexType
{
    const TAG = 'ItemListCustomizationType';
    const NAME = 'ItemListCustomizationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $Include = null;

    /**
     * @var ListingTypeCodeType|null
     */
    protected $ListingType = null;

    /**
     * @var ItemSortTypeCodeType|null
     */
    protected $Sort = null;

    /**
     * @var int|null
     */
    protected $DurationInDays = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeNotes = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var OrderStatusFilterCodeType|null
     */
    protected $OrderStatusFilter = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInclude()
    {
        return $this->_dc($this->Include === 'true', 'Include');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setInclude($value)
    {
        $this->Include = self::_bool($value);
    }

    /**
     * @return ListingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingType()
    {
        return $this->_dc($this->ListingType);
    }

    /**
     * @param ListingTypeCodeType|null $value
     * @return void
     */
    public function setListingType($value)
    {
        $this->ListingType = $this->_enum($value, ListingTypeCodeType::class);
    }

    /**
     * @return ItemSortTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSort()
    {
        return $this->_dc($this->Sort);
    }

    /**
     * @param ItemSortTypeCodeType|null $value
     * @return void
     */
    public function setSort($value)
    {
        $this->Sort = $this->_enum($value, ItemSortTypeCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDurationInDays()
    {
        return $this->_dc($this->DurationInDays, 'DurationInDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDurationInDays($value)
    {
        $this->DurationInDays = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeNotes()
    {
        return $this->_dc($this->IncludeNotes === 'true', 'IncludeNotes');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeNotes($value)
    {
        $this->IncludeNotes = self::_bool($value);
    }

    /**
     * @return PaginationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPagination()
    {
        return $this->_dc($this->Pagination, 'Pagination');
    }

    /**
     * @param PaginationType|null $value
     * @return void
     */
    public function setPagination($value)
    {
        $this->Pagination = $value;
    }

    /**
     * @return OrderStatusFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderStatusFilter()
    {
        return $this->_dc($this->OrderStatusFilter);
    }

    /**
     * @param OrderStatusFilterCodeType|null $value
     * @return void
     */
    public function setOrderStatusFilter($value)
    {
        $this->OrderStatusFilter = $this->_enum($value, OrderStatusFilterCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Include' => ['type' => 'bool'],
            'ListingType' => ['type' => 'ListingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Sort' => ['type' => 'ItemSortTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DurationInDays' => ['type' => 'int'],
            'IncludeNotes' => ['type' => 'bool'],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'OrderStatusFilter' => ['type' => 'OrderStatusFilterCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemListCustomizationType::_register();
