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
 * OrderArray
 * container that is returned in order management calls. The
 * OrderArray
 * container consists of one or more eBay orders that match the input criteria.
 **/
class OrderArrayType extends EbatNs_ComplexType
{
    const TAG = 'OrderArrayType';
    const NAME = 'OrderArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OrderType[]|null
     */
    protected $Order = [];

    /**
     * @var ErrorType[]|null
     */
    protected $Errors = [];


    /**
     * @return OrderType[]|OrderType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getOrder($index = null)
    {
        return $this->_dc($index === null
            ? $this->Order
            : (count($this->Order) > $index
                ? $this->Order[$index]
                : null), 'Order');
    }

    /**
     * @param OrderType|null|OrderType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setOrder($value, $index = null)
    {
        if ($index === null) {
            $this->Order = $value;
        } else {
            $this->Order[$index] = [];
            
            foreach ($value as $item) {
                $this->addOrder($item);
            }
        }
    }

    /**
     * @param OrderType|null $value
     * @return void
     */
    public function addOrder($value)
    {
        $this->Order[] = $value;
    }

    /**
     * @return ErrorType[]|ErrorType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getErrors($index = null)
    {
        return $this->_dc($index === null
            ? $this->Errors
            : (count($this->Errors) > $index
                ? $this->Errors[$index]
                : null), 'Errors');
    }

    /**
     * @param ErrorType|null|ErrorType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setErrors($value, $index = null)
    {
        if ($index === null) {
            $this->Errors = $value;
        } else {
            $this->Errors[$index] = [];
            
            foreach ($value as $item) {
                $this->addErrors($item);
            }
        }
    }

    /**
     * @param ErrorType|null $value
     * @return void
     */
    public function addErrors($value)
    {
        $this->Errors[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Order' => ['type' => 'OrderType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Errors' => ['type' => 'ErrorType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

OrderArrayType::_register();
