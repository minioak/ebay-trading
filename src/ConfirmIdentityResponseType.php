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
 * Confirms the identity of the user by returning the
 * UserID
 * and the
 * EIASToken
 * belonging to the user.
 **/
class ConfirmIdentityResponseType extends EbatNs_Response
{
    const TAG = 'ConfirmIdentityResponseType';
    const NAME = 'ConfirmIdentityResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $UserID = null;


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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['UserID' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

ConfirmIdentityResponseType::_register();
