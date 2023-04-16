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
 * SeverityCodeType - Type declaration to be used by other schema.
 * This code identifies the severity of an API error. A code indicates
 * whether there is an API-level error or warning that needs to be
 * communicated to the client.
 **/
class SeverityCodeType extends EbatNs_EnumType
{
    const TAG = 'SeverityCodeType';
    const NAME = 'SeverityCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The request was processed successfully, but something occurred that may affect your application or the user. For
     * example, eBay may have changed a value the user sent in. In this case, eBay returns a normal, successful response
     * and also returns the warning.
     * 
     * When a warning occurs, the error is returned in addition to the business data. In this case, you do not
     * need to retry the request (as the original request was successful). However, depending on the cause or nature of
     * the warning, you might need to contact either the end user or eBay to effect a long term solution to the problem
     * to prevent it from reoccurring in the future.
     **/
    const CodeType_Warning = 'Warning';

    /**
     * The request that triggered the error was not processed successfully. When a serious application-level error
     * occurs, the error is returned instead of the business data.
     * 
     * If the source of the problem is within the application (such as a missing required element), change the
     * application before you retry the request.
     * <ul>
     * <li>If the problem is due to end-user input data, please alert the end-user to the problem and provide the
     * means for them to correct the data. Once the problem in the application or data is resolved, you can attempt to
     * re-send the request to eBay.
     * </li>
     * <li>If the source of the problem is on eBay's side, An application can retry the request as-is a
     * reasonable number of times (eBay recommends twice). If the error persists, contact Developer Technical Support.
     * Once the problem has been resolved, the request may be resent in its original form.
     * </li>
     * </ul>
     * 
     * See the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#Basics/Call-UsingLiveData.html#CompatibleApplicationCheck">Compatible
     * Application Check</a> section of the
     * eBay Features Guide for more information.
     **/
    const CodeType_Error = 'Error';

    /**
     * Reserved for internal or future use.
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
     * @return SeverityCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SeverityCodeType|null $value
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
    public function isWarning()
    {
        return $this->_value === self::CodeType_Warning;
    }

    /**
     * @return bool
     */
    public function isError()
    {
        return $this->_value === self::CodeType_Error;
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

SeverityCodeType::_register();
