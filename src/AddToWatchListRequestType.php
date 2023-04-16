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
 * Adds one or more order line items to the eBay user's Watch List. An auction item or a single-variation,
 * fixed-price listing is identified with an
 * ItemID
 * value. To add a specific item variation to the Watch List from within a multi-variation, fixed-price listing,
 * the user will use the
 * VariationKey
 * container instead.
 **/
class AddToWatchListRequestType extends AbstractRequestType
{
    const TAG = 'AddToWatchListRequest';
    const NAME = 'AddToWatchListRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddToWatchList';

    /**
     * @var ItemIDType[]|null
     */
    protected $ItemID = [];

    /**
     * @var VariationKeyType[]|null
     */
    protected $VariationKey = [];


    /**
     * @return ItemIDType[]|ItemIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getItemID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ItemID
            : (count($this->ItemID) > $index
                ? $this->ItemID[$index]
                : null), 'ItemID');
    }

    /**
     * @param ItemIDType|null|ItemIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setItemID($value, $index = null)
    {
        if ($index === null) {
            $this->ItemID = $value;
        } else {
            $this->ItemID[$index] = [];
            
            foreach ($value as $item) {
                $this->addItemID($item);
            }
        }
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function addItemID($value)
    {
        $this->ItemID[] = $value;
    }

    /**
     * @return VariationKeyType[]|VariationKeyType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getVariationKey($index = null)
    {
        return $this->_dc($index === null
            ? $this->VariationKey
            : (count($this->VariationKey) > $index
                ? $this->VariationKey[$index]
                : null), 'VariationKey');
    }

    /**
     * @param VariationKeyType|null|VariationKeyType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setVariationKey($value, $index = null)
    {
        if ($index === null) {
            $this->VariationKey = $value;
        } else {
            $this->VariationKey[$index] = [];
            
            foreach ($value as $item) {
                $this->addVariationKey($item);
            }
        }
    }

    /**
     * @param VariationKeyType|null $value
     * @return void
     */
    public function addVariationKey($value)
    {
        $this->VariationKey[] = $value;
    }

    /**
     * @return AddToWatchListResponseType|EbatNs_ResponseError
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
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'VariationKey' => ['type' => 'VariationKeyType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddToWatchListRequestType::_register();
