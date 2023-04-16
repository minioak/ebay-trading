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
 * This type is deprecated.
 **/
class ItemTotalsType extends EbatNs_ComplexType
{
    const TAG = 'ItemTotalsType';
    const NAME = 'ItemTotalsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $TotalQuantity = null;

    /**
     * @var AmountType|null
     */
    protected $TotalValue = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalQuantity()
    {
        return $this->_dc($this->TotalQuantity, 'TotalQuantity');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalQuantity($value)
    {
        $this->TotalQuantity = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalValue()
    {
        return $this->_dc($this->TotalValue, 'TotalValue');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalValue($value)
    {
        $this->TotalValue = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TotalQuantity' => ['type' => 'int'],
            'TotalValue' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemTotalsType::_register();
