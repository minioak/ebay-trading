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
 * Type used by the
 * Program
 * container that is returned in the response of the
 * GetUser
 * call if the seller is enrolled in one or more eBay membership programs, such as eBay Plus. The
 * Program
 * container provides the eBay site, program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
 * 
 * <span class="tablenote">
 * Note:
 * Currently, eBay Plus is available only to buyers on Germany and Australia marketplaces.  In Australia, the
 * seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will
 * evaluate/determine whether a listing is eligible for eBay Plus.
 * </span>
 **/
class MembershipDetailType extends EbatNs_ComplexType
{
    const TAG = 'MembershipDetailType';
    const NAME = 'MembershipDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ProgramName = null;

    /**
     * @var SiteCodeType|null
     */
    protected $Site = null;

    /**
     * @var string|null
     */
    protected $ExpiryDate = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProgramName()
    {
        return $this->_dc($this->ProgramName, 'ProgramName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProgramName($value)
    {
        $this->ProgramName = self::_string($value);
    }

    /**
     * @return SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSite()
    {
        return $this->_dc($this->Site);
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function setSite($value)
    {
        $this->Site = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpiryDate()
    {
        return $this->_dc($this->ExpiryDate, 'ExpiryDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExpiryDate($value)
    {
        $this->ExpiryDate = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ProgramName' => [],
            'Site' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ExpiryDate' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MembershipDetailType::_register();
