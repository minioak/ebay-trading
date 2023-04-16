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
 * Enables the authenticated user to to make a bid on an auction item, propose a Best Offer, or purchase a
 * fixed-price/Buy It Now item. Note that this call cannot be used to purchase items that require immediate payment.
 **/
class PlaceOfferRequestType extends AbstractRequestType
{
    const TAG = 'PlaceOfferRequest';
    const NAME = 'PlaceOfferRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'PlaceOffer';

    /**
     * @var OfferType|null
     */
    protected $Offer = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BlockOnWarning = null;

    /**
     * @var AffiliateTrackingDetailsType|null
     */
    protected $AffiliateTrackingDetails = null;

    /**
     * @var NameValueListArrayType|null
     */
    protected $VariationSpecifics = null;


    /**
     * @return OfferType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOffer()
    {
        return $this->_dc($this->Offer, 'Offer');
    }

    /**
     * @param OfferType|null $value
     * @return void
     */
    public function setOffer($value)
    {
        $this->Offer = $value;
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBlockOnWarning()
    {
        return $this->_dc($this->BlockOnWarning === 'true', 'BlockOnWarning');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBlockOnWarning($value)
    {
        $this->BlockOnWarning = self::_bool($value);
    }

    /**
     * @return AffiliateTrackingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAffiliateTrackingDetails()
    {
        return $this->_dc($this->AffiliateTrackingDetails, 'AffiliateTrackingDetails');
    }

    /**
     * @param AffiliateTrackingDetailsType|null $value
     * @return void
     */
    public function setAffiliateTrackingDetails($value)
    {
        $this->AffiliateTrackingDetails = $value;
    }

    /**
     * @return NameValueListArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationSpecifics()
    {
        return $this->_dc($this->VariationSpecifics, 'VariationSpecifics');
    }

    /**
     * @param NameValueListArrayType|null $value
     * @return void
     */
    public function setVariationSpecifics($value)
    {
        $this->VariationSpecifics = $value;
    }

    /**
     * @return PlaceOfferResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Offer' => ['type' => 'OfferType', 'xmlns' => self::XMLNS],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'BlockOnWarning' => ['type' => 'bool'],
            'AffiliateTrackingDetails' => ['type' => 'AffiliateTrackingDetailsType', 'xmlns' => self::XMLNS],
            'VariationSpecifics' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PlaceOfferRequestType::_register();
