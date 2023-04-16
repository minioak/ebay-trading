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
 * Enumerated type that contains the possible states of a VeRO Report packet. A VeRO Report packet is a set of one
 * or more items that have been reported by a Verified Rights Owner as infringing upon the owner's intellectual
 * property rights.
 **/
class VeROReportPacketStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'VeROReportPacketStatusCodeType';
    const NAME = 'VeROReportPacketStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the VeRO Report packet has been received by eBay.
     **/
    const CodeType_Received = 'Received';

    /**
     * This value indicates that eBay is in the process of reviewing the VeRO Report packet. For a VeRO Report packet
     * consisting of multiple items, the call user can look at the
     * ReportedItemDetails
     * container in the
     * GetVeROReportStatus
     * response to get more details about individual items in the VeRO Report packet.
     **/
    const CodeType_InProcess = 'InProcess';

    /**
     * This value indicates that the VeRO Report packet has been processed by eBay.
     **/
    const CodeType_Processed = 'Processed';

    /**
     * This value is reserved for internal or future use.
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
     * @return VeROReportPacketStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param VeROReportPacketStatusCodeType|null $value
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
    public function isInProcess()
    {
        return $this->_value === self::CodeType_InProcess;
    }

    /**
     * @return bool
     */
    public function isProcessed()
    {
        return $this->_value === self::CodeType_Processed;
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

VeROReportPacketStatusCodeType::_register();
