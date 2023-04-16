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
 * Type defining the <strong>ApplyBuyerProtection</strong> container, which
 * consists of details related to whether or not the item is eligible for buyer protection
 * and which of the buyer protection programs will cover the item.
 **/
class BuyerProtectionDetailsType extends EbatNs_ComplexType
{
    const TAG = 'BuyerProtectionDetailsType';
    const NAME = 'BuyerProtectionDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BuyerProtectionSourceCodeType|null
     */
    protected $BuyerProtectionSource = null;

    /**
     * @var BuyerProtectionCodeType|null
     */
    protected $BuyerProtectionStatus = null;


    /**
     * @return BuyerProtectionSourceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerProtectionSource()
    {
        return $this->_dc($this->BuyerProtectionSource);
    }

    /**
     * @param BuyerProtectionSourceCodeType|null $value
     * @return void
     */
    public function setBuyerProtectionSource($value)
    {
        $this->BuyerProtectionSource = $this->_enum($value, BuyerProtectionSourceCodeType::class);
    }

    /**
     * @return BuyerProtectionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerProtectionStatus()
    {
        return $this->_dc($this->BuyerProtectionStatus);
    }

    /**
     * @param BuyerProtectionCodeType|null $value
     * @return void
     */
    public function setBuyerProtectionStatus($value)
    {
        $this->BuyerProtectionStatus = $this->_enum($value, BuyerProtectionCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BuyerProtectionSource' => ['type' => 'BuyerProtectionSourceCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BuyerProtectionStatus' => ['type' => 'BuyerProtectionCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BuyerProtectionDetailsType::_register();
