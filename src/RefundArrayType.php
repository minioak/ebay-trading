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
 * This type was only used for Half.com order refunds, and since the Half.com site has been shut down, this type is
 * no longer applicable.
 * </span>
 * Type used by the <strong>RefundArray</strong> container, which consists of an array of Half.com refunds.
 **/
class RefundArrayType extends EbatNs_ComplexType
{
    const TAG = 'RefundArrayType';
    const NAME = 'RefundArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RefundType[]|null
     */
    protected $Refund = [];


    /**
     * @return RefundType[]|RefundType|null|mixed Depending on the assigned data converter: mixed
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
     * @param RefundType|null|RefundType[] $value
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
     * @param RefundType|null $value
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
        self::assignElements(['Refund' => ['type' => 'RefundType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

RefundArrayType::_register();
