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
 * AccountEntry
 * container returned in the
 * GetAccount
 * response. Each
 * AccountEntry
 * container consists of detailed information for a single credit or debit transaction, or an administrative action
 * which occurred on the eBay user's account.
 **/
class AccountEntryType extends EbatNs_ComplexType
{
    const TAG = 'AccountEntryType';
    const NAME = 'AccountEntryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AccountDetailEntryCodeType|null
     */
    protected $AccountDetailsEntryType = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var AmountType|null
     */
    protected $Balance = null;

    /**
     * @var string|null
     */
    protected $Date = null;

    /**
     * @var AmountType|null
     */
    protected $GrossDetailAmount = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $Memo = null;

    /**
     * @var AmountType|null
     */
    protected $ConversionRate = null;

    /**
     * @var AmountType|null
     */
    protected $NetDetailAmount = null;

    /**
     * @var string|null
     */
    protected $RefNumber = null;

    /**
     * @var float|null
     */
    protected $VATPercent = null;

    /**
     * @var string|null
     */
    protected $Title = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReceivedTopRatedDiscount = null;

    /**
     * @var string|null
     */
    protected $OrderId = null;

    /**
     * @var DiscountDetailType|null
     */
    protected $DiscountDetail = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Netted = null;


    /**
     * @return AccountDetailEntryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccountDetailsEntryType()
    {
        return $this->_dc($this->AccountDetailsEntryType);
    }

    /**
     * @param AccountDetailEntryCodeType|null $value
     * @return void
     */
    public function setAccountDetailsEntryType($value)
    {
        $this->AccountDetailsEntryType = $this->_enum($value, AccountDetailEntryCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBalance()
    {
        return $this->_dc($this->Balance, 'Balance');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setBalance($value)
    {
        $this->Balance = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDate()
    {
        return $this->_dc($this->Date, 'Date');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDate($value)
    {
        $this->Date = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGrossDetailAmount()
    {
        return $this->_dc($this->GrossDetailAmount, 'GrossDetailAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setGrossDetailAmount($value)
    {
        $this->GrossDetailAmount = $value;
    }

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
    public function getMemo()
    {
        return $this->_dc($this->Memo, 'Memo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMemo($value)
    {
        $this->Memo = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConversionRate()
    {
        return $this->_dc($this->ConversionRate, 'ConversionRate');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConversionRate($value)
    {
        $this->ConversionRate = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNetDetailAmount()
    {
        return $this->_dc($this->NetDetailAmount, 'NetDetailAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setNetDetailAmount($value)
    {
        $this->NetDetailAmount = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefNumber()
    {
        return $this->_dc($this->RefNumber, 'RefNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefNumber($value)
    {
        $this->RefNumber = self::_string($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATPercent()
    {
        return $this->_dc($this->VATPercent, 'VATPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setVATPercent($value)
    {
        $this->VATPercent = self::_float($value);
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
    public function getReceivedTopRatedDiscount()
    {
        return $this->_dc($this->ReceivedTopRatedDiscount === 'true', 'ReceivedTopRatedDiscount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReceivedTopRatedDiscount($value)
    {
        $this->ReceivedTopRatedDiscount = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderId()
    {
        return $this->_dc($this->OrderId, 'OrderId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderId($value)
    {
        $this->OrderId = self::_string($value);
    }

    /**
     * @return DiscountDetailType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountDetail()
    {
        return $this->_dc($this->DiscountDetail, 'DiscountDetail');
    }

    /**
     * @param DiscountDetailType|null $value
     * @return void
     */
    public function setDiscountDetail($value)
    {
        $this->DiscountDetail = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNetted()
    {
        return $this->_dc($this->Netted === 'true', 'Netted');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setNetted($value)
    {
        $this->Netted = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AccountDetailsEntryType' => ['type' => 'AccountDetailEntryCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Description' => [],
            'Balance' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Date' => [],
            'GrossDetailAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'Memo' => [],
            'ConversionRate' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'NetDetailAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'RefNumber' => [],
            'VATPercent' => ['type' => 'float'],
            'Title' => [],
            'OrderLineItemID' => [],
            'TransactionID' => [],
            'ReceivedTopRatedDiscount' => ['type' => 'bool'],
            'OrderId' => [],
            'DiscountDetail' => ['type' => 'DiscountDetailType', 'xmlns' => self::XMLNS],
            'Netted' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AccountEntryType::_register();
