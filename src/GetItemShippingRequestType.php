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
 * This is the base request type of the
 * GetItemShipping
 * call. This call takes an
 * ItemID
 * value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping
 * service that the seller has offered with the listing. This call will also return
 * PickUpInStoreDetails.EligibleForPickupDropOff
 * and
 * PickUpInStoreDetails.EligibleForPickupInStore
 * flags if the item is available for buyer pick-up through the In-Store Pickup or Click and Collect features.
 **/
class GetItemShippingRequestType extends AbstractRequestType
{
    const TAG = 'GetItemShippingRequest';
    const NAME = 'GetItemShippingRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetItemShipping';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var int|null
     */
    protected $QuantitySold = null;

    /**
     * @var string|null
     */
    protected $DestinationPostalCode = null;

    /**
     * @var CountryCodeType|null
     */
    protected $DestinationCountryCode = null;


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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantitySold()
    {
        return $this->_dc($this->QuantitySold, 'QuantitySold');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantitySold($value)
    {
        $this->QuantitySold = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDestinationPostalCode()
    {
        return $this->_dc($this->DestinationPostalCode, 'DestinationPostalCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDestinationPostalCode($value)
    {
        $this->DestinationPostalCode = self::_string($value);
    }

    /**
     * @return CountryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDestinationCountryCode()
    {
        return $this->_dc($this->DestinationCountryCode);
    }

    /**
     * @param CountryCodeType|null $value
     * @return void
     */
    public function setDestinationCountryCode($value)
    {
        $this->DestinationCountryCode = $this->_enum($value, CountryCodeType::class);
    }

    /**
     * @return GetItemShippingResponseType|EbatNs_ResponseError
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
            'QuantitySold' => ['type' => 'int'],
            'DestinationPostalCode' => [],
            'DestinationCountryCode' => ['type' => 'CountryCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetItemShippingRequestType::_register();
