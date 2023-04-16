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
 * Details about a summary event schedule.
 **/
class SummaryEventScheduleType extends EbatNs_ComplexType
{
    const TAG = 'SummaryEventScheduleType';
    const NAME = 'SummaryEventScheduleType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var NotificationEventTypeCodeType|null
     */
    protected $EventType = null;

    /**
     * @var SummaryWindowPeriodCodeType|null
     */
    protected $SummaryPeriod = null;

    /**
     * @var SummaryFrequencyCodeType|null
     */
    protected $Frequency = null;


    /**
     * @return NotificationEventTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEventType()
    {
        return $this->_dc($this->EventType);
    }

    /**
     * @param NotificationEventTypeCodeType|null $value
     * @return void
     */
    public function setEventType($value)
    {
        $this->EventType = $this->_enum($value, NotificationEventTypeCodeType::class);
    }

    /**
     * @return SummaryWindowPeriodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSummaryPeriod()
    {
        return $this->_dc($this->SummaryPeriod);
    }

    /**
     * @param SummaryWindowPeriodCodeType|null $value
     * @return void
     */
    public function setSummaryPeriod($value)
    {
        $this->SummaryPeriod = $this->_enum($value, SummaryWindowPeriodCodeType::class);
    }

    /**
     * @return SummaryFrequencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFrequency()
    {
        return $this->_dc($this->Frequency);
    }

    /**
     * @param SummaryFrequencyCodeType|null $value
     * @return void
     */
    public function setFrequency($value)
    {
        $this->Frequency = $this->_enum($value, SummaryFrequencyCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EventType' => ['type' => 'NotificationEventTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SummaryPeriod' => ['type' => 'SummaryWindowPeriodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Frequency' => ['type' => 'SummaryFrequencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SummaryEventScheduleType::_register();
