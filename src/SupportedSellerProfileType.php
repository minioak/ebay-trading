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
 * SupportedSellerProfile
 * container, which contains
 * summary information related to specific Business Policies payment, return policy, and shipping
 * profiles. The profile type is found in the
 * ProfileType
 * field.
 **/
class SupportedSellerProfileType extends EbatNs_ComplexType
{
    const TAG = 'SupportedSellerProfileType';
    const NAME = 'SupportedSellerProfileType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ProfileID = null;

    /**
     * @var string|null
     */
    protected $ProfileType = null;

    /**
     * @var string|null
     */
    protected $ProfileName = null;

    /**
     * @var string|null
     */
    protected $ShortSummary = null;

    /**
     * @var CategoryGroupType|null
     */
    protected $CategoryGroup = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProfileID()
    {
        return $this->_dc($this->ProfileID, 'ProfileID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setProfileID($value)
    {
        $this->ProfileID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProfileType()
    {
        return $this->_dc($this->ProfileType, 'ProfileType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProfileType($value)
    {
        $this->ProfileType = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProfileName()
    {
        return $this->_dc($this->ProfileName, 'ProfileName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProfileName($value)
    {
        $this->ProfileName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShortSummary()
    {
        return $this->_dc($this->ShortSummary, 'ShortSummary');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShortSummary($value)
    {
        $this->ShortSummary = self::_string($value);
    }

    /**
     * @return CategoryGroupType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryGroup()
    {
        return $this->_dc($this->CategoryGroup, 'CategoryGroup');
    }

    /**
     * @param CategoryGroupType|null $value
     * @return void
     */
    public function setCategoryGroup($value)
    {
        $this->CategoryGroup = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ProfileID' => ['type' => 'int'],
            'ProfileType' => [],
            'ProfileName' => [],
            'ShortSummary' => [],
            'CategoryGroup' => ['type' => 'CategoryGroupType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SupportedSellerProfileType::_register();
