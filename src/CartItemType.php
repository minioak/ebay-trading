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
 * This type is deprecated.
 **/
class CartItemType extends EbatNs_ComplexType
{
    const TAG = 'CartItemType';
    const NAME = 'CartItemType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var int|null
     */
    protected $ReferenceID = null;

    /**
     * @var ModifyActionCodeType|null
     */
    protected $Action = null;


    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReferenceID()
    {
        return $this->_dc($this->ReferenceID, 'ReferenceID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setReferenceID($value)
    {
        $this->ReferenceID = self::_int($value);
    }

    /**
     * @return ModifyActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAction()
    {
        return $this->_dc($this->Action);
    }

    /**
     * @param ModifyActionCodeType|null $value
     * @return void
     */
    public function setAction($value)
    {
        $this->Action = $this->_enum($value, ModifyActionCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'ReferenceID' => ['type' => 'int'],
            'Action' => ['type' => 'ModifyActionCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CartItemType::_register();
