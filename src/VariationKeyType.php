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
 * VariationKey
 * container to identify one or more item variations to either add or remove from an eBay user's Watch List.
 **/
class VariationKeyType extends EbatNs_ComplexType
{
    const TAG = 'VariationKeyType';
    const NAME = 'VariationKeyType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var NameValueListArrayType|null
     */
    protected $VariationSpecifics = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return NameValueListArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationSpecifics()
    {
        return $this->_dc($this->VariationSpecifics, 'VariationSpecifics');
    }

    /**
     * @param NameValueListArrayType|null $value
     * @return void
     */
    public function setVariationSpecifics($value)
    {
        $this->VariationSpecifics = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'VariationSpecifics' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VariationKeyType::_register();
