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
 * A list of favorite sellers the user has saved on the My eBay page.
 **/
class MyeBayFavoriteSellerListType extends EbatNs_ComplexType
{
    const TAG = 'MyeBayFavoriteSellerListType';
    const NAME = 'MyeBayFavoriteSellerListType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $TotalAvailable = null;

    /**
     * @var MyeBayFavoriteSellerType[]|null
     */
    protected $FavoriteSeller = [];


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
     * @return MyeBayFavoriteSellerType[]|MyeBayFavoriteSellerType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFavoriteSeller($index = null)
    {
        return $this->_dc($index === null
            ? $this->FavoriteSeller
            : (count($this->FavoriteSeller) > $index
                ? $this->FavoriteSeller[$index]
                : null), 'FavoriteSeller');
    }

    /**
     * @param MyeBayFavoriteSellerType|null|MyeBayFavoriteSellerType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFavoriteSeller($value, $index = null)
    {
        if ($index === null) {
            $this->FavoriteSeller = $value;
        } else {
            $this->FavoriteSeller[$index] = [];
            
            foreach ($value as $item) {
                $this->addFavoriteSeller($item);
            }
        }
    }

    /**
     * @param MyeBayFavoriteSellerType|null $value
     * @return void
     */
    public function addFavoriteSeller($value)
    {
        $this->FavoriteSeller[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TotalAvailable' => ['type' => 'int'],
            'FavoriteSeller' => ['type' => 'MyeBayFavoriteSellerType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyeBayFavoriteSellerListType::_register();
