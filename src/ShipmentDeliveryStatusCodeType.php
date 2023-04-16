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
 * Status of the delivery.
 **/
class ShipmentDeliveryStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'ShipmentDeliveryStatusCodeType';
    const NAME = 'ShipmentDeliveryStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Created (default).
     **/
    const CodeType_Created = 'Created';

    /**
     * Dropped off.
     **/
    const CodeType_DroppedOff = 'DroppedOff';

    /**
     * In transit.
     **/
    const CodeType_InTransit = 'InTransit';

    /**
     * Delivered.
     **/
    const CodeType_Delivered = 'Delivered';

    /**
     * Returned.
     **/
    const CodeType_Returned = 'Returned';

    /**
     * Cancelled.
     **/
    const CodeType_Canceled = 'Canceled';

    /**
     * Label printed.
     **/
    const CodeType_LabelPrinted = 'LabelPrinted';

    /**
     * Unconfirmed.
     **/
    const CodeType_Unconfirmed = 'Unconfirmed';

    /**
     * Unknown.
     **/
    const CodeType_Unknown = 'Unknown';

    /**
     * Error.
     **/
    const CodeType_Error = 'Error';

    /**
     * Reserved for future use.
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
     * @return ShipmentDeliveryStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShipmentDeliveryStatusCodeType|null $value
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
    public function isCreated()
    {
        return $this->_value === self::CodeType_Created;
    }

    /**
     * @return bool
     */
    public function isDroppedOff()
    {
        return $this->_value === self::CodeType_DroppedOff;
    }

    /**
     * @return bool
     */
    public function isInTransit()
    {
        return $this->_value === self::CodeType_InTransit;
    }

    /**
     * @return bool
     */
    public function isDelivered()
    {
        return $this->_value === self::CodeType_Delivered;
    }

    /**
     * @return bool
     */
    public function isReturned()
    {
        return $this->_value === self::CodeType_Returned;
    }

    /**
     * @return bool
     */
    public function isCanceled()
    {
        return $this->_value === self::CodeType_Canceled;
    }

    /**
     * @return bool
     */
    public function isLabelPrinted()
    {
        return $this->_value === self::CodeType_LabelPrinted;
    }

    /**
     * @return bool
     */
    public function isUnconfirmed()
    {
        return $this->_value === self::CodeType_Unconfirmed;
    }

    /**
     * @return bool
     */
    public function isUnknown()
    {
        return $this->_value === self::CodeType_Unknown;
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

ShipmentDeliveryStatusCodeType::_register();
