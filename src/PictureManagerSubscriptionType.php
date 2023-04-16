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
class PictureManagerSubscriptionType extends EbatNs_ComplexType
{
    const TAG = 'PictureManagerSubscriptionType';
    const NAME = 'PictureManagerSubscriptionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PictureManagerSubscriptionLevelCodeType|null
     */
    protected $SubscriptionLevel = null;

    /**
     * @var AmountType|null
     */
    protected $Fee = null;

    /**
     * @var int|null
     */
    protected $StorageSize = null;


    /**
     * @return PictureManagerSubscriptionLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubscriptionLevel()
    {
        return $this->_dc($this->SubscriptionLevel);
    }

    /**
     * @param PictureManagerSubscriptionLevelCodeType|null $value
     * @return void
     */
    public function setSubscriptionLevel($value)
    {
        $this->SubscriptionLevel = $this->_enum($value, PictureManagerSubscriptionLevelCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFee()
    {
        return $this->_dc($this->Fee, 'Fee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setFee($value)
    {
        $this->Fee = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStorageSize()
    {
        return $this->_dc($this->StorageSize, 'StorageSize');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setStorageSize($value)
    {
        $this->StorageSize = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SubscriptionLevel' => ['type' => 'PictureManagerSubscriptionLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Fee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'StorageSize' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PictureManagerSubscriptionType::_register();
