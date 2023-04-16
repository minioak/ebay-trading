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
 * Enables a seller to perform various tasks with a single or multiple line item order. Tasks available with this
 * call include marking the order as paid, marking the order as shipped, providing shipment tracking details to the
 * buyer, and leaving feedback for the buyer.
 **/
class CompleteSaleRequestType extends AbstractRequestType
{
    const TAG = 'CompleteSaleRequest';
    const NAME = 'CompleteSaleRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'CompleteSale';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var FeedbackInfoType|null
     */
    protected $FeedbackInfo = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Shipped = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Paid = null;

    /**
     * @var ListingTypeCodeType|null
     */
    protected $ListingType = null;

    /**
     * @var ShipmentType|null
     */
    protected $Shipment = null;

    /**
     * @var string|null
     */
    protected $OrderID = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
    }

    /**
     * @return FeedbackInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackInfo()
    {
        return $this->_dc($this->FeedbackInfo, 'FeedbackInfo');
    }

    /**
     * @param FeedbackInfoType|null $value
     * @return void
     */
    public function setFeedbackInfo($value)
    {
        $this->FeedbackInfo = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipped()
    {
        return $this->_dc($this->Shipped === 'true', 'Shipped');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShipped($value)
    {
        $this->Shipped = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaid()
    {
        return $this->_dc($this->Paid === 'true', 'Paid');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPaid($value)
    {
        $this->Paid = self::_bool($value);
    }

    /**
     * @return ListingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingType()
    {
        return $this->_dc($this->ListingType);
    }

    /**
     * @param ListingTypeCodeType|null $value
     * @return void
     */
    public function setListingType($value)
    {
        $this->ListingType = $this->_enum($value, ListingTypeCodeType::class);
    }

    /**
     * @return ShipmentType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipment()
    {
        return $this->_dc($this->Shipment, 'Shipment');
    }

    /**
     * @param ShipmentType|null $value
     * @return void
     */
    public function setShipment($value)
    {
        $this->Shipment = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderID()
    {
        return $this->_dc($this->OrderID, 'OrderID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderID($value)
    {
        $this->OrderID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderLineItemID()
    {
        return $this->_dc($this->OrderLineItemID, 'OrderLineItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderLineItemID($value)
    {
        $this->OrderLineItemID = self::_string($value);
    }

    /**
     * @return CompleteSaleResponseType|EbatNs_ResponseError
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
            'TransactionID' => [],
            'FeedbackInfo' => ['type' => 'FeedbackInfoType', 'xmlns' => self::XMLNS],
            'Shipped' => ['type' => 'bool'],
            'Paid' => ['type' => 'bool'],
            'ListingType' => ['type' => 'ListingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Shipment' => ['type' => 'ShipmentType', 'xmlns' => self::XMLNS],
            'OrderID' => [],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CompleteSaleRequestType::_register();
