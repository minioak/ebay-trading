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
 * OrderIDArray
 * container, which consists of an array of order IDs. The
 * OrderIDArray
 * container is used to specify one or more orders to retrieve in a
 * GetOrders
 * or
 * GetOrderTransactions
 * call.
 **/
class OrderIDArrayType extends EbatNs_ComplexType
{
    const TAG = 'OrderIDArrayType';
    const NAME = 'OrderIDArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OrderIDType[]|null
     */
    protected $OrderID = [];


    /**
     * @return OrderIDType[]|OrderIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getOrderID($index = null)
    {
        return $this->_dc($index === null
            ? $this->OrderID
            : (count($this->OrderID) > $index
                ? $this->OrderID[$index]
                : null), 'OrderID');
    }

    /**
     * @param OrderIDType|null|OrderIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setOrderID($value, $index = null)
    {
        if ($index === null) {
            $this->OrderID = $value;
        } else {
            $this->OrderID[$index] = [];
            
            foreach ($value as $item) {
                $this->addOrderID($item);
            }
        }
    }

    /**
     * @param OrderIDType|null $value
     * @return void
     */
    public function addOrderID($value)
    {
        $this->OrderID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['OrderID' => ['type' => 'OrderIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

OrderIDArrayType::_register();
