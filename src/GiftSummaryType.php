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
 * GiftSummary
 * container that is returned in
 * GetOrders
 * and other order management calls if a buyer has purchased a digital gift card but has sent it to another
 * individual as a gift. The
 * GiftSummary
 * container consists of the message that the buyer wrote for the recipient of the digital gift card.
 **/
class GiftSummaryType extends EbatNs_ComplexType
{
    const TAG = 'GiftSummaryType';
    const NAME = 'GiftSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Message = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessage()
    {
        return $this->_dc($this->Message, 'Message');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessage($value)
    {
        $this->Message = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Message' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

GiftSummaryType::_register();
