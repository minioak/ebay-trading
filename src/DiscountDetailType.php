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
 * This type is used by the
 * DiscountDetail
 * container, which is returned if a discount is applicable to an account entry.
 **/
class DiscountDetailType extends EbatNs_ComplexType
{
    const TAG = 'DiscountDetailType';
    const NAME = 'DiscountDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DiscountType[]|null
     */
    protected $Discount = [];


    /**
     * @return DiscountType[]|DiscountType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDiscount($index = null)
    {
        return $this->_dc($index === null
            ? $this->Discount
            : (count($this->Discount) > $index
                ? $this->Discount[$index]
                : null), 'Discount');
    }

    /**
     * @param DiscountType|null|DiscountType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDiscount($value, $index = null)
    {
        if ($index === null) {
            $this->Discount = $value;
        } else {
            $this->Discount[$index] = [];
            
            foreach ($value as $item) {
                $this->addDiscount($item);
            }
        }
    }

    /**
     * @param DiscountType|null $value
     * @return void
     */
    public function addDiscount($value)
    {
        $this->Discount[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Discount' => ['type' => 'DiscountType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

DiscountDetailType::_register();
