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
 * Returns an array of order line item data for the item specified in the request.
 * The results can be used to create a report of data that is commonly
 * necessary for order processing.
 * Zero, one, or many
 * Transaction
 * objects can be returned in the
 * TransactionArray
 * .
 * The set of order line items returned is limited to those that were modified between
 * the times specified in the request's
 * ModTimeFrom
 * and
 * ModTime
 * filters.
 * Also returns the
 * Item
 * object that spawned the order line items.
 * If pagination filters were specified in the request, returns meta-data describing
 * the effects of those filters on the current response and the estimated effects if
 * the same filters are used in subsequent calls.
 * 
 * Data from the
 * TransactionArray
 * may be used to trigger the following Platform Notifications:
 * EndOfAuction
 * ,
 * AuctionCheckoutComplete
 * ,
 * FixedPriceTransaction
 * ,
 * CheckoutBuyerRequestsTotal
 * ,
 * ItemMarkedShipped
 * , and
 * ItemMarkedPaid
 * . Each notification will be based on the state of the item (a 'snapshot' of the item) at the time the order line
 * item was created.
 **/
class GetItemTransactionsResponseType extends EbatNs_Response
{
    const TAG = 'GetItemTransactionsResponseType';
    const NAME = 'GetItemTransactionsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasMoreTransactions = null;

    /**
     * @var int|null
     */
    protected $TransactionsPerPage = null;

    /**
     * @var int|null
     */
    protected $PageNumber = null;

    /**
     * @var int|null
     */
    protected $ReturnedTransactionCountActual = null;

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var TransactionArrayType|null
     */
    protected $TransactionArray = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PayPalPreferred = null;


    /**
     * @return PaginationResultType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaginationResult()
    {
        return $this->_dc($this->PaginationResult, 'PaginationResult');
    }

    /**
     * @param PaginationResultType|null $value
     * @return void
     */
    public function setPaginationResult($value)
    {
        $this->PaginationResult = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHasMoreTransactions()
    {
        return $this->_dc($this->HasMoreTransactions === 'true', 'HasMoreTransactions');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasMoreTransactions($value)
    {
        $this->HasMoreTransactions = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionsPerPage()
    {
        return $this->_dc($this->TransactionsPerPage, 'TransactionsPerPage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTransactionsPerPage($value)
    {
        $this->TransactionsPerPage = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPageNumber()
    {
        return $this->_dc($this->PageNumber, 'PageNumber');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPageNumber($value)
    {
        $this->PageNumber = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnedTransactionCountActual()
    {
        return $this->_dc($this->ReturnedTransactionCountActual, 'ReturnedTransactionCountActual');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setReturnedTransactionCountActual($value)
    {
        $this->ReturnedTransactionCountActual = self::_int($value);
    }

    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return TransactionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionArray()
    {
        return $this->_dc($this->TransactionArray, 'TransactionArray');
    }

    /**
     * @param TransactionArrayType|null $value
     * @return void
     */
    public function setTransactionArray($value)
    {
        $this->TransactionArray = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalPreferred()
    {
        return $this->_dc($this->PayPalPreferred === 'true', 'PayPalPreferred');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPayPalPreferred($value)
    {
        $this->PayPalPreferred = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS],
            'HasMoreTransactions' => ['type' => 'bool'],
            'TransactionsPerPage' => ['type' => 'int'],
            'PageNumber' => ['type' => 'int'],
            'ReturnedTransactionCountActual' => ['type' => 'int'],
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'TransactionArray' => ['type' => 'TransactionArrayType', 'xmlns' => self::XMLNS],
            'PayPalPreferred' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetItemTransactionsResponseType::_register();
