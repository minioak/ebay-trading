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
 * NettedTransactionSummary
 * container, which shows the total amount of fees (and credits if applicable) that have already been paid through
 * seller payout deductions.
 **/
class NettedTransactionSummaryType extends EbatNs_ComplexType
{
    const TAG = 'NettedTransactionSummaryType';
    const NAME = 'NettedTransactionSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $TotalNettedChargeAmount = null;

    /**
     * @var AmountType|null
     */
    protected $TotalNettedCreditAmount = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalNettedChargeAmount()
    {
        return $this->_dc($this->TotalNettedChargeAmount, 'TotalNettedChargeAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalNettedChargeAmount($value)
    {
        $this->TotalNettedChargeAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalNettedCreditAmount()
    {
        return $this->_dc($this->TotalNettedCreditAmount, 'TotalNettedCreditAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalNettedCreditAmount($value)
    {
        $this->TotalNettedCreditAmount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TotalNettedChargeAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TotalNettedCreditAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NettedTransactionSummaryType::_register();
