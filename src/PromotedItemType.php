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
class PromotedItemType extends EbatNs_ComplexType
{
    const TAG = 'PromotedItemType';
    const NAME = 'PromotedItemType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $PictureURL = null;

    /**
     * @var int|null
     */
    protected $Position = null;

    /**
     * @var PromotionItemSelectionCodeType|null
     */
    protected $SelectionType = null;

    /**
     * @var string|null
     */
    protected $Title = null;

    /**
     * @var ListingTypeCodeType|null
     */
    protected $ListingType = null;

    /**
     * @var PromotionDetailsType[]|null
     */
    protected $PromotionDetails = [];

    /**
     * @var string|null
     */
    protected $TimeLeft = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureURL()
    {
        return $this->_dc($this->PictureURL, 'PictureURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPictureURL($value)
    {
        $this->PictureURL = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPosition()
    {
        return $this->_dc($this->Position, 'Position');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPosition($value)
    {
        $this->Position = self::_int($value);
    }

    /**
     * @return PromotionItemSelectionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSelectionType()
    {
        return $this->_dc($this->SelectionType);
    }

    /**
     * @param PromotionItemSelectionCodeType|null $value
     * @return void
     */
    public function setSelectionType($value)
    {
        $this->SelectionType = $this->_enum($value, PromotionItemSelectionCodeType::class);
    }

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
     * @return PromotionDetailsType[]|PromotionDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPromotionDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->PromotionDetails
            : (count($this->PromotionDetails) > $index
                ? $this->PromotionDetails[$index]
                : null), 'PromotionDetails');
    }

    /**
     * @param PromotionDetailsType|null|PromotionDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPromotionDetails($value, $index = null)
    {
        if ($index === null) {
            $this->PromotionDetails = $value;
        } else {
            $this->PromotionDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addPromotionDetails($item);
            }
        }
    }

    /**
     * @param PromotionDetailsType|null $value
     * @return void
     */
    public function addPromotionDetails($value)
    {
        $this->PromotionDetails[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeLeft()
    {
        return $this->_dc($this->TimeLeft, 'TimeLeft');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeLeft($value)
    {
        $this->TimeLeft = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'PictureURL' => [],
            'Position' => ['type' => 'int'],
            'SelectionType' => ['type' => 'PromotionItemSelectionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Title' => [],
            'ListingType' => ['type' => 'ListingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PromotionDetails' => ['type' => 'PromotionDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'TimeLeft' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PromotedItemType::_register();
