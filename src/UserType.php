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
 * Type to contain the data for one eBay user. Depending on the context, the user
 * might be the seller or the buyer on either side of an order, or the bidder or winning bidder
 * in a listing. An object of this type is returned by a number of calls, including
 * the
 * GetUser
 * call.
 **/
class UserType extends EbatNs_ComplexType
{
    const TAG = 'UserType';
    const NAME = 'UserType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $AboutMePage = null;

    /**
     * @var string|null
     */
    protected $EIASToken = null;

    /**
     * @var string|null
     */
    protected $Email = null;

    /**
     * @var int|null
     */
    protected $FeedbackScore = null;

    /**
     * @var int|null
     */
    protected $UniqueNegativeFeedbackCount = null;

    /**
     * @var int|null
     */
    protected $UniquePositiveFeedbackCount = null;

    /**
     * @var float|null
     */
    protected $PositiveFeedbackPercent = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $FeedbackPrivate = null;

    /**
     * @var FeedbackRatingStarCodeType|null
     */
    protected $FeedbackRatingStar = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IDVerified = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayGoodStanding = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $NewUser = null;

    /**
     * @var AddressType|null
     */
    protected $RegistrationAddress = null;

    /**
     * @var string|null
     */
    protected $RegistrationDate = null;

    /**
     * @var SiteCodeType|null
     */
    protected $Site = null;

    /**
     * @var UserStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UserIDChanged = null;

    /**
     * @var string|null
     */
    protected $UserIDLastChanged = null;

    /**
     * @var VATStatusCodeType|null
     */
    protected $VATStatus = null;

    /**
     * @var BuyerType|null
     */
    protected $BuyerInfo = null;

    /**
     * @var SellerType|null
     */
    protected $SellerInfo = null;

    /**
     * @var BusinessRoleType|null
     */
    protected $BusinessRole = null;

    /**
     * @var CharityAffiliationsType|null
     */
    protected $CharityAffiliations = null;

    /**
     * @var PayPalAccountLevelCodeType|null
     */
    protected $PayPalAccountLevel = null;

    /**
     * @var PayPalAccountTypeCodeType|null
     */
    protected $PayPalAccountType = null;

    /**
     * @var PayPalAccountStatusCodeType|null
     */
    protected $PayPalAccountStatus = null;

    /**
     * @var EBaySubscriptionTypeCodeType[]|null
     */
    protected $UserSubscription = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $SiteVerified = null;

    /**
     * @var string[]|null
     */
    protected $SkypeID = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $eBayWikiReadOnly = null;

    /**
     * @var int|null
     */
    protected $TUVLevel = null;

    /**
     * @var string|null
     */
    protected $VATID = null;

    /**
     * @var SellerPaymentMethodCodeType|null
     */
    protected $SellerPaymentMethod = null;

    /**
     * @var BiddingSummaryType|null
     */
    protected $BiddingSummary = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UserAnonymized = null;

    /**
     * @var int|null
     */
    protected $UniqueNeutralFeedbackCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EnterpriseSeller = null;

    /**
     * @var string|null
     */
    protected $BillingEmail = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $QualifiesForSelling = null;

    /**
     * @var string|null
     */
    protected $StaticAlias = null;

    /**
     * @var AddressType|null
     */
    protected $ShippingAddress = null;

    /**
     * @var MembershipDetailsType|null
     */
    protected $Membership = null;

    /**
     * @var string|null
     */
    protected $UserFirstName = null;

