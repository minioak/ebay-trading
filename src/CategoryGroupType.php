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
 * CategoryGroup
 * container, which defines the category group to which the corresponding Business Policies profile will be
 * applied, and a flag that indicates whether or not that Business Policies profile is the default for that category
 * group.
 **/
class CategoryGroupType extends EbatNs_ComplexType
{
    const TAG = 'CategoryGroupType';
    const NAME = 'CategoryGroupType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IsDefault = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIsDefault()
    {
        return $this->_dc($this->IsDefault === 'true', 'IsDefault');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIsDefault($value)
    {
        $this->IsDefault = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'IsDefault' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CategoryGroupType::_register();
