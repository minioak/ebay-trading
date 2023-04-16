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
 * Identifies the name and cost of a listing feature that a member pays to eBay. These listing feature names, fees,
 * and possible discounts are intended only as
 * an aid to help estimate the fees for a listing.
 **/
class FeeType extends EbatNs_ComplexType
{
    const TAG = 'FeeType';
    const NAME = 'FeeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var AmountType|null
     */
    protected $Fee = null;

    /**
     * @var AmountType|null
     */
    protected $PromotionalDiscount = null;


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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFee()
    {
        return $this->_dc($this->Fee, 'Fee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setFee($value)
    {
        $this->Fee = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalDiscount()
    {
        return $this->_dc($this->PromotionalDiscount, 'PromotionalDiscount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setPromotionalDiscount($value)
    {
        $this->PromotionalDiscount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'Fee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PromotionalDiscount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FeeType::_register();
