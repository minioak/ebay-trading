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
class SellereBayPaymentProcessConsentCodeType extends EbatNs_ComplexType
{
    const TAG = 'SellereBayPaymentProcessConsentCodeType';
    const NAME = 'SellereBayPaymentProcessConsentCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $PayoutMethodSet = null;

    /**
     * @var PayoutMethodType|null
     */
    protected $PayoutMethod = null;

    /**
     * @var UserAgreementInfoType[]|null
     */
    protected $UserAgreementInfo = [];


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayoutMethodSet()
    {
        return $this->_dc($this->PayoutMethodSet === 'true', 'PayoutMethodSet');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPayoutMethodSet($value)
    {
        $this->PayoutMethodSet = self::_bool($value);
    }

    /**
     * @return PayoutMethodType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayoutMethod()
    {
        return $this->_dc($this->PayoutMethod);
    }

    /**
     * @param PayoutMethodType|null $value
     * @return void
     */
    public function setPayoutMethod($value)
    {
        $this->PayoutMethod = $this->_enum($value, PayoutMethodType::class);
    }

    /**
     * @return UserAgreementInfoType[]|UserAgreementInfoType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getUserAgreementInfo($index = null)
    {
        return $this->_dc($index === null
            ? $this->UserAgreementInfo
            : (count($this->UserAgreementInfo) > $index
                ? $this->UserAgreementInfo[$index]
                : null), 'UserAgreementInfo');
    }

    /**
     * @param UserAgreementInfoType|null|UserAgreementInfoType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setUserAgreementInfo($value, $index = null)
    {
        if ($index === null) {
            $this->UserAgreementInfo = $value;
        } else {
            $this->UserAgreementInfo[$index] = [];
            
            foreach ($value as $item) {
                $this->addUserAgreementInfo($item);
            }
        }
    }

    /**
     * @param UserAgreementInfoType|null $value
     * @return void
     */
    public function addUserAgreementInfo($value)
    {
        $this->UserAgreementInfo[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PayoutMethodSet' => ['type' => 'bool'],
            'PayoutMethod' => ['type' => 'PayoutMethodType', 'enum' => true, 'xmlns' => self::XMLNS],
            'UserAgreementInfo' => ['type' => 'UserAgreementInfoType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellereBayPaymentProcessConsentCodeType::_register();
