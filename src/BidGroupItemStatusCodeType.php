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
 * This enumerated type is deprecated.
 **/
class BidGroupItemStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'BidGroupItemStatusCodeType';
    const NAME = 'BidGroupItemStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_CurrentBid = 'CurrentBid';

    /**
     * This value is not used.
     **/
    const CodeType_Cancelled = 'Cancelled';

    /**
     * This value is not used.
     **/
    const CodeType_Pending = 'Pending';

    /**
     * This value is not used.
     **/
    const CodeType_Skipped = 'Skipped';

    /**
     * This value is not used.
     **/
    const CodeType_Ended = 'Ended';

    /**
     * This value is not used.
     **/
    const CodeType_Won = 'Won';

    /**
     * This value is not used.
     **/
    const CodeType_GroupClosed = 'GroupClosed';

    /**
     * This value is not used.
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
     * @return BidGroupItemStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BidGroupItemStatusCodeType|null $value
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
    public function isCurrentBid()
    {
        return $this->_value === self::CodeType_CurrentBid;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->_value === self::CodeType_Cancelled;
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
    public function isSkipped()
    {
        return $this->_value === self::CodeType_Skipped;
    }

    /**
     * @return bool
     */
    public function isEnded()
    {
        return $this->_value === self::CodeType_Ended;
    }

    /**
     * @return bool
     */
    public function isWon()
    {
        return $this->_value === self::CodeType_Won;
    }

    /**
     * @return bool
     */
    public function isGroupClosed()
    {
        return $this->_value === self::CodeType_GroupClosed;
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

BidGroupItemStatusCodeType::_register();
