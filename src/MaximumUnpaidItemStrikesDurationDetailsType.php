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
 * MaximumUnpaidItemStrikesDuration
 * container that is returned in
 * GeteBayDetails
 * . The
 * MaximumUnpaidItemStrikesDuration
 * container indicates the periods of time that can be used when evaluating how many unpaid item strikes against a
 * buyer during this given period will exclude the prospective buyer from purchasing the line item.
 **/
class MaximumUnpaidItemStrikesDurationDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MaximumUnpaidItemStrikesDurationDetailsType';
    const NAME = 'MaximumUnpaidItemStrikesDurationDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PeriodCodeType|null
     */
    protected $Period = null;

    /**
     * @var string|null
     */
    protected $Description = null;


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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Period' => ['type' => 'PeriodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Description' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MaximumUnpaidItemStrikesDurationDetailsType::_register();
