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
 * CharityAffiliationDetail
 * container that is returned in the
 * GetUser
 * response. The
 * CharityAffiliationDetail
 * container consists of information on a nonprofit charity organization associated with the seller's account. A
 * separate
 * CharityAffiliationDetail
 * container is returned for each nonprofit charity organization associated with the seller's account.
 **/
class CharityAffiliationDetailType extends EbatNs_ComplexType
{
    const TAG = 'CharityAffiliationDetailType';
    const NAME = 'CharityAffiliationDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CharityID = null;

    /**
     * @var CharityAffiliationTypeCodeType|null
     */
    protected $AffiliationType = null;

    /**
     * @var string|null
     */
    protected $LastUsedTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityID()
    {
        return $this->_dc($this->CharityID, 'CharityID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCharityID($value)
    {
        $this->CharityID = self::_string($value);
    }

    /**
     * @return CharityAffiliationTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAffiliationType()
    {
        return $this->_dc($this->AffiliationType);
    }

    /**
     * @param CharityAffiliationTypeCodeType|null $value
     * @return void
     */
    public function setAffiliationType($value)
    {
        $this->AffiliationType = $this->_enum($value, CharityAffiliationTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastUsedTime()
    {
        return $this->_dc($this->LastUsedTime, 'LastUsedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastUsedTime($value)
    {
        $this->LastUsedTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CharityID' => [],
            'AffiliationType' => ['type' => 'CharityAffiliationTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'LastUsedTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CharityAffiliationDetailType::_register();
