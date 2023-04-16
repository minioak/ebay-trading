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
 * A container to specify a single eBay item to end.
 **/
class EndItemRequestContainerType extends EbatNs_ComplexType
{
    const TAG = 'EndItemRequestContainerType';
    const NAME = 'EndItemRequestContainerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var EndReasonCodeType|null
     */
    protected $EndingReason = null;

    /**
     * @var string|null
     */
    protected $MessageID = null;

    /**
     * @var string|null
     */
    protected $SellerInventoryID = null;


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
     * @return EndReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndingReason()
    {
        return $this->_dc($this->EndingReason);
    }

    /**
     * @param EndReasonCodeType|null $value
     * @return void
     */
    public function setEndingReason($value)
    {
        $this->EndingReason = $this->_enum($value, EndReasonCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageID()
    {
        return $this->_dc($this->MessageID, 'MessageID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageID($value)
    {
        $this->MessageID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerInventoryID()
    {
        return $this->_dc($this->SellerInventoryID, 'SellerInventoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerInventoryID($value)
    {
        $this->SellerInventoryID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'EndingReason' => ['type' => 'EndReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MessageID' => [],
            'SellerInventoryID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

EndItemRequestContainerType::_register();
