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
 * This type is used by the
 * UserDeliveryPreferenceArray
 * container of the
 * SetNotificationPreferences
 * and
 * GetNotificationPreferences
 * calls. The
 * UserDeliveryPreferenceArray
 * container consists of one or more notifications and whether or not each notification is enabled or disabled.
 **/
class NotificationEnableArrayType extends EbatNs_ComplexType
{
    const TAG = 'NotificationEnableArrayType';
    const NAME = 'NotificationEnableArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var NotificationEnableType[]|null
     */
    protected $NotificationEnable = [];


    /**
     * @return NotificationEnableType[]|NotificationEnableType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getNotificationEnable($index = null)
    {
        return $this->_dc($index === null
            ? $this->NotificationEnable
            : (count($this->NotificationEnable) > $index
                ? $this->NotificationEnable[$index]
                : null), 'NotificationEnable');
    }

    /**
     * @param NotificationEnableType|null|NotificationEnableType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setNotificationEnable($value, $index = null)
    {
        if ($index === null) {
            $this->NotificationEnable = $value;
        } else {
            $this->NotificationEnable[$index] = [];
            
            foreach ($value as $item) {
                $this->addNotificationEnable($item);
            }
        }
    }

    /**
     * @param NotificationEnableType|null $value
     * @return void
     */
    public function addNotificationEnable($value)
    {
        $this->NotificationEnable[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['NotificationEnable' => ['type' => 'NotificationEnableType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

NotificationEnableArrayType::_register();
