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
 * ShippingServiceDetails.DeprecationDetails
 * container that is returned in the
 * GeteBayDetails
 * response. The
 * ShippingServiceDetails.DeprecationDetails
 * container consists of information related to a deprecated shipping service.
 **/
class AnnouncementMessageType extends EbatNs_ComplexType
{
    const TAG = 'AnnouncementMessageType';
    const NAME = 'AnnouncementMessageType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $AnnouncementStartTime = null;

    /**
     * @var string|null
     */
    protected $EventTime = null;

    /**
     * @var AnnouncementMessageCodeType|null
     */
    protected $MessageType = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAnnouncementStartTime()
    {
        return $this->_dc($this->AnnouncementStartTime, 'AnnouncementStartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAnnouncementStartTime($value)
    {
        $this->AnnouncementStartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEventTime()
    {
        return $this->_dc($this->EventTime, 'EventTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEventTime($value)
    {
        $this->EventTime = self::_string($value);
    }

    /**
     * @return AnnouncementMessageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageType()
    {
        return $this->_dc($this->MessageType);
    }

    /**
     * @param AnnouncementMessageCodeType|null $value
     * @return void
     */
    public function setMessageType($value)
    {
        $this->MessageType = $this->_enum($value, AnnouncementMessageCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AnnouncementStartTime' => [],
            'EventTime' => [],
            'MessageType' => ['type' => 'AnnouncementMessageCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AnnouncementMessageType::_register();
