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
 * This type defines the
 * PaymentHoldDetails
 * container, which consists of information related to eBay holding the payment proceeds for an order, including
 * the reason why eBay is holding the money, the expected release date of the funds to the seller, and possible
 * action(s) the seller can take to expedite the release of funds.
 **/
class PaymentHoldDetailType extends EbatNs_ComplexType
{
    const TAG = 'PaymentHoldDetailType';
    const NAME = 'PaymentHoldDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ExpectedReleaseDate = null;

    /**
     * @var RequiredSellerActionArrayType|null
     */
    protected $RequiredSellerActionArray = null;

    /**
     * @var int|null
     */
    protected $NumOfReqSellerActions = null;

    /**
     * @var PaymentHoldReasonCodeType|null
     */
    protected $PaymentHoldReason = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpectedReleaseDate()
    {
        return $this->_dc($this->ExpectedReleaseDate, 'ExpectedReleaseDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExpectedReleaseDate($value)
    {
        $this->ExpectedReleaseDate = self::_string($value);
    }

    /**
     * @return RequiredSellerActionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRequiredSellerActionArray()
    {
        return $this->_dc($this->RequiredSellerActionArray, 'RequiredSellerActionArray');
    }

    /**
     * @param RequiredSellerActionArrayType|null $value
     * @return void
     */
    public function setRequiredSellerActionArray($value)
    {
        $this->RequiredSellerActionArray = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNumOfReqSellerActions()
    {
        return $this->_dc($this->NumOfReqSellerActions, 'NumOfReqSellerActions');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNumOfReqSellerActions($value)
    {
        $this->NumOfReqSellerActions = self::_int($value);
    }

    /**
     * @return PaymentHoldReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentHoldReason()
    {
        return $this->_dc($this->PaymentHoldReason);
    }

    /**
     * @param PaymentHoldReasonCodeType|null $value
     * @return void
     */
    public function setPaymentHoldReason($value)
    {
        $this->PaymentHoldReason = $this->_enum($value, PaymentHoldReasonCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ExpectedReleaseDate' => [],
            'RequiredSellerActionArray' => ['type' => 'RequiredSellerActionArrayType', 'xmlns' => self::XMLNS],
            'NumOfReqSellerActions' => ['type' => 'int'],
            'PaymentHoldReason' => ['type' => 'PaymentHoldReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PaymentHoldDetailType::_register();
