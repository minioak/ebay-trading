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
 * Base request of the
 * AddTransactionConfirmationItem
 * call, which is used to end an eBay Motors listing and creates a new Transaction Confirmation Request (TCR) for
 * the motor vehichle, thus enabling the TCR recipient to purchase the item. You can also use this call to see if a
 * new TCR can be created for the specified item.
 **/
class AddTransactionConfirmationItemRequestType extends AbstractRequestType
{
    const TAG = 'AddTransactionConfirmationItemRequest';
    const NAME = 'AddTransactionConfirmationItemRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddTransactionConfirmationItem';

    /**
     * @var UserIDType|null
     */
    protected $RecipientUserID = null;

    /**
     * @var string|null
     */
    protected $VerifyEligibilityOnly = null;

    /**
     * @var string|null
     */
    protected $RecipientPostalCode = null;

    /**
     * @var RecipientRelationCodeType|null
     */
    protected $RecipientRelationType = null;

    /**
     * @var AmountType|null
     */
    protected $NegotiatedPrice = null;

    /**
     * @var SecondChanceOfferDurationCodeType|null
     */
    protected $ListingDuration = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $Comments = null;


    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecipientUserID()
    {
        return $this->_dc($this->RecipientUserID, 'RecipientUserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setRecipientUserID($value)
    {
        $this->RecipientUserID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVerifyEligibilityOnly()
    {
        return $this->_dc($this->VerifyEligibilityOnly, 'VerifyEligibilityOnly');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVerifyEligibilityOnly($value)
    {
        $this->VerifyEligibilityOnly = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecipientPostalCode()
    {
        return $this->_dc($this->RecipientPostalCode, 'RecipientPostalCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRecipientPostalCode($value)
    {
        $this->RecipientPostalCode = self::_string($value);
    }

    /**
     * @return RecipientRelationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecipientRelationType()
    {
        return $this->_dc($this->RecipientRelationType);
    }

    /**
     * @param RecipientRelationCodeType|null $value
     * @return void
     */
    public function setRecipientRelationType($value)
    {
        $this->RecipientRelationType = $this->_enum($value, RecipientRelationCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNegotiatedPrice()
    {
        return $this->_dc($this->NegotiatedPrice, 'NegotiatedPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setNegotiatedPrice($value)
    {
        $this->NegotiatedPrice = $value;
    }

    /**
     * @return SecondChanceOfferDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingDuration()
    {
        return $this->_dc($this->ListingDuration);
    }

    /**
     * @param SecondChanceOfferDurationCodeType|null $value
     * @return void
     */
    public function setListingDuration($value)
    {
        $this->ListingDuration = $this->_enum($value, SecondChanceOfferDurationCodeType::class);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getComments()
    {
        return $this->_dc($this->Comments, 'Comments');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setComments($value)
    {
        $this->Comments = self::_string($value);
    }

    /**
     * @return AddTransactionConfirmationItemResponseType|EbatNs_ResponseError
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
            'RecipientUserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'VerifyEligibilityOnly' => [],
            'RecipientPostalCode' => [],
            'RecipientRelationType' => ['type' => 'RecipientRelationCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NegotiatedPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ListingDuration' => ['type' => 'SecondChanceOfferDurationCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'Comments' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddTransactionConfirmationItemRequestType::_register();
