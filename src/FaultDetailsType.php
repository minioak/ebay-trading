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
 * SOAP faults are used to indicate that an infrastructure error has occurred,
 * such as a problem on eBay's side with database or server going down, or a
 * problem with the client or server-side SOAP framework.
 **/
class FaultDetailsType extends EbatNs_ComplexType
{
    const TAG = 'FaultDetailsType';
    const NAME = 'FaultDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ErrorCode = null;

    /**
     * @var string|null
     */
    protected $Severity = null;

    /**
     * @var string|null
     */
    protected $DetailedMessage = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getErrorCode()
    {
        return $this->_dc($this->ErrorCode, 'ErrorCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setErrorCode($value)
    {
        $this->ErrorCode = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSeverity()
    {
        return $this->_dc($this->Severity, 'Severity');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSeverity($value)
    {
        $this->Severity = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailedMessage()
    {
        return $this->_dc($this->DetailedMessage, 'DetailedMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailedMessage($value)
    {
        $this->DetailedMessage = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ErrorCode' => [],
            'Severity' => [],
            'DetailedMessage' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FaultDetailsType::_register();
