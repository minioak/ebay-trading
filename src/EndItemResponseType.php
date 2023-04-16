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
 * This type includes the acknowledgement of the date and time when the eBay listing was ended due to the call to
 * EndItem
 * .
 **/
class EndItemResponseType extends EbatNs_Response
{
    const TAG = 'EndItemResponseType';
    const NAME = 'EndItemResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $EndTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['EndTime' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

EndItemResponseType::_register();
