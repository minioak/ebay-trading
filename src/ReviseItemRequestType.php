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
 * Enables a seller to revise a listing on a specified eBay site. To revise an active listing, the seller specifies
 * the
 * ItemID
 * value for the listing. The seller makes one or multiple changes to the listing through the
 * Item
 * container, and the seller can also use one or more
 * DeletedField
 * tags to remove an optional field/setting from the listing.
 * 
 * 
 * After a multiple-quantity, fixed-price listing has one or more sales, or less than 12 hours remain before the
 * listing is scheduled to end, you can not edit the values in the Listing Title, Primary Category, Secondary
 * Category, Listing Duration, and Listing Type fields for that listing. The same applies to an auction listing that
 * has at least one bid.
 * 
 * 
 * To revise a multiple-variation, fixed-price listing, the
 * ReviseFixedPriceItem
 * call should be used instead, as the
 * ReviseItem
 * call does not support variation-level edits.
 **/
class ReviseItemRequestType extends AbstractRequestType
{
    const TAG = 'ReviseItemRequest';
    const NAME = 'ReviseItemRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ReviseItem';

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var string[]|null
     */
    protected $DeletedField = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $VerifyOnly = null;


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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVerifyOnly()
    {
        return $this->_dc($this->VerifyOnly === 'true', 'VerifyOnly');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setVerifyOnly($value)
    {
        $this->VerifyOnly = self::_bool($value);
    }

    /**
     * @return ReviseItemResponseType|EbatNs_ResponseError
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
            'DeletedField' => ['cardinality' => '0..*'],
            'VerifyOnly' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseItemRequestType::_register();
