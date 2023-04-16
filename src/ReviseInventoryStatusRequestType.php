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
 * Enables a seller to change the price and/or quantity of one to four
 * active, fixed-price listings. The fixed-price listing to modify is identified with the
 * ItemID
 * of the listing and/or the
 * SKU
 * value of the item (if a seller-defined SKU value exists for the listing). If the seller is modifying one or more
 * variations within a multiple-variation listing, the
 * ItemID
 * and
 * SKU
 * fields in the
 * InventoryStatus
 * container become required, with the
 * ItemID
 * value identifying the listing, and the
 * SKU
 * value identifying the specific product variation within that multiple-variation listing. Each variation within a
 * multiple-variation listing requires a seller-defined SKU value.
 * 
 * Whether updating the price and/or quantity of a single-variation listing or a specific variation within a
 * multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
 **/
class ReviseInventoryStatusRequestType extends AbstractRequestType
{
    const TAG = 'ReviseInventoryStatusRequest';
    const NAME = 'ReviseInventoryStatusRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ReviseInventoryStatus';

    /**
     * @var InventoryStatusType[]|null
     */
    protected $InventoryStatus = [];


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
     * @return ReviseInventoryStatusResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['InventoryStatus' => ['type' => 'InventoryStatusType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ReviseInventoryStatusRequestType::_register();
