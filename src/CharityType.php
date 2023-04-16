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
 * This type is used to provide details about a nonprofit organization that will benefit from each sale generated
 * from an eBay listing.
 **/
class CharityType extends EbatNs_ComplexType
{
    const TAG = 'CharityType';
    const NAME = 'CharityType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CharityName = null;

    /**
     * @var float|null
     */
    protected $DonationPercent = null;

    /**
     * @var string|null
     */
    protected $CharityID = null;

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
     * @var bool|null "true" or "false"
     */
    protected $CharityListing = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityName()
    {
        return $this->_dc($this->CharityName, 'CharityName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCharityName($value)
    {
        $this->CharityName = self::_string($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDonationPercent()
    {
        return $this->_dc($this->DonationPercent, 'DonationPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setDonationPercent($value)
    {
        $this->DonationPercent = self::_float($value);
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityListing()
    {
        return $this->_dc($this->CharityListing === 'true', 'CharityListing');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCharityListing($value)
    {
        $this->CharityListing = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CharityName' => [],
            'DonationPercent' => ['type' => 'float'],
            'CharityID' => [],
            'Mission' => [],
            'LogoURL' => [],
            'Status' => ['type' => 'CharityStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CharityListing' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CharityType::_register();
