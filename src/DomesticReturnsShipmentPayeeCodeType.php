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
 * This type defines the available options for who pays the return shipping costs for domestic returns.
 **/
class DomesticReturnsShipmentPayeeCodeType extends EbatNs_ComplexType
{
    const TAG = 'DomesticReturnsShipmentPayeeCodeType';
    const NAME = 'DomesticReturnsShipmentPayeeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ReturnsShipmentPayeeCodeType[]|null
     */
    protected $DomesticReturnsShipmentPayee = [];


    /**
     * @return string[]|ReturnsShipmentPayeeCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDomesticReturnsShipmentPayee($index = null)
    {
        return $this->_dc($index === null
            ? $this->DomesticReturnsShipmentPayee
            : (count($this->DomesticReturnsShipmentPayee) > $index
                ? $this->DomesticReturnsShipmentPayee[$index]
                : null));
    }

    /**
     * @param ReturnsShipmentPayeeCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDomesticReturnsShipmentPayee($value, $index = null)
    {
        if ($index === null) {
            $this->DomesticReturnsShipmentPayee = $value;
        } else {
            $this->DomesticReturnsShipmentPayee[$index] = [];
            
            foreach ($value as $item) {
                $this->addDomesticReturnsShipmentPayee($item);
            }
        }
    }

    /**
     * @param ReturnsShipmentPayeeCodeType|null $value
     * @return void
     */
    public function addDomesticReturnsShipmentPayee($value)
    {
        $this->DomesticReturnsShipmentPayee[] = $this->_enum($value, ReturnsShipmentPayeeCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['DomesticReturnsShipmentPayee' => ['type' => 'ReturnsShipmentPayeeCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

DomesticReturnsShipmentPayeeCodeType::_register();
