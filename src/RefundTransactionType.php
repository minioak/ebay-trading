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
 * This type is deprecated.
 **/
class RefundTransactionType extends EbatNs_ComplexType
{
    const TAG = 'RefundTransactionType';
    const NAME = 'RefundTransactionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $OrderID = null;

    /**
     * @var string|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var RefundLineArrayType|null
     */
    protected $RefundLineArray = null;


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
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = self::_string($value);
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
     * @return RefundLineArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundLineArray()
    {
        return $this->_dc($this->RefundLineArray, 'RefundLineArray');
    }

    /**
     * @param RefundLineArrayType|null $value
     * @return void
     */
    public function setRefundLineArray($value)
    {
        $this->RefundLineArray = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'OrderID' => [],
            'ItemID' => [],
            'TransactionID' => [],
            'RefundLineArray' => ['type' => 'RefundLineArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RefundTransactionType::_register();
