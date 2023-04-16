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
 * Base type definition of a response payload that can carry any
 * type of payload content with following optional elements:
 * <ul>
 * <li>timestamp of response message</li>
 * <li>application-level acknowledgement</li>
 * <li>application-level (business-level) errors and warnings</li>
 * </ul>
 **/
class AbstractResponseType extends EbatNs_ComplexType
{
    const TAG = 'AbstractResponseType';
    const NAME = 'AbstractResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Timestamp = null;

    /**
     * @var AckCodeType|null
     */
    protected $Ack = null;

    /**
     * @var string|null
     */
    protected $CorrelationID = null;

    /**
     * @var ErrorType[]|null
     */
    protected $Errors = [];

    /**
     * @var string|null
     */
    protected $Message = null;

    /**
     * @var string|null
     */
    protected $Version = null;

    /**
     * @var string|null
     */
    protected $Build = null;

    /**
     * @var string|null
     */
    protected $NotificationEventName = null;

    /**
     * @var DuplicateInvocationDetailsType|null
     */
    protected $DuplicateInvocationDetails = null;

    /**
     * @var string|null
     */
    protected $RecipientUserID = null;

    /**
     * @var string|null
     */
    protected $EIASToken = null;

    /**
     * @var string|null
     */
    protected $NotificationSignature = null;

    /**
     * @var string|null
     */
    protected $HardExpirationWarning = null;

    /**
     * @var BotBlockResponseType|null
     */
    protected $BotBlock = null;

    /**
     * @var string|null
     */
    protected $ExternalUserData = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimestamp()
    {
        return $this->_dc($this->Timestamp, 'Timestamp');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimestamp($value)
    {
        $this->Timestamp = self::_string($value);
    }

    /**
     * @return AckCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAck()
    {
        return $this->_dc($this->Ack);
    }

    /**
     * @param AckCodeType|null $value
     * @return void
     */
    public function setAck($value)
    {
        $this->Ack = $this->_enum($value, AckCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCorrelationID()
    {
        return $this->_dc($this->CorrelationID, 'CorrelationID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCorrelationID($value)
    {
        $this->CorrelationID = self::_string($value);
    }

    /**
     * @return ErrorType[]|ErrorType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getErrors($index = null)
    {
        return $this->_dc($index === null
            ? $this->Errors
            : (count($this->Errors) > $index
                ? $this->Errors[$index]
                : null), 'Errors');
    }

    /**
     * @param ErrorType|null|ErrorType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setErrors($value, $index = null)
    {
        if ($index === null) {
            $this->Errors = $value;
        } else {
            $this->Errors[$index] = [];
            
            foreach ($value as $item) {
                $this->addErrors($item);
            }
        }
    }

    /**
     * @param ErrorType|null $value
     * @return void
     */
    public function addErrors($value)
    {
        $this->Errors[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessage()
    {
        return $this->_dc($this->Message, 'Message');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessage($value)
    {
        $this->Message = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVersion()
    {
        return $this->_dc($this->Version, 'Version');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVersion($value)
    {
        $this->Version = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuild()
    {
        return $this->_dc($this->Build, 'Build');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBuild($value)
    {
        $this->Build = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotificationEventName()
    {
        return $this->_dc($this->NotificationEventName, 'NotificationEventName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNotificationEventName($value)
    {
        $this->NotificationEventName = self::_string($value);
    }

    /**
     * @return DuplicateInvocationDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDuplicateInvocationDetails()
    {
        return $this->_dc($this->DuplicateInvocationDetails, 'DuplicateInvocationDetails');
    }

    /**
     * @param DuplicateInvocationDetailsType|null $value
     * @return void
     */
    public function setDuplicateInvocationDetails($value)
    {
        $this->DuplicateInvocationDetails = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecipientUserID()
    {
        return $this->_dc($this->RecipientUserID, 'RecipientUserID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRecipientUserID($value)
    {
        $this->RecipientUserID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEIASToken()
    {
        return $this->_dc($this->EIASToken, 'EIASToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEIASToken($value)
    {
        $this->EIASToken = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotificationSignature()
    {
        return $this->_dc($this->NotificationSignature, 'NotificationSignature');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNotificationSignature($value)
    {
        $this->NotificationSignature = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHardExpirationWarning()
    {
        return $this->_dc($this->HardExpirationWarning, 'HardExpirationWarning');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHardExpirationWarning($value)
    {
        $this->HardExpirationWarning = self::_string($value);
    }

    /**
     * @return BotBlockResponseType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBotBlock()
    {
        return $this->_dc($this->BotBlock, 'BotBlock');
    }

    /**
     * @param BotBlockResponseType|null $value
     * @return void
     */
    public function setBotBlock($value)
    {
        $this->BotBlock = $value;
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
            'Timestamp' => [],
            'Ack' => ['type' => 'AckCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CorrelationID' => [],
            'Errors' => ['type' => 'ErrorType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Message' => [],
            'Version' => [],
            'Build' => [],
            'NotificationEventName' => [],
            'DuplicateInvocationDetails' => ['type' => 'DuplicateInvocationDetailsType', 'xmlns' => self::XMLNS],
            'RecipientUserID' => [],
            'EIASToken' => [],
            'NotificationSignature' => [],
            'HardExpirationWarning' => [],
            'BotBlock' => ['type' => 'BotBlockResponseType', 'xmlns' => self::XMLNS],
            'ExternalUserData' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AbstractResponseType::_register();
