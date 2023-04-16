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
 * This type is used by the
 * PaymentOptionDetails
 * containers that are returned in
 * GeteBayDetails
 * if the <code>PaymentOptionDetails</code> value is used in a
 * DetailName
 * field in the call request.
 * 
 * <span class="tablenote">
 * Note:
 * Although site-level payment options are still returned in
 * GeteBayDetails
 * , it may be better to use the
 * GetCategoryFeatures
 * call instead, as this call returns the specific payment options that are accepted in specific categories.
 * </span>
 * 
 * <span class="tablenote">
 * Note:
 * Sellers no longer have to specify any electronic payment methods for listings, so one or more
 * PaymentMethods
 * fields will only be needed for listings that require/support payments off of eBay's platform. If an electronic
 * payment is supplied in a
 * PaymentMethods
 * field, a warning will be triggered and the payment method will be dropped.
 * </span>
 **/
class PaymentOptionDetailsType extends EbatNs_ComplexType
{
    const TAG = 'PaymentOptionDetailsType';
    const NAME = 'PaymentOptionDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BuyerPaymentMethodCodeType|null
     */
    protected $PaymentOption = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentOption()
    {
        return $this->_dc($this->PaymentOption);
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
     * @return void
     */
    public function setPaymentOption($value)
    {
        $this->PaymentOption = $this->_enum($value, BuyerPaymentMethodCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PaymentOption' => ['type' => 'BuyerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Description' => [],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PaymentOptionDetailsType::_register();
