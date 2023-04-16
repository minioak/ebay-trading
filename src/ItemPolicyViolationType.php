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
 * Specifies the details of policy violations if the item was administratively canceled.
 * The details are the policy ID and the policy text.
 **/
class ItemPolicyViolationType extends EbatNs_ComplexType
{
    const TAG = 'ItemPolicyViolationType';
    const NAME = 'ItemPolicyViolationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PolicyID = null;

    /**
     * @var string|null
     */
    protected $PolicyText = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPolicyID()
    {
        return $this->_dc($this->PolicyID, 'PolicyID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPolicyID($value)
    {
        $this->PolicyID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPolicyText()
    {
        return $this->_dc($this->PolicyText, 'PolicyText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPolicyText($value)
    {
        $this->PolicyText = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PolicyID' => ['type' => 'int'],
            'PolicyText' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemPolicyViolationType::_register();
