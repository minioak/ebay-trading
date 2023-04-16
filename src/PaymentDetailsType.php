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
 * PaymentDetails
 * container, which is used by the seller to
 * specify the amount of the initial deposit, and the due dates for the deposit and the full payment for a motor
 * vehicle listing.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * The seller may not use the
 * PaymentDetails
 * container if selling a motor vehicle through a Classified Ad listing. If it is used in a Trading call, it will
 * be dropped and the seller will get a warning that it was dropped. For a Classified Ad listing, the buyer and
 * seller directly discuss amongst themselves any details on a deposit, or due dates for a deposit and full balance.
 * eBay will not be involved in this process for a Classified Ad listing.</span>
 **/
class PaymentDetailsType extends EbatNs_ComplexType
{
    const TAG = 'PaymentDetailsType';
    const NAME = 'PaymentDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $HoursToDeposit = null;

    /**
     * @var int|null
     */
    protected $DaysToFullPayment = null;

    /**
     * @var AmountType|null
     */
    protected $DepositAmount = null;

    /**
     * @var DepositTypeCodeType|null
     */
    protected $DepositType = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHoursToDeposit()
    {
        return $this->_dc($this->HoursToDeposit, 'HoursToDeposit');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setHoursToDeposit($value)
    {
        $this->HoursToDeposit = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDaysToFullPayment()
    {
        return $this->_dc($this->DaysToFullPayment, 'DaysToFullPayment');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDaysToFullPayment($value)
    {
        $this->DaysToFullPayment = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDepositAmount()
    {
        return $this->_dc($this->DepositAmount, 'DepositAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setDepositAmount($value)
    {
        $this->DepositAmount = $value;
    }

    /**
     * @return DepositTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDepositType()
    {
        return $this->_dc($this->DepositType);
    }

    /**
     * @param DepositTypeCodeType|null $value
     * @return void
     */
    public function setDepositType($value)
    {
        $this->DepositType = $this->_enum($value, DepositTypeCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'HoursToDeposit' => ['type' => 'int'],
            'DaysToFullPayment' => ['type' => 'int'],
            'DepositAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'DepositType' => ['type' => 'DepositTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PaymentDetailsType::_register();
