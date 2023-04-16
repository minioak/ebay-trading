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
 * The response of the
 * AddItems
 * call. The response includes the Item IDs of the newly created listings, the eBay category each item is listed
 * under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable),
 * the start and end time of each listing, and the estimated fees that each listing will incur.
 **/
class AddItemsResponseType extends EbatNs_Response
{
    const TAG = 'AddItemsResponseType';
    const NAME = 'AddItemsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AddItemResponseContainerType[]|null
     */
    protected $AddItemResponseContainer = [];


    /**
     * @return AddItemResponseContainerType[]|AddItemResponseContainerType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAddItemResponseContainer($index = null)
    {
        return $this->_dc($index === null
            ? $this->AddItemResponseContainer
            : (count($this->AddItemResponseContainer) > $index
                ? $this->AddItemResponseContainer[$index]
                : null), 'AddItemResponseContainer');
    }

    /**
     * @param AddItemResponseContainerType|null|AddItemResponseContainerType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAddItemResponseContainer($value, $index = null)
    {
        if ($index === null) {
            $this->AddItemResponseContainer = $value;
        } else {
            $this->AddItemResponseContainer[$index] = [];
            
            foreach ($value as $item) {
                $this->addAddItemResponseContainer($item);
            }
        }
    }

    /**
     * @param AddItemResponseContainerType|null $value
     * @return void
     */
    public function addAddItemResponseContainer($value)
    {
        $this->AddItemResponseContainer[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['AddItemResponseContainer' => ['type' => 'AddItemResponseContainerType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

AddItemsResponseType::_register();
