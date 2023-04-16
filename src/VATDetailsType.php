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
 * This type is used to set/display details related to VAT (Value-Added Tax) and Business Seller features.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * VAT is not applicable to all countries, including the US. Sellers must be registered as Business Sellers on
 * the site they are selling on in order to use the Business Seller-related fields.
 * </span>
 **/
class VATDetailsType extends EbatNs_ComplexType
{
    const TAG = 'VATDetailsType';
    const NAME = 'VATDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $BusinessSeller = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $RestrictedToBusiness = null;

    /**
     * @var float|null
     */
    protected $VATPercent = null;

    /**
     * @var string|null
     */
    protected $VATSite = null;

    /**
     * @var string|null
     */
    protected $VATID = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBusinessSeller()
    {
        return $this->_dc($this->BusinessSeller === 'true', 'BusinessSeller');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBusinessSeller($value)
    {
        $this->BusinessSeller = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRestrictedToBusiness()
    {
        return $this->_dc($this->RestrictedToBusiness === 'true', 'RestrictedToBusiness');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRestrictedToBusiness($value)
    {
        $this->RestrictedToBusiness = self::_bool($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATPercent()
    {
        return $this->_dc($this->VATPercent, 'VATPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setVATPercent($value)
    {
        $this->VATPercent = self::_float($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATSite()
    {
        return $this->_dc($this->VATSite, 'VATSite');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVATSite($value)
    {
        $this->VATSite = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATID()
    {
        return $this->_dc($this->VATID, 'VATID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVATID($value)
    {
        $this->VATID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BusinessSeller' => ['type' => 'bool'],
            'RestrictedToBusiness' => ['type' => 'bool'],
            'VATPercent' => ['type' => 'float'],
            'VATSite' => [],
            'VATID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VATDetailsType::_register();
