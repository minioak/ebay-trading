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
 * This type defines the available options for who pays the return shipping costs for international returns.
 **/
class InternationalReturnsShipmentPayeeCodeType extends EbatNs_ComplexType
{
    const TAG = 'InternationalReturnsShipmentPayeeCodeType';
    const NAME = 'InternationalReturnsShipmentPayeeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ReturnsShipmentPayeeCodeType[]|null
     */
    protected $InternationalReturnsShipmentPayee = [];


    /**
     * @return string[]|ReturnsShipmentPayeeCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getInternationalReturnsShipmentPayee($index = null)
    {
        return $this->_dc($index === null
            ? $this->InternationalReturnsShipmentPayee
            : (count($this->InternationalReturnsShipmentPayee) > $index
                ? $this->InternationalReturnsShipmentPayee[$index]
                : null));
    }

    /**
     * @param ReturnsShipmentPayeeCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setInternationalReturnsShipmentPayee($value, $index = null)
    {
        if ($index === null) {
            $this->InternationalReturnsShipmentPayee = $value;
        } else {
            $this->InternationalReturnsShipmentPayee[$index] = [];
            
            foreach ($value as $item) {
                $this->addInternationalReturnsShipmentPayee($item);
            }
        }
    }

    /**
     * @param ReturnsShipmentPayeeCodeType|null $value
     * @return void
     */
    public function addInternationalReturnsShipmentPayee($value)
    {
        $this->InternationalReturnsShipmentPayee[] = $this->_enum($value, ReturnsShipmentPayeeCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['InternationalReturnsShipmentPayee' => ['type' => 'ReturnsShipmentPayeeCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

InternationalReturnsShipmentPayeeCodeType::_register();
