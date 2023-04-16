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
 * The type is used to indicate the discount type and amount applied to an account entry.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * The discount amount will only be shown if the corresponding fee was deducted from a seller payout.
 * </span>
 **/
class DiscountType extends EbatNs_ComplexType
{
    const TAG = 'DiscountType';
    const NAME = 'DiscountType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $DiscountType = null;

    /**
     * @var AmountType|null
     */
    protected $Amount = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountType()
    {
        return $this->_dc($this->DiscountType, 'DiscountType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDiscountType($value)
    {
        $this->DiscountType = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAmount()
    {
        return $this->_dc($this->Amount, 'Amount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAmount($value)
    {
        $this->Amount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DiscountType' => [],
            'Amount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DiscountType::_register();
