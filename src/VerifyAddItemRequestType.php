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
 * Enables a seller to specify the definition of a new item and submit the definition to eBay without creating a
 * listing.
 * 
 * Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the
 * recoupment terms before adding or verifying items. This agreement allows eBay to reimburse
 * a buyer during a dispute and then recoup the cost from the seller. The US site is a recoupment site, and
 * the agreement is located <a href="https://scgi.ebay.com/ws/eBayISAPI.dll?CBTRecoupAgreement">here</a>.
 * The list of the sites where a user has agreed to the recoupment terms is returned by the GetUser
 * response.
 **/
class VerifyAddItemRequestType extends AbstractRequestType
{
    const TAG = 'VerifyAddItemRequest';
    const NAME = 'VerifyAddItemRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'VerifyAddItem';

    /**
     * @var ItemType|null
     */
    protected $Item = null;


    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return VerifyAddItemResponseType|EbatNs_ResponseError
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
        self::assignElements(['Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

VerifyAddItemRequestType::_register();
