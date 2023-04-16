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
 * Type used by the
 * OrderTransactionArray
 * container that is returned in the
 * GetMyeBaySelling
 * and
 * GetMyeBayBuying
 * calls. The
 * OrderTransactionArray
 * container consists a list of orders and each order line item in that order.
 **/
class OrderTransactionArrayType extends EbatNs_ComplexType
{
    const TAG = 'OrderTransactionArrayType';
    const NAME = 'OrderTransactionArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OrderTransactionType[]|null
     */
    protected $OrderTransaction = [];


    /**
     * @return OrderTransactionType[]|OrderTransactionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getOrderTransaction($index = null)
    {
        return $this->_dc($index === null
            ? $this->OrderTransaction
            : (count($this->OrderTransaction) > $index
                ? $this->OrderTransaction[$index]
                : null), 'OrderTransaction');
    }

    /**
     * @param OrderTransactionType|null|OrderTransactionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setOrderTransaction($value, $index = null)
    {
        if ($index === null) {
            $this->OrderTransaction = $value;
        } else {
            $this->OrderTransaction[$index] = [];
            
            foreach ($value as $item) {
                $this->addOrderTransaction($item);
            }
        }
    }

    /**
     * @param OrderTransactionType|null $value
     * @return void
     */
    public function addOrderTransaction($value)
    {
        $this->OrderTransaction[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['OrderTransaction' => ['type' => 'OrderTransactionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

OrderTransactionArrayType::_register();
