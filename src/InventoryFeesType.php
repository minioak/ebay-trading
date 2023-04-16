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
 * This is used in the
 * ReviseInventoryStatus
 * response to provide the set of fees associated with each unique
 * ItemID
 * .
 **/
class InventoryFeesType extends EbatNs_ComplexType
{
    const TAG = 'InventoryFeesType';
    const NAME = 'InventoryFeesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var FeeType[]|null
     */
    protected $Fee = [];


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
     * @return FeeType[]|FeeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFee($index = null)
    {
        return $this->_dc($index === null
            ? $this->Fee
            : (count($this->Fee) > $index
                ? $this->Fee[$index]
                : null), 'Fee');
    }

    /**
     * @param FeeType|null|FeeType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFee($value, $index = null)
    {
        if ($index === null) {
            $this->Fee = $value;
        } else {
            $this->Fee[$index] = [];
            
            foreach ($value as $item) {
                $this->addFee($item);
            }
        }
    }

    /**
     * @param FeeType|null $value
     * @return void
     */
    public function addFee($value)
    {
        $this->Fee[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'Fee' => ['type' => 'FeeType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

InventoryFeesType::_register();
