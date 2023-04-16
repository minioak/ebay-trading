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
 * SellerProfiles
 * container, which consists of references to a seller's payment, shipping, and return policy profiles.
 **/
class SellerProfilesType extends EbatNs_ComplexType
{
    const TAG = 'SellerProfilesType';
    const NAME = 'SellerProfilesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellerShippingProfileType|null
     */
    protected $SellerShippingProfile = null;

    /**
     * @var SellerReturnProfileType|null
     */
    protected $SellerReturnProfile = null;

    /**
     * @var SellerPaymentProfileType|null
     */
    protected $SellerPaymentProfile = null;


    /**
     * @return SellerShippingProfileType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerShippingProfile()
    {
        return $this->_dc($this->SellerShippingProfile, 'SellerShippingProfile');
    }

    /**
     * @param SellerShippingProfileType|null $value
     * @return void
     */
    public function setSellerShippingProfile($value)
    {
        $this->SellerShippingProfile = $value;
    }

    /**
     * @return SellerReturnProfileType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerReturnProfile()
    {
        return $this->_dc($this->SellerReturnProfile, 'SellerReturnProfile');
    }

    /**
     * @param SellerReturnProfileType|null $value
     * @return void
     */
    public function setSellerReturnProfile($value)
    {
        $this->SellerReturnProfile = $value;
    }

    /**
     * @return SellerPaymentProfileType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerPaymentProfile()
    {
        return $this->_dc($this->SellerPaymentProfile, 'SellerPaymentProfile');
    }

    /**
     * @param SellerPaymentProfileType|null $value
     * @return void
     */
    public function setSellerPaymentProfile($value)
    {
        $this->SellerPaymentProfile = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SellerShippingProfile' => ['type' => 'SellerShippingProfileType', 'xmlns' => self::XMLNS],
            'SellerReturnProfile' => ['type' => 'SellerReturnProfileType', 'xmlns' => self::XMLNS],
            'SellerPaymentProfile' => ['type' => 'SellerPaymentProfileType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerProfilesType::_register();
