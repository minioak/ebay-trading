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
 * ServiceCost
 * container to display any service cost to the buyer for an item that will go through the Authenticity Guarantee
 * process.
 **/
class ServiceCostType extends EbatNs_ComplexType
{
    const TAG = 'ServiceCostType';
    const NAME = 'ServiceCostType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $Amount = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedFromAmount = null;


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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedFromAmount()
    {
        return $this->_dc($this->ConvertedFromAmount, 'ConvertedFromAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedFromAmount($value)
    {
        $this->ConvertedFromAmount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Amount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ConvertedFromAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ServiceCostType::_register();
