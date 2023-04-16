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
 * ErrorParameters
 * container if one or more errors or warnings occur with the call, and if a specific request parameter has been
 * pinpointed as the reason why the error or warning was triggered.
 **/
class ErrorParameterType extends EbatNs_ComplexType
{
    const TAG = 'ErrorParameterType';
    const NAME = 'ErrorParameterType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Value = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValue()
    {
        return $this->_dc($this->Value, 'Value');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setValue($value)
    {
        $this->Value = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Value' => []], parent::NAME);
        self::assignAttributes(['ParamID' => ['type' => 'string']]);
    }

}

ErrorParameterType::_register();
