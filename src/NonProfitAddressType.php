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
 * NonProfitAddress
 * container, which consists of the address (including latitude and longitude) of a nonprofit charity organization.
 **/
class NonProfitAddressType extends EbatNs_ComplexType
{
    const TAG = 'NonProfitAddressType';
    const NAME = 'NonProfitAddressType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $AddressLine1 = null;

    /**
     * @var string|null
     */
    protected $AddressLine2 = null;

    /**
     * @var string|null
     */
    protected $City = null;

    /**
     * @var string|null
     */
    protected $State = null;

    /**
     * @var string|null
     */
    protected $ZipCode = null;

    /**
     * @var float|null
     */
    protected $Latitude = null;

    /**
     * @var float|null
     */
    protected $Longitude = null;

    /**
     * @var AddressTypeCodeType|null
     */
    protected $AddressType = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddressLine1()
    {
        return $this->_dc($this->AddressLine1, 'AddressLine1');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAddressLine1($value)
    {
        $this->AddressLine1 = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddressLine2()
    {
        return $this->_dc($this->AddressLine2, 'AddressLine2');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAddressLine2($value)
    {
        $this->AddressLine2 = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCity()
    {
        return $this->_dc($this->City, 'City');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCity($value)
    {
        $this->City = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getState()
    {
        return $this->_dc($this->State, 'State');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setState($value)
    {
        $this->State = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getZipCode()
    {
        return $this->_dc($this->ZipCode, 'ZipCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setZipCode($value)
    {
        $this->ZipCode = self::_string($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLatitude()
    {
        return $this->_dc($this->Latitude, 'Latitude');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setLatitude($value)
    {
        $this->Latitude = self::_float($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLongitude()
    {
        return $this->_dc($this->Longitude, 'Longitude');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setLongitude($value)
    {
        $this->Longitude = self::_float($value);
    }

    /**
     * @return AddressTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddressType()
    {
        return $this->_dc($this->AddressType);
    }

    /**
     * @param AddressTypeCodeType|null $value
     * @return void
     */
    public function setAddressType($value)
    {
        $this->AddressType = $this->_enum($value, AddressTypeCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AddressLine1' => [],
            'AddressLine2' => [],
            'City' => [],
            'State' => [],
            'ZipCode' => [],
            'Latitude' => ['type' => 'float'],
            'Longitude' => ['type' => 'float'],
            'AddressType' => ['type' => 'AddressTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NonProfitAddressType::_register();
