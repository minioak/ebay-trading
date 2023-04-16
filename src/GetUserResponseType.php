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
 * Base response of the
 * GetUser
 * call. This response includes detailed information about the user, including Feedback data, eBay registration
 * date, selling feature eligibility, valid subsriptions, etc.
 **/
class GetUserResponseType extends EbatNs_Response
{
    const TAG = 'GetUserResponseType';
    const NAME = 'GetUserResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var UserType|null
     */
    protected $User = null;


    /**
     * @return UserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUser()
    {
        return $this->_dc($this->User, 'User');
    }

    /**
     * @param UserType|null $value
     * @return void
     */
    public function setUser($value)
    {
        $this->User = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['User' => ['type' => 'UserType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetUserResponseType::_register();
