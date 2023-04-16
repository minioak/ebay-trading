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
 * Type that defines the
 * SellerDiscount
 * container, which contains the ID,
 * name, and amount of the seller discount.
 **/
class SellerDiscountType extends EbatNs_ComplexType
{
    const TAG = 'SellerDiscountType';
    const NAME = 'SellerDiscountType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $CampaignID = null;

    /**
     * @var string|null
     */
    protected $CampaignDisplayName = null;

    /**
     * @var AmountType|null
     */
    protected $ItemDiscountAmount = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingDiscountAmount = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCampaignID()
    {
        return $this->_dc($this->CampaignID, 'CampaignID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCampaignDisplayName()
    {
        return $this->_dc($this->CampaignDisplayName, 'CampaignDisplayName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCampaignDisplayName($value)
    {
        $this->CampaignDisplayName = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemDiscountAmount()
    {
        return $this->_dc($this->ItemDiscountAmount, 'ItemDiscountAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setItemDiscountAmount($value)
    {
        $this->ItemDiscountAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingDiscountAmount()
    {
        return $this->_dc($this->ShippingDiscountAmount, 'ShippingDiscountAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingDiscountAmount($value)
    {
        $this->ShippingDiscountAmount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CampaignID' => ['type' => 'int'],
            'CampaignDisplayName' => [],
            'ItemDiscountAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingDiscountAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerDiscountType::_register();
