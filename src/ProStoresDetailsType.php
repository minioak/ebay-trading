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
 * This type is deprecated.
 **/
class ProStoresDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ProStoresDetailsType';
    const NAME = 'ProStoresDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $SellerThirdPartyUsername = null;

    /**
     * @var string|null
     */
    protected $StoreName = null;

    /**
     * @var EnableCodeType|null
     */
    protected $Status = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerThirdPartyUsername()
    {
        return $this->_dc($this->SellerThirdPartyUsername, 'SellerThirdPartyUsername');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerThirdPartyUsername($value)
    {
        $this->SellerThirdPartyUsername = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreName()
    {
        return $this->_dc($this->StoreName, 'StoreName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStoreName($value)
    {
        $this->StoreName = self::_string($value);
    }

    /**
     * @return EnableCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param EnableCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, EnableCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SellerThirdPartyUsername' => [],
            'StoreName' => [],
            'Status' => ['type' => 'EnableCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ProStoresDetailsType::_register();
