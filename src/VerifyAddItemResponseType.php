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
 * Returns the listing recommendations (if applicable), the estimated fees for the proposed new listing (except the
 * Final Value Fee, which isn't calculated until the item has sold), and other details.
 **/
class VerifyAddItemResponseType extends EbatNs_Response
{
    const TAG = 'VerifyAddItemResponseType';
    const NAME = 'VerifyAddItemResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var FeesType|null
     */
    protected $Fees = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExpressListing = null;

    /**
     * @var ExpressItemRequirementsType|null
     */
    protected $ExpressItemRequirements = null;

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var string|null
     */
    protected $Category2ID = null;

    /**
     * @var DiscountReasonCodeType[]|null
     */
    protected $DiscountReason = [];

    /**
     * @var ProductSuggestionsType|null
     */
    protected $ProductSuggestions = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return FeesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFees()
    {
        return $this->_dc($this->Fees, 'Fees');
    }

    /**
     * @param FeesType|null $value
     * @return void
     */
    public function setFees($value)
    {
        $this->Fees = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressListing()
    {
        return $this->_dc($this->ExpressListing === 'true', 'ExpressListing');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpressListing($value)
    {
        $this->ExpressListing = self::_bool($value);
    }

    /**
     * @return ExpressItemRequirementsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpressItemRequirements()
    {
        return $this->_dc($this->ExpressItemRequirements, 'ExpressItemRequirements');
    }

    /**
     * @param ExpressItemRequirementsType|null $value
     * @return void
     */
    public function setExpressItemRequirements($value)
    {
        $this->ExpressItemRequirements = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategory2ID()
    {
        return $this->_dc($this->Category2ID, 'Category2ID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategory2ID($value)
    {
        $this->Category2ID = self::_string($value);
    }

    /**
     * @return string[]|DiscountReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDiscountReason($index = null)
    {
        return $this->_dc($index === null
            ? $this->DiscountReason
            : (count($this->DiscountReason) > $index
                ? $this->DiscountReason[$index]
                : null));
    }

    /**
     * @param DiscountReasonCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDiscountReason($value, $index = null)
    {
        if ($index === null) {
            $this->DiscountReason = $value;
        } else {
            $this->DiscountReason[$index] = [];
            
            foreach ($value as $item) {
                $this->addDiscountReason($item);
            }
        }
    }

    /**
     * @param DiscountReasonCodeType|null $value
     * @return void
     */
    public function addDiscountReason($value)
    {
        $this->DiscountReason[] = $this->_enum($value, DiscountReasonCodeType::class);
    }

    /**
     * @return ProductSuggestionsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductSuggestions()
    {
        return $this->_dc($this->ProductSuggestions, 'ProductSuggestions');
    }

    /**
     * @param ProductSuggestionsType|null $value
     * @return void
     */
    public function setProductSuggestions($value)
    {
        $this->ProductSuggestions = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'Fees' => ['type' => 'FeesType', 'xmlns' => self::XMLNS],
            'ExpressListing' => ['type' => 'bool'],
            'ExpressItemRequirements' => ['type' => 'ExpressItemRequirementsType', 'xmlns' => self::XMLNS],
            'CategoryID' => [],
            'Category2ID' => [],
            'DiscountReason' => ['type' => 'DiscountReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ProductSuggestions' => ['type' => 'ProductSuggestionsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VerifyAddItemResponseType::_register();
