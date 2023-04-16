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
 * This type provides information about the weight, volume or other quantity measurement of a listed item. The
 * European Union requires listings for certain types of products to include the price per unit so buyers can
 * accurately compare prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and
 * the item's listed price to calculate and display the per-unit price on eBay EU sites.
 **/
class UnitInfoType extends EbatNs_ComplexType
{
    const TAG = 'UnitInfoType';
    const NAME = 'UnitInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $UnitType = null;

    /**
     * @var float|null
     */
    protected $UnitQuantity = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnitType()
    {
        return $this->_dc($this->UnitType, 'UnitType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUnitType($value)
    {
        $this->UnitType = self::_string($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnitQuantity()
    {
        return $this->_dc($this->UnitQuantity, 'UnitQuantity');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setUnitQuantity($value)
    {
        $this->UnitQuantity = self::_float($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'UnitType' => [],
            'UnitQuantity' => ['type' => 'float']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UnitInfoType::_register();
