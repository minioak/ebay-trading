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
 * Contains the order status, e.g. the buyer's online payment and whether the checkout process for the order is
 * complete.
 **/
class TransactionStatusType extends EbatNs_ComplexType
{
    const TAG = 'TransactionStatusType';
    const NAME = 'TransactionStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaymentStatusCodeType|null
     */
    protected $eBayPaymentStatus = null;

    /**
     * @var CheckoutStatusCodeType|null
     */
    protected $CheckoutStatus = null;

    /**
     * @var string|null
     */
    protected $LastTimeModified = null;

    /**
     * @var BuyerPaymentMethodCodeType|null
     */
    protected $PaymentMethodUsed = null;

    /**
     * @var CompleteStatusCodeType|null
     */
    protected $CompleteStatus = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BuyerSelectedShipping = null;

    /**
     * @var PaymentHoldStatusCodeType|null
     */
    protected $PaymentHoldStatus = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IntegratedMerchantCreditCardEnabled = null;

    /**
     * @var EBayPaymentMismatchDetailsType|null
     */
    protected $eBayPaymentMismatchDetails = null;

    /**
     * @var InquiryStatusCodeType|null
     */
    protected $InquiryStatus = null;

    /**
     * @var ReturnStatusCodeType|null
     */
    protected $ReturnStatus = null;

    /**
     * @var BuyerPaymentInstrumentCodeType|null
     */
    protected $PaymentInstrument = null;

    /**
     * @var DigitalStatusCodeType|null
     */
    protected $DigitalStatus = null;

    /**
     * @var CancelStatusCodeType|null
     */
    protected $CancelStatus = null;


    /**
     * @return PaymentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayPaymentStatus()
    {
        return $this->_dc($this->eBayPaymentStatus);
    }

    /**
     * @param PaymentStatusCodeType|null $value
     * @return void
     */
    public function setEBayPaymentStatus($value)
    {
        $this->eBayPaymentStatus = $this->_enum($value, PaymentStatusCodeType::class);
    }

    /**
     * @return CheckoutStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCheckoutStatus()
    {
        return $this->_dc($this->CheckoutStatus);
    }

    /**
     * @param CheckoutStatusCodeType|null $value
     * @return void
     */
    public function setCheckoutStatus($value)
    {
        $this->CheckoutStatus = $this->_enum($value, CheckoutStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastTimeModified()
    {
        return $this->_dc($this->LastTimeModified, 'LastTimeModified');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastTimeModified($value)
    {
        $this->LastTimeModified = self::_string($value);
    }

    /**
     * @return BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentMethodUsed()
    {
        return $this->_dc($this->PaymentMethodUsed);
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
     * @return void
     */
    public function setPaymentMethodUsed($value)
    {
        $this->PaymentMethodUsed = $this->_enum($value, BuyerPaymentMethodCodeType::class);
    }

    /**
     * @return CompleteStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCompleteStatus()
    {
        return $this->_dc($this->CompleteStatus);
    }

    /**
     * @param CompleteStatusCodeType|null $value
     * @return void
     */
    public function setCompleteStatus($value)
    {
        $this->CompleteStatus = $this->_enum($value, CompleteStatusCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerSelectedShipping()
    {
        return $this->_dc($this->BuyerSelectedShipping === 'true', 'BuyerSelectedShipping');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBuyerSelectedShipping($value)
    {
        $this->BuyerSelectedShipping = self::_bool($value);
    }

    /**
     * @return PaymentHoldStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentHoldStatus()
    {
        return $this->_dc($this->PaymentHoldStatus);
    }

    /**
     * @param PaymentHoldStatusCodeType|null $value
     * @return void
     */
    public function setPaymentHoldStatus($value)
    {
        $this->PaymentHoldStatus = $this->_enum($value, PaymentHoldStatusCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->_dc($this->IntegratedMerchantCreditCardEnabled === 'true', 'IntegratedMerchantCreditCardEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIntegratedMerchantCreditCardEnabled($value)
    {
        $this->IntegratedMerchantCreditCardEnabled = self::_bool($value);
    }

    /**
     * @return EBayPaymentMismatchDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayPaymentMismatchDetails()
    {
        return $this->_dc($this->eBayPaymentMismatchDetails, 'eBayPaymentMismatchDetails');
    }

    /**
     * @param EBayPaymentMismatchDetailsType|null $value
     * @return void
     */
    public function setEBayPaymentMismatchDetails($value)
    {
        $this->eBayPaymentMismatchDetails = $value;
    }

    /**
     * @return InquiryStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInquiryStatus()
    {
        return $this->_dc($this->InquiryStatus);
    }

    /**
     * @param InquiryStatusCodeType|null $value
     * @return void
     */
    public function setInquiryStatus($value)
    {
        $this->InquiryStatus = $this->_enum($value, InquiryStatusCodeType::class);
    }

    /**
     * @return ReturnStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnStatus()
    {
        return $this->_dc($this->ReturnStatus);
    }

    /**
     * @param ReturnStatusCodeType|null $value
     * @return void
     */
    public function setReturnStatus($value)
    {
        $this->ReturnStatus = $this->_enum($value, ReturnStatusCodeType::class);
    }

    /**
     * @return BuyerPaymentInstrumentCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentInstrument()
    {
        return $this->_dc($this->PaymentInstrument);
    }

    /**
     * @param BuyerPaymentInstrumentCodeType|null $value
     * @return void
     */
    public function setPaymentInstrument($value)
    {
        $this->PaymentInstrument = $this->_enum($value, BuyerPaymentInstrumentCodeType::class);
    }

    /**
     * @return DigitalStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDigitalStatus()
    {
        return $this->_dc($this->DigitalStatus);
    }

    /**
     * @param DigitalStatusCodeType|null $value
     * @return void
     */
    public function setDigitalStatus($value)
    {
        $this->DigitalStatus = $this->_enum($value, DigitalStatusCodeType::class);
    }

    /**
     * @return CancelStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCancelStatus()
    {
        return $this->_dc($this->CancelStatus);
    }

    /**
     * @param CancelStatusCodeType|null $value
     * @return void
     */
    public function setCancelStatus($value)
    {
        $this->CancelStatus = $this->_enum($value, CancelStatusCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'eBayPaymentStatus' => ['type' => 'PaymentStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CheckoutStatus' => ['type' => 'CheckoutStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'LastTimeModified' => [],
            'PaymentMethodUsed' => ['type' => 'BuyerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CompleteStatus' => ['type' => 'CompleteStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BuyerSelectedShipping' => ['type' => 'bool'],
            'PaymentHoldStatus' => ['type' => 'PaymentHoldStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'IntegratedMerchantCreditCardEnabled' => ['type' => 'bool'],
            'eBayPaymentMismatchDetails' => ['type' => 'EBayPaymentMismatchDetailsType', 'xmlns' => self::XMLNS],
            'InquiryStatus' => ['type' => 'InquiryStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ReturnStatus' => ['type' => 'ReturnStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PaymentInstrument' => ['type' => 'BuyerPaymentInstrumentCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DigitalStatus' => ['type' => 'DigitalStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CancelStatus' => ['type' => 'CancelStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TransactionStatusType::_register();
