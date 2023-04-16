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
 * ReviseInventoryStatus
 * call. The response includes a
 * Fees
 * container and an
 * InventoryStatus
 * container for each item and/or item variation that was revised.
 **/
class ReviseInventoryStatusResponseType extends EbatNs_Response
{
    const TAG = 'ReviseInventoryStatusResponseType';
    const NAME = 'ReviseInventoryStatusResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var InventoryStatusType[]|null
     */
    protected $InventoryStatus = [];

    /**
     * @var InventoryFeesType[]|null
     */
    protected $Fees = [];


    /**
     * @return InventoryStatusType[]|InventoryStatusType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getInventoryStatus($index = null)
    {
        return $this->_dc($index === null
            ? $this->InventoryStatus
            : (count($this->InventoryStatus) > $index
                ? $this->InventoryStatus[$index]
                : null), 'InventoryStatus');
    }

    /**
     * @param InventoryStatusType|null|InventoryStatusType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setInventoryStatus($value, $index = null)
    {
        if ($index === null) {
            $this->InventoryStatus = $value;
        } else {
            $this->InventoryStatus[$index] = [];
            
            foreach ($value as $item) {
                $this->addInventoryStatus($item);
            }
        }
    }

    /**
     * @param InventoryStatusType|null $value
     * @return void
     */
    public function addInventoryStatus($value)
    {
        $this->InventoryStatus[] = $value;
    }

    /**
     * @return InventoryFeesType[]|InventoryFeesType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFees($index = null)
    {
        return $this->_dc($index === null
            ? $this->Fees
            : (count($this->Fees) > $index
                ? $this->Fees[$index]
                : null), 'Fees');
    }

    /**
     * @param InventoryFeesType|null|InventoryFeesType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFees($value, $index = null)
    {
        if ($index === null) {
            $this->Fees = $value;
        } else {
            $this->Fees[$index] = [];
            
            foreach ($value as $item) {
                $this->addFees($item);
            }
        }
    }

    /**
     * @param InventoryFeesType|null $value
     * @return void
     */
    public function addFees($value)
    {
        $this->Fees[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'InventoryStatus' => ['type' => 'InventoryStatusType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Fees' => ['type' => 'InventoryFeesType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseInventoryStatusResponseType::_register();
