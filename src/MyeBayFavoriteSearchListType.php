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
 * A list of favorite searches a user has saved on the My eBay page.
 **/
class MyeBayFavoriteSearchListType extends EbatNs_ComplexType
{
    const TAG = 'MyeBayFavoriteSearchListType';
    const NAME = 'MyeBayFavoriteSearchListType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $TotalAvailable = null;

    /**
     * @var MyeBayFavoriteSearchType[]|null
     */
    protected $FavoriteSearch = [];


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalAvailable()
    {
        return $this->_dc($this->TotalAvailable, 'TotalAvailable');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalAvailable($value)
    {
        $this->TotalAvailable = self::_int($value);
    }

    /**
     * @return MyeBayFavoriteSearchType[]|MyeBayFavoriteSearchType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFavoriteSearch($index = null)
    {
        return $this->_dc($index === null
            ? $this->FavoriteSearch
            : (count($this->FavoriteSearch) > $index
                ? $this->FavoriteSearch[$index]
                : null), 'FavoriteSearch');
    }

    /**
     * @param MyeBayFavoriteSearchType|null|MyeBayFavoriteSearchType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFavoriteSearch($value, $index = null)
    {
        if ($index === null) {
            $this->FavoriteSearch = $value;
        } else {
            $this->FavoriteSearch[$index] = [];
            
            foreach ($value as $item) {
                $this->addFavoriteSearch($item);
            }
        }
    }

    /**
     * @param MyeBayFavoriteSearchType|null $value
     * @return void
     */
    public function addFavoriteSearch($value)
    {
        $this->FavoriteSearch[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TotalAvailable' => ['type' => 'int'],
            'FavoriteSearch' => ['type' => 'MyeBayFavoriteSearchType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyeBayFavoriteSearchListType::_register();
