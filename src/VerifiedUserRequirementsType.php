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
 * The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
 **/
class VerifiedUserRequirementsType extends EbatNs_ComplexType
{
    const TAG = 'VerifiedUserRequirementsType';
    const NAME = 'VerifiedUserRequirementsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $VerifiedUser = null;

    /**
     * @var int|null
     */
    protected $MinimumFeedbackScore = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVerifiedUser()
    {
        return $this->_dc($this->VerifiedUser === 'true', 'VerifiedUser');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setVerifiedUser($value)
    {
        $this->VerifiedUser = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumFeedbackScore()
    {
        return $this->_dc($this->MinimumFeedbackScore, 'MinimumFeedbackScore');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMinimumFeedbackScore($value)
    {
        $this->MinimumFeedbackScore = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'VerifiedUser' => ['type' => 'bool'],
            'MinimumFeedbackScore' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VerifiedUserRequirementsType::_register();
