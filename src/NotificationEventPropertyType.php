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
 * Defines properties associated with a particular event.
 **/
class NotificationEventPropertyType extends EbatNs_ComplexType
{
    const TAG = 'NotificationEventPropertyType';
    const NAME = 'NotificationEventPropertyType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var NotificationEventTypeCodeType|null
     */
    protected $EventType = null;

    /**
     * @var NotificationEventPropertyNameCodeType|null
     */
    protected $Name = null;

    /**
     * @var string|null
     */
    protected $Value = null;


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
     * @return NotificationEventPropertyNameCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name);
    }

    /**
     * @param NotificationEventPropertyNameCodeType|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = $this->_enum($value, NotificationEventPropertyNameCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValue()
    {
        return $this->_dc($this->Value, 'Value');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setValue($value)
    {
        $this->Value = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EventType' => ['type' => 'NotificationEventTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Name' => ['type' => 'NotificationEventPropertyNameCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Value' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NotificationEventPropertyType::_register();
