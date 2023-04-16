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
 * This type is used to show sales tax-related details for a tax jurisdiction. The concept of 'sales tax' is only
 * applicable to eBay US and Canada (English and French) sites.
 **/
class TaxJurisdictionType extends EbatNs_ComplexType
{
    const TAG = 'TaxJurisdictionType';
    const NAME = 'TaxJurisdictionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $JurisdictionID = null;

    /**
     * @var float|null
     */
    protected $SalesTaxPercent = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShippingIncludedInTax = null;

    /**
     * @var string|null
     */
    protected $JurisdictionName = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getJurisdictionID()
    {
        return $this->_dc($this->JurisdictionID, 'JurisdictionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setJurisdictionID($value)
    {
        $this->JurisdictionID = self::_string($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSalesTaxPercent()
    {
        return $this->_dc($this->SalesTaxPercent, 'SalesTaxPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setSalesTaxPercent($value)
    {
        $this->SalesTaxPercent = self::_float($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingIncludedInTax()
    {
        return $this->_dc($this->ShippingIncludedInTax === 'true', 'ShippingIncludedInTax');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShippingIncludedInTax($value)
    {
        $this->ShippingIncludedInTax = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getJurisdictionName()
    {
        return $this->_dc($this->JurisdictionName, 'JurisdictionName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setJurisdictionName($value)
    {
        $this->JurisdictionName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'JurisdictionID' => [],
            'SalesTaxPercent' => ['type' => 'float'],
            'ShippingIncludedInTax' => ['type' => 'bool'],
            'JurisdictionName' => [],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TaxJurisdictionType::_register();
