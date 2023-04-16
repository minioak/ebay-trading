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
 * This enumerated type is used by the seller to set the shipping discount type. Some of these shipping discount
 * types apply to flat-rate shipping and others apply to calculated shipping.
 **/
class DiscountNameCodeType extends EbatNs_EnumType
{
    const TAG = 'DiscountNameCodeType';
    const NAME = 'DiscountNameCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The cost to ship each item beyond the first item (where the item with the
     * highest shipping cost is selected by eBay as the first item).
     * Let's say the buyer purchases three items, each set to ship for $8, and
     * the seller set EachAdditionalAmount to $6.  The cost to ship three items would
     * normally be $24, but since the seller specified $6, the total shipping
     * cost would be $8 + $6 + $6, or $20.
     * For flat shipping discount profile only.
     **/
    const CodeType_EachAdditionalAmount = 'EachAdditionalAmount';

    /**
     * The amount by which to reduce the cost to ship each item beyond the
     * first item (where the item with the highest shipping cost is selected by eBay
     * as the first item).
     * Let's say the buyer purchases three items, each set to ship for $8, and
     * the seller set EachAdditionalAmountOff to $2.  The cost to ship three items would
     * normally be $24, but since the seller specified $2, the total shipping
     * cost would be $24 - (two additional items x $2), or $20.
     * For flat shipping discount profile only.
     **/
    const CodeType_EachAdditionalAmountOff = 'EachAdditionalAmountOff';

    /**
     * The percentage by which to reduce the cost to ship each item beyond
     * the first item (where the item with the highest shipping cost is selected by
     * eBay as the first item).
     * Let's say the buyer purchases three items, each set to ship for $8, and
     * the seller set EachAdditionalPercentOff to 0.25.  The cost to ship three items would
     * normally be $24, but since the seller specified 0.25 ($2 out of 8), the total shipping
     * cost would be $24 - (two additional items x $2), or $20.
     * For flat rate shipping discount profile only.
     **/
    const CodeType_EachAdditionalPercentOff = 'EachAdditionalPercentOff';

    /**
     * Shipping cost is the total of what it would cost to ship each item individually.
     * This is simply a way to define how shipping is to be calculated--there is no
     * discount for the buyer with this selection.
     * For calculated shipping discount profile only.
     **/
    const CodeType_IndividualItemWeight = 'IndividualItemWeight';

    /**
     * Shipping cost is based on the total weight of all individual items.
     * This is simply a way to define how shipping is to be calculated--there is no
     * discount for the buyer with this selection.
     * For calculated shipping discount profile only.
     **/
    const CodeType_CombinedItemWeight = 'CombinedItemWeight';

    /**
     * The amount of weight to subtract for each item beyond the first item
     * before shipping costs are calculated. For example, there may be less packing
     * material when the items are combined in one box than if they were shipped
     * individually. Let's say the buyer purchases three items, each 10 oz. in weight, and
     * the seller set WeightOff to 2 oz.  The combined weight would be 30 oz., but since
     * the seller specified 2 oz. off, the total weight for shipping cost calculation
     * would be 30 oz. - (two additional items x 2 oz.), or 26 oz.
     * For calculated shipping discount profile only.
     **/
    const CodeType_WeightOff = 'WeightOff';

    /**
     * Shipping cost X applies if the total cost of items purchased is Y.
     * For promotional discount only.
     **/
    const CodeType_ShippingCostXForAmountY = 'ShippingCostXForAmountY';

    /**
     * Shipping cost X applies if the total number of items purchased is N.
     * For promotional discount only.
     **/
    const CodeType_ShippingCostXForItemCountN = 'ShippingCostXForItemCountN';

    /**
     * The shipping cost will not exceed this.
     * For promotional discount only.
     **/
    const CodeType_MaximumShippingCostPerOrder = 'MaximumShippingCostPerOrder';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return DiscountNameCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DiscountNameCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isEachAdditionalAmount()
    {
        return $this->_value === self::CodeType_EachAdditionalAmount;
    }

    /**
     * @return bool
     */
    public function isEachAdditionalAmountOff()
    {
        return $this->_value === self::CodeType_EachAdditionalAmountOff;
    }

    /**
     * @return bool
     */
    public function isEachAdditionalPercentOff()
    {
        return $this->_value === self::CodeType_EachAdditionalPercentOff;
    }

    /**
     * @return bool
     */
    public function isIndividualItemWeight()
    {
        return $this->_value === self::CodeType_IndividualItemWeight;
    }

    /**
     * @return bool
     */
    public function isCombinedItemWeight()
    {
        return $this->_value === self::CodeType_CombinedItemWeight;
    }

    /**
     * @return bool
     */
    public function isWeightOff()
    {
        return $this->_value === self::CodeType_WeightOff;
    }

    /**
     * @return bool
     */
    public function isShippingCostXForAmountY()
    {
        return $this->_value === self::CodeType_ShippingCostXForAmountY;
    }

    /**
     * @return bool
     */
    public function isShippingCostXForItemCountN()
    {
        return $this->_value === self::CodeType_ShippingCostXForItemCountN;
    }

    /**
     * @return bool
     */
    public function isMaximumShippingCostPerOrder()
    {
        return $this->_value === self::CodeType_MaximumShippingCostPerOrder;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

DiscountNameCodeType::_register();
