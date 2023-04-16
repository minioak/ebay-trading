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
 * Packages supported by the enclosing shipping service.
 **/
class ShippingServicePackageDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ShippingServicePackageDetailsType';
    const NAME = 'ShippingServicePackageDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ShippingPackageCodeType|null
     */
    protected $Name = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DimensionsRequired = null;


    /**
     * @return ShippingPackageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name);
    }

    /**
     * @param ShippingPackageCodeType|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = $this->_enum($value, ShippingPackageCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDimensionsRequired()
    {
        return $this->_dc($this->DimensionsRequired === 'true', 'DimensionsRequired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDimensionsRequired($value)
    {
        $this->DimensionsRequired = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => ['type' => 'ShippingPackageCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DimensionsRequired' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingServicePackageDetailsType::_register();
