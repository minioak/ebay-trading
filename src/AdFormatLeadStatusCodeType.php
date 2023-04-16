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
 * Enumerated type that indicates to the owner of a classified ad whether or not an email correspondence from a
 * prospective buyer has been answered.
 **/
class AdFormatLeadStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'AdFormatLeadStatusCodeType';
    const NAME = 'AdFormatLeadStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value will appear in the response if there is a new message from a prospective buyer that the seller has not
     * yet responded to.
     **/
    const CodeType_New = 'New';

    /**
     * This value will appear in the response if the seller has already responded to the prospective buyer's message.
     **/
    const CodeType_Responded = 'Responded';

    /**
     * (out) Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return AdFormatLeadStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AdFormatLeadStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isNew()
    {
        return $this->_value === self::CodeType_New;
    }

    /**
     * @return bool
     */
    public function isResponded()
    {
        return $this->_value === self::CodeType_Responded;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

AdFormatLeadStatusCodeType::_register();
