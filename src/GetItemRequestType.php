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
 * The
 * GetItem
 * call returns listing data such as title, description, price information, user information, and so on, for the
 * specified
 * ItemID
 * .
 **/
class GetItemRequestType extends AbstractRequestType
{
    const TAG = 'GetItemRequest';
    const NAME = 'GetItemRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetItem';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeWatchCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeCrossPromotion = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeItemSpecifics = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeTaxTable = null;

    /**
     * @var SKUType|null
     */
    protected $SKU = null;

    /**
     * @var SKUType|null
     */
    protected $VariationSKU = null;

    /**
     * @var NameValueListArrayType|null
     */
    protected $VariationSpecifics = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeItemCompatibilityList = null;


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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeWatchCount()
    {
        return $this->_dc($this->IncludeWatchCount === 'true', 'IncludeWatchCount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeWatchCount($value)
    {
        $this->IncludeWatchCount = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeCrossPromotion()
    {
        return $this->_dc($this->IncludeCrossPromotion === 'true', 'IncludeCrossPromotion');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeCrossPromotion($value)
    {
        $this->IncludeCrossPromotion = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeItemSpecifics()
    {
        return $this->_dc($this->IncludeItemSpecifics === 'true', 'IncludeItemSpecifics');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeItemSpecifics($value)
    {
        $this->IncludeItemSpecifics = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeTaxTable()
    {
        return $this->_dc($this->IncludeTaxTable === 'true', 'IncludeTaxTable');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeTaxTable($value)
    {
        $this->IncludeTaxTable = self::_bool($value);
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
     * @return SKUType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationSKU()
    {
        return $this->_dc($this->VariationSKU, 'VariationSKU');
    }

    /**
     * @param SKUType|null $value
     * @return void
     */
    public function setVariationSKU($value)
    {
        $this->VariationSKU = $value;
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeItemCompatibilityList()
    {
        return $this->_dc($this->IncludeItemCompatibilityList === 'true', 'IncludeItemCompatibilityList');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeItemCompatibilityList($value)
    {
        $this->IncludeItemCompatibilityList = self::_bool($value);
    }

    /**
     * @return GetItemResponseType|EbatNs_ResponseError
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
            'IncludeWatchCount' => ['type' => 'bool'],
            'IncludeCrossPromotion' => ['type' => 'bool'],
            'IncludeItemSpecifics' => ['type' => 'bool'],
            'IncludeTaxTable' => ['type' => 'bool'],
            'SKU' => ['type' => 'SKUType', 'xmlns' => self::XMLNS],
            'VariationSKU' => ['type' => 'SKUType', 'xmlns' => self::XMLNS],
            'VariationSpecifics' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'IncludeItemCompatibilityList' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetItemRequestType::_register();
