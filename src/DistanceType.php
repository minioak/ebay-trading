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
class DistanceType extends EbatNs_ComplexType
{
    const TAG = 'DistanceType';
    const NAME = 'DistanceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $DistanceMeasurement = null;

    /**
     * @var string|null
     */
    protected $DistanceUnit = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDistanceMeasurement()
    {
        return $this->_dc($this->DistanceMeasurement, 'DistanceMeasurement');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDistanceMeasurement($value)
    {
        $this->DistanceMeasurement = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDistanceUnit()
    {
        return $this->_dc($this->DistanceUnit, 'DistanceUnit');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDistanceUnit($value)
    {
        $this->DistanceUnit = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DistanceMeasurement' => ['type' => 'int'],
            'DistanceUnit' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DistanceType::_register();
