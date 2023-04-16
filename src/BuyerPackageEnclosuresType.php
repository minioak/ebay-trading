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
 * BuyerPackageEnclosures
 * container, which is returned in
 * GetOrders
 * (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the
 * seller is including payment instructions in the shipping package(s). A
 * BuyerPackageEnclosure
 * container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice'
 * option is only available on the German site.
 **/
class BuyerPackageEnclosuresType extends EbatNs_ComplexType
{
    const TAG = 'BuyerPackageEnclosuresType';
    const NAME = 'BuyerPackageEnclosuresType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BuyerPackageEnclosureType[]|null
     */
    protected $BuyerPackageEnclosure = [];


    /**
     * @return BuyerPackageEnclosureType[]|BuyerPackageEnclosureType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBuyerPackageEnclosure($index = null)
    {
        return $this->_dc($index === null
            ? $this->BuyerPackageEnclosure
            : (count($this->BuyerPackageEnclosure) > $index
                ? $this->BuyerPackageEnclosure[$index]
                : null), 'BuyerPackageEnclosure');
    }

    /**
     * @param BuyerPackageEnclosureType|null|BuyerPackageEnclosureType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBuyerPackageEnclosure($value, $index = null)
    {
        if ($index === null) {
            $this->BuyerPackageEnclosure = $value;
        } else {
            $this->BuyerPackageEnclosure[$index] = [];
            
            foreach ($value as $item) {
                $this->addBuyerPackageEnclosure($item);
            }
        }
    }

    /**
     * @param BuyerPackageEnclosureType|null $value
     * @return void
     */
    public function addBuyerPackageEnclosure($value)
    {
        $this->BuyerPackageEnclosure[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['BuyerPackageEnclosure' => ['type' => 'BuyerPackageEnclosureType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

BuyerPackageEnclosuresType::_register();
