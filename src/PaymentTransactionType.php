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
 * This type contains details about the allocation of funds to one payee from a buyer payment for a specified order.
 **/
class PaymentTransactionType extends EbatNs_ComplexType
{
    const TAG = 'PaymentTransactionType';
    const NAME = 'PaymentTransactionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaymentTransactionStatusCodeType|null
     */
    protected $PaymentStatus = null;

    /**
     * @var UserIdentityType|null
     */
    protected $Payer = null;

    /**
     * @var UserIdentityType|null
     */
    protected $Payee = null;

    /**
     * @var string|null
     */
    protected $PaymentTime = null;

    /**
     * @var AmountType|null
     */
    protected $PaymentAmount = null;

    /**
     * @var TransactionReferenceType|null
     */
    protected $ReferenceID = null;

    /**
     * @var AmountType|null
     */
    protected $FeeOrCreditAmount = null;

    /**
     * @var TransactionReferenceType[]|null
     */
    protected $PaymentReferenceID = [];


    /**
     * @return PaymentTransactionStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentStatus()
    {
        return $this->_dc($this->PaymentStatus);
    }

    /**
     * @param PaymentTransactionStatusCodeType|null $value
     * @return void
     */
    public function setPaymentStatus($value)
    {
        $this->PaymentStatus = $this->_enum($value, PaymentTransactionStatusCodeType::class);
    }

    /**
     * @return UserIdentityType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayer()
    {
        return $this->_dc($this->Payer, 'Payer');
    }

    /**
     * @param UserIdentityType|null $value
     * @return void
     */
    public function setPayer($value)
    {
        $this->Payer = $value;
    }

    /**
     * @return UserIdentityType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayee()
    {
        return $this->_dc($this->Payee, 'Payee');
    }

    /**
     * @param UserIdentityType|null $value
     * @return void
     */
    public function setPayee($value)
    {
        $this->Payee = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentTime()
    {
        return $this->_dc($this->PaymentTime, 'PaymentTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPaymentTime($value)
    {
        $this->PaymentTime = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentAmount()
    {
        return $this->_dc($this->PaymentAmount, 'PaymentAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setPaymentAmount($value)
    {
        $this->PaymentAmount = $value;
    }

    /**
     * @return TransactionReferenceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReferenceID()
    {
        return $this->_dc($this->ReferenceID, 'ReferenceID');
    }

    /**
     * @param TransactionReferenceType|null $value
     * @return void
     */
    public function setReferenceID($value)
    {
        $this->ReferenceID = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeeOrCreditAmount()
    {
        return $this->_dc($this->FeeOrCreditAmount, 'FeeOrCreditAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setFeeOrCreditAmount($value)
    {
        $this->FeeOrCreditAmount = $value;
    }

    /**
     * @return TransactionReferenceType[]|TransactionReferenceType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPaymentReferenceID($index = null)
    {
        return $this->_dc($index === null
            ? $this->PaymentReferenceID
            : (count($this->PaymentReferenceID) > $index
                ? $this->PaymentReferenceID[$index]
                : null), 'PaymentReferenceID');
    }

    /**
     * @param TransactionReferenceType|null|TransactionReferenceType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPaymentReferenceID($value, $index = null)
    {
        if ($index === null) {
            $this->PaymentReferenceID = $value;
        } else {
            $this->PaymentReferenceID[$index] = [];
            
            foreach ($value as $item) {
                $this->addPaymentReferenceID($item);
            }
        }
    }

    /**
     * @param TransactionReferenceType|null $value
     * @return void
     */
    public function addPaymentReferenceID($value)
    {
        $this->PaymentReferenceID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PaymentStatus' => ['type' => 'PaymentTransactionStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Payer' => ['type' => 'UserIdentityType', 'xmlns' => self::XMLNS],
            'Payee' => ['type' => 'UserIdentityType', 'xmlns' => self::XMLNS],
            'PaymentTime' => [],
            'PaymentAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ReferenceID' => ['type' => 'TransactionReferenceType', 'xmlns' => self::XMLNS],
            'FeeOrCreditAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PaymentReferenceID' => ['type' => 'TransactionReferenceType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PaymentTransactionType::_register();
