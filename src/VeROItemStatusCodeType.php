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
 * The VeRO reporting status for an item.
 **/
class VeROItemStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'VeROItemStatusCodeType';
    const NAME = 'VeROItemStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (out) The VeRO report request for the item has been received by eBay.
     **/
    const CodeType_Received = 'Received';

    /**
     * (out) The VeRO report request for the item has been submitted to eBay.
     **/
    const CodeType_Submitted = 'Submitted';

    /**
     * (out) The reported item has been ended by eBay.
     **/
    const CodeType_Removed = 'Removed';

    /**
     * (out) The VeRO report request for the item failed.
     **/
    const CodeType_SubmissionFailed = 'SubmissionFailed';

    /**
     * (out) The VeRO report request for the item has been received by eBay, but
     * additional clarification is needed before eBay can end the item.
     **/
    const CodeType_ClarificationRequired = 'ClarificationRequired';

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
     * @return VeROItemStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param VeROItemStatusCodeType|null $value
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
    public function isReceived()
    {
        return $this->_value === self::CodeType_Received;
    }

    /**
     * @return bool
     */
    public function isSubmitted()
    {
        return $this->_value === self::CodeType_Submitted;
    }

    /**
     * @return bool
     */
    public function isRemoved()
    {
        return $this->_value === self::CodeType_Removed;
    }

    /**
     * @return bool
     */
    public function isSubmissionFailed()
    {
        return $this->_value === self::CodeType_SubmissionFailed;
    }

    /**
     * @return bool
     */
    public function isClarificationRequired()
    {
        return $this->_value === self::CodeType_ClarificationRequired;
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

VeROItemStatusCodeType::_register();
