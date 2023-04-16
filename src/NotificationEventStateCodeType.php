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
 * Valid notification status codes
 **/
class NotificationEventStateCodeType extends EbatNs_EnumType
{
    const TAG = 'NotificationEventStateCodeType';
    const NAME = 'NotificationEventStateCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Status indicating the notification is newly created
     **/
    const CodeType_New = 'New';

    /**
     * Status indicating the notification was failed
     **/
    const CodeType_Failed = 'Failed';

    /**
     * Status indicating the end user application is marked down
     **/
    const CodeType_MarkedDown = 'MarkedDown';

    /**
     * Status indicating the notification is pending
     **/
    const CodeType_Pending = 'Pending';

    /**
     * Status indicating the notification is failed pending
     **/
    const CodeType_FailedPending = 'FailedPending';

    /**
     * Status indicating the notification is marked down pending
     **/
    const CodeType_MarkedDownPending = 'MarkedDownPending';

    /**
     * Status indicating the notification was successfully delivered
     **/
    const CodeType_Delivered = 'Delivered';

    /**
     * Status indicating the notification was unable to deliver
     **/
    const CodeType_Undeliverable = 'Undeliverable';

    /**
     * Status indicating the notification was rejected
     **/
    const CodeType_Rejected = 'Rejected';

    /**
     * Status indicating the notification was cancelled
     **/
    const CodeType_Canceled = 'Canceled';

    /**
     * Reserved for future internal or external use
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
     * @return NotificationEventStateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param NotificationEventStateCodeType|null $value
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
    public function isFailed()
    {
        return $this->_value === self::CodeType_Failed;
    }

    /**
     * @return bool
     */
    public function isMarkedDown()
    {
        return $this->_value === self::CodeType_MarkedDown;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->_value === self::CodeType_Pending;
    }

    /**
     * @return bool
     */
    public function isFailedPending()
    {
        return $this->_value === self::CodeType_FailedPending;
    }

    /**
     * @return bool
     */
    public function isMarkedDownPending()
    {
        return $this->_value === self::CodeType_MarkedDownPending;
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
    public function isUndeliverable()
    {
        return $this->_value === self::CodeType_Undeliverable;
    }

    /**
     * @return bool
     */
    public function isRejected()
    {
        return $this->_value === self::CodeType_Rejected;
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

NotificationEventStateCodeType::_register();
