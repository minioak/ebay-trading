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
 * This type defines the available options the seller has for handling domestic returns.
 **/
class DomesticRefundMethodCodeType extends EbatNs_ComplexType
{
    const TAG = 'DomesticRefundMethodCodeType';
    const NAME = 'DomesticRefundMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ReturnsRefundMethodCodeType[]|null
     */
    protected $DomesticRefundMethod = [];


    /**
     * @return string[]|ReturnsRefundMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDomesticRefundMethod($index = null)
    {
        return $this->_dc($index === null
            ? $this->DomesticRefundMethod
            : (count($this->DomesticRefundMethod) > $index
                ? $this->DomesticRefundMethod[$index]
                : null));
    }

    /**
     * @param ReturnsRefundMethodCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDomesticRefundMethod($value, $index = null)
    {
        if ($index === null) {
            $this->DomesticRefundMethod = $value;
        } else {
            $this->DomesticRefundMethod[$index] = [];
            
            foreach ($value as $item) {
                $this->addDomesticRefundMethod($item);
            }
        }
    }

    /**
     * @param ReturnsRefundMethodCodeType|null $value
     * @return void
     */
    public function addDomesticRefundMethod($value)
    {
        $this->DomesticRefundMethod[] = $this->_enum($value, ReturnsRefundMethodCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['DomesticRefundMethod' => ['type' => 'ReturnsRefundMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

DomesticRefundMethodCodeType::_register();