    /**
     * @var string|null
     */
    protected $UserLastName = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAboutMePage()
    {
        return $this->_dc($this->AboutMePage === 'true', 'AboutMePage');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAboutMePage($value)
    {
        $this->AboutMePage = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEIASToken()
    {
        return $this->_dc($this->EIASToken, 'EIASToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEIASToken($value)
    {
        $this->EIASToken = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmail()
    {
        return $this->_dc($this->Email, 'Email');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEmail($value)
    {
        $this->Email = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackScore()
    {
        return $this->_dc($this->FeedbackScore, 'FeedbackScore');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFeedbackScore($value)
    {
        $this->FeedbackScore = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniqueNegativeFeedbackCount()
    {
        return $this->_dc($this->UniqueNegativeFeedbackCount, 'UniqueNegativeFeedbackCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniqueNegativeFeedbackCount($value)
    {
        $this->UniqueNegativeFeedbackCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniquePositiveFeedbackCount()
    {
        return $this->_dc($this->UniquePositiveFeedbackCount, 'UniquePositiveFeedbackCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniquePositiveFeedbackCount($value)
    {
        $this->UniquePositiveFeedbackCount = self::_int($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPositiveFeedbackPercent()
    {
        return $this->_dc($this->PositiveFeedbackPercent, 'PositiveFeedbackPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setPositiveFeedbackPercent($value)
    {
        $this->PositiveFeedbackPercent = self::_float($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackPrivate()
    {
        return $this->_dc($this->FeedbackPrivate === 'true', 'FeedbackPrivate');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFeedbackPrivate($value)
    {
        $this->FeedbackPrivate = self::_bool($value);
    }

    /**
     * @return FeedbackRatingStarCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackRatingStar()
    {
        return $this->_dc($this->FeedbackRatingStar);
    }

    /**
     * @param FeedbackRatingStarCodeType|null $value
     * @return void
     */
    public function setFeedbackRatingStar($value)
    {
        $this->FeedbackRatingStar = $this->_enum($value, FeedbackRatingStarCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIDVerified()
    {
        return $this->_dc($this->IDVerified === 'true', 'IDVerified');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIDVerified($value)
    {
        $this->IDVerified = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayGoodStanding()
    {
        return $this->_dc($this->eBayGoodStanding === 'true', 'eBayGoodStanding');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayGoodStanding($value)
    {
        $this->eBayGoodStanding = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNewUser()
    {
        return $this->_dc($this->NewUser === 'true', 'NewUser');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setNewUser($value)
    {
        $this->NewUser = self::_bool($value);
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegistrationAddress()
    {
        return $this->_dc($this->RegistrationAddress, 'RegistrationAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setRegistrationAddress($value)
    {
        $this->RegistrationAddress = $value;
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
     * @return SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSite()
    {
        return $this->_dc($this->Site);
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function setSite($value)
    {
        $this->Site = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return UserStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param UserStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, UserStatusCodeType::class);
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserIDChanged()
    {
        return $this->_dc($this->UserIDChanged === 'true', 'UserIDChanged');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUserIDChanged($value)
    {
        $this->UserIDChanged = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserIDLastChanged()
    {
        return $this->_dc($this->UserIDLastChanged, 'UserIDLastChanged');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserIDLastChanged($value)
    {
        $this->UserIDLastChanged = self::_string($value);
    }

    /**
     * @return VATStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATStatus()
    {
        return $this->_dc($this->VATStatus);
    }

    /**
     * @param VATStatusCodeType|null $value
     * @return void
     */
    public function setVATStatus($value)
    {
        $this->VATStatus = $this->_enum($value, VATStatusCodeType::class);
    }

    /**
     * @return BuyerType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerInfo()
    {
        return $this->_dc($this->BuyerInfo, 'BuyerInfo');
    }

    /**
     * @param BuyerType|null $value
     * @return void
     */
    public function setBuyerInfo($value)
    {
        $this->BuyerInfo = $value;
    }

    /**
     * @return SellerType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerInfo()
    {
        return $this->_dc($this->SellerInfo, 'SellerInfo');
    }

    /**
     * @param SellerType|null $value
     * @return void
     */
    public function setSellerInfo($value)
    {
        $this->SellerInfo = $value;
    }

    /**
     * @return BusinessRoleType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBusinessRole()
    {
        return $this->_dc($this->BusinessRole);
    }

    /**
     * @param BusinessRoleType|null $value
     * @return void
     */
    public function setBusinessRole($value)
    {
        $this->BusinessRole = $this->_enum($value, BusinessRoleType::class);
    }

    /**
     * @return CharityAffiliationsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityAffiliations()
    {
        return $this->_dc($this->CharityAffiliations, 'CharityAffiliations');
    }

    /**
     * @param CharityAffiliationsType|null $value
     * @return void
     */
    public function setCharityAffiliations($value)
    {
        $this->CharityAffiliations = $value;
    }

    /**
     * @return PayPalAccountLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalAccountLevel()
    {
        return $this->_dc($this->PayPalAccountLevel);
    }

    /**
     * @param PayPalAccountLevelCodeType|null $value
     * @return void
     */
    public function setPayPalAccountLevel($value)
    {
        $this->PayPalAccountLevel = $this->_enum($value, PayPalAccountLevelCodeType::class);
    }

    /**
     * @return PayPalAccountTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalAccountType()
    {
        return $this->_dc($this->PayPalAccountType);
    }

    /**
     * @param PayPalAccountTypeCodeType|null $value
     * @return void
     */
    public function setPayPalAccountType($value)
    {
        $this->PayPalAccountType = $this->_enum($value, PayPalAccountTypeCodeType::class);
    }

    /**
     * @return PayPalAccountStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalAccountStatus()
    {
        return $this->_dc($this->PayPalAccountStatus);
    }

    /**
     * @param PayPalAccountStatusCodeType|null $value
     * @return void
     */
    public function setPayPalAccountStatus($value)
    {
        $this->PayPalAccountStatus = $this->_enum($value, PayPalAccountStatusCodeType::class);
    }

    /**
     * @return string[]|EBaySubscriptionTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getUserSubscription($index = null)
    {
        return $this->_dc($index === null
            ? $this->UserSubscription
            : (count($this->UserSubscription) > $index
                ? $this->UserSubscription[$index]
                : null));
    }

    /**
     * @param EBaySubscriptionTypeCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setUserSubscription($value, $index = null)
    {
        if ($index === null) {
            $this->UserSubscription = $value;
        } else {
            $this->UserSubscription[$index] = [];
            
            foreach ($value as $item) {
                $this->addUserSubscription($item);
            }
        }
    }

    /**
     * @param EBaySubscriptionTypeCodeType|null $value
     * @return void
     */
    public function addUserSubscription($value)
    {
        $this->UserSubscription[] = $this->_enum($value, EBaySubscriptionTypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSiteVerified()
    {
        return $this->_dc($this->SiteVerified === 'true', 'SiteVerified');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSiteVerified($value)
    {
        $this->SiteVerified = self::_bool($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSkypeID($index = null)
    {
        return $this->_dc($index === null
            ? $this->SkypeID
            : (count($this->SkypeID) > $index
                ? $this->SkypeID[$index]
                : null), 'SkypeID');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSkypeID($value, $index = null)
    {
        if ($index === null) {
            $this->SkypeID = $value;
        } else {
            $this->SkypeID[$index] = [];
            
            foreach ($value as $item) {
                $this->addSkypeID($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addSkypeID($value)
    {
        $this->SkypeID[] = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayWikiReadOnly()
    {
        return $this->_dc($this->eBayWikiReadOnly === 'true', 'eBayWikiReadOnly');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEBayWikiReadOnly($value)
    {
        $this->eBayWikiReadOnly = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTUVLevel()
    {
        return $this->_dc($this->TUVLevel, 'TUVLevel');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTUVLevel($value)
    {
        $this->TUVLevel = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATID()
    {
        return $this->_dc($this->VATID, 'VATID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVATID($value)
    {
        $this->VATID = self::_string($value);
    }

    /**
     * @return SellerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerPaymentMethod()
    {
        return $this->_dc($this->SellerPaymentMethod);
    }

    /**
     * @param SellerPaymentMethodCodeType|null $value
     * @return void
     */
    public function setSellerPaymentMethod($value)
    {
        $this->SellerPaymentMethod = $this->_enum($value, SellerPaymentMethodCodeType::class);
    }

    /**
     * @return BiddingSummaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBiddingSummary()
    {
        return $this->_dc($this->BiddingSummary, 'BiddingSummary');
    }

    /**
     * @param BiddingSummaryType|null $value
     * @return void
     */
    public function setBiddingSummary($value)
    {
        $this->BiddingSummary = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserAnonymized()
    {
        return $this->_dc($this->UserAnonymized === 'true', 'UserAnonymized');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUserAnonymized($value)
    {
        $this->UserAnonymized = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniqueNeutralFeedbackCount()
    {
        return $this->_dc($this->UniqueNeutralFeedbackCount, 'UniqueNeutralFeedbackCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniqueNeutralFeedbackCount($value)
    {
        $this->UniqueNeutralFeedbackCount = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEnterpriseSeller()
    {
        return $this->_dc($this->EnterpriseSeller === 'true', 'EnterpriseSeller');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEnterpriseSeller($value)
    {
        $this->EnterpriseSeller = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBillingEmail()
    {
        return $this->_dc($this->BillingEmail, 'BillingEmail');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBillingEmail($value)
    {
        $this->BillingEmail = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQualifiesForSelling()
    {
        return $this->_dc($this->QualifiesForSelling === 'true', 'QualifiesForSelling');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setQualifiesForSelling($value)
    {
        $this->QualifiesForSelling = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStaticAlias()
    {
        return $this->_dc($this->StaticAlias, 'StaticAlias');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStaticAlias($value)
    {
        $this->StaticAlias = self::_string($value);
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingAddress()
    {
        return $this->_dc($this->ShippingAddress, 'ShippingAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setShippingAddress($value)
    {
        $this->ShippingAddress = $value;
    }

    /**
     * @return MembershipDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMembership()
    {
        return $this->_dc($this->Membership, 'Membership');
    }

    /**
     * @param MembershipDetailsType|null $value
     * @return void
     */
    public function setMembership($value)
    {
        $this->Membership = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserFirstName()
    {
        return $this->_dc($this->UserFirstName, 'UserFirstName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserFirstName($value)
    {
        $this->UserFirstName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserLastName()
    {
        return $this->_dc($this->UserLastName, 'UserLastName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserLastName($value)
    {
        $this->UserLastName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AboutMePage' => ['type' => 'bool'],
            'EIASToken' => [],
            'Email' => [],
            'FeedbackScore' => ['type' => 'int'],
            'UniqueNegativeFeedbackCount' => ['type' => 'int'],
            'UniquePositiveFeedbackCount' => ['type' => 'int'],
            'PositiveFeedbackPercent' => ['type' => 'float'],
            'FeedbackPrivate' => ['type' => 'bool'],
            'FeedbackRatingStar' => ['type' => 'FeedbackRatingStarCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'IDVerified' => ['type' => 'bool'],
            'eBayGoodStanding' => ['type' => 'bool'],
            'NewUser' => ['type' => 'bool'],
            'RegistrationAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'RegistrationDate' => [],
            'Site' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Status' => ['type' => 'UserStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'UserIDChanged' => ['type' => 'bool'],
            'UserIDLastChanged' => [],
            'VATStatus' => ['type' => 'VATStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BuyerInfo' => ['type' => 'BuyerType', 'xmlns' => self::XMLNS],
            'SellerInfo' => ['type' => 'SellerType', 'xmlns' => self::XMLNS],
            'BusinessRole' => ['type' => 'BusinessRoleType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CharityAffiliations' => ['type' => 'CharityAffiliationsType', 'xmlns' => self::XMLNS],
            'PayPalAccountLevel' => ['type' => 'PayPalAccountLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PayPalAccountType' => ['type' => 'PayPalAccountTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PayPalAccountStatus' => ['type' => 'PayPalAccountStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'UserSubscription' => ['type' => 'EBaySubscriptionTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'SiteVerified' => ['type' => 'bool'],
            'SkypeID' => ['cardinality' => '0..*'],
            'eBayWikiReadOnly' => ['type' => 'bool'],
            'TUVLevel' => ['type' => 'int'],
            'VATID' => [],
            'SellerPaymentMethod' => ['type' => 'SellerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BiddingSummary' => ['type' => 'BiddingSummaryType', 'xmlns' => self::XMLNS],
            'UserAnonymized' => ['type' => 'bool'],
            'UniqueNeutralFeedbackCount' => ['type' => 'int'],
            'EnterpriseSeller' => ['type' => 'bool'],
            'BillingEmail' => [],
            'QualifiesForSelling' => ['type' => 'bool'],
            'StaticAlias' => [],
            'ShippingAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'Membership' => ['type' => 'MembershipDetailsType', 'xmlns' => self::XMLNS],
            'UserFirstName' => [],
            'UserLastName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UserType::_register();
