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
 * This call is used to retrieve contact information for a specified eBay user, given that a bidding relationship
 * (as either a buyer or seller) exists between the caller and the user.
 **/
class GetUserContactDetailsRequestType extends AbstractRequestType
{
    const TAG = 'GetUserContactDetailsRequest';
    const NAME = 'GetUserContactDetailsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetUserContactDetails';

    /**
     * @var string|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $ContactID = null;

    /**
     * @var string|null
     */
    protected $RequesterID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getContactID()
    {
        return $this->_dc($this->ContactID, 'ContactID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setContactID($value)
    {
        $this->ContactID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRequesterID()
    {
        return $this->_dc($this->RequesterID, 'RequesterID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRequesterID($value)
    {
        $this->RequesterID = self::_string($value);
    }

    /**
     * @return GetUserContactDetailsResponseType|EbatNs_ResponseError
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
            'ItemID' => [],
            'ContactID' => [],
            'RequesterID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetUserContactDetailsRequestType::_register();
