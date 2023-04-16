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
 * Container consisting of shipping costs and other details related to an international
 * shipping service. If one or more international shipping services are provided, the
 * seller must specify at least one domestic shipping service as well.
 **/
class InternationalShippingServiceOptionsType extends EbatNs_ComplexType
{
    const TAG = 'InternationalShippingServiceOptionsType';
    const NAME = 'InternationalShippingServiceOptionsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ShippingService = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingServiceCost = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingServiceAdditionalCost = null;

    /**
     * @var int|null
     */
    protected $ShippingServicePriority = null;

    /**
     * @var string[]|null
     */
    protected $ShipToLocation = [];

    /**
     * @var AmountType|null
     */
    protected $ShippingInsuranceCost = null;

    /**
     * @var AmountType|null
     */
    protected $ImportCharge = null;

    /**
     * @var string|null
     */
    protected $ShippingServiceCutOffTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingService()
    {
        return $this->_dc($this->ShippingService, 'ShippingService');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingService($value)
    {
        $this->ShippingService = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceCost()
    {
        return $this->_dc($this->ShippingServiceCost, 'ShippingServiceCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingServiceCost($value)
    {
        $this->ShippingServiceCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->_dc($this->ShippingServiceAdditionalCost, 'ShippingServiceAdditionalCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingServiceAdditionalCost($value)
    {
        $this->ShippingServiceAdditionalCost = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServicePriority()
    {
        return $this->_dc($this->ShippingServicePriority, 'ShippingServicePriority');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingServicePriority($value)
    {
        $this->ShippingServicePriority = self::_int($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShipToLocation($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShipToLocation
            : (count($this->ShipToLocation) > $index
                ? $this->ShipToLocation[$index]
                : null), 'ShipToLocation');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShipToLocation($value, $index = null)
    {
        if ($index === null) {
            $this->ShipToLocation = $value;
        } else {
            $this->ShipToLocation[$index] = [];
            
            foreach ($value as $item) {
                $this->addShipToLocation($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addShipToLocation($value)
    {
        $this->ShipToLocation[] = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingInsuranceCost()
    {
        return $this->_dc($this->ShippingInsuranceCost, 'ShippingInsuranceCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingInsuranceCost($value)
    {
        $this->ShippingInsuranceCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getImportCharge()
    {
        return $this->_dc($this->ImportCharge, 'ImportCharge');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setImportCharge($value)
    {
        $this->ImportCharge = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceCutOffTime()
    {
        return $this->_dc($this->ShippingServiceCutOffTime, 'ShippingServiceCutOffTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingServiceCutOffTime($value)
    {
        $this->ShippingServiceCutOffTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingService' => [],
            'ShippingServiceCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingServiceAdditionalCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingServicePriority' => ['type' => 'int'],
            'ShipToLocation' => ['cardinality' => '0..*'],
            'ShippingInsuranceCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ImportCharge' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingServiceCutOffTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

InternationalShippingServiceOptionsType::_register();
