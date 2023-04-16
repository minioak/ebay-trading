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
 * This type defines the
 * VariationProductListingDetails
 * container that is used to specify a Global Trade Item Number (GTIN), such as an EAN, an ISBN, or a UPC value, to
 * identify a specific product variation in a multiple-variation listing. For a multiple-variation listing, the same
 * GTIN type(s) must be used for all product variations within the same listing. For instance, if specify an ISBN
 * value for one product variation within the listing, an ISBN value (and not an EAN or UPC value) must be specified
 * for all product variations within the listing.
 **/
class VariationProductListingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'VariationProductListingDetailsType';
    const NAME = 'VariationProductListingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

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
     * @var string|null
     */
    protected $ProductReferenceID = null;

    /**
     * @var NameValueListType[]|null
     */
    protected $NameValueList = [];


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
            'ISBN' => [],
            'UPC' => [],
            'EAN' => [],
            'ProductReferenceID' => [],
            'NameValueList' => ['type' => 'NameValueListType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VariationProductListingDetailsType::_register();
