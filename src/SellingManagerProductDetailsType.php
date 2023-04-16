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
 * Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
 **/
class SellingManagerProductDetailsType extends EbatNs_ComplexType
{
    const TAG = 'SellingManagerProductDetailsType';
    const NAME = 'SellingManagerProductDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ProductName = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductName()
    {
        return $this->_dc($this->ProductName, 'ProductName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProductName($value)
    {
        $this->ProductName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ProductName' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

SellingManagerProductDetailsType::_register();
