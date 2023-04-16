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
 * Type defining the
 * AddItemRequestContainer
 * containers that are used in an
 * AddItems
 * call. An
 * AddItemRequestContainer
 * container is required for each item being created through an
 * AddItems
 * call. Each item being created through an
 * AddItems
 * call is identified through a unique
 * AddItemRequestContainer.MessageID
 * value that is defined by the seller.
 **/
class AddItemRequestContainerType extends EbatNs_ComplexType
{
    const TAG = 'AddItemRequestContainerType';
    const NAME = 'AddItemRequestContainerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var string|null
     */
    protected $MessageID = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageID()
    {
        return $this->_dc($this->MessageID, 'MessageID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageID($value)
    {
        $this->MessageID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'MessageID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddItemRequestContainerType::_register();
