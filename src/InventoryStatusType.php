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
 * This type is used by the
 * ReviseInventoryStatus
 * call to update the price and/or quantity of an item or an item variation within a single-variation or
 * multiple-variation, fixed-price listing.
 **/
class InventoryStatusType extends EbatNs_ComplexType
{
    const TAG = 'InventoryStatusType';
    const NAME = 'InventoryStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SKUType|null
     */
    protected $SKU = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var AmountType|null
     */
    protected $StartPrice = null;

    /**
     * @var int|null
     */
    protected $Quantity = null;


    /**
     * @return SKUType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSKU()
    {
        return $this->_dc($this->SKU, 'SKU');
    }

    /**
     * @param SKUType|null $value
     * @return void
     */
    public function setSKU($value)
    {
        $this->SKU = $value;
    }

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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartPrice()
    {
        return $this->_dc($this->StartPrice, 'StartPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setStartPrice($value)
    {
        $this->StartPrice = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantity()
    {
        return $this->_dc($this->Quantity, 'Quantity');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantity($value)
    {
        $this->Quantity = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SKU' => ['type' => 'SKUType', 'xmlns' => self::XMLNS],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'StartPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Quantity' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

InventoryStatusType::_register();
