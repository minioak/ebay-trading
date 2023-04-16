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
 * Type defining the <strong>Refunds</strong> container, which contains an array of <strong>Refund</strong>
 * containers. A <strong>Refund</strong> container consists of detailed information on an In-Store Pickup item
 * refund.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail
 * merchants on the US site, and can only be applied to multi-quantity, fixed-price listings.
 * </span>
 **/
class RefundInformationType extends EbatNs_ComplexType
{
    const TAG = 'RefundInformationType';
    const NAME = 'RefundInformationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RefundTransactionInfoType[]|null
     */
    protected $Refund = [];


    /**
     * @return RefundTransactionInfoType[]|RefundTransactionInfoType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRefund($index = null)
    {
        return $this->_dc($index === null
            ? $this->Refund
            : (count($this->Refund) > $index
                ? $this->Refund[$index]
                : null), 'Refund');
    }

    /**
     * @param RefundTransactionInfoType|null|RefundTransactionInfoType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRefund($value, $index = null)
    {
        if ($index === null) {
            $this->Refund = $value;
        } else {
            $this->Refund[$index] = [];
            
            foreach ($value as $item) {
                $this->addRefund($item);
            }
        }
    }

    /**
     * @param RefundTransactionInfoType|null $value
     * @return void
     */
    public function addRefund($value)
    {
        $this->Refund[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Refund' => ['type' => 'RefundTransactionInfoType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

RefundInformationType::_register();
