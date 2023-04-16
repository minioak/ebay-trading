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
 * This type is deprecated.
 **/
class UserAgreementInfoType extends EbatNs_ComplexType
{
    const TAG = 'UserAgreementInfoType';
    const NAME = 'UserAgreementInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SiteCodeType|null
     */
    protected $Site = null;

    /**
     * @var SellereBayPaymentProcessStatusCodeType|null
     */
    protected $SellereBayPaymentProcessStatus = null;

    /**
     * @var string|null
     */
    protected $AcceptedTime = null;

    /**
     * @var string|null
     */
    protected $SellereBayPaymentProcessEnableTime = null;

    /**
     * @var string|null
     */
    protected $UserAgreementURL = null;


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
     * @return SellereBayPaymentProcessStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellereBayPaymentProcessStatus()
    {
        return $this->_dc($this->SellereBayPaymentProcessStatus);
    }

    /**
     * @param SellereBayPaymentProcessStatusCodeType|null $value
     * @return void
     */
    public function setSellereBayPaymentProcessStatus($value)
    {
        $this->SellereBayPaymentProcessStatus = $this->_enum($value, SellereBayPaymentProcessStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAcceptedTime()
    {
        return $this->_dc($this->AcceptedTime, 'AcceptedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAcceptedTime($value)
    {
        $this->AcceptedTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellereBayPaymentProcessEnableTime()
    {
        return $this->_dc($this->SellereBayPaymentProcessEnableTime, 'SellereBayPaymentProcessEnableTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellereBayPaymentProcessEnableTime($value)
    {
        $this->SellereBayPaymentProcessEnableTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserAgreementURL()
    {
        return $this->_dc($this->UserAgreementURL, 'UserAgreementURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserAgreementURL($value)
    {
        $this->UserAgreementURL = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Site' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellereBayPaymentProcessStatus' => ['type' => 'SellereBayPaymentProcessStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AcceptedTime' => [],
            'SellereBayPaymentProcessEnableTime' => [],
            'UserAgreementURL' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UserAgreementInfoType::_register();
