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
 * This type is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer
 * payments, and the
 * SellerInfo.IntegratedMerchantCreditCardInfo
 * container is no longer returned in
 * GetUser
 * response.
 **/
class IntegratedMerchantCreditCardInfoType extends EbatNs_ComplexType
{
    const TAG = 'IntegratedMerchantCreditCardInfoType';
    const NAME = 'IntegratedMerchantCreditCardInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SiteCodeType[]|null
     */
    protected $SupportedSite = [];


    /**
     * @return string[]|SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSupportedSite($index = null)
    {
        return $this->_dc($index === null
            ? $this->SupportedSite
            : (count($this->SupportedSite) > $index
                ? $this->SupportedSite[$index]
                : null));
    }

    /**
     * @param SiteCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSupportedSite($value, $index = null)
    {
        if ($index === null) {
            $this->SupportedSite = $value;
        } else {
            $this->SupportedSite[$index] = [];
            
            foreach ($value as $item) {
                $this->addSupportedSite($item);
            }
        }
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function addSupportedSite($value)
    {
        $this->SupportedSite[] = $this->_enum($value, SiteCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SupportedSite' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

IntegratedMerchantCreditCardInfoType::_register();
