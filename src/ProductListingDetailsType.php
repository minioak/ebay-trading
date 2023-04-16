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
 * Type used by the
 * ProductListingDetails
 * container, which is used by a seller in an add/revise/relist call to identify a product through a Global Trade
 * Item Number (EAN, ISBN, or UPC) or an eBay Product ID (e.g. 'ePID'). If a specified product identifier is matched
 * to a product in the eBay catalog, some of the details for the product listing, such as listing category, product
 * title, product description, product aspects, and stock photo are prefilled for the listing.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * If a Brand/MPN pair is required for the product, these values must still be input through the
 * BrandMPN
 * container.
 * </span>
 **/
class ProductListingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ProductListingDetailsType';
    const NAME = 'ProductListingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeStockPhotoURL = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UseStockPhotoURLAsGallery = null;

    /**
     * @var string|null
     */
    protected $StockPhotoURL = null;

    /**
     * @var string[]|null
     */
    protected $Copyright = [];

    /**
     * @var string|null
     */
    protected $ProductReferenceID = null;

    /**
     * @var string|null
     */
    protected $DetailsURL = null;

    /**
     * @var string|null
     */
    protected $ProductDetailsURL = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReturnSearchResultOnDuplicates = null;

    /**
     * @var string|null
     */
    protected $ISBN = null;

    /**
     * @var string|null
     */
    protected $UPC = null;

    /**
     * @var string|null
     */
    protected $EAN = null;

    /**
     * @var BrandMPNType|null
     */
    protected $BrandMPN = null;

    /**
     * @var TicketListingDetailsType|null
     */
    protected $TicketListingDetails = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UseFirstProduct = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeeBayProductDetails = null;

    /**
     * @var NameValueListType[]|null
     */
    protected $NameValueList = [];


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeStockPhotoURL()
    {
        return $this->_dc($this->IncludeStockPhotoURL === 'true', 'IncludeStockPhotoURL');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeStockPhotoURL($value)
    {
        $this->IncludeStockPhotoURL = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUseStockPhotoURLAsGallery()
    {
        return $this->_dc($this->UseStockPhotoURLAsGallery === 'true', 'UseStockPhotoURLAsGallery');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUseStockPhotoURLAsGallery($value)
    {
        $this->UseStockPhotoURLAsGallery = self::_bool($value);
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
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCopyright($index = null)
    {
        return $this->_dc($index === null
            ? $this->Copyright
            : (count($this->Copyright) > $index
                ? $this->Copyright[$index]
                : null), 'Copyright');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCopyright($value, $index = null)
    {
        if ($index === null) {
            $this->Copyright = $value;
        } else {
            $this->Copyright[$index] = [];
            
            foreach ($value as $item) {
                $this->addCopyright($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addCopyright($value)
    {
        $this->Copyright[] = self::_string($value);
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
    public function getProductDetailsURL()
    {
        return $this->_dc($this->ProductDetailsURL, 'ProductDetailsURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProductDetailsURL($value)
    {
        $this->ProductDetailsURL = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnSearchResultOnDuplicates()
    {
        return $this->_dc($this->ReturnSearchResultOnDuplicates === 'true', 'ReturnSearchResultOnDuplicates');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReturnSearchResultOnDuplicates($value)
    {
        $this->ReturnSearchResultOnDuplicates = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getISBN()
    {
        return $this->_dc($this->ISBN, 'ISBN');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setISBN($value)
    {
        $this->ISBN = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUPC()
    {
        return $this->_dc($this->UPC, 'UPC');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUPC($value)
    {
        $this->UPC = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEAN()
    {
        return $this->_dc($this->EAN, 'EAN');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEAN($value)
    {
        $this->EAN = self::_string($value);
    }

    /**
     * @return BrandMPNType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBrandMPN()
    {
        return $this->_dc($this->BrandMPN, 'BrandMPN');
    }

    /**
     * @param BrandMPNType|null $value
     * @return void
     */
    public function setBrandMPN($value)
    {
        $this->BrandMPN = $value;
    }

    /**
     * @return TicketListingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTicketListingDetails()
    {
        return $this->_dc($this->TicketListingDetails, 'TicketListingDetails');
    }

    /**
     * @param TicketListingDetailsType|null $value
     * @return void
     */
    public function setTicketListingDetails($value)
    {
        $this->TicketListingDetails = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUseFirstProduct()
    {
        return $this->_dc($this->UseFirstProduct === 'true', 'UseFirstProduct');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUseFirstProduct($value)
    {
        $this->UseFirstProduct = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeeBayProductDetails()
    {
        return $this->_dc($this->IncludeeBayProductDetails === 'true', 'IncludeeBayProductDetails');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeeBayProductDetails($value)
    {
        $this->IncludeeBayProductDetails = self::_bool($value);
    }

    /**
     * @return NameValueListType[]|NameValueListType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getNameValueList($index = null)
    {
        return $this->_dc($index === null
            ? $this->NameValueList
            : (count($this->NameValueList) > $index
                ? $this->NameValueList[$index]
                : null), 'NameValueList');
    }

    /**
     * @param NameValueListType|null|NameValueListType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setNameValueList($value, $index = null)
    {
        if ($index === null) {
            $this->NameValueList = $value;
        } else {
            $this->NameValueList[$index] = [];
            
            foreach ($value as $item) {
                $this->addNameValueList($item);
            }
        }
    }

    /**
     * @param NameValueListType|null $value
     * @return void
     */
    public function addNameValueList($value)
    {
        $this->NameValueList[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'IncludeStockPhotoURL' => ['type' => 'bool'],
            'UseStockPhotoURLAsGallery' => ['type' => 'bool'],
            'StockPhotoURL' => [],
            'Copyright' => ['cardinality' => '0..*'],
            'ProductReferenceID' => [],
            'DetailsURL' => [],
            'ProductDetailsURL' => [],
            'ReturnSearchResultOnDuplicates' => ['type' => 'bool'],
            'ISBN' => [],
            'UPC' => [],
            'EAN' => [],
            'BrandMPN' => ['type' => 'BrandMPNType', 'xmlns' => self::XMLNS],
            'TicketListingDetails' => ['type' => 'TicketListingDetailsType', 'xmlns' => self::XMLNS],
            'UseFirstProduct' => ['type' => 'bool'],
            'IncludeeBayProductDetails' => ['type' => 'bool'],
            'NameValueList' => ['type' => 'NameValueListType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ProductListingDetailsType::_register();
