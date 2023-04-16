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
 * Type defining the
 * BestOfferDetails
 * container, which consists
 * of Best Offer details associated with a listing. The
 * BestOfferEnabled
 * field in this container is used by
 * Add
 * /
 * Revise
 * /
 * Relist
 * calls to enable the Best Offer feature on a listing.
 **/
class BestOfferDetailsType extends EbatNs_ComplexType
{
    const TAG = 'BestOfferDetailsType';
    const NAME = 'BestOfferDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $BestOfferCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BestOfferEnabled = null;

    /**
     * @var AmountType|null
     */
    protected $BestOffer = null;

    /**
     * @var BestOfferStatusCodeType|null
     */
    protected $BestOfferStatus = null;

    /**
     * @var BestOfferTypeCodeType|null
     */
    protected $BestOfferType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $NewBestOffer = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferCount()
    {
        return $this->_dc($this->BestOfferCount, 'BestOfferCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBestOfferCount($value)
    {
        $this->BestOfferCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferEnabled()
    {
        return $this->_dc($this->BestOfferEnabled === 'true', 'BestOfferEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBestOfferEnabled($value)
    {
        $this->BestOfferEnabled = self::_bool($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOffer()
    {
        return $this->_dc($this->BestOffer, 'BestOffer');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setBestOffer($value)
    {
        $this->BestOffer = $value;
    }

    /**
     * @return BestOfferStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferStatus()
    {
        return $this->_dc($this->BestOfferStatus);
    }

    /**
     * @param BestOfferStatusCodeType|null $value
     * @return void
     */
    public function setBestOfferStatus($value)
    {
        $this->BestOfferStatus = $this->_enum($value, BestOfferStatusCodeType::class);
    }

    /**
     * @return BestOfferTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferType()
    {
        return $this->_dc($this->BestOfferType);
    }

    /**
     * @param BestOfferTypeCodeType|null $value
     * @return void
     */
    public function setBestOfferType($value)
    {
        $this->BestOfferType = $this->_enum($value, BestOfferTypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNewBestOffer()
    {
        return $this->_dc($this->NewBestOffer === 'true', 'NewBestOffer');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setNewBestOffer($value)
    {
        $this->NewBestOffer = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BestOfferCount' => ['type' => 'int'],
            'BestOfferEnabled' => ['type' => 'bool'],
            'BestOffer' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'BestOfferStatus' => ['type' => 'BestOfferStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BestOfferType' => ['type' => 'BestOfferTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NewBestOffer' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BestOfferDetailsType::_register();
