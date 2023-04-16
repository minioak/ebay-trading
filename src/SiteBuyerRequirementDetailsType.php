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
 * BuyerRequirementDetails
 * container, which is returned in
 * GeteBayDetails
 * , and provides the seller with the buyer requirement features (and applicable values) that are supported by the
 * listing site.
 * 
 * <span class="tablenote">
 * Note:
 * This container is only returned if
 * BuyerRequirementDetails
 * is included as a
 * DetailName
 * filter in the call request, or if no
 * DetailName
 * filters are used in the request.
 * </span>
 **/
class SiteBuyerRequirementDetailsType extends EbatNs_ComplexType
{
    const TAG = 'SiteBuyerRequirementDetailsType';
    const NAME = 'SiteBuyerRequirementDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $LinkedPayPalAccount = null;

    /**
     * @var MaximumBuyerPolicyViolationsDetailsType|null
     */
    protected $MaximumBuyerPolicyViolations = null;

    /**
     * @var MaximumItemRequirementsDetailsType|null
     */
    protected $MaximumItemRequirements = null;

    /**
     * @var MaximumUnpaidItemStrikesInfoDetailsType|null
     */
    protected $MaximumUnpaidItemStrikesInfo = null;

    /**
     * @var MinimumFeedbackScoreDetailsType|null
     */
    protected $MinimumFeedbackScore = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShipToRegistrationCountry = null;

    /**
     * @var VerifiedUserRequirementsDetailsType|null
     */
    protected $VerifiedUserRequirements = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLinkedPayPalAccount()
    {
        return $this->_dc($this->LinkedPayPalAccount === 'true', 'LinkedPayPalAccount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLinkedPayPalAccount($value)
    {
        $this->LinkedPayPalAccount = self::_bool($value);
    }

    /**
     * @return MaximumBuyerPolicyViolationsDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaximumBuyerPolicyViolations()
    {
        return $this->_dc($this->MaximumBuyerPolicyViolations, 'MaximumBuyerPolicyViolations');
    }

    /**
     * @param MaximumBuyerPolicyViolationsDetailsType|null $value
     * @return void
     */
    public function setMaximumBuyerPolicyViolations($value)
    {
        $this->MaximumBuyerPolicyViolations = $value;
    }

    /**
     * @return MaximumItemRequirementsDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaximumItemRequirements()
    {
        return $this->_dc($this->MaximumItemRequirements, 'MaximumItemRequirements');
    }

    /**
     * @param MaximumItemRequirementsDetailsType|null $value
     * @return void
     */
    public function setMaximumItemRequirements($value)
    {
        $this->MaximumItemRequirements = $value;
    }

    /**
     * @return MaximumUnpaidItemStrikesInfoDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaximumUnpaidItemStrikesInfo()
    {
        return $this->_dc($this->MaximumUnpaidItemStrikesInfo, 'MaximumUnpaidItemStrikesInfo');
    }

    /**
     * @param MaximumUnpaidItemStrikesInfoDetailsType|null $value
     * @return void
     */
    public function setMaximumUnpaidItemStrikesInfo($value)
    {
        $this->MaximumUnpaidItemStrikesInfo = $value;
    }

    /**
     * @return MinimumFeedbackScoreDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumFeedbackScore()
    {
        return $this->_dc($this->MinimumFeedbackScore, 'MinimumFeedbackScore');
    }

    /**
     * @param MinimumFeedbackScoreDetailsType|null $value
     * @return void
     */
    public function setMinimumFeedbackScore($value)
    {
        $this->MinimumFeedbackScore = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipToRegistrationCountry()
    {
        return $this->_dc($this->ShipToRegistrationCountry === 'true', 'ShipToRegistrationCountry');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShipToRegistrationCountry($value)
    {
        $this->ShipToRegistrationCountry = self::_bool($value);
    }

    /**
     * @return VerifiedUserRequirementsDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVerifiedUserRequirements()
    {
        return $this->_dc($this->VerifiedUserRequirements, 'VerifiedUserRequirements');
    }

    /**
     * @param VerifiedUserRequirementsDetailsType|null $value
     * @return void
     */
    public function setVerifiedUserRequirements($value)
    {
        $this->VerifiedUserRequirements = $value;
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
            'LinkedPayPalAccount' => ['type' => 'bool'],
            'MaximumBuyerPolicyViolations' => ['type' => 'MaximumBuyerPolicyViolationsDetailsType', 'xmlns' => self::XMLNS],
            'MaximumItemRequirements' => ['type' => 'MaximumItemRequirementsDetailsType', 'xmlns' => self::XMLNS],
            'MaximumUnpaidItemStrikesInfo' => ['type' => 'MaximumUnpaidItemStrikesInfoDetailsType', 'xmlns' => self::XMLNS],
            'MinimumFeedbackScore' => ['type' => 'MinimumFeedbackScoreDetailsType', 'xmlns' => self::XMLNS],
            'ShipToRegistrationCountry' => ['type' => 'bool'],
            'VerifiedUserRequirements' => ['type' => 'VerifiedUserRequirementsDetailsType', 'xmlns' => self::XMLNS],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SiteBuyerRequirementDetailsType::_register();
