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
 * This type is deprecated as sellers can no longer set a buyer policy violation threshold Buyer Requirement at the
 * listing-level in Add/Revise/Relist calls.
 **/
class MaximumBuyerPolicyViolationsType extends EbatNs_ComplexType
{
    const TAG = 'MaximumBuyerPolicyViolationsType';
    const NAME = 'MaximumBuyerPolicyViolationsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $Count = null;

    /**
     * @var PeriodCodeType|null
     */
    protected $Period = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCount()
    {
        return $this->_dc($this->Count, 'Count');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCount($value)
    {
        $this->Count = self::_int($value);
    }

    /**
     * @return PeriodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPeriod()
    {
        return $this->_dc($this->Period);
    }

    /**
     * @param PeriodCodeType|null $value
     * @return void
     */
    public function setPeriod($value)
    {
        $this->Period = $this->_enum($value, PeriodCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Count' => ['type' => 'int'],
            'Period' => ['type' => 'PeriodCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MaximumBuyerPolicyViolationsType::_register();
