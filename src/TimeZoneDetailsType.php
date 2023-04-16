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
 * Time zone details about a region or location to which the seller is willing to
 * ship.
 **/
class TimeZoneDetailsType extends EbatNs_ComplexType
{
    const TAG = 'TimeZoneDetailsType';
    const NAME = 'TimeZoneDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $TimeZoneID = null;

    /**
     * @var string|null
     */
    protected $StandardLabel = null;

    /**
     * @var string|null
     */
    protected $StandardOffset = null;

    /**
     * @var string|null
     */
    protected $DaylightSavingsLabel = null;

    /**
     * @var string|null
     */
    protected $DaylightSavingsOffset = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DaylightSavingsInEffect = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeZoneID()
    {
        return $this->_dc($this->TimeZoneID, 'TimeZoneID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeZoneID($value)
    {
        $this->TimeZoneID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStandardLabel()
    {
        return $this->_dc($this->StandardLabel, 'StandardLabel');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStandardLabel($value)
    {
        $this->StandardLabel = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStandardOffset()
    {
        return $this->_dc($this->StandardOffset, 'StandardOffset');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStandardOffset($value)
    {
        $this->StandardOffset = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDaylightSavingsLabel()
    {
        return $this->_dc($this->DaylightSavingsLabel, 'DaylightSavingsLabel');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDaylightSavingsLabel($value)
    {
        $this->DaylightSavingsLabel = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDaylightSavingsOffset()
    {
        return $this->_dc($this->DaylightSavingsOffset, 'DaylightSavingsOffset');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDaylightSavingsOffset($value)
    {
        $this->DaylightSavingsOffset = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDaylightSavingsInEffect()
    {
        return $this->_dc($this->DaylightSavingsInEffect === 'true', 'DaylightSavingsInEffect');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDaylightSavingsInEffect($value)
    {
        $this->DaylightSavingsInEffect = self::_bool($value);
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
            'TimeZoneID' => [],
            'StandardLabel' => [],
            'StandardOffset' => [],
            'DaylightSavingsLabel' => [],
            'DaylightSavingsOffset' => [],
            'DaylightSavingsInEffect' => ['type' => 'bool'],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TimeZoneDetailsType::_register();
