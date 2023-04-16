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
 * BrandMPN
 * container which is used to identify a product (through a unique product brand and Manufacturer Part Number
 * combination).
 * 
 * 
 * <span class="tablenote">
 * Note:
 * If a brand and/or MPN value is required for a category, it is highly recommended that the brand and MPN
 * name/value pair is also passed in through an
 * ItemSpecifics.NameValueList
 * container, since brand and MPN values may be dropped from the listing if eBay is not able to find a eBay catalog
 * product match based on the provided Brand/MPN pair.
 * </span>
 **/
class BrandMPNType extends EbatNs_ComplexType
{
    const TAG = 'BrandMPNType';
    const NAME = 'BrandMPNType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Brand = null;

    /**
     * @var string|null
     */
    protected $MPN = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBrand()
    {
        return $this->_dc($this->Brand, 'Brand');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBrand($value)
    {
        $this->Brand = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMPN()
    {
        return $this->_dc($this->MPN, 'MPN');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMPN($value)
    {
        $this->MPN = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Brand' => [],
            'MPN' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BrandMPNType::_register();
