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
 * Charity
 * container returned in
 * GetCharities
 * , which consists of all details
 * related to a nonprofit charity organization.
 **/
class CharityInfoType extends EbatNs_ComplexType
{
    const TAG = 'CharityInfoType';
    const NAME = 'CharityInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ListingNPEmailNotifPref = null;

    /**
     * @var string|null
     */
    protected $ListingNPEmail = null;

    /**
     * @var string|null
     */
    protected $ListingNPContactName = null;

    /**
     * @var string|null
     */
    protected $Mission = null;

    /**
     * @var string|null
     */
    protected $LogoURL = null;

    /**
     * @var CharityStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var string|null
     */
    protected $SearchableString = null;

    /**
     * @var int|null
     */
    protected $CharityRegion = null;

    /**
     * @var int|null
     */
    protected $CharityDomain = null;

    /**
     * @var string|null
     */
    protected $CharityID = null;

    /**
     * @var string|null
     */
    protected $LogoURLSelling = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DisplayLogoSelling = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DisplayNameInCheckout = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowMultipleDonationAmountInCheckout = null;

    /**
     * @var int|null
     */
    protected $PopularityIndex = null;

    /**
     * @var string|null
     */
    protected $EIN = null;

    /**
     * @var string|null
     */
    protected $NonProfitSecondName = null;

    /**
     * @var NonProfitAddressType[]|null
     */
    protected $NonProfitAddress = [];

    /**
     * @var NonProfitSocialAddressType[]|null
     */
    protected $NonProfitSocialAddress = [];


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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingNPEmailNotifPref()
    {
        return $this->_dc($this->ListingNPEmailNotifPref === 'true', 'ListingNPEmailNotifPref');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setListingNPEmailNotifPref($value)
    {
        $this->ListingNPEmailNotifPref = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingNPEmail()
    {
        return $this->_dc($this->ListingNPEmail, 'ListingNPEmail');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setListingNPEmail($value)
    {
        $this->ListingNPEmail = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingNPContactName()
    {
        return $this->_dc($this->ListingNPContactName, 'ListingNPContactName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setListingNPContactName($value)
    {
        $this->ListingNPContactName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMission()
    {
        return $this->_dc($this->Mission, 'Mission');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMission($value)
    {
        $this->Mission = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogoURL()
    {
        return $this->_dc($this->LogoURL, 'LogoURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLogoURL($value)
    {
        $this->LogoURL = self::_string($value);
    }

    /**
     * @return CharityStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param CharityStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, CharityStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchableString()
    {
        return $this->_dc($this->SearchableString, 'SearchableString');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSearchableString($value)
    {
        $this->SearchableString = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityRegion()
    {
        return $this->_dc($this->CharityRegion, 'CharityRegion');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCharityRegion($value)
    {
        $this->CharityRegion = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityDomain()
    {
        return $this->_dc($this->CharityDomain, 'CharityDomain');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCharityDomain($value)
    {
        $this->CharityDomain = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityID()
    {
        return $this->_dc($this->CharityID, 'CharityID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCharityID($value)
    {
        $this->CharityID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogoURLSelling()
    {
        return $this->_dc($this->LogoURLSelling, 'LogoURLSelling');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLogoURLSelling($value)
    {
        $this->LogoURLSelling = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayLogoSelling()
    {
        return $this->_dc($this->DisplayLogoSelling === 'true', 'DisplayLogoSelling');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDisplayLogoSelling($value)
    {
        $this->DisplayLogoSelling = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayNameInCheckout()
    {
        return $this->_dc($this->DisplayNameInCheckout === 'true', 'DisplayNameInCheckout');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDisplayNameInCheckout($value)
    {
        $this->DisplayNameInCheckout = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowMultipleDonationAmountInCheckout()
    {
        return $this->_dc($this->ShowMultipleDonationAmountInCheckout === 'true', 'ShowMultipleDonationAmountInCheckout');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowMultipleDonationAmountInCheckout($value)
    {
        $this->ShowMultipleDonationAmountInCheckout = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPopularityIndex()
    {
        return $this->_dc($this->PopularityIndex, 'PopularityIndex');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPopularityIndex($value)
    {
        $this->PopularityIndex = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEIN()
    {
        return $this->_dc($this->EIN, 'EIN');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEIN($value)
    {
        $this->EIN = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNonProfitSecondName()
    {
        return $this->_dc($this->NonProfitSecondName, 'NonProfitSecondName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNonProfitSecondName($value)
    {
        $this->NonProfitSecondName = self::_string($value);
    }

    /**
     * @return NonProfitAddressType[]|NonProfitAddressType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getNonProfitAddress($index = null)
    {
        return $this->_dc($index === null
            ? $this->NonProfitAddress
            : (count($this->NonProfitAddress) > $index
                ? $this->NonProfitAddress[$index]
                : null), 'NonProfitAddress');
    }

    /**
     * @param NonProfitAddressType|null|NonProfitAddressType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setNonProfitAddress($value, $index = null)
    {
        if ($index === null) {
            $this->NonProfitAddress = $value;
        } else {
            $this->NonProfitAddress[$index] = [];
            
            foreach ($value as $item) {
                $this->addNonProfitAddress($item);
            }
        }
    }

    /**
     * @param NonProfitAddressType|null $value
     * @return void
     */
    public function addNonProfitAddress($value)
    {
        $this->NonProfitAddress[] = $value;
    }

    /**
     * @return NonProfitSocialAddressType[]|NonProfitSocialAddressType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getNonProfitSocialAddress($index = null)
    {
        return $this->_dc($index === null
            ? $this->NonProfitSocialAddress
            : (count($this->NonProfitSocialAddress) > $index
                ? $this->NonProfitSocialAddress[$index]
                : null), 'NonProfitSocialAddress');
    }

    /**
     * @param NonProfitSocialAddressType|null|NonProfitSocialAddressType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setNonProfitSocialAddress($value, $index = null)
    {
        if ($index === null) {
            $this->NonProfitSocialAddress = $value;
        } else {
            $this->NonProfitSocialAddress[$index] = [];
            
            foreach ($value as $item) {
                $this->addNonProfitSocialAddress($item);
            }
        }
    }

    /**
     * @param NonProfitSocialAddressType|null $value
     * @return void
     */
    public function addNonProfitSocialAddress($value)
    {
        $this->NonProfitSocialAddress[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'ListingNPEmailNotifPref' => ['type' => 'bool'],
            'ListingNPEmail' => [],
            'ListingNPContactName' => [],
            'Mission' => [],
            'LogoURL' => [],
            'Status' => ['type' => 'CharityStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SearchableString' => [],
            'CharityRegion' => ['type' => 'int'],
            'CharityDomain' => ['type' => 'int', 'cardinality' => '0..3'],
            'CharityID' => [],
            'LogoURLSelling' => [],
            'DisplayLogoSelling' => ['type' => 'bool'],
            'DisplayNameInCheckout' => ['type' => 'bool'],
            'Description' => [],
            'ShowMultipleDonationAmountInCheckout' => ['type' => 'bool'],
            'PopularityIndex' => ['type' => 'int'],
            'EIN' => [],
            'NonProfitSecondName' => [],
            'NonProfitAddress' => ['type' => 'NonProfitAddressType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'NonProfitSocialAddress' => ['type' => 'NonProfitSocialAddressType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes(['id' => ['type' => 'string']]);
    }

}

CharityInfoType::_register();
