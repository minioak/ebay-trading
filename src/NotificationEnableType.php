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
 * Specifies a notification event and whether the
 * notification is enabled or disabled.
 **/
class NotificationEnableType extends EbatNs_ComplexType
{
    const TAG = 'NotificationEnableType';
    const NAME = 'NotificationEnableType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var NotificationEventTypeCodeType|null
     */
    protected $EventType = null;

    /**
     * @var EnableCodeType|null
     */
    protected $EventEnable = null;


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
     * @return EnableCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEventEnable()
    {
        return $this->_dc($this->EventEnable);
    }

    /**
     * @param EnableCodeType|null $value
     * @return void
     */
    public function setEventEnable($value)
    {
        $this->EventEnable = $this->_enum($value, EnableCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EventType' => ['type' => 'NotificationEventTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'EventEnable' => ['type' => 'EnableCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NotificationEnableType::_register();
