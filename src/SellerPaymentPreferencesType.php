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
 * SellerPaymentPreferences
 * container, which
 * consists of the seller's payment preferences. Payment preferences specified in a
 * 
 * SetUserPreferences
 * call override the current corresponding settings in the seller's account.
 **/
class SellerPaymentPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'SellerPaymentPreferencesType';
    const NAME = 'SellerPaymentPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $AlwaysUseThisPaymentAddress = null;

    /**
     * @var DisplayPayNowButtonCodeType|null
     */
    protected $DisplayPayNowButton = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PayPalPreferred = null;

    /**
     * @var string|null
     */
    protected $DefaultPayPalEmailAddress = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PayPalAlwaysOn = null;

    /**
     * @var AddressType|null
     */
    protected $SellerPaymentAddress = null;

    /**
     * @var UPSRateOptionCodeType|null
     */
    protected $UPSRateOption = null;

    /**
     * @var FedExRateOptionCodeType|null
     */
    protected $FedExRateOption = null;

    /**
     * @var USPSRateOptionCodeType|null
     */
    protected $USPSRateOption = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAlwaysUseThisPaymentAddress()
    {
        return $this->_dc($this->AlwaysUseThisPaymentAddress === 'true', 'AlwaysUseThisPaymentAddress');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAlwaysUseThisPaymentAddress($value)
    {
        $this->AlwaysUseThisPaymentAddress = self::_bool($value);
    }

    /**
     * @return DisplayPayNowButtonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayPayNowButton()
    {
        return $this->_dc($this->DisplayPayNowButton);
    }

    /**
     * @param DisplayPayNowButtonCodeType|null $value
     * @return void
     */
    public function setDisplayPayNowButton($value)
    {
        $this->DisplayPayNowButton = $this->_enum($value, DisplayPayNowButtonCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalPreferred()
    {
        return $this->_dc($this->PayPalPreferred === 'true', 'PayPalPreferred');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPayPalPreferred($value)
    {
        $this->PayPalPreferred = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDefaultPayPalEmailAddress()
    {
        return $this->_dc($this->DefaultPayPalEmailAddress, 'DefaultPayPalEmailAddress');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDefaultPayPalEmailAddress($value)
    {
        $this->DefaultPayPalEmailAddress = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalAlwaysOn()
    {
        return $this->_dc($this->PayPalAlwaysOn === 'true', 'PayPalAlwaysOn');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPayPalAlwaysOn($value)
    {
        $this->PayPalAlwaysOn = self::_bool($value);
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerPaymentAddress()
    {
        return $this->_dc($this->SellerPaymentAddress, 'SellerPaymentAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setSellerPaymentAddress($value)
    {
        $this->SellerPaymentAddress = $value;
    }

    /**
     * @return UPSRateOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUPSRateOption()
    {
        return $this->_dc($this->UPSRateOption);
    }

    /**
     * @param UPSRateOptionCodeType|null $value
     * @return void
     */
    public function setUPSRateOption($value)
    {
        $this->UPSRateOption = $this->_enum($value, UPSRateOptionCodeType::class);
    }

    /**
     * @return FedExRateOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFedExRateOption()
    {
        return $this->_dc($this->FedExRateOption);
    }

    /**
     * @param FedExRateOptionCodeType|null $value
     * @return void
     */
    public function setFedExRateOption($value)
    {
        $this->FedExRateOption = $this->_enum($value, FedExRateOptionCodeType::class);
    }

    /**
     * @return USPSRateOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUSPSRateOption()
    {
        return $this->_dc($this->USPSRateOption);
    }

    /**
     * @param USPSRateOptionCodeType|null $value
     * @return void
     */
    public function setUSPSRateOption($value)
    {
        $this->USPSRateOption = $this->_enum($value, USPSRateOptionCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AlwaysUseThisPaymentAddress' => ['type' => 'bool'],
            'DisplayPayNowButton' => ['type' => 'DisplayPayNowButtonCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PayPalPreferred' => ['type' => 'bool'],
            'DefaultPayPalEmailAddress' => [],
            'PayPalAlwaysOn' => ['type' => 'bool'],
            'SellerPaymentAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'UPSRateOption' => ['type' => 'UPSRateOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FedExRateOption' => ['type' => 'FedExRateOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'USPSRateOption' => ['type' => 'USPSRateOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerPaymentPreferencesType::_register();
