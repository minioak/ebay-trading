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
 * This call enables a seller to send an order invoice to a buyer. Optionally, and when applicable, this call can
 * also be used to update the shipping service options available for shipment, to provide payment or checkout
 * instructions to the buyer, to make a cost adjustment for the order/order line item, or to provide one or more
 * offline payment methods (for orders where offline payment is an option).
 **/
class SendInvoiceRequestType extends AbstractRequestType
{
    const TAG = 'SendInvoiceRequest';
    const NAME = 'SendInvoiceRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SendInvoice';

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
     * @var InternationalShippingServiceOptionsType[]|null
     */
    protected $InternationalShippingServiceOptions = [];

    /**
     * @var ShippingServiceOptionsType[]|null
     */
    protected $ShippingServiceOptions = [];

    /**
     * @var SalesTaxType|null
     */
    protected $SalesTax = null;

    /**
     * @var InsuranceOptionCodeType|null
     */
    protected $InsuranceOption = null;

    /**
     * @var AmountType|null
     */
    protected $InsuranceFee = null;

    /**
     * @var BuyerPaymentMethodCodeType[]|null
     */
    protected $PaymentMethods = [];

    /**
     * @var string|null
     */
    protected $PayPalEmailAddress = null;

    /**
     * @var string|null
     */
    protected $CheckoutInstructions = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EmailCopyToSeller = null;

    /**
     * @var AmountType|null
     */
    protected $CODCost = null;

    /**
     * @var SKUType|null
     */
    protected $SKU = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;

    /**
     * @var AmountType|null
     */
    protected $AdjustmentAmount = null;


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
     * @return InternationalShippingServiceOptionsType[]|InternationalShippingServiceOptionsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getInternationalShippingServiceOptions($index = null)
    {
        return $this->_dc($index === null
            ? $this->InternationalShippingServiceOptions
            : (count($this->InternationalShippingServiceOptions) > $index
                ? $this->InternationalShippingServiceOptions[$index]
                : null), 'InternationalShippingServiceOptions');
    }

    /**
     * @param InternationalShippingServiceOptionsType|null|InternationalShippingServiceOptionsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setInternationalShippingServiceOptions($value, $index = null)
    {
        if ($index === null) {
            $this->InternationalShippingServiceOptions = $value;
        } else {
            $this->InternationalShippingServiceOptions[$index] = [];
            
            foreach ($value as $item) {
                $this->addInternationalShippingServiceOptions($item);
            }
        }
    }

    /**
     * @param InternationalShippingServiceOptionsType|null $value
     * @return void
     */
    public function addInternationalShippingServiceOptions($value)
    {
        $this->InternationalShippingServiceOptions[] = $value;
    }

    /**
     * @return ShippingServiceOptionsType[]|ShippingServiceOptionsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingServiceOptions($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingServiceOptions
            : (count($this->ShippingServiceOptions) > $index
                ? $this->ShippingServiceOptions[$index]
                : null), 'ShippingServiceOptions');
    }

    /**
     * @param ShippingServiceOptionsType|null|ShippingServiceOptionsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingServiceOptions($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingServiceOptions = $value;
        } else {
            $this->ShippingServiceOptions[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingServiceOptions($item);
            }
        }
    }

    /**
     * @param ShippingServiceOptionsType|null $value
     * @return void
     */
    public function addShippingServiceOptions($value)
    {
        $this->ShippingServiceOptions[] = $value;
    }

    /**
     * @return SalesTaxType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSalesTax()
    {
        return $this->_dc($this->SalesTax, 'SalesTax');
    }

    /**
     * @param SalesTaxType|null $value
     * @return void
     */
    public function setSalesTax($value)
    {
        $this->SalesTax = $value;
    }

    /**
     * @return InsuranceOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInsuranceOption()
    {
        return $this->_dc($this->InsuranceOption);
    }

    /**
     * @param InsuranceOptionCodeType|null $value
     * @return void
     */
    public function setInsuranceOption($value)
    {
        $this->InsuranceOption = $this->_enum($value, InsuranceOptionCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInsuranceFee()
    {
        return $this->_dc($this->InsuranceFee, 'InsuranceFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setInsuranceFee($value)
    {
        $this->InsuranceFee = $value;
    }

    /**
     * @return string[]|BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPaymentMethods($index = null)
    {
        return $this->_dc($index === null
            ? $this->PaymentMethods
            : (count($this->PaymentMethods) > $index
                ? $this->PaymentMethods[$index]
                : null));
    }

    /**
     * @param BuyerPaymentMethodCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPaymentMethods($value, $index = null)
    {
        if ($index === null) {
            $this->PaymentMethods = $value;
        } else {
            $this->PaymentMethods[$index] = [];
            
            foreach ($value as $item) {
                $this->addPaymentMethods($item);
            }
        }
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
     * @return void
     */
    public function addPaymentMethods($value)
    {
        $this->PaymentMethods[] = $this->_enum($value, BuyerPaymentMethodCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalEmailAddress()
    {
        return $this->_dc($this->PayPalEmailAddress, 'PayPalEmailAddress');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPayPalEmailAddress($value)
    {
        $this->PayPalEmailAddress = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCheckoutInstructions()
    {
        return $this->_dc($this->CheckoutInstructions, 'CheckoutInstructions');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCheckoutInstructions($value)
    {
        $this->CheckoutInstructions = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmailCopyToSeller()
    {
        return $this->_dc($this->EmailCopyToSeller === 'true', 'EmailCopyToSeller');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEmailCopyToSeller($value)
    {
        $this->EmailCopyToSeller = self::_bool($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCODCost()
    {
        return $this->_dc($this->CODCost, 'CODCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCODCost($value)
    {
        $this->CODCost = $value;
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdjustmentAmount()
    {
        return $this->_dc($this->AdjustmentAmount, 'AdjustmentAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAdjustmentAmount($value)
    {
        $this->AdjustmentAmount = $value;
    }

    /**
     * @return SendInvoiceResponseType|EbatNs_ResponseError
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
            'OrderID' => ['type' => 'OrderIDType', 'xmlns' => self::XMLNS],
            'InternationalShippingServiceOptions' => ['type' => 'InternationalShippingServiceOptionsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingServiceOptions' => ['type' => 'ShippingServiceOptionsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'SalesTax' => ['type' => 'SalesTaxType', 'xmlns' => self::XMLNS],
            'InsuranceOption' => ['type' => 'InsuranceOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InsuranceFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PaymentMethods' => ['type' => 'BuyerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'PayPalEmailAddress' => [],
            'CheckoutInstructions' => [],
            'EmailCopyToSeller' => ['type' => 'bool'],
            'CODCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'SKU' => ['type' => 'SKUType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => [],
            'AdjustmentAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SendInvoiceRequestType::_register();
