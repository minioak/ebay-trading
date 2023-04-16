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
 * This enumerated type defines the collection methods that are used to collect either 'Collect and Remit' sales tax
 * in the US, or 'Good and Services' tax in Australia and New Zealand.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * Although the
 * CollectionMethod
 * field is returned for orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the
 * CollectionMethod
 * field and
 * CollectionMethodCodeType
 * are currently not applicable.
 * </span>
 **/
class CollectionMethodCodeType extends EbatNs_EnumType
{
    const TAG = 'CollectionMethodCodeType';
    const NAME = 'CollectionMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <span class="tablenote">
     * Note:
     * This value is for future use.
     * </span>
     **/
    const CodeType_INVOICE = 'INVOICE';

    /**
     * This value is always returned, but because the
     * CollectionMethod
     * field and
     * CollectionMethodCodeType
     * are not currently applicable, this value does not have any purpose at this time.
     **/
    const CodeType_NET = 'NET';
    
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
     * @return CollectionMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CollectionMethodCodeType|null $value
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
    public function isINVOICE()
    {
        return $this->_value === self::CodeType_INVOICE;
    }

    /**
     * @return bool
     */
    public function isNET()
    {
        return $this->_value === self::CodeType_NET;
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

CollectionMethodCodeType::_register();
