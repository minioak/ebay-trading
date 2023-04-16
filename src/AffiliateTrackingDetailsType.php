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
 * Type used by the
 * AffiliateTrackingDetails
 * container, which is included in the
 * PlaceOffer
 * call to pass in eBay Partner Network affiliate-related data, so affiliates can earn commissions based on user
 * activity and the number of calls made by the user's application.
 **/
class AffiliateTrackingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'AffiliateTrackingDetailsType';
    const NAME = 'AffiliateTrackingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $TrackingID = null;

    /**
     * @var string|null
     */
    protected $TrackingPartnerCode = null;

    /**
     * @var ApplicationDeviceTypeCodeType|null
     */
    protected $ApplicationDeviceType = null;

    /**
     * @var string|null
     */
    protected $AffiliateUserID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTrackingID()
    {
        return $this->_dc($this->TrackingID, 'TrackingID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTrackingID($value)
    {
        $this->TrackingID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTrackingPartnerCode()
    {
        return $this->_dc($this->TrackingPartnerCode, 'TrackingPartnerCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTrackingPartnerCode($value)
    {
        $this->TrackingPartnerCode = self::_string($value);
    }

    /**
     * @return ApplicationDeviceTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getApplicationDeviceType()
    {
        return $this->_dc($this->ApplicationDeviceType);
    }

    /**
     * @param ApplicationDeviceTypeCodeType|null $value
     * @return void
     */
    public function setApplicationDeviceType($value)
    {
        $this->ApplicationDeviceType = $this->_enum($value, ApplicationDeviceTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAffiliateUserID()
    {
        return $this->_dc($this->AffiliateUserID, 'AffiliateUserID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAffiliateUserID($value)
    {
        $this->AffiliateUserID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TrackingID' => [],
            'TrackingPartnerCode' => [],
            'ApplicationDeviceType' => ['type' => 'ApplicationDeviceTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AffiliateUserID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AffiliateTrackingDetailsType::_register();
