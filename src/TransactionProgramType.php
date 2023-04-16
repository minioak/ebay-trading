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
 * Program
 * container, which provides details on whether the order line item has passed or failed the authenticity
 * inspection.
 **/
class TransactionProgramType extends EbatNs_ComplexType
{
    const TAG = 'TransactionProgramType';
    const NAME = 'TransactionProgramType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AuthenticityVerificationType|null
     */
    protected $AuthenticityVerification = null;

    /**
     * @var FulfillmentType|null
     */
    protected $Fulfillment = null;


    /**
     * @return AuthenticityVerificationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAuthenticityVerification()
    {
        return $this->_dc($this->AuthenticityVerification, 'AuthenticityVerification');
    }

    /**
     * @param AuthenticityVerificationType|null $value
     * @return void
     */
    public function setAuthenticityVerification($value)
    {
        $this->AuthenticityVerification = $value;
    }

    /**
     * @return FulfillmentType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFulfillment()
    {
        return $this->_dc($this->Fulfillment, 'Fulfillment');
    }

    /**
     * @param FulfillmentType|null $value
     * @return void
     */
    public function setFulfillment($value)
    {
        $this->Fulfillment = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AuthenticityVerification' => ['type' => 'AuthenticityVerificationType', 'xmlns' => self::XMLNS],
            'Fulfillment' => ['type' => 'FulfillmentType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TransactionProgramType::_register();
