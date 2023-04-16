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
 * This type defines the
 * ProductDetails
 * container that is returned in the
 * GeteBayDetails
 * response if the <code>ProductDetails</code> value is used in a
 * DetailName
 * field (or no
 * DetailName
 * fields are used).
 * 
 * The
 * ProductDetails
 * container shows the substitute text that can be used in place of an actual product identifier (e.g. EAN, ISBNs,
 * UPC, or MPN) in case the product does not have a product identifier and/or the product identifier is not known by
 * the seller.
 **/
class ProductDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ProductDetailsType';
    const NAME = 'ProductDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ProductIdentifierUnavailableText = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductIdentifierUnavailableText()
    {
        return $this->_dc($this->ProductIdentifierUnavailableText, 'ProductIdentifierUnavailableText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProductIdentifierUnavailableText($value)
    {
        $this->ProductIdentifierUnavailableText = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ProductIdentifierUnavailableText' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

ProductDetailsType::_register();
