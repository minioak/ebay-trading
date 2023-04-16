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
 * Enables a seller to relist a listing that has recently ended on a specified eBay site. A seller has to up to 90
 * days to relist an ended listing. When an item is relisted, it will receive a new
 * ItemID
 * value, but this item will remain on other users' Watch Lists after it is relisted. The seller has the
 * opportunity to make changes to the listing through the
 * Item
 * container, and the seller can also use one or more
 * DeletedField
 * tags to remove an optional field/setting from the listing.
 **/
class RelistItemRequestType extends AbstractRequestType
{
    const TAG = 'RelistItemRequest';
    const NAME = 'RelistItemRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'RelistItem';

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var string[]|null
     */
    protected $DeletedField = [];


    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDeletedField($index = null)
    {
        return $this->_dc($index === null
            ? $this->DeletedField
            : (count($this->DeletedField) > $index
                ? $this->DeletedField[$index]
                : null), 'DeletedField');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDeletedField($value, $index = null)
    {
        if ($index === null) {
            $this->DeletedField = $value;
        } else {
            $this->DeletedField[$index] = [];
            
            foreach ($value as $item) {
                $this->addDeletedField($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addDeletedField($value)
    {
        $this->DeletedField[] = self::_string($value);
    }

    /**
     * @return RelistItemResponseType|EbatNs_ResponseError
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
        self::assignElements([
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'DeletedField' => ['cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RelistItemRequestType::_register();
