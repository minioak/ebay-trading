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
 * Information about a single notification. Notification information includes
 * the reference ID, notification type, current status, time delivered, error code,
 * and error message for the notification. If notification details are included in
 * the response, all of the detail fields are returned.
 **/
class NotificationDetailsType extends EbatNs_ComplexType
{
    const TAG = 'NotificationDetailsType';
    const NAME = 'NotificationDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $DeliveryURL = null;

    /**
     * @var string|null
     */
    protected $ReferenceID = null;

    /**
     * @var string|null
     */
    protected $ExpirationTime = null;

    /**
     * @var NotificationEventTypeCodeType|null
     */
    protected $Type = null;

    /**
     * @var int|null
     */
    protected $Retries = null;

    /**
     * @var NotificationEventStateCodeType|null
     */
    protected $DeliveryStatus = null;

    /**
     * @var string|null
     */
    protected $NextRetryTime = null;

    /**
     * @var string|null
     */
    protected $DeliveryTime = null;

    /**
     * @var string|null
     */
    protected $ErrorMessage = null;

    /**
     * @var string|null
     */
    protected $DeliveryURLName = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveryURL()
    {
        return $this->_dc($this->DeliveryURL, 'DeliveryURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDeliveryURL($value)
    {
        $this->DeliveryURL = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReferenceID()
    {
        return $this->_dc($this->ReferenceID, 'ReferenceID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReferenceID($value)
    {
        $this->ReferenceID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpirationTime()
    {
        return $this->_dc($this->ExpirationTime, 'ExpirationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExpirationTime($value)
    {
        $this->ExpirationTime = self::_string($value);
    }

    /**
     * @return NotificationEventTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getType()
    {
        return $this->_dc($this->Type);
    }

    /**
     * @param NotificationEventTypeCodeType|null $value
     * @return void
     */
    public function setType($value)
    {
        $this->Type = $this->_enum($value, NotificationEventTypeCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRetries()
    {
        return $this->_dc($this->Retries, 'Retries');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRetries($value)
    {
        $this->Retries = self::_int($value);
    }

    /**
     * @return NotificationEventStateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveryStatus()
    {
        return $this->_dc($this->DeliveryStatus);
    }

    /**
     * @param NotificationEventStateCodeType|null $value
     * @return void
     */
    public function setDeliveryStatus($value)
    {
        $this->DeliveryStatus = $this->_enum($value, NotificationEventStateCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNextRetryTime()
    {
        return $this->_dc($this->NextRetryTime, 'NextRetryTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNextRetryTime($value)
    {
        $this->NextRetryTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveryTime()
    {
        return $this->_dc($this->DeliveryTime, 'DeliveryTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDeliveryTime($value)
    {
        $this->DeliveryTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getErrorMessage()
    {
        return $this->_dc($this->ErrorMessage, 'ErrorMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setErrorMessage($value)
    {
        $this->ErrorMessage = self::_string($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DeliveryURL' => [],
            'ReferenceID' => [],
            'ExpirationTime' => [],
            'Type' => ['type' => 'NotificationEventTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Retries' => ['type' => 'int'],
            'DeliveryStatus' => ['type' => 'NotificationEventStateCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NextRetryTime' => [],
            'DeliveryTime' => [],
            'ErrorMessage' => [],
            'DeliveryURLName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NotificationDetailsType::_register();
