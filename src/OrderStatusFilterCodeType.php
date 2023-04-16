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


class OrderStatusFilterCodeType extends EbatNs_EnumType
{
    const TAG = 'OrderStatusFilterCodeType';
    const NAME = 'OrderStatusFilterCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * All applicable sold listings, regardless of
     * their Paid or Shipped status.
     **/
    const CodeType_All = 'All';

    /**
     * Sold listings that have not yet been marked as
     * Paid in My eBay.
     **/
    const CodeType_AwaitingPayment = 'AwaitingPayment';

    /**
     * Sold listings that have not yet been marked as
     * Shipped in My eBay.
     **/
    const CodeType_AwaitingShipment = 'AwaitingShipment';

    /**
     * Sold listings that have been marked as
     * Paid and Shipped in My eBay.
     **/
    const CodeType_PaidAndShipped = 'PaidAndShipped';

    /**
     * Reserved for future or internal use.
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
     * @return OrderStatusFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param OrderStatusFilterCodeType|null $value
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
    public function isAll()
    {
        return $this->_value === self::CodeType_All;
    }

    /**
     * @return bool
     */
    public function isAwaitingPayment()
    {
        return $this->_value === self::CodeType_AwaitingPayment;
    }

    /**
     * @return bool
     */
    public function isAwaitingShipment()
    {
        return $this->_value === self::CodeType_AwaitingShipment;
    }

    /**
     * @return bool
     */
    public function isPaidAndShipped()
    {
        return $this->_value === self::CodeType_PaidAndShipped;
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

OrderStatusFilterCodeType::_register();
