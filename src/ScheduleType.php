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
class ScheduleType extends EbatNs_ComplexType
{
    const TAG = 'ScheduleType';
    const NAME = 'ScheduleType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ScheduleID = null;

    /**
     * @var string|null
     */
    protected $ScheduleTime = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getScheduleID()
    {
        return $this->_dc($this->ScheduleID, 'ScheduleID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setScheduleID($value)
    {
        $this->ScheduleID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getScheduleTime()
    {
        return $this->_dc($this->ScheduleTime, 'ScheduleTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setScheduleTime($value)
    {
        $this->ScheduleTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ScheduleID' => ['type' => 'int'],
            'ScheduleTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ScheduleType::_register();
