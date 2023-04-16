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
 * Summary data for the requesting user's seller account as a whole. This includes a
 * balance for the account, any past due amount and date, and defining data for
 * additional accounts (if the user has changed country of residency while having an
 * active eBay account).
 **/
class AccountSummaryType extends EbatNs_ComplexType
{
    const TAG = 'AccountSummaryType';
    const NAME = 'AccountSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AccountStateCodeType|null
     */
    protected $AccountState = null;

    /**
     * @var AmountType|null
     */
    protected $InvoicePayment = null;

    /**
     * @var AmountType|null
     */
    protected $InvoiceCredit = null;

    /**
     * @var AmountType|null
     */
    protected $InvoiceNewFee = null;

    /**
     * @var AdditionalAccountType[]|null
     */
    protected $AdditionalAccount = [];

    /**
     * @var AmountType|null
     */
    protected $AmountPastDue = null;

    /**
     * @var string|null
     */
    protected $BankAccountInfo = null;

    /**
     * @var string|null
     */
    protected $BankModifyDate = null;

    /**
     * @var int|null
     */
    protected $BillingCycleDate = null;

    /**
     * @var string|null
     */
    protected $CreditCardExpiration = null;

    /**
     * @var string|null
     */
    protected $CreditCardInfo = null;

    /**
     * @var string|null
     */
    protected $CreditCardModifyDate = null;

    /**
     * @var AmountType|null
     */
    protected $CurrentBalance = null;

    /**
     * @var string|null
     */
    protected $Email = null;

    /**
     * @var AmountType|null
     */
    protected $InvoiceBalance = null;

    /**
     * @var string|null
     */
    protected $InvoiceDate = null;

    /**
     * @var AmountType|null
     */
    protected $LastAmountPaid = null;

    /**
     * @var string|null
     */
    protected $LastPaymentDate = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PastDue = null;

    /**
     * @var SellerPaymentMethodCodeType|null
     */
    protected $PaymentMethod = null;

    /**
     * @var NettedTransactionSummaryType|null
     */
    protected $NettedTransactionSummary = null;


