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
 * This type is used by the <strong>CustomPolicies</strong> container, which specifies custom policy IDs. A custom
 * policy ID refers to the relevant policy created for product compliance and other purposes. For more information,
 * see the
 * Custom Policies
 * page for your site (for example, <a
 * href="https://www.ebay.fr/help/selling/custom-policies/custom-policies?id=5311"
 * target="_blank">https://www.ebay.fr/help/selling/custom-policies/custom-policies?id=5311</a>). To create and
 * manage custom policies, use the <a
 * href="https://developer.ebay.com/api-docs/sell/account/resources/methods#h2-custom_policy"
 * target="_blank">custom_policy</a> resource of the
 * Account API
 * .
 **/
class CustomPoliciesType extends EbatNs_ComplexType
{
    const TAG = 'CustomPoliciesType';
    const NAME = 'CustomPoliciesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $TakeBackPolicyID = null;

    /**
     * @var int|null
     */
    protected $ProductCompliancePolicyID = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTakeBackPolicyID()
    {
        return $this->_dc($this->TakeBackPolicyID, 'TakeBackPolicyID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTakeBackPolicyID($value)
    {
        $this->TakeBackPolicyID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductCompliancePolicyID()
    {
        return $this->_dc($this->ProductCompliancePolicyID, 'ProductCompliancePolicyID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setProductCompliancePolicyID($value)
    {
        $this->ProductCompliancePolicyID = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TakeBackPolicyID' => ['type' => 'int'],
            'ProductCompliancePolicyID' => ['type' => 'int', 'cardinality' => '0..5']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CustomPoliciesType::_register();
