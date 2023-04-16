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
 * SupportedSellerProfiles
 * container for all payment,
 * return, and shipping policy profiles that a seller has defined for a site.
 **/
class SupportedSellerProfilesType extends EbatNs_ComplexType
{
    const TAG = 'SupportedSellerProfilesType';
    const NAME = 'SupportedSellerProfilesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SupportedSellerProfileType[]|null
     */
    protected $SupportedSellerProfile = [];


    /**
     * @return SupportedSellerProfileType[]|SupportedSellerProfileType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSupportedSellerProfile($index = null)
    {
        return $this->_dc($index === null
            ? $this->SupportedSellerProfile
            : (count($this->SupportedSellerProfile) > $index
                ? $this->SupportedSellerProfile[$index]
                : null), 'SupportedSellerProfile');
    }

    /**
     * @param SupportedSellerProfileType|null|SupportedSellerProfileType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSupportedSellerProfile($value, $index = null)
    {
        if ($index === null) {
            $this->SupportedSellerProfile = $value;
        } else {
            $this->SupportedSellerProfile[$index] = [];
            
            foreach ($value as $item) {
                $this->addSupportedSellerProfile($item);
            }
        }
    }

    /**
     * @param SupportedSellerProfileType|null $value
     * @return void
     */
    public function addSupportedSellerProfile($value)
    {
        $this->SupportedSellerProfile[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SupportedSellerProfile' => ['type' => 'SupportedSellerProfileType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

SupportedSellerProfilesType::_register();