    /**
     * @return AccountStateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccountState()
    {
        return $this->_dc($this->AccountState);
    }

    /**
     * @param AccountStateCodeType|null $value
     * @return void
     */
    public function setAccountState($value)
    {
        $this->AccountState = $this->_enum($value, AccountStateCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvoicePayment()
    {
        return $this->_dc($this->InvoicePayment, 'InvoicePayment');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setInvoicePayment($value)
    {
        $this->InvoicePayment = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvoiceCredit()
    {
        return $this->_dc($this->InvoiceCredit, 'InvoiceCredit');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setInvoiceCredit($value)
    {
        $this->InvoiceCredit = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvoiceNewFee()
    {
        return $this->_dc($this->InvoiceNewFee, 'InvoiceNewFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setInvoiceNewFee($value)
    {
        $this->InvoiceNewFee = $value;
    }

    /**
     * @return AdditionalAccountType[]|AdditionalAccountType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAdditionalAccount($index = null)
    {
        return $this->_dc($index === null
            ? $this->AdditionalAccount
            : (count($this->AdditionalAccount) > $index
                ? $this->AdditionalAccount[$index]
                : null), 'AdditionalAccount');
    }

    /**
     * @param AdditionalAccountType|null|AdditionalAccountType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAdditionalAccount($value, $index = null)
    {
        if ($index === null) {
            $this->AdditionalAccount = $value;
        } else {
            $this->AdditionalAccount[$index] = [];
            
            foreach ($value as $item) {
                $this->addAdditionalAccount($item);
            }
        }
    }

    /**
     * @param AdditionalAccountType|null $value
     * @return void
     */
    public function addAdditionalAccount($value)
    {
        $this->AdditionalAccount[] = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAmountPastDue()
    {
        return $this->_dc($this->AmountPastDue, 'AmountPastDue');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAmountPastDue($value)
    {
        $this->AmountPastDue = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBankAccountInfo()
    {
        return $this->_dc($this->BankAccountInfo, 'BankAccountInfo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBankAccountInfo($value)
    {
        $this->BankAccountInfo = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBankModifyDate()
    {
        return $this->_dc($this->BankModifyDate, 'BankModifyDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBankModifyDate($value)
    {
        $this->BankModifyDate = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBillingCycleDate()
    {
        return $this->_dc($this->BillingCycleDate, 'BillingCycleDate');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBillingCycleDate($value)
    {
        $this->BillingCycleDate = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreditCardExpiration()
    {
        return $this->_dc($this->CreditCardExpiration, 'CreditCardExpiration');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreditCardExpiration($value)
    {
        $this->CreditCardExpiration = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreditCardInfo()
    {
        return $this->_dc($this->CreditCardInfo, 'CreditCardInfo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreditCardInfo($value)
    {
        $this->CreditCardInfo = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreditCardModifyDate()
    {
        return $this->_dc($this->CreditCardModifyDate, 'CreditCardModifyDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreditCardModifyDate($value)
    {
        $this->CreditCardModifyDate = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrentBalance()
    {
        return $this->_dc($this->CurrentBalance, 'CurrentBalance');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCurrentBalance($value)
    {
        $this->CurrentBalance = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmail()
    {
        return $this->_dc($this->Email, 'Email');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEmail($value)
    {
        $this->Email = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvoiceBalance()
    {
        return $this->_dc($this->InvoiceBalance, 'InvoiceBalance');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setInvoiceBalance($value)
    {
        $this->InvoiceBalance = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvoiceDate()
    {
        return $this->_dc($this->InvoiceDate, 'InvoiceDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInvoiceDate($value)
    {
        $this->InvoiceDate = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastAmountPaid()
    {
        return $this->_dc($this->LastAmountPaid, 'LastAmountPaid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setLastAmountPaid($value)
    {
        $this->LastAmountPaid = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastPaymentDate()
    {
        return $this->_dc($this->LastPaymentDate, 'LastPaymentDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastPaymentDate($value)
    {
        $this->LastPaymentDate = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPastDue()
    {
        return $this->_dc($this->PastDue === 'true', 'PastDue');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPastDue($value)
    {
        $this->PastDue = self::_bool($value);
    }

    /**
     * @return SellerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentMethod()
    {
        return $this->_dc($this->PaymentMethod);
    }

    /**
     * @param SellerPaymentMethodCodeType|null $value
     * @return void
     */
    public function setPaymentMethod($value)
    {
        $this->PaymentMethod = $this->_enum($value, SellerPaymentMethodCodeType::class);
    }

    /**
     * @return NettedTransactionSummaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNettedTransactionSummary()
    {
        return $this->_dc($this->NettedTransactionSummary, 'NettedTransactionSummary');
    }

    /**
     * @param NettedTransactionSummaryType|null $value
     * @return void
     */
    public function setNettedTransactionSummary($value)
    {
        $this->NettedTransactionSummary = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AccountState' => ['type' => 'AccountStateCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InvoicePayment' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'InvoiceCredit' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'InvoiceNewFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'AdditionalAccount' => ['type' => 'AdditionalAccountType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'AmountPastDue' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'BankAccountInfo' => [],
            'BankModifyDate' => [],
            'BillingCycleDate' => ['type' => 'int'],
            'CreditCardExpiration' => [],
            'CreditCardInfo' => [],
            'CreditCardModifyDate' => [],
            'CurrentBalance' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Email' => [],
            'InvoiceBalance' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'InvoiceDate' => [],
            'LastAmountPaid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'LastPaymentDate' => [],
            'PastDue' => ['type' => 'bool'],
            'PaymentMethod' => ['type' => 'SellerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NettedTransactionSummary' => ['type' => 'NettedTransactionSummaryType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AccountSummaryType::_register();
