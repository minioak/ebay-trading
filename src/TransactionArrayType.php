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
 * TransactionArray
 * container, which contains an
 * array of
 * Transaction
 * containers. Each
 * Transaction
 * container consists of detailed information on one order line item.
 **/
class TransactionArrayType extends EbatNs_ComplexType
{
    const TAG = 'TransactionArrayType';
    const NAME = 'TransactionArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var TransactionType[]|null
     */
    protected $Transaction = [];


    /**
     * @return TransactionType[]|TransactionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getTransaction($index = null)
    {
        return $this->_dc($index === null
            ? $this->Transaction
            : (count($this->Transaction) > $index
                ? $this->Transaction[$index]
                : null), 'Transaction');
    }

    /**
     * @param TransactionType|null|TransactionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setTransaction($value, $index = null)
    {
        if ($index === null) {
            $this->Transaction = $value;
        } else {
            $this->Transaction[$index] = [];
            
            foreach ($value as $item) {
                $this->addTransaction($item);
            }
        }
    }

    /**
     * @param TransactionType|null $value
     * @return void
     */
    public function addTransaction($value)
    {
        $this->Transaction[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Transaction' => ['type' => 'TransactionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

TransactionArrayType::_register();
