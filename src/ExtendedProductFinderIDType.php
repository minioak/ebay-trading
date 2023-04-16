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
class ExtendedProductFinderIDType extends EbatNs_ComplexType
{
    const TAG = 'ExtendedProductFinderIDType';
    const NAME = 'ExtendedProductFinderIDType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ProductFinderID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ProductFinderBuySide = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductFinderID()
    {
        return $this->_dc($this->ProductFinderID, 'ProductFinderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setProductFinderID($value)
    {
        $this->ProductFinderID = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductFinderBuySide()
    {
        return $this->_dc($this->ProductFinderBuySide === 'true', 'ProductFinderBuySide');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setProductFinderBuySide($value)
    {
        $this->ProductFinderBuySide = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ProductFinderID' => ['type' => 'int'],
            'ProductFinderBuySide' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ExtendedProductFinderIDType::_register();
