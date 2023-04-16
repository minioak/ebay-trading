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
 * Contains an order or a transaction. A transaction is the sale of one or
 * more items from a seller's listing to a buyer. An order combines two or more transactions
 * into a single payment.
 **/
class OrderTransactionType extends EbatNs_ComplexType
{
    const TAG = 'OrderTransactionType';
    const NAME = 'OrderTransactionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OrderType|null
     */
    protected $Order = null;

    /**
     * @var TransactionType|null
     */
    protected $Transaction = null;


    /**
     * @return OrderType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrder()
    {
        return $this->_dc($this->Order, 'Order');
    }

    /**
     * @param OrderType|null $value
     * @return void
     */
    public function setOrder($value)
    {
        $this->Order = $value;
    }

    /**
     * @return TransactionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransaction()
    {
        return $this->_dc($this->Transaction, 'Transaction');
    }

    /**
     * @param TransactionType|null $value
     * @return void
     */
    public function setTransaction($value)
    {
        $this->Transaction = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Order' => ['type' => 'OrderType', 'xmlns' => self::XMLNS],
            'Transaction' => ['type' => 'TransactionType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

OrderTransactionType::_register();
