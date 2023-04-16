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
 * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return
 * policy.
 **/
class RestockingFeeValueDetailsType extends EbatNs_ComplexType
{
    const TAG = 'RestockingFeeValueDetailsType';
    const NAME = 'RestockingFeeValueDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $RestockingFeeValueOption = null;

    /**
     * @var string|null
     */
    protected $Description = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRestockingFeeValueOption()
    {
        return $this->_dc($this->RestockingFeeValueOption, 'RestockingFeeValueOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRestockingFeeValueOption($value)
    {
        $this->RestockingFeeValueOption = self::_string($value);
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
            'RestockingFeeValueOption' => [],
            'Description' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RestockingFeeValueDetailsType::_register();
