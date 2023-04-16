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
 * This type defines the <strong>MonetaryDetails</strong> container, which consists of detailed information about
 * one or more exchanges of funds that occur between the buyer, seller, eBay, and eBay partners during the lifecycle
 * of an order, as well as detailed information about a merchant's refund (or store credit) to a buyer who has
 * returned an In-Store Pickup item.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail
 * merchants, and can only be applied to multi-quantity, fixed-price listings.
 * </span>
 **/
class PaymentsInformationType extends EbatNs_ComplexType
{
    const TAG = 'PaymentsInformationType';
    const NAME = 'PaymentsInformationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaymentInformationType|null
     */
    protected $Payments = null;

    /**
     * @var RefundInformationType|null
     */
    protected $Refunds = null;


    /**
     * @return PaymentInformationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayments()
    {
        return $this->_dc($this->Payments, 'Payments');
    }

    /**
     * @param PaymentInformationType|null $value
     * @return void
     */
    public function setPayments($value)
    {
        $this->Payments = $value;
    }

    /**
     * @return RefundInformationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefunds()
    {
        return $this->_dc($this->Refunds, 'Refunds');
    }

    /**
     * @param RefundInformationType|null $value
     * @return void
     */
    public function setRefunds($value)
    {
        $this->Refunds = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Payments' => ['type' => 'PaymentInformationType', 'xmlns' => self::XMLNS],
            'Refunds' => ['type' => 'RefundInformationType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PaymentsInformationType::_register();
