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
 * DO NOT USE THIS TYPE
 * . This type is only for internal or future use.
 **/
class OfferDiscountsType extends EbatNs_ComplexType
{
    const TAG = 'OfferDiscountsType';
    const NAME = 'OfferDiscountsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $SellerMarketing = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerMarketing()
    {
        return $this->_dc($this->SellerMarketing, 'SellerMarketing');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setSellerMarketing($value)
    {
        $this->SellerMarketing = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SellerMarketing' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

OfferDiscountsType::_register();
