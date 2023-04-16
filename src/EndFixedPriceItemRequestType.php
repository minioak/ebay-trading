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
 * Ends the specified fixed-price listing before the date and time at which
 * it would normally end (per the listing duration).
 **/
class EndFixedPriceItemRequestType extends AbstractRequestType
{
    const TAG = 'EndFixedPriceItemRequest';
    const NAME = 'EndFixedPriceItemRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'EndFixedPriceItem';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var EndReasonCodeType|null
     */
    protected $EndingReason = null;

    /**
     * @var SKUType|null
     */
    protected $SKU = null;


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
     * @return EndReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndingReason()
    {
        return $this->_dc($this->EndingReason);
    }

    /**
     * @param EndReasonCodeType|null $value
     * @return void
     */
    public function setEndingReason($value)
    {
        $this->EndingReason = $this->_enum($value, EndReasonCodeType::class);
    }

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
     * @return EndFixedPriceItemResponseType|EbatNs_ResponseError
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
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'EndingReason' => ['type' => 'EndReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SKU' => ['type' => 'SKUType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

EndFixedPriceItemRequestType::_register();
