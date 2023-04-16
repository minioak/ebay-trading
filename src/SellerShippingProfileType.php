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
 * SellerShippingProfile
 * container, which is used in an Add/Revise/Relist Trading API call to reference a shipping business policy.
 * Shipping business policies contain detailed information on domestic and international shipping, including
 * shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations.
 **/
class SellerShippingProfileType extends EbatNs_ComplexType
{
    const TAG = 'SellerShippingProfileType';
    const NAME = 'SellerShippingProfileType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ShippingProfileID = null;

    /**
     * @var string|null
     */
    protected $ShippingProfileName = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingProfileID()
    {
        return $this->_dc($this->ShippingProfileID, 'ShippingProfileID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingProfileID($value)
    {
        $this->ShippingProfileID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingProfileName()
    {
        return $this->_dc($this->ShippingProfileName, 'ShippingProfileName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingProfileName($value)
    {
        $this->ShippingProfileName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingProfileID' => ['type' => 'int'],
            'ShippingProfileName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerShippingProfileType::_register();
