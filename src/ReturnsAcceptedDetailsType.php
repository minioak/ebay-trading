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
 * ReturnPolicyDetails.ReturnsAccepted
 * container that is returned in
 * GeteBayDetails
 * . This container contains the values that may be used in the
 * ReturnPolicy.ReturnsAcceptedOption
 * field of Add/Revise/Relist API calls.
 * 
 * <span class="tablenote">
 * Note:
 * The
 * GeteBayDetails
 * call returns site-default Return Policy settings. For most categories within a given eBay site, the supported
 * Return Policy options/values are the same, but there a few exceptions. To discover what returns accepted options
 * that a particular category supports, call
 * GetCategoryFeatures
 * and include <code>DomesticReturnsAcceptedValues</code> and/or <code>InternationalReturnsAcceptedValues</code> as
 * FeatureID
 * values to see the returns accepted options available for domestic and international returns, respectively.
 * </span>
 **/
class ReturnsAcceptedDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ReturnsAcceptedDetailsType';
    const NAME = 'ReturnsAcceptedDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ReturnsAcceptedOption = null;

    /**
     * @var string|null
     */
    protected $Description = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnsAcceptedOption()
    {
        return $this->_dc($this->ReturnsAcceptedOption, 'ReturnsAcceptedOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReturnsAcceptedOption($value)
    {
        $this->ReturnsAcceptedOption = self::_string($value);
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
            'ReturnsAcceptedOption' => [],
            'Description' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReturnsAcceptedDetailsType::_register();
