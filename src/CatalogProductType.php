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
class CatalogProductType extends EbatNs_ComplexType
{
    const TAG = 'CatalogProductType';
    const NAME = 'CatalogProductType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Title = null;

    /**
     * @var string|null
     */
    protected $DetailsURL = null;

    /**
     * @var string|null
     */
    protected $StockPhotoURL = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DisplayStockPhotos = null;

    /**
     * @var int|null
     */
    protected $ItemCount = null;

    /**
     * @var int|null
     */
    protected $ProductReferenceID = null;

    /**
     * @var int|null
     */
    protected $AttributeSetID = null;

    /**
     * @var NameValueListArrayType|null
     */
    protected $ItemSpecifics = null;

    /**
     * @var int|null
     */
    protected $ReviewCount = null;

    /**
     * @var ReviewDetailsType|null
     */
    protected $ReviewDetails = null;

    /**
     * @var ProductStateCodeType|null
     */
    protected $ProductState = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitle()
    {
        return $this->_dc($this->Title, 'Title');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTitle($value)
    {
        $this->Title = self::_string($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStockPhotoURL()
    {
        return $this->_dc($this->StockPhotoURL, 'StockPhotoURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStockPhotoURL($value)
    {
        $this->StockPhotoURL = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayStockPhotos()
    {
        return $this->_dc($this->DisplayStockPhotos === 'true', 'DisplayStockPhotos');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDisplayStockPhotos($value)
    {
        $this->DisplayStockPhotos = self::_bool($value);
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
    public function getProductReferenceID()
    {
        return $this->_dc($this->ProductReferenceID, 'ProductReferenceID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setProductReferenceID($value)
    {
        $this->ProductReferenceID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAttributeSetID()
    {
        return $this->_dc($this->AttributeSetID, 'AttributeSetID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setAttributeSetID($value)
    {
        $this->AttributeSetID = self::_int($value);
    }

    /**
     * @return NameValueListArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemSpecifics()
    {
        return $this->_dc($this->ItemSpecifics, 'ItemSpecifics');
    }

    /**
     * @param NameValueListArrayType|null $value
     * @return void
     */
    public function setItemSpecifics($value)
    {
        $this->ItemSpecifics = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReviewCount()
    {
        return $this->_dc($this->ReviewCount, 'ReviewCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setReviewCount($value)
    {
        $this->ReviewCount = self::_int($value);
    }

    /**
     * @return ReviewDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReviewDetails()
    {
        return $this->_dc($this->ReviewDetails, 'ReviewDetails');
    }

    /**
     * @param ReviewDetailsType|null $value
     * @return void
     */
    public function setReviewDetails($value)
    {
        $this->ReviewDetails = $value;
    }

    /**
     * @return ProductStateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductState()
    {
        return $this->_dc($this->ProductState);
    }

    /**
     * @param ProductStateCodeType|null $value
     * @return void
     */
    public function setProductState($value)
    {
        $this->ProductState = $this->_enum($value, ProductStateCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Title' => [],
            'DetailsURL' => [],
            'StockPhotoURL' => [],
            'DisplayStockPhotos' => ['type' => 'bool'],
            'ItemCount' => ['type' => 'int'],
            'ProductReferenceID' => ['type' => 'int'],
            'AttributeSetID' => ['type' => 'int'],
            'ItemSpecifics' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS],
            'ReviewCount' => ['type' => 'int'],
            'ReviewDetails' => ['type' => 'ReviewDetailsType', 'xmlns' => self::XMLNS],
            'ProductState' => ['type' => 'ProductStateCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CatalogProductType::_register();
