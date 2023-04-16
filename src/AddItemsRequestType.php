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
 * Base request type for the
 * AddItems
 * call, which is used to create one to five fixed-price, auction, or classified ad listings. The
 * AddItems
 * call does not support multiple-variation listings, so multiple-variation listings cannot be created with this
 * call.
 **/
class AddItemsRequestType extends AbstractRequestType
{
    const TAG = 'AddItemsRequest';
    const NAME = 'AddItemsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddItems';

    /**
     * @var AddItemRequestContainerType[]|null
     */
    protected $AddItemRequestContainer = [];


    /**
     * @return AddItemRequestContainerType[]|AddItemRequestContainerType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAddItemRequestContainer($index = null)
    {
        return $this->_dc($index === null
            ? $this->AddItemRequestContainer
            : (count($this->AddItemRequestContainer) > $index
                ? $this->AddItemRequestContainer[$index]
                : null), 'AddItemRequestContainer');
    }

    /**
     * @param AddItemRequestContainerType|null|AddItemRequestContainerType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAddItemRequestContainer($value, $index = null)
    {
        if ($index === null) {
            $this->AddItemRequestContainer = $value;
        } else {
            $this->AddItemRequestContainer[$index] = [];
            
            foreach ($value as $item) {
                $this->addAddItemRequestContainer($item);
            }
        }
    }

    /**
     * @param AddItemRequestContainerType|null $value
     * @return void
     */
    public function addAddItemRequestContainer($value)
    {
        $this->AddItemRequestContainer[] = $value;
    }

    /**
     * @return AddItemsResponseType|EbatNs_ResponseError
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
        self::assignElements(['AddItemRequestContainer' => ['type' => 'AddItemRequestContainerType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

AddItemsRequestType::_register();
