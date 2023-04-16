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
 * This type contains information about one or more payments made by the buyer to pay for an order.
 **/
class PaymentInformationType extends EbatNs_ComplexType
{
    const TAG = 'PaymentInformationType';
    const NAME = 'PaymentInformationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaymentTransactionType[]|null
     */
    protected $Payment = [];


    /**
     * @return PaymentTransactionType[]|PaymentTransactionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPayment($index = null)
    {
        return $this->_dc($index === null
            ? $this->Payment
            : (count($this->Payment) > $index
                ? $this->Payment[$index]
                : null), 'Payment');
    }

    /**
     * @param PaymentTransactionType|null|PaymentTransactionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPayment($value, $index = null)
    {
        if ($index === null) {
            $this->Payment = $value;
        } else {
            $this->Payment[$index] = [];
            
            foreach ($value as $item) {
                $this->addPayment($item);
            }
        }
    }

    /**
     * @param PaymentTransactionType|null $value
     * @return void
     */
    public function addPayment($value)
    {
        $this->Payment[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Payment' => ['type' => 'PaymentTransactionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

PaymentInformationType::_register();
