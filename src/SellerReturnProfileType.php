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
 * SellerReturnProfile
 * container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a return policy business
 * policy. Return policy business policies contain detailed information on the seller's return policy for domestic
 * and international buyers (if the seller ships internationally), including whether or not the seller accepts
 * returns from domestic and international buyers, how many days the buyer has to return the item for a refund, and
 * who pays the return shipping costs.
 **/
class SellerReturnProfileType extends EbatNs_ComplexType
{
    const TAG = 'SellerReturnProfileType';
    const NAME = 'SellerReturnProfileType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ReturnProfileID = null;

    /**
     * @var string|null
     */
    protected $ReturnProfileName = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnProfileID()
    {
        return $this->_dc($this->ReturnProfileID, 'ReturnProfileID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setReturnProfileID($value)
    {
        $this->ReturnProfileID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnProfileName()
    {
        return $this->_dc($this->ReturnProfileName, 'ReturnProfileName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReturnProfileName($value)
    {
        $this->ReturnProfileName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ReturnProfileID' => ['type' => 'int'],
            'ReturnProfileName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerReturnProfileType::_register();
