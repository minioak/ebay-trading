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
 * ShippingCostPaidBy
 * container that is returned in
 * GeteBayDetails
 * if
 * ReturnPolicyDetails
 * is set as a
 * DetailName
 * value (or if no value is included in the request).
 * 
 * <span class="tablenote">
 * Note:
 * The
 * GeteBayDetails
 * call returns site-default Return Policy settings. For most categories within a given eBay site, the supported
 * Return Policy options/values are the same, but there a few exceptions. To discover what return shipping 'payee'
 * values that a particular category supports, call
 * GetCategoryFeatures
 * and include <code>DomesticReturnsShipmentPayeeValues</code> and/or
 * <code>InternationalReturnsShipmentPayeeValues</code> as
 * FeatureID
 * values to see the return shipping 'payee' values available for domestic and international returns, respectively.
 * </span>
 **/
class ShippingCostPaidByDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ShippingCostPaidByDetailsType';
    const NAME = 'ShippingCostPaidByDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ShippingCostPaidByOption = null;

    /**
     * @var string|null
     */
    protected $Description = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCostPaidByOption()
    {
        return $this->_dc($this->ShippingCostPaidByOption, 'ShippingCostPaidByOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingCostPaidByOption($value)
    {
        $this->ShippingCostPaidByOption = self::_string($value);
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
            'ShippingCostPaidByOption' => [],
            'Description' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingCostPaidByDetailsType::_register();
