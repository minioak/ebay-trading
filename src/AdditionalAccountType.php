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
 * Contains the data for one additional account. An additional account is
 * created when the user has an active account and changes country of
 * registry (i.e., registers with the eBay site for the new country). A
 * new account is created and the old account becomes inactive as an
 * additional account. A user who never changes country of residency while
 * having an account will never have any additional accounts.
 **/
class AdditionalAccountType extends EbatNs_ComplexType
{
    const TAG = 'AdditionalAccountType';
    const NAME = 'AdditionalAccountType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $Balance = null;

    /**
     * @var CurrencyCodeType|null
     */
    protected $Currency = null;

    /**
     * @var string|null
     */
    protected $AccountCode = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBalance()
    {
        return $this->_dc($this->Balance, 'Balance');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setBalance($value)
    {
        $this->Balance = $value;
    }

    /**
     * @return CurrencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrency()
    {
        return $this->_dc($this->Currency);
    }

    /**
     * @param CurrencyCodeType|null $value
     * @return void
     */
    public function setCurrency($value)
    {
        $this->Currency = $this->_enum($value, CurrencyCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccountCode()
    {
        return $this->_dc($this->AccountCode, 'AccountCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAccountCode($value)
    {
        $this->AccountCode = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Balance' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Currency' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AccountCode' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AdditionalAccountType::_register();
