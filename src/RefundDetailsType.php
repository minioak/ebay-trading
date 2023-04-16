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
 * Type defining the
 * ReturnPolicyDetails.Refund
 * container that is returned in
 * GeteBayDetails
 * . All of the values (along with descriptions for each value) that can be used as a Refund Option when listing an
 * item is returned under the
 * ReturnPolicyDetails.Refund
 * container.
 * 
 * <span class="tablenote">
 * Note:
 * The
 * GeteBayDetails
 * call returns site-default Return Policy settings. For most categories within a given eBay site, the supported
 * Return Policy options/values are the same, but there a few exceptions. To discover what refund options that a
 * particular category supports, call
 * GetCategoryFeatures
 * and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as
 * FeatureID
 * values to see the refund options available for domestic and international returns, respectively.
 * </span>
 **/
class RefundDetailsType extends EbatNs_ComplexType
{
    const TAG = 'RefundDetailsType';
    const NAME = 'RefundDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $RefundOption = null;

    /**
     * @var string|null
     */
    protected $Description = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundOption()
    {
        return $this->_dc($this->RefundOption, 'RefundOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundOption($value)
    {
        $this->RefundOption = self::_string($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'RefundOption' => [],
            'Description' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RefundDetailsType::_register();
