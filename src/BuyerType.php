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
 * This type is used by various
 * Get
 * calls, including
 * GetItem
 * and
 * GetOrders
 * . Only the order management calls return the
 * BuyerTaxIdentifier
 * container, and each call that uses
 * BuyerType
 * uses the
 * ShippingAddress
 * container a little differently.
 **/
class BuyerType extends EbatNs_ComplexType
{
    const TAG = 'BuyerType';
    const NAME = 'BuyerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AddressType|null
     */
    protected $ShippingAddress = null;

    /**
     * @var TaxIdentifierType[]|null
     */
    protected $BuyerTaxIdentifier = [];


    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingAddress()
    {
        return $this->_dc($this->ShippingAddress, 'ShippingAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setShippingAddress($value)
    {
        $this->ShippingAddress = $value;
    }

    /**
     * @return TaxIdentifierType[]|TaxIdentifierType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBuyerTaxIdentifier($index = null)
    {
        return $this->_dc($index === null
            ? $this->BuyerTaxIdentifier
            : (count($this->BuyerTaxIdentifier) > $index
                ? $this->BuyerTaxIdentifier[$index]
                : null), 'BuyerTaxIdentifier');
    }

    /**
     * @param TaxIdentifierType|null|TaxIdentifierType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBuyerTaxIdentifier($value, $index = null)
    {
        if ($index === null) {
            $this->BuyerTaxIdentifier = $value;
        } else {
            $this->BuyerTaxIdentifier[$index] = [];
            
            foreach ($value as $item) {
                $this->addBuyerTaxIdentifier($item);
            }
        }
    }

    /**
     * @param TaxIdentifierType|null $value
     * @return void
     */
    public function addBuyerTaxIdentifier($value)
    {
        $this->BuyerTaxIdentifier[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'BuyerTaxIdentifier' => ['type' => 'TaxIdentifierType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BuyerType::_register();
