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
 * These codes indicate the current state or status of an eBay
 * user account.
 **/
class UserStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'UserStatusCodeType';
    const NAME = 'UserStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the status of the user's eBay account is unknown. This value should seldom, if ever, be
     * returned and typically represents a problem.
     **/
    const CodeType_Unknown = 'Unknown';

    /**
     * This value indicates that the eBay user's account is suspended. A user with a suspended account cannot
     * participate in buying or selling activity.
     **/
    const CodeType_Suspended = 'Suspended';

    /**
     * This value indicates that the eBay user's account is a confirmed, active account.
     **/
    const CodeType_Confirmed = 'Confirmed';

    /**
     * This value indicates that the eBay User has completed online registration, but has either not responded to
     * confirmation email or has not yet been sent the confirmation email. Or, if this user began registration as a
     * seller but did not complete it, the user will have this status. A seller with this status can begin to list an
     * item but cannot complete the listing until the seller completes seller registration.
     **/
    const CodeType_Unconfirmed = 'Unconfirmed';

    /**
     * This value indicates that the user originally registered on AuctionWeb (pre-eBay), but that user never
     * re-registered on eBay. Note that there are very few (if any) eBay accounts in the 'Ghost' state.
     **/
    const CodeType_Ghost = 'Ghost';

    /**
     * This value indicates that the eBay user's account is in maintenance mode.
     **/
    const CodeType_InMaintenance = 'InMaintenance';

    /**
     * This value indicates that the eBay user's account has been deleted.
     **/
    const CodeType_Deleted = 'Deleted';

    /**
     * This value indicates that the user has completed the registration and confirmation process, but needs to complete
     * verification of credit card information. A user has this status if this user began registration as a seller but
     * did not complete it. A seller with this status can begin to list an item but cannot complete the listing until
     * the seller completes seller registration.
     **/
    const CodeType_CreditCardVerify = 'CreditCardVerify';

    /**
     * This value indicates that the eBay user's account is currently on hold. A common reason for a user's account to
     * go on hold is a non-payment of the monthly eBay invoice. A user cannot sell or buy items if their account is on
     * hold.
     **/
    const CodeType_AccountOnHold = 'AccountOnHold';

    /**
     * This value indicates that the user record has been merged with another account record for the same user
     **/
    const CodeType_Merged = 'Merged';

    /**
     * This value indicates that the eBay User has completed online registration, and eBay has just sent the user a
     * registration code in a confirmation email. The eBay user will have to respond to the confirmation email to get
     * their account confirmed.
     **/
    const CodeType_RegistrationCodeMailOut = 'RegistrationCodeMailOut';

    /**
     * This value indicates that the user has scheduled an account closure but eBay has yet to process the closure
     * request.
     **/
    const CodeType_TermPending = 'TermPending';

    /**
     * <span class="tablenote">
     * Note:
     * The Half.com site has been shut down, so this value is no longer applicable.
     * </span>
     * User has completed the registration for Half.com and opted
     * to automatically also be registered with eBay, but the
     * registration confirmation is still pending
     **/
    const CodeType_UnconfirmedHalfOptIn = 'UnconfirmedHalfOptIn';

    /**
     * <span class="tablenote">
     * Note:
     * The Half.com site has been shut down, so this value is no longer applicable.
     * </span>
     * User has completed the registration for Half.com and opted to automatically also be registered with eBay,
     * but the user needs to complete verification of credit card information. A user has this status on eBay if this
     * user began registration as a seller but did not complete it. A seller with this status can begin to list an item
     * but cannot complete the listing until the seller completes seller registration.
     **/
    const CodeType_CreditCardVerifyHalfOptIn = 'CreditCardVerifyHalfOptIn';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_UnconfirmedPassport = 'UnconfirmedPassport';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_CreditCardVerifyPassport = 'CreditCardVerifyPassport';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_UnconfirmedExpress = 'UnconfirmedExpress';

    /**
     * This value indicates that the user is a guest user. The user has not added a password and has not confirmed an
     * email address.
     * The user has not signed up as a regular user, but has agreed to the User Agreement and Privacy Policy.
     * The user has been through the buying flow for a guest;
     * the user has been through checkout using the streamlined Buy-It-Now flow.
     **/
    const CodeType_Guest = 'Guest';

    /**
     * Reserved for internal or future use
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return UserStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param UserStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isUnknown()
    {
        return $this->_value === self::CodeType_Unknown;
    }

    /**
     * @return bool
     */
    public function isSuspended()
    {
        return $this->_value === self::CodeType_Suspended;
    }

    /**
     * @return bool
     */
    public function isConfirmed()
    {
        return $this->_value === self::CodeType_Confirmed;
    }

    /**
     * @return bool
     */
    public function isUnconfirmed()
    {
        return $this->_value === self::CodeType_Unconfirmed;
    }

    /**
     * @return bool
     */
    public function isGhost()
    {
        return $this->_value === self::CodeType_Ghost;
    }

    /**
     * @return bool
     */
    public function isInMaintenance()
    {
        return $this->_value === self::CodeType_InMaintenance;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->_value === self::CodeType_Deleted;
    }

    /**
     * @return bool
     */
    public function isCreditCardVerify()
    {
        return $this->_value === self::CodeType_CreditCardVerify;
    }

    /**
     * @return bool
     */
    public function isAccountOnHold()
    {
        return $this->_value === self::CodeType_AccountOnHold;
    }

    /**
     * @return bool
     */
    public function isMerged()
    {
        return $this->_value === self::CodeType_Merged;
    }

    /**
     * @return bool
     */
    public function isRegistrationCodeMailOut()
    {
        return $this->_value === self::CodeType_RegistrationCodeMailOut;
    }

    /**
     * @return bool
     */
    public function isTermPending()
    {
        return $this->_value === self::CodeType_TermPending;
    }

    /**
     * @return bool
     */
    public function isUnconfirmedHalfOptIn()
    {
        return $this->_value === self::CodeType_UnconfirmedHalfOptIn;
    }

    /**
     * @return bool
     */
    public function isCreditCardVerifyHalfOptIn()
    {
        return $this->_value === self::CodeType_CreditCardVerifyHalfOptIn;
    }

    /**
     * @return bool
     */
    public function isUnconfirmedPassport()
    {
        return $this->_value === self::CodeType_UnconfirmedPassport;
    }

    /**
     * @return bool
     */
    public function isCreditCardVerifyPassport()
    {
        return $this->_value === self::CodeType_CreditCardVerifyPassport;
    }

    /**
     * @return bool
     */
    public function isUnconfirmedExpress()
    {
        return $this->_value === self::CodeType_UnconfirmedExpress;
    }

    /**
     * @return bool
     */
    public function isGuest()
    {
        return $this->_value === self::CodeType_Guest;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

UserStatusCodeType::_register();
