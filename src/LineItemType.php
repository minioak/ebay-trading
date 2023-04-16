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
 * This type provides information about one order line item in a package. The package can contain multiple units of
 * a given order line item.
 **/
class LineItemType extends EbatNs_ComplexType
{
    const TAG = 'LineItemType';
    const NAME = 'LineItemType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $Quantity = null;

    /**
     * @var string|null
     */
    protected $CountryOfOrigin = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var ItemIDType|null
     * @required
     */
    protected $ItemID = null;

    /**
     * @var string|null
     * @required
     */
    protected $TransactionID = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantity()
    {
        return $this->_dc($this->Quantity, 'Quantity');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantity($value)
    {
        $this->Quantity = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCountryOfOrigin()
    {
        return $this->_dc($this->CountryOfOrigin, 'CountryOfOrigin');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCountryOfOrigin($value)
    {
        $this->CountryOfOrigin = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Quantity' => ['type' => 'int'],
            'CountryOfOrigin' => [],
            'Description' => [],
            'ItemID' => ['required' => true, 'type' => 'ItemIDType', 'xmlns' => self::XMLNS, 'cardinality' => '1..1'],
            'TransactionID' => ['required' => true, 'cardinality' => '1..1']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

LineItemType::_register();
