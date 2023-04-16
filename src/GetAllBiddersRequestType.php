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
 * This is the base request type for the
 * GetAllBidders
 * call, which is used to retrieve bidders from an active or recently-ended auction listing.
 **/
class GetAllBiddersRequestType extends AbstractRequestType
{
    const TAG = 'GetAllBiddersRequest';
    const NAME = 'GetAllBiddersRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetAllBidders';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var GetAllBiddersModeCodeType|null
     */
    protected $CallMode = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeBiddingSummary = null;


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
     * @return GetAllBiddersModeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCallMode()
    {
        return $this->_dc($this->CallMode);
    }

    /**
     * @param GetAllBiddersModeCodeType|null $value
     * @return void
     */
    public function setCallMode($value)
    {
        $this->CallMode = $this->_enum($value, GetAllBiddersModeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeBiddingSummary()
    {
        return $this->_dc($this->IncludeBiddingSummary === 'true', 'IncludeBiddingSummary');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeBiddingSummary($value)
    {
        $this->IncludeBiddingSummary = self::_bool($value);
    }

    /**
     * @return GetAllBiddersResponseType|EbatNs_ResponseError
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
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'CallMode' => ['type' => 'GetAllBiddersModeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'IncludeBiddingSummary' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetAllBiddersRequestType::_register();
