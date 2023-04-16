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
 * Type used by the
 * ApplicationDeliveryPreferences
 * container to control/indicate where and how Platform Notifications and/or Client Alerts are delivered to a user
 * application, server, and/or email address.
 **/
class ApplicationDeliveryPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'ApplicationDeliveryPreferencesType';
    const NAME = 'ApplicationDeliveryPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ApplicationURL = null;

    /**
     * @var EnableCodeType|null
     */
    protected $ApplicationEnable = null;

    /**
     * @var string|null
     */
    protected $AlertEmail = null;

    /**
     * @var EnableCodeType|null
     */
    protected $AlertEnable = null;

    /**
     * @var NotificationPayloadTypeCodeType|null
     */
    protected $NotificationPayloadType = null;

    /**
     * @var DeviceTypeCodeType|null
     */
    protected $DeviceType = null;

    /**
     * @var string|null
     */
    protected $PayloadVersion = null;

    /**
     * @var DeliveryURLDetailType[]|null
     */
    protected $DeliveryURLDetails = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getApplicationURL()
    {
        return $this->_dc($this->ApplicationURL, 'ApplicationURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setApplicationURL($value)
    {
        $this->ApplicationURL = self::_string($value);
    }

    /**
     * @return EnableCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getApplicationEnable()
    {
        return $this->_dc($this->ApplicationEnable);
    }

    /**
     * @param EnableCodeType|null $value
     * @return void
     */
    public function setApplicationEnable($value)
    {
        $this->ApplicationEnable = $this->_enum($value, EnableCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAlertEmail()
    {
        return $this->_dc($this->AlertEmail, 'AlertEmail');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAlertEmail($value)
    {
        $this->AlertEmail = self::_string($value);
    }

    /**
     * @return EnableCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAlertEnable()
    {
        return $this->_dc($this->AlertEnable);
    }

    /**
     * @param EnableCodeType|null $value
     * @return void
     */
    public function setAlertEnable($value)
    {
        $this->AlertEnable = $this->_enum($value, EnableCodeType::class);
    }

    /**
     * @return NotificationPayloadTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotificationPayloadType()
    {
        return $this->_dc($this->NotificationPayloadType);
    }

    /**
     * @param NotificationPayloadTypeCodeType|null $value
     * @return void
     */
    public function setNotificationPayloadType($value)
    {
        $this->NotificationPayloadType = $this->_enum($value, NotificationPayloadTypeCodeType::class);
    }

    /**
     * @return DeviceTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeviceType()
    {
        return $this->_dc($this->DeviceType);
    }

    /**
     * @param DeviceTypeCodeType|null $value
     * @return void
     */
    public function setDeviceType($value)
    {
        $this->DeviceType = $this->_enum($value, DeviceTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayloadVersion()
    {
        return $this->_dc($this->PayloadVersion, 'PayloadVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPayloadVersion($value)
    {
        $this->PayloadVersion = self::_string($value);
    }

    /**
     * @return DeliveryURLDetailType[]|DeliveryURLDetailType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDeliveryURLDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->DeliveryURLDetails
            : (count($this->DeliveryURLDetails) > $index
                ? $this->DeliveryURLDetails[$index]
                : null), 'DeliveryURLDetails');
    }

    /**
     * @param DeliveryURLDetailType|null|DeliveryURLDetailType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDeliveryURLDetails($value, $index = null)
    {
        if ($index === null) {
            $this->DeliveryURLDetails = $value;
        } else {
            $this->DeliveryURLDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addDeliveryURLDetails($item);
            }
        }
    }

    /**
     * @param DeliveryURLDetailType|null $value
     * @return void
     */
    public function addDeliveryURLDetails($value)
    {
        $this->DeliveryURLDetails[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ApplicationURL' => [],
            'ApplicationEnable' => ['type' => 'EnableCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AlertEmail' => [],
            'AlertEnable' => ['type' => 'EnableCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NotificationPayloadType' => ['type' => 'NotificationPayloadTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DeviceType' => ['type' => 'DeviceTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PayloadVersion' => [],
            'DeliveryURLDetails' => ['type' => 'DeliveryURLDetailType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ApplicationDeliveryPreferencesType::_register();
