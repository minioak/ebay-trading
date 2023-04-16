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
 * The base response type for the
 * RelistItem
 * call. The response includes the Item ID for the relisted item, the SKU value for the item (if any), listing
 * recommendations (if applicable), the estimated fees for the relisted item (except the Final Value Fee, which
 * isn't calculated until the item has sold), the start and end times of the listing, and other details.
 **/
class RelistItemResponseType extends EbatNs_Response
{
    const TAG = 'RelistItemResponseType';
    const NAME = 'RelistItemResponseType';
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
     * @var string|null
     */
    protected $StartTime = null;

    /**
     * @var string|null
     */
    protected $EndTime = null;

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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->StartTime, 'StartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->StartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
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
            'StartTime' => [],
            'EndTime' => [],
            'CategoryID' => [],
            'Category2ID' => [],
            'DiscountReason' => ['type' => 'DiscountReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ProductSuggestions' => ['type' => 'ProductSuggestionsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RelistItemResponseType::_register();
