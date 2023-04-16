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
 * User data related to notifications.
 **/
class NotificationUserDataType extends EbatNs_ComplexType
{
    const TAG = 'NotificationUserDataType';
    const NAME = 'NotificationUserDataType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SMSSubscriptionType|null
     */
    protected $SMSSubscription = null;

    /**
     * @var SummaryEventScheduleType[]|null
     */
    protected $SummarySchedule = [];

    /**
     * @var string|null
     */
    protected $ExternalUserData = null;


    /**
     * @return SMSSubscriptionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSMSSubscription()
    {
        return $this->_dc($this->SMSSubscription, 'SMSSubscription');
    }

    /**
     * @param SMSSubscriptionType|null $value
     * @return void
     */
    public function setSMSSubscription($value)
    {
        $this->SMSSubscription = $value;
    }

    /**
     * @return SummaryEventScheduleType[]|SummaryEventScheduleType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSummarySchedule($index = null)
    {
        return $this->_dc($index === null
            ? $this->SummarySchedule
            : (count($this->SummarySchedule) > $index
                ? $this->SummarySchedule[$index]
                : null), 'SummarySchedule');
    }

    /**
     * @param SummaryEventScheduleType|null|SummaryEventScheduleType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSummarySchedule($value, $index = null)
    {
        if ($index === null) {
            $this->SummarySchedule = $value;
        } else {
            $this->SummarySchedule[$index] = [];
            
            foreach ($value as $item) {
                $this->addSummarySchedule($item);
            }
        }
    }

    /**
     * @param SummaryEventScheduleType|null $value
     * @return void
     */
    public function addSummarySchedule($value)
    {
        $this->SummarySchedule[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalUserData()
    {
        return $this->_dc($this->ExternalUserData, 'ExternalUserData');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalUserData($value)
    {
        $this->ExternalUserData = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SMSSubscription' => ['type' => 'SMSSubscriptionType', 'xmlns' => self::XMLNS],
            'SummarySchedule' => ['type' => 'SummaryEventScheduleType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ExternalUserData' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NotificationUserDataType::_register();
