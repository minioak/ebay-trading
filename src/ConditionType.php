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
 * ConditionValues.Condition
 * and
 * SpecialFeatures.Condition
 * containers that are returned at the site default level and category level in the
 * GetCategoryFeatures
 * response if 'ConditionValues' is specified as a
 * FeatureID
 * value, or if no
 * FeatureID
 * values are specified. A
 * ConditionValues.Condition
 * container is returned for each supported item condition value for each eBay category returned in the response,
 * and a
 * SpecialFeatures.Condition
 * container is returned for item condition values that a seller must be pre-qualified to use, such as the
 * refurbished conditions.
 **/
class ConditionType extends EbatNs_ComplexType
{
    const TAG = 'ConditionType';
    const NAME = 'ConditionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ID = null;

    /**
     * @var string|null
     */
    protected $DisplayName = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getID()
    {
        return $this->_dc($this->ID, 'ID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setID($value)
    {
        $this->ID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayName()
    {
        return $this->_dc($this->DisplayName, 'DisplayName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDisplayName($value)
    {
        $this->DisplayName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ID' => ['type' => 'int'],
            'DisplayName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ConditionType::_register();
