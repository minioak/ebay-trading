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
 * Type defining the
 * ContactHoursDetails
 * container, which is used in Add/Revise/Relist calls to provide contact hours for the owner of a Classified Ad.
 * The
 * ContactHoursDetails
 * container is only applicable to Classified Ad listings.
 **/
class ContactHoursDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ContactHoursDetailsType';
    const NAME = 'ContactHoursDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $TimeZoneID = null;

    /**
     * @var DaysCodeType|null
     */
    protected $Hours1Days = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Hours1AnyTime = null;

    /**
     * @var string|null
     */
    protected $Hours1From = null;

    /**
     * @var string|null
     */
    protected $Hours1To = null;

    /**
     * @var DaysCodeType|null
     */
    protected $Hours2Days = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Hours2AnyTime = null;

    /**
     * @var string|null
     */
    protected $Hours2From = null;

    /**
     * @var string|null
     */
    protected $Hours2To = null;


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
     * @return DaysCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHours1Days()
    {
        return $this->_dc($this->Hours1Days);
    }

    /**
     * @param DaysCodeType|null $value
     * @return void
     */
    public function setHours1Days($value)
    {
        $this->Hours1Days = $this->_enum($value, DaysCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHours1AnyTime()
    {
        return $this->_dc($this->Hours1AnyTime === 'true', 'Hours1AnyTime');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHours1AnyTime($value)
    {
        $this->Hours1AnyTime = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHours1From()
    {
        return $this->_dc($this->Hours1From, 'Hours1From');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHours1From($value)
    {
        $this->Hours1From = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHours1To()
    {
        return $this->_dc($this->Hours1To, 'Hours1To');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHours1To($value)
    {
        $this->Hours1To = self::_string($value);
    }

    /**
     * @return DaysCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHours2Days()
    {
        return $this->_dc($this->Hours2Days);
    }

    /**
     * @param DaysCodeType|null $value
     * @return void
     */
    public function setHours2Days($value)
    {
        $this->Hours2Days = $this->_enum($value, DaysCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHours2AnyTime()
    {
        return $this->_dc($this->Hours2AnyTime === 'true', 'Hours2AnyTime');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHours2AnyTime($value)
    {
        $this->Hours2AnyTime = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHours2From()
    {
        return $this->_dc($this->Hours2From, 'Hours2From');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHours2From($value)
    {
        $this->Hours2From = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHours2To()
    {
        return $this->_dc($this->Hours2To, 'Hours2To');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHours2To($value)
    {
        $this->Hours2To = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TimeZoneID' => [],
            'Hours1Days' => ['type' => 'DaysCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Hours1AnyTime' => ['type' => 'bool'],
            'Hours1From' => [],
            'Hours1To' => [],
            'Hours2Days' => ['type' => 'DaysCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Hours2AnyTime' => ['type' => 'bool'],
            'Hours2From' => [],
            'Hours2To' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ContactHoursDetailsType::_register();
