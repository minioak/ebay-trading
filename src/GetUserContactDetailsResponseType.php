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
 * Returns contact information to a seller for both bidders
 * and users who have made offers (via Best Offer) during
 * an active listing.
 **/
class GetUserContactDetailsResponseType extends EbatNs_Response
{
    const TAG = 'GetUserContactDetailsResponseType';
    const NAME = 'GetUserContactDetailsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $UserID = null;

    /**
     * @var AddressType|null
     */
    protected $ContactAddress = null;

    /**
     * @var string|null
     */
    protected $RegistrationDate = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = self::_string($value);
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getContactAddress()
    {
        return $this->_dc($this->ContactAddress, 'ContactAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setContactAddress($value)
    {
        $this->ContactAddress = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegistrationDate()
    {
        return $this->_dc($this->RegistrationDate, 'RegistrationDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRegistrationDate($value)
    {
        $this->RegistrationDate = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'UserID' => [],
            'ContactAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'RegistrationDate' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetUserContactDetailsResponseType::_register();
