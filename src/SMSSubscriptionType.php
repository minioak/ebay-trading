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
 * User data related to notifications. Note that SMS is currently reserved for future use.
 **/
class SMSSubscriptionType extends EbatNs_ComplexType
{
    const TAG = 'SMSSubscriptionType';
    const NAME = 'SMSSubscriptionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $SMSPhone = null;

    /**
     * @var SMSSubscriptionUserStatusCodeType|null
     */
    protected $UserStatus = null;

    /**
     * @var WirelessCarrierIDCodeType|null
     */
    protected $CarrierID = null;

    /**
     * @var SMSSubscriptionErrorCodeCodeType|null
     */
    protected $ErrorCode = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemToUnsubscribe = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSMSPhone()
    {
        return $this->_dc($this->SMSPhone, 'SMSPhone');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSMSPhone($value)
    {
        $this->SMSPhone = self::_string($value);
    }

    /**
     * @return SMSSubscriptionUserStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserStatus()
    {
        return $this->_dc($this->UserStatus);
    }

    /**
     * @param SMSSubscriptionUserStatusCodeType|null $value
     * @return void
     */
    public function setUserStatus($value)
    {
        $this->UserStatus = $this->_enum($value, SMSSubscriptionUserStatusCodeType::class);
    }

    /**
     * @return WirelessCarrierIDCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCarrierID()
    {
        return $this->_dc($this->CarrierID);
    }

    /**
     * @param WirelessCarrierIDCodeType|null $value
     * @return void
     */
    public function setCarrierID($value)
    {
        $this->CarrierID = $this->_enum($value, WirelessCarrierIDCodeType::class);
    }

    /**
     * @return SMSSubscriptionErrorCodeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getErrorCode()
    {
        return $this->_dc($this->ErrorCode);
    }

    /**
     * @param SMSSubscriptionErrorCodeCodeType|null $value
     * @return void
     */
    public function setErrorCode($value)
    {
        $this->ErrorCode = $this->_enum($value, SMSSubscriptionErrorCodeCodeType::class);
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemToUnsubscribe()
    {
        return $this->_dc($this->ItemToUnsubscribe, 'ItemToUnsubscribe');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemToUnsubscribe($value)
    {
        $this->ItemToUnsubscribe = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SMSPhone' => [],
            'UserStatus' => ['type' => 'SMSSubscriptionUserStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CarrierID' => ['type' => 'WirelessCarrierIDCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ErrorCode' => ['type' => 'SMSSubscriptionErrorCodeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemToUnsubscribe' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SMSSubscriptionType::_register();
