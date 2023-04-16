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
 * The
 * PlaceOffer
 * response notifies you about the success and result
 * of the call.
 **/
class PlaceOfferResponseType extends EbatNs_Response
{
    const TAG = 'PlaceOfferResponseType';
    const NAME = 'PlaceOfferResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingStatusType|null
     */
    protected $SellingStatus = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var BestOfferType|null
     */
    protected $BestOffer = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


    /**
     * @return SellingStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingStatus()
    {
        return $this->_dc($this->SellingStatus, 'SellingStatus');
    }

    /**
     * @param SellingStatusType|null $value
     * @return void
     */
    public function setSellingStatus($value)
    {
        $this->SellingStatus = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
    }

    /**
     * @return BestOfferType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOffer()
    {
        return $this->_dc($this->BestOffer, 'BestOffer');
    }

    /**
     * @param BestOfferType|null $value
     * @return void
     */
    public function setBestOffer($value)
    {
        $this->BestOffer = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderLineItemID()
    {
        return $this->_dc($this->OrderLineItemID, 'OrderLineItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderLineItemID($value)
    {
        $this->OrderLineItemID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SellingStatus' => ['type' => 'SellingStatusType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'BestOffer' => ['type' => 'BestOfferType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PlaceOfferResponseType::_register();
