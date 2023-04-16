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
 * NonProfitSocialAddress
 * container, which identifies the
 * nonprofit organization's social networking site account ID. A
 * NonProfitSocialAddress
 * container will exist for each social networking site that the charity organization is
 * associated with.
 **/
class NonProfitSocialAddressType extends EbatNs_ComplexType
{
    const TAG = 'NonProfitSocialAddressType';
    const NAME = 'NonProfitSocialAddressType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SocialAddressTypeCodeType|null
     */
    protected $SocialAddressType = null;

    /**
     * @var string|null
     */
    protected $SocialAddressId = null;


    /**
     * @return SocialAddressTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSocialAddressType()
    {
        return $this->_dc($this->SocialAddressType);
    }

    /**
     * @param SocialAddressTypeCodeType|null $value
     * @return void
     */
    public function setSocialAddressType($value)
    {
        $this->SocialAddressType = $this->_enum($value, SocialAddressTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSocialAddressId()
    {
        return $this->_dc($this->SocialAddressId, 'SocialAddressId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSocialAddressId($value)
    {
        $this->SocialAddressId = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SocialAddressType' => ['type' => 'SocialAddressTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SocialAddressId' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NonProfitSocialAddressType::_register();
