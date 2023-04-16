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
 * Contains the requesting application's notification preferences.
 * GetNotificationPreferences
 * retrieves preferences that you have deliberately set. For example, if you enable the
 * EndOfAuction
 * event and then later disable it, the response shows the
 * EndOfAuction
 * event preference as
 * Disabled
 * . But if you have never set a preference for the
 * EndOfAuction
 * event, no
 * EndOfAuction
 * preference is returned at all.
 **/
class GetNotificationPreferencesResponseType extends EbatNs_Response
{
    const TAG = 'GetNotificationPreferencesResponseType';
    const NAME = 'GetNotificationPreferencesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ApplicationDeliveryPreferencesType|null
     */
    protected $ApplicationDeliveryPreferences = null;

    /**
     * @var string|null
     */
    protected $DeliveryURLName = null;

    /**
     * @var NotificationEnableArrayType|null
     */
    protected $UserDeliveryPreferenceArray = null;

    /**
     * @var NotificationUserDataType|null
     */
    protected $UserData = null;

    /**
     * @var NotificationEventPropertyType[]|null
     */
    protected $EventProperty = [];


    /**
     * @return ApplicationDeliveryPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getApplicationDeliveryPreferences()
    {
        return $this->_dc($this->ApplicationDeliveryPreferences, 'ApplicationDeliveryPreferences');
    }

    /**
     * @param ApplicationDeliveryPreferencesType|null $value
     * @return void
     */
    public function setApplicationDeliveryPreferences($value)
    {
        $this->ApplicationDeliveryPreferences = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveryURLName()
    {
        return $this->_dc($this->DeliveryURLName, 'DeliveryURLName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDeliveryURLName($value)
    {
        $this->DeliveryURLName = self::_string($value);
    }

    /**
     * @return NotificationEnableArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserDeliveryPreferenceArray()
    {
        return $this->_dc($this->UserDeliveryPreferenceArray, 'UserDeliveryPreferenceArray');
    }

    /**
     * @param NotificationEnableArrayType|null $value
     * @return void
     */
    public function setUserDeliveryPreferenceArray($value)
    {
        $this->UserDeliveryPreferenceArray = $value;
    }

    /**
     * @return NotificationUserDataType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserData()
    {
        return $this->_dc($this->UserData, 'UserData');
    }

    /**
     * @param NotificationUserDataType|null $value
     * @return void
     */
    public function setUserData($value)
    {
        $this->UserData = $value;
    }

    /**
     * @return NotificationEventPropertyType[]|NotificationEventPropertyType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getEventProperty($index = null)
    {
        return $this->_dc($index === null
            ? $this->EventProperty
            : (count($this->EventProperty) > $index
                ? $this->EventProperty[$index]
                : null), 'EventProperty');
    }

    /**
     * @param NotificationEventPropertyType|null|NotificationEventPropertyType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setEventProperty($value, $index = null)
    {
        if ($index === null) {
            $this->EventProperty = $value;
        } else {
            $this->EventProperty[$index] = [];
            
            foreach ($value as $item) {
                $this->addEventProperty($item);
            }
        }
    }

    /**
     * @param NotificationEventPropertyType|null $value
     * @return void
     */
    public function addEventProperty($value)
    {
        $this->EventProperty[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ApplicationDeliveryPreferences' => ['type' => 'ApplicationDeliveryPreferencesType', 'xmlns' => self::XMLNS],
            'DeliveryURLName' => [],
            'UserDeliveryPreferenceArray' => ['type' => 'NotificationEnableArrayType', 'xmlns' => self::XMLNS],
            'UserData' => ['type' => 'NotificationUserDataType', 'xmlns' => self::XMLNS],
            'EventProperty' => ['type' => 'NotificationEventPropertyType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetNotificationPreferencesResponseType::_register();
