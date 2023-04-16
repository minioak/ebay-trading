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
 * Contains the data for an eBay user's address. This is the base type for a
 * number of user addresses, including seller payment address, buyer
 * shipping address, and buyer and seller registration address.
 **/
class AddressType extends EbatNs_ComplexType
{
    const TAG = 'AddressType';
    const NAME = 'AddressType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string|null
     */
    protected $Street = null;

    /**
     * @var string|null
     */
    protected $Street1 = null;

    /**
     * @var string|null
     */
    protected $Street2 = null;

    /**
     * @var string|null
     */
    protected $CityName = null;

    /**
     * @var string|null
     */
    protected $County = null;

    /**
     * @var string|null
     */
    protected $StateOrProvince = null;

    /**
     * @var CountryCodeType|null
     */
    protected $Country = null;

    /**
     * @var string|null
     */
    protected $CountryName = null;

    /**
     * @var string|null
     */
    protected $Phone = null;

    /**
     * @var CountryCodeType|null
     */
    protected $PhoneCountryCode = null;

    /**
     * @var string|null
     */
    protected $PhoneCountryPrefix = null;

    /**
     * @var string|null
     */
    protected $PhoneAreaOrCityCode = null;

    /**
     * @var string|null
     */
    protected $PhoneLocalNumber = null;

    /**
     * @var string|null
     */
    protected $PostalCode = null;

    /**
     * @var string|null
     */
    protected $AddressID = null;

    /**
     * @var AddressOwnerCodeType|null
     */
    protected $AddressOwner = null;

    /**
     * @var AddressStatusCodeType|null
     */
    protected $AddressStatus = null;

    /**
     * @var string|null
     */
    protected $ExternalAddressID = null;

    /**
     * @var string|null
     */
    protected $InternationalName = null;

    /**
     * @var string|null
     */
    protected $InternationalStateAndCity = null;

    /**
     * @var string|null
     */
    protected $InternationalStreet = null;

    /**
     * @var string|null
     */
    protected $CompanyName = null;

    /**
     * @var AddressRecordTypeCodeType|null
     */
    protected $AddressRecordType = null;

    /**
     * @var string|null
     */
    protected $FirstName = null;

    /**
     * @var string|null
     */
    protected $LastName = null;

    /**
     * @var string|null
     */
    protected $Phone2 = null;

    /**
     * @var AddressUsageCodeType|null
     */
    protected $AddressUsage = null;

    /**
     * @var string|null
     */
    protected $ReferenceID = null;

    /**
     * @var AddressAttributeType[]|null
     */
    protected $AddressAttribute = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStreet()
    {
        return $this->_dc($this->Street, 'Street');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStreet($value)
    {
        $this->Street = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStreet1()
    {
        return $this->_dc($this->Street1, 'Street1');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStreet1($value)
    {
        $this->Street1 = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStreet2()
    {
        return $this->_dc($this->Street2, 'Street2');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStreet2($value)
    {
        $this->Street2 = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCityName()
    {
        return $this->_dc($this->CityName, 'CityName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCityName($value)
    {
        $this->CityName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCounty()
    {
        return $this->_dc($this->County, 'County');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCounty($value)
    {
        $this->County = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStateOrProvince()
    {
        return $this->_dc($this->StateOrProvince, 'StateOrProvince');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStateOrProvince($value)
    {
        $this->StateOrProvince = self::_string($value);
    }

    /**
     * @return CountryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCountry()
    {
        return $this->_dc($this->Country);
    }

    /**
     * @param CountryCodeType|null $value
     * @return void
     */
    public function setCountry($value)
    {
        $this->Country = $this->_enum($value, CountryCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCountryName()
    {
        return $this->_dc($this->CountryName, 'CountryName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCountryName($value)
    {
        $this->CountryName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPhone()
    {
        return $this->_dc($this->Phone, 'Phone');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPhone($value)
    {
        $this->Phone = self::_string($value);
    }

    /**
     * @return CountryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPhoneCountryCode()
    {
        return $this->_dc($this->PhoneCountryCode);
    }

    /**
     * @param CountryCodeType|null $value
     * @return void
     */
    public function setPhoneCountryCode($value)
    {
        $this->PhoneCountryCode = $this->_enum($value, CountryCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPhoneCountryPrefix()
    {
        return $this->_dc($this->PhoneCountryPrefix, 'PhoneCountryPrefix');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPhoneCountryPrefix($value)
    {
        $this->PhoneCountryPrefix = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPhoneAreaOrCityCode()
    {
        return $this->_dc($this->PhoneAreaOrCityCode, 'PhoneAreaOrCityCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPhoneAreaOrCityCode($value)
    {
        $this->PhoneAreaOrCityCode = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPhoneLocalNumber()
    {
        return $this->_dc($this->PhoneLocalNumber, 'PhoneLocalNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPhoneLocalNumber($value)
    {
        $this->PhoneLocalNumber = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPostalCode()
    {
        return $this->_dc($this->PostalCode, 'PostalCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPostalCode($value)
    {
        $this->PostalCode = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddressID()
    {
        return $this->_dc($this->AddressID, 'AddressID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAddressID($value)
    {
        $this->AddressID = self::_string($value);
    }

    /**
     * @return AddressOwnerCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddressOwner()
    {
        return $this->_dc($this->AddressOwner);
    }

    /**
     * @param AddressOwnerCodeType|null $value
     * @return void
     */
    public function setAddressOwner($value)
    {
        $this->AddressOwner = $this->_enum($value, AddressOwnerCodeType::class);
    }

    /**
     * @return AddressStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddressStatus()
    {
        return $this->_dc($this->AddressStatus);
    }

    /**
     * @param AddressStatusCodeType|null $value
     * @return void
     */
    public function setAddressStatus($value)
    {
        $this->AddressStatus = $this->_enum($value, AddressStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalAddressID()
    {
        return $this->_dc($this->ExternalAddressID, 'ExternalAddressID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalAddressID($value)
    {
        $this->ExternalAddressID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalName()
    {
        return $this->_dc($this->InternationalName, 'InternationalName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalName($value)
    {
        $this->InternationalName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalStateAndCity()
    {
        return $this->_dc($this->InternationalStateAndCity, 'InternationalStateAndCity');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalStateAndCity($value)
    {
        $this->InternationalStateAndCity = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalStreet()
    {
        return $this->_dc($this->InternationalStreet, 'InternationalStreet');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalStreet($value)
    {
        $this->InternationalStreet = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCompanyName()
    {
        return $this->_dc($this->CompanyName, 'CompanyName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCompanyName($value)
    {
        $this->CompanyName = self::_string($value);
    }

    /**
     * @return AddressRecordTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddressRecordType()
    {
        return $this->_dc($this->AddressRecordType);
    }

    /**
     * @param AddressRecordTypeCodeType|null $value
     * @return void
     */
    public function setAddressRecordType($value)
    {
        $this->AddressRecordType = $this->_enum($value, AddressRecordTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFirstName()
    {
        return $this->_dc($this->FirstName, 'FirstName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFirstName($value)
    {
        $this->FirstName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastName()
    {
        return $this->_dc($this->LastName, 'LastName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastName($value)
    {
        $this->LastName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPhone2()
    {
        return $this->_dc($this->Phone2, 'Phone2');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPhone2($value)
    {
        $this->Phone2 = self::_string($value);
    }

    /**
     * @return AddressUsageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddressUsage()
    {
        return $this->_dc($this->AddressUsage);
    }

    /**
     * @param AddressUsageCodeType|null $value
     * @return void
     */
    public function setAddressUsage($value)
    {
        $this->AddressUsage = $this->_enum($value, AddressUsageCodeType::class);
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
     * @return AddressAttributeType[]|AddressAttributeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAddressAttribute($index = null)
    {
        return $this->_dc($index === null
            ? $this->AddressAttribute
            : (count($this->AddressAttribute) > $index
                ? $this->AddressAttribute[$index]
                : null), 'AddressAttribute');
    }

    /**
     * @param AddressAttributeType|null|AddressAttributeType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAddressAttribute($value, $index = null)
    {
        if ($index === null) {
            $this->AddressAttribute = $value;
        } else {
            $this->AddressAttribute[$index] = [];
            
            foreach ($value as $item) {
                $this->addAddressAttribute($item);
            }
        }
    }

    /**
     * @param AddressAttributeType|null $value
     * @return void
     */
    public function addAddressAttribute($value)
    {
        $this->AddressAttribute[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'Street' => [],
            'Street1' => [],
            'Street2' => [],
            'CityName' => [],
            'County' => [],
            'StateOrProvince' => [],
            'Country' => ['type' => 'CountryCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CountryName' => [],
            'Phone' => [],
            'PhoneCountryCode' => ['type' => 'CountryCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PhoneCountryPrefix' => [],
            'PhoneAreaOrCityCode' => [],
            'PhoneLocalNumber' => [],
            'PostalCode' => [],
            'AddressID' => [],
            'AddressOwner' => ['type' => 'AddressOwnerCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AddressStatus' => ['type' => 'AddressStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ExternalAddressID' => [],
            'InternationalName' => [],
            'InternationalStateAndCity' => [],
            'InternationalStreet' => [],
            'CompanyName' => [],
            'AddressRecordType' => ['type' => 'AddressRecordTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FirstName' => [],
            'LastName' => [],
            'Phone2' => [],
            'AddressUsage' => ['type' => 'AddressUsageCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ReferenceID' => [],
            'AddressAttribute' => ['type' => 'AddressAttributeType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddressType::_register();
