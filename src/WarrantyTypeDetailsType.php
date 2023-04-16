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
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 **/
class WarrantyTypeDetailsType extends EbatNs_ComplexType
{
    const TAG = 'WarrantyTypeDetailsType';
    const NAME = 'WarrantyTypeDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $WarrantyTypeOption = null;

    /**
     * @var string|null
     */
    protected $Description = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWarrantyTypeOption()
    {
        return $this->_dc($this->WarrantyTypeOption, 'WarrantyTypeOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setWarrantyTypeOption($value)
    {
        $this->WarrantyTypeOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'WarrantyTypeOption' => [],
            'Description' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

WarrantyTypeDetailsType::_register();
