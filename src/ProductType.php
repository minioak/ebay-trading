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
 * This type is deprecated.
 **/
class ProductType extends EbatNs_ComplexType
{
    const TAG = 'ProductType';
    const NAME = 'ProductType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CharacteristicsSetType|null
     */
    protected $CharacteristicsSet = null;

    /**
     * @var string|null
     */
    protected $DetailsURL = null;

    /**
     * @var int|null
     */
    protected $NumItems = null;

    /**
     * @var AmountType|null
     */
    protected $MinPrice = null;

    /**
     * @var AmountType|null
     */
    protected $MaxPrice = null;

    /**
     * @var string|null
     */
    protected $ProductReferenceID = null;


    /**
     * @return CharacteristicsSetType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharacteristicsSet()
    {
        return $this->_dc($this->CharacteristicsSet, 'CharacteristicsSet');
    }

    /**
     * @param CharacteristicsSetType|null $value
     * @return void
     */
    public function setCharacteristicsSet($value)
    {
        $this->CharacteristicsSet = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailsURL()
    {
        return $this->_dc($this->DetailsURL, 'DetailsURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailsURL($value)
    {
        $this->DetailsURL = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNumItems()
    {
        return $this->_dc($this->NumItems, 'NumItems');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNumItems($value)
    {
        $this->NumItems = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinPrice()
    {
        return $this->_dc($this->MinPrice, 'MinPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMinPrice($value)
    {
        $this->MinPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxPrice()
    {
        return $this->_dc($this->MaxPrice, 'MaxPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMaxPrice($value)
    {
        $this->MaxPrice = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductReferenceID()
    {
        return $this->_dc($this->ProductReferenceID, 'ProductReferenceID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProductReferenceID($value)
    {
        $this->ProductReferenceID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CharacteristicsSet' => ['type' => 'CharacteristicsSetType', 'xmlns' => self::XMLNS],
            'DetailsURL' => [],
            'NumItems' => ['type' => 'int'],
            'MinPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'MaxPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ProductReferenceID' => []
        ], parent::NAME);

        self::assignAttributes([
            'productID' => ['type' => 'string'],
            'stockPhotoURL' => ['type' => 'anyURI'],
            'title' => ['type' => 'string']]);
    }

}

ProductType::_register();
