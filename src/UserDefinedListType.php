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
 * Contains the items, searches and sellers that the user has saved to this
 * list using the "Add to list" feature.  The name of the list is given by the
 * "Name" element.
 **/
class UserDefinedListType extends EbatNs_ComplexType
{
    const TAG = 'UserDefinedListType';
    const NAME = 'UserDefinedListType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var int|null
     */
    protected $ItemCount = null;

    /**
     * @var int|null
     */
    protected $FavoriteSearcheCount = null;

    /**
     * @var int|null
     */
    protected $FavoriteSellerCount = null;

    /**
     * @var ItemArrayType|null
     */
    protected $ItemArray = null;

    /**
     * @var MyeBayFavoriteSearchListType|null
     */
    protected $FavoriteSearches = null;

    /**
     * @var MyeBayFavoriteSellerListType|null
     */
    protected $FavoriteSellers = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemCount()
    {
        return $this->_dc($this->ItemCount, 'ItemCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setItemCount($value)
    {
        $this->ItemCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFavoriteSearcheCount()
    {
        return $this->_dc($this->FavoriteSearcheCount, 'FavoriteSearcheCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFavoriteSearcheCount($value)
    {
        $this->FavoriteSearcheCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFavoriteSellerCount()
    {
        return $this->_dc($this->FavoriteSellerCount, 'FavoriteSellerCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFavoriteSellerCount($value)
    {
        $this->FavoriteSellerCount = self::_int($value);
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
     * @return MyeBayFavoriteSearchListType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFavoriteSearches()
    {
        return $this->_dc($this->FavoriteSearches, 'FavoriteSearches');
    }

    /**
     * @param MyeBayFavoriteSearchListType|null $value
     * @return void
     */
    public function setFavoriteSearches($value)
    {
        $this->FavoriteSearches = $value;
    }

    /**
     * @return MyeBayFavoriteSellerListType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFavoriteSellers()
    {
        return $this->_dc($this->FavoriteSellers, 'FavoriteSellers');
    }

    /**
     * @param MyeBayFavoriteSellerListType|null $value
     * @return void
     */
    public function setFavoriteSellers($value)
    {
        $this->FavoriteSellers = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'ItemCount' => ['type' => 'int'],
            'FavoriteSearcheCount' => ['type' => 'int'],
            'FavoriteSellerCount' => ['type' => 'int'],
            'ItemArray' => ['type' => 'ItemArrayType', 'xmlns' => self::XMLNS],
            'FavoriteSearches' => ['type' => 'MyeBayFavoriteSearchListType', 'xmlns' => self::XMLNS],
            'FavoriteSellers' => ['type' => 'MyeBayFavoriteSellerListType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UserDefinedListType::_register();
