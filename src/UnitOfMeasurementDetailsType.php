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
class UnitOfMeasurementDetailsType extends EbatNs_ComplexType
{
    const TAG = 'UnitOfMeasurementDetailsType';
    const NAME = 'UnitOfMeasurementDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var UnitOfMeasurementType[]|null
     */
    protected $UnitOfMeasurement = [];

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return UnitOfMeasurementType[]|UnitOfMeasurementType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getUnitOfMeasurement($index = null)
    {
        return $this->_dc($index === null
            ? $this->UnitOfMeasurement
            : (count($this->UnitOfMeasurement) > $index
                ? $this->UnitOfMeasurement[$index]
                : null), 'UnitOfMeasurement');
    }

    /**
     * @param UnitOfMeasurementType|null|UnitOfMeasurementType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setUnitOfMeasurement($value, $index = null)
    {
        if ($index === null) {
            $this->UnitOfMeasurement = $value;
        } else {
            $this->UnitOfMeasurement[$index] = [];
            
            foreach ($value as $item) {
                $this->addUnitOfMeasurement($item);
            }
        }
    }

    /**
     * @param UnitOfMeasurementType|null $value
     * @return void
     */
    public function addUnitOfMeasurement($value)
    {
        $this->UnitOfMeasurement[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'UnitOfMeasurement' => ['type' => 'UnitOfMeasurementType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UnitOfMeasurementDetailsType::_register();
