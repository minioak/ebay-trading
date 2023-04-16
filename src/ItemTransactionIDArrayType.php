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
 * This type is used by the
 * ItemTransactionIDArray
 * container in the
 * GetOrderTransactions
 * call. The
 * ItemTransactionIDArray
 * container is used to specify one or more specific order line items to retrieve.
 **/
class ItemTransactionIDArrayType extends EbatNs_ComplexType
{
    const TAG = 'ItemTransactionIDArrayType';
    const NAME = 'ItemTransactionIDArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemTransactionIDType[]|null
     */
    protected $ItemTransactionID = [];


    /**
     * @return ItemTransactionIDType[]|ItemTransactionIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getItemTransactionID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ItemTransactionID
            : (count($this->ItemTransactionID) > $index
                ? $this->ItemTransactionID[$index]
                : null), 'ItemTransactionID');
    }

    /**
     * @param ItemTransactionIDType|null|ItemTransactionIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setItemTransactionID($value, $index = null)
    {
        if ($index === null) {
            $this->ItemTransactionID = $value;
        } else {
            $this->ItemTransactionID[$index] = [];
            
            foreach ($value as $item) {
                $this->addItemTransactionID($item);
            }
        }
    }

    /**
     * @param ItemTransactionIDType|null $value
     * @return void
     */
    public function addItemTransactionID($value)
    {
        $this->ItemTransactionID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ItemTransactionID' => ['type' => 'ItemTransactionIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ItemTransactionIDArrayType::_register();
