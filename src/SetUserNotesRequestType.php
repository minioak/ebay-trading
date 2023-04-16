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
 * Enables users to add, modify, or delete a pinned note for any item that is being tracked in the My eBay All
 * Selling and All Buying areas.
 **/
class SetUserNotesRequestType extends AbstractRequestType
{
    const TAG = 'SetUserNotesRequest';
    const NAME = 'SetUserNotesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetUserNotes';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var SetUserNotesActionCodeType|null
     */
    protected $Action = null;

    /**
     * @var string|null
     */
    protected $NoteText = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var NameValueListArrayType|null
     */
    protected $VariationSpecifics = null;

    /**
     * @var SKUType|null
     */
    protected $SKU = null;

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
     * @return SetUserNotesActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAction()
    {
        return $this->_dc($this->Action);
    }

    /**
     * @param SetUserNotesActionCodeType|null $value
     * @return void
     */
    public function setAction($value)
    {
        $this->Action = $this->_enum($value, SetUserNotesActionCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNoteText()
    {
        return $this->_dc($this->NoteText, 'NoteText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNoteText($value)
    {
        $this->NoteText = self::_string($value);
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
     * @return NameValueListArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationSpecifics()
    {
        return $this->_dc($this->VariationSpecifics, 'VariationSpecifics');
    }

    /**
     * @param NameValueListArrayType|null $value
     * @return void
     */
    public function setVariationSpecifics($value)
    {
        $this->VariationSpecifics = $value;
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
     * @return SetUserNotesResponseType|EbatNs_ResponseError
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
            'Action' => ['type' => 'SetUserNotesActionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NoteText' => [],
            'TransactionID' => [],
            'VariationSpecifics' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS],
            'SKU' => ['type' => 'SKUType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetUserNotesRequestType::_register();
