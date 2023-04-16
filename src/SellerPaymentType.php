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
 * <span class="tablenote">
 * Note:
 * This type is deprecated since it was only applicable to the Half.com, and the Half.com site was shut down.
 * </span>
 **/
class SellerPaymentType extends EbatNs_ComplexType
{
    const TAG = 'SellerPaymentType';
    const NAME = 'SellerPaymentType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var OrderIDType|null
     */
    protected $OrderID = null;

    /**
     * @var string|null
     */
    protected $SellerInventoryID = null;

    /**
     * @var string|null
     */
    protected $PrivateNotes = null;

    /**
     * @var string|null
     */
    protected $Title = null;

    /**
     * @var PaymentTypeCodeType|null
     */
    protected $PaymentType = null;

    /**
     * @var AmountType|null
     */
    protected $TransactionPrice = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingReimbursement = null;

    /**
     * @var AmountType|null
     */
    protected $Commission = null;

    /**
     * @var AmountType|null
     */
    protected $AmountPaid = null;

    /**
     * @var string|null
     */
    protected $PaidTime = null;

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
     * @return OrderIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderID()
    {
        return $this->_dc($this->OrderID, 'OrderID');
    }

    /**
     * @param OrderIDType|null $value
     * @return void
     */
    public function setOrderID($value)
    {
        $this->OrderID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerInventoryID()
    {
        return $this->_dc($this->SellerInventoryID, 'SellerInventoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerInventoryID($value)
    {
        $this->SellerInventoryID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrivateNotes()
    {
        return $this->_dc($this->PrivateNotes, 'PrivateNotes');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPrivateNotes($value)
    {
        $this->PrivateNotes = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitle()
    {
        return $this->_dc($this->Title, 'Title');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTitle($value)
    {
        $this->Title = self::_string($value);
    }

    /**
     * @return PaymentTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentType()
    {
        return $this->_dc($this->PaymentType);
    }

    /**
     * @param PaymentTypeCodeType|null $value
     * @return void
     */
    public function setPaymentType($value)
    {
        $this->PaymentType = $this->_enum($value, PaymentTypeCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionPrice()
    {
        return $this->_dc($this->TransactionPrice, 'TransactionPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTransactionPrice($value)
    {
        $this->TransactionPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingReimbursement()
    {
        return $this->_dc($this->ShippingReimbursement, 'ShippingReimbursement');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingReimbursement($value)
    {
        $this->ShippingReimbursement = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCommission()
    {
        return $this->_dc($this->Commission, 'Commission');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCommission($value)
    {
        $this->Commission = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAmountPaid()
    {
        return $this->_dc($this->AmountPaid, 'AmountPaid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAmountPaid($value)
    {
        $this->AmountPaid = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaidTime()
    {
        return $this->_dc($this->PaidTime, 'PaidTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPaidTime($value)
    {
        $this->PaidTime = self::_string($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'OrderID' => ['type' => 'OrderIDType', 'xmlns' => self::XMLNS],
            'SellerInventoryID' => [],
            'PrivateNotes' => [],
            'Title' => [],
            'PaymentType' => ['type' => 'PaymentTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'TransactionPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingReimbursement' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Commission' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'AmountPaid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PaidTime' => [],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerPaymentType::_register();
