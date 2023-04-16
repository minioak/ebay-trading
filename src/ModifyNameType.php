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
 * ModifyName
 * container in a
 * ReviseFixedPriceItem
 * or
 * RelistFixedPriceItem
 * call to rename a Variation Specific name for a multiple-variation listing. A
 * ModifyName
 * container is needed for each Variation Specific name  that the seller wishes to change the name of in a
 * multiple-variation listing.
 **/
class ModifyNameType extends EbatNs_ComplexType
{
    const TAG = 'ModifyNameType';
    const NAME = 'ModifyNameType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string|null
     */
    protected $NewName = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNewName()
    {
        return $this->_dc($this->NewName, 'NewName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNewName($value)
    {
        $this->NewName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'NewName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ModifyNameType::_register();
