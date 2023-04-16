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


class ErrorClassificationCodeType extends EbatNs_EnumType
{
    const TAG = 'ErrorClassificationCodeType';
    const NAME = 'ErrorClassificationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * An error has occurred either as a result of a problem in the sending
     * application or because the application's end-user has attempted to submit
     * invalid data (or missing data). In these cases, do not retry the request. The
     * problem must be corrected before the request can be made again. If the problem
     * is due to something in the application (such as a missing required field), the
     * application must be changed. If the problem is a result of end-user data, the
     * application must alert the end-user to the problem and provide the means for
     * the end-user to correct the data. Once the problem in the application or data
     * is resolved, resend the request to eBay with the corrected data.
     **/
    const CodeType_RequestError = 'RequestError';

    /**
     * Indicates that an error has occurred on the eBay system side, such as a
     * database or server down. An application can retry the request as-is a
     * reasonable number of times (eBay recommends twice). If the error persists,
     * contact Developer Technical Support. Once the problem has been resolved, the
     * request may be resent in its original form.
     **/
    const CodeType_SystemError = 'SystemError';

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
     * @return ErrorClassificationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ErrorClassificationCodeType|null $value
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
    public function isRequestError()
    {
        return $this->_value === self::CodeType_RequestError;
    }

    /**
     * @return bool
     */
    public function isSystemError()
    {
        return $this->_value === self::CodeType_SystemError;
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

ErrorClassificationCodeType::_register();
